<?php

namespace App\Http\Controllers;

use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Illuminate\Http\Request;

class RemoveAttachementController extends Controller
{
    public function __invoke(request $request,Media $media)
    {
        $media->delete();
        return back()->with("message", "Media Deleted");
    }
}
