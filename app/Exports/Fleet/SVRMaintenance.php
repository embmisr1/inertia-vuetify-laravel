<?php

namespace App\Exports\Fleet;

use App\Models\Fleet\VehicleMaintenance;
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


class SVRMaintenance implements FromQuery, WithHeadings, WithMapping, WithEvents, WithColumnWidths
{
    use Exportable;

    protected $vehicle = null;
    public function __construct($vehicle)
    {
        $this->vehicle = $vehicle;
    }
    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function (AfterSheet $event) {
                $event->sheet->setOrientation(\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::ORIENTATION_LANDSCAPE);

                $event->sheet->styleCells(
                    'A1:I1',
                    [
                        'font' => [
                            'color' => [
                                'argb' => 'FFFFFFFF'
                            ],
                            'bold' => true,
                            'size' => 12
                        ],

                        // 'borders' => [
                        //     'outline' => [
                        //         'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK,
                        //         'color' => ['argb' => 'ff2b81d6'],
                        //     ],
                        // ],
                        'fill' => [
                            'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                            'color' => ['argb' => "ff00e676"]
                        ]
                    ]
                );
            },
        ];
    }

    public function columnWidths(): array
    { {
            return [
                "A" => 20,
                "B" => 20,
                "C" => 20,
                "D" => 40,
                "E" => 40,
                "F" => 20,
                "G" => 20,
                "H" => 20,
                "I" => 40,
            ];
        }
    }
    public function headings(): array
    {
        return [
            "ODO Meter",
            "Date of PR",
            "Gross Amount",
            "Description",
            "Supplier",
            "Date of P.O",
            "Net Amount ",
            "Date Repaired",
            "Remarks",
        ];
    }

    public function query()
    {
        // $query = VehicleMaintenance::whereVehicleId($this->vehicle)->get();
        $query = DB::connection('mysql_chauffeur')
            ->table('vehicle_maintenances')
            ->select([
                "odo_meter",
                "date_of_pr",
                "gross_amount",
                "description",
                "supplier",
                "date_of_p_o",
                "net_amount",
                "date_repaired",
                "remarks",
            ])
            ->orderBy('id', 'desc');


        return $query;
    }

    public function map($data): array
    {

        return [
            $data->odo_meter,
            Carbon::parse($data->date_of_pr)->format('M d, Y'),
            number_format($data->gross_amount, 2),
            $data->description,
            $data->supplier,
            Carbon::parse($data->date_of_p_o)->format('M d, Y'),
            number_format($data->net_amount, 2),
            Carbon::parse($data->date_repaired)->format('M d, Y'),
            $data->remarks,
        ];
    }
}
