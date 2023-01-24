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
            ->acceptsMimeTypes(['application/pdf','application/octet-stream'])
            ->useDisk('complaint');

        $this
            ->addMediaCollection('complaintaction')
            ->acceptsMimeTypes(['application/pdf','application/octet-stream'])
            ->useDisk('complaintaction');
    }
}
