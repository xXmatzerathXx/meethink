@extends('layouts.app')
@section('content')
  <div class="scroll-container">
    {!! Form::open(['url' => 'team', 'class' => 'form-proyect']) !!}
        <h3>Nuevo Proyecto</h3>

        <input type="text" required name="proyectName" placeholder="Nombre">
        <input type="text" required name="proyectDescription" placeholder="Descripción">
        <input type="text" required name="proyectSpects" placeholder="Especificaciones">
        <input type="number" required name="proyectMembers" placeholder="Numero de integrantes">
        <input type="text" required name="proyectTags" placeholder="Tags">
      
        <button type="submit">Listo</button>
      {!! Form::close() !!}
  </div>
@endsection