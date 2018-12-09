@extends('layout.master')
@section('title', 'ทดสอบ')
@section('content')
<div class="container">
    <div class="card mt-md-5">
        <div class="card-header">
            <h4>ตารางเวลา <span class="float-right"><button class="btn btn-sm btn-primary">ลงเวลา</button></span></h4>

        </div>
        <div class="card-body">

@if ($errors->any())
<div class="alert alert-danger">
    <h4>เกิดข้อผิดพลาดขณะบันทึกข้อมูลดังนี้ :</h4>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
               <form method="POST" action="/timing/store">
                    {{ csrf_field() }}
               <input type="hidden" value="{{ auth()->user()->id }}" name="user_id">
                    <div class="form-group">
                        <select name="timing_type" class="form-control">
                            @foreach ($timing_types as $item)
                                <option value="{{ $item->id }}"> {{ $item->name }} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                            <select name="in_out" class="form-control">
                                    <option value="0">เข้างาน</option>
                                    <option value="1">ออกงาน</option>
                            </select>
                        </div>
                    <div class="form-group">
                        <label for="inputComment">หมายเหตุ</label>
                        <input type="text" name="comment" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">บันทึก</button>
                </form>
        </div>
    </div>
</div>
@endsection
