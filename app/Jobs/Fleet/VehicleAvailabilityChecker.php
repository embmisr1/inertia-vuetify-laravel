<?php

namespace App\Jobs\Fleet;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Fleet\Vehicle;
use App\Models\Fleet\Request as RequestModel;
use Carbon\Carbon;

class VehicleAvailabilityChecker implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;


    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $carbonNow = Carbon::now();
        $approved_requests = RequestModel::with(['requested_user', 'trip.driver.vehicle'])->where('status', 'approved ')->where('departure', '2024-04-03')->get();
        $approved_requests->each(function ($req) {
            $assignedVehicle = $req->trip->driver->vehicle;

            $assignedVehicle->update([
                "status" => "driving"
            ]);
        });
    }
}
