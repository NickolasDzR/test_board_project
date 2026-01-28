<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Доска объявлений')</title>
    @vite(['resources/js/app.js', 'css/app.css'])
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="csrf-param" content="_token" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand me-auto" href="{{ route("index") }}">Все объявления</a>
            @guest
                <a class="navbar-brand me-auto" href="{{ route("register") }}">Регистрация</a>
                <a class="navbar-brand me-auto" href="{{ route("login") }}">Вход</a>
            @endguest
            @auth
                <a class="navbar-brand me-auto" href="{{ route("home") }}">Мои объявления</a>
                <form action="{{ route('logout') }}" method="POST" class="form-inline">
                    @csrf
                    <input type="submit" class="btn btn-danger" value="Выход">
                </form>
            @endauth
        </div>
    </nav>
</div>

@yield('content')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
