@extends('layout.master')
@section('title', 'หน้าแรก')
@section('content')
<div class="container">
    <div class="card mt-md-5">
        <div class="card-header">

            <h4>ตารางเวลา </h4>
            @if(auth()->check())
                <span class="float-right">
                    <a class="btn btn-sm btn-primary" style="color:aliceblue;" href="/timing/create">ลงเวลา</a>
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
                        </tr>



                        @foreach ($timings as $timing)
                            <tr>
                                <td></td>
                                <td>{{ $timing->user->name }}</td>
                                <td>{{ $timing->created_at }}</td>
                                @if($timing->created_at == $timing->updated_at)
                                    <td>
                                            <span class="badge badge-primary" style="font-size: 110%">ยังไม่ออกจากงาน</span>
                                    </td>
                                @else
                                <td>{{ $timing->updated_at }}</td>
                                @endif
                                <td>{{ $timing->timing_type->name }}</td>
                                <td>{{ $timing->about }}</td>
                            </tr>
                        @endforeach
                </table>
        </div>
    </div>
</div>
@endsection
