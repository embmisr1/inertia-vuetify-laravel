<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\SWM\LCE;
use App\Models\SolidwasteLCE;
use App\Models\SolidwasteSLF;
use App\Models\SolidwasteMRF;
use App\Models\SolidwasteTenYear;
use App\Models\SolidwasteClosedDumpsite;
use App\Models\SolidwasteEquipments;
use App\Models\SolidwasteDues;
use App\Models\SolidwasteGad;
use App\Models\Barangay;
use App\Models\Municipality;
use App\Models\Province;
use Illuminate\Support\Facades\DB;

class SolidwasteLCEController extends Controller
{
    public function lce_list(request $request)
    {
        $lce_list = DB::table('tbl_solidwaste_lce as a')
            ->select('a.*', 'b.provDesc', 'c.citymunDesc', 'd.brgyDesc', 'c.districtCode')
            ->leftjoin('ref_province as b', 'a.lce_province_FK', '=', 'b.PK_province_ID')
            ->leftjoin('ref_citymun as c', 'a.lce_municipality_FK', '=', 'c.PK_citymun_ID')
            ->leftjoin('ref_brgy as d', 'a.lce_barangay_FK', '=', 'd.PK_brgy_ID')
            ->when(request('filter_province'), function ($lce_list) {
                $lce_list->where('a.lce_province_FK', request('filter_province'));
            })
            ->when(request('filter_municipality'), function ($lce_list) {
                $lce_list->where('a.lce_municipality_FK', request('filter_municipality'));
            })
            ->when(request('filter_barangay'), function ($lce_list) {
                $lce_list->where('a.lce_barangay_FK', request('filter_barangay'));
            })
            ->orderBy('b.provDesc', 'asc')
            ->orderBy('c.citymunDesc', 'asc')
            ->orderBy('d.brgyDesc', 'asc')
            ->paginate(10);
        return Inertia::render("pages/swm/index", [
            "filter" => [
                'PK_province_ID' => request('PK_province_ID'),
                'PK_citymun_ID' => request('PK_citymun_ID'),
                'PK_brgy_ID' => request('PK_brgy_ID'),
            ],
            'lce_list' => $lce_list,
        ]);
    }

    public function create()
    {
        $province_dropdown = Province::whereIn('PK_province_ID', [128, 129, 133, 155])->get();
        return Inertia::render("pages/swm/LCEForm", [
            'province_dropdown' => $province_dropdown,
        ]);
    }



    public function lce_show(request $request)
    {
        $id = $request->id;
        $query_slf = SolidwasteSLF::where('lce_FK', $id)->orderBy('created_at', 'desc')->get();
        $query_mrf = SolidwasteMRF::where('lce_FK', $id)->where('mrf_or_rca', 'mrf')->orderBy('created_at', 'desc')->get();
        $query_rca = SolidwasteMRF::where('lce_FK', $id)->where('mrf_or_rca', 'rca')->orderBy('created_at', 'desc')->get();
        $query_equipment = SolidwasteEquipments::where('lce_FK', $id)->orderBy('created_at', 'desc')->get();
        $query_dues = SolidwasteDues::where('lce_FK', $id)->orderBy('created_at', 'desc')->get();
        $query_gad = SolidwasteGad::where('lce_FK', $id)->orderBy('created_at', 'desc')->get();
        $query_ten_year = SolidwasteTenYear::where('lce_FK', $id)->orderBy('created_at', 'desc')->get();
        $query_closed_dumpsite = SolidwasteClosedDumpsite::select('id')->where('lce_FK', $id)->limit(1)->get();
        $province_dropdown = Province::whereIn('PK_province_ID', [128, 129, 133, 155])->get();
        $lce_edit = DB::table('tbl_solidwaste_lce as a')
            ->select('a.*', 'b.provDesc', 'c.citymunDesc', 'd.brgyDesc', 'c.districtCode')
            ->leftjoin('ref_province as b', 'a.lce_province_FK', '=', 'b.PK_province_ID')
            ->leftjoin('ref_citymun as c', 'a.lce_municipality_FK', '=', 'c.PK_citymun_ID')
            ->leftjoin('ref_brgy as d', 'a.lce_barangay_FK', '=', 'd.PK_brgy_ID')
            ->where('a.id', $id)
            ->get();
        if (isset($query_closed_dumpsite[0]->id)) {
            $query_closed_dumpsite = $query_closed_dumpsite[0]->id;
        }else{
            $query_closed_dumpsite = null;
        }
        return Inertia::render("pages/swm/viewLGU", [
            'lce_edit' => $lce_edit,
            'province_dropdown' => $province_dropdown,
            'query_slf' => $query_slf,
            'query_mrf' => $query_mrf,
            'query_rca' => $query_rca,
            'query_equipment' => $query_equipment,
            'query_dues' => $query_dues,
            'query_ten_year' => $query_ten_year,
            'query_closed_dumpsite_id' => $query_closed_dumpsite,
            "query_gad"=>$query_gad
        ]);
    }

    public function lce_edit(request $request)
    {
        $province_dropdown = Province::whereIn('PK_province_ID', [128, 129, 133, 155])->get();
        $lce_edit = DB::table('tbl_solidwaste_lce as a')
            ->select('a.*', 'b.provDesc', 'c.citymunDesc', 'd.brgyDesc', 'c.districtCode')
            ->leftjoin('ref_province as b', 'a.lce_province_FK', '=', 'b.PK_province_ID')
            ->leftjoin('ref_citymun as c', 'a.lce_municipality_FK', '=', 'c.PK_citymun_ID')
            ->leftjoin('ref_brgy as d', 'a.lce_barangay_FK', '=', 'd.PK_brgy_ID')
            ->where('a.id', $request->id)
            ->get();
        return Inertia::render("pages/swm/Form/LCEForm", [
            'lce_edit' => $lce_edit,
            'province_dropdown' => $province_dropdown,
        ]);
    }

    public function lce_register_process(request $request)
    {
        $query = new SolidwasteLCE();
        $query->lce_title = $request->lce_title;
        $query->lce_first_name = $request->lce_first_name;
        $query->lce_middle_name = $request->lce_middle_name;
        $query->lce_last_name = $request->lce_last_name;
        $query->lce_salutation = $request->lce_salutation;
        $query->lce_position = $request->lce_position;
        $query->lce_province_FK = $request->lce_province_FK;
        $query->lce_municipality_FK = $request->lce_municipality_FK;
        $query->lce_barangay_FK = $request->lce_barangay_FK;
        $query->lce_disctrict = $request->lce_disctrict;
        $query->lce_zip_code = $request->lce_zip_code;
        $query->lce_focal_person = $request->lce_focal_person;
        $query->lce_contact_number = $request->lce_contact_number;
        $query->lce_email_address = $request->lce_email_address;
        $query->save();
        return back()->with("message", "LCE Created");
    }

    public function lce_update_process(request $request)
    {
        $query = SolidwasteLCE::find($request->id);
        $query->lce_title = $request->lce_title;
        $query->lce_first_name = $request->lce_first_name;
        $query->lce_middle_name = $request->lce_middle_name;
        $query->lce_last_name = $request->lce_last_name;
        $query->lce_salutation = $request->lce_salutation;
        $query->lce_position = $request->lce_position;
        $query->lce_province_FK = $request->lce_province_FK;
        $query->lce_municipality_FK = $request->lce_municipality_FK;
        $query->lce_barangay_FK = $request->lce_barangay_FK;
        $query->lce_disctrict = $request->lce_disctrict;
        $query->lce_zip_code = $request->lce_zip_code;
        $query->lce_focal_person = $request->lce_focal_person;
        $query->lce_contact_number = $request->lce_contact_number;
        $query->lce_email_address = $request->lce_email_address;
        $query->save();
        return back()->with("message", "LCE Updated");
    }
    public function lce_delete(request $request)
    {
        $lce_delete = SolidwasteLCE::find($request->id);
        $lce_delete->delete();
        return back()->with("message", "LCE Deleted");
    }
}
