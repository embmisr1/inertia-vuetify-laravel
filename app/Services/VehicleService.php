<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use App\Models\Fleet\Request as RequestModel;
use App\Models\Fleet\Vehicle;


class VehicleService
{

    public function findRequestById($requestId)
    {
        try {
            return RequestModel::findOrFail($requestId);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function vehicleFindAndUpdateStatus($status = 'parked', $vehicle_id)
    {

        try {
            $vehicle = Vehicle::find($vehicle_id);
            $vehicle->update([
                'status' => $status
            ]);

            return $vehicle;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
