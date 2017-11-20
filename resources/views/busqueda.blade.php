@php ($user = Auth::user()->name)
@extends('layouts.app')
@section('content')

@include ('nav-complete')

<div class="proyectos-list">
<h2>PROYECTOS</h2>
  <ul class="proyect-list m-bottom">

    <li class="wow fadeInLeft">
      <div class="left">
        <img src="{{asset('img/icons/nav/cola.png')}}">
      </div>
      <div class="right">
        <h3><a href="proyectsingle">COCA-COLA</a><h3>
        <p>Motion Graphics</p>
      </div>
    <li>

    <li class="wow fadeInLeft">
      <div class="left">
        <img src="{{asset('img/icons/nav/usuario.svg')}}">
      </div>
      <div class="right">
        <h3><a href="proyectsingle">BIMBO</a><h3>
        <p>Rediseño de personaje</p>
      </div>
    <li>

    <li class="wow fadeInLeft">
      <div class="left">
        <img src="{{asset('img/icons/nav/ibe.jpg')}}">
      </div>
      <div class="right">
        <h3><a href="proyectsingle">Ibero Puebla</a><h3>
        <p>Documental Social</p>
      </div>
    <li>


  </ul>


  <h2>CONCURSOS</h2>
  <ul class="proyect-list m-bottom">
    <li class="wow fadeInLeft">
      <div class="left">
        <img src="{{asset('img/icons/nav/usuario.svg')}}">
      </div>
      <div class="right">
        <h3><a href="proyectsingle">AFRICAM SAFARI</a><h3>
        <p>Cineminuto</p>
      </div>
    <li>

    <li class="wow fadeInLeft">
      <div class="left">
        <img src="{{asset('img/icons/nav/usuario.svg')}}">
      </div>
      <div class="right">
        <h3><a href="proyectsingle">AUDI</a><h3>
        <p>Motion Graphics</p>
      </div>
    <li>

  </ul>



</div>
@include('boton-proyecto')
@endsection
@section ('scripts')
<script>
    $('.navigation-bar .buscar').addClass('active');
</script>
@endsection