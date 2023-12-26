<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AlarmResource;
use App\Models\Alarm;
use Illuminate\Http\Request;

class AlarmController extends ApiController
{
    public function index(Request $request)
    {
        $items = Alarm::oldest()->where("read", 0)->take(10)->get();

        Alarm::whereIn("id", $items->pluck("id"))->update(["read" => 1]);

        return AlarmResource::collection($items);
    }
    public function store(Request $request)
    {
        Alarm::create([
            "data" => json_encode($request->all())
        ]);

        return $this->respondSuccessfully();
    }
}
