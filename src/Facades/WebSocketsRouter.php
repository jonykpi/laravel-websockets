<?php

namespace Jonykpi\LaravelWebSockets\Facades;

use Illuminate\Support\Facades\Facade;

/** @see \Jonykpi\LaravelWebSockets\Server\Router */
class WebSocketsRouter extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'websockets.router';
    }
}
