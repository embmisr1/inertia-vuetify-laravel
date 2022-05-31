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

    // =============================================== MAIN PROCESS ===============================================

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

    // =============================================== GENERAL PROCESS ===============================================

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

    // =============================================== INDIVUDUAL PROCESS ===============================================

    public function basic_process_create($request){
        $basic_controller = new UniverseBasicController;
        return $basic_controller->basic_process_create($request);
    }

    public function basic_process_update($request){
        $basic_controller = new UniverseBasicController;
        return $basic_controller->basic_process_update($request);
    }
    
    // =============================================== PERMITS ===============================================

    public function permit_process_create($request, $universe_id){
        $permit_controller = new UniversePermitController;
        return $permit_controller->permit_process_create($request, $universe_id);
    }

    public function permit_process_update($request, $universe_id){
        $permit_controller = new UniversePermitController;
        return $permit_controller->permit_process_update($request, $universe_id);
    }
    
    public function delete_permit($request){
        $permit_controller = new UniversePermitController;
        return $permit_controller->delete_permit($request);
    }

    // =============================================== MONITORING ===============================================
    
    public function monitoring_process_create($request, $universe_id){
        $monitoring_controller = new UniverseMonitoringController;
        return $monitoring_controller->monitoring_process_create($request, $universe_id);
    }

    public function monitoring_process_update($request, $universe_id){
        $monitoring_controller = new UniverseMonitoringController;
        return $monitoring_controller->monitoring_process_update($request, $universe_id);
    }
    
    public function delete_monitoring($request){
        $monitoring_controller = new UniverseMonitoringController;
        return $monitoring_controller->delete_monitoring($request);
    }
    
    // =============================================== LEGAL/NOV ===============================================
    
    public function legal_process_create($request, $universe_id){
        $legal_controller = new UniverseLegalController;
        return $legal_controller->legal_process_create($request, $universe_id);
    }

    public function legal_process_update($request, $universe_id){
        $legal_controller = new UniverseLegalController;
        return $legal_controller->legal_process_update($request, $universe_id);
    }
    
    public function delete_legal($request){
        $legal_controller = new UniverseLegalController;
        return $legal_controller->delete_legal($request);
    }
    
    // =============================================== HAZWASTE ===============================================
    
    public function hazwaste_process_create($request, $universe_id){
        $hazwaste_controller = new UniverseHazwasteController;
        return $hazwaste_controller->hazwaste_process_create($request, $universe_id);
    }

    public function hazwaste_process_update($request, $universe_id){
        $hazwaste_controller = new UniverseHazwasteController;
        return $hazwaste_controller->hazwaste_process_update($request, $universe_id);
    }
    
    public function delete_hazwaste($request){
        $hazwaste_controller = new UniverseHazwasteController;
        return $hazwaste_controller->delete_hazwaste($request);
    }
    
    // =============================================== PCO ===============================================
    
    public function pco_process_create($request, $universe_id){
        $pco_controller = new UniversePcoController;
        return $pco_controller->pco_process_create($request, $universe_id);
    }

    public function pco_process_update($request, $universe_id){
        $pco_controller = new UniversePcoController;
        return $pco_controller->pco_process_update($request, $universe_id);
    }
    
    public function delete_pco($request){
        $pco_controller = new UniversePcoController;
        return $pco_controller->delete_pco($request);
    }
    
    // =============================================== COMPLAINT ===============================================
    
    public function complaint_process_create($request, $universe_id){
        $complaint_controller = new UniverseComplaintController;
        return $complaint_controller->complaint_process_create($request, $universe_id);
    }

    public function complaint_process_update($request, $universe_id){
        $complaint_controller = new UniverseComplaintController;
        return $complaint_controller->complaint_process_update($request, $universe_id);
    }
    
    public function delete_complaint($request){
        $complaint_controller = new UniverseComplaintController;
        return $complaint_controller->delete_complaint($request);
    }

    // =============================================== MINI DASHBOARD COUNTER ===============================================
    
    public function mini_dashboard_controller($id){
        $mini_dashboard_controller = new MiniDashboardController;
        return $mini_dashboard_controller->mini_dashboard($id);
    }

}