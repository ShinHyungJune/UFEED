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

    protected $domain;

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->domain = config("app.env") === "local" ? "http://118.130.110.156:8080" : "http://localhost:8080";
    }

    public function device()
    {
        return $this->belongsTo(Device::class);
    }

    public function getMessages()
    {
        $response = Http::withoutVerifying()->get($this->domain . "/api/table.json", [
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

        $items = [];

        $body = $response->json();

        if($body && isset($body["messages"])){
            $items = $body["messages"];

            foreach($items as $item){

            }
        }

        return $items;
    }

    public static function record()
    {
        $history = new History();

        \App\Models\History::where("created_at", "<=", \Carbon\Carbon::now()->subYears(1))->delete();

        $response = Http::withoutVerifying()->get($history->domain."/api/table.json", [
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
        }

        $messages = $history->getMessages();

        foreach($messages as $message){
            $device = Device::where("title", $message["device_raw"])->first();

            $message["datetime"] = Carbon::make($message["datetime"])->format("Y-m-d H:i");

            Message::create([
                "device_id" => $device ? $device->id : null,
                "device_raw" => $message["device_raw"],
                "parent" => $message["parent"],
                "parent_raw" => $message["parent_raw"],
                "type" => $message["type"],
                "type_raw" => $message["type_raw"],
                "objid" => $message["objid"],
                "name" => $message["name"],
                "name_raw" => $message["name_raw"],
                "status" => $message["status"],
                "status_raw" => $message["status_raw"],
                "message" => $message["message"],
                "message_raw" => $message["message_raw"],
                "datetime" => $message["datetime"],
                "datetime_raw" => $message["datetime_raw"],
            ]);
        }
    }
}
