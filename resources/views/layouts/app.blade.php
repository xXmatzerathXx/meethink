<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Meethink') }}</title>

    <!--Scripts-->

    <!-- Styles -->
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

           <!-- <div class="navigation-bar">
                <ul>
                    <a href="javascript:userView();"><li>1</li></a>
                    <a href="javascript:proyectView();"><li>2</li></a>
                    <a href="javascript:listView();"><li>3</li></a>   
                    <a href="javascript:messageView();"><li>4</li></a>                
                </ul>
            </div> -->
        @if (Request::is('home') || (Request::is('/') && $user = Auth::user()))
            <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="{{ url('/logout') }}">
                        {{ config('app.name', 'Meethink') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>
                    <ul class="nav navbar-nav navbar-right navigation-bar">
                        @guest   
                            @else
                            <a href="javascript:userView();"><li>PERFIL</li></a>
                            <a href="javascript:listView();"><li>GENTE</li></a>   
                            <a href="javascript:proyectView();"><li>EQUIPOS</li></a>
                            <a href="javascript:messageView();"><li>MENSAJES</li></a> 
                            <a href="javascript:messageView();"><li>CREAR</li></a> 
                        @endguest
                    </ul>
                    
                </div>
            </div>
        </nav>
    @endif
    <div id="app">
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/wow.js') }}"></script>
    <script src="{{ asset('js/ajax.js') }}"></script>
    <script>
        new WOW().init();
    </script>
    @yield('scripts')
</body>
</html>
