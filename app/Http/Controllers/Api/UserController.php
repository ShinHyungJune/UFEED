<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends ApiController
{
    public function store(Request $request)
    {
        $request->validate([
            "ids" => "required|string|max:500|unique:users",
            "password" => "required|string|min:6|confirmed",
            "authority" => "required|integer",
            "email" => "required|string|max:500"
        ]);

        $user = User::create($request->all());

        return $this->respondSuccessfully(UserResource::make($user));
    }
}
