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
}
