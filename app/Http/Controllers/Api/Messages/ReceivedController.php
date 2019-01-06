<?php

namespace App\Http\Controllers\Api\Messages;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \GatewayWorker\Lib\Gateway;
class ReceivedController extends Controller
{
    public function received(Request $request){
        $message = $request->message;
        Gateway::$registerAddress = '127.0.0.1:1236';
        $info = [
            'name'=>auth()->user()->name,
            'message'=>$message,
            'created_at'=>now()->toDateTimeString()

        ];
        Gateway::sendToAll($this->baseMessage($info));
        return response()->json([],200);
    }
}
