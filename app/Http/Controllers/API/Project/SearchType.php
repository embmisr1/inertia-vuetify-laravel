<?php

namespace App\Http\Controllers\API\Project;

use App\Http\Controllers\Controller;
use App\Models\ProjectType;
use Illuminate\Http\Request;

class SearchType extends Controller
{
    public function __invoke()
    {
        return response()->json(
            [
                "data" => ProjectType::select(["id","project_type_desc"])->where("project_type_desc", 'LIKE', '%' . request('project_type_desc') . '%')->get(),
            ]
        );
    }
}
