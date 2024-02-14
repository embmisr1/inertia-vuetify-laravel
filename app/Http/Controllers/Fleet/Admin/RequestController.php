<?php

namespace App\Http\Controllers\Fleet\Admin;

use App\Filters\RequestVehicleFilter;
use App\Http\Requests\Fleet\RequestVehicle;
use App\Http\Resources\Fleet\RequestVehicleResource;
use App\Models\Fleet\Request as RequestModel;
use App\Http\Controllers\Controller;
use App\Services\RequestLogger;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return RequestVehicleResource::collection((new RequestVehicleFilter)->get());
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RequestVehicle $request)
    {
        try {
            $input = $request->validated();
            $input['requestedBy'] = "Developer";
            $input['status'] = "pending";
            // $input['createdBy'] = auth()->id();
            $new_request = RequestModel::create($input);
            // $createLog = new RequestLogger();
            // $createLog->createRemarks($new_request->id, auth()->id(), $input['remarks']);
            return response()->json([
                "message" => "Vehicle Request Submitted",
                "data" => new RequestVehicleResource($new_request),
            ], 201);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(RequestModel $request)
    {
        new RequestVehicleResource($request);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fleet\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(RequestVehicle $request, RequestModel $req)
    {
        try {
            $input = $request->validated();

            $req->updated($input);

            return response()->json([
                "message" => "Request for Vehicle Updated",
                "data" => $req,
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(RequestModel $request)
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
