@extends('layout.master')

@section('content')
    <div class="container">
        <div class="row justify-content-md-center mt-md-5">
            <div class="col-md-5 ">
                <div class="card">
                    <div class="card-body">

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
                <form method="POST" action="/register">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="inputName">ชื่อ: </label>
                        <input type="text" name="name" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">อีเมล์: </label>
                        <input type="email" name="email" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputPassword">รหัสผ่าน: </label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <button class="btn btn-success">Save</button>
                </form>
            </div>
            </div>
            </div>
        </div>
    </div>
@endsection
