<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Barangay;
use App\Models\Municipality;
use App\Models\PsicClass;
use App\Models\PsicSubClass;

class ApiController extends Controller
{
    public function province_dropdown($id){
        $query = Municipality::where('provCode', $id)->get();
        return response()->json($query);
    }
    
    public function municipality_dropdown($id){
        $query = Barangay::where('citymunCode',$id)->get();
        return response()->json($query);
    }
    
    public function psic_group_dropdown($id){
        $query = PsicClass::where('psic_group_FK',$id)->get();
        return response()->json($query);
    }

    public function psic_class_dropdown($id){
        $query = PsicSubClass::where('psic_class_FK',$id)->get();
        return response()->json($query);
    }
}
