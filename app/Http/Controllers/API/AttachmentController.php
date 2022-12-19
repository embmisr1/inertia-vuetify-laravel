<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\AttachmentResource;
use App\Service\MediaService;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use ZipArchive;
use  Illuminate\Support\Facades\Auth;

class AttachmentController extends Controller
{
    public function get(Request $request, $collection, $model_id)
    {

        $service = (new MediaService($collection, $model_id))->collectionSwitch();

        return response()->json([
            "files" => AttachmentResource::collection($service)
        ]);
    }

    public function get_ftp(Request $request)
    {

        return response()->json([
            "files" => (new MediaService(request('collection'), request('model_id')))->collectionSwitch()
        ]);
    }

    public function downloadviaftp(Request $request)
    {
        try {

            // if(!auth()->id()){
            //     return response()->json([
            //         "data"=>Auth::check(),
            //         "message"=>"Not Logged In"
            //     ]);
            // }
            $conn = Storage::disk(request('collection'));
            $directory = $conn->files(request('file_id'))[0];
            $files = $conn->download($directory);
            return  $files;
        } catch (\Throwable $th) {
            return $th->getMessage();
            return response()->json([
                "message" => $th->getMessage()
            ]);
        }
    }

    public function removeviaftp(Request $request, Media $media)
    {
        try {
            // Storage::disk(request('collection'))->deleteDirectory(request('model_id'));
            $media->delete();
            return  response()->json([
                "data"=>request('model_id'),
                "message" =>"File Deleted"
            ]);

        } catch (\Throwable $th) {
            return response()->json([
                "data" => $th->getMessage(),
                "message"=>"No such file or directory"
            ]);
        }
    }

    public function remove(request $request, Media $media)
    {
        try {
            $media->delete();
            return response()->json([
                "message" => "File deleted successfully"
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                "message" => $th->getMessage(),
            ]);
        }
    }
}
