
@extends('layouts.app')
@php
  $user = Auth::user()->name;
  $members = json_decode($proyecto[0]["team"], true);
@endphp
@section('content')
<div class="evaluacion">
  <h2>EVALUACIÓN</h2>
  <p>{{$proyecto[0]["nombre"]}}<p>
  @foreach ($members as $member)
  <div class="user"><img src="{{asset('img/icons/nav/usuario.svg')}}"><p>{{$member}}</p></div>
  <ul class="metricas">
    <li class="each">
      <p>Edición</p>
      
      <div class="controles"><span class="mas"><img src="{{asset('img/icons/nav/mas.svg')}}"></span><input type="number" value="0" max="1" min="0" class="total"><span class="menos"><img src="{{asset('img/icons/nav/menos.svg')}}"></span></div>
    </li>
  </ul>
  @endforeach
</div>
@endsection

@section ('scripts')
<script>
$( ".each" ).each(function(index) {
  $(this).find('.mas').on("click", function(){
    total = $(this).next('.total').val();
    if(total == 0){
      total++;
    }
    $(this).next('.total').val(total);
  });
  $(this).find('.menos').on("click", function(){
    total = $(this).prev('.total').val();
    if(total == 1){
      total--;
    }
    $(this).prev('.total').val(total);
  });
});
</script>
@endsection