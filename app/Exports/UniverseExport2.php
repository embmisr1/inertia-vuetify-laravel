<?php

namespace App\Exports;

use App\Models\Universe;
use Maatwebsite\Excel\Concerns\FromCollection;

class UniverseExport2 implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Universe::all();
    }
}
