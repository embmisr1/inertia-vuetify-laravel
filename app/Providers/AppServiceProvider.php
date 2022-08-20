<?php

namespace App\Providers;

use App\Models\Position;
use App\Models\UnitSection;
use App\Observers\PositionObserver;
use App\Observers\UnitSectionObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
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
