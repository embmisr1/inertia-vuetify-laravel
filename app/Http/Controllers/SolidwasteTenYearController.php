<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\DB;
use App\Models\SolidwasteTenYear;
use App\Models\SolidwasteTenYearMonitoring;

class SolidwasteTenYearController extends Controller
{

    public function create(request $request){
        $id = $request->id;
        $lce_info = DB::table('tbl_solidwaste_ten_year as a')
        ->select('a.*', 'c.provDesc', 'd.citymunDesc', 'e.brgyDesc', 'd.districtCode')
        ->leftjoin('tbl_solidwaste_lce as b','a.lce_FK','=','b.id')
        ->leftjoin('ref_province as c','b.lce_province_FK','=','c.PK_province_ID')
        ->leftjoin('ref_citymun as d','b.lce_municipality_FK','=','d.PK_citymun_ID')
        ->leftjoin('ref_brgy as e','b.lce_barangay_FK','=','e.PK_brgy_ID')
        ->where('id',$id)
        ->get();
        return Inertia::render("pages/swm/Form/TenYearForm",[
            'lce_info'=>$lce_info,
        ]);
    }

    public function ten_year_edit(request $request){
        $id = $request->id;
        $ten_year_edit = DB::table('tbl_solidwaste_ten_year as a')
        ->select('a.*', 'c.provDesc', 'd.citymunDesc', 'e.brgyDesc', 'd.districtCode')
        ->leftjoin('tbl_solidwaste_lce as b','a.lce_FK','=','b.id')
        ->leftjoin('ref_province as c','b.lce_province_FK','=','c.PK_province_ID')
        ->leftjoin('ref_citymun as d','b.lce_municipality_FK','=','d.PK_citymun_ID')
        ->leftjoin('ref_brgy as e','b.lce_barangay_FK','=','e.PK_brgy_ID')
        ->where('a.id',$id)->get();
        $ten_year_monitoring_list = SolidwasteTenYearMonitoring::where('ten_year_FK',$id)->get();
        return Inertia::render("pages/swm/Form/TenYearForm",[
            'ten_year_edit'=>$ten_year_edit,
            'ten_year_monitoring_list'=>$ten_year_monitoring_list,
        ]);
    }

    public function ten_year_register_process(request $request){
        $query = new SolidwasteTenYear();
        $query->ten_year_planning_period = $request->ten_year_planning_period;
        $query->ten_year_year_approved = $request->ten_year_year_approved;
        $query->ten_year_number = $request->ten_year_number;
        $query->ten_year_file = $request->ten_year_file;
        $query->ten_year_copy_plan = $request->ten_year_copy_plan;
        $query->ten_year_copy_resolution = $request->ten_year_copy_resolution;
        $query->ten_year_copy_form = $request->ten_year_copy_form;
        $query->lce_FK = $request->lce_FK;
        $query->save();
        return back()->with("message","10 Year Created");
    }

    public function ten_year_update_process(request $request){
        $query = SolidwasteTenYear::find($request->id);
        $query->ten_year_planning_period = $request->ten_year_planning_period;
        $query->ten_year_year_approved = $request->ten_year_year_approved;
        $query->ten_year_number = $request->ten_year_number;
        $query->ten_year_file = $request->ten_year_file;
        $query->ten_year_copy_plan = $request->ten_year_copy_plan;
        $query->ten_year_copy_resolution = $request->ten_year_copy_resolution;
        $query->ten_year_copy_form = $request->ten_year_copy_form;
        $query->lce_FK = $request->lce_FK;
        $query->save();
        return back()->with("message","10 Year Updated");
    }
    public function ten_year_delete(request $request){
        $ten_year_delete = SolidwasteTenYear::find($request->id);
        $ten_year_delete->delete();
        return back()->with("message","10 Year Deleted");
    }
}
