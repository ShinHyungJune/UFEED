<?php

namespace App\Http\Controllers;

use App\Models\History;
use App\Models\Message;

class LogController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $items = Message::orderBy("datetime", "desc")->take(400)->get();

        return view('user.main-menu.log.log_index', [
            "items" => $items,
        ]);
    }
}
