<?php

namespace App\Models\Fleet;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;
    protected $connection = 'mysql_chauffeur';

    protected $table = 'fleet_trips';

    protected $fillable = [
        "request_id",
        "driver_id",
        "date_of_trip",
        "trip_ticket_no",
        "passengers",
        "meeting",
    ];
}
