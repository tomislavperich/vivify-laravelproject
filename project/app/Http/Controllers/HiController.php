<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HiController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function __invoke(Request $request)
    public function __invoke($name)
    {
        return 'Hello ' . $name;
    }
}
