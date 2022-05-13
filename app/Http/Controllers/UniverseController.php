<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Universe;
use App\Models\Permit;
use App\Models\Monitoring;
use App\Models\Hazwaste;
use App\Models\Legal;
use App\Models\Complaint;
use App\Models\Pco;
use Illuminate\Support\Facades\Redirect;
use DB;

class UniverseController extends Controller
{
    public function universe_list(){
        return Inertia::render("pages/universe/universe_list", []);
    }

    public function universe_form(request $request){
        if($request->id){
            $id = $request->id;
            $query = Universe::where('id',$id)->get();
            if($query->count() > 0){
                return Inertia::render("pages/universe/universe_form",[
                    'query'=>$query[0],
                ]);
            }else{
                return Inertia::render("pages/universe/universe_form");
            }
        }else{
            return Inertia::render("pages/universe/universe_form");
        }
    }
    
    public function universe_process(request $request){
        if(isset($request->basic['id'])){
            $id = $this->universe_process_update($request);
            return Redirect::route('universe_form');
            // return Redirect::route('universe_form_id',[
            //     'id'=>$id,
            // ]);
        }else{
            $id = $this->universe_process_create($request);
            return Redirect::route('universe_form');
        }
    }
    
    public function universe_process_create($request){
        $query = new Universe();
        $query->un_crs_number = $request->basic['un_crs_number'];
        $query->un_psic_group = $request->basic['un_psic_group'];
        $query->un_psic_class = $request->basic['un_psic_class'];
        $query->un_psic_subclass = $request->basic['un_psic_subclass'];
        $query->un_firmname = $request->basic['un_firmname'];
        $query->un_proponent = $request->basic['un_proponent'];
        $query->un_project_type = $request->basic['un_project_type'];
        $query->un_project_subtype = $request->basic['un_project_subtype'];
        $query->un_project_specific_type = $request->basic['un_project_specific_type'];
        $query->un_project_specific_subtype = $request->basic['un_project_specific_subtype'];
        $query->un_detailed_description = $request->basic['un_detailed_description'];
        $query->un_specific_address = $request->basic['un_specific_address'];
        $query->un_region = $request->basic['un_region'];
        $query->un_brgy = $request->basic['un_brgy'];
        $query->un_municipality = $request->basic['un_municipality'];
        $query->un_province = $request->basic['un_province'];
        $query->un_lat = $request->basic['un_lat'];
        $query->un_long = $request->basic['un_long'];
        $query->un_representative_name = $request->basic['un_representative_name'];
        $query->un_representative_designation = $request->basic['un_representative_designation'];
        $query->un_representative_gender = $request->basic['un_representative_gender'];
        $query->un_remarks = $request->basic['un_remarks'];
        $query->un_status = $request->basic['un_status'];
        $query->un_type = $request->basic['un_type'];
        $query->save();
        return $query->id;
        // dd($request->basic['un_firmname']);
    }

    public function universe_process_update($request){
        $id = $request->basic['id'];
        $query = Universe::find($id);
        $query->un_crs_number = $request->basic['un_crs_number'];
        $query->un_psic_group = $request->basic['un_psic_group'];
        $query->un_psic_class = $request->basic['un_psic_class'];
        $query->un_psic_subclass = $request->basic['un_psic_subclass'];
        $query->un_firmname = $request->basic['un_firmname'];
        $query->un_proponent = $request->basic['un_proponent'];
        $query->un_project_type = $request->basic['un_project_type'];
        $query->un_project_subtype = $request->basic['un_project_subtype'];
        $query->un_project_specific_type = $request->basic['un_project_specific_type'];
        $query->un_project_specific_subtype = $request->basic['un_project_specific_subtype'];
        $query->un_detailed_description = $request->basic['un_detailed_description'];
        $query->un_specific_address = $request->basic['un_specific_address'];
        $query->un_region = $request->basic['un_region'];
        $query->un_brgy = $request->basic['un_brgy'];
        $query->un_municipality = $request->basic['un_municipality'];
        $query->un_province = $request->basic['un_province'];
        $query->un_lat = $request->basic['un_lat'];
        $query->un_long = $request->basic['un_long'];
        $query->un_representative_name = $request->basic['un_representative_name'];
        $query->un_representative_designation = $request->basic['un_representative_designation'];
        $query->un_representative_gender = $request->basic['un_representative_gender'];
        $query->un_remarks = $request->basic['un_remarks'];
        $query->un_status = $request->basic['un_status'];
        $query->un_type = $request->basic['un_type'];
        $query->save();
        return $query->id;
    }
}