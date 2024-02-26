<?php

namespace App\Models\Fleet;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;
    protected $connection = 'mysql_chauffeur';
    protected $table = 'fleet_drivers';

    // protected $cast = [
    //     "assigned_to"=>array()
    // ];
    protected $fillable = [
        "user_id",
        "vehicle_id",
        "isOfficial",
        "assigned_to",
    ];

    public function setAssignedTo($value){
    return $this->assigned_to = json_decode($value);
    }
    public function vehicle(){
        return $this->belongsTo(Vehicle::class);
    }

    public function user(){
        return $this->setConnection('mysql')->belongsTo(\App\Models\User::class);
    }
}
