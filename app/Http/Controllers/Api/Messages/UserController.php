<?php

namespace App\Http\Controllers\Api\Messages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use \GatewayWorker\Lib\Gateway;
class UserController extends Controller
{
    public function bind(Request $request){
        $client_id = $request->client_id;
        Cache::forever($client_id,auth()->id());
        $info = [
            'name'=>auth()->user()->name,
            'message'=>'登录',
            'created_at'=>now()->toDateTimeString()

        ];
        Gateway::sendToAll($this->baseMessage($info,'user_login'));
        return response()->json([],200);
    }
}
