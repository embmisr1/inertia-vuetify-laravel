<?php

namespace App\Http\Controllers;

use App\Jobs\Logger;
use Illuminate\Http\Request;
use App\Models\Pco;
use DB;

class UniversePcoController extends Controller
{
    public function pco_process_create($request, $universe_id){
        if($request->pco['pco_name'] && $request->pco['pco_number']){
            $query = new Pco();
            foreach($this->pco_columns() as $cols){
                $query->$cols = $request->pco[$cols];
            }
            $query->universe_FK = $universe_id;
            $query->save();
            return $query->id;
            Logger::dispatch("PCO", $query->id, auth()->id(), "Created a PCO: model_id " . $query->id, "create");
        }
    }

    public function pco_process_update($request, $universe_id){
        if($request->pco['pco_name'] && $request->pco['pco_number']){
            if($request->pco['pco_id']){
                $query = Pco::find($request->pco['pco_id']);
            }else{
                $query = new Pco();
            }
            foreach($this->pco_columns() as $cols){
                $query->$cols = $request->pco[$cols];
            }
            $query->universe_FK = $universe_id;
            $query->save();
            Logger::dispatch("PCO", $query->id, auth()->id(), "Updated a PCO: model_id " . $query->id, "update");
            return $request->pco['pco_id'];
        }
    }

    public function delete_pco($request){
        $query = Pco::find($request);
        $query->delete();
        Logger::dispatch("PCO", $request, auth()->id(), "Updated a PCO: model_id " . $request, "delete");
        return back();
    }

    public function pco_columns(){
        $columns_controller = new ColumnsController;
        return $columns_controller->pco_columns();
    }
}
