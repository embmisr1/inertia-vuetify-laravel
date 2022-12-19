<?php

namespace App\Http\Controllers;

use App\Jobs\Logger;
use Illuminate\Http\Request;
use App\Models\Complaint;
use App\Service\MediaUploader;
use Illuminate\Support\Facades\DB;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class UniverseComplaintController extends Controller
{
    public function complaint_process_create($request, $universe_id)
    {
        if ($request->complaint['comp_name'] && $request->complaint['comp_nature']) {
            $query = new Complaint();
            foreach ($this->complaint_columns() as $cols) {
                $query->$cols = $request->complaint[$cols];
            }
            $query->universe_FK = $universe_id;
            $query->save();

            $file_comp_attached_file = $request->complaint['comp_attached_file'] ?? false;

            if ($file_comp_attached_file) {
                $this->add_media_attached($request->complaint['comp_attached_file'], $query);
            }

            $file_comp_action_file = $request->complaint['comp_action_file'] ?? false;

            if ($file_comp_action_file) {
                $this->add_media_action($request->complaint['comp_action_file'], $query);
            }


            Logger::dispatch("Complaint", $query->id, auth()->id(), "Created a NOV: ", "create", $universe_id);

            return $query->id;
        }
    }

    public function complaint_process_update($request, $universe_id)
    {
        if ($request->complaint['comp_name'] && $request->complaint['comp_nature']) {
            if ($request->complaint['comp_id']) {
                $query = Complaint::find($request->complaint['comp_id']);
            } else {
                $query = new Complaint();
            }
            foreach ($this->complaint_columns() as $cols) {
                $query->$cols = $request->complaint[$cols];
            }
            $query->universe_FK = $universe_id;
            $query->save();

            $file_comp_attached_file = $request->complaint['comp_attached_file'] ?? false;

            if ($file_comp_attached_file) {
                $this->add_media_attached($request->complaint['comp_attached_file'], $query);
            }

            $file_comp_action_file = $request->complaint['comp_action_file'] ?? false;

            if ($file_comp_action_file) {
                $this->add_media_action($request->complaint['comp_action_file'], $query);
            }

            Logger::dispatch("Complaint", $query->id, auth()->id(), "Updated a NOV: ", "update", $universe_id);

            return $request->complaint['comp_id'];
        }
    }

    public function delete_complaint($request)
    {
        $query = Complaint::find($request);

        $universe_id = $query->universe_FK;
        $query->delete();
        Logger::dispatch("Complaint", $request, auth()->id(), "Deleted a NOV: ", "delete", $universe_id);
        return back();
    }

    public function complaint_columns()
    {
        $columns_controller = new ColumnsController;
        return $columns_controller->complaint_columns();
    }

    public function add_media_attached($file, $query)
    {
        if (isset($file)) {
            (new MediaUploader())->un_complaint_upload($query, $file);
            // foreach ($file as $pdf) {
            //     $query->addMedia($pdf)
            //         ->preservingOriginal()
            //         ->toMediaCollection("complaint");
            // }
        }
        $media_counter = Media::where('model_id', $query->id)->where('collection_name', 'complaint-ftp')->count();
        $query_media_counter = Complaint::find($query->id);
        $query_media_counter->comp_attached_file = $media_counter;
        $query_media_counter->save();
    }

    public function add_media_action($file, $query)
    {
        if (isset($file)) {
            foreach ($file as $pdf) {
                (new MediaUploader())->un_complaintaction_upload($query, $file);
                // $query->addMedia($pdf)
                //     ->preservingOriginal()
                //     ->toMediaCollection("complaintaction", "complaintaction");
            }
        }
        $media_counter = Media::where('model_id', $query->id)->where('collection_name', 'complaintaction-ftp')->count();
        $query_media_counter = Complaint::find($query->id);
        $query_media_counter->comp_action_file = $media_counter;
        $query_media_counter->save();
    }
}
