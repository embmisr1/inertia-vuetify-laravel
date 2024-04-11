<?php

namespace App\Models\Fleet;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestLogs extends Model
{
    use HasFactory;
    protected $connection = 'mysql_chauffeur';
    protected $table = 'fleet_request_logs';
    protected $fillable = [
        "request_id",
        "user_id",
        "remarks",
    ];

    public function request(){
        return $this->belongsTo(Request::class);
    }

    public function user(){
        return $this->setConnection('mysql')->belongsTo(\App\Models\User::class);
    }


}


