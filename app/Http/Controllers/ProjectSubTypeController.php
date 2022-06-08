<?php

namespace App\Http\Controllers;

use App\Models\ProjectSubType;
use App\Http\Requests\StoreProjectSubTypeRequest;
use App\Http\Resources\Project\SubTypeResource;
use Illuminate\Support\Facades\Request;
use Inertia\Inertia;

class ProjectSubTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render("pages/project/subtypes", [
            "filters" => Request::all(
                "id",
                "project_subtype_desc",
                "project_type_desc"
            ),
            "data" => SubTypeResource::collection(ProjectSubType::select(['id', 'project_subtype_desc', 'project_type_FK'])

                ->with(['project_type'])

                ->when(request('project_type_desc'), function ($query) {
                    $query->whereHas('project_type', function ($query) {
                        $query->where('project_type_desc', 'LIKE', "%" . request('project_type_desc') . "%");
                    });
                })

                ->when(request('project_subtype_desc'), function ($query) {
                    $query->where('project_subtype_desc', 'LIKE', "%" . request('project_subtype_desc') . "%");
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
     * @param  \App\Http\Requests\StoreProjectSubTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectSubTypeRequest $request)
    {
        try {
            $input = $request->validated();

            ProjectSubType::firstOrCreate($input);

            return back()->with("message", "Project Sub Type Created");
        } catch (\Throwable $th) {
            return back()->withErrors(["error_message" => "Form Error"]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProjectSubType  $projectSubType
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectSubType $projectSubType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProjectSubType  $projectSubType
     * @return \Illuminate\Http\Response
     */
    public function edit(ProjectSubType $projectSubType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\StoreProjectSubTypeRequest  $request
     * @param  \App\Models\ProjectSubType  $projectSubType
     * @return \Illuminate\Http\Response
     */
    public function update(StoreProjectSubTypeRequest $request, ProjectSubType $projectSubType)
    {
        $input = $request->validated();

            $projectSubType->update($input);

            return back()->with("message", "Project Sub Type Updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProjectSubType  $projectSubType
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectSubType $projectSubType)
    {
        $projectSubType->delete();

        return back()->with("message", "Project Sub Type Deleted");
    }
}
