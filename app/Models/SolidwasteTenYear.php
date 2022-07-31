<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class SolidwasteTenYear extends Model implements HasMedia
{
    protected $table = 'tbl_solidwaste_ten_year';
    use HasFactory, InteractsWithMedia;

    // protected $fillable = [
    //     "ten_year_planning_period",
    //     "ten_year_year_approved",
    //     "ten_year_number",
    //     "ten_year_file",
    //     "ten_year_copy_plan",
    //     "ten_year_copy_resolution",
    //     "ten_year_copy_form",
    // ];

    // protected $casts = [
    //     // "ten_year_file" => "Boolean",
    //     "ten_year_copy_plan" => "Boolean",
    //     "ten_year_copy_resolution" => "Boolean",
    //     "ten_year_copy_form" => "Boolean",
    //     // "borrow_items"=>'array',
    // ];
}
