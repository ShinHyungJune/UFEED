<?php

namespace App\Http\Controllers;

class HiSecureController extends Controller
{
    public function add()
    {
        return view('user.hi-secure.HiSecure_account_add');
    }

    public function delete()
    {
        return view('user.hi-secure.HiSecure_account_del');
    }

    public function modify()
    {
        return view('user.hi-secure.HiSecure_account_modify');
    }

    public function globalSetting()
    {
        return view('user.hi-secure.HiSecure_account_setting');
    }
}
