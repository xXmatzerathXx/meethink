@php 
$nombre = $proyect[0]["nombre"];
$descripcion = $proyect[0]["descripcion"];
$especificaciones = $proyect[0]["especificaciones"];
$tags = $proyect[0]["tags"];
$teams = json_decode($proyect[0]["team"], true);
@endphp

@extends('layouts.app')
@section('content')

@include ('nav-complete')

<div class="content-app">
<div class="single-proyect">
    <h2>{{$nombre}}</h2>
    <h3>Descripción:</h3>
    <p>{{$descripcion}}</p>
    <h3>Equipo:</h3>
    @foreach ($teams as $team)
      <span>{{$team}},</span>
    @endforeach
    <h3>Tags:</h3>
    <p>{{$tags}}</p>
  </div>
</div>
@endsection