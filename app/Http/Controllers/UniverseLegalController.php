<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Legal;
use Illuminate\Support\Facades\DB;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class UniverseLegalController extends Controller
{
    public function legal_process_create($request, $universe_id){
        if($request->legal['nov_law'] && $request->legal['nov_date']){
            $query = new Legal();
            foreach($this->legal_columns() as $cols){
                $query->$cols = $request->legal[$cols];
            }
            $query->nov_law = $this->industry_laws($request, 'legal', 'nov_law');
            $query->universe_FK = $universe_id;
            if($request->legal['nov_compliance_status'] == null){
                $query->nov_compliance_status = 'Not Complied';
            }
            $query->save();
            if(isset($request->legal['nov_file'])){
                foreach ($request->legal['nov_file'] as $pdf) {

                    $query->addMedia($pdf)
                        ->preservingOriginal()
                        ->toMediaCollection("legal");
                }
            }

            $media_counter = Media::where('model_id',$query->id)->count();
            $query_media_counter = Legal::find($query->id);
            $query_media_counter->nov_file = $media_counter;
            $query_media_counter->save();

            return $query->id;
        }
    }

    public function legal_process_update($request, $universe_id){
        if(!isset($request->legal['nov_law'])) return;
        if($request->legal['nov_law'] && $request->legal['nov_date']){
            if($request->legal['nov_id']){
                $query = Legal::find($request->legal['nov_id']);
            }else{
                $query = new Legal();
            }
            foreach($this->legal_columns() as $cols){
                $query->$cols = $request->legal[$cols];
            }
            $query->nov_law = $this->industry_laws($request, 'legal', 'nov_law');
            $query->universe_FK = $universe_id;
            if($request->legal['nov_compliance_status'] == null){
                $query->nov_compliance_status = 'Not Complied';
            }
            $query->save();

            if(isset($request->legal['nov_file'])){
                foreach ($request->legal['nov_file'] as $pdf) {

                    $query->addMedia($pdf)
                        ->preservingOriginal()
                        ->toMediaCollection("legal");
                }
            }

            $media_counter = Media::where('model_id',$query->id)->count();
            $query_media_counter = Legal::find($query->id);
            $query_media_counter->nov_file = $media_counter;
            $query_media_counter->save();

            return $request->legal['nov_id'];
        }
    }

    public function delete_legal($request){
        $query = Legal::find($request);
        $query->delete();
        return back();
    }

    public function legal_columns(){
        $columns_controller = new ColumnsController;
        return $columns_controller->legal_columns();
    }

    public function industry_laws($request, $law, $column){
        $industry_laws = '';
        foreach($request->$law[$column] as $industry_law){
            $industry_laws = $industry_laws.$industry_law.', ';
        }
        return rtrim($industry_laws,', ');
    }
}
