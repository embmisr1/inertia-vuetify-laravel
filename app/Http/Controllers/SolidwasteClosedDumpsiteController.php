<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\DB;
use App\Models\SolidwasteLCE;
use App\Models\SolidwasteClosedDumpsite;

class SolidwasteClosedDumpsiteController extends Controller
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
        return Inertia::render("pages/swm/Form/CDForm",[
            'lce_info'=>$lce_info,
        ]);
    }

    public function cd_edit(request $request){
        $id = $request->id;
        $cd_edit = DB::table('tbl_solidwaste_closed_dumpsite as a')
        ->select('a.*', 'c.provDesc', 'd.citymunDesc', 'e.brgyDesc', 'd.districtCode')
        ->leftjoin('tbl_solidwaste_lce as b','a.lce_FK','=','b.id')
        ->leftjoin('ref_province as c','b.lce_province_FK','=','c.PK_province_ID')
        ->leftjoin('ref_citymun as d','b.lce_municipality_FK','=','d.PK_citymun_ID')
        ->leftjoin('ref_brgy as e','b.lce_barangay_FK','=','e.PK_brgy_ID')
        ->where('a.id',$id)->get();
        return Inertia::render("pages/swm/Form/CDForm",[
            'cd_edit'=>$cd_edit,
        ]);
    }

    public function cd_register_process(request $request){
        $query = new SolidwasteClosedDumpsite();
        $query->cd_total_land_area = $request->cd_total_land_area;
        $query->cd_date_monitored = $request->cd_date_monitored;
        $query->cd_site_clearing = $request->cd_site_clearing;
        $query->cd_site_grading = $request->cd_site_grading;
        $query->cd_application_maintenance = $request->cd_application_maintenance;
        $query->cd_provision_drainage = $request->cd_provision_drainage;
        $query->cd_leachate_management = $request->cd_leachate_management;
        $query->cd_gas_management = $request->cd_gas_management;
        $query->cd_fencing_security = $request->cd_fencing_security;
        $query->cd_putting_sinages = $request->cd_putting_sinages;
        $query->cd_prohibition = $request->cd_prohibition;
        $query->cd_status = $request->cd_status;
        $query->cd_remarks = $request->cd_remarks;
        $query->cd_date_closure = $request->cd_date_closure;
        $query->lce_FK = $request->lce_FK;
        $query->save();
        return back()->with("message","Closed Dumpsite Created");
    }

    public function cd_update_process(request $request){
        $query = SolidwasteClosedDumpsite::find($request->id);
        $query->cd_total_land_area = $request->cd_total_land_area;
        $query->cd_date_monitored = $request->cd_date_monitored;
        $query->cd_site_clearing = $request->cd_site_clearing;
        $query->cd_site_grading = $request->cd_site_grading;
        $query->cd_application_maintenance = $request->cd_application_maintenance;
        $query->cd_provision_drainage = $request->cd_provision_drainage;
        $query->cd_leachate_management = $request->cd_leachate_management;
        $query->cd_gas_management = $request->cd_gas_management;
        $query->cd_fencing_security = $request->cd_fencing_security;
        $query->cd_putting_sinages = $request->cd_putting_sinages;
        $query->cd_prohibition = $request->cd_prohibition;
        $query->cd_status = $request->cd_status;
        $query->cd_remarks = $request->cd_remarks;
        $query->cd_date_closure = $request->cd_date_closure;
        $query->lce_FK = $request->lce_FK;
        $query->save();
        return back()->with("message","Closed Dumpsite Updated");
    }
    public function cd_delete(request $request){
        $cd_delete = SolidwasteClosedDumpsite::find($request->id);
        $cd_delete->delete();
        return back()->with("message","Closed Dumpsite Deleted");
    }
}
