<?php

namespace App\Http\Controllers;

use App\Jobs\Logger;
use Illuminate\Http\Request;
use App\Models\Permit;
use Illuminate\Support\Facades\DB;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class UniversePermitController extends Controller
{
    public function permit_process_create($request, $universe_id)
    {
        if ($request->permit['perm_law'] && $request->permit['perm_number']) {
            $query = new Permit();
            foreach ($this->permit_columns() as $cols) {
                $query->$cols = $request->permit[$cols];
            }
            $query->perm_law = $request->permit['perm_law'];
            $query->universe_FK = $universe_id;
            $query->is_priority = 1;
            $query->save();

            if(isset($request->permit['perm_file'])){
                foreach ($request->permit['perm_file'] as $pdf) {

                    $query->addMedia($pdf)
                        ->preservingOriginal()
                        ->toMediaCollection("permits");
                }
            }

            $media_counter = Media::where('model_id',$query->id)->count();
            $query_media_counter = Permit::find($query->id);
            $query_media_counter->perm_file = $media_counter;
            $query_media_counter->save();
            Logger::dispatch("Permit", $query->id, auth()->id(), "Updated a Permit: model_id " . $query->id, "create");
            return $query->id;
        }
    }

    public function permit_process_update($request, $universe_id)
    {
        $user_access = $request->user_access->toArray();
        if( in_array('CPD EDIT', $user_access) ){
            if ($request->permit['perm_law'] && $request->permit['perm_number']) {
                $query_null_priority = DB::table('tbl_permit')
                    ->where('universe_FK', $universe_id)
                    ->where('perm_law', $request->permit['perm_law'])
                    ->update([
                        'is_priority' => null,
                    ]);
                $query_null_priority;

                if ($request->permit['perm_id']) {
                    $query = Permit::find($request->permit['perm_id']);
                } else {
                    $query = new Permit();
                }
                foreach ($this->permit_columns() as $cols) {
                    $query->$cols = $request->permit[$cols];
                }
                $query->perm_law = $request->permit['perm_law'];
                $query->universe_FK = $universe_id;
                $query->is_priority = 1;
                $query->save();


                if(isset($request->permit['perm_file'])){
                    foreach ($request->permit['perm_file'] as $pdf) {

                        $query->addMedia($pdf)
                            ->preservingOriginal()
                            ->toMediaCollection("permits");
                    }
                }

                $media_counter = Media::where('model_id',$query->id)->count();
                $query_media_counter = Permit::find($query->id);
                $query_media_counter->perm_file = $media_counter;
                $query_media_counter->save();
                Logger::dispatch("Permit", $query->id, auth()->id(), "Updated a Permit: model_id " . $query->id, "update");
                return $request->permit['perm_id'];
            }
        }elseif( in_array('EMED EDIT', $user_access) && $request->permit['perm_law'] == 'RA 6969'){
            if ($request->permit['perm_law'] && $request->permit['perm_number']) {
                $query_null_priority = DB::table('tbl_permit')
                    ->where('universe_FK', $universe_id)
                    ->where('perm_law', $request->permit['perm_law'])
                    ->update([
                        'is_priority' => null,
                    ]);
                $query_null_priority;

                if ($request->permit['perm_id']) {
                    $query = Permit::find($request->permit['perm_id']);
                } else {
                    $query = new Permit();
                }
                foreach ($this->permit_columns() as $cols) {
                    $query->$cols = $request->permit[$cols];
                }
                $query->perm_law = $request->permit['perm_law'];
                $query->universe_FK = $universe_id;
                $query->is_priority = 1;
                $query->save();


                if(isset($request->permit['perm_file'])){
                    foreach ($request->permit['perm_file'] as $pdf) {

                        $query->addMedia($pdf)
                            ->preservingOriginal()
                            ->toMediaCollection("permits");
                    }
                }

                $media_counter = Media::where('model_id',$query->id)->count();
                $query_media_counter = Permit::find($query->id);
                $query_media_counter->perm_file = $media_counter;
                $query_media_counter->save();
                Logger::dispatch("Permit", $query->id, auth()->id(), "Updated a Permit: model_id " . $query->id, "update");
                return $request->permit['perm_id'];
            }
        }else{}
    }

    public function delete_permit($request)
    {
        $query = Permit::find($request);
        $query->delete();
        Logger::dispatch("Permit", $request, auth()->id(), "deleted a Permit: model_id " . $request, "delete");
        return back();
    }

    public function permit_columns()
    {
        $columns_controller = new ColumnsController;
        return $columns_controller->permit_columns();
    }
}
