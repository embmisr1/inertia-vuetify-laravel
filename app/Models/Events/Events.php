<?php

namespace App\Models\Events;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;
    protected $connection = 'mysql_assemblage';
    protected $fillable = [
        "user_id",
        "title",
        "description",
        "location",
        "eventDateTime",
        "isOnline",
        "isF2f",
        "isHybrid",
        "requestForMIS",
        "departureDateTime",
        "remarks",
        "status",
    ];

    protected function casts(): array
    {
        return [
            'eventDateTime' => 'datetime:d-m-Y h:m:s',
            'departureDateTime' => 'datetime:d-m-Y h:m:s',
            'created_at' => 'datetime:d-m-Y h:m:s',
        ];
    }

    public function user()
    {
        return $this->setConnection('mysql')->belongsTo(\App\Models\User::class);
    }

    public function logs()
    {
        return $this->hasMany(EventsLog::class);
    }
    public function link()
    {
        return $this->hasOne(EventsLink::class);
    }
}
