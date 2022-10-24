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



class SolidwasteSLFExport implements FromQuery, WithHeadings, WithMapping, WithEvents, WithColumnWidths
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
                    'A1:AC1',
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
                "T"=>20,
                "U"=>20,
                "V"=>20,
                "W"=>20,
                "X"=>20,
                "Y"=>20,
                "Z"=>20,
                "AA"=>20,
                "AB"=>20,
                "AC"=>20,
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
            "Latitude",
            "Longitude",
            "LGU",
            "ECC No.",
            "Contact Person",
            "Contact Number",
            "Category",
            "Site Hectares",
            "Total Capacity",
            "Tons per day",
            "Service Life",
            "Remaining Service Life",
            "Exceeded Capacity",
            "With Planned Extension",
            "Lgu Served",
            "Leachate Treatment",
            "Daily Soil Cover",
            "Presence of MRF",
            "Separate Cells for Hazwaste",
            "Methane Recovery",
            "Discharge Permit",
            "1586 Compliance",
            "9275 Compliance",
            "6969 Compliance",
        ];
    }
    public function query()
    {
        $query = DB::table('tbl_solidwaste_slf as a')
            ->select(
                'b.provDesc', 
                'c.citymunDesc', 
                'd.brgyDesc', 
                'c.districtCode',
                'a.slf_complete_address', 
                
                'a.slf_latitude', 
                'a.slf_longitude', 
                'a.slf_ecc_number', 
                'a.slf_contact_person', 
                'a.slf_contact_number', 
                'a.slf_category', 
                'a.slf_site_hectares', 
                'a.slf_total_capacity', 
                'a.slf_tons_per_day', 
                'a.slf_service_life', 
                'a.slf_remaining_service_life', 
                'a.slf_exceeded_capacity', 
                'a.slf_with_planned_extension', 
                'a.slf_lgu_served', 
                'a.slf_leachate_treatment', 
                'a.slf_daily_soil_cover', 
                'a.slf_presence_of_mrf', 
                'a.slf_separate_cells_for_hazwaste', 
                'a.slf_methane_recovery', 
                'a.slf_discharge_permit', 
                'a.slf_1586_compliance', 
                'a.slf_9275_compliance', 
                'a.slf_6969_compliance', 

            )
            ->leftjoin('tbl_solidwaste_lce as lce','a.lce_FK','=','lce.id')
            ->leftjoin('ref_province as b', 'lce.lce_province_FK', '=', 'b.PK_province_ID')
            ->leftjoin('ref_citymun as c', 'lce.lce_municipality_FK', '=', 'c.PK_citymun_ID')
            ->leftjoin('ref_brgy as d', 'lce.lce_barangay_FK', '=', 'd.PK_brgy_ID')
            ->orderBy('b.provDesc','ASC');
        return $query;
    }
    public function map($data): array
    {
        return [
            $data->provDesc,
            $data->citymunDesc,
            $data->brgyDesc,
            $data->districtCode,
            $data->slf_complete_address,
            $data->slf_latitude,
            $data->slf_longitude,
            $data->citymunDesc,
            $data->slf_ecc_number,
            $data->slf_contact_person,
            $data->slf_contact_number,
            $data->slf_category,
            $data->slf_site_hectares,
            $data->slf_total_capacity,
            $data->slf_tons_per_day,
            $data->slf_service_life,
            $data->slf_remaining_service_life,
            $data->slf_exceeded_capacity,
            $data->slf_with_planned_extension,
            $data->slf_lgu_served,
            $data->slf_leachate_treatment,
            $data->slf_daily_soil_cover,
            $data->slf_presence_of_mrf,
            $data->slf_separate_cells_for_hazwaste,
            $data->slf_methane_recovery,
            $data->slf_discharge_permit,
            $data->slf_1586_compliance,
            $data->slf_9275_compliance,
            $data->slf_6969_compliance,
        ];
    }
}
