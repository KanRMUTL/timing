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
                <form method="POST" action="/login">
                    {{ csrf_field() }}
                    <div class="form-group">
                    <label for="inputUsername">Username: </label>
                    <input type="email" name="email" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="inputPassword">Password: </label>
                    <input type="password" name="password" class="form-control">
                </div>
                <button class="btn btn-primary">Save</button>
                </form>
            </div>
            </div>
            </div>
        </div>
    </div>
@endsection
