@php 
$flag = 0;
$me = Auth::user()->name;
@endphp
@extends('layouts.app')
@section ('head')
<style>
  @while ($flag < $miembros + 1)
    .member:nth-of-type({{$flag}}){
      display: flex;
      align-items: center;
      justify-content: space-between;
    }
  @php($flag = $flag + 1)
  @endwhile
</style>
@endsection
@section('content')
@include ('nav-complete')
{!! Form::open(['url' => "proyectsingle/$nombreP", 'class' => 'proyectosingle']) !!}
    <input name="member[]" type="hidden" value="{{$me}}">
    <h3 class="center">TU EQUIPO IDEAL</h3>
    @foreach ($users as $user)
      @if ($user != $me)
      <div class="member">
        <img src="{{asset('img/icons/nav/usuario.svg')}}">
        <p>{{$user}}</p>
        <div class="f-right">
          <input class="accept" name="member[]" type="checkbox" value="{{$user}}"><span class="delete"></span>
        </div>
       </div>
      @endif
    @endforeach
    <button type="submit">Siguiente</button>
  {!! Form::close() !!}


  @section ('scripts')

    <script>
$( ".member" ).each(function(index) {
  $(this).find('.delete').on("click", function(){
    $(this).parent().parent().remove();
  });
});
    </script>

  @endsection


  @endsection