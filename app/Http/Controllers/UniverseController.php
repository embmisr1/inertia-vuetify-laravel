<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Universe;
use App\Models\Permit;
use App\Models\Monitoring;
use App\Models\Hazwaste;
use App\Models\Legal;
use App\Models\Complaint;
use App\Models\Pco;
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
        if($request->basic['id']){
            $id = $this->universe_process_update($request);
            // return Redirect::route('universe_form_id',[
            //     'id'=>$id,
            // ]);
            return Redirect::route('universe_form');
        }else{
            $id = $this->universe_process_create($request);
            return Redirect::route('universe_form');
        }
    }
    
    public function universe_process_create($request){
        $query = new Universe();
        $query->un_firmname = $request->basic['un_firmname'];
        $query->un_proponent = $request->basic['un_proponent'];
        $query->un_crs_number = $request->basic['un_crs_number'];
        $query->un_type = $request->basic['un_type'];
        $query->save();
        return $query->un_id;
        // dd($request->basic['un_firmname']);
    }

    public function universe_process_update($request){
        $id = $request->basic['id'];
        $query = Universe::find($id);
        $query->un_firmname = $request->basic['un_firmname'];
        $query->un_proponent = $request->basic['un_proponent'];
        $query->un_crs_number = $request->basic['un_crs_number'];
        $query->un_type = $request->basic['un_type'];
        $query->save();
        return $query->id;
    }
}