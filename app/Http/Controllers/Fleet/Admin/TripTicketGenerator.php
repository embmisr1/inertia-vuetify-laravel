<?php

namespace App\Http\Controllers\Fleet\Admin;

use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade\PDF;
use Illuminate\Http\Request;

class TripTicketGenerator extends Controller
{
    public function __invoke(){
        $pdf = PDF::loadView('chauffeur.pdf.trip-ticket-form', )->setPaper('a4', 'portrait')->setWarnings(false);
        return $pdf->stream(storage_path('app/public/chauffeur/test.pdf'));
    }
}
