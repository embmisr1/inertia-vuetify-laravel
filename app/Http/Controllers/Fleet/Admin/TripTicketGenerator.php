<?php

namespace App\Http\Controllers\Fleet\Admin;

use App\Filters\RequestVehicleFilterPerUser;
use App\Http\Controllers\Controller;
use App\Http\Resources\Fleet\RequestVehicleResource;
use App\Http\Resources\Fleet\RequestVehicleResourcePDF;
use Barryvdh\DomPDF\Facade\PDF;
use Illuminate\Http\Request;
use App\Models\Fleet\Request as RequestModel;
use Carbon\Carbon;

class TripTicketGenerator extends Controller
{
    public function __invoke()
    {
        $approvedRequest = (new RequestVehicleFilterPerUser)->getOne();
        // $approvedRequest = RequestModel::find(request('vehicle-request'));
        $data = [
            "data" => new RequestVehicleResourcePDF($approvedRequest),
            "now"=> Carbon::now()->format('M d, Y')
        ];

        // return response()->json(new RequestVehicleResourcePDF($approvedRequest));
        $pdf = PDF::loadView('chauffeur.pdf.trip-ticket-form', $data)->setPaper('legal', 'portrait')->setWarnings(false);
        return $pdf->stream(storage_path('app/public/chauffeur/test.pdf'));
    }
}
