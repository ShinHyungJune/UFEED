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

        $firstHistory = $devices->first()
            ->histories()
            ->orderBy("logged_at", "desc")
            ->first();

        $pivotDate = Carbon::now();

        if($firstHistory)
            $pivotDate = $firstHistory->logged_at;

        $trafficDevices = Device::whereNotIn("title", ["NMS", "L3 Switch"])->get();

        foreach($trafficDevices as $device){
            $realTimeTraffics[] = [
                "device" => $device,
                "traffics" => [
                    $this->getByte($device, Carbon::make($pivotDate)->subHours(15)),
                    $this->getByte($device, Carbon::make($pivotDate)->subHours(12)),
                    $this->getByte($device, Carbon::make($pivotDate)->subHours(9)),
                    $this->getByte($device, Carbon::make($pivotDate)->subHours(6)),
                    $this->getByte($device, Carbon::make($pivotDate)->subHours(3)),
                    $this->getByte($device, Carbon::make($pivotDate)->subHours(0)),
                ]
            ];
        }

        $realTimeNotifications = History::latest()->with("device")->take(30)->get();

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
                "title" => $history->title,
                "byte" => $history->total_byte,
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
            ->whereBetween('logged_at', [ Carbon::make($datetime)->subHours(3), Carbon::make($datetime)])
            ->orderBy('byte', 'desc')
            ->first();

        return [
            "byte" => $history ? $history->byte : 0,
            "date" => Carbon::make($datetime)->format("H:i:s"),
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

    public function update(Request $request)
    {
        $device = Device::where("title", $request->title)->first();

        if($device)
            $device->update(["status" => $request->status]);

        return $this->respondSuccessfully();
    }
}
