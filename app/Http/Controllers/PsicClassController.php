<?php

namespace App\Http\Controllers;

use App\Filters\PSIC\ClassFilter;
use App\Models\PsicClass;
use App\Http\Requests\StorePsicClassRequest;
use App\Http\Resources\PsicClassResource;
use Illuminate\Support\Facades\Request;
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
            "filters" => Request::all(
                "id",
                "psic_class_desc",
                "psic_group_desc"
            ),
            "data" => PsicClassResource::collection((new ClassFilter)->get()),

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

        try {
            $input = $request->validated();

            PsicClass::firstOrCreate($input);

            return back()->with("message", "Group Class Created");
        } catch (\Throwable $th) {
            return back()->withErrors(["error_message" => "Form Error"]);
        }
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
        try {
            $input = $request->validated();

            $psicClass->update($input);

            return back()->with("message", "Group Class Updated");
        } catch (\Throwable $th) {
            return back()->withErrors(["error_message" => "Form Error"]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PsicClass  $psicClass
     * @return \Illuminate\Http\Response
     */
    public function destroy(PsicClass $psicClass)
    {
        $psicClass->delete();

        return back()->with("message", "Group Class Deleted");
    }
}
