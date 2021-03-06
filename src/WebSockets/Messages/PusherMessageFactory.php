<?php

namespace Jonykpi\LaravelWebSockets\WebSockets\Messages;

use App\Http\Services\SocketService;
use Illuminate\Support\Facades\Log;
use Jonykpi\LaravelWebSockets\WebSockets\Channels\ChannelManager;
use Illuminate\Support\Str;
use Ratchet\ConnectionInterface;
use Ratchet\RFC6455\Messaging\MessageInterface;

class PusherMessageFactory
{
    public static function createForMessage(
        MessageInterface $message,
        ConnectionInterface $connection,
        ChannelManager $channelManager): PusherMessage
    {
        
        $payload = json_decode($message->getPayload());

        $data = new SocketService($message->getPayload());
        $data->receiveMessage();

        return Str::startsWith($payload->event, 'pusher:')
            ? new PusherChannelProtocolMessage($payload, $connection, $channelManager)
            : new PusherClientMessage($payload, $connection, $channelManager);
    }
}
