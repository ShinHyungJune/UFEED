<?php

namespace App\Http\Controllers\Api;

use App\Enums\DeviceStatus;
use App\Http\Controllers\Controller;
use App\Http\Resources\AlarmResource;
use App\Models\Alarm;
use App\Models\Device;
use Illuminate\Http\Request;

class AlarmController extends ApiController
{
    public function index(Request $request)
    {
        $items = Alarm::oldest()->where("read", 0)->take(10)->get();

        Alarm::whereIn("id", $items->pluck("id"))->update(["read" => 1]);

        return AlarmResource::collection($items);
    }
    public function store(Request $request)
    {
        $data = json_decode(json_decode($request->data)->data, true);

        $device = Device::where("title", $data["device"])->first();

        $originStatus = $data["status"];

        $status = null;

        if (strpos($originStatus, "Down") !== false || strpos($originStatus, "DOWN") !== false)
            $status = DeviceStatus::DOWN;

        if (strpos($originStatus, "Up") !== false || strpos($originStatus, "UP") !== false)
            $status = DeviceStatus::UP;

        if($status)
            $device->update(["status" => $status]);

        Alarm::create([
            "device_id" => $device ? $device->id : null,
            "data" => $data,
        ]);

        return $this->respondSuccessfully();
    }
}
