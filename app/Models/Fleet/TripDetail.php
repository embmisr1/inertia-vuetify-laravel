<?php

namespace App\Models\Fleet;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TripDetail extends Model
{
    use HasFactory;
    protected $connection = 'mysql_chauffeur';
    protected $table = 'fleet_trip_details';
    protected $fillable = [
        "trip_id",
        "departure_time",
        "departure_place",
        "arrival_time",
        "arrival_place",
        "reading_departure",
        "reading_arrival",
        "km_traveled",
        "gas_consumed",
    ];
}
