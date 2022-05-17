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
use Illuminate\Support\Facades\Schema;

class UniverseController extends Controller
{
    public function universe_list(){
        return Inertia::render("pages/universe/universe_list", []);
    }

    public function universe_form(request $request){
        if($request->id){
            $id = $request->id;
            $query = Universe::where('id',$id)->get();
            $query_permit = Permit::where('universe_FK',$id)->get();
            $query_monitoring = Monitoring::where('universe_FK',$id)->get();
            if($query->count() > 0){
                return Inertia::render("pages/universe/universe_form",[
                    'query'=>$query[0],
                    'permit_table'=>$query_permit,
                    'monitoring_table'=>$query_monitoring,
                ]);
            }else{
                return Inertia::render("pages/universe/universe_form",[
                    'permit_table'=>$query_permit,
                    'monitoring_table'=>$query_monitoring,
                ]);
            }
        }else{
                return Inertia::render("pages/universe/universe_form");
        }
    }
    
// MAIN PROCESS =======================================================================================================

    public function universe_process(request $request){
        if(isset($request->basic['id'])){
            $id = $this->universe_process_update($request);
            return Redirect::route('universe_form_id',[
                'id'=>$id,
            ]);
        }else{
            $id = $this->universe_process_create($request);
            return Redirect::route('universe_form');
        }
    }

// GENERAL PROCESS =======================================================================================================

    public function universe_process_create($request){
        $universe_id = $this->basic_process_create($request);
        $this->permit_process_create($request, $universe_id);
        $this->monitoring_process_create($request, $universe_id);
        return $universe_id;
    }

    public function universe_process_update($request){
        $universe_id = $this->basic_process_update($request);
        $this->permit_process_update($request, $universe_id);
        $this->monitoring_process_create($request, $universe_id);
        return $universe_id;
    }

// INDIVUDUAL PROCESS =======================================================================================================

    public function basic_process_create($request){
        $query = new Universe();
        foreach($this->basic_columns() as $cols){
            $query->$cols = $request->basic[$cols];
        }
        $query->save();
        return $query->id;
    }
    
    public function basic_process_update($request){
        $query = Universe::find($request->basic['id']);
        foreach($this->basic_columns() as $cols){
            $query->$cols = $request->basic[$cols];
        }
        $query->save();
        return $request->basic['id'];
    }
    
    public function permit_process_create($request, $universe_id){
        if($request->permit['perm_law'] && $request->permit['perm_number']){
            $query = new Permit();
            foreach($this->permit_columns() as $cols){
                $query->$cols = $request->permit[$cols];
            }
            $query->universe_FK = $universe_id;
            $query->save();
            return $query->id;
        }
    }

    public function permit_process_update($request, $universe_id){
        if($request->permit['perm_law'] && $request->permit['perm_number']){
            if($request->permit['perm_id']){
                $query = Permit::find($request->permit['perm_id']);
            }else{
                $query = new Permit();
            }
            foreach($this->permit_columns() as $cols){
                $query->$cols = $request->permit[$cols];
            }
            $query->universe_FK = $universe_id;
            $query->save();
            return $request->permit['perm_id'];
        }
    }
    
    public function delete_permit($request){
        $query = Permit::find($request);
        $query->delete();
        return back();
    }
    
    public function monitoring_process_create($request, $universe_id){
        if($request->monitoring['mon_law'] && $request->monitoring['mon_date_monitored']){
            $query = new Monitoring();
            foreach($this->monitoring_columns() as $cols){
                $query->$cols = $request->monitoring[$cols];
            }
            $query->universe_FK = $universe_id;
            $query->save();
            return $query->id;
        }
    }

// COLUMNS =======================================================================================================

    public function basic_columns(){
        $array = [
            'un_crs_number',
            'un_psic_group',
            'un_psic_class',
            'un_psic_subclass',
            'un_firmname',
            'un_proponent',
            'un_project_type',
            'un_project_subtype',
            'un_project_specific_type',
            'un_project_specific_subtype',
            'un_detailed_description',
            'un_specific_address',
            'un_region',
            'un_brgy',
            'un_municipality',
            'un_province',
            'un_lat',
            'un_long',
            'un_representative_name',
            'un_representative_designation',
            'un_representative_gender',
            'un_remarks',
            'un_status',
            'un_type',
        ];
        return $array;
    }

    public function permit_columns(){
        $array = [
            'perm_law',
            'perm_number',
            'perm_date_issuance',
            'perm_date_expiry',
            'perm_file',
            'perm_description',
            'perm_status',
        ];
        return $array;
    }

    public function monitoring_columns(){
        $array = [
            'mon_law',
            'mon_date_monitored',
            'mon_type',
            'mon_file',
        ];
        return $array;
    }
}