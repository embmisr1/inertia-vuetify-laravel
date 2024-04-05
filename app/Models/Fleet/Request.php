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

    public function requested_user(){
        return $this->setConnection('mysql')->belongsTo(\App\Models\User::class, 'requestedBy','id');
    }

    public function request_logs(){
        return $this->hasMany(RequestLogs::class)->orderBy('created_at','desc');
    }

    public function trip(){
        return $this->hasOne(Trip::class);
    }
}
