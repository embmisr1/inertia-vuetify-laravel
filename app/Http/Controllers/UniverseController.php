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
        return Inertia::render("pages/universe/universe_list", []);
    }

    public function universe_form(request $request){
        if($request->id){
            $id = $request->id;
            $query = Universe::where('id',$id)->get();
            $query_permit = Permit::where('universe_FK',$id)->get();
            $query_monitoring = Monitoring::where('universe_FK',$id)->get();
            $query_legal = Legal::where('universe_FK',$id)->get();
            $query_hazwaste = Hazwaste::where('universe_FK',$id)->get();
            $query_pco = Pco::where('universe_FK',$id)->get();
            $query_complaint = Complaint::where('universe_FK',$id)->get();
            $ctr_file = $this->mini_dashboard($id);
            $province_list = Province::where('regCode','01')->get();
            if($query->count() > 0){
                return Inertia::render("pages/universe/universe_form",[
                    'query'=>$query[0],
                    'permit_table'=>$query_permit,
                    'monitoring_table'=>$query_monitoring,
                    'legal_table'=>$query_legal,
                    'hazwaste_table'=>$query_hazwaste,
                    'pco_table'=>$query_pco,
                    'complaint_table'=>$query_complaint,
                    'ctr_file'=>$ctr_file,
                    'province_list'=>$province_list,
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

// MINI DASHBOARD COUNTER =======================================================================================================
        
    public function mini_dashboard($fk){
        $ctr_permit = Permit::where('universe_FK',$fk)->count();
        $ctr_permit_pd1586 = Permit::where('universe_FK',$fk)->where('perm_law','like','%PD 1586%')->count();
        $ctr_permit_ra8749 = Permit::where('universe_FK',$fk)->where('perm_law','like','%RA 8749%')->count();
        $ctr_permit_ra9275 = Permit::where('universe_FK',$fk)->where('perm_law','like','%RA 9275%')->count();
        $ctr_permit_active = Permit::where('universe_FK',$fk)->where('perm_law','like','%RA 9275%')->count();
        $ctr_permit_expired = Permit::where('universe_FK',$fk)->where('perm_law','like','%RA 9275%')->count();
        $ctr_monitoring = Monitoring::where('universe_FK',$fk)->count();
        $ctr_legal = Legal::where('universe_FK',$fk)->count();
        $ctr_legal_pd1586 = Legal::where('universe_FK',$fk)->where('nov_law','like','%PD 1586%')->count();
        $ctr_legal_ra8749 = Legal::where('universe_FK',$fk)->where('nov_law','like','%RA 8749%')->count();
        $ctr_legal_ra9275 = Legal::where('universe_FK',$fk)->where('nov_law','like','%RA 9275%')->count();
        $ctr_legal_ra6969 = Legal::where('universe_FK',$fk)->where('nov_law','like','%RA 6969%')->count();
        $ctr_hazwaste = Hazwaste::where('universe_FK',$fk)->count();
        $ctr_pco = Pco::where('universe_FK',$fk)->count();
        $ctr_complaint = Complaint::where('universe_FK',$fk)->count();
        $array = [
            'permit' => [
                'header' => $ctr_permit,
                'content_label' => [
                    'PD 1586: ',
                    'RA 8749: ',
                    'RA 9275: ',
                    'Active: ',
                    'Expired: ',
                ],
                'content' => [
                    $ctr_permit_pd1586,
                    $ctr_permit_ra8749,
                    $ctr_permit_ra9275,
                    $ctr_permit_active,
                    $ctr_permit_expired,
                ],
            ],
            'nov' => [
                'header' => $ctr_legal,
                'content_label' => [
                    'PD 1586: ',
                    'RA 8749: ',
                    'RA 9275: ',
                    'RA 6969: ',
                ],
                'content' => [
                    $ctr_legal_pd1586,
                    $ctr_legal_ra8749,
                    $ctr_legal_ra9275,
                    $ctr_legal_ra6969,
                ],
            ],
            'monitoring' => [
                'header' => null,
                'content_label' => [''],
                'content' => [
                    $ctr_monitoring,
                ],
            ],
            'hazwaste' => [
                'header' => null,
                'content_label' => [''],
                'content' => [
                    $ctr_hazwaste,
                ],
            ],
            'pco' => [
                'header' => null,
                'content_label' => [''],
                'content' => [
                    $ctr_pco,
                ],
            ],
            'complaint' => [
                'header' => null,
                'content_label' => [''],
                'content' => [
                    $ctr_complaint,
                ],
            ],
        ];
        return $array;
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

    public function legal_columns(){
        $array = [
            'nov_law',
            'nov_desc',
            'nov_date',
            'nov_tc_date',
            'nov_tc_status',
            'nov_file',
            'nov_order_number',
            'nov_order_amt',
            'nov_order_date_issuance',
            'nov_order_date_settlement',
            'nov_official_receipt_number',
            'nov_compliance_status',
            'nov_order_remarks',
        ];
        return $array;
    }

    public function hazwaste_columns(){
        $array = [
            'haz_type',
            'haz_number',
            'haz_date_acceptance',
            'haz_date_issuance',
            'haz_date_expiry',
            'haz_file',
        ];
        return $array;
    }

    public function pco_columns(){
        $array = [
            'pco_name',
            'pco_number',
            'pco_email',
            'pco_contact',
            'pco_start_date',
            'pco_end_date',
        ];
        return $array;
    }

    public function complaint_columns(){
        $array = [
            'comp_name',
            'comp_nature',
            'comp_attached_file',
            'comp_action_file',
            'comp_remarks',
        ];
        return $array;
    }

    public function search_province($id){
        $query = Municipality::where('provCode', $id)->get();
        return response()->json($query);
    }
}