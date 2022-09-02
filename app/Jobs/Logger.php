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

class Logger implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $model;
    public $model_id;
    public $user_id;
    public $activity;
    public $activity_type;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($model = "", $model_id = null, $user_id = "", $activity = "", $activity_type = "")
    {
        $this->model = $model;
        $this->model_id =  $model_id;
        $this->user_id = $user_id;
        $this->activity = $activity;
        $this->activity_type = $activity_type;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        try {
            $new_log = new Logs();

            $new_log->model = $this->model;
            $new_log->model_id = $this->model_id;
            $new_log->user_id = $this->user_id;
            $new_log->activity = $this->activity;
            $new_log->activity_type = $this->activity_type;

            $new_log->save();
            Log::notice("Log Created log_id: " . $new_log->id . " created_at ". now()->format('M d, Y -  h:m a '));
            return $new_log;
        } catch (\Throwable $th) {
            // Log::error("ERROR occur " . now()->format('M d, Y -  h:m a ') . " when storing user: " . $this->user_id . "\n log content " . $this->activity , "\n" . $th->getMessage());
            Log::error("as");
            return $th->getMessage();
        }
    }
}
