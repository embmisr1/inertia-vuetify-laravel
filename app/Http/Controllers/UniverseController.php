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
use App\Models\Barangay;
use App\Models\Municipality;
use App\Models\Province;
use Illuminate\Support\Facades\Redirect;
use DB;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

class UniverseController extends Controller
{
    public function universe_list(){
        // $query = Universe::where('id','!=',0)->paginate(3);
        $query = DB::table('tbl_universe as a')->select(
            'a.*', 
            'b.provDesc',
            'c.citymunDesc',
            'd.brgyDesc',
        )
        ->leftjoin('ref_province as b','a.un_province','=','b.PK_province_ID')
        ->leftjoin('ref_citymun as c','a.un_municipality','=','c.PK_citymun_ID')
        ->leftjoin('ref_brgy as d','a.un_brgy','=','d.PK_brgy_ID')
        ->paginate(3);
        return Inertia::render("pages/universe/universe_list", [
            'query'=>$query,
        ]);
    }

    public function universe_form(request $request){
        $province_list = Province::where('regCode','01')->get();
        if($request->id){
            $id = $request->id;
            $query = Universe::find($id);
            $query_permit = Permit::where('universe_FK',$id)->get();
            $query_monitoring = Monitoring::where('universe_FK',$id)->get();
            $query_legal = Legal::where('universe_FK',$id)->get();
            $query_hazwaste = Hazwaste::where('universe_FK',$id)->get();
            $query_pco = Pco::where('universe_FK',$id)->get();
            $query_complaint = Complaint::where('universe_FK',$id)->get();
            $ctr_file = $this->mini_dashboard_controller($id);
            $province_list = Province::where('regCode','01')->get();
            $municipality_list = Municipality::where('provCode',$query->un_province)->get();
            // $barangay_list = Barangay::whereRaw('CAST(citymunCode AS SIGNED) = '.$query->un_municipality)->get();
            $barangay_list = Barangay::where('citymunCode',$query->un_municipality)->get();
            if($query->count() > 0){
                return Inertia::render("pages/universe/universe_form",[
                    'query'=>$query,
                    'permit_table'=>$query_permit,
                    'monitoring_table'=>$query_monitoring,
                    'legal_table'=>$query_legal,
                    'hazwaste_table'=>$query_hazwaste,
                    'pco_table'=>$query_pco,
                    'complaint_table'=>$query_complaint,
                    'ctr_file'=>$ctr_file,
                    'province_list'=>$province_list,
                    'municipality_list'=>$municipality_list,
                    'barangay_list'=>$barangay_list,
                ]);
            }else{
                return Inertia::render("pages/universe/universe_form",[
                    'permit_table'=>$query_permit,
                    'monitoring_table'=>$query_monitoring,
                    'legal_table'=>$query_legal,
                    'hazwaste_table'=>$query_hazwaste,
                    'pco_table'=>$query_pco,
                    'complaint_table'=>$query_complaint,
                    'ctr_file'=>$ctr_file,
                    'province_list'=>$province_list,
                    'municipality_list'=>$municipality_list,
                    'barangay_list'=>$barangay_list,
                ]);
            }
        }else{
                return Inertia::render("pages/universe/universe_form",[
                    'province_list'=>$province_list,
                    'municipality_list'=>[],
                    'barangay_list'=>[],
                ]);
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
        $this->legal_process_create($request, $universe_id);
        $this->hazwaste_process_create($request, $universe_id);
        $this->pco_process_create($request, $universe_id);
        $this->complaint_process_create($request, $universe_id);
        return $universe_id;
    }

    public function universe_process_update($request){
        $universe_id = $this->basic_process_update($request);
        $this->permit_process_update($request, $universe_id);
        $this->monitoring_process_update($request, $universe_id);
        $this->legal_process_update($request, $universe_id);
        $this->hazwaste_process_update($request, $universe_id);
        $this->pco_process_update($request, $universe_id);
        $this->complaint_process_update($request, $universe_id);
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
    
    // =============================================== PERMITS ===============================================

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

    // =============================================== MONITORING ===============================================
    
    public function monitoring_process_create($request, $universe_id){
        if($request->monitoring['mon_law'] && $request->monitoring['mon_date_monitored']){
            $query = new Monitoring();
            foreach($this->monitoring_columns() as $cols){
                $query->$cols = $request->monitoring[$cols];
            }
            $query->mon_law = $this->industry_laws($request, 'monitoring', 'mon_law');
            $query->universe_FK = $universe_id;
            $query->save();
            return $query->id;
        }
    }

    public function monitoring_process_update($request, $universe_id){
        if($request->monitoring['mon_law'] && $request->monitoring['mon_date_monitored']){
            if($request->monitoring['mon_id']){
                $query = Monitoring::find($request->monitoring['mon_id']);
            }else{
                $query = new Monitoring();
            }
            foreach($this->monitoring_columns() as $cols){
                $query->$cols = $request->monitoring[$cols];
            }
            $query->mon_law = $this->industry_laws($request, 'monitoring', 'mon_law');
            $query->universe_FK = $universe_id;
            $query->save();
            return $request->monitoring['mon_id'];
        }
    }
    
    public function delete_monitoring($request){
        $query = Monitoring::find($request);
        $query->delete();
        return back();
    }
    
    // =============================================== LEGAL/NOV ===============================================
    
    public function legal_process_create($request, $universe_id){
        if($request->legal['nov_law'] && $request->legal['nov_date']){
            $query = new Legal();
            foreach($this->legal_columns() as $cols){
                $query->$cols = $request->legal[$cols];
            }
            $query->nov_law = $this->industry_laws($request, 'legal', 'nov_law');
            $query->universe_FK = $universe_id;
            $query->save();
            return $query->id;
        }
    }

    public function legal_process_update($request, $universe_id){
        if($request->legal['nov_law'] && $request->legal['nov_date']){
            if($request->legal['nov_id']){
                $query = Legal::find($request->legal['nov_id']);
            }else{
                $query = new Legal();
            }
            foreach($this->legal_columns() as $cols){
                $query->$cols = $request->legal[$cols];
            }
            $query->nov_law = $this->industry_laws($request, 'legal', 'nov_law');
            $query->universe_FK = $universe_id;
            $query->save();
            return $request->legal['nov_id'];
        }
    }
    
    public function delete_legal($request){
        $query = Legal::find($request);
        $query->delete();
        return back();
    }
    
    // =============================================== HAZWASTE ===============================================
    
    public function hazwaste_process_create($request, $universe_id){
        if($request->hazwaste['haz_type'] && $request->hazwaste['haz_number']){
            $query = new Hazwaste();
            foreach($this->hazwaste_columns() as $cols){
                $query->$cols = $request->hazwaste[$cols];
            }
            $query->universe_FK = $universe_id;
            $query->save();
            return $query->id;
        }
    }

    public function hazwaste_process_update($request, $universe_id){
        if($request->hazwaste['haz_type'] && $request->hazwaste['haz_number']){
            if($request->hazwaste['haz_id']){
                $query = Hazwaste::find($request->hazwaste['haz_id']);
            }else{
                $query = new Hazwaste();
            }
            foreach($this->hazwaste_columns() as $cols){
                $query->$cols = $request->hazwaste[$cols];
            }
            $query->universe_FK = $universe_id;
            $query->save();
            return $request->hazwaste['haz_id'];
        }
    }
    
    public function delete_hazwaste($request){
        $query = Hazwaste::find($request);
        $query->delete();
        return back();
    }
    
    // =============================================== PCO ===============================================
    
    public function pco_process_create($request, $universe_id){
        if($request->pco['pco_name'] && $request->pco['pco_number']){
            $query = new Pco();
            foreach($this->pco_columns() as $cols){
                $query->$cols = $request->pco[$cols];
            }
            $query->universe_FK = $universe_id;
            $query->save();
            return $query->id;
        }
    }

    public function pco_process_update($request, $universe_id){
        if($request->pco['pco_name'] && $request->pco['pco_number']){
            if($request->pco['pco_id']){
                $query = Pco::find($request->pco['pco_id']);
            }else{
                $query = new Pco();
            }
            foreach($this->pco_columns() as $cols){
                $query->$cols = $request->pco[$cols];
            }
            $query->universe_FK = $universe_id;
            $query->save();
            return $request->pco['pco_id'];
        }
    }
    
    public function delete_pco($request){
        $query = Pco::find($request);
        $query->delete();
        return back();
    }
    
    // =============================================== COMPLAINT ===============================================
    
    public function complaint_process_create($request, $universe_id){
        if($request->complaint['comp_name'] && $request->complaint['comp_nature']){
            $query = new Complaint();
            foreach($this->complaint_columns() as $cols){
                $query->$cols = $request->complaint[$cols];
            }
            $query->universe_FK = $universe_id;
            $query->save();
            return $query->id;
        }
    }

    public function complaint_process_update($request, $universe_id){
        if($request->complaint['comp_name'] && $request->complaint['comp_nature']){
            if($request->complaint['comp_id']){
                $query = Complaint::find($request->complaint['comp_id']);
            }else{
                $query = new Complaint();
            }
            foreach($this->complaint_columns() as $cols){
                $query->$cols = $request->complaint[$cols];
            }
            $query->universe_FK = $universe_id;
            $query->save();
            return $request->complaint['comp_id'];
        }
    }
    
    public function delete_complaint($request){
        $query = Complaint::find($request);
        $query->delete();
        return back();
    }

// LAWS ARRAY CALLABLE =======================================================================================================

    public function industry_laws($request, $law, $column){
        $industry_laws = '';
        foreach($request->$law[$column] as $industry_law){
            $industry_laws = $industry_laws.$industry_law.', ';
        }
        return rtrim($industry_laws,', ');
    }

// MINI DASHBOARD COUNTER =======================================================================================================
    
    public function mini_dashboard_controller($id){
        $mini_dashboard_controller = new MiniDashboardController;
        return $mini_dashboard_controller->mini_dashboard($id);
    }

// COLUMNS =======================================================================================================


    public function basic_columns(){
        $columns_controller = new ColumnsController;
        return $columns_controller->basic_columns();
    }

    public function permit_columns(){
        $columns_controller = new ColumnsController;
        return $columns_controller->permit_columns();
    }

    public function monitoring_columns(){
        $columns_controller = new ColumnsController;
        return $columns_controller->monitoring_columns();
    }

    public function legal_columns(){
        $columns_controller = new ColumnsController;
        return $columns_controller->legal_columns();
    }

    public function hazwaste_columns(){
        $columns_controller = new ColumnsController;
        return $columns_controller->hazwaste_columns();
    }

    public function pco_columns(){
        $columns_controller = new ColumnsController;
        return $columns_controller->pco_columns();
    }

    public function complaint_columns(){
        $columns_controller = new ColumnsController;
        return $columns_controller->complaint_columns();
    }
}