<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Complaint;
use DB;

class UniverseComplaintController extends Controller
{
    public function complaint_process_create($request, $universe_id){
        if($request->complaint['comp_name'] && $request->complaint['comp_nature']){
            $query = new Complaint();
            foreach($this->complaint_columns() as $cols){
                $query->$cols = $request->complaint[$cols];
            }
            $query->universe_FK = $universe_id;
            $query->save();
            return $query->id;
        }
    }

    public function complaint_process_update($request, $universe_id){
        if($request->complaint['comp_name'] && $request->complaint['comp_nature']){
            if($request->complaint['comp_id']){
                $query = Complaint::find($request->complaint['comp_id']);
            }else{
                $query = new Complaint();
            }
            foreach($this->complaint_columns() as $cols){
                $query->$cols = $request->complaint[$cols];
            }
            $query->universe_FK = $universe_id;
            $query->save();
            return $request->complaint['comp_id'];
        }
    }
    
    public function delete_complaint($request){
        $query = Complaint::find($request);
        $query->delete();
        return back();
    }
    
    public function complaint_columns(){
        $columns_controller = new ColumnsController;
        return $columns_controller->complaint_columns();
    }
}
