<?php

namespace App\Http\Controllers;

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
        $topAttack = $firewall->getDashBoardTopAttack();
        $topVictim = $firewall->getDashBoardTopVictim();
        $topAttacker = $firewall->getDashBoardTopAttacker();
        $topSource = $firewall->getDashBoardTopSource();
        $topDestination = $firewall->getDashBoardTopDestination();

//        dd($topAttack['count'], $topAttack["results"][0], $topVictim['count'], $topVictim["results"][0], $topAttacker['count'], $topAttacker["results"][0], $topSource['count'], $topSource["results"][0], $topDestination['count'], $topDestination["results"][0]);
        return view('user.dash-board.security_monitoring');
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
