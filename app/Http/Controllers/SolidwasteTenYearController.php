<?php

namespace App\Http\Controllers;

use App\Http\Resources\AttachmentResource;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\DB;
use App\Models\SolidwasteTenYear;
use App\Models\SolidwasteTenYearMonitoring;
use App\Models\SolidwasteTenYearFindings;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class SolidwasteTenYearController extends Controller
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
        return Inertia::render("pages/swm/Form/TenYrForm", [
            'lce_info' => $lce_info,
        ]);
    }

    public function ten_year_edit(request $request)
    {
        $id = $request->id;
        $ten_year_edit = DB::table('tbl_solidwaste_ten_year as a')
            ->select(
                "a.id",
                "a.lce_FK",
                "a.ten_year_planning_period",
                "a.ten_year_year_approved",
                "a.ten_year_number",
                "c.provDesc",
                "d.citymunDesc",
                "e.brgyDesc",
                "d.districtCode",
                "f.finding_a",
                "f.finding_b",
                "f.finding_c",
                "f.finding_d",
                "f.finding_e",
                "f.finding_f",
                "f.finding_g",
                "f.finding_h",
                "f.finding_i",
                "f.finding_j",
            )
            // ->select('a.*', 'c.provDesc', 'd.citymunDesc', 'e.brgyDesc', 'd.districtCode')
            ->leftjoin('tbl_solidwaste_lce as b', 'a.lce_FK', '=', 'b.id')
            ->leftjoin('ref_province as c', 'b.lce_province_FK', '=', 'c.PK_province_ID')
            ->leftjoin('ref_citymun as d', 'b.lce_municipality_FK', '=', 'd.PK_citymun_ID')
            ->leftjoin('ref_brgy as e', 'b.lce_barangay_FK', '=', 'e.PK_brgy_ID')
            ->leftjoin('tbl_solidwaste_ten_year_findings as f', 'f.ten_year_FK', '=', 'a.id')
            ->where('a.id', $id)->get();
        $ten_year_monitoring_list = SolidwasteTenYearMonitoring::where('ten_year_FK', $id)->get();
        $attachements = SolidwasteTenYear::where("id", $id)->get();
        if (isset($ten_year_edit[0]->ten_year_findings)){
            $ten_yr_findings = json_decode($ten_year_edit[0]->ten_year_findings);
        }else{
            $ten_yr_findings = [];
        }
        return Inertia::render("pages/swm/Form/TenYrForm", [
            'ten_year_edit' => $ten_year_edit,
            'ten_year_monitoring_list' => $ten_year_monitoring_list,
            "attachments" => [
                "ten_yr_file" => AttachmentResource::collection($attachements[0]->getMedia("ten_yr_file")),
                "copy_plan" => AttachmentResource::collection($attachements[0]->getMedia("copy_plan")),
                "copy_form" => AttachmentResource::collection($attachements[0]->getMedia("copy_form")),
                "copy_resolution" => AttachmentResource::collection($attachements[0]->getMedia("copy_resolution")),
            ],
        ]);
    }

    public function ten_year_register_process(request $request)
    {
        try {
            $query = new SolidwasteTenYear();
            $query->ten_year_planning_period = $request->ten_year_planning_period;
            $query->ten_year_year_approved = $request->ten_year_year_approved;
            $query->ten_year_number = $request->ten_year_number;
            $query->ten_year_file = !empty($request->ten_year_file) ? true : false;
            $query->ten_year_copy_plan = !empty($request->ten_year_copy_plan) ? true : false;
            $query->ten_year_copy_resolution = !empty($request->ten_year_copy_resolution) ? true : false;
            $query->ten_year_copy_form = !empty($request->ten_year_copy_form) ? true : false;
            $query->lce_FK = $request->lce_FK;
            $query->save();

            $query_findings = new SolidwasteTenYearFindings();
            $query_findings->finding_a = $request->finding_a;
            $query_findings->finding_b = $request->finding_b;
            $query_findings->finding_c = $request->finding_c;
            $query_findings->finding_d = $request->finding_d;
            $query_findings->finding_e = $request->finding_e;
            $query_findings->finding_f = $request->finding_f;
            $query_findings->finding_g = $request->finding_g;
            $query_findings->finding_h = $request->finding_h;
            $query_findings->finding_i = $request->finding_i;
            $query_findings->finding_j = $request->finding_j;
            $query_findings->save();

            if ($request->ten_year_file) {
                foreach ($request->ten_year_file as $file) {
                    $query
                        ->addMedia($file)
                        ->preservingOriginal()
                        ->toMediaCollection("ten_yr_file", "ten_yr_file");
                }
            }

            if ($request->ten_year_copy_plan) {
                foreach ($request->ten_year_copy_plan as $file) {
                    $query
                        ->addMedia($file)
                        ->preservingOriginal()
                        ->toMediaCollection("copy_plan", "copy_plan");
                }
            }

            if ($request->ten_year_copy_form) {
                foreach ($request->ten_year_copy_form as $file) {
                    $query
                        ->addMedia($file)
                        ->preservingOriginal()
                        ->toMediaCollection("copy_form", "copy_form");
                }
            }

            if ($request->ten_year_copy_resolution) {
                foreach ($request->ten_year_copy_resolution as $file) {
                    $query
                        ->addMedia($file)
                        ->preservingOriginal()
                        ->toMediaCollection("copy_resolution", "copy_resolution");
                }
            }
            return redirect()->route("lce_show", ["id" => $request->lce_FK])->with("message", "10 Year Created");
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function ten_year_update_process(request $request)
    {
        try {
        $query = SolidwasteTenYear::find($request->id);
        $query->ten_year_planning_period = $request->ten_year_planning_period;
        $query->ten_year_year_approved = $request->ten_year_year_approved;
        $query->ten_year_number = $request->ten_year_number;
        // $query->ten_year_file = $request->ten_year_file;
        // $query->ten_year_copy_plan = $request->ten_year_copy_plan;
        // $query->ten_year_copy_resolution = $request->ten_year_copy_resolution;
        // $query->ten_year_copy_form = $request->ten_year_copy_form;
        $query->lce_FK = $request->lce_FK;
        $query->save();

        $query_findings = SolidwasteTenYearFindings::where('ten_year_FK',$request->id)
        ->update([
            'finding_a' => $request->finding_a,
            'finding_b' => $request->finding_b,
            'finding_c' => $request->finding_c,
            'finding_d' => $request->finding_d,
            'finding_e' => $request->finding_e,
            'finding_f' => $request->finding_f,
            'finding_g' => $request->finding_g,
            'finding_h' => $request->finding_h,
            'finding_i' => $request->finding_i,
            'finding_j' => $request->finding_j,
        ]);
        $query_findings->save();

        if ($request->ten_year_file) {
            foreach ($request->ten_year_file as $file) {
                $query
                    ->addMedia($file)
                    ->preservingOriginal()
                    ->toMediaCollection("ten_yr_file", "ten_yr_file");
            }
        }



            $query->lce_FK = $request->lce_FK;

            if ($request->ten_year_file) {
                $query->ten_year_file = true;
                foreach ($request->ten_year_file as $file) {
                    $query
                        ->addMedia($file)
                        ->preservingOriginal()
                        ->toMediaCollection("ten_yr_file", "ten_yr_file");
                }
            }

            if ($request->ten_year_copy_plan) {
                $query->ten_year_copy_plan = true;
                foreach ($request->ten_year_copy_plan as $file) {
                    $query
                        ->addMedia($file)
                        ->preservingOriginal()
                        ->toMediaCollection("copy_plan", "copy_plan");
                }
            }

            if ($request->ten_year_copy_form) {
                $query->ten_year_copy_form = true;
                foreach ($request->ten_year_copy_form as $file) {
                    $query
                        ->addMedia($file)
                        ->preservingOriginal()
                        ->toMediaCollection("copy_form", "copy_form");
                }
            }

            if ($request->ten_year_copy_resolution) {
                $query->ten_year_copy_resolution = true;
                foreach ($request->ten_year_copy_resolution as $file) {
                    $query
                        ->addMedia($file)
                        ->preservingOriginal()
                        ->toMediaCollection("copy_resolution", "copy_resolution");
                }
            }
            $query->save();
            return redirect()->route("lce_show", ["id" => $request->lce_FK])->with("message", "10 Year Updated");
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
    public function ten_year_delete(request $request)
    {
        $ten_year_delete = SolidwasteTenYear::find($request->id);
        $ten_year_delete->delete();
        $ten_year_findings_delete = SolidwasteTenYearFindings::where('ten_year_FK',$request->id);
        $ten_year_findings_delete->delete();
        return back()->with("message", "10 Year Deleted");
    }

    public function removeFIle(request $request, Media $media)
    {
        $ten_yr = SolidwasteTenYear::findOrFail($media->model_id);

        if ($ten_yr->getMedia($media->collection_name)->count() === 1) {


            switch ($media->collection_name) {
                case 'copy_resolution':
                    $ten_yr->ten_year_copy_resolution = false;
                    break;
                case 'copy_form':
                    $ten_yr->ten_year_copy_form = false;
                    break;
                case 'copy_plan':
                    $ten_yr->ten_year_copy_plan = false;

                    break;
                case 'ten_yr_file':
                    $ten_yr->ten_year_file = false;
                    break;

                default:
                    $ten_yr->update();
                    break;
            }

            $ten_yr->save();
        }

        $media->delete();

        return back()->with("message", "Attachement Deleted");
    }
}
