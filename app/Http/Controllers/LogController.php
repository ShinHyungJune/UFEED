<?php

namespace App\Http\Controllers;

use App\Models\History;

class LogController extends Controller
{
    public function index()
    {
        $history = new History();

        $items = $history->getLogMessages();

        return view('user.main-menu.log.log_index', [
            "items" => $items,
        ]);
    }
}
