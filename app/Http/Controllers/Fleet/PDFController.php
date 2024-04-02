<?php

namespace App\Http\Controllers\Fleet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\PDF;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;
use App\Models\Fleet\Request as RequestModel;
use App\Http\Resources\Fleet\RequestVehicleResource;

class PDFController extends Controller
{
    public function generateRequestVehicleForm($requestId)
    {
        try {

            $pdfData = RequestModel::with(['requested_user'])->find($requestId);
            // return $pdfData;
            // return auth()->user()->username;
            // return Hash::make(auth()->user()->username);
            // return Crypt::encryptString(auth()->user()->username);
            return $this->showPDF($requestId, $pdfData);
            // return $this->generatePDFLink();
            // return view('chauffeur.pdf.vehicle-request-form');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    private function showPDF( $requestId, $pdfData)
    {
        $pdf = PDF::loadView('chauffeur.pdf.vehicle-request-form', ["data" => $pdfData])->setPaper('a4', 'portrait')->setWarnings(false);
        return $pdf->stream(storage_path('app/public/chauffeur/' . $requestId  . '.pdf'));
        // return $pdf->stream('vehicle-request-form.pdf');
    }
    private function generatePDFLink()
    {
        return Storage::disk('chauffeur')->url(
            'VRF.pdf'
        );
    }
}
