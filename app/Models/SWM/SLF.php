<?php

namespace App\Models\SWM;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SLF extends Model
{
    use HasFactory;

    protected $table = 'tbl_solidwaste_slf';

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
        "slf_file",
        "lce_FK",
    ];

    public function lce()
    {
        return $this->belongsTo(LCE::class, "lce_FK");
    }
}
