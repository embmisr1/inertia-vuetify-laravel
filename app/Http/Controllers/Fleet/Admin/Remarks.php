<?php

namespace App\Http\Controllers\Fleet\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Fleet\LoggerRequest;
use App\Http\Resources\Fleet\RemarksResource;
use Illuminate\Http\Request;
use App\Models\Fleet\Request as RequestModel;
use App\Models\Fleet\RequestLogs;
use App\Services\RequestLogger;

class Remarks extends Controller
{
    public function show( $request_id){
        try {
            $query = RequestLogs::with(['request','user'])
            ->where('request_id', $request_id)->orderBy('created_at', 'desc')->get();
            return RemarksResource::collection($query);

        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function store(LoggerRequest $request)
    {
        try {
            $input = $request->validated();
            $logger = new RequestLogger();
            $new_log = $logger->createRemarks($input['request_id'], auth()->id(), $input['remarks']);
            return response()->json([
                "data"=>$new_log,
                "message"=> "New Remarks Created!"
            ]);
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
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
