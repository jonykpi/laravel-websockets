<?php

namespace Jonykpi\LaravelWebSockets\Facades;

use Jonykpi\LaravelWebSockets\Statistics\Logger\StatisticsLogger as StatisticsLoggerInterface;
use Illuminate\Support\Facades\Facade;

/** @see \Jonykpi\LaravelWebSockets\Statistics\Logger\HttpStatisticsLogger */
class StatisticsLogger extends Facade
{
    protected static function getFacadeAccessor()
    {
        return StatisticsLoggerInterface::class;
    }
}
