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
    <div id="app">
        @yield('content')
    </div>


    <a href="nuevo-proyecto"></a>
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
