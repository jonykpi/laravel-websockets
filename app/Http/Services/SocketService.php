<?php


namespace App\Http\Services;


class SocketService
{
    public function __construct($data)
    {
        $this->data = $data;

    }

    public function receiveMessage(){
        \Illuminate\Support\Facades\Log::info(json_encode($this->data));
    }

}
