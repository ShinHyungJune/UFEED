<?php

namespace App\Models;

use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Firewall extends Model
{
    use HasFactory;

    protected $client;



    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->client = new Client([
            "verify" => false,
            'headers' => [
                'Accept' => 'application/json',
                "viewId" => "manager",
                "apikey" => "9cca64cc626fe90094b6432172e50351"
            ],
        ]);
    }

    public function getCountMalware()
    {
        $start = Carbon::now()->subHours(24)->format('Y-m-d\TH:i:s');
        $end = Carbon::now()->format('Y-m-d\TH:i:s');

        $response = $this->client->request("get", "https://118.130.110.156:40007/restapi/tm/v1/log/search?searchType=CUSTOM&startDate={$start}&endDate={$end}&pageSize=1&pageNo=1&query=module:malwareBlock");

        return json_decode($response->getBody(), true)["objects"][0]["count"];
    }

    public function getCountIps()
    {
        $start = Carbon::now()->subHours(24)->format('Y-m-d\TH:i:s');
        $end = Carbon::now()->format('Y-m-d\TH:i:s');

        $response = $this->client->request("get", "https://118.130.110.156:40007/restapi/tm/v1/log/search?searchType=CUSTOM&startDate={$start}&endDate={$end}&pageSize=1&pageNo=1&query=module:tgIps");

        return json_decode($response->getBody(), true)["objects"][0]["count"];
    }

    public function getCountDdos()
    {
        $start = Carbon::now()->subHours(24)->format('Y-m-d\TH:i:s');
        $end = Carbon::now()->format('Y-m-d\TH:i:s');

        $response = $this->client->request("get", "https://118.130.110.156:40007/restapi/tm/v1/log/search?searchType=CUSTOM&startDate={$start}&endDate={$end}&pageSize=1&pageNo=1&query=module:tgIps and group:DDoS");

        return json_decode($response->getBody(), true)["objects"][0]["count"];
    }

    public function getTraffics($device = "FW_1")
    {
        $start = Carbon::now()->subHours(24)->format('Y-m-d\TH:i:s');
        $end = Carbon::now()->format('Y-m-d\TH:i:s');
        $response = $this->client->request("get", "https://118.130.110.156:40007/restapi/tm/v1/log/aggregate/top?searchType=CUSTOM&startDate={$start}&endDate={$end}&criteria=sip&attribute=rxbyte&query=devicename:{$device} and type:firewall&groupBySort=SUM");


        $items = json_decode($response->getBody(), true)["objects"][0]["results"][0];

        array_walk($items, function (&$item) {
            $item["avg"] = round($item["avg"] / 1024, 1);
        });

        return $items;
    }

    public function getTopTraffices()
    {
        $items = $this->getTraffics("FW_1");
        array_merge($items, $this->getTraffics("FW_2"));
        array_merge($items, $this->getTraffics("FW_3"));
        array_merge($items, $this->getTraffics("FW_4"));
        array_merge($items, $this->getTraffics("FW_5"));
        array_merge($items, $this->getTraffics("FW_6"));

        usort($items, function ($a, $b) {
            return $b["avg"] <=> $a["avg"];
        });

        $items = array_slice($items, 0, 10);

        return $items;
    }

    public function getIps()
    {
        $start = Carbon::now()->subHours(24)->format('Y-m-d\TH:i:s');
        $end = Carbon::now()->format('Y-m-d\TH:i:s');
        $attackName = "email";

        $response = $this->client->request("get", "https://118.130.110.156:40007/restapi/tm/v1/log/aggregate/top?searchType=CUSTOM&startDate={$start}&endDate={$end}&criteria={$attackName}&query=module:tgIps");

        return json_decode($response->getBody(), true);
    }

    public function getAvs()
    {
        $start = Carbon::now()->subHours(24)->format('Y-m-d\TH:i:s');
        $end = Carbon::now()->format('Y-m-d\TH:i:s');
        $device = "FW_1";

        $response = $this->client->request("get", "https://118.130.110.156:40007/restapi/tm/v1/log/aggregate/top?searchType=CUSTOM&startDate={$start}&endDate={$end}&criteria=filename,sip&query=devicename:{$device} and module:malwareblock");

        return json_decode($response->getBody(), true);
    }

    public function getCnc($device = "FW_1")
    {
        $start = Carbon::now()->subHours(24)->format('Y-m-d\TH:i:s');
        $end = Carbon::now()->format('Y-m-d\TH:i:s');

        // $response = $this->client->request("get", "https://118.130.110.156:40007/restapi/tm/v1/log/aggregate/top?searchType=CUSTOM&startDate={$start}&endDate={$end}&criteria=sip&query=module:tgCnc and devicename={$device}}");
        // $response = $this->client->request("get", "https://118.130.110.156:40007/restapi/tm/v1/log/aggregate/top?searchType=CUSTOM&startDate=2023-12-08T00:00:00&endDate=2023-12-21T23:59:59&criteria=sip,dip&query=module:tgCnc");

        return json_decode($response->getBody(), true);

    }

    public function getTopCnc()
    {
        $items = [
            [
                "title" => "FW_1",
                "count" => $this->getCnc("FW_1"),
            ],
            [
                "title" => "FW_2",
                "count" => $this->getCnc("FW_2"),
            ],
            [
                "title" => "FW_3",
                "count" => $this->getCnc("FW_3"),
            ],
            [
                "title" => "FW_4",
                "count" => $this->getCnc("FW_4"),
            ],
            [
                "title" => "FW_5",
                "count" => $this->getCnc("FW_5"),
            ],
            [
                "title" => "FW_6",
                "count" => $this->getCnc("FW_6"),
            ],
        ];


    }
}
