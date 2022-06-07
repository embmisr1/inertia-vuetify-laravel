<?php

namespace App\Http\Controllers;

use App\Filters\PSIC\SubClassFilter;
use App\Models\PsicSubClass;
use App\Http\Requests\StorePsicSubClassRequest;
use App\Http\Resources\PsicSubClassResource;
use Illuminate\Support\Facades\Request;
use Inertia\Inertia;

class PsicSubClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render("pages/psic/subclass", [
            "filters" => Request::all(
                "id",
                "psic_subclass_desc",
                "psic_class_desc",
            ),
            "data" => PsicSubClassResource::collection((new SubClassFilter)->get()), //PsicClassResource::collection((new ClassFilter)->get()),

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
     * @param  \App\Http\Requests\StorePsicSubClassRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePsicSubClassRequest $request)
    {
        try {
            $input = $request->validated();

            PsicSubClass::firstOrCreate($input);

            return back()->with("message", "Sub Class Created");
        } catch (\Throwable $th) {
            return back()->withErrors(["error_message" => "Form Error"]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PsicSubClass  $PsicSubClass
     * @return \Illuminate\Http\Response
     */
    public function show(PsicSubClass $PsicSubClass)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PsicSubClass  $PsicSubClass
     * @return \Illuminate\Http\Response
     */
    public function edit(PsicSubClass $PsicSubClass)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\StorePsicSubClassRequest  $request
     * @param  \App\Models\PsicSubClass  $PsicSubClass
     * @return \Illuminate\Http\Response
     */
    public function update(StorePsicSubClassRequest $request, PsicSubClass $psicSubClass)
    {
        try {
            $input = $request->validated();

            $psicSubClass->update($input);

            return back()->with("message", "Sub Class Updated");
        } catch (\Throwable $th) {
            return back()->withErrors(["error_message" => "Form Error"]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PsicSubClass  $PsicSubClass
     * @return \Illuminate\Http\Response
     */
    public function destroy(PsicSubClass $psicSubClass)
    {
        $psicSubClass->delete();

        return back()->with("message", "Sub Class Deleted");
    }
}
