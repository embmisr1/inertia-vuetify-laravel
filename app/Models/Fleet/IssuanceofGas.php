<?php

namespace App\Models\Fleet;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IssuanceofGas extends Model
{
    use HasFactory;
    protected $connection = 'mysql_chauffeur';

    protected $table = 'fleet_issuanceof_gases';

    protected $fillable = [
        "trip_id",
        "date",
        "gas_requested",
        "extra",
        "regular",
        "diesel",
        "motor_oil",
        "gear_oil",
        "grease",
        "brake_fluid",
        "others",
    ];
}
