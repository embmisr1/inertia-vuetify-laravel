<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Models\Barangay;
use App\Models\Municipality;

use App\Models\Province;

class PlacesController extends Controller
{
    public function region_dropdown($id = "01")
    {
        $query = Province::where('regCode', $id)->get();
        return response()->json($query);
    }
    public function province_dropdown($id, $citymunDesc = "")
    {
        $query = Municipality::where('provCode', $id)->when($citymunDesc, function ($query) use ($citymunDesc) {
            $query->where('citymunDesc', 'LIKE', '%' . $citymunDesc . '%');
        })->get();
        return response()->json($query);
    }

    public function municipality_dropdown($id, $brgyDesc="")
    {
        $query = Barangay::where('citymunCode', $id)->when($brgyDesc, function ($query) use ($brgyDesc) {
            $query->where('brgyDesc', 'LIKE',  '%' . $brgyDesc . '%');
        })->get();
        return response()->json($query);
    }
}
