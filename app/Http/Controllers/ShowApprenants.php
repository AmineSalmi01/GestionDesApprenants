<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowApprenants extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $name = $request->input("input");
        return $name;
    }
}
