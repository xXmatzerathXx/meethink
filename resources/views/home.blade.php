@extends('layouts.app')
@section('content')
@include ('nav-solo')
<ul class="nav navbar-nav navbar-right navigation-bar">
    @guest   
        @else
        <a href="list" class="list"><li><img src="{{asset('img/icons/nav/agenda.svg')}}"></li></a>   
        <a href="proyect" class="proyect"><li><img src="{{asset('img/icons/nav/equipos.svg')}}"></li></a>
        <a href="message" class="message"><li><img src="{{asset('img/icons/nav/bandejaentrada3.svg')}}"></li></a> 
        <a href="message" class="search"><li><img src="{{asset('img/icons/nav/buscar.svg')}}"></li></a> 
    @endguest
</ul>
<div class="content-app">
@include('user')
</div>
@include('boton-proyecto')
@endsection

@section ('scripts')

@endsection
