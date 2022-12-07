<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mov extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia,SoftDeletes;

    protected $connection = 'mysql1';

    protected $fillable = [
        "user_id",
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
        "complied" => "bool",
        "date_of_inspection" => "date",
        "notice_of_date" => "date",
        "compliance_date" => "date",
        "payment_date" => "date",
    ];

    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('mov')
            ->acceptsMimeTypes(['image/png','image/jpeg','image/jpg', 'application/pdf', 'application/octet-stream'])
            ->useDisk('mov');

            $this
            ->addMediaCollection('PD1586')
            ->acceptsMimeTypes(['image/png','image/jpeg','image/jpg', 'application/pdf', 'application/octet-stream'])
            ->useDisk('PD1586');
            $this
            ->addMediaCollection('RA9275')
            ->acceptsMimeTypes(['image/png','image/jpeg','image/jpg', 'application/pdf', 'application/octet-stream'])
            ->useDisk('RA9275');
            $this
            ->addMediaCollection('RA8749')
            ->acceptsMimeTypes(['image/png','image/jpeg','image/jpg', 'application/pdf', 'application/octet-stream'])
            ->useDisk('RA8749');
            $this
            ->addMediaCollection('RA6969')
            ->acceptsMimeTypes(['image/png','image/jpeg','image/jpg', 'application/pdf', 'application/octet-stream'])
            ->useDisk('RA6969');
    }
}
