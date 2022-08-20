<?php

namespace App\Observers;

use App\Models\UnitSection;
use Illuminate\Support\Facades\Cache;

class UnitSectionObserver
{
    /**
     * Handle the UnitSection "created" event.
     *
     * @param  \App\Models\UnitSection  $unitSection
     * @return void
     */
    public function created(UnitSection $unitSection)
    {
        Cache::forget('unit_section_all');
    }

    /**
     * Handle the UnitSection "updated" event.
     *
     * @param  \App\Models\UnitSection  $unitSection
     * @return void
     */
    public function updated(UnitSection $unitSection)
    {
        //
    }

    /**
     * Handle the UnitSection "deleted" event.
     *
     * @param  \App\Models\UnitSection  $unitSection
     * @return void
     */
    public function deleted(UnitSection $unitSection)
    {
        //
    }

    /**
     * Handle the UnitSection "restored" event.
     *
     * @param  \App\Models\UnitSection  $unitSection
     * @return void
     */
    public function restored(UnitSection $unitSection)
    {
        //
    }

    /**
     * Handle the UnitSection "force deleted" event.
     *
     * @param  \App\Models\UnitSection  $unitSection
     * @return void
     */
    public function forceDeleted(UnitSection $unitSection)
    {
        //
    }
}
