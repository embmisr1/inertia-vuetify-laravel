<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class SolidwasteMRF extends Model implements HasMedia
{
    protected $table = 'tbl_solidwaste_mrf';
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        "mrf_emb_funded",
        "mrf_latitude",
        "mrf_longitude",
        "mrf_status_operation",
        "mrf_service_area",
        "mrf_total_waste_generation",
        "mrf_biodegradable",
        "mrf_recyclable",
        "mrf_special_waste",
        "mrf_total_waste_diverted",
        "mrf_number_of_waste_diverted",
        "mrf_file",
        "lce_FK",
    ];
}
