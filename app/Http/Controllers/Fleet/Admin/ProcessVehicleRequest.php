<?php


namespace App\Http\Controllers\Fleet\Admin;

use App\Models\Fleet\Request as RequestModel;
use App\Http\Controllers\Controller;
use App\Http\Requests\Fleet\ProcessRequest;
use App\Services\RequestLogger;
use Illuminate\Http\Request;
use App\Services\VehicleService;


class ProcessVehicleRequest extends Controller
{

    /**
     * post method
     * approved a request
     */
    public function approveRequest(ProcessRequest $request)
    {
        try {
            $input = $request->validated();
            $vehicleService = new VehicleService();
            $logger = new RequestLogger();

            $pendingRequest = $vehicleService->findRequestById($input['id']);


            $pendingRequest->update(
                [
                    "status" => $input['status'],
                ]
            );
            if(!empty($input['remarks'])) $logger->createRemarks($input['id'], auth()->id(), $input['remarks']);

            $logger->createRemarks($input['id'], 2, "Approved this Vehicle Request" );

            return response()->json([
                "message" => "Request Vehicle Approved!"
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function declinedRequest(ProcessRequest $request)
    {
        try {
            $input = $request->validated();
            $vehicleService = new VehicleService();
            $logger = new RequestLogger();

            $pendingRequest = $vehicleService->findRequestById($input['request_id']);


            $pendingRequest->update(
                [
                    "status" => $input['status'],
                ]
            );
            $logger->createRemarks($input['request_id'], auth()->id(), $input['remarks']);

            return response()->json([
                "message" => "Request Vehicle Declined!"
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function deleteRequest(RequestModel $request)
    {
        try {
            $request->delete();
            return response()->json([
                "message" => "Request for Vehicle Deleted"
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
