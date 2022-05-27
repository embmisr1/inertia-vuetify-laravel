<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hazwaste;
use DB;

class UniverseHazwasteController extends Controller
{
    public function hazwaste_process_create($request, $universe_id){
        if($request->hazwaste['haz_type'] && $request->hazwaste['haz_number']){
            $query = new Hazwaste();
            foreach($this->hazwaste_columns() as $cols){
                $query->$cols = $request->hazwaste[$cols];
            }
            $query->universe_FK = $universe_id;
            $query->save();
            return $query->id;
        }
    }

    public function hazwaste_process_update($request, $universe_id){
        if($request->hazwaste['haz_type'] && $request->hazwaste['haz_number']){
            if($request->hazwaste['haz_id']){
                $query = Hazwaste::find($request->hazwaste['haz_id']);
            }else{
                $query = new Hazwaste();
            }
            foreach($this->hazwaste_columns() as $cols){
                $query->$cols = $request->hazwaste[$cols];
            }
            $query->universe_FK = $universe_id;
            $query->save();
            return $request->hazwaste['haz_id'];
        }
    }
    
    public function delete_hazwaste($request){
        $query = Hazwaste::find($request);
        $query->delete();
        return back();
    }
    
    public function hazwaste_columns(){
        $columns_controller = new ColumnsController;
        return $columns_controller->hazwaste_columns();
    }
}
