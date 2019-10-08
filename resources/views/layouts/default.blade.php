<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    @include('partials.content-head')
</head>
<body>
    <div class="wrapper">
        <header>
            @include('partials.header')
            @include('partials.menu')
        </header>
    </div>
    <main class="container">
        @yield('content')
    </main>
    <footer>
        @include('partials.footer')
    </footer>
    <script src="{{ asset('js/jquery.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/bootstrap.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery.mask.js') }}" type="text/javascript"></script>
    @stack('scripts')
</body>