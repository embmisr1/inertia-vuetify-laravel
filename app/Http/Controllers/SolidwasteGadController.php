<?php

namespace App\Http\Controllers;

use App\Jobs\Logger;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\DB;
use App\Models\SolidwasteGad;

class SolidwasteGadController extends Controller
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
        return Inertia::render("pages/swm/Form/GadForm", [
            'lce_info' => $lce_info,
        ]);
    }

    public function edit(request $request)
    {
        if(!$this->solidwaste_validator($request)){ return back(); }
        $id = $request->id;
        $gad_edit = DB::table('tbl_solidwaste_gad as a')
            ->select('a.*', 'c.provDesc', 'd.citymunDesc', 'e.brgyDesc', 'd.districtCode')
            ->leftjoin('tbl_solidwaste_lce as b', 'a.lce_FK', '=', 'b.id')
            ->leftjoin('ref_province as c', 'b.lce_province_FK', '=', 'c.PK_province_ID')
            ->leftjoin('ref_citymun as d', 'b.lce_municipality_FK', '=', 'd.PK_citymun_ID')
            ->leftjoin('ref_brgy as e', 'b.lce_barangay_FK', '=', 'e.PK_brgy_ID')
            ->where('a.id', $id)->get();
        return Inertia::render("pages/swm/Form/GadForm", [
            'gad_edit' => $gad_edit,
        ]);
    }

    public function register(request $request)
    {
        if(!$this->solidwaste_validator($request)){ return back(); }
        try {
            $query = new SolidwasteGad();
            $query->gad_male = $request->gad_male;
            $query->gad_female = $request->gad_female;
            $query->lce_FK = $request->lce_FK;
            $query->save();
            Logger::dispatch("SolidwasteGad", $query->id, auth()->id(), "Created a GAD: model_id " . $query->id, "create");
            return redirect()->route("lce_show",["id"=>$request->lce_FK])->with("message", "Gad Created");
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function update(request $request)
    {
        if(!$this->solidwaste_validator($request)){ return back(); }
        try {
            $query = SolidwasteGad::find($request->id);
            $query->gad_male = $request->gad_male;
            $query->gad_female = $request->gad_female;
            $query->lce_FK = $request->lce_FK;
            $query->save();
            Logger::dispatch("SolidwasteGad", $query->id, auth()->id(), "Updated a GAD: model_id " . $query->id, "update");
            return redirect()->route("lce_show",["id"=>$request->lce_FK])->with("message", "Gad Updated");
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function delete(request $request)
    {
        if(!$this->solidwaste_validator($request)){ return back(); }
        $gad_delete = SolidwasteGad::find($request->id);
        $gad_delete->delete();
        Logger::dispatch("SolidwasteGad", $request->id, auth()->id(), "Deleted a GAD: model_id " . $request->id, "delte");
        return back()->with("message", "Gad Deleted");
    }

    public function solidwaste_validator($request){
        $validator_controller = new UnisysValidator;
        return $validator_controller->solidwaste_validator($request);
    }
}
