<?php

namespace App\Http\Controllers\Fleet\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Fleet\Trip;

class TripTicketChecker extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
       try {

        $isUnique = Trip::where('trip_ticket_no', request('trip_ticket_no'))->first();
        return response()->json([
            "exists" => $isUnique
        ]);
       } catch (\Throwable $th) {
        return response()->json([
            "message"=>"Ticket Number Exist"
        ]);
       }
    }
}
