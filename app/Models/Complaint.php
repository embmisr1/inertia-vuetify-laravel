<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Complaint extends Model implements HasMedia
{
    protected $table = 'tbl_complaint';
    use HasFactory, InteractsWithMedia;

    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('complaint')
            ->acceptsMimeTypes(['application/pdf'])
            ->useDisk('complaint');

        $this
            ->addMediaCollection('complaintaction')
            ->acceptsMimeTypes(['application/pdf'])
            ->useDisk('complaintaction');


            $this
            ->addMediaCollection('complaint-ftp')
            ->acceptsMimeTypes(['application/pdf'])
            ->useDisk('complaint-ftp');

        $this
            ->addMediaCollection('complaintaction-ftp')
            ->acceptsMimeTypes(['application/pdf'])
            ->useDisk('complaintaction-ftp`');
    }
}
