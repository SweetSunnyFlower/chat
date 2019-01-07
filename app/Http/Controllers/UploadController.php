<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManager;

class UploadController extends Controller
{
    public $imageManager;
    public function __construct(ImageManager $imageManager)
    {
        $this->imageManager = $imageManager;
    }

    public function image(Request $request){


        $file = $request->file('file');

        $fileExtension = $file->getClientOriginalExtension();

        $filename = str_random();

        return $this->imageManager->make($file)->resize(400,300)->save("/uploads/images/$filename.$fileExtension");

        return response()->json(['error'=>false,'path'=>config('filesystems.disks.public.url').'/'.$filename]);
    }

}
