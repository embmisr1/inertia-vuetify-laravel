<?php

namespace App\Http\Controllers;

use App\Jobs\Logger;
use Illuminate\Http\Request;
use App\Models\Legal;
use App\Models\Universe;
use App\Service\MediaUploader;
use Illuminate\Support\Facades\DB;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class UniverseLegalController extends Controller
{
    public function legal_process_create($request, $universe_id)
    {
        // $valid_array = $request->legal['nov_law'] ?? false;
        // if ($valid_array) {
            if (isset($request->legal['nov_law']) && $request->legal['nov_date']) {
                $query = new Legal();
                foreach ($this->legal_columns() as $cols) {
                    $query->$cols = $request->legal[$cols];
                }
                $query->nov_law = $this->industry_laws($request, 'legal', 'nov_law');
                $query->universe_FK = $universe_id;
                if ($request->legal['nov_compliance_status'] == null) {
                    $query->nov_compliance_status = 'Not Complied';
                }
                $query->save();

                $this->add_foreign_keys_to_universe($universe_id);

                $file = $request->legal['nov_file'] ?? false;

                if ($file) {
                    $this->add_media($request->legal['nov_file'], $query);
                }
                Logger::dispatch("Legal", $query->id, auth()->id(), "Created a monitoring: ", "create", $universe_id);

                return $query->id;
            }
        // }
    }

    public function legal_process_update($request, $universe_id)
    {
        // $valid_array = $request->legal['nov_law'] ?? false;
        // if ($valid_array) {

            if (isset($request->legal['nov_law']) && $request->legal['nov_date']) {
                if ($request->legal['nov_id']) {
                    $query = Legal::find($request->legal['nov_id']);
                } else {
                    $query = new Legal();
                }
                foreach ($this->legal_columns() as $cols) {
                    $query->$cols = $request->legal[$cols];
                }
                $query->nov_law = $this->industry_laws($request, 'legal', 'nov_law');
                $query->universe_FK = $universe_id;
                if ($request->legal['nov_compliance_status'] == null) {
                    $query->nov_compliance_status = 'Not Complied';
                }
                $query->save();

                $this->add_foreign_keys_to_universe($universe_id);

                $file = $request->legal['nov_file'] ?? false;

                if ($file) {
                    $this->add_media($request->legal['nov_file'], $query);
                }
                Logger::dispatch("Legal", $query->id, auth()->id(), "Updated a monitoring: ", "update", $universe_id);

                return $request->legal['nov_id'];
            }
        // }
    }

    public function delete_legal($request)
    {
        $query = Legal::find($request);
        $universe_id = $query->universe_FK;
        $query->delete();

        $this->add_foreign_keys_to_universe($universe_id);
        Logger::dispatch("Legal", $request, auth()->id(), "Deleted a monitoring: ", "delete", $universe_id);
        return back();
    }

    public function legal_columns()
    {
        $columns_controller = new ColumnsController;
        return $columns_controller->legal_columns();
    }

    public function industry_laws($request, $law, $column)
    {
        $industry_laws = '';
        foreach ($request->$law[$column] as $industry_law) {
            $industry_laws = $industry_laws . $industry_law . ', ';
        }
        return rtrim($industry_laws, ', ');
    }

    public function add_media($file, $query)
    {
        if (isset($file)) {
            (new MediaUploader())->un_legal_upload($query, $file);
            // foreach ($file as $pdf) {
            //     $query->addMedia($pdf)
            //         ->preservingOriginal()
            //         ->toMediaCollection("legal");
            // }
        }
        $media_counter = Media::where('model_id', $query->id)->where('collection_name', 'legal-ftp')->count();
        $query_media_counter = Legal::find($query->id);
        $query_media_counter->nov_file = $media_counter;
        $query_media_counter->save();
    }

    public function add_foreign_keys_to_universe($universe_id)
    {
        $query = DB::table('tbl_legal')->select('*')->where('nov_compliance_status','!=','Complied')->where('universe_FK', $universe_id)->orderby('nov_date','desc')->limit(1)->get();
        if ($query->count() > 0) {
            $query_update = Universe::find($universe_id);
            $query_update->un_legal = $query[0]->id;
            $query_update->save();
        }
    }
}
