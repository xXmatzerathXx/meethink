@extends('layouts.app')

@section('content')
@include ('nav-solo')
<div class="scroll-container">
    
    {!! Form::open(['url' => 'complete', 'class' => 'form-info']) !!}
        <h3>HABILIDADES</h3>
        <p>Elige 5 que más te identifiquen</p>
        <span><input type="checkbox" name="skills[]" id="cbox1" value="animacion"><label for="cbox1"><img src="{{asset('img/icons/habilidades/animacion.svg')}}">Animación</label></span>
        <span><input type="checkbox" name="skills[]" id="cbox2" value="diseñoi"><label for="cbox2"><img src="{{asset('img/icons/habilidades/diseñodeinterfaz.svg')}}">Diseño de Interfaz</label></span>
        <span><input type="checkbox" name="skills[]" id="cbox3" value="diseñop"><label for="cbox3"><img src="{{asset('img/icons/habilidades/diseñodepersonaje.svg')}}">Diseño de Personaje</label></span>
        <span><input type="checkbox" name="skills[]" id="cbox4" value="edicion"><label for="cbox4"><img src="{{asset('img/icons/habilidades/edicion.svg')}}">Edicion</label></span>
        <span><input type="checkbox" name="skills[]" id="cbox5" value="fotografia"><label for="cbox5"><img src="{{asset('img/icons/habilidades/fotografia.svg')}}">Fotografía</label></span>
        <span><input type="checkbox" name="skills[]" id="cbox6" value="ilustracion"><label for="cbox6"><img src="{{asset('img/icons/habilidades/ilustracion.svg')}}">Ilustracíon</label></span>
        <span><input type="checkbox" name="skills[]" id="cbox7" value="investigacion"><label for="cbox7"><img src="{{asset('img/icons/habilidades/investigacion.svg')}}">Investigación</label></span>
        <span><input type="checkbox" name="skills[]" id="cbox8" value="modelado"><label for="cbox8"><img src="{{asset('img/icons/habilidades/modelado3d.svg')}}">Moldelado 3D</label></span>
        <span><input type="checkbox" name="skills[]" id="cbox9" value="produccion"><label for="cbox9"><img src="{{asset('img/icons/habilidades/produccion.svg')}}">Producción</label></span>
        <span><input type="checkbox" name="skills[]" id="cbox10" value="programacion"><label for="cbox10"><img src="{{asset('img/icons/habilidades/programacion.svg')}}">Programación</label></span>
    
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

