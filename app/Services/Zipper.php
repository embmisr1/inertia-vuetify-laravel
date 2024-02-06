<?php

namespace App\Services;

use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use PhpParser\Node\Expr\Cast\Array_;
use 	Illuminate\Filesystem\Filesystem as File;

class Zipper
{

    public function excel_zip()
    {
        try {
            $path_date_now = storage_path('app/public/excel/' . Carbon::parse(now('Asia/Manila'))->format('M-d-Y'));
            // $this->createDirectory($path_date_now);
            $zip_file = $path_date_now . '-RPCPPE.zip';
            $zip = new \ZipArchive();
            $zip->open($zip_file, \ZipArchive::CREATE | \ZipArchive::OVERWRITE);

            $path = storage_path('/app/public/excel/' . Carbon::parse(now('Asia/Manila'))->format('M-d-Y'));
            $files = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($path));
            foreach ($files as $name => $file) {
                // We're skipping all subfolders
                if (!$file->isDir()) {
                    $filePath     = $file->getRealPath();

                    // extracting filename with substr/strlen

                    $relativePath = Carbon::parse(now('Asia/Manila'))->format('M-d-Y') . '/' . substr($filePath, strlen($path) + 1);

                    $zip->addFile($filePath, $relativePath);
                }
            }
            $zip->close();
            return $zip_file;
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
    public function pdf_zip()
    {
        try {
            $path_date_now = storage_path('app/public/pdf/' . Carbon::parse(now('Asia/Manila'))->format('M-d-Y'));
            // $this->createDirectory($path_date_now);
            $zip_file = $path_date_now . '-RPCPPE-PDF.zip';
            $zip = new \ZipArchive();
            $zip->open($zip_file, \ZipArchive::CREATE | \ZipArchive::OVERWRITE);

            $path = storage_path('/app/public/pdf/' . Carbon::parse(now('Asia/Manila'))->format('M-d-Y'));
            $files = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($path));
            foreach ($files as $name => $file) {
                // We're skipping all subfolders
                if (!$file->isDir()) {
                    $filePath     = $file->getRealPath();

                    // extracting filename with substr/strlen

                    $relativePath = Carbon::parse(now('Asia/Manila'))->format('M-d-Y') . '/' . substr($filePath, strlen($path) + 1);

                    $zip->addFile($filePath, $relativePath);
                }
            }
            $zip->close();
            return $zip_file;
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function pdf_excel_zip()
    {
        $path_date_now = storage_path('app/public/pdf/' . Carbon::parse(now('Asia/Manila'))->format('M-d-Y'));
        $zip_file = $path_date_now . '-RPCPPE-PDF.zip';
        $zip = new \ZipArchive();
        $zip->open($zip_file, \ZipArchive::CREATE | \ZipArchive::OVERWRITE);

        $path = storage_path('/app/public/pdf/' . Carbon::parse(now('Asia/Manila'))->format('M-d-Y'));
        $files = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($path));
        foreach ($files as $name => $file) {
            // We're skipping all subfolders
            if (!$file->isDir()) {
                $filePath     = $file->getRealPath();

                // extracting filename with substr/strlen

                $relativePath = Carbon::parse(now('Asia/Manila'))->format('M-d-Y') . '/' . substr($filePath, strlen($path) + 1);

                $zip->addFile($filePath, $relativePath);
            }
        }
        $zip->close();
        return $zip_file;
    }

    public function createDirectory($path)
    {

        if (!File::isDirectory($path)) {
            File::makeDirectory($path, 0777, true, true);

            // retry storing the file in newly created path.
            return;
        }
        return;
    }
}
