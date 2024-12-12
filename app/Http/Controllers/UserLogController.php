<?php

namespace App\Http\Controllers;

use App\Models\UserLog;
use Illuminate\Support\Facades\Auth;

class UserLogController extends Controller
{
    public function log($activity)
    {
        UserLog::create([
            'user_id' => Auth::user()->id,
            'user_ids' => Auth::user()->ids,
            'ip_address' => request()->ip(),
            'activity' => $activity,
        ]);
    }

    public function failLog()
    {
        UserLog::create([
            'ip_address' => request()->ip(),
            'activity' => "login failed",
        ]);
    }
}
