<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Legal extends Model implements HasMedia
{
    protected $table = 'tbl_legal';
    use HasFactory,InteractsWithMedia;

    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('legal')
            ->acceptsMimeTypes(['application/pdf'])
            ->useDisk('legal');

            $this
            ->addMediaCollection('legal-ftp')
            ->acceptsMimeTypes(['application/pdf'])
            ->useDisk('legal-ftp');
    }
}
