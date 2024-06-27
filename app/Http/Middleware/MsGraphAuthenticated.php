<?php

namespace App\Http\Middleware;

use Closure;
use Dcblogdev\MsGraph\Facades\MsGraph;
use Illuminate\Http\Request;

class MsGraphAuthenticated
{
    public function handle(Request $request, Closure $next): mixed
    {
        if (! MsGraph::isConnected()) {
            return MsGraph::connect();
        }

        return $next($request);
    }
}
