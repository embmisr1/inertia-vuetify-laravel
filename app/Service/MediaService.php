<?php

namespace App\Service;

use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Illuminate\Support\Facades\DB;


class MediaService
{

    protected $collection;
    protected $model_id;
    protected $model_type;

    public function __construct($collection, $model_id)
    {
        $this->collection = $collection;
        $this->model_id = $model_id;
        // $this->model_type = $model_type;
    }

    public function collectionSwitch()
    {
        try {
            $media = DB::table('media')
                ->select([
                    'id',
                    'name',
                    'file_name',
                    'uuid',
                    'mime_type',
                    'size'
                ])
                ->where('model_id', $this->model_id)
                ->where('collection_name', $this->collection)
                ->get();

            return $media;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
}
