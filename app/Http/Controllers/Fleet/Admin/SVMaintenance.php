<?php

namespace App\Http\Controllers\Fleet\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Fleet\SVMaintenanceRequests;
use App\Models\Fleet\Vehicle;
use App\Models\Fleet\VehicleMaintenance;
use Illuminate\Http\Request;


class SVMaintenance extends Controller
{
    public function index(Request $request, $service_vehicle)
    {
        try {
            $sv_maintenance_detail = VehicleMaintenance::where('vehicle_id', $service_vehicle)->orderBy('id', "desc")->get();
            return response()->json([
                "data" => $sv_maintenance_detail
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function create(SVMaintenanceRequests $request)
    {
        try {

            $input = $request->validated();

            $newRecord = VehicleMaintenance::create($input);

            return response()->json([
                "data" => $newRecord,
                "message" => "Recorded SuccessFully"
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                "data" => $th->getMessage(),
                "message" => "Task Failed SuccessFully"
            ]);
        }
    }

    public function update(SVMaintenanceRequests $request, VehicleMaintenance $vehicleMaintenance)
    {
        try {

            $input = $request->validated();

            $vehicleMaintenance->update($input);

            return response()->json([
                "data" => $vehicleMaintenance,
                "message" => "Updated SuccessFully"
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                "data" => $th->getMessage(),
                "message" => "Task Failed SuccessFully"
            ]);
        }
    }

    public function delete(VehicleMaintenance $vehicleMaintenance)
    {
        try {
            $vehicleMaintenance->delete();
            return response()->json([
                "message" => "Record Removed SuccessFully"
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                "data" => $th->getMessage(),
                "message" => "Task Failed SuccessFully"
            ]);
        }
    }
}
