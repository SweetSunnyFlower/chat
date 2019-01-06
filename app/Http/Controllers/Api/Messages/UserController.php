<?php

namespace App\Http\Controllers\Api\Messages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

class UserController extends Controller
{
    public function bind(Request $request){
        $client_id = $request->client_id;
        Cache::forever($client_id,auth()->id());
        return response()->json([],200);
    }
}
