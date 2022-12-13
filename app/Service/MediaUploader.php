<?php

namespace App\Service;

use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Illuminate\Support\Facades\DB;
use App\Models\Mov;


class MediaUploader
{

    public function mov_ftp_uploader(Mov $model, $files)
    {
        foreach ($files as $file) {
            $model->addMedia($file)
                ->preservingOriginal()
                ->toMediaCollection('mov-ftp', 'mov-ftp');
        }
    }
    public function mov_uploader(Mov $model, $files)
    {
        foreach ($files as $file) {
            $model->addMedia($file)
                ->preservingOriginal()
                ->toMediaCollection('mov', 'mov');
        }
    }

    public function mov_haz_upload(Mov $model, $files)
    {
        foreach ($files as $file) {
            $model->addMedia($file)
                ->preservingOriginal()
                ->toMediaCollection('RA6969-ftp', 'RA6969-ftp');
        }
    }

    public function mov_air_upload(Mov $model, $files)
    {
        foreach ($files as $file) {
            $model->addMedia($file)
                ->preservingOriginal()
                ->toMediaCollection('RA8749-ftp', 'RA8749-ftp');
        }
    }

    public function mov_wat_upload(Mov $model, $files)
    {
        foreach ($files as $file) {
            $model->addMedia($file)
                ->preservingOriginal()
                ->toMediaCollection('RA9275-ftp', 'RA9275-ftp');
        }
    }

    public function mov_pd_upload(Mov $model, $files)
    {
        foreach ($files as $file) {
            $model->addMedia($file)
                ->preservingOriginal()
                ->toMediaCollection('PD1586-ftp', 'PD1586-ftp');
        }
    }
}
