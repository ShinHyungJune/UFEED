<?php

namespace App\Http\Controllers;

use App\Exports\SoftwareExport;
use App\Http\Requests\SoftwareRequest;
use App\Imports\SoftwareImport;
use App\Models\Category;
use App\Models\Software;
use App\Models\System;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class SoftwareController extends Controller
{
    public function index()
    {
        $softwares = Software::with('system.category')->get()->groupBy('system.category.name');
        return view('user.information.identify.identify_software')->with('softwares', $softwares);
    }

    public function create()
    {
        $categories = Category::get();
        return view('user.information.identify.identify_software_add')->with('categories', $categories);
    }

    public function store(SoftwareRequest $request)
    {
        Software::create($request->validated());
        return redirect()->route('software.index');
    }

    public function edit(Software $software)
    {
        $categories = Category::get();
        $systems = System::whereCategoryId($software->system->category_id)->get();
        return view('user.information.identify.identify_software_edit')->with('software', $software)
            ->with('categories', $categories)->with('systems', $systems);
    }

    public function update(SoftwareRequest $request, Software $software)
    {
        $software->update($request->validated());

        return redirect()->route('software.index');
    }

    public function destroy(Request $request)
    {
        Software::destroy($request->input('id'));

        return redirect()->route('software.index');
    }

    public function systems(Request $request)
    {
        $systems = System::whereCategoryId($request->input('category_id'))->get();
        return response($systems);
    }

    public function export()
    {
        return Excel::download(new SoftwareExport(), 'software.xlsx');
    }

    public function import(Request $request)
    {
        Software::truncate();
        Excel::import(new SoftwareImport(), $request->file('file'));
        return redirect()->route('software.index');
    }
}
