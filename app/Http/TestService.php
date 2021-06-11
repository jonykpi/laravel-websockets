<?php


namespace App\Http;


use Jonykpi\LaravelWebSockets\Facades\StatisticsLogger;
use Jonykpi\LaravelWebSockets\WebSockets\Messages\PusherMessageFactory;
use Jonykpi\LaravelWebSockets\WebSockets\WebSocketHandler;
use Illuminate\Support\Facades\Log;
use Ratchet\ConnectionInterface;
use Ratchet\RFC6455\Messaging\MessageInterface;

class TestService extends WebSocketHandler
{
    public function onMessage(ConnectionInterface $connection, MessageInterface $message)
    {
        $message = PusherMessageFactory::createForMessage($message, $connection, $this->channelManager);
        Log::info($message);
        $message->respond();

        StatisticsLogger::webSocketMessage($connection);
    }

}
