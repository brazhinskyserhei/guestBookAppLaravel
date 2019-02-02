<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Страница комментариев</title>

    <link href="{{ asset('assets/bootstrap-4.2.1-dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">

</head>
<body class="bg-light">
<nav class="navbar navbar-expand-md  navbar-dark bg-dark">
    <a class="navbar-brand" href="{{ url('/') }}">Гостевая книга</a>
    <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                {{--<a class="nav-link" href="#">Профиль</a>--}}
            </li>
        </ul>
        <nav class="my-2 my-md-0 mr-md-3">
            @guest
                <a class="btn btn-outline-light" href="{{ route('login') }}">{{ __('Войти') }}</a>
                @if (Route::has('register'))
                    <a class="btn btn-outline-info" href="{{ route('register') }}">{{ __('Регистрация') }}</a>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a class="btn btn-outline-info" href="{{ route('profile') }}">{{ Auth::user()->name }}</a>
                    <a class="btn btn-outline-info" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">{{ __('Выйти') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                </li>
            @endguest
        </nav>
    </div>
</nav>
<main role="main" class="container">
    @yield('content')
</main>
<script src="{{asset('assets/jquery/jquery-3.3.1.slim.min.js')}}"></script>
<script src="{{asset('assets/bootstrap-4.2.1-dist/js/bootstrap.min.js')}}"></script>
</body>
</html>