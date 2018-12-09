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
                            <th>คำบ่น(ก่อนเข้างาน)</th>
                            <th>คำบ่น(ก่อนออกงาน)</th>
                        </tr>
                        @foreach ($out as $item_out)


                        @foreach ($in as $item_in)
                            <tr>
                                <td></td>
                                <td>{{ $item_in->user->name }}</td>
                                <td>{{ $item_in->created_at }}</td>
                                <td>{{ $item_in->created_at }}</td>
                                <td>{{ $item_out->updated_at }}</td>
                                <td>{{ $item_in->about }}</td>
                                <td>{{ $item_out->about }}</td>
                            </tr>
                        @endforeach
                        @endforeach
                </table>
        </div>
    </div>
</div>
@endsection
