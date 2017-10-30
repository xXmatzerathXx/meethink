@extends('layouts.app')
@section('content')

@include ('nav-complete')
<div class="single-act">
  <img src="{{asset('img/icons/hobbies/arte.svg')}}">
  <h2>NOMBRE DE LA ACTIVIDAD</h2>
  <h4>Descripción:</h4>
  <p>Aqui ira tu descripción de la actividad seleccionada</p>
</div>
@include('boton-proyecto')

@endsection