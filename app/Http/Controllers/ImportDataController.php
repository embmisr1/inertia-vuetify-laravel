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
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
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
        //     $query_import->un_brgy = $qry->barangay == 'null' ? null : $qry->barangay;
        //     $query_import->un_municipality = $qry->municipality == 'null' ? null : $qry->municipality;
        //     $query_import->un_province = $qry->province == 'null' ? null : $qry->province;
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
        // =============================================== PERMIT TABLE - AIR WATER HAZWASTE ===============================================
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
        // =============================================== PERMIT TABLE - HAZWASTE ===============================================
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
        // =============================================== PERMIT TABLE - IS PRIORITY ===============================================
        // $query = DB::table('tbl_permit as a')
        // ->select('a.perm_hazwaste_type','a.perm_law','a.universe_FK')
        // ->groupby('a.perm_hazwaste_type')
        // ->groupby('a.perm_law')
        // ->groupby('a.universe_FK')
        // ->orderby('a.universe_FK','desc')
        // ->where('id','>',15000)
        // ->where('id','<=',16000)
        // ->where('a.perm_law','!=',null)
        // ->whereNotIn('a.perm_hazwaste_type',['CCO Asbestos', 'CCO Mercury', 'Transporter', 'TSD'])
        // ->get();
        // foreach($query as $qry){
        //     $query2 = DB::table('tbl_permit')->select('*')
        //     ->where('universe_FK', $qry->universe_FK)
        //     ->where('perm_hazwaste_type', $qry->perm_hazwaste_type)
        //     ->where('perm_law', $qry->perm_law)
        //     ->orderby('id','desc')->limit(1)->get();

        //     $query_update = Permit::find($query2[0]->id);
        //     $query_update->is_priority = 1;
        //     $query_update->save();
            
        //     echo $query2[0]->id.' - ';
        //     echo $query2[0]->perm_law.' - ';
        //     echo $query2[0]->universe_FK.'<br/>';
        // }
        // =============================================== MONITORING TABLE ===============================================
        // $query = DB::table('rips_monitoring')->select('*')->get();
        // foreach($query as $qry){
        //     $query_import = new Monitoring();
        //     $query_import->id = $qry->id;
        //     $query_import->mon_law = $qry->law;
        //     $query_import->mon_or_survey = $qry->monitoring_or_survey;
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
        // =============================================== MONITORING AND LEGAL COMMA SEPARATOR WITH SPACE ===============================================
        // $query = DB::table('tbl_monitoring')->select('*')->orderby('id','desc')->get();
        // foreach($query as $qry){
        //     $converted_string = $qry->mon_law;
        //     $converted_string = str_replace(', ',',',$qry->mon_law);
        //     $query = Monitoring::find($qry->id);
        //     $query->mon_law = $converted_string;
        //     $query->save();
        //     $converted_string = $qry->mon_law;
        //     $converted_string = str_replace(',',', ',$qry->mon_law);
        //     $query = Monitoring::find($qry->id);
        //     $query->mon_law = $converted_string;
        //     $query->save();
        //     echo $converted_string.'<br/>';
        // }
        // $query = DB::table('tbl_legal')->select('*')->orderby('id','desc')->get();
        // foreach($query as $qry){
        //     $converted_string = $qry->nov_law;
        //     $converted_string = str_replace(', ',',',$qry->nov_law);
        //     $query = Legal::find($qry->id);
        //     $query->nov_law = $converted_string;
        //     $query->save();
        //     $converted_string = $qry->nov_law;
        //     $converted_string = str_replace(',',', ',$qry->nov_law);
        //     $query = Legal::find($qry->id);
        //     $query->nov_law = $converted_string;
        //     $query->save();
        //     echo $converted_string.'<br/>';
        // }
        // return back();
        // =============================================== MEDIA INSERT MONITORING ===============================================
        // $query = DB::table('tbl_monitoring')->select('*')->get();
        // foreach($query as $qry){
        //     $str = $qry->mon_file;
        //     $str = str_replace(" ", "", $str);
        //     $array = explode(",",$str);
        //     foreach($array as $arr){
        //         if($arr){
        //             $query_insert_media = new Media();
        //             $query_insert_media->model_type = 'App\Models\Monitoring';
        //             $query_insert_media->model_id = $qry->id;
        //             $query_insert_media->collection_name = 'monitoring';
        //             $query_insert_media->name = $arr;
        //             $query_insert_media->file_name = $arr;
        //             $query_insert_media->mime_type = 'application/pdf';
        //             $query_insert_media->disk = 'monitoring';
        //             $query_insert_media->conversions_disk = 'monitoring';
        //             $query_insert_media->size = 0;
        //             $query_insert_media->manipulations = '[]';
        //             $query_insert_media->custom_properties = '[]';
        //             $query_insert_media->generated_conversions = '[]';
        //             $query_insert_media->responsive_images = '[]';
        //             $query_insert_media->order_column = 0;
        //             $query_insert_media->save();
        //             mkdir("../storage/app/public/monitoring/".$query_insert_media->id);
        //             if(file_exists("../storage/app/old_storage/".$arr)){
        //                 rename("../storage/app/old_storage/".$arr, "../storage/app/public/monitoring/".$query_insert_media->id."/".$arr);
        //             }
        //         }
        //     }
        // }
        // =============================================== MEDIA INSERT PERMITS ===============================================
        // $query = DB::table('tbl_permit')->select('*')->get();
        // foreach($query as $qry){
        //     $str = $qry->perm_file;
        //     $str = str_replace(" ", "", $str);
        //     $array = explode(",",$str);
        //     foreach($array as $arr){
        //         if($arr){
        //             $query_insert_media = new Media();
        //             $query_insert_media->model_type = 'App\Models\Permit';
        //             $query_insert_media->model_id = $qry->id;
        //             $query_insert_media->collection_name = 'permits';
        //             $query_insert_media->name = $arr;
        //             $query_insert_media->file_name = $arr;
        //             $query_insert_media->mime_type = 'application/pdf';
        //             $query_insert_media->disk = 'permits';
        //             $query_insert_media->conversions_disk = 'permits';
        //             $query_insert_media->size = 0;
        //             $query_insert_media->manipulations = '[]';
        //             $query_insert_media->custom_properties = '[]';
        //             $query_insert_media->generated_conversions = '[]';
        //             $query_insert_media->responsive_images = '[]';
        //             $query_insert_media->order_column = 0;
        //             $query_insert_media->save();
        //             mkdir("../storage/app/public/permits/".$query_insert_media->id);
        //             if(file_exists("../storage/app/old_storage/".$arr)){
        //                 rename("../storage/app/old_storage/".$arr, "../storage/app/public/permits/".$query_insert_media->id."/".$arr);
        //             }
        //         }
        //     }
        // }
        // =============================================== MEDIA INSERT LEGAL ===============================================
        // $query = DB::table('tbl_legal')->select('*')->get();
        // foreach($query as $qry){
        //     $str = $qry->nov_file;
        //     $str = str_replace(" ", "", $str);
        //     $array = explode(",",$str);
        //     foreach($array as $arr){
        //         if($arr){
        //             $query_insert_media = new Media();
        //             $query_insert_media->model_type = 'App\Models\Legal';
        //             $query_insert_media->model_id = $qry->id;
        //             $query_insert_media->collection_name = 'legal';
        //             $query_insert_media->name = $arr;
        //             $query_insert_media->file_name = $arr;
        //             $query_insert_media->mime_type = 'application/pdf';
        //             $query_insert_media->disk = 'legal';
        //             $query_insert_media->conversions_disk = 'legal';
        //             $query_insert_media->size = 0;
        //             $query_insert_media->manipulations = '[]';
        //             $query_insert_media->custom_properties = '[]';
        //             $query_insert_media->generated_conversions = '[]';
        //             $query_insert_media->responsive_images = '[]';
        //             $query_insert_media->order_column = 0;
        //             $query_insert_media->save();
        //             mkdir("../storage/app/public/legal/".$query_insert_media->id);
        //             if(file_exists("../storage/app/old_storage/".$arr)){
        //                 rename("../storage/app/old_storage/".$arr, "../storage/app/public/legal/".$query_insert_media->id."/".$arr);
        //             }
        //         }
        //     }
        // }
        // =============================================== COUNT PERMITS ===============================================
        // $query = DB::table('media as a')->select('a.model_id', DB::raw("COUNT(a.model_id) as counter"))
        // ->where('a.collection_name','legal')
        // ->groupBy("a.model_id")->get();
        // foreach($query as $qry){
        //     $query_count_media = Legal::find($qry->model_id);
        //     $query_count_media->nov_file = $qry->counter;
        //     $query_count_media->save();
        // }
        // $query = DB::table('media as a')->select('a.model_id', DB::raw("COUNT(a.model_id) as counter"))
        // ->where('a.collection_name','monitoring')
        // ->groupBy("a.model_id")->get();
        // foreach($query as $qry){
        //     $query_count_media = Monitoring::find($qry->model_id);
        //     $query_count_media->mon_file = $qry->counter;
        //     $query_count_media->save();
        // }
        // $query = DB::table('media as a')->select('a.model_id', DB::raw("COUNT(a.model_id) as counter"))
        // ->where('a.collection_name','permits')
        // ->groupBy("a.model_id")->get();
        // foreach($query as $qry){
        //     $query_count_media = Permit::find($qry->model_id);
        //     $query_count_media->perm_file = $qry->counter;
        //     $query_count_media->save();
        // }
        // =============================================== IMPORT USER ACCOUNTS ===============================================
        // $query = DB::table('user_accounts as a')->select('a.*','b.FK_section_ID','b.PK_employee_ID')
        // ->leftJoin('tbl_employees as b','b.PK_employee_ID','=','a.FK_employee_ID')
        // ->get();
        // foreach($query as $qry){
        //     $query_insert = new User();
        //     $query_insert->position_id = 1;
        //     $query_insert->section_id = $qry->FK_section_ID;
        //     $query_insert->employee_id = $qry->PK_employee_ID;
        //     $query_insert->username = $qry->email;
        //     $query_insert->email = $qry->email;
        //     $query_insert->password = $qry->password;
        //     $query_insert->save();
        // }
        // =============================================== IMPORT ECC NUMBER TO UNIVERSE ===============================================
        // $query = DB::table('tbl_permit')->select('*')->where('perm_law','PD 1586')->where('is_priority',1)->get();
        // foreach($query as $qry){
        //     $query_update = Universe::find($qry->universe_FK);
        //     $query_update->un_ecc_number = $qry->id;
        //     $query_update->save();
        // }
        // $query = DB::table('tbl_permit')->select('*')->where('perm_law','RA 8749')->where('is_priority',1)->get();
        // foreach($query as $qry){
        //     $query_update = Universe::find($qry->universe_FK);
        //     $query_update->un_poa_number = $qry->id;
        //     $query_update->save();
        // }
        // $query = DB::table('tbl_permit')->select('*')->where('perm_law','RA 9275')->where('is_priority',1)->get();
        // foreach($query as $qry){
        //     $query_update = Universe::find($qry->universe_FK);
        //     $query_update->un_wwdp_number = $qry->id;
        //     $query_update->save();
        // }
        // $query = DB::table('tbl_permit')->select('*')->where('perm_law','RA 6969')->where('is_priority',1)->get();
        // foreach($query as $qry){
        //     $query_update = Universe::find($qry->universe_FK);
        //     $query_update->un_hazwaste_number = $qry->id;
        //     $query_update->save();
        // }
        // $query = DB::table('tbl_monitoring')->select('*')->orderby('mon_date_monitored','asc')->get();
        // foreach($query as $qry){
        //     $query_update = Universe::find($qry->universe_FK);
        //     $query_update->un_monitoring = $qry->id;
        //     $query_update->save();
        // }
        // $query = DB::table('tbl_pco')->select('*')->orderby('pco_start_date','asc')->get();
        // foreach($query as $qry){
        //     $query_update = Universe::find($qry->universe_FK);
        //     $query_update->un_pco = $qry->id;
        //     $query_update->save();
        // }
        // $query = DB::table('tbl_legal')->select('*')->where('nov_compliance_status','!=','Complied')->orderby('nov_date','asc')->get();
        // foreach($query as $qry){
        //     $query_update = Universe::find($qry->universe_FK);
        //     $query_update->un_legal = $qry->id;
        //     $query_update->save();
        // }
        // =============================================== IMPORT PROJECT TYPES ===============================================
        // $query = DB::table('proj_types')->select('*')->get();
        // foreach($query as $qry){
        //     $query_update = DB::table('tbl_project_type')->insert([
        //         'project_type_desc'=>$qry->type,
        //         'created_at'=>now(),
        //         'updated_at'=>now(),
        //     ]);
        //     $query_update;
        // }
        // $query = DB::table('proj_subtypes')->select('*')->get();
        // foreach($query as $qry){
        //     $query_update = DB::table('tbl_project_subtype')->insert([
        //         'project_subtype_desc'=>$qry->type,
        //         'project_type_FK'=>$qry->proj_type_id,
        //         'created_at'=>now(),
        //         'updated_at'=>now(),
        //     ]);
        //     $query_update;
        // }
        // $query = DB::table('proj_spectypes')->select('*')->get();
        // foreach($query as $qry){
        //     $query_update = DB::table('tbl_project_specific_type')->insert([
        //         'project_specific_type_desc'=>$qry->type,
        //         'project_subtype_FK'=>$qry->proj_subtype_id,
        //         'created_at'=>now(),
        //         'updated_at'=>now(),
        //     ]);
        //     $query_update;
        // }
        // $query = DB::table('proj_specsubtypes')->select('*')->get();
        // foreach($query as $qry){
        //     $query_update = DB::table('tbl_project_specific_subtype')->insert([
        //         'project_specific_subtype_desc'=>$qry->type,
        //         'project_specific_type_FK'=>$qry->proj_spectype_id,
        //         'created_at'=>now(),
        //         'updated_at'=>now(),
        //     ]);
        //     $query_update;
        // }
        // =============================================== MISSING MEDIA IMPORT ===============================================
        $query = DB::table('media')->select('*')->get();
        $ctr = 0;
        foreach($query as $qry){
            $collection_name = $qry->collection_name;
            $folder_id = $qry->id;
            
            $file_name = $qry->file_name;
            $file_name = str_replace(" ", "", $file_name);
            if(!file_exists("../storage/app/public/".$collection_name."/".$folder_id."/".$file_name)){
                echo "False - ".$collection_name." - ".$folder_id." - ".$file_name."<br/>";
                // for($i = 2401; $i <= 2600; $i++){
                //     if(file_exists("../storage/app/public/".$collection_name."/".$i."/".$file_name)){
                //         echo $i." - False - ".$collection_name." - ".$folder_id." - ".$file_name."<br/>";
                //         mkdir("../storage/app/public/".$collection_name."/".$folder_id);
                //         copy("../storage/app/public/".$collection_name."/".$i."/".$file_name, "../storage/app/public/".$collection_name."/".$folder_id."/".$file_name);
                //     }
                // }
            }
        }
    }
}
