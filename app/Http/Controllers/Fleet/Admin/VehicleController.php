<?php

namespace App\Http\Controllers\Fleet\Admin;

use App\Http\Requests\Fleet\VehicleRequest;
use App\Models\Fleet\Vehicle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Vehicle::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VehicleRequest $request)
    {
        try {
            $input =  $request->validated();
            $new_vehicle = Vehicle::firstOrCreate($input);

            return response()->json([
                "message" => "Vehicle Created",
                "data" => $new_vehicle
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function show(Vehicle $vehicle)
    {
        return response()->json([
            "data" => $vehicle
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function edit(Vehicle $vehicle)
    {
        return response()->json([
            "data" => $vehicle
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function update(VehicleRequest $request, Vehicle $vehicle)
    {
        try {
            $input = $request->validated();

            $vehicle->update($input);

            return response()->json([
                "message" => "Vehicle Updated",
                "data" => $vehicle
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vehicle $vehicle)
    {
        try {
            $vehicle->delete();
            return response()->json([
                "message" => "Vehicle Delete SuccessFully"
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
