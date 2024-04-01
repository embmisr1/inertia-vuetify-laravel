<?php

namespace App\Http\Controllers\Fleet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\PDF;
use Illuminate\Support\Facades\Storage;

class PDFController extends Controller
{
    public function generateRequestVehicleForm()
    {
        try {


            $this->showPDF();
            return $this->generatePDFLink();
            // return view('chauffeur.pdf.vehicle-request-form');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    private function showPDF()
    {
        $pdf = PDF::loadView('chauffeur.pdf.vehicle-request-form')->setPaper('a4', 'portrait')->setWarnings(false);
        return $pdf->save(storage_path('app\public\chauffeur\VRF.pdf'));
        // return $pdf->stream('vehicle-request-form.pdf');
    }
    private function generatePDFLink()
    {
        return Storage::temporaryUrl(
            // storage_path('app\public\chauffeur\VRF.pdf'),
            'chauffeur\VRF.pdf',
            now()->addMinutes(5)
        );
    }
}
