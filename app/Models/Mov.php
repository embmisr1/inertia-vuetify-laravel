<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Mov extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        "name",
        "month",
        // "address",
        "prov",
        "citymun",
        "brgy",
        "longitude",
        "latitude",
        "office",
        "type_of_monitoring",
        "type_of_inspection",
        "date_of_inspection",
        "type",
        "notice_of_date",
        "compliance_date",
        "complied",
        "remarks",
        "payment_date",
    ];

    protected $cast = [
        "complied" => "boolean",
        "date_of_inspection" => "data",
        "notice_of_date" => "data",
        "compliance_date" => "data",
        "payment_date" => "data",
    ];

    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('mov')
            ->acceptsMimeTypes(['image/*', 'application/pdf', 'application/octet-stream'])
            ->useDisk('mov');
    }
}
