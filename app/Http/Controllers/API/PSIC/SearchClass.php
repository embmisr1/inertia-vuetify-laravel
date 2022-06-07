<?php

namespace App\Http\Controllers\API\PSIC;

use App\Http\Controllers\Controller;
use App\Models\PsicClass;
use Illuminate\Http\Request;

class SearchClass extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return response()->json(
            [
                "data" => PsicClass::where("psic_class_desc", 'LIKE', '%' . request('psic_class_desc') . '%')->get(),
            ]
        );
    }
}
