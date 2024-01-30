<?php

namespace App\Http\Controllers;

class NMSController extends Controller
{
    public function devices()
    {
        return view('main-menu.nms.nms_devices_all');
    }

    public function favoriteDevices()
    {
        return view('main-menu.nms.nms_devices_favorite');
    }

    public function dependencies()
    {
        return view('main-menu.nms.nms_devices_dependencies');
    }

    public function reports()
    {
        return view('main-menu.nms.nms_reports_all');
    }

    public function addReport()
    {
        return view('main-menu.nms.nms_reports_add');
    }

    public function logs()
    {
        return view('main-menu.nms.nms_logs_all');
    }
}
