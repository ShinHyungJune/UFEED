<?php

namespace App\Models;

use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class Nac extends Model
{
    use HasFactory;

    protected $client;
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->client = new Client([
            "verify" => false
        ]);
    }

    public function blocks()
    {
        $client = new Client([
            "verify" => false
        ]);

        $response = $this->client->request('get', "https://nac.iscope.kr:8443/mc2/rest/nodes?page=1&pageSize=30&view=node&nid=All&roleid=20&ipEqual=false&macEqual=false&apiKey=f9c61147-737e-4b8d-8210-0fc7b2c19751");

        return json_decode($response->getBody()->getContents());
    }

    public function storeBlock($ip)
    {
        $response = $this->client->request('put', "https://nac.iscope.kr:8443/mc2/rest/ip/policies?&apiKey=f9c61147-737e-4b8d-8210-0fc7b2c19751",[
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json;charset=UTF-8',
            ],
            'json' => [
                [
                    "cmd" => "ipdeny",
                    "targetIP" => $ip,
                    "specifyMACs" => ["string"],
                    "extraLogInfo" => "string"
                ]
            ],
        ]);

        return json_decode($response->getBody()->getContents());
    }

    public function storeAllow($ip)
    {
        $response = $this->client->request('put', "https://nac.iscope.kr:8443/mc2/rest/ip/policies?&apiKey=f9c61147-737e-4b8d-8210-0fc7b2c19751",[
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json;charset=UTF-8',
            ],
            'json' => [
                [
                    "cmd" => "ipallow",
                    "targetIP" => $ip,
                    "specifyMACs" => ["string"],
                    "extraLogInfo" => "string"
                ]
            ],
        ]);

        return json_decode($response->getBody()->getContents());
    }

    public function allows()
    {
        $response = $this->client->request('get', "https://nac.iscope.kr:8443/mc2/rest/nodes?page=1&pageSize=30&view=node&nid=All&roleid=65500&ipEqual=false&macEqual=false&apiKey=f9c61147-737e-4b8d-8210-0fc7b2c19751");

        return json_decode($response->getBody()->getContents());
    }
}
