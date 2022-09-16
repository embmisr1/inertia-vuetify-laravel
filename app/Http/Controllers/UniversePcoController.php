<?php

namespace App\Http\Controllers;

use App\Jobs\Logger;
use Illuminate\Http\Request;
use App\Models\Pco;
use App\Models\Universe;
use Illuminate\Support\Facades\DB;

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

            $this->add_foreign_keys_to_universe($universe_id);
            return $query->id;
            Logger::dispatch("PCO", $query->id, auth()->id(), "Created a PCO: ", "create", $universe_id);
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

            $this->add_foreign_keys_to_universe($universe_id);
            Logger::dispatch("PCO", $query->id, auth()->id(), "Updated a PCO: ", "update",  $universe_id);
            return $request->pco['pco_id'];
        }
    }

    public function delete_pco($request){
        $query = Pco::find($request);
        $universe_id = $query->universe_FK;
        $query->delete();

        $this->add_foreign_keys_to_universe($universe_id);
        Logger::dispatch("PCO", $request, auth()->id(), "Updated a PCO: ", "delete", $universe_id);
        return back();
    }

    public function pco_columns(){
        $columns_controller = new ColumnsController;
        return $columns_controller->pco_columns();
    }

    public function add_foreign_keys_to_universe($universe_id)
    {
        $query = DB::table('tbl_pco')->select('*')->where('universe_FK', $universe_id)->orderby('pco_start_date','desc')->limit(1)->get();
        if ($query->count() > 0) {
            $query_update = Universe::find($universe_id);
            $query_update->un_pco = $query[0]->id;
            $query_update->save();
        }
    }
}
