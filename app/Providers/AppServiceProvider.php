<?php

namespace App\Providers;

use App\Models\Position;
use App\Models\UnitSection;
use App\Observers\PositionObserver;
use App\Observers\UnitSectionObserver;
use Illuminate\Support\ServiceProvider;

use \Maatwebsite\Excel\Sheet;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {


        Sheet::macro('setOrientation', function (Sheet $sheet, $orientation) {
            $sheet->getDelegate()->getPageSetup()->setOrientation($orientation);
        });
        Sheet::macro('styleCells', function (Sheet $sheet, string $cellRange, array $style) {
            $sheet->getDelegate()->getStyle($cellRange)->applyFromArray($style);
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Position::observe(PositionObserver::class);
        UnitSection::observe(UnitSectionObserver::class);
    }
}
