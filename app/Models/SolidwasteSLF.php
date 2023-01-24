<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class SolidwasteSLF extends Model implements HasMedia
{
    protected $table = 'tbl_solidwaste_slf';
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        "slf_complete_address",
        "slf_latitude",
        "slf_longitude",
        "slf_project_operator",
        "slf_ecc_number",
        "slf_contact_person",
        "slf_contact_number",
        "slf_category",
        "slf_site_hectares",
        "slf_total_capacity",
        "slf_tons_per_day",
        "slf_service_life",
        "slf_remaining_service_life",
        "slf_exceeded_capacity",
        "slf_with_planned_extension",
        "slf_lgu_served",
        "slf_leachate_treatment",
        "slf_daily_soil_cover",
        "slf_presence_of_mrf",
        "slf_separate_cells_for_hazwaste",
        "slf_methane_recovery",
        "slf_discharge_permit",
        "slf_1586_compliance",
        "slf_9275_compliance",
        "slf_6969_compliance",
        // "slf_file",
        "lce_FK",
    ];

    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('slf')
            ->acceptsMimeTypes(['image/jpeg', 'image/png', 'image/jpg', 'application/pdf', 'application/octet-stream'])
            ->useDisk('slf');
    }
}
