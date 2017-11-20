@extends('layouts.app')

@section('content')


{!! Form::open(['url' => 'teamselect', 'class' => 'form-info']) !!}
      <input type="hidden" name="users" id="cbox1" value="{{$users}}">
      <input type="hidden" name="nombreP" id="cbox1" value="{{$nombreP}}">
      <input type="hidden" name="miembros" id="cbox1" value="{{$miembros}}">
      <button class="redirect" style="display:none;" type="submit"></button>
    {!! Form::close() !!}


<div class="global-container-r start-logo">
<img src="{{asset('img/loading_equipo2.gif')}}" class="center" style="width: 200px; padding: 0;">
</div>



@endsection

@section('scripts')
<script>
function skipPage(){
  $( '.redirect' ).click ();
}
setTimeout(skipPage, 5000);
</script>
@endsection
