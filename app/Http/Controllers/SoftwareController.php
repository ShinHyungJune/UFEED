<?php

namespace App\Http\Controllers;

use App\Http\Requests\SoftwareRequest;
use App\Models\Software;

class SoftwareController extends Controller
{
    public function index()
    {
        Software::all();
        return view('user.information.identify.identify_software');
    }

    public function store(SoftwareRequest $request)
    {
        return Software::create($request->validated());
    }

    public function show(Software $software)
    {
        return $software;
    }

    public function update(SoftwareRequest $request, Software $software)
    {
        $software->update($request->validated());

        return $software;
    }

    public function destroy(Software $software)
    {
        $software->delete();

        return response()->json();
    }
}
