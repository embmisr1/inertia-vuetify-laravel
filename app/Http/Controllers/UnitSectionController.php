<?php

namespace App\Http\Controllers;

use App\Filters\DivisionFilter;
use App\Filters\UnitSectionFilter;
use App\Http\Requests\UnitSectionRequest;
use App\Http\Resources\DivisionResource;
use App\Http\Resources\UnitSectionResource;
use Inertia\Inertia;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request;
use App\Models\UnitSection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redirect;

class UnitSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return  Inertia::render("pages/unit_section/",[
            'filters' => Request::all('name','division'),
            "unit_section_data"=> UnitSectionResource::collection((new UnitSectionFilter)->get()),
            "division_data"=>  Cache::remember('division_all', 60, function () {
                return DivisionResource::collection((new  DivisionFilter )->get());
            }),

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UnitSectionRequest $request)
    {
        $input = $request->validated();

        UnitSection::create($input);

        return Redirect::back()->with('success', 'Unit Section Created Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UnitSectionRequest $request, UnitSection $unit_section)
    {
        $input = $request->validated();

        $unit_section->update($input);
        return Redirect::back()->with('success', 'Unit Section Updated Successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(UnitSection $unit_section)
    {
        $unit_section->delete();

        return Redirect::back()->with('success', 'Unit Section Deleted Successfully.');
    }
}
