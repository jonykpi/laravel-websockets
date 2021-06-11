<?php
namespace Jonykpi\LaravelWebSockets;

class SocketService
{
    public function __construct()
    {

    }

    public function receiveMessage($message){
        \Illuminate\Support\Facades\Log::info(json_encode($message));
    }

}
