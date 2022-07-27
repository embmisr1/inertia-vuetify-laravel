<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\DB;
use App\Models\SolidwasteMRF;

class SolidwasteMRFController extends Controller
{

    public function create(request $request){
        $id = $request->id;
        $lce_info = DB::table('tbl_solidwaste_lce as a')
        ->select('a.*', 'b.provDesc', 'c.citymunDesc', 'd.brgyDesc', 'c.districtCode')
        ->leftjoin('ref_province as b','a.lce_province_FK','=','b.PK_province_ID')
        ->leftjoin('ref_citymun as c','a.lce_municipality_FK','=','c.PK_citymun_ID')
        ->leftjoin('ref_brgy as d','a.lce_barangay_FK','=','d.PK_brgy_ID')
        ->where('id',$id)
        ->get();
        return Inertia::render("pages/swm/Form/MRFForm",[
            'lce_info'=>$lce_info,
        ]);
    }

    public function mrf_edit(request $request){
        $id = $request->id;
        $mrf_edit = DB::table('tbl_solidwaste_mrf as a')
        ->select('a.*', 'c.provDesc', 'd.citymunDesc', 'e.brgyDesc', 'd.districtCode')
        ->leftjoin('tbl_solidwaste_lce as b','a.lce_FK','=','b.id')
        ->leftjoin('ref_province as c','b.lce_province_FK','=','c.PK_province_ID')
        ->leftjoin('ref_citymun as d','b.lce_municipality_FK','=','d.PK_citymun_ID')
        ->leftjoin('ref_brgy as e','b.lce_barangay_FK','=','e.PK_brgy_ID')
        ->where('a.id',$id)->get();
        return Inertia::render("pages/swm/Form/MRFForm",[
            'mrf_edit'=>$mrf_edit,
        ]);
    }

    public function mrf_register_process(request $request){
        $query = new SolidwasteMRF();
        $query->mrf_emb_funded = $request->mrf_emb_funded;
        $query->mrf_latitude = $request->mrf_latitude;
        $query->mrf_longitude = $request->mrf_longitude;
        $query->mrf_status_operation = $request->mrf_status_operation;
        $query->mrf_service_area = $request->mrf_service_area;
        $query->mrf_total_waste_generation = $request->mrf_total_waste_generation;
        $query->mrf_biodegradable = $request->mrf_biodegradable;
        $query->mrf_recyclable = $request->mrf_recyclable;
        $query->mrf_special_waste = $request->mrf_special_waste;
        $query->mrf_total_waste_diverted = $request->mrf_total_waste_diverted;
        $query->mrf_number_of_waste_diverted = $request->mrf_number_of_waste_diverted;
        $query->mrf_file = $request->mrf_file;
        $query->mrf_or_rca = $request->mrf_or_rca;
        $query->lce_FK = $request->lce_FK;
        $query->save();
        return back()->with("message","MRF Created");
    }

    public function mrf_update_process(request $request){
        $query = SolidwasteMRF::find($request->id);
        $query->mrf_emb_funded = $request->mrf_emb_funded;
        $query->mrf_latitude = $request->mrf_latitude;
        $query->mrf_longitude = $request->mrf_longitude;
        $query->mrf_status_operation = $request->mrf_status_operation;
        $query->mrf_service_area = $request->mrf_service_area;
        $query->mrf_total_waste_generation = $request->mrf_total_waste_generation;
        $query->mrf_biodegradable = $request->mrf_biodegradable;
        $query->mrf_recyclable = $request->mrf_recyclable;
        $query->mrf_special_waste = $request->mrf_special_waste;
        $query->mrf_total_waste_diverted = $request->mrf_total_waste_diverted;
        $query->mrf_number_of_waste_diverted = $request->mrf_number_of_waste_diverted;
        $query->mrf_file = $request->mrf_file;
        $query->mrf_or_rca = $request->mrf_or_rca;
        $query->lce_FK = $request->lce_FK;
        $query->save();
        return back()->with("message","MRF Updated");
    }
    public function mrf_delete(request $request){
        $mrf_delete = SolidwasteMRF::find($request->id);
        $mrf_delete->delete();
        return back()->with("message","MRF Deleted");
    }
}
