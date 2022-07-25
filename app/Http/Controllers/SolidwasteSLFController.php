<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\DB;
use App\Models\SWM\SLF;
use App\Models\SolidwasteLCE;
use App\Models\SolidwasteSLF;

class SolidwasteSLFController extends Controller
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
        return Inertia::render("pages/swm/Form/SLFForm",[
            'lce_info'=>$lce_info,
        ]);
    }

    public function slf_edit(request $request){
        $id = $request->id;
        $slf_edit = DB::table('tbl_solidwaste_slf as a')
        ->select('a.*', 'c.provDesc', 'd.citymunDesc', 'e.brgyDesc')
        ->leftjoin('tbl_solidwaste_lce as b','a.lce_FK','=','b.id')
        ->leftjoin('ref_province as c','b.lce_province_FK','=','c.PK_province_ID')
        ->leftjoin('ref_citymun as d','b.lce_municipality_FK','=','d.PK_citymun_ID')
        ->leftjoin('ref_brgy as e','b.lce_barangay_FK','=','e.PK_brgy_ID')
        ->where('a.id',$id)->get();
        return Inertia::render("pages/swm/Form/SLFForm",[
            'slf_edit'=>$slf_edit,
        ]);
    }

    public function slf_register_process(request $request){
        $query = new SolidwasteSLF();
        $query->slf_complete_address = $request->slf_complete_address;
        $query->slf_latitude = $request->slf_latitude;
        $query->slf_longitude = $request->slf_longitude;
        $query->slf_project_operator = $request->slf_project_operator;
        $query->slf_ecc_number = $request->slf_ecc_number;
        $query->slf_contact_person = $request->slf_contact_person;
        $query->slf_contact_number = $request->slf_contact_number;
        $query->slf_category = $request->slf_category;
        $query->slf_site_hectares = $request->slf_site_hectares;
        $query->slf_total_capacity = $request->slf_total_capacity;
        $query->slf_tons_per_day = $request->slf_tons_per_day;
        $query->slf_service_life = $request->slf_service_life;
        $query->slf_remaining_service_life = $request->slf_remaining_service_life;
        $query->slf_exceeded_capacity = $request->slf_exceeded_capacity;
        $query->slf_with_planned_extension = $request->slf_with_planned_extension;
        $query->slf_lgu_served = $request->slf_lgu_served;
        $query->slf_leachate_treatment = $request->slf_leachate_treatment;
        $query->slf_daily_soil_cover = $request->slf_daily_soil_cover;
        $query->slf_presence_of_mrf = $request->slf_presence_of_mrf;
        $query->slf_separate_cells_for_hazwaste = $request->slf_separate_cells_for_hazwaste;
        $query->slf_methane_recovery = $request->slf_methane_recovery;
        $query->slf_discharge_permit = $request->slf_discharge_permit;
        $query->slf_file = $request->slf_file;
        $query->lce_FK = $request->lce_FK;
        $query->save();
        return back()->with("message","SLF Created");
    }

    public function slf_update_process(request $request){
        $query = SolidwasteSLF::find($request->id);
        $query->slf_complete_address = $request->slf_complete_address;
        $query->slf_latitude = $request->slf_latitude;
        $query->slf_longitude = $request->slf_longitude;
        $query->slf_project_operator = $request->slf_project_operator;
        $query->slf_ecc_number = $request->slf_ecc_number;
        $query->slf_contact_person = $request->slf_contact_person;
        $query->slf_contact_number = $request->slf_contact_number;
        $query->slf_category = $request->slf_category;
        $query->slf_site_hectares = $request->slf_site_hectares;
        $query->slf_total_capacity = $request->slf_total_capacity;
        $query->slf_tons_per_day = $request->slf_tons_per_day;
        $query->slf_service_life = $request->slf_service_life;
        $query->slf_remaining_service_life = $request->slf_remaining_service_life;
        $query->slf_exceeded_capacity = $request->slf_exceeded_capacity;
        $query->slf_with_planned_extension = $request->slf_with_planned_extension;
        $query->slf_lgu_served = $request->slf_lgu_served;
        $query->slf_leachate_treatment = $request->slf_leachate_treatment;
        $query->slf_daily_soil_cover = $request->slf_daily_soil_cover;
        $query->slf_presence_of_mrf = $request->slf_presence_of_mrf;
        $query->slf_separate_cells_for_hazwaste = $request->slf_separate_cells_for_hazwaste;
        $query->slf_methane_recovery = $request->slf_methane_recovery;
        $query->slf_discharge_permit = $request->slf_discharge_permit;
        $query->slf_file = $request->slf_file;
        $query->lce_FK = $request->lce_FK;
        $query->save();
        return back()->with("message","SLF Updated");
    }
    public function slf_delete(request $request){
        $slf_delete = SolidwasteSLF::find($request->id);
        $slf_delete->delete();
        return back()->with("message","SLF Deleted");
    }
}
