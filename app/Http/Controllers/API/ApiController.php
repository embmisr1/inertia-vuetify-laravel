<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Barangay;
use App\Models\Municipality;
use App\Models\PsicClass;
use App\Models\PsicSubClass;
use App\Models\ProjectSubType;
use App\Models\ProjectSpecificType;
use App\Models\ProjectSpecificSubType;
use App\Models\Province;

class ApiController extends Controller
{
    public function region_dropdown($id = "01")
    {
        $query = Province::where('regCode', $id)->get();
        return response()->json($query);
    }
    public function province_dropdown($id)
    {
        $query = Municipality::where('provCode', $id)->get();
        return response()->json($query);
    }

    public function municipality_dropdown($id)
    {
        $query = Barangay::where('citymunCode', $id)->get();
        return response()->json($query);
    }

    public function psic_group_dropdown($id)
    {
        $query = PsicClass::where('psic_group_FK', $id)->get();
        return response()->json($query);
    }

    public function psic_class_dropdown($id)
    {
        $query = PsicSubClass::where('psic_class_FK', $id)->get();
        return response()->json($query);
    }

    public function project_type_dropdown($id)
    {
        $query = ProjectSubType::where('project_type_FK', $id)->get();
        return response()->json($query);
    }

    public function project_subtype_dropdown($id)
    {
        $query = ProjectSpecificType::where('project_subtype_FK', $id)->get();
        return response()->json($query);
    }

    public function project_specific_type_dropdown($id)
    {
        $query = ProjectSpecificSubType::where('project_specific_type_FK', $id)->get();
        return response()->json($query);
    }
}
