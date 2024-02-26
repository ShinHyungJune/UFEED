<?php

namespace App\Http\Controllers;

use App\Http\Requests\HardwareRequest;
use App\Models\Category;
use App\Models\Hardware;
use App\Models\System;
use Illuminate\Http\Request;

class HardwareController extends Controller
{
    public function index()
    {
        $hardwares = Hardware::with('system.category')->get()->groupBy('system.category.name');
        return view('user.information.identify.identify_hardware')->with('hardwares', $hardwares);
    }

    public function create()
    {
        $categories = Category::get();
        return view('user.information.identify.identify_hardware_add')->with('categories', $categories);
    }

    public function store(HardwareRequest $request)
    {
        Hardware::create($request->validated());
        return redirect()->route('hardware.index');
    }

    public function edit(Hardware $hardware)
    {
        $categories = Category::get();
        $systems = System::whereCategoryId($hardware->system->category_id)->get();
        return view('user.information.identify.identify_hardware_edit')->with('hardware', $hardware)
            ->with('categories', $categories)->with('systems', $systems);
    }

    public function update(HardwareRequest $request, Hardware $hardware)
    {
        $hardware->update($request->validated());

        return redirect()->route('hardware.index');
    }

    public function destroy(Request $request)
    {
        Hardware::destroy($request->input('id'));
        return redirect()->route('hardware.index');
    }

    public function systems(Request $request)
    {
        $systems = System::whereCategoryId($request->input('category_id'))->get();
        return response($systems);
    }
}
