@extends('layouts.app')

@section('content')

@include ('nav-solo')


<div class="scroll-container">
  
  {!! Form::open(['url' => 'information', 'class' => 'form-info foto', 'enctype'=> 'multipart/form-data']) !!}
      <input type="file" required name="foto" id="nameselect"><label for="nameselect"></label>
      <p>Agrega una foto tuya</p>
  
    <button type="submit">Siguiente</button>
  {!! Form::close() !!}
  
</div>
  
@endsection

@section('scripts')

@endsection


