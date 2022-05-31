<?php

namespace App\Http\Controllers;

use App\Models\PsicClass;
use App\Http\Requests\StorePsicClassRequest;
use App\Http\Resources\PsicClassResource;
use Inertia\Inertia;

class PsicClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render("pages/psic/class", [
            "data" => PsicClassResource::collection(PsicClass::paginate(request("size", 10))),

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
     * @param  \App\Http\Requests\StorePsicClassRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePsicClassRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PsicClass  $psicClass
     * @return \Illuminate\Http\Response
     */
    public function show(PsicClass $psicClass)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PsicClass  $psicClass
     * @return \Illuminate\Http\Response
     */
    public function edit(PsicClass $psicClass)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\StorePsicClassRequest  $request
     * @param  \App\Models\PsicClass  $psicClass
     * @return \Illuminate\Http\Response
     */
    public function update(StorePsicClassRequest $request, PsicClass $psicClass)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PsicClass  $psicClass
     * @return \Illuminate\Http\Response
     */
    public function destroy(PsicClass $psicClass)
    {
        //
    }
}
