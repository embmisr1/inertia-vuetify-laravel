<?php

namespace App\Models\Fleet;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;
    protected $connection = 'mysql_chauffeur';
    protected $table = 'fleet_drivers';
    protected $fillable = [
        "user_id",
        "vehicle_id",
    ];
}
