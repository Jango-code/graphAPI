<?php

namespace App\Http\Controllers;

use Dcblogdev\MsGraph\Facades\MsGraph;
use Illuminate\Http\Request;

class APIController extends Controller
{
    public function __invoke(Request $request)
    {
        // Tu lógica aquí
    }

    public function login()
    {
        return view('login');
    }

    public function connect()
    {
        return MsGraph::connect();
        // MsGraph::connect();
        // return view('test');

    }

    public function logout()
    {
        return MsGraph::disconnect();
    }
}
