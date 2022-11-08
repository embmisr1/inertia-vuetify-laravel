<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Monitoring extends Model implements HasMedia
{
    protected $table = 'tbl_monitoring';
    use HasFactory, InteractsWithMedia;

    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('monitoring')
            ->acceptsMimeTypes(['application/pdf','application/octet-stream'])
            ->useDisk('monitoring');
    }
}
