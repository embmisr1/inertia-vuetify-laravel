<?php

namespace App\Http\Controllers\Fleet\Admin;

use App\Http\Controllers\Controller;
use App\Models\Fleet\VehicleMaintenance;
use Illuminate\Http\Request;


class ExportSVRecord extends Controller
{
    public function __invoke()
    {
        try {
            $vehicleRecord = VehicleMaintenance::whereVehicleId(request('vehicle_id'))->get();

            return response()->json([
                "data" => $vehicleRecord
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
