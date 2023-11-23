<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class NodeController extends ApiController
{
    public function index(Request $request)
    {
        $client = new Client([
            "verify" => false
        ]);

        $response = Http::withoutVerifying()->get("https://nac.iscope.kr:8443/mc2/rest/nodes", $request->all());

        $body = $response->json();

        return $this->respondSuccessfully($body);
    }
}
