<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
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
    <script src="{{ asset('js/jquery.mask.js') }}" type="text/javascript"></script>
    @stack('scripts')
</body>