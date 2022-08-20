<?php

namespace App\Http\Controllers\API\PSIC;

use App\Http\Controllers\Controller;
use App\Models\PsicGroup;
use Illuminate\Http\Request;

class SearchGroup extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {

        // return request("psic_group_desc");
        return response()->json(
            [
                "data" => PsicGroup::select(["id","psic_group_desc"])->where("psic_group_desc", 'LIKE', '%' . request('psic_group_desc') . '%')->get(),
            ]
        );
    }
}
