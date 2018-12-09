<?php

namespace App\Http\Controllers;

use \App\Timing;

class HomeController extends Controller
{
    public function index()
    {
        $in = Timing::where('in_out',0)->get();
        $out = Timing::where('in_out',1)->get();


        $data = [
            'in' => $in,
            'out' => $out
        ];

        return view('welcome', $data);
    }
}
