<?php

namespace App\Http\Controllers;

use App\Filters\LogsFilter;
use App\Http\Resources\LogsResource;
use Illuminate\Http\Request;
use App\Models\Logs;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Request as FacadesRequest;
use Inertia\Inertia;

class LogsController extends Controller
{
    public $model;
    public $model_id;
    public $user_id;
    public $activity;
    public $activity_type;
    public function __construct($model = "", $model_id = null, $user_id = "", $activity = "", $activity_type = "")
    {
        $this->model = $model;
        $this->model_id =  $model_id;
        $this->user_id = $user_id;
        $this->activity = $activity;
        $this->activity_type = $activity_type;
    }

    public function store()
    {
        try {
            $new_log = new Logs();

            $new_log->model = $this->model;
            $new_log->model_id = $this->model_id;
            $new_log->user_id = $this->user_id;
            $new_log->activity = $this->activity;
            $new_log->activity_type = $this->activity_type;

            $new_log->save();
            Log::notice("Log Created " . $new_log->id . now()->format('M d, Y -  h:m a '));
            return $new_log;
        } catch (\Throwable $th) {
            Log::error("ERROR occur " . now()->format('M d, Y -  h:m a ') . " when storing user: " . $this->user_id . "\n log content" . $this->activity);
            return $th->getMessage();
        }
    }

    public function index(Request $request)
    {

        return Inertia::render("pages/universe/logs", [
            "filters" => FacadesRequest::all(
                "username",
                "activity_type",
                "activity",
                "per_page"
            ),
            "data" => LogsResource::collection((new LogsFilter)->get())
        ]);
    }
}
