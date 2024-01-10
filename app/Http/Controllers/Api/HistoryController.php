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
        $request["take"] = $request->take ?? 30;

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

        $trafficDevices = Device::whereNotIn("title", ["NMS", "L3 Switch", "TMS", "OT#1", "OT#2", "OT#3"])->get();

        foreach($trafficDevices as $device){
            $realTimeTraffics[] = [
                "device" => $device,
                "traffics" => [
                    $this->getByte($device, Carbon::make($pivotDate)->subMinutes(25)),
                    $this->getByte($device, Carbon::make($pivotDate)->subMinutes(20)),
                    $this->getByte($device, Carbon::make($pivotDate)->subMinutes(15)),
                    $this->getByte($device, Carbon::make($pivotDate)->subMinutes(10)),
                    $this->getByte($device, Carbon::make($pivotDate)->subMinutes(5)),
                    $this->getByte($device, Carbon::make($pivotDate)->subMinutes(0)),
                ]
            ];
        }

        $realTimeNotifications = History::latest()->with("device")->take($request->take)->get();

        $today = Carbon::today();

        /*$histories = DB::table('histories')
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
        */
        $rankingTraffics[] = [

        ];

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
            // ->whereBetween('logged_at', [ Carbon::make($datetime)->subHours(3), Carbon::make($datetime)])
            ->where('logged_at', ">=", Carbon::make($datetime)->setSecond(0)->setMillisecond(0))
            ->where('logged_at', "<", Carbon::make($datetime)->addMinute()->setSecond(0))
            ->orderBy('byte', 'desc')
            ->first();

        return [
            "byte" => $history ? $history->byte : 0,
            "date" => Carbon::make($datetime)->format("H:i:s"),
        ];
    }

    public function store(Request $request)
    {
        History::record();

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
