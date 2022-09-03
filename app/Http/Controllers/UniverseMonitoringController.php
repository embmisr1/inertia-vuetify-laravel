<?php

namespace App\Http\Controllers;

use App\Jobs\Logger;
use Illuminate\Http\Request;
use App\Models\Monitoring;
use Illuminate\Support\Facades\DB;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class UniverseMonitoringController extends Controller
{
    public function monitoring_process_create($request, $universe_id)
    {
        $valid_array = $request->monitoring['mon_law'] ? true : false;
        if ($valid_array) {
            if ($request->monitoring['mon_law'] && $request->monitoring['mon_date_monitored']) {
                $query = new Monitoring();
                foreach ($this->monitoring_columns() as $cols) {
                    $query->$cols = $request->monitoring[$cols];
                }
                $query->mon_law = $this->industry_laws($request, 'monitoring', 'mon_law');
                $query->universe_FK = $universe_id;
                $query->save();

                $file = $request->monitoring['mon_file'] ?? false;

                if ($file) {
                    $this->add_media($request->monitoring['mon_file'], $query);
                }
                Logger::dispatch("Monitoring", $query->id, auth()->id(), "Created a monitoring: model_id " . $query->id, "create");

                return $query->id;
            }
        }
    }

    public function monitoring_process_update($request, $universe_id)
    {
        // if(!isset($request->monitoring['mon_law'])) return;
        $valid_array = $request->monitoring['mon_law'] ?? false;
        if ($valid_array) {
            if ($request->monitoring['mon_law'] && $request->monitoring['mon_date_monitored']) {
                if ($request->monitoring['mon_id']) {
                    $query = Monitoring::find($request->monitoring['mon_id']);
                } else {
                    $query = new Monitoring();
                }
                foreach ($this->monitoring_columns() as $cols) {
                    $query->$cols = $request->monitoring[$cols];
                }
                $query->mon_law = $this->industry_laws($request, 'monitoring', 'mon_law');
                $query->universe_FK = $universe_id;
                $query->save();

                $file = $request->monitoring['mon_file'] ?? false;

                if ($file) {
                    $this->add_media($request->monitoring['mon_file'], $query);
                }
                Logger::dispatch("Monitoring", $query->id, auth()->id(), "Updated a monitoring: model_id " . $query->id, "update");

                return $request->monitoring['mon_id'];
            }
        }
    }

    public function delete_monitoring($request)
    {
        $query = Monitoring::find($request);
        $query->delete();
        Logger::dispatch("Monitoring", $request, auth()->id(), "Deleted a monitoring: model_id " . $query->id, "delete");
        return back();
    }

    public function monitoring_columns()
    {
        $columns_controller = new ColumnsController;
        return $columns_controller->monitoring_columns();
    }

    public function industry_laws($request, $law, $column)
    {
        $industry_laws = '';
        foreach ($request->$law[$column] as $industry_law) {
            $industry_laws = $industry_laws . $industry_law . ', ';
        }
        return rtrim($industry_laws, ', ');
    }

    public function add_media($file, $query)
    {
        if (isset($file)) {
            foreach ($file as $pdf) {
                $query->addMedia($pdf)
                    ->preservingOriginal()
                    ->toMediaCollection("monitoring");
            }
        }
        $media_counter = Media::where('model_id', $query->id)->count();
        $query_media_counter = Monitoring::find($query->id);
        $query_media_counter->mon_file = $media_counter;
        $query_media_counter->save();
    }
}
