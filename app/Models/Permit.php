<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Permit extends Model implements HasMedia
{
    protected $table = 'tbl_permit';
    use HasFactory, InteractsWithMedia;

    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('permits')
            ->acceptsMimeTypes(['application/pdf','application/octet-stream'])
            ->useDisk('permits');
    }
}
