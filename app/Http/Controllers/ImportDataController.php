<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Universe;
use App\Models\Permit;
use App\Models\Monitoring;
use App\Models\Hazwaste;
use App\Models\Legal;
use App\Models\Complaint;
use App\Models\Pco;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ImportDataController extends Controller
{

    // =============================================== DATA IMPORT ===============================================

    public function import_data(){
        // =============================================== UNIVERSE TABLE ===============================================
        // $query = DB::table('rips_universe')->select('*')->get();
        // foreach($query as $qry){
        //     $query_import = new Universe();
        //     $query_import->id = $qry->id;
        //     $query_import->un_crs_number = $qry->crsnumber;
        //     $query_import->un_psic_group = $qry->psic_group;
        //     $query_import->un_psic_class = $qry->psic_class;
        //     $query_import->un_psic_subclass = $qry->psic_subclass;
        //     $query_import->un_region = $qry->regional_office;
        //     $query_import->un_firmname = $qry->firmname;
        //     $query_import->un_proponent = $qry->proponent;
        //     $query_import->un_project_type = $qry->project_type;
        //     $query_import->un_project_subtype = $qry->project_subtype;
        //     $query_import->un_project_specific_type = $qry->project_specific_type;
        //     $query_import->un_project_specific_subtype = $qry->project_specific_subtype;
        //     $query_import->un_detailed_description = $qry->detailed_description;
        //     $query_import->un_specific_address = $qry->specified_address;
        //     $query_import->un_brgy = $qry->barangay;
        //     $query_import->un_municipality = $qry->municipality;
        //     $query_import->un_province = $qry->province;
        //     $query_import->un_lat = $qry->latitude;
        //     $query_import->un_long = $qry->longitude;
        //     $query_import->un_representative_name = $qry->representative_name;
        //     $query_import->un_representative_designation = $qry->representative_designation;
        //     $query_import->un_representative_gender = $qry->representative_gender;
        //     $query_import->un_remarks = $qry->remarks;
        //     $query_import->un_status = $qry->status;
        //     $query_import->un_type = $qry->firm_or_lgu;
        //     $query_import->save();
        // }
        // =============================================== PERMIT TABLE ===============================================
        // $query = DB::table('rips_permits')->select('*')->get();
        // foreach($query as $qry){
        //     $query_import = new Permit();
        //     $query_import->id = $qry->id;
        //     $query_import->perm_law = $qry->law;
        //     $query_import->perm_number = $qry->permit_number;
        //     $query_import->perm_date_acceptance = $qry->date_acceptance;
        //     $query_import->perm_date_issuance = $qry->date_issued;
        //     $query_import->perm_date_expiry = $qry->date_expiry;
        //     $query_import->perm_file = $qry->filename;
        //     $query_import->perm_description = $qry->permit_apsi;
        //     $query_import->perm_status = $qry->permit_status;
        //     $query_import->universe_FK = $qry->FK_universe_id;
        //     $query_import->created_at = $qry->created_at;
        //     $query_import->updated_at = $qry->updated_at;
        //     $query_import->save();
        // }
        // $query = DB::table('rips_hazwaste')->select('*')->get();
        // foreach($query as $qry){
        //     $query_import = new Permit();
        //     $query_import->perm_hazwaste_type = $qry->hazwaste_type;
        //     $query_import->perm_law = 'RA 6969';
        //     $query_import->perm_number = $qry->hazwaste_number;
        //     $query_import->perm_date_acceptance = $qry->date_acceptance;
        //     $query_import->perm_date_issuance = $qry->date_issued;
        //     $query_import->perm_date_expiry = $qry->date_expiry;
        //     $query_import->perm_file = $qry->filename;
        //     $query_import->universe_FK = $qry->FK_universe_id;
        //     $query_import->created_at = $qry->created_at;
        //     $query_import->updated_at = $qry->updated_at;
        //     $query_import->save();
        // }
        // =============================================== MONITORING TABLE ===============================================
        // $query = DB::table('rips_monitoring')->select('*')->get();
        // foreach($query as $qry){
        //     $query_import = new Monitoring();
        //     $query_import->id = $qry->id;
        //     $query_import->mon_law = $qry->law;
        //     $query_import->mon_date_monitored = $qry->date_monitored;
        //     $query_import->mon_file = $qry->filename;
        //     $query_import->universe_FK = $qry->FK_universe_id;
        //     $query_import->save();
        // }
        // =============================================== LEGAL TABLE ===============================================
        // $query = DB::table('rips_legal')->select('*')->get();
        // foreach($query as $qry){
        //     $query_import = new Legal();
        //     $query_import->id = $qry->id;
        //     $query_import->nov_law = $qry->law;
        //     $query_import->nov_desc = $qry->nov_desc;
        //     $query_import->nov_date = $qry->date_nov;
        //     $query_import->nov_tc_date = $qry->date_tc;
        //     $query_import->nov_tc_status = $qry->compliance_status;
        //     $query_import->nov_file = $qry->filename;
        //     $query_import->nov_order_number = $qry->order_no;
        //     $query_import->nov_order_amt = $qry->order_amount;
        //     $query_import->nov_order_date_issuance = $qry->order_date_issuance;
        //     $query_import->nov_order_date_settlement = $qry->order_date_settlement;
        //     $query_import->nov_official_receipt_number = $qry->order_or_number;
        //     $query_import->nov_compliance_status = $qry->order_compliance_status;
        //     $query_import->nov_order_remarks = $qry->order_remarks;
        //     $query_import->universe_FK = $qry->FK_universe_id;
        //     $query_import->save();
        // }
        // =============================================== PCO TABLE ===============================================
        // $query = DB::table('rips_pco')->select('*')->get();
        // foreach($query as $qry){
        //     $query_import = new Pco();
        //     $query_import->id = $qry->id;
        //     $query_import->pco_name = $qry->pco;
        //     $query_import->pco_number = $qry->pco_accred_num;
        //     $query_import->pco_email = $qry->pco_email;
        //     $query_import->pco_contact = $qry->pco_contact;
        //     $query_import->pco_start_date = $qry->pco_start_date;
        //     $query_import->pco_end_date = $qry->pco_end_date;
        //     $query_import->universe_FK = $qry->FK_ripsUniverse_ID;
        //     $query_import->save();
        // }
    }
}
