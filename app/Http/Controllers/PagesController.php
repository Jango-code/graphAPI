<?php

namespace App\Http\Controllers;

use Dcblogdev\MsGraph\Facades\MsGraph;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function app()
    {
        dd(MsGraph::get('me'));
    }

    public function __invoke(Request $request)
    {
        // Tu lógica aquí
    }
}
