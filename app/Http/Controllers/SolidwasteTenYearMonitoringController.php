<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\DB;
use App\Models\SolidwasteTenYearMonitoring;

class SolidwasteTenYearMonitoringController extends Controller
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
        return Inertia::render("pages/swm/Form/TenYearMonitoringForm",[
            'lce_info'=>$lce_info,
        ]);
    }

    public function ten_year_monitoring_edit(request $request){
        $id = $request->id;
        $ten_year_monitoring_edit = DB::table('tbl_solidwaste_ten_year_monitoring as a')
        ->select('a.*', 'c.provDesc', 'd.citymunDesc', 'e.brgyDesc', 'd.districtCode')
        ->leftjoin('tbl_solidwaste_lce as b','a.lce_FK','=','b.id')
        ->leftjoin('ref_province as c','b.lce_province_FK','=','c.PK_province_ID')
        ->leftjoin('ref_citymun as d','b.lce_municipality_FK','=','d.PK_citymun_ID')
        ->leftjoin('ref_brgy as e','b.lce_barangay_FK','=','e.PK_brgy_ID')
        ->where('a.id',$id)->get();
        return Inertia::render("pages/swm/Form/TenYearMonitoringForm",[
            'ten_year_monitoring_edit'=>$ten_year_monitoring_edit,
        ]);
    }

    public function ten_year_monitoring_register_process(request $request){
        $query = new SolidwasteTenYearMonitoring();
        $query->ten_year_mon_status = $request->ten_year_mon_status;
        $query->ten_year_mon_date_monitored = $request->ten_year_mon_date_monitored;
        $query->ten_year_mon_date_submitted = $request->ten_year_mon_date_submitted;
        $query->ten_year_mon_iis_number = $request->ten_year_mon_iis_number;
        $query->ten_year_mon_copy_report = $request->ten_year_mon_copy_report;
        $query->ten_year_mon_by = $request->ten_year_mon_by;
        $query->lce_FK = $request->lce_FK;
        $query->save();
        return back()->with("message","10 Year Monitoring Created");
    }

    public function ten_year_monitoring_update_process(request $request){
        $query = SolidwasteTenYearMonitoring::find($request->id);
        $query->ten_year_mon_status = $request->ten_year_mon_status;
        $query->ten_year_mon_date_monitored = $request->ten_year_mon_date_monitored;
        $query->ten_year_mon_date_submitted = $request->ten_year_mon_date_submitted;
        $query->ten_year_mon_iis_number = $request->ten_year_mon_iis_number;
        $query->ten_year_mon_copy_report = $request->ten_year_mon_copy_report;
        $query->ten_year_mon_by = $request->ten_year_mon_by;
        $query->lce_FK = $request->lce_FK;
        $query->save();
        return back()->with("message","10 Year Monitoring Updated");
    }
    public function ten_year_monitoring_delete(request $request){
        $ten_year_monitoring_delete = SolidwasteTenYearMonitoring::find($request->id);
        $ten_year_monitoring_delete->delete();
        return back()->with("message","10 Year Monitoring Deleted");
    }
}
