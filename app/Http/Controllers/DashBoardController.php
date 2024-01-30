<?php

namespace App\Http\Controllers;

class DashBoardController extends Controller
{
    public function index()
    {
        return view('dash-board.dashboard_index');
    }

    public function show()
    {
        return view('dash-board.dashboard_detail');
    }
}
