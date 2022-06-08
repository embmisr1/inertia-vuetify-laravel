<?php

namespace App\Http\Controllers\API\Project;

use App\Http\Controllers\Controller;
use App\Models\ProjectSpecificType;
use Illuminate\Http\Request;

class SearchSpecificType extends Controller
{
    public function __invoke()
    {
        return response()->json(
            [
                "data" => ProjectSpecificType::select(["id","project_specific_type_desc"])->where("project_specific_type_desc", 'LIKE', '%' . request('project_specific_type_desc') . '%')->get(),
            ]
        );
    }
}
