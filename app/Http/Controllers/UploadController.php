<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function image(Request $request){
        $filename = $request->file('file')->store('/article');
        return response()->json(['error'=>false,'path'=>config('filesystems.disks.public.url').'/'.$filename]);
    }
}
