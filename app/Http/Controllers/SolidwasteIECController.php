<?php

namespace App\Http\Controllers;

use App\Http\Resources\AttachmentResource;
use App\Jobs\Logger;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\DB;
use App\Models\SolidwasteIEC;
use App\Jobs\LoggerSWM;

class SolidwasteIECController extends Controller
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
        return Inertia::render("pages/swm/Form/IECForm", [
            'lce_info' => $lce_info,
        ]);
    }

    public function iec_edit(request $request)
    {
        if(!$this->solidwaste_validator($request)){ return back(); }
        $id = $request->id;
        $iec_edit = DB::table('tbl_solidwaste_iec as a')
            ->select('a.*', 'c.provDesc', 'd.citymunDesc', 'e.brgyDesc', 'd.districtCode')
            ->leftjoin('tbl_solidwaste_lce as b', 'a.lce_FK', '=', 'b.id')
            ->leftjoin('ref_province as c', 'b.lce_province_FK', '=', 'c.PK_province_ID')
            ->leftjoin('ref_citymun as d', 'b.lce_municipality_FK', '=', 'd.PK_citymun_ID')
            ->leftjoin('ref_brgy as e', 'b.lce_barangay_FK', '=', 'e.PK_brgy_ID')
            ->where('a.id', $id)->get();
            $attachments = SolidwasteIEC::where("id", $id)->get();
        return Inertia::render("pages/swm/Form/IECForm", [
            'iec_edit' => $iec_edit,
            "attachments" => $attachments[0]->getMedia("iec") ? AttachmentResource::collection($attachments[0]->getMedia("iec")) : null,
        ]);
    }

    public function iec_register_process(request $request)
    {
        if(!$this->solidwaste_validator($request)){ return back(); }
        try {
            $query = new SolidwasteIEC();
            $query->iec_topic = $request->iec_topic;
            $query->iec_speaker = $request->iec_speaker;
            $query->iec_male = $request->iec_male;
            $query->iec_female = $request->iec_female;
            $query->iec_youth = $request->iec_youth;
            $query->iec_senior_citizen = $request->iec_senior_citizen;
            $query->iec_pwd = $request->iec_pwd;
            $query->iec_lgbt = $request->iec_lgbt;
            $query->iec_pdl = $request->iec_pdl;
            $query->iec_adult = $request->iec_adult;
            $query->iec_total = $request->iec_total;
            $query->iec_iis_number = $request->iec_iis_number;
            $query->iec_file_upload = $request->iec_file_upload;
            $query->lce_FK = $request->lce_FK;
            $query->save();
            if ($request->iec_file) {
                foreach ($request->iec_file as $file) {
                    $query
                        ->addMedia($file)
                        ->preservingOriginal()
                        ->toMediaCollection("iec");
                }
            }
            LoggerSWM::dispatch("SolidwasteIEC", $query->id, auth()->id(), "Created an IEC: ", "create", $request->lce_FK);
            return redirect()->route("lce_show",["id"=>$request->lce_FK])->with("message", "IEC Created");
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function iec_update_process(request $request)
    {
        if(!$this->solidwaste_validator($request)){ return back(); }
        try {
            $query = SolidwasteIEC::find($request->id);
            $query->iec_topic = $request->iec_topic;
            $query->iec_speaker = $request->iec_speaker;
            $query->iec_male = $request->iec_male;
            $query->iec_female = $request->iec_female;
            $query->iec_youth = $request->iec_youth;
            $query->iec_senior_citizen = $request->iec_senior_citizen;
            $query->iec_pwd = $request->iec_pwd;
            $query->iec_lgbt = $request->iec_lgbt;
            $query->iec_pdl = $request->iec_pdl;
            $query->iec_adult = $request->iec_adult;
            $query->iec_total = $request->iec_total;
            $query->iec_iis_number = $request->iec_iis_number;
            $query->iec_file_upload = $request->iec_file_upload;
            $query->lce_FK = $request->lce_FK;
            $query->save();
            if ($request->iec_file) {
                foreach ($request->iec_file as $file) {
                    $query
                        ->addMedia($file)
                        ->preservingOriginal()
                        ->toMediaCollection("iec");
                }
            }
            LoggerSWM::dispatch("SolidwasteIEC", $query->id, auth()->id(), "Updated an IEC: ", "update", $request->lce_FK);
            return redirect()->route("lce_show",["id"=>$request->lce_FK])->with("message", "IEC Updated");
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function iec_delete(request $request)
    {
        if(!$this->solidwaste_validator($request)){ return back(); }
        $iec_delete = SolidwasteIEC::find($request->id);
        $iec_delete->delete();
        LoggerSWM::dispatch("SolidwasteIEC", $request->id, auth()->id(), "Deleted an IEC: ", "delete", $request->lce_FK);
        return back()->with("message", "IEC Deleted");
    }

    public function solidwaste_validator($request){
        $validator_controller = new UnisysValidator;
        return $validator_controller->solidwaste_validator($request);
    }
}
