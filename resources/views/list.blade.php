@extends('layouts.app')
@section('content')
@php ($me = Auth::user()->name)
@include ('nav-complete')

<ul class="list-users">
  @php($flag=0.1)
@foreach ($users as $user)
  @if ($user != $me )
    <li class="wow fadeInUp" data-wow-delay="{{$flag}}s" >
      <div class="left">
        <a class="usuario" href="/usuario/{{$user}}"><img src="{{asset('img/icons/nav/usuario.svg')}}"></a>
      </div>
      <div class="right">
        <a class="usuario" href="/usuario/{{$user}}"><p>{{$user}}</p></a>
        <a href="#" class="mensaje" onClick="nuevo('{{$user}}')"><img src="{{asset('img/icons/nav/sobrecerrado.svg')}}"></a>
        <a href="/portafolio/{{$user}}" class="portfolio">PORTAFOLIO</a>
      </div>
    </li>
  @endif
  @php($flag + 0.1)
@endforeach
</ul>

<div class="new-message">
{!! Form::open(['url' => 'enviarmensaje', 'class' => 'form-mensaje']) !!}
        <h3 class="destinatario-t">TEST</h3>

        <input type="hidden" class="input-dest" value="TEST" name="destinatario">
        <input type="hidden" class="input-rem" value="{{$me}}" name="remitente">
        <input type="hidden" class="input-mensaje" value="mensaje" name="tipo">
        <textarea name="mensaje"></textarea>

        <button type="button" onClick="nuevo('null')">Cancelar</button> <button type="submit" >Enviar</button>
    {!! Form::close() !!}
</div>
@include('boton-proyecto')
@endsection



@section ('scripts')
<script>
  function nuevo(destinatario){
    $('.new-message').toggle();
    $('.input-dest').val(destinatario);
    $('.destinatario-t').html(destinatario);
  };
</script>
<script>
    $('.navigation-bar .list').addClass('active');
</script>
@endsection