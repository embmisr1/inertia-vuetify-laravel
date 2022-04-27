<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Universe;
use Illuminate\Support\Facades\Redirect;
use DB;

class UniverseController extends Controller
{
    public function universe_list(){
        return Inertia::render("pages/universe/universe_list", []);
    }

    public function universe_form(request $request){
        if($request->id){
            $id = $request->id;
            $query = Universe::where('id',$id)->get();
            if($query->count() > 0){
                return Inertia::render("pages/universe/universe_form",[
                    'query'=>$query[0],
                ]);
            }else{
                return Inertia::render("pages/universe/universe_form");
            }
        }else{
            return Inertia::render("pages/universe/universe_form");
        }
    }
    
    public function universe_process(request $request){
        if($request->id){
            $id = $this->universe_process_update($request);
            return Redirect::route('universe_form_id',[
                'id'=>$id,
            ]);
        }else{
            $id = $this->universe_process_create($request);
            return Redirect::route('universe_form_id',[
                'id'=>$id,
            ]);
        }
    }
    
    public function universe_process_create($request){
        $query = new Universe();
        $query->firm_name = $request->firm_name ? $request->firm_name : '';
        $query->proponent = $request->proponent;
        $query->crs_number = $request->crs_number;
        $query->universe_type = $request->universe_type;
        $query->save();
        return $query->id;
    }

    public function universe_process_update($request){
        $id = $request->id;
        $query = Universe::find($id);
        $query->firm_name = $request->firm_name ? $request->firm_name : '';
        $query->proponent = $request->proponent;
        $query->crs_number = $request->crs_number;
        $query->universe_type = $request->universe_type;
        $query->save();
        return $query->id;
    }
}