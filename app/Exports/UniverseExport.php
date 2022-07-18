<?php

namespace App\Exports;

use App\Models\Universe;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class UniverseExport implements FromView
{
    public function view(): View
    {
        return view('universe_export', [
            'invoices' => Universe::all()
        ]);
    }
}
