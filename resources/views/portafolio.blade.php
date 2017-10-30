@php ($user = Auth::user()->name)
@extends('layouts.app')
@section('content')
@include ('nav-complete')
<div class="portafolio">
  <h2>PORTAFOLIO</h2>
  <ul>
  @foreach ($proyectos as $proyecto)
  @php ($members = json_decode($proyecto->team, true))
  @if (in_array($user, $members) && $proyecto->status == 'done')
  <li>{{$proyecto->nombre}}</li>
  @endif
  @endforeach
  </ul>
</div>

@endsection