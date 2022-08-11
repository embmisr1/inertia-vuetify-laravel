<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Complaint;
use DB;

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
        if (isset($request->complaint['comp_attached_file'])) {
                foreach ($request->complaint['comp_attached_file'] as $pdf) {

                    $query->addMedia($pdf)
                        ->preservingOriginal()
                        ->toMediaCollection("complaint");
                }
            }
            if (isset($request->complaint['comp_action_file'])) {
                foreach ($request->complaint['comp_action_file'] as $pdf) {

                    $query->addMedia($pdf)
                        ->preservingOriginal()
                        ->toMediaCollection("complaintaction","complaintaction");
                }
            }
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

            if (isset($request->complaint['comp_attached_file'])) {
                foreach ($request->complaint['comp_attached_file'] as $pdf) {

                    $query->addMedia($pdf)
                        ->preservingOriginal()
                        ->toMediaCollection("complaint");
                }
            }
            if (isset($request->complaint['comp_action_file'])) {
                // dd($request->complaint['comp_action_file']);
                foreach ($request->complaint['comp_action_file'] as $pdf) {

                    $query->addMedia($pdf)
                        ->preservingOriginal()
                        ->toMediaCollection("complaintaction","complaintaction");
                }
            }
            return $request->complaint['comp_id'];
        }
    }

    public function delete_complaint($request)
    {
        $query = Complaint::find($request);
        $query->delete();
        return back();
    }

    public function complaint_columns()
    {
        $columns_controller = new ColumnsController;
        return $columns_controller->complaint_columns();
    }
}
