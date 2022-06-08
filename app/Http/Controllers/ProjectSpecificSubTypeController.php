<?php

namespace App\Http\Controllers;

use App\Models\ProjectSpecificSubType;
use App\Http\Requests\StoreProjectSpecificSubTypeRequest;
use App\Http\Requests\UpdateProjectSpecificSubTypeRequest;
use App\Http\Resources\Project\SpecificSubTypeResource;
use Illuminate\Support\Facades\Request;
use Inertia\Inertia;

class ProjectSpecificSubTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render("pages/project/specificsubtypes", [
            "filters" => Request::all(
                "id",
                "project_specific_subtype_desc",
                "project_specific_type_desc"
            ),
            "data" => SpecificSubTypeResource::collection(ProjectSpecificSubType::select(['id', 'project_specific_subtype_desc', "project_specific_type_FK"])
                ->when(request('project_specific_subtype_desc'), function ($query) {
                    $query->where('project_specific_subtype_desc', 'LIKE', "%" . request('project_specific_subtype_desc') . "%");
                })
                ->when(request('project_specific_type_desc'), function ($query) {
                    $query->whereHas('project_specific_type', function ($query) {
                        $query->where('project_specific_type_desc', 'LIKE', "%" . request('project_specific_type_desc') . "%");
                    });
                })
                ->orderBy(
                    request('order_by', 'created_at'), // column
                    request('direction', 'desc') // direction
                )->paginate(1),)
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
     * @param  \App\Http\Requests\StoreProjectSpecificSubTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectSpecificSubTypeRequest $request)
    {
        try {
            $input = $request->validated();

            ProjectSpecificSubType::firstOrCreate($input);

            return back()->with("message", "Project Specific Sub Type Created");
        } catch (\Throwable $th) {
            return back()->withErrors(["error_message" => "Form Error"]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProjectSpecificSubType  $projectSpecificSubType
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectSpecificSubType $projectSpecificSubType)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProjectSpecificSubType  $projectSpecificSubType
     * @return \Illuminate\Http\Response
     */
    public function edit(ProjectSpecificSubType $projectSpecificSubType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProjectSpecificSubTypeRequest  $request
     * @param  \App\Models\ProjectSpecificSubType  $projectSpecificSubType
     * @return \Illuminate\Http\Response
     */
    public function update(StoreProjectSpecificSubTypeRequest $request, ProjectSpecificSubType $projectSpecificSubType)
    {
        $input = $request->validated();
        $projectSpecificSubType->update($input);
        return back()->with("message", "Project Specific Sub Type Updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProjectSpecificSubType  $projectSpecificSubType
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectSpecificSubType $projectSpecificSubType)
    {
        $projectSpecificSubType->delete();
        return back()->with("message", "Project Specific Sub Type Deleted");
    }
}
