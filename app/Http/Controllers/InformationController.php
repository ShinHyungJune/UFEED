<?php

namespace App\Http\Controllers;

class InformationController extends Controller
{
    public function hardware()
    {
        return view('information.identify.identify_hardware');
    }

    public function software()
    {
        return view('information.identify.identify_software');
    }

    public function safeGuard()
    {
        return view('information.protect.protect_safeguard');
    }

    public function securityZone()
    {
        return view('information.protect.protect_security_zone');
    }

    public function accessControl()
    {
        return view('information.protect.protect_access_control');
    }

    public function wireless()
    {
        return view('information.protect.protect_wireleess');
    }

    public function mobilePortable()
    {
        return view('information.protect.protect_mobile_portable');
    }
}
