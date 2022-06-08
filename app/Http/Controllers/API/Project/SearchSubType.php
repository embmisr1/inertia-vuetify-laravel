<?php

namespace App\Http\Controllers\API\Project;

use App\Http\Controllers\Controller;
use App\Models\ProjectSubType;
use Illuminate\Http\Request;

class SearchSubType extends Controller
{
    public function __invoke()
    {
        return response()->json(
            [
                "data" => ProjectSubType::select(["id","project_subtype_desc"])->where("project_subtype_desc", 'LIKE', '%' . request('project_subtype_desc') . '%')->get(),
            ]
        );
    }
}
