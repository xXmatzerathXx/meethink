@extends('layouts.app')
@section('content')
@include ('nav-solo')
<ul class="nav navbar-nav navbar-right navigation-bar">
    @guest   
        @else
        <a href="list"><li><img src="{{asset('img/icons/nav/agenda.svg')}}"></li></a>   
        <a href="proyect"><li><img src="{{asset('img/icons/nav/equipos.svg')}}"></li></a>
        <a href="message"><li><img src="{{asset('img/icons/nav/bandejaentrada3.svg')}}"></li></a> 
        <a href="message"><li><img src="{{asset('img/icons/nav/buscar.svg')}}"></li></a> 
    @endguest
</ul>
<div class="content-app">
@include('user')
</div>
@include('boton-proyecto')
@endsection
