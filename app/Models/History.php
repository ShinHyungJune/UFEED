<?php

namespace App\Models;

use App\Enums\DeviceStatus;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class History extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    public function device()
    {
        return $this->belongsTo(Device::class);
    }

    public static function getLogMessages()
    {
        $response = Http::withoutVerifying()->get("http://118.130.110.156:8080/api/table.json", [
            "page" => 1,
            "username" => "prtgadmin",
            "password" => "hgs_1qa@WS",
            "content" => "messages",
            // "content" => "logs",
            // "content" => "messages",
            // "content" => "sensors",
            "columns" => "device,sensor, parent, type, objid, lastvalue, name,message,status, group,datetime, uptimetime,uptime,knowntime",
            "filter_type" => "",
            // "filter_type" => "SNMP Memory",
            // "filter_type" => "ping",
            // "filter_type" => "snmptraffic",
        ]);

        // ping, snmptraffic

        $body = $response->json();

        return $body["messages"];
    }

    public static function record()
    {
        \App\Models\History::where("created_at", "<=", \Carbon\Carbon::now()->subYears(1))->delete();

        $response = Http::withoutVerifying()->get("http:/localhost:8080/api/table.json", [
            "page" => 1,
            "username" => "prtgadmin",
            "password" => "hgs_1qa@WS",
            "content" => "",
            "columns" => "device,sensor, objid, lastvalue, name,datetime,message,status",
            "filter_type" => "snmptraffic",
        ]);

        $body = $response->json();

        if($body){
            $items = $body[""];

            foreach($items as $item){
                $device = \App\Models\Device::where("title", $item["device_raw"])->first();

                if($device) {
                    $history = \App\Models\History::create([
                        "device_id" => $device->id,
                        "message" => $item["message_raw"],
                        "status" => $item["status"],
                        "byte" => floor((float) $item["lastvalue_raw"]),
                        "sensor" => $item["sensor_raw"],
                        "logged_at" => Carbon::make($items[0]["datetime"]),
                    ]);
                }
            }

            /*
            $devices = \App\Models\Device::get();

            foreach($devices as $device){
                $latestHistory = $device->histories()->latest()->whereIn("status", \App\Enums\DeviceStatus::getOptions())->first();

                if($latestHistory) {
                    $status = $latestHistory->status;
                    if($status == DeviceStatus::PAUSED || $status == "Paused")
                        $latestHistory->status = "Down";

                    $device->update(["status" => $latestHistory->status]);
                }
            }
            */
        }
    }
}
