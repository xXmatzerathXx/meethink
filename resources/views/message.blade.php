@extends('layouts.app')
@section('content')
@include ('nav-complete')
<div class="bandeja-entrada">
@foreach ($mensajes as $mensaje)
<div class="mensaje">
<p onCLick="modal('{{$mensaje->id}}')"><span class="{{$mensaje->estado}}"></span> {{$mensaje->tipo}}<p>
</div>
@if ($mensaje->tipo == 'mensaje')
<div class="mensaje-modal mensaje-modal-{{$mensaje->id}}">
  <div class="el-mensaje">
    <p class="mensaje-t">{{$mensaje->mensaje}}</p>
    {!! Form::open(['url' => 'updatem', 'class' => 'form-info']) !!}
    <input value="{{$mensaje->id}}" name="id" type="hidden">
    <button type="submit" name="action" value="delete">Borrar</button><button name="action" value="close" type="submit">Cerrar</button>
  {!! Form::close() !!}
  </div>
</div>
@endif

@if ($mensaje->tipo == 'solicitud')
<div class="mensaje-modal mensaje-modal-{{$mensaje->id}}">
  <div class="el-mensaje">
    <p class="mensaje-t">{{$mensaje->mensaje}}</p>
    {!! Form::open(['url' => 'evaluacion', 'class' => 'form-info']) !!}
    <input value="{{$mensaje->proyectid}}" name="id" type="hidden">
    <button type="submit" name="action" value="delete">Evaluar</button>
    <button name="action" value="close" type="submit">Cerrar</button>
  {!! Form::close() !!}  </div>
</div>
@endif

@endforeach
@if(!$mensajes->count())
<div class="no-mensajes">
  <h3>No tienes mensajes</h3>
</div>
@endif
</div>



@include('boton-proyecto')
@endsection

@section ('scripts')
<script>
  function modal(mensaje){
    $('.mensaje-modal-'+mensaje).toggle();
  }
</script>
<script>
    $('.navigation-bar .message').addClass('active');
</script>
@endsection