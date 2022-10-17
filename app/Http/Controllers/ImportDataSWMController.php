<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\SolidwasteLCE;

class ImportDataSWMController extends Controller
{
    // public function import_data_swm(request $request){
    //     $query = DB::table('table_lce')->get();

    //     echo "<table border='1' style='border-collapse: collapse;'>";
    //     foreach($query as $qry){
    //         echo "<tr>";
    //             echo "<td>".$qry->COL_1."</td>";
    //             echo "<td>".$qry->COL_2."</td>";
    //             // echo "<td>".$this->province($qry->COL_7)."</td>";
    //             echo "<td>".$qry->COL_7."</td>";
    //             // echo "<td>".$this->city_municipality($this->province($qry->COL_7), str_replace(",", "", $qry->COL_6))."</td>";
    //             echo "<td>".str_replace(",", "", $qry->COL_6)."</td>";
    //         echo "</td>";
    //         // $query_update = DB::table('table_lce')
    //         // ->where('COL_7', $qry->COL_7)
    //         // ->where('COL_6', $qry->COL_6)
    //         // ->update([
    //         //     'COL_7' => $this->province($qry->COL_7),
    //         //     'COL_6' => $this->city_municipality($this->province($qry->COL_7), str_replace(",", "", $qry->COL_6)),
    //         // ]);
    //     }
    //     echo "</table>";
    // }
    // public function import_data_swm(request $request){
    //     $query = DB::table('table_lce')->get();
    //     foreach($query as $qry){
    //         $query_insert = new SolidwasteLCE();
    //         $query_insert->lce_title            = $qry->COL_1  ;
    //         $query_insert->lce_first_name       = $qry->COL_2  ;
    //         $query_insert->lce_middle_name      = NULL  ;
    //         $query_insert->lce_last_name        = $qry->COL_4  ;
    //         $query_insert->lce_salutation       = $qry->COL_3  ;
    //         $query_insert->lce_position         = $qry->COL_5  ;
    //         $query_insert->lce_province_FK      = $qry->COL_7  ;
    //         $query_insert->lce_municipality_FK  = $qry->COL_6  ;
    //         $query_insert->lce_barangay_FK      = NULL  ;
    //         $query_insert->lce_disctrict        = NULL  ;
    //         $query_insert->lce_zip_code         = $qry->COL_8  ;
    //         $query_insert->lce_focal_person     = $qry->COL_10  ;
    //         $query_insert->lce_contact_number   = $qry->COL_11  ;
    //         $query_insert->lce_email_address    = $qry->COL_12  ;
    //         $query_insert->save();
    //     }
    // }
    public function province($param_province){
        $query = DB::table('ref_province')->where('provDesc', $param_province)->get();
        return $query[0]->PK_province_ID;
    }
    public function city_municipality($param_province, $param_municipality){
        $query = DB::table('ref_citymun')->where('provCode', $param_province)->where('citymunDesc', $param_municipality)->get();
        if(isset($query[0]->PK_citymun_ID)){
            return $query[0]->PK_citymun_ID;
        }else{
            return null;
        }
    }
}
