@extends('layouts.app')
@section('content')
@include ('nav-complete')
<div class="scroll-container">
  <div class="nuevo-proyecto">
    {!! Form::open(['url' => 'team', 'class' => 'form-proyect']) !!}
        <h3>Nuevo Proyecto</h3>

        <input type="text" required name="proyectName" placeholder="Nombre">
        <input type="text" required name="proyectDescription" placeholder="Descripción">
        <input type="text" required name="proyectSpects" placeholder="Especificaciones">
        <input type="number" max="7" min="2" required name="proyectMembers" placeholder="Numero de integrantes">
        <input type="text" required name="proyectTags" placeholder="Tags">
      
        <a href="/home" class="link">Cancelar</a><button type="submit">Listo</button>
      {!! Form::close() !!}
  </div>
</div>
@endsection