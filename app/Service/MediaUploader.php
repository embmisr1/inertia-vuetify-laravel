<?php

namespace App\Service;

use App\Models\Complaint;
use App\Models\Legal;
use App\Models\Monitoring;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Illuminate\Support\Facades\DB;
use App\Models\Mov;
use App\Models\Permit;
use App\Models\SolidwasteClosedDumpsite;
use App\Models\SolidwasteIEC;
use App\Models\SolidwasteLCE;
use App\Models\SolidwasteMRF;
use App\Models\SolidwasteSLF;
use App\Models\SolidwasteTenYearFindings;
use App\Models\SolidwasteTenYearMonitoring;
use App\Models\SWM\SLF;
use App\Models\User;

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

    public function un_permit_upload(Permit $permit, $file)
    {
        foreach ($file as $pdf) {
            $permit->addMedia($pdf)
                ->preservingOriginal()
                ->toMediaCollection("permits-ftp");
        }
    }

    public function un_monitoring_upload(Monitoring $monitoring, $file)
    {
        foreach ($file as $pdf) {
            $monitoring->addMedia($pdf)
                ->preservingOriginal()
                ->toMediaCollection("monitoring-ftp");
        }
    }

    public function un_legal_upload(Legal $legal, $file)
    {
        foreach ($file as $pdf) {
            $legal->addMedia($pdf)
                ->preservingOriginal()
                ->toMediaCollection("legal-ftp");
        }
    }

    public function un_complaint_upload(Complaint $complaint, $file)
    {
        foreach ($file as $pdf) {
            $complaint->addMedia($pdf)
                ->preservingOriginal()
                ->toMediaCollection("complaint-ftp");
        }
    }

    public function un_complaintaction_upload(Complaint $complaint, $file)
    {
        foreach ($file as $pdf) {
            $complaint->addMedia($pdf)
                ->preservingOriginal()
                ->toMediaCollection("complaintaction-ftp");
        }
    }

    public function un_slf_upload(SolidwasteSLF $slf, $file)
    {
        foreach ($file as $pdf) {
            $slf->addMedia($pdf)
                ->preservingOriginal()
                ->toMediaCollection("slf-ftp");
        }
    }

    public function un_mrf_upload(SolidwasteMRF $mrf, $file)
    {
        foreach ($file as $pdf) {
            $mrf->addMedia($pdf)
                ->preservingOriginal()
                ->toMediaCollection("mrf-ftp");
        }
    }

    public function un_rca_upload(SolidwasteMRF $rca, $file)
    {
        foreach ($file as $pdf) {
            $rca->addMedia($pdf)
                ->preservingOriginal()
                ->toMediaCollection("rca-ftp");
        }
    }

    public function un_lce_upload(SolidwasteLCE $lce, $file)
    {
        foreach ($file as $pdf) {
            $lce->addMedia($pdf)
                ->preservingOriginal()
                ->toMediaCollection("lce-ftp");
        }
    }

    public function un_dump_site_upload(SolidwasteClosedDumpsite $dump_site, $file)
    {
        foreach ($file as $pdf) {
            $dump_site->addMedia($pdf)
                ->preservingOriginal()
                ->toMediaCollection("dump_site-ftp");
        }
    }

    public function un_ten_year_plan_upload(SolidwasteTenYearFindings $ten_yr, $file)
    {
        foreach ($file as $pdf) {
            $ten_yr->addMedia($pdf)
                ->preservingOriginal()
                ->toMediaCollection("ten_yr_file-ftp");
        }
    }

    public function un_copy_plan_upload(SolidwasteTenYearFindings $ten_yr, $file)
    {
        foreach ($file as $pdf) {
            $ten_yr->addMedia($pdf)
                ->preservingOriginal()
                ->toMediaCollection("copy_plan-ftp");
        }
    }
    public function un_copy_form_upload(SolidwasteTenYearFindings $ten_yr, $file)
    {
        foreach ($file as $pdf) {
            $ten_yr->addMedia($pdf)
                ->preservingOriginal()
                ->toMediaCollection("copy_form-ftp");

        }
    }
    public function un_copy_resolution_upload(SolidwasteTenYearFindings $ten_yr, $file)
    {
        foreach ($file as $pdf) {
            $ten_yr->addMedia($pdf)
                ->preservingOriginal()
                ->toMediaCollection("copy_resolution-ftp");
        }
    }

    public function un_copy_report_upload(SolidwasteTenYearMonitoring $ten_yr, $file)
    {
        foreach ($file as $pdf) {
            $ten_yr->addMedia($pdf)
                ->preservingOriginal()
                ->toMediaCollection("copy_report-ftp");
        }
    }

    public function un_avatars_upload(SolidwasteLCE $lce, $file)
    {
        foreach ($file as $pdf) {
            $lce->addMedia($pdf)
                ->preservingOriginal()
                ->toMediaCollection("avatars-ftp");
        }
    }

    public function un_iec_upload(SolidwasteIEC $iec, $file)
    {
        foreach ($file as $pdf) {
            $iec->addMedia($pdf)
                ->preservingOriginal()
                ->toMediaCollection("iec-ftp");
        }
    }

}
