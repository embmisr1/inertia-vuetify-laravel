<?php

namespace App\Http\Controllers;

use App\Jobs\Logger;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\DB;
use App\Models\SolidwasteDues;
use App\Jobs\LoggerSWM;

class SolidwasteDuesController extends Controller
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
        return Inertia::render("pages/swm/Form/DuesForm", [
            'lce_info' => $lce_info,
        ]);
    }

    public function dues_edit(request $request)
    {
        if(!$this->solidwaste_validator($request)){ return back(); }
        $id = $request->id;
        $dues_edit = DB::table('tbl_solidwaste_dues as a')
            ->select('a.*', 'c.provDesc', 'd.citymunDesc', 'e.brgyDesc', 'd.districtCode')
            ->leftjoin('tbl_solidwaste_lce as b', 'a.lce_FK', '=', 'b.id')
            ->leftjoin('ref_province as c', 'b.lce_province_FK', '=', 'c.PK_province_ID')
            ->leftjoin('ref_citymun as d', 'b.lce_municipality_FK', '=', 'd.PK_citymun_ID')
            ->leftjoin('ref_brgy as e', 'b.lce_barangay_FK', '=', 'e.PK_brgy_ID')
            ->where('a.id', $id)->get();
        return Inertia::render("pages/swm/Form/DuesForm", [
            'dues_edit' => $dues_edit,
        ]);
    }

    public function dues_register_process(request $request)
    {
        if(!$this->solidwaste_validator($request)){ return back(); }
        try {
            $query = new SolidwasteDues();
            $query->dues_purpose = $request->dues_purpose;
            $query->dues_amount_granted = $request->dues_amount_granted;
            $query->dues_date_granted = $request->dues_date_granted;
            $query->dues_unliquidated = $request->dues_unliquidated;
            $query->dues_remarks = $request->dues_remarks;
            $query->dues_accountant = $request->dues_accountant;
            $query->dues_contact_email = $request->dues_contact_email;
            $query->lce_FK = $request->lce_FK;
            $query->save();
            LoggerSWM::dispatch("SolidwasteDUES", $query->id, auth()->id(), "Created a Dues: ", "create", $request->lce_FK);
            return redirect()->route("lce_show",["id"=>$request->lce_FK])->with("message", "Dues Created");
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function dues_update_process(request $request)
    {
        if(!$this->solidwaste_validator($request)){ return back(); }
        try {
            $query = SolidwasteDues::find($request->id);
            $query->dues_purpose = $request->dues_purpose;
            $query->dues_amount_granted = $request->dues_amount_granted;
            $query->dues_date_granted = $request->dues_date_granted;
            $query->dues_unliquidated = $request->dues_unliquidated;
            $query->dues_remarks = $request->dues_remarks;
            $query->dues_accountant = $request->dues_accountant;
            $query->dues_contact_email = $request->dues_contact_email;
            $query->lce_FK = $request->lce_FK;
            $query->save();
            LoggerSWM::dispatch("SolidwasteDUES", $query->id, auth()->id(), "Updated a Dues: ", "update", $request->lce_FK);
            return redirect()->route("lce_show",["id"=>$request->lce_FK])->with("message", "Dues Updated");
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
    
    public function dues_delete(request $request)
    {
        if(!$this->solidwaste_validator($request)){ return back(); }
        $dues_delete = SolidwasteDues::find($request->id);
        $dues_delete->delete();
        LoggerSWM::dispatch("SolidwasteDUES", $request->id, auth()->id(), "Deleted a Dues: ", "delete", $request->lce_FK);
        return back()->with("message", "Dues Deleted");
    }

    public function solidwaste_validator($request){
        $validator_controller = new UnisysValidator;
        return $validator_controller->solidwaste_validator($request);
    }
}
