@extends('layouts.app')
@section('content')
@include ('nav-complete')

@if ($user != "Brandon")
<div class="portafolio">
  <h2>PORTAFOLIO</h2>
  <ul>
  @foreach ($proyectos as $proyecto)
  @php ($members = json_decode($proyecto->team, true))
  @if (in_array($user, $members) && $proyecto->status == 'done')
  <li>
  <h3>{{$proyecto->nombre}}</h3>
  <p>Descripción: {{$proyecto->descripcion}}</p>
  <p>Participantes:
  @foreach ($members as $member)
    <span> {{$member}},</span>
  @endforeach
  </p>
  </li>
  @endif
  @endforeach
  </ul>
</div>
@else


<div class="portafolio brandon">
  <h3>Videojuegos:</h3>
  <a href="/porta/dogs"><img src="{{asset('img/dogscats.png')}}"></a>
  <a href="/porta/dory"><img src="{{asset('img/dory.png')}}"></a>
  <a href="/porta/anima"><img src="{{asset('img/animatleticos.png')}}"></a>
  <h3>Más:</h3>
  <a href="/porta/picto"><img src="{{asset('img/pictour.png')}}"></a>
</div>


@endif

@endsection