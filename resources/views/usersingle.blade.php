@php
  $hobbies = json_decode($dataArray[0]['hobbies'], true);
  $skills = json_decode($dataArray[0]['skills'], true);
  $virtudes = json_decode($dataArray[0]['virtues'], true);
@endphp
@extends('layouts.app')
@section('content')

@include ('nav-complete')

<div class="content-app">
<div class="user">
<img class="user-big" src="{{asset('img/icons/nav/usuario.svg')}}">
<h3>{{$user}}</h3>
  <div class="user-hobbies">
    <h4>Hobbies</h4>
    @foreach ($hobbies as $hobbie)
    <a href="/hobbi"><div class="hobbie {{$hobbie}}"></div></a>
    @endforeach
  </div>
  <div class="virtudes">
    <h4>Virtudes</h4>
    @foreach ($virtudes as $virtud)
    <a href="/hobbi"><div class="virtud {{$virtud}}"></div></a>
    @endforeach
    <div class="content-p"><a class="link" href="/habilidadessingle">VER</a></div>
  </div>
  <div class="skills">
    <h4>Habilidades</h4>
    @foreach ($skills as $skill)
    <a href="/hobbi"><div class="skill {{$skill}}"></div></a>
    @endforeach
    <div class="content-p"><a class="link" href="/habilidadessingle">VER</a></div>
  </div>
</div>
</div>

@endsection