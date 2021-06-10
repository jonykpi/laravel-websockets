<?php

namespace Jonykpi\LaravelWebSockets\Dashboard\Http\Controllers;

use Jonykpi\LaravelWebSockets\Apps\AppProvider;
use Illuminate\Http\Request;

class ShowDashboard
{
    public function __invoke(Request $request, AppProvider $apps)
    {
        return view('websockets::dashboard', [
            'apps' => $apps->all(),
            'port' => config('websockets.dashboard.port', 6001),
        ]);
    }
}
