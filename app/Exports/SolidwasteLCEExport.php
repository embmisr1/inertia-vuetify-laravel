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



class SolidwasteLCEExport implements FromQuery, WithHeadings, WithMapping, WithEvents, WithColumnWidths
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
                    'A1:N1',
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
            ];
        }
    }
    public function headings(): array
    {
        return [
            "Title",
            "First Name",
            "Middle Name",
            "Last Name",
            "Salutation",
            "Position",
            "Province",
            "Municipality/City",
            "Zip Code",
            "District",
            "Menro/Focal Person",
            "Contact No.",
            "LGU E-mail",
            "Municipal Building Address",
        ];
    }
    public function query()
    {
        $query = DB::table('tbl_solidwaste_lce as a')
            ->select(
                'a.lce_title', 
                'a.lce_first_name', 
                'a.lce_middle_name', 
                'a.lce_last_name', 
                'a.lce_salutation', 
                'a.lce_position', 
                'a.lce_zip_code', 

                'b.provDesc', 
                'c.citymunDesc', 
                'c.districtCode',
                
                'a.lce_focal_person', 
                'a.lce_contact_number', 
                'a.lce_email_address', 

                'd.brgyDesc', 
            )
            ->leftjoin('ref_province as b', 'a.lce_province_FK', '=', 'b.PK_province_ID')
            ->leftjoin('ref_citymun as c', 'a.lce_municipality_FK', '=', 'c.PK_citymun_ID')
            ->leftjoin('ref_brgy as d', 'a.lce_barangay_FK', '=', 'd.PK_brgy_ID')
            ->orderBy('b.provDesc', 'asc')
            ->orderBy('c.citymunDesc', 'asc')
            ->orderBy('d.brgyDesc', 'asc');
            
        return $query;
    }
    public function map($data): array
    {
        return [
            $data->lce_title,
            $data->lce_first_name,
            $data->lce_middle_name,
            $data->lce_last_name,
            $data->lce_salutation,
            $data->lce_position,
            $data->provDesc,
            $data->citymunDesc,
            $data->lce_zip_code,
            $data->districtCode,
            $data->lce_focal_person,
            $data->lce_contact_number,
            $data->lce_email_address,
            $data->brgyDesc.', '.$data->citymunDesc.', '.$data->lce_zip_code.', '.$data->provDesc,
        ];
    }
}
