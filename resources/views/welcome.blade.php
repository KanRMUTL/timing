@extends('layout.master')
@section('title', 'หน้าแรก')
@section('content')
<div class="container">
    <div class="card mt-md-5">
        <div class="card-header">

            <h4>ตารางเวลา </h4>
            @if(auth()->check())
                <span class="float-right">
                    <a class="btn btn-sm btn-primary" style="color:aliceblue;" href="">ลงเวลา</a>
                </span>
        </div>
        <div class="card-body">
                <p>
                    Hello : <b>{{ auth()->user()->name }}</b>
                </p>
                <p>
                    User type : <i> {{auth()->user()->user_type->name}} </i>
                </p>
                @endif
                <table class="table">
                        <tr>
                            <th>#</th>
                            <th>User</th>
                            <th>Start</th>
                            <th>End</th>
                            <th>Manage</th>
                        </tr>
                </table>
        </div>
    </div>
</div>
@endsection
