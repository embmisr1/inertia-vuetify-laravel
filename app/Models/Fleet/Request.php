<?php

namespace App\Models\Fleet;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory;

    protected $connection = 'mysql_chauffeur';
    protected $table = 'fleet_requests';
    protected $fillable = [
        "createdBy",
        "name",
        "purpose",
        "destination",
        "name_of_firms",
        "places",
        "departure",
        "arrival",
        "requestedBy",
        "approvedBy",
        "status",
    ];
}
