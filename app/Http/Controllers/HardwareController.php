<?php

namespace App\Http\Controllers;

use App\Http\Requests\HardwareRequest;
use App\Models\Hardware;

class HardwareController extends Controller
{
    public function index()
    {
        $hardwares = Hardware::all();
        return view('user.information.identify.identify_hardware');
    }

    public function store(HardwareRequest $request)
    {
        return Hardware::create($request->validated());
    }

    public function show(Hardware $hardware)
    {
        return $hardware;
    }

    public function update(HardwareRequest $request, Hardware $hardware)
    {
        $hardware->update($request->validated());

        return $hardware;
    }

    public function destroy(Hardware $hardware)
    {
        $hardware->delete();

        return response()->json();
    }
}
