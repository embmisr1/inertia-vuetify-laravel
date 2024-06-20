<?php

namespace App\Models\Events;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventsLog extends Model
{
    use HasFactory;

    protected $fillable = [
        "event_id",
        "logs",
    ];

    public function event()
    {
        return $this->belongsTo(EventsLog::class);
    }
}
