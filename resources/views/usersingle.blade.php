@php
  $hobbies = json_decode($dataArray[0]['hobbies'], true);
  $skills = json_decode($dataArray[0]['skills'], true);
  $virtudes = json_decode($dataArray[0]['virtues'], true);
@endphp
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
<div class="user">
<h3>{{$user}}</h3>
  <div class="user-hobbies">
    <h4>Hobbies</h4>
    @foreach ($hobbies as $hobbie)
    <div class="hobbie {{$hobbie}}"></div>
    @endforeach
  </div>
  <div class="virtudes">
    <h4>Virtudes</h4>
    @foreach ($virtudes as $virtud)
    <div class="virtud {{$virtud}}"></div>
    @endforeach
  </div>
  <div class="skills">
    <h4>Habilidades</h4>
    @foreach ($skills as $skill)
    <div class="skill {{$skill}}"></div>
    @endforeach
  </div>
</div>
</div>

@endsection