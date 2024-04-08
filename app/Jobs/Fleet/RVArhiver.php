<?php

namespace App\Jobs\Fleet;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Carbon\Carbon;
use App\Models\Fleet\Request as RequestModel;
use Illuminate\Support\Facades\Log;

class RVArhiver implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $fromDate = Carbon::now()->subMonth()->startOfMonth()->toDateString();
        $tillDate = Carbon::now()->subMonth()->endOfMonth()->toDateString();

        $pastMonthsData = RequestModel::query()->whereBetween('created_at', [$fromDate, $tillDate])->get();

        Log::notice('Chauffeur: Performing  archive for past month requests ' . now());

        $pastMonthsData->each(function ($data, $key) {
            $data->update([
                'status'=> 'archive'
            ]);
        });

        Log::notice('Chauffeur: Archiving  process completed successfully!' . now());

    }
}
