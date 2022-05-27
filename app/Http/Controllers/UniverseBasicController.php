<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Universe;
use DB;

class UniverseBasicController extends Controller
{
    public function basic_process_create($request){
        $query = new Universe();
        foreach($this->basic_columns() as $cols){
            $query->$cols = $request->basic[$cols];
        }
        $query->save();
        return $query->id;
    }
    
    public function basic_process_update($request){
        $query = Universe::find($request->basic['id']);
        foreach($this->basic_columns() as $cols){
            $query->$cols = $request->basic[$cols];
        }
        $query->save();
        return $request->basic['id'];
    }
    
    public function basic_columns(){
        $columns_controller = new ColumnsController;
        return $columns_controller->basic_columns();
    }
}
