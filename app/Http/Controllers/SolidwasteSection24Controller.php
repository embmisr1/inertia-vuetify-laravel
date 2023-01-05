<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\Logger;
use App\Jobs\LoggerSWM;
use Inertia\Inertia;
use Illuminate\Support\Facades\DB;
use App\Models\SolidwasteSection24;

class SolidwasteSection24Controller extends Controller
{
    public function create(request $request)
    {
        if(!$this->solidwaste_validator($request)){ return back(); }
        $id = $request->id;
        $lce_info = DB::table('tbl_solidwaste_lce as a')
            ->select('a.*', 'b.provDesc', 'c.citymunDesc', 'd.brgyDesc', 'c.districtCode')
            ->leftjoin('ref_province as b', 'a.lce_province_FK', '=', 'b.PK_province_ID')
            ->leftjoin('ref_citymun as c', 'a.lce_municipality_FK', '=', 'c.PK_citymun_ID')
            ->leftjoin('ref_brgy as d', 'a.lce_barangay_FK', '=', 'd.PK_brgy_ID')
            ->where('id', $id)
            ->get();
        return Inertia::render("pages/swm/Form/Section24Form", [
            'lce_info' => $lce_info,
        ]);
    }

    public function section24_edit(request $request)
    {
        if(!$this->solidwaste_validator($request)){ return back(); }
        $id = $request->id;
        $section24_edit = DB::table('tbl_solidwaste_section24 as a')
            ->select('a.*', 'c.provDesc', 'd.citymunDesc', 'e.brgyDesc', 'd.districtCode')
            ->leftjoin('tbl_solidwaste_lce as b', 'a.lce_FK', '=', 'b.id')
            ->leftjoin('ref_province as c', 'b.lce_province_FK', '=', 'c.PK_province_ID')
            ->leftjoin('ref_citymun as d', 'b.lce_municipality_FK', '=', 'd.PK_citymun_ID')
            ->leftjoin('ref_brgy as e', 'b.lce_barangay_FK', '=', 'e.PK_brgy_ID')
            ->where('a.id', $id)->get();
        return Inertia::render("pages/swm/Form/Section24Form", [
            // 'section24_schedule_of_collection_edit' => explode(", " ,$section24_edit[0]->section24_schedule_of_collection),
            'section24_edit' => $section24_edit,
        ]);
    }

    public function section24_register_process(request $request)
    {
        if(!$this->solidwaste_validator($request)){ return back(); }
        try {
            $query = new SolidwasteSection24();
            $query->section24_iis_number = $request->section24_iis_number;
            $query->section24_catered_barangay = $request->section24_catered_barangay;
            $query->section24_collection_vehicle = $request->section24_collection_vehicle;
            $query->section24_schedule_of_collection = implode(", ",$request->section24_schedule_of_collection);
            $query->section24_swm_personnel = $request->section24_swm_personnel;
            $query->section24_basis_1 = $request->section24_basis_1;
            $query->section24_basis_2 = $request->section24_basis_2;
            $query->section24_basis_3 = $request->section24_basis_3;
            $query->section24_basis_4 = $request->section24_basis_4;
            $query->section24_basis_5 = $request->section24_basis_5;
            $query->section24_basis_6 = $request->section24_basis_6;
            $query->section24_basis_7 = $request->section24_basis_7;
            $query->section24_basis_8 = $request->section24_basis_8;
            $query->section24_basis_9 = $request->section24_basis_9;
            $query->section24_basis_10 = $request->section24_basis_10;
            $query->section24_basis_11 = $request->section24_basis_11;
            $query->section24_findings = $request->section24_findings;
            $query->section24_remarks = $request->section24_remarks;
            $query->section24_with_letter = $request->section24_with_letter;
            $query->lce_FK = $request->lce_FK;
            $query->save();
            LoggerSWM::dispatch("SolidwasteSEC24", $query->id, auth()->id(), "Created a SECTION 24: ", "create", $request->lce_FK);
            return redirect()->route("lce_show",["id"=>$request->lce_FK])->with("message", "Section 24 Created");
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function section24_update_process(request $request)
    {
        if(!$this->solidwaste_validator($request)){ return back(); }
        try {
            $query = SolidwasteSection24::find($request->id);
            $query->section24_iis_number = $request->section24_iis_number;
            $query->section24_catered_barangay = $request->section24_catered_barangay;
            $query->section24_collection_vehicle = $request->section24_collection_vehicle;
            $query->section24_schedule_of_collection = implode(", ",$request->section24_schedule_of_collection);
            $query->section24_swm_personnel = $request->section24_swm_personnel;
            $query->section24_basis_1 = $request->section24_basis_1;
            $query->section24_basis_2 = $request->section24_basis_2;
            $query->section24_basis_3 = $request->section24_basis_3;
            $query->section24_basis_4 = $request->section24_basis_4;
            $query->section24_basis_5 = $request->section24_basis_5;
            $query->section24_basis_6 = $request->section24_basis_6;
            $query->section24_basis_7 = $request->section24_basis_7;
            $query->section24_basis_8 = $request->section24_basis_8;
            $query->section24_basis_9 = $request->section24_basis_9;
            $query->section24_basis_10 = $request->section24_basis_10;
            $query->section24_basis_11 = $request->section24_basis_11;
            $query->section24_findings = $request->section24_findings;
            $query->section24_remarks = $request->section24_remarks;
            $query->section24_with_letter = $request->section24_with_letter;
            $query->lce_FK = $request->lce_FK;
            $query->save();
            LoggerSWM::dispatch("SolidwasteSEC24", $query->id, auth()->id(), "Updated a SECTION 24: ", "update", $request->lce_FK);
            return redirect()->route("lce_show",["id"=>$request->lce_FK])->with("message", "Section 24 Updated");
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function section24_delete(request $request)
    {
        if(!$this->solidwaste_validator($request)){ return back(); }
        $section24_delete = SolidwasteSection24::find($request->id);
        LoggerSWM::dispatch("SolidwasteSEC24", $request->id, auth()->id(), "Deleted a SECTION 24: ", "delete", $section24_delete->lce_FK);
        $section24_delete->delete();
        return back()->with("message", "Section 24 Deleted");
    }

    public function solidwaste_validator($request){
        $validator_controller = new UnisysValidator;
        return $validator_controller->solidwaste_validator($request);
    }
}
