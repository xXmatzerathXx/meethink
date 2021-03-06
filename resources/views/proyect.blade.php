@php ($user = Auth::user()->name)
@extends('layouts.app')
@section('content')

@include ('nav-complete')

<div class="proyectos-list">
<h2>MIS EQUIPOS</h2>
<ul class="proyect-list m-bottom">
@foreach ($proyectos as $proyecto)
@php ($members = json_decode($proyecto->team, true))
@if (in_array($user, $members) && $proyecto->status == 'active')
<li class="wow fadeInLeft">
<div class="left">
  <img src="{{asset('img/icons/nav/usuario.svg')}}">
</div>
<div class="right">
  <h3><a href="proyectsingle/{{$proyecto->nombre}}">{{$proyecto->nombre}}</a><h3>
  <p>{{$proyecto->lider}}</p>
  @if ($proyecto->lider == Auth::user()->name)
  <div class="team-status">
  {!! Form::open(['url' => 'evaluacion', 'class' => 'form-info']) !!}
    <input type="hidden" name="id" value="{{$proyecto->id}}">
    <button type="submit">Terminar</button>
  {!! Form::close() !!}
  </div>
  @else
  <div class="team-status-active">
  <p>Activo</p>
  </div>
  @endif
</div>
<li>
@endif
@endforeach
</ul>


<ul class="proyect-list">
<h2>OTROS EQUIPOS</h2>
@foreach ($proyectos as $proyecto)
@php ($members = json_decode($proyecto->team, true))
@if (!in_array($user, $members))
<li class="wow fadeInLeft">
<div class="left">
  <img src="{{asset('img/icons/nav/usuario.svg')}}">
</div>
<div class="right">
  <h3><a href="proyectsingle/{{$proyecto->nombre}}">{{$proyecto->nombre}}</a><h3>
  <p>{{$proyecto->lider}}</p>
  
</div>
<li>
@endif
@endforeach
</ul>

</div>
@include('boton-proyecto')
@endsection
@section ('scripts')
<script>
    $('.navigation-bar .proyect').addClass('active');
</script>
@endsection