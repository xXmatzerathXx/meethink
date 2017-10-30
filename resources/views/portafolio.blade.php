@extends('layouts.app')
@section('content')
@include ('nav-complete')
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

@endsection