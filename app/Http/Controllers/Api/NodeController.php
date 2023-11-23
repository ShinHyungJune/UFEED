<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class NodeController extends ApiController
{
    public function index(Request $request)
    {
        $client = new Client();

        $response = $client->request('GET', 'https://nac.iscope.kr:8443/mc2/rest/nodes',  [
            "form_params" => $request->all()
        ]);

        $body = $response->getBody();

        // JSON 형식의 응답을 배열로 변환
        $data = json_decode($body, true);

        return $this->respondSuccessfully($data);
    }
}
