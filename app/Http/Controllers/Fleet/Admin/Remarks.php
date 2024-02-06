<?php

namespace App\Http\Controllers\Fleet\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Fleet\LoggerRequest;
use Illuminate\Http\Request;
use App\Models\Fleet\Request as RequestModel;
use App\Models\Fleet\RequestLogs;
use App\Services\RequestLogger;

class Remarks extends Controller
{
    public function store(LoggerRequest $request)
    {
        try {
            $input = $request->validated();
            $logger = new RequestLogger();
            $logger->createRemarks($input['request_id'], auth()->id(), $input['remarks']);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function destroy(RequestModel $requestModel)
    {
        try {
            $requestModel->delete();
            return response()->json([
                "message"=>"Log Deleted"
            ])
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
