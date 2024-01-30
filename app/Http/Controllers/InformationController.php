<?php

namespace App\Http\Controllers;

class InformationController extends Controller
{
    public function hardware()
    {
        return view('user.information.identify.identify_hardware');
    }

    public function software()
    {
        return view('user.information.identify.identify_software');
    }

    public function safeGuard()
    {
        return view('user.information.protect.protect_safeguard');
    }

    public function securityZone()
    {
        return view('user.information.protect.protect_security_zone');
    }

    public function accessControl()
    {
        return view('user.information.protect.protect_access_control');
    }

    public function wireless()
    {
        return view('user.information.protect.protect_wireleess');
    }

    public function mobilePortable()
    {
        return view('user.information.protect.protect_mobile_portable');
    }
}
