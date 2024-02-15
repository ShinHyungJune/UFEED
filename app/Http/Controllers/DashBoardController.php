<?php

namespace App\Http\Controllers;

use App\Models\Device;
use App\Models\Firewall;

class DashBoardController extends Controller
{
    public function index()
    {
        return view('user.dash-board.dashboard_index');
    }

    public function securityMonitoring()
    {
        $firewall = new Firewall();

        $topAttacks = $firewall->getDashBoardTopAttack()["results"][0];
        $topAttacks = $this->recordPercentage($topAttacks);

        $topVictims = $firewall->getDashBoardTopVictim()["results"][0];
        $topVictims = $this->recordPercentage($topVictims);

        $topAttackers = $firewall->getDashBoardTopAttacker()["results"][0];
        $topAttackers = $this->recordPercentage($topAttackers);

        $topSources = $firewall->getDashBoardTopSource()["results"][0];
        $topSources = $this->recordPercentage($topSources);

        $topDestinations = $firewall->getDashBoardTopDestination()["results"][0];
        $topDestinations = $this->recordPercentage($topDestinations);

        $tms = [
            "count" => 0,
            "cpu_load_value" => 0,
        ];

        // TMS(device를 TMS로 지정하면 Firewall 전체 기기들 값이 넘어오는듯함)
        $firewalls = $firewall->getDashboardTms()["results"][0];

        foreach($firewalls as $firewall){
            $tms["count"] += $firewall["count"];
        }

        Device::record();

        $device = Device::where("title", "TMS")->first();

        if($device) {

            $tms["cpu_load_value"] = $device["cpu_load_value"];
        }

        return view('user.dash-board.security_monitoring', [
            "topAttacks" => $topAttacks,
            "topVictims" => $topVictims,
            "topAttackers" => $topAttackers,
            "topSources" => $topSources,
            "topDestinations" => $topDestinations,
            "tms" => $tms,
        ]);
    }

    public function recordPercentage($items)
    {
        $total = 0;

        $result = [];

        foreach($items as $item){
            $total += $item["count"];
        }

        foreach($items as $item){
            $item["percentage"] = round($item["count"] / $total * 100, 2);

            $result[] = $item;
        }

        return $result;
    }

    public function navigationZone()
    {
        return view('user.dash-board.dashboard_detail_nz');
    }

    public function communicationZone()
    {
        return view('user.dash-board.dashboard_detail_cz');
    }

    public function crewLanZone()
    {
        return view('user.dash-board.dashboard_detail_clz');
    }

    public function powerZone()
    {
        return view('user.dash-board.dashboard_detail_pz');
    }

    public function controlInstrumentationZone()
    {
        return view('user.dash-board.dashboard_detail_ciz');
    }
}
