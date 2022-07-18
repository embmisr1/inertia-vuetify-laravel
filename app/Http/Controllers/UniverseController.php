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
use App\Models\PsicGroup;
use App\Models\PsicClass;
use App\Models\PsicSubClass;
use App\Models\ProjectType;
use App\Models\ProjectSubType;
use App\Models\ProjectSpecificType;
use App\Models\ProjectSpecificSubType;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Request as FacadeRequest;
use App\Exports\UniverseExport;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;

class UniverseController extends Controller
{
    public function universe_list(Request $request)
    {
        $province_list = Province::where('regCode', '01')->get();
        $query = DB::table('tbl_universe as a')->select(
                'a.*',
                'b.provDesc',
                'c.citymunDesc',
                'd.brgyDesc',
            )
            ->leftjoin('ref_province as b', 'a.un_province', '=', 'b.PK_province_ID')
            ->leftjoin('ref_citymun as c', 'a.un_municipality', '=', 'c.PK_citymun_ID')
            ->leftjoin('ref_brgy as d', 'a.un_brgy', '=', 'd.PK_brgy_ID')
            ->when(request('PK_province_ID'), function ($query) {
                $query->where('a.un_province', request('PK_province_ID'));
            })
            ->when(request('PK_citymun_ID'), function ($query) {
                $query->where('a.un_municipality', request('PK_citymun_ID'));
            })
            ->when(request('PK_brgy_ID'), function ($query) {
                $query->where('a.un_brgy', request('PK_brgy_ID'));
            })
            ->when(request('searchStatus'), function ($query) {
                $query->where('a.un_status', request('searchStatus'));
            })
            ->when(request('searchType'), function ($query) {
                $query->where('a.un_type', request('searchType'));
            })
            ->when(request('selectedSearchCategory') == 'PERMIT', function ($query) {
                $query->leftjoin('tbl_permit as e', 'a.id', '=', 'e.universe_FK');
                $query->where(
                    function($query) {
                        if(request('search1586')){
                            $query->orwhere('e.perm_law', 'like', '%'.request("search1586").'%');
                        }
                        if(request('search8749')){
                            $query->orwhere('e.perm_law', 'like', '%'.request("search8749").'%');
                        }
                        if(request('search9275')){
                            $query->orwhere('e.perm_law', 'like', '%'.request("search9275").'%');
                        }
                        if(request('search6969')){
                            $query->orwhere('e.perm_law', 'like', '%'.request("search6969").'%');
                        }
                    }
                );
                $query->where('e.perm_law', '!=', '');
                $query->whereNotNull('e.perm_law');
                return $query->where('e.is_priority', 1);
            })
            ->when(request('selectedSearchCategory') == 'MONITORING', function ($query) {
                $query->leftjoin('tbl_monitoring as f', 'a.id', '=', 'f.universe_FK');
                $query->where(
                    function($query) {
                        if(request('search1586')){
                            $query->orwhere('f.mon_law', 'like', '%'.request("search1586").'%');
                        }
                        if(request('search8749')){
                            $query->orwhere('f.mon_law', 'like', '%'.request("search8749").'%');
                        }
                        if(request('search9275')){
                            $query->orwhere('f.mon_law', 'like', '%'.request("search9275").'%');
                        }
                        if(request('search6969')){
                            $query->orwhere('f.mon_law', 'like', '%'.request("search6969").'%');
                        }
                        if(request('search9003')){
                            $query->orwhere('f.mon_law', 'like', '%'.request("search9003").'%');
                        }
                        $query->where('f.mon_law', '!=', '');
                        $query->whereNotNull('f.mon_law');
                        return $query;
                    }
                );
            })
            ->when(request('selectedSearchCategory') == 'NOV', function ($query) {
                $query->leftjoin('tbl_legal as g', 'a.id', '=', 'g.universe_FK');
                $query->where(
                    function($query) {
                        if(request('search1586')){
                            $query->orwhere('g.nov_law', 'like', '%'.request("search1586").'%');
                        }
                        if(request('search8749')){
                            $query->orwhere('g.nov_law', 'like', '%'.request("search8749").'%');
                        }
                        if(request('search9275')){
                            $query->orwhere('g.nov_law', 'like', '%'.request("search9275").'%');
                        }
                        if(request('search6969')){
                            $query->orwhere('g.nov_law', 'like', '%'.request("search6969").'%');
                        }
                        if(request('search9003')){
                            $query->orwhere('g.nov_law', 'like', '%'.request("search9003").'%');
                        }
                        return $query;
                    }
                );
                $query->where('g.nov_law', '!=', '');
                $query->whereNotNull('g.nov_law');
                $query->where('g.nov_compliance_status', '!=', 'Complied');
            })
            ->when(request('selectedSearchCategory') == 'ORDER', function ($query) {
                $query->leftjoin('tbl_legal as h', 'a.id', '=', 'h.universe_FK');
                $query->where('h.nov_law', '!=', '');
                $query->whereNotNull('h.nov_law');
                $query->where('h.nov_compliance_status','!=','Complied')->where('h.nov_order_number','!=',null);
            })
            ->when(request('selectedSearchCategory') == 'PCO', function ($query) {
                $query->leftjoin('tbl_pco as i', 'a.id', '=', 'i.universe_FK');
                $query->where('i.pco_name', '!=', '');
                $query->whereNotNull('i.pco_name');
            })
            ->when(request('selectedSearchCategory') == 'COMPLAINT', function ($query) {
                $query->leftjoin('tbl_complaint as j', 'a.id', '=', 'j.universe_FK');
                $query->where('j.comp_name', '!=', '');
                $query->whereNotNull('j.comp_name');
            })
            ->when(request('searchValidity'), function ($query) {
                if(request('searchValidity') == 'EXPIRED'){
                    $query->where('e.perm_date_expiry','<=', Carbon::today()->toDateString());
                }elseif(request('searchValidity') == 'VALID'){
                    $query->where('e.perm_date_expiry','>', Carbon::today()->toDateString());
                }else{
                    $query->where('e.perm_date_expiry', null);
                }
            })
            ->paginate(10);

        return Inertia::render("pages/universe/universe_list", [
            "filter" => [
                'PK_province_ID' => request('PK_province_ID'),
                'PK_citymun_ID' => request('PK_citymun_ID'),
                'PK_brgy_ID' => request('PK_brgy_ID'),
                "selectedSearchCategory"=>request("selectedSearchCategory"),
                "searchStatus"=>request("searchStatus"),
                "searchType"=>request("searchType"),
                "search1586"=>request("search1586"),
                "search8749"=>request("search8749"),
                "search9275"=>request("search9275"),
                "search6969"=>request("search6969"),
                "search9003"=>request("search9003"),
                "searchValidity"=>request("searchValidity"),
            ],

            'query' => $query,
            'province_list' => $province_list,
        ]);
    }
    
    public function universe_dashboard(request $request){
        $firm_type = $request->firm_type;
        $query_registered_industries = DB::table('tbl_universe')->select('*')->where('un_type', $firm_type);
        $query_permit_1586 = DB::table('tbl_permit as a')->leftjoin('tbl_universe as b','a.universe_FK','=','b.id')->where('b.un_type', $firm_type)->where('a.perm_law','PD 1586')->where('a.is_priority',1);
        $query_permit_8749 = DB::table('tbl_permit as a')->leftjoin('tbl_universe as b','a.universe_FK','=','b.id')->where('b.un_type', $firm_type)->where('a.perm_law','RA 8749')->where('a.is_priority',1);
        $query_permit_9275 = DB::table('tbl_permit as a')->leftjoin('tbl_universe as b','a.universe_FK','=','b.id')->where('b.un_type', $firm_type)->where('a.perm_law','RA 9275')->where('a.is_priority',1);
        $query_permit_6969 = DB::table('tbl_permit as a')->leftjoin('tbl_universe as b','a.universe_FK','=','b.id')->where('b.un_type', $firm_type)->where('a.perm_law','RA 6969')->where('a.is_priority',1);
        // >------>
        $query_permit_8749_valid = DB::table('tbl_permit as a')->leftjoin('tbl_universe as b','a.universe_FK','=','b.id')->where('b.un_type', $firm_type)->where('a.perm_law','RA 8749')->where('a.is_priority',1)->where('a.perm_date_expiry','>',Carbon::today()->toDateString());
        $query_permit_9275_valid = DB::table('tbl_permit as a')->leftjoin('tbl_universe as b','a.universe_FK','=','b.id')->where('b.un_type', $firm_type)->where('a.perm_law','RA 9275')->where('a.is_priority',1)->where('a.perm_date_expiry','>',Carbon::today()->toDateString());
        $query_permit_8749_expired = DB::table('tbl_permit as a')->leftjoin('tbl_universe as b','a.universe_FK','=','b.id')->where('b.un_type', $firm_type)->where('a.perm_law','RA 8749')->where('a.is_priority',1)->where('a.perm_date_expiry','<=',Carbon::today()->toDateString());
        $query_permit_9275_expired = DB::table('tbl_permit as a')->leftjoin('tbl_universe as b','a.universe_FK','=','b.id')->where('b.un_type', $firm_type)->where('a.perm_law','RA 9275')->where('a.is_priority',1)->where('a.perm_date_expiry','<=',Carbon::today()->toDateString());
        $query_permit_8749_undefined = DB::table('tbl_permit as a')->leftjoin('tbl_universe as b','a.universe_FK','=','b.id')->where('b.un_type', $firm_type)->where('a.perm_law','RA 8749')->where('a.is_priority',1)
        ->where(
            function($query) {
              return $query->where('perm_date_expiry', null);
            }
        );
        $query_permit_9275_undefined = DB::table('tbl_permit as a')->leftjoin('tbl_universe as b','a.universe_FK','=','b.id')->where('b.un_type', $firm_type)->where('a.perm_law','RA 9275')->where('a.is_priority',1)
        ->where(
            function($query) {
              return $query->where('perm_date_expiry', null);
            }
        );
        $query_pco_all = DB::table('tbl_pco as a')->leftjoin('tbl_universe as b','a.universe_FK','=','b.id')->where('b.un_type', $firm_type)->where('a.pco_name','!=','')->whereNotNull('a.pco_name');
        $query_nov_all = DB::table('tbl_legal as a')->leftjoin('tbl_universe as b','a.universe_FK','=','b.id')->where('b.un_type', $firm_type)->where('a.nov_compliance_status','!=','Complied')->where('a.nov_law','!=','')->whereNotNull('a.nov_law');
        $query_nov_1586 = DB::table('tbl_legal as a')->leftjoin('tbl_universe as b','a.universe_FK','=','b.id')->where('b.un_type', $firm_type)->where('a.nov_compliance_status','!=','Complied')->where('a.nov_law','like','%PD 1586%');
        $query_nov_8749 = DB::table('tbl_legal as a')->leftjoin('tbl_universe as b','a.universe_FK','=','b.id')->where('b.un_type', $firm_type)->where('a.nov_compliance_status','!=','Complied')->where('a.nov_law','like','%RA 8749%');
        $query_nov_9275 = DB::table('tbl_legal as a')->leftjoin('tbl_universe as b','a.universe_FK','=','b.id')->where('b.un_type', $firm_type)->where('a.nov_compliance_status','!=','Complied')->where('a.nov_law','like','%RA 9275%');
        $query_nov_6969 = DB::table('tbl_legal as a')->leftjoin('tbl_universe as b','a.universe_FK','=','b.id')->where('b.un_type', $firm_type)->where('a.nov_compliance_status','!=','Complied')->where('a.nov_law','like','%RA 6969%');
        $query_nov_9003 = DB::table('tbl_legal as a')->leftjoin('tbl_universe as b','a.universe_FK','=','b.id')->where('b.un_type', $firm_type)->where('a.nov_compliance_status','!=','Complied')->where('a.nov_law','like','%RA 9003%');
        $query_order_issued = DB::table('tbl_legal as a')->leftjoin('tbl_universe as b','a.universe_FK','=','b.id')->where('b.un_type', $firm_type)->where('a.nov_compliance_status','!=','Complied')->where('a.nov_order_number','!=','')->whereNotNull('a.nov_order_number');
        $query_monitoring_all = DB::table('tbl_monitoring as a')->leftjoin('tbl_universe as b','a.universe_FK','=','b.id')->where('b.un_type', $firm_type)->where('a.mon_law','!=','')->whereNotNull('a.mon_law');
        $query_monitoring_1586 = DB::table('tbl_monitoring as a')->leftjoin('tbl_universe as b','a.universe_FK','=','b.id')->where('b.un_type', $firm_type)->where('a.mon_law','like','%PD 1586%');
        $query_monitoring_8749 = DB::table('tbl_monitoring as a')->leftjoin('tbl_universe as b','a.universe_FK','=','b.id')->where('b.un_type', $firm_type)->where('a.mon_law','like','%RA 8749%');
        $query_monitoring_9275 = DB::table('tbl_monitoring as a')->leftjoin('tbl_universe as b','a.universe_FK','=','b.id')->where('b.un_type', $firm_type)->where('a.mon_law','like','%RA 9275%');
        $query_monitoring_6969 = DB::table('tbl_monitoring as a')->leftjoin('tbl_universe as b','a.universe_FK','=','b.id')->where('b.un_type', $firm_type)->where('a.mon_law','like','%RA 6969%');
        $query_monitoring_9003 = DB::table('tbl_monitoring as a')->leftjoin('tbl_universe as b','a.universe_FK','=','b.id')->where('b.un_type', $firm_type)->where('a.mon_law','like','%RA 9003%');
        $query_complaint = DB::table('tbl_complaint as a')->leftjoin('tbl_universe as b','a.universe_FK','=','b.id')->where('b.un_type', $firm_type)->where('a.comp_name','!=','')->whereNotNull('a.comp_name');
        return Inertia::render("pages/universe/universe_dashboard",[
            'query_registered_industries'=>$query_registered_industries->count(),
            'query_permit_1586'=>$query_permit_1586->count(),
            'query_permit_8749'=>$query_permit_8749->count(),
            'query_permit_9275'=>$query_permit_9275->count(),
            'query_permit_6969'=>$query_permit_6969->count(),
            'query_permit_8749_valid'=>$query_permit_8749_valid->count(),
            'query_permit_9275_valid'=>$query_permit_9275_valid->count(),
            'query_permit_8749_expired'=>$query_permit_8749_expired->count(),
            'query_permit_9275_expired'=>$query_permit_9275_expired->count(),
            'query_permit_8749_undefined'=>$query_permit_8749_undefined->count(),
            'query_permit_9275_undefined'=>$query_permit_9275_undefined->count(),
            'query_pco_all'=>$query_pco_all->count(),
            'query_nov_all'=>$query_nov_all->count(),
            'query_nov_1586'=>$query_nov_1586->count(),
            'query_nov_8749'=>$query_nov_8749->count(),
            'query_nov_9275'=>$query_nov_9275->count(),
            'query_nov_6969'=>$query_nov_6969->count(),
            'query_nov_9003'=>$query_nov_9003->count(),
            'query_order_issued'=>$query_order_issued->count(),
            'query_monitoring_all'=>$query_monitoring_all->count(),
            'query_monitoring_1586'=>$query_monitoring_1586->count(),
            'query_monitoring_8749'=>$query_monitoring_8749->count(),
            'query_monitoring_9275'=>$query_monitoring_9275->count(),
            'query_monitoring_6969'=>$query_monitoring_6969->count(),
            'query_monitoring_9003'=>$query_monitoring_9003->count(),
            'query_complaint'=>$query_complaint->count(),
            'firm_type'=>$firm_type,
        ]);
    }

    public function universe_form(request $request)
    {
        $province_list = Province::where('regCode', '01')->get();
        $psic_group_list = PsicGroup::all();
        $project_type_list = ProjectType::all();
        if ($request->id) {
            $id = $request->id;
            $query = Universe::find($id);
            $query_permit = Permit::where('universe_FK', $id)->get();
            $query_monitoring = Monitoring::where('universe_FK', $id)->get();
            $query_legal = Legal::where('universe_FK', $id)->get();
            $query_hazwaste = Hazwaste::where('universe_FK', $id)->get();
            $query_pco = Pco::where('universe_FK', $id)->get();
            $query_complaint = Complaint::where('universe_FK', $id)->get();
            $ctr_file = $this->mini_dashboard_controller($id);
            $municipality_list = Municipality::where('provCode', $query->un_province)->get();
            $barangay_list = Barangay::where('citymunCode', $query->un_municipality)->get();
            $psic_class_list = PsicClass::where('psic_group_FK', $query->un_psic_group)->get();
            $psic_subclass_list = PsicSubClass::where('psic_class_FK', $query->un_psic_class)->get();
            $project_subtype_list = ProjectSubType::where('project_type_FK', $query->un_project_type)->get();
            $project_specific_type_list = ProjectSpecificType::where('project_subtype_FK', $query->un_project_subtype)->get();
            $project_specific_subtype_list = ProjectSpecificSubType::where('project_specific_type_FK', $query->un_project_specific_type)->get();
            if ($query->count() > 0) {
                return Inertia::render("pages/universe/universe_form", [
                    'query' => $query,
                    'permit_table' => $query_permit,
                    'monitoring_table' => $query_monitoring,
                    'legal_table' => $query_legal,
                    'hazwaste_table' => $query_hazwaste,
                    'pco_table' => $query_pco,
                    'complaint_table' => $query_complaint,
                    'ctr_file' => $ctr_file,
                    'province_list' => $province_list,
                    'municipality_list' => $municipality_list,
                    'barangay_list' => $barangay_list,
                    'psic_group_list' => $psic_group_list,
                    'psic_class_list' => $psic_class_list,
                    'psic_subclass_list' => $psic_subclass_list,
                    'project_type_list' => $project_type_list,
                    'project_subtype_list' => $project_subtype_list,
                    'project_specific_type_list' => $project_specific_type_list,
                    'project_specific_subtype_list' => $project_specific_subtype_list,
                ]);
            } else {
                return Inertia::render("pages/universe/universe_form", [
                    'permit_table' => $query_permit,
                    'monitoring_table' => $query_monitoring,
                    'legal_table' => $query_legal,
                    'hazwaste_table' => $query_hazwaste,
                    'pco_table' => $query_pco,
                    'complaint_table' => $query_complaint,
                    'ctr_file' => $ctr_file,
                    'province_list' => $province_list,
                    'municipality_list' => $municipality_list,
                    'barangay_list' => $barangay_list,
                    'psic_group_list' => $psic_group_list,
                    'psic_class_list' => $psic_class_list,
                    'psic_subclass_list' => $psic_subclass_list,
                    'project_type_list' => $project_type_list,
                    'project_subtype_list' => $project_subtype_list,
                    'project_specific_type_list' => $project_specific_type_list,
                    'project_specific_subtype_list' => $project_specific_subtype_list,
                ]);
            }
        } else {
            return Inertia::render("pages/universe/universe_form", [
                'province_list' => $province_list,
                'municipality_list' => [],
                'barangay_list' => [],
                'psic_group_list' => $psic_group_list,
                'psic_class_list' => [],
                'psic_subclass_list' => [],
                'project_type_list' => $project_type_list,
                'project_subtype_list' => [],
                'project_specific_type_list' => [],
                'project_specific_subtype_list' => [],
            ]);
        }
    }

    // =============================================== MAIN PROCESS ===============================================

    public function universe_process(request $request)
    {
        if (isset($request->basic['id'])) {
            $id = $this->universe_process_update($request);
            return Redirect::route('universe_form_id', [
                'id' => $id,
            ]);
        } else {
            $id = $this->universe_process_create($request);
            return Redirect::route('universe_form');
        }
    }

    // =============================================== GENERAL PROCESS ===============================================

    public function universe_process_create($request)
    {
        $universe_id = $this->basic_process_create($request);
        $this->permit_process_create($request, $universe_id);
        $this->monitoring_process_create($request, $universe_id);
        $this->legal_process_create($request, $universe_id);
        $this->hazwaste_process_create($request, $universe_id);
        $this->pco_process_create($request, $universe_id);
        $this->complaint_process_create($request, $universe_id);
        return $universe_id;
    }

    public function universe_process_update($request)
    {
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

    public function basic_process_create($request)
    {
        $basic_controller = new UniverseBasicController;
        return $basic_controller->basic_process_create($request);
    }

    public function basic_process_update($request)
    {
        $basic_controller = new UniverseBasicController;
        return $basic_controller->basic_process_update($request);
    }

    // =============================================== PERMITS ===============================================

    public function permit_process_create($request, $universe_id)
    {
        $permit_controller = new UniversePermitController;
        return $permit_controller->permit_process_create($request, $universe_id);
    }

    public function permit_process_update($request, $universe_id)
    {
        $permit_controller = new UniversePermitController;
        return $permit_controller->permit_process_update($request, $universe_id);
    }

    public function delete_permit($request)
    {
        $permit_controller = new UniversePermitController;
        return $permit_controller->delete_permit($request);
    }

    // =============================================== MONITORING ===============================================

    public function monitoring_process_create($request, $universe_id)
    {
        $monitoring_controller = new UniverseMonitoringController;
        return $monitoring_controller->monitoring_process_create($request, $universe_id);
    }

    public function monitoring_process_update($request, $universe_id)
    {
        $monitoring_controller = new UniverseMonitoringController;
        return $monitoring_controller->monitoring_process_update($request, $universe_id);
    }

    public function delete_monitoring($request)
    {
        $monitoring_controller = new UniverseMonitoringController;
        return $monitoring_controller->delete_monitoring($request);
    }

    // =============================================== LEGAL/NOV ===============================================

    public function legal_process_create($request, $universe_id)
    {
        $legal_controller = new UniverseLegalController;
        return $legal_controller->legal_process_create($request, $universe_id);
    }

    public function legal_process_update($request, $universe_id)
    {
        $legal_controller = new UniverseLegalController;
        return $legal_controller->legal_process_update($request, $universe_id);
    }

    public function delete_legal($request)
    {
        $legal_controller = new UniverseLegalController;
        return $legal_controller->delete_legal($request);
    }

    // =============================================== HAZWASTE ===============================================

    public function hazwaste_process_create($request, $universe_id)
    {
        $hazwaste_controller = new UniverseHazwasteController;
        return $hazwaste_controller->hazwaste_process_create($request, $universe_id);
    }

    public function hazwaste_process_update($request, $universe_id)
    {
        $hazwaste_controller = new UniverseHazwasteController;
        return $hazwaste_controller->hazwaste_process_update($request, $universe_id);
    }

    public function delete_hazwaste($request)
    {
        $hazwaste_controller = new UniverseHazwasteController;
        return $hazwaste_controller->delete_hazwaste($request);
    }

    // =============================================== PCO ===============================================

    public function pco_process_create($request, $universe_id)
    {
        $pco_controller = new UniversePcoController;
        return $pco_controller->pco_process_create($request, $universe_id);
    }

    public function pco_process_update($request, $universe_id)
    {
        $pco_controller = new UniversePcoController;
        return $pco_controller->pco_process_update($request, $universe_id);
    }

    public function delete_pco($request)
    {
        $pco_controller = new UniversePcoController;
        return $pco_controller->delete_pco($request);
    }

    // =============================================== COMPLAINT ===============================================

    public function complaint_process_create($request, $universe_id)
    {
        $complaint_controller = new UniverseComplaintController;
        return $complaint_controller->complaint_process_create($request, $universe_id);
    }

    public function complaint_process_update($request, $universe_id)
    {
        $complaint_controller = new UniverseComplaintController;
        return $complaint_controller->complaint_process_update($request, $universe_id);
    }

    public function delete_complaint($request)
    {
        $complaint_controller = new UniverseComplaintController;
        return $complaint_controller->delete_complaint($request);
    }

    // =============================================== MINI DASHBOARD COUNTER ===============================================

    public function mini_dashboard_controller($id)
    {
        $mini_dashboard_controller = new MiniDashboardController;
        return $mini_dashboard_controller->mini_dashboard($id);
    }

    // =============================================== EXPORT EXCEL ===============================================

    public function export() 
    {
        return Excel::download(new UniverseExport, 'universe.xlsx');
    }
}
