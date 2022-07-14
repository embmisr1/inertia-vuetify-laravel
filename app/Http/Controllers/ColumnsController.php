<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ColumnsController extends Controller
{

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
            'perm_hazwaste_type',
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
            // 'mon_law',
            'mon_date_monitored',
            'mon_or_survey',
            'mon_type',
            'mon_file',
        ];
        return $array;
    }

    public function legal_columns(){
        $array = [
            // 'nov_law',
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
}
