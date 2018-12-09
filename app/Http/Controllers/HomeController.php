<?php

namespace App\Http\Controllers;

use \App\Timing;

class HomeController extends Controller
{
    public function index()
    {
        $timings = Timing::get();


        $data = [
            'timings' => $timings
        ];

        return view('welcome', $data);
    }
}
