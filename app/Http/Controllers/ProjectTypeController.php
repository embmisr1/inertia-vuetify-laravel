<?php

namespace App\Http\Controllers;

use App\Models\ProjectType;
use App\Http\Requests\StoreProjectTypeRequest;
use App\Http\Resources\Project\TypeResource;
use Illuminate\Support\Facades\Request;
use Inertia\Inertia;

class ProjectTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render("pages/project/types", [
            "filters" => Request::all(
                "id",
                "project_type_desc"
            ),
            "data" => TypeResource::collection(ProjectType::select(['id', 'project_type_desc'])
                ->when(request('project_type_desc'), function ($query) {
                    $query->where('project_type_desc', 'LIKE', "%" . request('project_type_desc') . "%");
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
     * @param  \App\Http\Requests\StoreProjectTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectTypeRequest $request)
    {
        $input = $request->validated();
        ProjectType::firstOrCreate($input);

        return back()->with("message", "Project Type Created");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProjectType  $ProjectType
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectType $ProjectType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProjectType  $ProjectType
     * @return \Illuminate\Http\Response
     */
    public function edit(ProjectType $ProjectType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\StoreProjectTypeRequest  $request
     * @param  \App\Models\ProjectType  $ProjectType
     * @return \Illuminate\Http\Response
     */
    public function update(StoreProjectTypeRequest $request, ProjectType $projectType)
    {
        $input = $request->validated();
        $projectType->update($input);
        return back()->with("message", "Project Type Updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProjectType  $ProjectType
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectType $projectType)
    {
        $projectType->delete();
        return back()->with("message", "Project Type Deleted");
    }
}
