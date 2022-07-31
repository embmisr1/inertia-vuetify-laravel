<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\DB;
use App\Models\SolidwasteTenYearMonitoring;

class SolidwasteTenYearMonitoringController extends Controller
{
    public function create(request $request)
    {
        $id = $request->id;
        $lce_info = DB::table('tbl_solidwaste_lce as a')
            ->select('a.*', 'b.provDesc', 'c.citymunDesc', 'd.brgyDesc', 'c.districtCode')
            ->leftjoin('ref_province as b', 'a.lce_province_FK', '=', 'b.PK_province_ID')
            ->leftjoin('ref_citymun as c', 'a.lce_municipality_FK', '=', 'c.PK_citymun_ID')
            ->leftjoin('ref_brgy as d', 'a.lce_barangay_FK', '=', 'd.PK_brgy_ID')
            ->where('id', $id)
            ->get();
        return Inertia::render("pages/swm/Form/TenYrMonitoringForm", [
            'lce_info' => $lce_info,
        ]);
    }

    public function ten_year_monitoring_edit(request $request)
    {
        $id = $request->id;
        $ten_year_monitoring_edit = DB::table('tbl_solidwaste_ten_year_monitoring as a')
            ->select('a.*', 'd.provDesc', 'e.citymunDesc', 'f.brgyDesc', 'e.districtCode')
            ->leftjoin('tbl_solidwaste_ten_year as b', 'a.ten_year_FK', '=', 'b.id')
            ->leftjoin('tbl_solidwaste_lce as c', 'b.lce_FK', '=', 'c.id')
            ->leftjoin('ref_province as d', 'c.lce_province_FK', '=', 'd.PK_province_ID')
            ->leftjoin('ref_citymun as e', 'c.lce_municipality_FK', '=', 'e.PK_citymun_ID')
            ->leftjoin('ref_brgy as f', 'c.lce_barangay_FK', '=', 'f.PK_brgy_ID')
            ->where('a.id', $id)->get();
        return Inertia::render("pages/swm/Form/TenYrMonitoringForm", [
            'ten_year_monitoring_edit' => $ten_year_monitoring_edit,
        ]);
    }

    public function ten_year_monitoring_register_process(request $request)
    {
        $query = new SolidwasteTenYearMonitoring();
        $query->ten_year_mon_status = $request->ten_year_mon_status;
        $query->ten_year_mon_date_monitored = $request->ten_year_mon_date_monitored;
        $query->ten_year_mon_date_submitted = $request->ten_year_mon_date_submitted;
        $query->ten_year_mon_iis_number = $request->ten_year_mon_iis_number;
        $query->ten_year_mon_copy_report = !empty($request->ten_year_mon_copy_report) ? true : false;
        $query->ten_year_mon_by = $request->ten_year_mon_by;
        $query->ten_year_FK = $request->ten_year_FK;
        $query->save();
        if ($request->ten_year_mon_copy_report) {
            foreach ($request->ten_year_mon_copy_report as $file) {
                $query
                    ->addMedia($file)
                    ->preservingOriginal()
                    ->toMediaCollection("copy_report", "copy_report");
            }
        }
        return redirect()->route("ten_year_edit",["id"=>$request->ten_year_FK])->with("message", "10 Year Monitoring Created");
    }

    public function ten_year_monitoring_update_process(request $request)
    {
        $query = SolidwasteTenYearMonitoring::find($request->id);
        $query->ten_year_mon_status = $request->ten_year_mon_status;
        $query->ten_year_mon_date_monitored = $request->ten_year_mon_date_monitored;
        $query->ten_year_mon_date_submitted = $request->ten_year_mon_date_submitted;
        $query->ten_year_mon_iis_number = $request->ten_year_mon_iis_number;
        // $query->ten_year_mon_copy_report = $request->ten_year_mon_copy_report;
        $query->ten_year_mon_by = $request->ten_year_mon_by;
        $query->ten_year_FK = $request->ten_year_FK;
        $query->save();
        if ($request->ten_year_mon_copy_report) {
            foreach ($request->ten_year_mon_copy_report as $file) {
                $query
                    ->addMedia($file)
                    ->preservingOriginal()
                    ->toMediaCollection("copy_report", "copy_report");
            }
        }
        return redirect()->route("ten_year_edit",["id"=>$request->ten_year_FK])->with("message", "10 Year Monitoring Updated");
    }
    public function ten_year_monitoring_delete(request $request)
    {
        $ten_year_monitoring_delete = SolidwasteTenYearMonitoring::find($request->id);
        $ten_year_monitoring_delete->delete();
        return back()->with("message", "10 Year Monitoring Deleted");
    }
}
