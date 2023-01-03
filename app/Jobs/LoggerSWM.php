<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use App\Models\Logs;
use App\Models\SolidwasteLCE;

class LoggerSWM implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $model;
    public $model_id;
    public $user_id;
    public $activity;
    public $activity_type;
    public $lce_FK;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($model = "", $model_id = null, $user_id = "", $activity = "", $activity_type = "", $lce_FK = "")
    {
        $this->model = $model;
        $this->model_id =  $model_id;
        $this->user_id = $user_id;
        $this->activity = $activity;
        $this->activity_type = $activity_type;
        $this->lce_FK = $lce_FK;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        try {
            $lce = SolidwasteLCE::where('id', $this->lce_FK)->get();
            $lce_address_province = DB::table('ref_province')->where('PK_province_ID', $lce[0]->lce_province_FK)->get();
            $lce_address_municipality = DB::table('ref_citymun')->where('PK_citymun_ID', $lce[0]->lce_municipality_FK)->get();
            $lce_address = $lce_address_province[0]->provDesc.', '.$lce_address_municipality[0]->citymunDesc;
            $new_log = new Logs();

            $new_log->model = $this->model;
            $new_log->model_id = $this->model_id;
            $new_log->user_id = $this->user_id;
            // $new_log->activity = $this->activity . "Mayor: " . $lce[0]->lce_first_name;
            $new_log->activity = $this->activity . "LGU: " . $lce_address;
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
