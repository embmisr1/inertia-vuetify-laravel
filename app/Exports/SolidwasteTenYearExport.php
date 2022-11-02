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



class SolidwasteTenYearExport implements FromQuery, WithHeadings, WithMapping, WithEvents, WithColumnWidths
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
                    'A1:Q1',
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
            "Planning Period",
            "Date Approved",
            "Number",
            "Finding A",
            "Finding B",
            "Finding C",
            "Finding D",
            "Finding E",
            "Finding F",
            "Finding G",
            "Finding H",
            "Finding I",
            "Finding J",
        ];
    }
    public function query()
    {
        $query = DB::table('tbl_solidwaste_ten_year as a')
            ->select(
                'b.provDesc', 
                'c.citymunDesc', 
                'd.brgyDesc', 
                'c.districtCode',
                
                'a.ten_year_planning_period', 
                'a.ten_year_year_approved', 
                'a.ten_year_number', 
                
                'findings.finding_a', 
                'findings.finding_b', 
                'findings.finding_c', 
                'findings.finding_d', 
                'findings.finding_e', 
                'findings.finding_f', 
                'findings.finding_g', 
                'findings.finding_h', 
                'findings.finding_i', 
                'findings.finding_j', 
            )
            ->leftjoin('tbl_solidwaste_lce as lce','a.lce_FK','=','lce.id')
            ->leftjoin('tbl_solidwaste_ten_year_findings as findings','a.id','=','findings.ten_year_FK')
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

            $data->ten_year_planning_period,
            $data->ten_year_year_approved,
            $data->ten_year_number,
            $data->finding_a,
            $data->finding_b,
            $data->finding_c,
            $data->finding_d,
            $data->finding_e,
            $data->finding_f,
            $data->finding_g,
            $data->finding_h,
            $data->finding_i,
            $data->finding_j,
        ];
    }
}
