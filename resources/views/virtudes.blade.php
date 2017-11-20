@extends('layouts.app')
@section('content')
@php 
$me = Auth::user()->name;
@endphp
@include ('nav-complete')

<div class="virskill">
<h2>VIRTUDES</h2>

<img class="graph" @if ($me=='Brandon') src="{{asset('img/gifbrandon.gif')}}" @else src="{{asset('img/gifperfil.gif')}}" @endif>
</div>
@endsection