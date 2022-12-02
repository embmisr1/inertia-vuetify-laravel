<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\AttachmentResource;
use App\Service\MediaService;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class AttachmentController extends Controller
{
    public function get(Request $request, $collection, $model_id){

        $service = (new MediaService($collection, $model_id))->collectionSwitch();

        return response()->json([
            "files"=>AttachmentResource::collection($service)
        ]);
    }

    public function remove(request $request,Media $media)
    {
        try {
            $media->delete();
            return response()->json([
                "message"=>"File deleted successfully"
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                "message"=>$th->getMessage(),
            ]);
        }
    }
}
