<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class SolidwasteTenYearMonitoring extends Model implements HasMedia
{
    protected $table = 'tbl_solidwaste_ten_year_monitoring';
    use HasFactory, InteractsWithMedia;
}
