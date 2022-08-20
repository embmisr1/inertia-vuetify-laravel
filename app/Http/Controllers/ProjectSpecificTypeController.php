<?php

namespace App\Http\Controllers;

use App\Models\ProjectSpecificType;
use App\Http\Requests\StoreProjectSpecificTypeRequest;
use App\Http\Resources\Project\SpecificTypeResource;
use Illuminate\Support\Facades\Request;
use Inertia\Inertia;

class ProjectSpecificTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render("pages/project/specifictypes", [
            "filters" => Request::all(
                "id",
                "project_specific_type_desc",
                "project_subtype_desc"
            ),
            "data" => SpecificTypeResource::collection(ProjectSpecificType::select(['id', 'project_specific_type_desc', "project_subtype_FK"])
                ->when(request('project_specific_type_desc'), function ($query) {
                    $query->where('project_specific_type_desc', 'LIKE', "%" . request('project_specific_type_desc') . "%");
                })
                ->when(request('project_subtype_desc'), function ($query) {
                    $query->whereHas('project_subtype', function ($query) {
                        $query->where('project_subtype_desc', 'LIKE', "%" . request('project_subtype_desc') . "%");
                    });
                })
                ->orderBy(
                    request('order_by', 'created_at'), // column
                    request('direction', 'desc') // direction
                )->paginate(10),)
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
     * @param  \App\Http\Requests\StoreProjectSpecificTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectSpecificTypeRequest $request)
    {
        try {
            $input = $request->validated();

            ProjectSpecificType::firstOrCreate($input);

            return back()->with("message", "Project Specific Type Created");
        } catch (\Throwable $th) {
            return back()->withErrors(["error_message" => "Form Error"]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProjectSpecificType  $projectSpecificType
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectSpecificType $projectSpecificType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProjectSpecificType  $projectSpecificType
     * @return \Illuminate\Http\Response
     */
    public function edit(ProjectSpecificType $projectSpecificType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\StoreProjectSpecificTypeRequest  $request
     * @param  \App\Models\ProjectSpecificType  $projectSpecificType
     * @return \Illuminate\Http\Response
     */
    public function update(StoreProjectSpecificTypeRequest $request, ProjectSpecificType $projectSpecificType)
    {
        $input = $request->validated();
        $projectSpecificType->update($input);

        return back()->with("message", "Project Specific Type Updated");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProjectSpecificType  $projectSpecificType
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectSpecificType $projectSpecificType)
    {
        $projectSpecificType->delete();

        return back()->with("message", "Project Specific Type Deleted");


    }
}
