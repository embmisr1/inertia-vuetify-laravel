<?php

namespace App\Http\Controllers\Fleet\Admin;

use App\Exports\Fleet\SVRMaintenance;
use App\Http\Controllers\Controller;
use App\Models\Fleet\VehicleMaintenance;
use Illuminate\Http\Request;


class ExportSVRecord extends Controller
{
    public function __invoke()
    {
        try {
            $vehicleRecord = VehicleMaintenance::with(['vehicle'])->whereVehicleId(request('vehicle_id'))->first();
            return (new SVRMaintenance(request('vehicle_id')))->download('Service Vehicle Maintenance Record: '. $vehicleRecord->vehicle->plate . '.xlsx', \Maatwebsite\Excel\Excel::XLSX);

            // return response()->json([
            //     "asd"=>request('vehicle_id'),
            //     "data" => $vehicleRecord->vehicle->plate
            // ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
