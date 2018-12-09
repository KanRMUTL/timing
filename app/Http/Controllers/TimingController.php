<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimingController extends Controller
{
    public function create()
    {
        $data = [
            'timing_types' => \App\TimingType::all(),
        ];
        return view('timing.create', $data);
    }

    public function store(Request $request)
    {
        //     $rules = [
        //         'comment' => 'required|min:3',
        //         //'email'=> 'required|min:3|email',
        //     ];
        //     $message = [
        //         'comment.required' => "ช่องกรอกคอมเม้น ไม่สามารถเว้นว่างไว้ได้",
        //         'comment.min' => 'ช่อง :name ต้องกรอกข้อมูลไม่น้อยกว่า :min ตัว',
        //     ];

        //     $this->validate($request, $rules, $message);

    }
}
