<?php

namespace App\Http\Controllers;

class FirewallController extends Controller
{
    public function policy()
    {
        return view('main-menu.firewall.ahnlab_IPv4');
    }

    public function nat()
    {
        return view('main-menu.firewall.ahnlab_IBNAT');
    }
}
