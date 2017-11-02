@extends('layouts.app')
@section('content')
@include ('nav-solo')
<ul class="nav navbar-nav navbar-right navigation-bar">
    @guest   
        @else
        <a href="list" class="list wow fadeInDown" data-wow-delay="0.0s"><li><img src="{{asset('img/icons/nav/agenda.svg')}}"></li></a>   
        <a href="proyect" class="proyect wow fadeInDown" data-wow-delay="0.1s"><li><img src="{{asset('img/icons/nav/equipos.svg')}}"></li></a>
        <a href="message" class="message wow fadeInDown" data-wow-delay="0.2s"><li><img src="{{asset('img/icons/nav/bandejaentrada3.svg')}}"></li></a> 
        <a href="message" class="search wow fadeInDown" data-wow-delay="0.3s"><li><img src="{{asset('img/icons/nav/buscar.svg')}}"></li></a> 
    @endguest
</ul>
<div class="content-app">
@include('user')
</div>
@include('boton-proyecto')
@endsection

@section ('scripts')

@endsection
