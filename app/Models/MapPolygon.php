<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MapPolygon extends Model
{
    protected $table = 'tbl_map_polygon';
    use HasFactory;
    protected $fillable = [
        "polygon_latitude",
        "polygon_longitude",
        "universe_FK",
    ];
}
