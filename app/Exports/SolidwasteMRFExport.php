<?php

namespace App\Exports;

use App\Models\Universe;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Excel;
use Maatwebsite\Excel\Concerns\FromQuery;
use Illuminate\Contracts\Support\Responsable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\Exportable;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\BeforeExport;
use Maatwebsite\Excel\Events\AfterSheet;
use \Maatwebsite\Excel\Sheet;
use Maatwebsite\Excel\Concerns\WithColumnWidths;



class SolidwasteMRFExport implements FromQuery, WithHeadings, WithMapping, WithEvents, WithColumnWidths
{

    use Exportable;

    protected $request = null;
    public function __construct($request)
    {
        $this->request = $request;
    }
    public function registerEvents(): array
    {
        return [
            // BeforeExport::class  => function(BeforeExport $event) {
            //     $event->writer->setCreator('Patrick');
            // },
            AfterSheet::class    => function (AfterSheet $event) {
                $event->sheet->setOrientation(\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::ORIENTATION_LANDSCAPE);

                $event->sheet->styleCells(
                    'A1:S1',
                    [
                        'font'=>[
                            'color'=>[
                                'argb'=>'FFFFFFFF'
                            ],
                            'bold'=>true,
                            'size'=>12
                        ],

                        // 'borders' => [
                        //     'outline' => [
                        //         'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK,
                        //         'color' => ['argb' => 'ff2b81d6'],
                        //     ],
                        // ],
                        'fill' => [
                            'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                            'color' => ['argb' => "ff2b81d6"]
                        ]
                    ]
                );
            },
        ];
    }

    public function columnWidths(): array
    {
        {
            return [
                "A"=>20,
                "B"=>20,
                "C"=>20,
                "D"=>20,
                "E"=>20,
                "F"=>20,
                "G"=>20,
                "H"=>20,
                "I"=>20,
                "J"=>20,
                "K"=>20,
                "L"=>20,
                "M"=>20,
                "N"=>20,
                "O"=>20,
                "P"=>20,
                "Q"=>20,
                "R"=>20,
                "S"=>20,
            ];
        }
    }
    public function headings(): array
    {
        return [
            "Province",
            "Municipality/City",
            "Barangay",
            "District",
            "Complete Address",
            "LGU Funded",
            "EMB Funded",
            "Area of Capacity",
            "Latitude",
            "Longitude",
            "Operation Status",
            "Service Areas",
            "Total Waste Generation",
            "Biodegradable",
            "Residual",
            "Recyclable",
            "Special Waste",
            "Total Waste Diverted",
            "Number of Waste Diverted",
        ];
    }
    public function query()
    {
        $query = DB::table('tbl_solidwaste_mrf as a')
            ->select(
                'b.provDesc', 
                'c.citymunDesc', 
                'd.brgyDesc', 
                'c.districtCode',
                'a.mrf_complete_address', 
                'a.mrf_emb_funded', 
                'a.mrf_latitude', 
                'a.mrf_longitude', 
                'a.mrf_status_operation', 
                'a.mrf_service_area', 
                'a.mrf_total_waste_generation', 
                'a.mrf_biodegradable', 
                'a.mrf_recyclable', 
                'a.mrf_special_waste', 
                'a.mrf_number_of_waste_diverted', 
                'a.mrf_total_waste_diverted', 

            )
            ->leftjoin('tbl_solidwaste_lce as lce','a.lce_FK','=','lce.id')
            ->leftjoin('ref_province as b', 'lce.lce_province_FK', '=', 'b.PK_province_ID')
            ->leftjoin('ref_citymun as c', 'lce.lce_municipality_FK', '=', 'c.PK_citymun_ID')
            ->leftjoin('ref_brgy as d', 'lce.lce_barangay_FK', '=', 'd.PK_brgy_ID')
            ->where('a.mrf_or_rca','mrf')
            ->orderby('b.provDesc','ASC');
        return $query;
    }
    public function map($data): array
    {
        return [
            $data->provDesc,
            $data->citymunDesc,
            $data->brgyDesc,
            $data->districtCode,
            $data->mrf_complete_address,
            $data->mrf_emb_funded <= 0 ? "Yes" : "No", //LGU FUNDED
            $data->mrf_emb_funded > 0 ? "Yes" : "No", //EMB FUNDED
            $data->mrf_emb_funded,
            $data->mrf_latitude,
            $data->mrf_longitude,
            $data->mrf_status_operation,
            $data->mrf_service_area,
            $data->mrf_total_waste_generation,
            $data->mrf_biodegradable,
            $data->mrf_residual,
            $data->mrf_recyclable,
            $data->mrf_special_waste,
            $data->mrf_total_waste_diverted,
            $data->mrf_number_of_waste_diverted,
        ];
    }
}
