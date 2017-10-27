@extends('layouts.app')
@section('content')
<ul class="nav navbar-nav navbar-right navigation-bar">
    @guest   
        @else
        <a href="javascript:userView();"><li><img src="{{asset('img/icons/nav/mas.svg')}}"></li></a>
        <a href="javascript:listView();"><li><img src="{{asset('img/icons/nav/mas.svg')}}"></li></a>   
        <a href="javascript:proyectView();"><li><img src="{{asset('img/icons/nav/mas.svg')}}"></li></a>
        <a href="javascript:messageView();"><li><img src="{{asset('img/icons/nav/mas.svg')}}"></li></a> 
    @endguest
</ul>
<div class="content-app">
@include('user')
</div>
@include('boton-proyecto')
@endsection
