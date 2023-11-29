<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class NacController extends ApiController
{
    public function nodes(Request $request)
    {
        $client = new Client([
            "verify" => false
        ]);

        $response = Http::withoutVerifying()->get("https://nac.iscope.kr:8443/mc2/rest/nodes?page=1&pageSize=30&view=node&nid=All&apiKey=f9c61147-737e-4b8d-8210-0fc7b2c19751");

        $body = $response->json();

        return $this->respondSuccessfully($body);
    }

    public function ips(Request $request)
    {
        $client = new Client([
            "verify" => false
        ]);

        $response = Http::withoutVerifying()->get("https://nac.iscope.kr:8443/mc2/rest/nodes?page=1&pageSize=30&view=node&nid=All&ipEqual=false&ip=192.168.0.31&macEqual=false&apiKey=f9c61147-737e-4b8d-8210-0fc7b2c19751");

        $body = $response->json();

        return $this->respondSuccessfully($body);
    }

    public function wlan(Request $request)
    {
        $client = new Client([
            "verify" => false
        ]);

        $response = Http::withoutVerifying()->get("https://nac.iscope.kr:8443/mc2/rest/aps?page=1&pageSize=30&dupDetect=false&apiKey=f9c61147-737e-4b8d-8210-0fc7b2c19751");

        $body = $response->json();

        return $this->respondSuccessfully($body);
    }

    public function log(Request $request)
    {
        $client = new Client([
            "verify" => false
        ]);

        $response = Http::withoutVerifying()->get("https://nac.iscope.kr:8443/mc2/rest/logs?page=1&pageSize=30&logschema=auditlog&periodType=custom&apiKey=f9c61147-737e-4b8d-8210-0fc7b2c19751");

        $body = $response->json();

        return $this->respondSuccessfully($body);
    }

    public function condition(Request $request)
    {
        $client = new Client([
            "verify" => false
        ]);

        $response = Http::withoutVerifying()->get("https://nac.iscope.kr:8443/mc2/rest/systems/e2c16ea8-a292-103c-8001-0cc47a736510/cpu&apiKey=f9c61147-737e-4b8d-8210-0fc7b2c19751");

        $body = $response->json();

        return $this->respondSuccessfully($body);
    }

}
