@extends('layouts.app')

@section('content')

@include ('nav-solo')


<div class="scroll-container">
  
  {!! Form::open(['url' => 'information2', 'class' => 'form-info']) !!}
    <h3>HOBBIES</h3>
    <p>Elige 5 que más te identifiquen</p>
    <span><input type="checkbox" name="hobbies[]" id="cbox1" value="arte"> <label for="cbox1"><img src="{{asset('img/icons/hobbies/arte.svg')}}">Arte</label>
    <span><input type="checkbox" name="hobbies[]" id="cbox2" value="cine"> <label for="cbox2"><img src="{{asset('img/icons/hobbies/cine.svg')}}">Cine</label>
    <span><input type="checkbox" name="hobbies[]" id="cbox3" value="dibujar"> <label for="cbox3"><img src="{{asset('img/icons/hobbies/dibujar.svg')}}">Dibujar</label>
    <span><input type="checkbox" name="hobbies[]" id="cbox4" value="ejercicio"> <label for="cbox4"><img src="{{asset('img/icons/hobbies/ejercicio.svg')}}">Ejercicio/Deportes</label>
    <span><input type="checkbox" name="hobbies[]" id="cbox5" value="escribir"> <label for="cbox5"><img src="{{asset('img/icons/hobbies/escribir.svg')}}">Escribir</label>
    <span><input type="checkbox" name="hobbies[]" id="cbox6" value="leer"> <label for="cbox6"><img src="{{asset('img/icons/hobbies/leer.svg')}}">Leer</label>
    <span><input type="checkbox" name="hobbies[]" id="cbox7" value="musica"> <label for="cbox7"><img src="{{asset('img/icons/hobbies/musica.svg')}}">Música</label>
    <span><input type="checkbox" name="hobbies[]" id="cbox8" value="amigos"> <label for="cbox8"><img src="{{asset('img/icons/hobbies/salirconamigos.svg')}}">Salir con amigos</label>
    <span><input type="checkbox" name="hobbies[]" id="cbox9" value="teatro"> <label for="cbox9"><img src="{{asset('img/icons/hobbies/teatro.svg')}}">Teatro</label>
    <span><input type="checkbox" name="hobbies[]" id="cbox10" value="videojuegos"> <label for="cbox10"><img src="{{asset('img/icons/hobbies/videojuegos.svg')}}">Videojuegos</label>
  
    <button type="submit">Siguiente</button>
  {!! Form::close() !!}
  
</div>
  
@endsection

@section('scripts')
<script>
  if ($("input:checkbox:checked").length < 5){
    $('button').prop('disabled', true);
 }
$("input:checkbox").click(function(){
  if ($("input:checkbox:checked").length > 5){
    return false;
 }
 if ($("input:checkbox:checked").length > 4){
    $('button').prop('disabled', false);
 }
});
</script>
@endsection


