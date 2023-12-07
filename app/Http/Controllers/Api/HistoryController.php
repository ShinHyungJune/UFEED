<?php

namespace App\Http\Controllers\Api;

use App\Enums\DeviceStatus;
use App\Http\Controllers\Controller;
use App\Models\Device;
use App\Models\History;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class HistoryController extends ApiController
{
    public function index(Request $request)
    {
        $devices = Device::get();

        $realTimeTraffics = [];
        $rankingTraffics = [];

        foreach($devices as $device){
            $latestHistory = $device->histories()->orderBy("logged_at", "desc")->first();

            if($latestHistory) {
                $realTimeTraffics[] = [
                    "device" => $device,
                    "traffics" => [
                        $this->getByte($device, Carbon::make($latestHistory->logged_at)->subMinutes(6)),
                        $this->getByte($device, Carbon::make($latestHistory->logged_at)->subMinutes(5)),
                        $this->getByte($device, Carbon::make($latestHistory->logged_at)->subMinutes(4)),
                        $this->getByte($device, Carbon::make($latestHistory->logged_at)->subMinutes(3)),
                        $this->getByte($device, Carbon::make($latestHistory->logged_at)->subMinutes(2)),
                        $this->getByte($device, Carbon::make($latestHistory->logged_at)->subMinutes(1)),
                    ]
                ];
            }
        }

        $realTimeNotifications = History::latest()->whereIn("status", [DeviceStatus::WARNING, DeviceStatus::DOWN])->take(30)->get();

        $today = Carbon::today();

        $histories = DB::table('histories')
            ->select('histories.device_id', 'devices.title', DB::raw('MAX(histories.byte) as total_byte'))
            ->join('devices', 'histories.device_id', '=', 'devices.id')
            ->whereDate('histories.created_at', $today)
            ->groupBy('histories.device_id', 'devices.title')
            ->orderByDesc('total_byte')
            ->get();

        foreach($histories as $history){
            $rankingTraffics[] = [
                "title" => $history["title"],
                "byte" => $history["total_byte"],
            ];
        }

        return $this->respondSuccessfully([
            "devices" => $devices,
            "realTimeNotifications" => $realTimeNotifications,
            "realTimeTraffics" => $realTimeTraffics,
            "rankingTraffics" => $rankingTraffics,
        ]);
    }

    public function getByte($device, $datetime)
    {
        $history = $device->histories()
            ->orderBy("logged_at", "asc")
            ->where("logged_at", ">=", Carbon::make($datetime))
            ->where("logged_at", "<=", Carbon::make($datetime)->addMinutes(1))
            ->first();

        return [
            "byte" => $history ? $history->byte : 0,
            "date" => $history ? Carbon::make($history->logged_at)->format("h:i:s") : "",
        ];
    }

    public function store(Request $request)
    {
        \App\Models\History::where("created_at", "<=", \Carbon\Carbon::now()->subWeek())->delete();

        $response = Http::withoutVerifying()->get("http://118.130.110.156:8080/api/table.json", [
            "page" => 1,
            "username" => "prtgadmin",
            "password" => "prtgadmin",
            "content" => "",
            "columns" => "device,sensor, objid, lastvalue, name,datetime,message,status",
            "filter_type" => "snmptraffic",
        ]);

        $body = $response->json();

        $items = $body[""];

        foreach($items as $item){
            $device = \App\Models\Device::where("title", $item["device_raw"])->first();

            if($device) {
                $history = \App\Models\History::create([
                    "device_id" => $device->id,
                    "message" => $item["message_raw"],
                    "status" => $item["status"],
                    "byte" => $item["lastvalue_raw"],
                    "sensor" => $item["sensor_raw"],
                    "logged_at" => Carbon::make($items[0]["datetime"]),
                ]);
            }
        }

        $devices = \App\Models\Device::get();

        foreach($devices as $device){
            $latestHistory = $device->histories()->latest()->whereIn("status", \App\Enums\DeviceStatus::getOptions())->first();

            if($latestHistory)
                $device->update(["status" => $latestHistory->status]);
        }


        return $this->respondSuccessfully();
    }
}
