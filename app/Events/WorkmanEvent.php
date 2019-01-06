<?php

namespace App\Events;

use GatewayWorker\Lib\Gateway;
use Illuminate\Support\Facades\Log;

class WorkmanEvent
{
    public static function onWorkerStart($businessWorker)
    {
    }

    public static function onConnect($client_id)
    {
        $connect_info = [
            'type'=>'login',
            'info'=>[
                'client_id'=>$client_id
            ]
        ];
        Gateway::sendToCurrentClient(json_encode($connect_info));
    }

    public static function onWebSocketConnect($client_id, $data)
    {
//        Log::info('websocket');
//        Log::info($client_id);
    }

    public static function onMessage($client_id, $message)
    {
        $message = json_decode($message);
//        l($message);
        if($message->type == 'login'){
            Gateway::bindUid($client_id, $message->info);
            l(json_decode($message->info));
        }
//        $all = Gateway::getAllClientSessions();
//        Log::info(json_encode($all));
//        GateWay::sendToAll("$message");
        Gateway::sendToUid(2,'send to uid');
        Gateway::sendToCurrentClient($message->info);
    }

    public static function onClose($client_id)
    {
        GateWay::sendToAll("$client_id logout");
    }
}
