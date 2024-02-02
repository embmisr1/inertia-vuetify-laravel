<?php

namespace App\Models\Fleet;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;
    protected $connection = 'mysql_chauffeur';
    protected $table = 'fleet_vehicles';

    protected $fillable = [
        "brand",
        "plate",
        "description",
    ];
}
