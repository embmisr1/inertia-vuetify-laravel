<?php

namespace App\Http\Controllers\Fleet\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Fleet\TripRequest;
use Illuminate\Http\Request;
use App\Models\Fleet\Trip;
use App\Models\Fleet\TripDetail;

class TripController extends Controller

{
    public function getTripTicket(Request $request){
        try {
            request('request_id');
            $query = Trip::where('request_id', request('request_id'))->firstOrFail();
            return $query;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function show(Trip $trip){
        return $trip;
    }
    public function create(TripRequest $request){
        try {
            // date_of_trip = now()
            $input = $request->validated();
            $input['date_of_trip']  = now();

            $new_trip = Trip::create($input);
            return response()->json([
                "data" => $new_trip,
                "message"=>"Trip Ticket No. Submitted",
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function update(TripRequest $request, Trip $trip){
        try {
            $input = $request->validated();
            $input['date_of_trip']  = now();

            $trip->update($input);
            return response()->json([
                "data" => $trip,
                "message"=>"Trip Ticket No. " . $trip->trip_ticket_no . ' Updated',
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
