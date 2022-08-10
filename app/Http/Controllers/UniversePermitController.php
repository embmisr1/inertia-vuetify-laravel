<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Permit;
use Illuminate\Support\Facades\DB;

class UniversePermitController extends Controller
{
    public function permit_process_create($request, $universe_id)
    {
        if ($request->permit['perm_law'] && $request->permit['perm_number']) {
            $query = new Permit();
            foreach ($this->permit_columns() as $cols) {
                $query->$cols = $request->permit[$cols];
            }
            $query->universe_FK = $universe_id;
            $query->is_priority = 1;
            $query->save();

            $file = $request->permit['perm_file'];

            if($file){
                foreach ($file as $pdf) {

                    $query->addMedia($pdf)
                        ->preservingOriginal()
                        ->toMediaCollection("permits");
                }
            }

            return $query->id;
        }
    }

    public function permit_process_update($request, $universe_id)
    {
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
            $query->universe_FK = $universe_id;
            $query->is_priority = 1;
            $query->save();

            $file = $request->permit['perm_file'];

            if($file){
                foreach ($file as $pdf) {

                    $query->addMedia($pdf)
                        ->preservingOriginal()
                        ->toMediaCollection("permits");
                }
            }

            return $request->permit['perm_id'];
        }
    }

    public function delete_permit($request)
    {
        $query = Permit::find($request);
        $query->delete();
        return back();
    }

    public function permit_columns()
    {
        $columns_controller = new ColumnsController;
        return $columns_controller->permit_columns();
    }
}
