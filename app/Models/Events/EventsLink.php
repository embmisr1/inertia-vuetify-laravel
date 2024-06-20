<?php

namespace App\Models\Events;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventsLink extends Model
{
    use HasFactory;

    protected $fillable = [
        "event_id",
        "platform",
        "original_ink",
        "shorten_link",
    ];

    public function event()
    {
        return $this->belongsTo(EventsLog::class);
    }
}
