<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token Это добавит _token в ваше представление, чтобы вы могли использовать его для запросов post and suchlike-->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title></title>

        <!-- Bootstrap -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Vue.js -->
        <link href="{{ asset('js/vue.js') }}" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- WOW JS -->
<script src="js/wow.min.js"></script>
<script src="js/script.js"></script>
<script>
    new WOW().init();
//
</script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
     <link rel="stylesheet" href="/css/test.css">
     <link rel="stylesheet" href="/css/style.css">
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.css">




</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">

                    <!-- подключение шапки -->
                @include('include.header')
                
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">

        @if(Request::is('/'))
    @include('include.hero')
    @endif

    <!-- подключение section -->


    @yield('tests')
    @yield('section')
    @yield('content')
    @yield('form-articles')


        </main>
    </div>
</body>
</html>
