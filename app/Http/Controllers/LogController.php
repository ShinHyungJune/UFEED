<?php

namespace App\Http\Controllers;

use App\Models\IdentifyLog;
use App\Models\Message;
use App\Models\UserLog;

class LogController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function deviceStatus()
    {
        $items = Message::orderBy("datetime", "desc")->take(400)->get();

        return view('user.main-menu.log.log_index', [
            "items" => $items,
        ]);
    }

    public function userLogs()
    {
        $items = UserLog::orderByDesc('id')->take(400)->get();
        return view('user.main-menu.log.user_log_index')->with('items', $items);
    }

    public function inventoryLog()
    {
        $items = IdentifyLog::with(['hardware', 'software'])->orderByDesc('id')->take(5)->get();
        return view('user.main-menu.log.inventory_log_index')->with('items', $items);
    }
}
