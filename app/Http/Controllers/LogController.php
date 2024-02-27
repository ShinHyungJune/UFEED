<?php

namespace App\Http\Controllers;

use App\Models\History;

class LogController extends Controller
{
    public function index()
    {
        $items = History::getLogMessages();

        return view('user.main-menu.log.log_index', [
            "items" => $items,
        ]);
    }
}
