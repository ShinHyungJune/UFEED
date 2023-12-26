<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Firewall;
use App\Models\FirewallApi;
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
            "ipses" => $firewall->getIps(),
            "malwares" => $firewall->getAntiMalware()
        ];

        return $this->respondSuccessfully($result);
    }

    public function ipsIndex(Request $request)
    {
        $firewallApi = new FirewallApi();

        $items = $firewallApi->ipsIndex();

        return $this->respondSuccessfully($items);
    }
    public function ipsStore(Request $request)
    {
        $request->validate([
            "name" => "required",
            "type" => "required",
            "ip4_address" => "required",
            "ip4_prefix_host" => "required",
            "interface" => "required",
            "description" => "required",
            "zone" => "required",
        ]);

        $firewallApi = new FirewallApi();

        $firewallApi->ipsStore($request->all());

        return $this->respondSuccessfully();
    }
    public function ipsDestroy(Request $request)
    {
        $request->validate([
            "name" => "required",
        ]);

        $firewallApi = new FirewallApi();

        $firewallApi->ipsDestroy($request->all());

        return $this->respondSuccessfully();
    }
    public function natsIndex(Request $request)
    {
        $firewallApi = new FirewallApi();

        $items = $firewallApi->natsIndex();

        return $this->respondSuccessfully($items);
    }
    public function natsStore(Request $request)
    {
        $request->validate([
            "enable" => "required",
            "before_source_ip4_object" => "required",
            "before_destination_ip4_object" => "required",
            "before_service_object" => "required",
            "after_source_ip4_object" => "required",
            "after_destination_ip4_object" => "required",
            "after_sevice_object" => "required",
            "rule_number" => "required",
            "description" => "required",
            "reverse" => "required",
            "nat_id" => "required",
            "before_source_ip4_address" => "required",
            "before_destination_ip4_address" => "required",
            "after_source_ip4_address" => "required",
            "after_destination_ip4_address" => "required",
            "dynamic_blacklist_enable" => "required",
            "source_port_reuse_enable" => "required",
            "apply_flag" => "required",
        ]);

        $firewallApi = new FirewallApi();

        $firewallApi->natsStore($request->all());

        return $this->respondSuccessfully();
    }
    public function natsDestroy(Request $request)
    {
        $request->validate([
            "index" => "required",
        ]);

        $firewallApi = new FirewallApi();

        $firewallApi->natsDestroy($request->all());

        return $this->respondSuccessfully();
    }

}
