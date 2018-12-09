<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    @yield('style')
</head>
<body>
    <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#">[ระบบลงเวลาฝึกงาน]</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                          <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                        </li>

                        @if(!auth()->check())
                        <li class="nav-item">
                            <a class="nav-link active hover" href="/login">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active hover" href="/register">Register</a>
                        </li>
                        @else
                        <li class="nav-item">
                            <a class="nav-link active hover" href="/timing/create">ลงเวลา</a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link active hover" href="/logout">Logout</a>
                            </li>
                        @endif
                    </div>
                  </nav>
    </div>
    @yield('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
@yield('script')
</body>
</html>
