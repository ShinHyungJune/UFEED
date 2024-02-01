<?php

namespace App\Http\Controllers;

use function Symfony\Component\String\b;

class DashBoardController extends Controller
{
    public function index()
    {
        return view('user.dash-board.dashboard_index');
    }

    public function securityMonitoring()
    {
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
