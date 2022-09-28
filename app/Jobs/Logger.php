<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use App\Models\Logs;
use App\Models\Universe;

class Logger implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $model;
    public $model_id;
    public $user_id;
    public $activity;
    public $activity_type;
    public $universe_FK;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($model = "", $model_id = null, $user_id = "", $activity = "", $activity_type = "", $universe_FK = "")
    {
        $this->model = $model;
        $this->model_id =  $model_id;
        $this->user_id = $user_id;
        $this->activity = $activity;
        $this->activity_type = $activity_type;
        $this->universe_FK = $universe_FK;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        try {
            $firmname = Universe::select("un_firmname as firmname")->where('id', $this->universe_FK)->get();

            $new_log = new Logs();

            $new_log->model = $this->model;
            $new_log->model_id = $this->model_id;
            $new_log->user_id = $this->user_id;
            $new_log->activity = $this->activity . "Firmname: " . $firmname[0]->firmname;
            $new_log->activity_type = $this->activity_type;

            $new_log->save();
            Log::notice("Log Created log_id: " . $new_log->id . " created_at " . now()->format('M d, Y -  h:m a '));
            return $new_log;
        } catch (\Throwable $th) {
            // Log::error("ERROR occur " . now()->format('M d, Y -  h:m a ') . " when storing user: " . $this->user_id . "\n log content " . $this->activity , "\n" . $th->getMessage());
            Log::error($th->getMessage());
            return $th->getMessage();
        }
    }
}
