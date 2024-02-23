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
        $hardwares = Hardware::all();
        return view('user.information.identify.identify_hardware');
    }

    public function create()
    {
        $categories = Category::get();
        return view('user.information.identify.identify_hardware_add')->with('categories', $categories);
    }

    public function store(HardwareRequest $request)
    {
        $validated = $request->validated();
        foreach ($validated as $key => $value) {
            if ($value === null) {
                $validated[$key] = '-';
            }
        }
        Hardware::create($validated);
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

    public function destroy(Hardware $hardware)
    {
        $hardware->delete();

        return response()->json();
    }

    public function systems(Request $request)
    {
        $systems = System::whereCategoryId($request->input('category_id'))->get();
        return response($systems);
    }
}
