<?php

namespace App\Http\Controllers;

class DashBoardController extends Controller
{
    public function index()
    {
        return view('user.dash-board.dashboard_index');
    }

    public function show()
    {
        return view('user.dash-board.dashboard_detail');
    }
}
