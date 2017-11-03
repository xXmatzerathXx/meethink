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
<span class="@if ($user=='Brandon') brandon @endif"><img class="user-big" src="{{asset('img/icons/nav/usuario.png')}}"></span>
<h3>{{$user}}</h3>
<a class="link-portafolio wow fadeInLeft" href="/portafolio/{{$user}}">PORTAFOLIO</a>
  <div class="user-hobbies">
    <h4 class="wow fadeInLeft">Hobbies</h4>
    @php
    $flag = 0.1;
    @endphp
    @foreach ($hobbies as $hobbie)
    <a href="/hobbi" class="wow fadeInUp" data-wow-delay="{{$flag}}s"><div class="hobbie {{$hobbie}}"></div></a>
    @php($flag = $flag + 0.1)
    @endforeach
  </div>
  <div class="virtudes">
    <h4 class="wow fadeInLeft">Virtudes</h4>
    @foreach ($virtudes as $virtud)
    <a href="/hobbi" class="wow fadeInUp" data-wow-delay="{{$flag}}s"><div class="virtud {{$virtud}}"></div></a>
    @php($flag = $flag + 0.1)
    @endforeach
    <div class="content-p wow fadeInUp"><a class="link" href="/habilidadessingle">VER</a></div>
  </div>
  <div class="skills">
    <h4 class="wow fadeInLeft">Habilidades</h4>
    @foreach ($skills as $skill)
    <a href="/hobbi" class="wow fadeInUp" data-wow-delay="{{$flag}}s"><div class="skill {{$skill}}"></div></a>
    @php($flag = $flag + 0.1)
    @endforeach
    <div class="content-p wow fadeInUp"><a class="link" href="/habilidadessingle">VER</a></div>
  </div>
</div>
</div>

@endsection