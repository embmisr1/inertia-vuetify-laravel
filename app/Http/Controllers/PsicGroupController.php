<?php

namespace App\Http\Controllers;

use App\Models\PsicGroup;
use App\Http\Requests\StorePsicGroupRequest;
use App\Http\Resources\PsicGroupResource;
use Inertia\Inertia;
use App\Filters\PSIC\GroupFilter;
use Illuminate\Support\Facades\Request;

class PsicGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render("pages/psic/group", [
            "filters"=>Request::all(
                "id","psic_group_desc"
            ),
            "data" => PsicGroupResource::collection((new GroupFilter)->get()),
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
     * @param  \App\Http\Requests\StorePsicGroupRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePsicGroupRequest $request)
    {
        $input = $request->validated();
        PsicGroup::firstOrCreate($input);

        return back()->with("message","Group Created");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PsicGroup  $psicGroup
     * @return \Illuminate\Http\Response
     */
    public function show(PsicGroup $psicGroup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PsicGroup  $psicGroup
     * @return \Illuminate\Http\Response
     */
    public function edit(PsicGroup $psicGroup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\StorePsicGroupRequest  $request
     * @param  \App\Models\PsicGroup  $psicGroup
     * @return \Illuminate\Http\Response
     */
    public function update(StorePsicGroupRequest $request, PsicGroup $psicGroup)
    {
        $input = $request->validated();
        $psicGroup->update($input);

        return back()->with("message","Group Updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PsicGroup  $psicGroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(PsicGroup $psicGroup)
    {
        $psicGroup->delete();
        return back()->with("message","Group Deleted");
    }
}
