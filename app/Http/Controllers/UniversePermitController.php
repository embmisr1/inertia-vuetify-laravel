<?php

namespace App\Http\Controllers;

use App\Jobs\Logger;
use Illuminate\Http\Request;
use App\Models\Permit;
use App\Models\Universe;
use Illuminate\Support\Facades\DB;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class UniversePermitController extends Controller
{
    public function permit_process_create($request, $universe_id)
    {
        try {
            $valid_array = $request->permit['perm_law'] ?? true;
            if ($valid_array) {

                if ($request->permit['perm_law'] && $request->permit['perm_number']) {
                    $query = new Permit();
                    foreach ($this->permit_columns() as $cols) {
                        $query->$cols = $request->permit[$cols];
                    }
                    $query->perm_law = $request->permit['perm_law'];
                    $query->universe_FK = $universe_id;
                    $query->is_priority = 1;
                    $query->save();

                    $this->add_foreign_keys_to_universe($universe_id);
                    $file = $request->permit['perm_file'] ?? false;
                    if ($file) {
                        $this->add_media($request->permit['perm_file'], $query);
                    }
                    Logger::dispatch("Permit", $query->id, auth()->id(), "Updated a Permit: model_id " . $query->id, "create");

                    return $query->id;
                }
            }
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function permit_process_update($request, $universe_id)
    {
        try {
            // $valid_array = $request->permit['perm_law'] ?? false;
            // if ($valid_array) {
                $user_access = $request->user_access->toArray();
                if (in_array('CPD EDIT', $user_access)) {
                    if ($request->permit['perm_law'] && $request->permit['perm_number']) {
                        $this->null_priority($request->permit['perm_law'], $universe_id);
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

                        $this->add_foreign_keys_to_universe($universe_id);
                        $file = $request->permit['perm_file'] ?? false;
                        if ($file) {
                            $this->add_media($request->permit['perm_file'], $query);
                        }

                        Logger::dispatch("Permit", $query->id, auth()->id(), "Updated a Permit: ", "update", $universe_id);

                        return $request->permit['perm_id'];
                    }
                } elseif (in_array('EMED EDIT', $user_access) && $request->permit['perm_law'] == 'RA 6969') {
                    if ($request->permit['perm_law'] && $request->permit['perm_number']) {
                        $this->null_priority($request->permit['perm_law'], $universe_id);

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

                        $this->add_foreign_keys_to_universe($universe_id);
                        $file = $request->permit['perm_file'] ?? false;

                        if ($file) {
                            $this->add_media($request->permit['perm_file'], $query);
                        }

                        Logger::dispatch("Permit", $query->id, auth()->id(), "Updated a Permit: ", "update",  $universe_id);

                        return $request->permit['perm_id'];
                    }
                } else {
                }
            // }
        } catch (\Throwable $th) {
            dd($th->getMessage());
            return $th->getMessage();
        }
    }

    public function delete_permit($request)
    {
        $query = Permit::find($request);
        $universe_id = $query->universe_FK;
        $perm_law = $query->perm_law;
        $query->delete();

        $query_select_null_priority = DB::table('tbl_permit')->where('universe_FK', $universe_id)->where('perm_law', $perm_law)->orderby('updated_at', 'desc')->limit(1)->get();
        if ($query_select_null_priority->count() > 0) {
            $query_set_priority = Permit::find($query_select_null_priority[0]->id);
            $query_set_priority->is_priority = 1;
            $query_set_priority->save();
        }

        $this->add_foreign_keys_to_universe($universe_id);
        Logger::dispatch("Permit", $request, auth()->id(), "deleted a Permit: ", "delete",  $universe_id);

        return back();
    }

    public function permit_columns()
    {
        $columns_controller = new ColumnsController;
        return $columns_controller->permit_columns();
    }

    public function null_priority($perm_law, $universe_id)
    {
        $query_null_priority = DB::table('tbl_permit')
            ->where('universe_FK', $universe_id)
            ->where('perm_law', $perm_law)
            ->update([
                'is_priority' => null,
            ]);
        return $query_null_priority;
    }

    public function add_media($file, $query)
    {
        if (isset($file)) {
            foreach ($file as $pdf) {
                $query->addMedia($pdf)
                    ->preservingOriginal()
                    ->toMediaCollection("permits");
            }
        }
        $media_counter = Media::where('model_id', $query->id)->where('collection_name', 'permits')->count();
        $query_media_counter = Permit::find($query->id);
        $query_media_counter->perm_file = $media_counter;
        return $query_media_counter->save();
    }

    public function add_foreign_keys_to_universe($universe_id)
    {
        $query = DB::table('tbl_permit')->select('*')->where('perm_law', 'PD 1586')->where('is_priority', 1)->where('universe_FK', $universe_id)->limit(1)->get();
        if ($query->count() > 0) {
            $query_update = Universe::find($universe_id);
            $query_update->un_ecc_number = $query[0]->id;
            $query_update->save();
        }
        $query = DB::table('tbl_permit')->select('*')->where('perm_law', 'RA 8749')->where('is_priority', 1)->where('universe_FK', $universe_id)->limit(1)->get();
        if ($query->count() > 0) {
            $query_update = Universe::find($universe_id);
            $query_update->un_poa_number = $query[0]->id;
            $query_update->save();
        }
        $query = DB::table('tbl_permit')->select('*')->where('perm_law', 'RA 9275')->where('is_priority', 1)->where('universe_FK', $universe_id)->limit(1)->get();
        if ($query->count() > 0) {
            $query_update = Universe::find($universe_id);
            $query_update->un_wwdp_number = $query[0]->id;
            $query_update->save();
        }
        $this->hazwaste_id_is_priority($universe_id);
        $query = DB::table('tbl_permit')->select('*')->where('perm_law', 'RA 6969')->where('is_priority', 1)->where('universe_FK', $universe_id)->limit(1)->get();
        if ($query->count() > 0) {
            $query_update = Universe::find($universe_id);
            $query_update->un_hazwaste_number = $query[0]->id;
            $query_update->save();
        }
    }
    public function hazwaste_id_is_priority($universe_id){
        $query = DB::table('tbl_permit')->where('perm_law', 'RA 6969')->where('universe_FK', $universe_id)->update(['is_priority'=>null]);
        $query = DB::table('tbl_permit')->where('perm_law', 'RA 6969')->where('perm_hazwaste_type','Hazwaste ID')->where('universe_FK', $universe_id)->orderBy('id','desc')->limit(1)->update(['is_priority'=>1]);
    }
}
