<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request as FacadeRequest;
use App\Exports\SolidwasteLCEExport;
use App\Exports\SolidwasteMRFExport;
use App\Exports\SolidwasteSLFExport;
use App\Exports\SolidwasteEquipmentsExport;
use App\Exports\SolidwasteDuesExport;
use App\Exports\SolidwasteClosedDumpsiteExport;

class SolidwasteExport extends Controller
{
    public function lce_export()
    {
        $filters = FacadeRequest::all();
        return (new SolidwasteLCEExport($filters))->download('LCE_SWM.xlsx', \Maatwebsite\Excel\Excel::XLSX);
    }
    public function mrf_export()
    {
        $filters = FacadeRequest::all();
        return (new SolidwasteMRFExport($filters))->download('MRF_SWM.xlsx', \Maatwebsite\Excel\Excel::XLSX);
    }
    public function slf_export()
    {
        $filters = FacadeRequest::all();
        return (new SolidwasteSLFExport($filters))->download('SLF_SWM.xlsx', \Maatwebsite\Excel\Excel::XLSX);
    }
    public function equipments_export()
    {
        $filters = FacadeRequest::all();
        return (new SolidwasteEquipmentsExport($filters))->download('EQUIPMENTS_SWM.xlsx', \Maatwebsite\Excel\Excel::XLSX);
    }
    public function dues_export()
    {
        $filters = FacadeRequest::all();
        return (new SolidwasteDuesExport($filters))->download('DUES_SWM.xlsx', \Maatwebsite\Excel\Excel::XLSX);
    }
    public function closed_dumpsite_export()
    {
        $filters = FacadeRequest::all();
        return (new SolidwasteClosedDumpsiteExport($filters))->download('CLOSED_DUMPSITE_SWM.xlsx', \Maatwebsite\Excel\Excel::XLSX);
    }
    // public function equipments_export2(Request $request){
    //     $query = DB::table('tbl_solidwaste_equipments as a')
    //         ->select(
    //             'b.provDesc', 
    //             'c.citymunDesc', 
    //             'd.brgyDesc', 
    //             'c.districtCode',
                
    //             'a.equipment_description', 
    //         )
    //         ->leftjoin('tbl_solidwaste_lce as lce','a.lce_FK','=','lce.id')
    //         ->leftjoin('ref_province as b', 'lce.lce_province_FK', '=', 'b.PK_province_ID')
    //         ->leftjoin('ref_citymun as c', 'lce.lce_municipality_FK', '=', 'c.PK_citymun_ID')
    //         ->leftjoin('ref_brgy as d', 'lce.lce_barangay_FK', '=', 'd.PK_brgy_ID')
    //         ->get();
    //     echo "<table border='1' style='border-collapse:collapse;'>";
    //     echo "<tr>";
    //         echo "<td>provDesc</td>";
    //         echo "<td>citymunDesc/City</td>";
    //         echo "<td>brgyDesc</td>";
    //         echo "<td>districtCode</td>";
    //         echo "<td>slf_6969_compliance</td>";
    //     echo "</td>";
    //         foreach($query as $qry){
    //             echo "<tr>";
    //                 echo "<td>".$qry->provDesc."</td>";
    //                 echo "<td>".$qry->citymunDesc."</td>";
    //                 echo "<td>".$qry->brgyDesc."</td>";
    //                 echo "<td>".$qry->districtCode."</td>";
    //                 echo "<td>".$qry->equipment_description."</td>";
    //             echo "</td>";
    //         }
    //     echo "</table><br/>";
    // }
}
