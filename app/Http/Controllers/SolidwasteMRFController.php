<?php

namespace App\Http\Controllers;

use App\Http\Resources\AttachmentResource;
use App\Jobs\Logger;
use App\Jobs\LoggerSWM;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\DB;
use App\Models\SolidwasteMRF;

class SolidwasteMRFController extends Controller
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
        return Inertia::render("pages/swm/Form/MRFForm", [
            'lce_info' => $lce_info,
        ]);
    }

    public function mrf_edit(request $request)
    {
        try {
            if(!$this->solidwaste_validator($request)){ return back(); }
        $id = $request->id;
        $mrf_edit = DB::table('tbl_solidwaste_mrf as a')
            ->select('a.*', 'c.provDesc', 'd.citymunDesc', 'e.brgyDesc', 'd.districtCode')
            ->leftjoin('tbl_solidwaste_lce as b', 'a.lce_FK', '=', 'b.id')
            ->leftjoin('ref_province as c', 'b.lce_province_FK', '=', 'c.PK_province_ID')
            ->leftjoin('ref_citymun as d', 'b.lce_municipality_FK', '=', 'd.PK_citymun_ID')
            ->leftjoin('ref_brgy as e', 'b.lce_barangay_FK', '=', 'e.PK_brgy_ID')
            ->where('a.id', $id)->get();
        $attachements = SolidwasteMRF::where("id", $id)->get();
        return Inertia::render("pages/swm/Form/MRFForm", [
            'mrf_edit' => $mrf_edit,
            "attachments" => AttachmentResource::collection($attachements[0]->getMedia($request->form_type)),
        ]);
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function mrf_register_process(request $request)
    {
       try {
        if(!$this->solidwaste_validator($request)){ return back(); }
        $query = new SolidwasteMRF();
        $query->mrf_complete_address = $request->mrf_complete_address;
        $query->mrf_emb_funded = $request->mrf_emb_funded;
        $query->mrf_latitude = $request->mrf_latitude;
        $query->mrf_longitude = $request->mrf_longitude;
        $query->mrf_status_operation = $request->mrf_status_operation;
        $query->mrf_service_area = $request->mrf_service_area;
        $query->mrf_total_waste_generation = $request->mrf_total_waste_generation;
        $query->mrf_biodegradable = $request->mrf_biodegradable;
        $query->mrf_recyclable = $request->mrf_recyclable;
        $query->mrf_special_waste = $request->mrf_special_waste;
        $query->mrf_total_waste_diverted = $request->mrf_total_waste_diverted;
        $query->mrf_number_of_waste_diverted = $request->mrf_number_of_waste_diverted;
        // $query->mrf_file = $request->mrf_file;
        $query->mrf_or_rca = $request->mrf_or_rca;
        $query->lce_FK = $request->lce_FK;
        $query->save();
        if($request->mrf_file){
            foreach ($request->mrf_file as $file) {
                $query
                    ->addMedia($file)
                    ->preservingOriginal()
                    ->toMediaCollection($request->mrf_or_rca);
            }
        }
        $mrf_or_rca = strtoupper($request->mrf_or_rca);
        LoggerSWM::dispatch("Solidwaste".$mrf_or_rca, $query->id, auth()->id(), "Created a ".$mrf_or_rca.": ", "create", $request->lce_FK);
        return redirect()->route("lce_show",["id"=>$request->lce_FK])->with("message", strtoupper($request->mrf_or_rca)  . " Created");
       } catch (\Throwable $th) {
        dd($th->getMessage());
        return;
       }
    }

    public function mrf_update_process(request $request)
    {
        if(!$this->solidwaste_validator($request)){ return back(); }
        $query = SolidwasteMRF::find($request->id);
        $query->mrf_complete_address = $request->mrf_complete_address;
        $query->mrf_emb_funded = $request->mrf_emb_funded;
        $query->mrf_latitude = $request->mrf_latitude;
        $query->mrf_longitude = $request->mrf_longitude;
        $query->mrf_status_operation = $request->mrf_status_operation;
        $query->mrf_service_area = $request->mrf_service_area;
        $query->mrf_total_waste_generation = $request->mrf_total_waste_generation;
        $query->mrf_biodegradable = $request->mrf_biodegradable;
        $query->mrf_recyclable = $request->mrf_recyclable;
        $query->mrf_special_waste = $request->mrf_special_waste;
        $query->mrf_total_waste_diverted = $request->mrf_total_waste_diverted;
        $query->mrf_number_of_waste_diverted = $request->mrf_number_of_waste_diverted;
        // $query->mrf_file = $request->mrf_file;
        $query->mrf_or_rca = $request->mrf_or_rca;
        $query->lce_FK = $request->lce_FK;
        $query->save();
        if($request->mrf_file){
            foreach ($request->mrf_file as $file) {
                $query
                    ->addMedia($file)
                    ->preservingOriginal()
                    ->toMediaCollection($request->mrf_or_rca);
            }
        }
        $mrf_or_rca = strtoupper($request->mrf_or_rca);
        LoggerSWM::dispatch("Solidwaste".$mrf_or_rca, $query->id, auth()->id(), "Updated a ".$mrf_or_rca.": ", "update", $request->lce_FK);
        return redirect()->route("lce_show",["id"=>$request->lce_FK])->with("message",  strtoupper($request->mrf_or_rca)  . " Updated");
    }

    public function mrf_delete(request $request)
    {
        if(!$this->solidwaste_validator($request)){ return back(); }
        $mrf_delete = SolidwasteMRF::find($request->id);
        LoggerSWM::dispatch("SolidwasteMRF", $request->id, auth()->id(), "Deleted a MRF: ", "delete", $mrf_delete->lce_FK);
        $mrf_delete->delete();
        // LoggerSWM::dispatch("SolidwasteMRF", $request->id, auth()->id(), "Deleted a MRF: ", "delete", $request->lce_FK);
        return back()->with("message", "MRF Deleted");
    }

    public function solidwaste_validator($request){
        $validator_controller = new UnisysValidator;
        return $validator_controller->solidwaste_validator($request);
    }
}
