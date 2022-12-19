<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class SolidwasteLCE extends Model implements HasMedia
{
    protected $table = 'tbl_solidwaste_lce';
    use HasFactory, InteractsWithMedia;
    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('lce')
            ->acceptsMimeTypes(['image/jpeg', 'image/png', 'image/jpg', 'application/pdf'])
            ->useDisk('lce');

        $this
            ->addMediaCollection('avatars')
            ->acceptsMimeTypes(['image/jpeg', 'image/png', 'image/jpg', 'application/pdf'])
            ->useDisk('avatars');

            $this
            ->addMediaCollection('lce-ftp')
            ->acceptsMimeTypes(['image/jpeg', 'image/png', 'image/jpg', 'application/pdf'])
            ->useDisk('lce-ftp');

        $this
            ->addMediaCollection('avatars-ftp')
            ->acceptsMimeTypes(['image/jpeg', 'image/png', 'image/jpg', 'application/pdf'])
            ->useDisk('avatars-ftp');
    }

    public function logs()
    {
        return $this->hasMany(Logs::class);
    }
}
