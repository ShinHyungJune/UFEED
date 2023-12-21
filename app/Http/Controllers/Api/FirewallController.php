<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Firewall;
use Illuminate\Http\Request;

class FirewallController extends ApiController
{
    public function dashboard()
    {
        $firewall = new Firewall();

        $result = [
            "count_malware" => $firewall->getCountMalware(),
            "count_ddos" => $firewall->getCountDdos(),
            "count_ips" => $firewall->getCountIps(),
            "traffics" => $firewall->getTopTraffices(),
            "cncs" => $firewall->getCnc(),
        ];

        return $this->respondSuccessfully($result);
    }
}
