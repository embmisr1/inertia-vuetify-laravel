<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolidwasteClosedDumpsite extends Model
{
    protected $table = 'tbl_solidwaste_closed_dumpsite';
    use HasFactory;
    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('dump_site')
            ->acceptsMimeTypes(['image/jpeg', 'image/png', 'image/jpg', 'application/pdf'])
            ->useDisk('dump_site');

            $this
            ->addMediaCollection('dump_site-ftp')
            ->acceptsMimeTypes(['image/jpeg', 'image/png', 'image/jpg', 'application/pdf'])
            ->useDisk('dump_site-ftp');
    }
}
