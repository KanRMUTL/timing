<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'sum' => 10,
            'users' => \App\User::all(),
        ];
        return view('welcome', $data);
    }
}
