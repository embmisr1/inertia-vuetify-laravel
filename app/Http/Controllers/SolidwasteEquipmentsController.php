<?php

namespace App\Http\Controllers;

use App\Http\Resources\AttachmentResource;
use App\Jobs\Logger;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\DB;
use App\Models\SolidwasteEquipments;
use App\Jobs\LoggerSWM;

class SolidwasteEquipmentsController extends Controller
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
        return Inertia::render("pages/swm/Form/EquipmentForm", [
            'lce_info' => $lce_info,
        ]);
    }

    public function equipment_edit(request $request)
    {
        if(!$this->solidwaste_validator($request)){ return back(); }
        $id = $request->id;
        $equipment_edit = DB::table('tbl_solidwaste_equipments as a')
            ->select('a.*', 'c.provDesc', 'd.citymunDesc', 'e.brgyDesc', 'd.districtCode')
            ->leftjoin('tbl_solidwaste_lce as b', 'a.lce_FK', '=', 'b.id')
            ->leftjoin('ref_province as c', 'b.lce_province_FK', '=', 'c.PK_province_ID')
            ->leftjoin('ref_citymun as d', 'b.lce_municipality_FK', '=', 'd.PK_citymun_ID')
            ->leftjoin('ref_brgy as e', 'b.lce_barangay_FK', '=', 'e.PK_brgy_ID')
            ->where('a.id', $id)->get();
        $attachements = SolidwasteEquipments::where("id", $id)->get();
        return Inertia::render("pages/swm/Form/EquipmentForm", [
            'equipment_edit' => $equipment_edit,
            "attachments" => AttachmentResource::collection($attachements[0]->getMedia("equipment")),
        ]);
    }

    public function equipment_register_process(request $request)
    {
        if(!$this->solidwaste_validator($request)){ return back(); }
        try {
            $query = new SolidwasteEquipments();
            $query->equipment_description = $request->equipment_description;
            $query->lce_FK = $request->lce_FK;
            $query->save();
            LoggerSWM::dispatch("SolidwasteEQUIPMENTS", $query->id, auth()->id(), "Created an Equipments: ", "create", $request->lce_FK);
            return redirect()->route("lce_show",["id"=>$request->lce_FK])->with("message", "Equipment Created");
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function equipment_update_process(request $request)
    {
        if(!$this->solidwaste_validator($request)){ return back(); }
        try {
            $query = SolidwasteEquipments::find($request->id);
            $query->equipment_description = $request->equipment_description;
            $query->lce_FK = $request->lce_FK;
            $query->save();
            LoggerSWM::dispatch("SolidwasteEQUIPMENTS", $query->id, auth()->id(), "Updated an Equipments: ", "update", $request->lce_FK);
            return redirect()->route("lce_show",["id"=>$request->lce_FK])->with("message", "Equipment Updated");
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function equipment_delete(request $request)
    {
        if(!$this->solidwaste_validator($request)){ return back(); }
        $equipment_delete = SolidwasteEquipments::find($request->id);
        $equipment_delete->delete();
        LoggerSWM::dispatch("SolidwasteEQUIPMENTS", $request->id, auth()->id(), "Deleted an Equipments: ", "delete", $request->lce_FK);
        return back()->with("message", "Equipment Deleted");
    }

    public function solidwaste_validator($request){
        $validator_controller = new UnisysValidator;
        return $validator_controller->solidwaste_validator($request);
    }
}
