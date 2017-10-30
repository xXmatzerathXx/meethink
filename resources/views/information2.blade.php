@extends('layouts.app')

@section('content')
@include ('nav-solo')
<div class="scroll-container">
    
    {!! Form::open(['url' => 'information3', 'class' => 'form-info']) !!}
        <h3>VIRTUDES</h3>
        <p>Elige 5 que más te identifiquen</p>
        <span><input type="checkbox" name="virtudes[]" id="cbox1" value="compromiso"><label for="cbox1"><img src="{{asset('img/icons/virtudes/compromiso.svg')}}">Compromiso</label></span>
        <span><input type="checkbox" name="virtudes[]" id="cbox2" value="empatia"><label for="cbox2"><img src="{{asset('img/icons/virtudes/empatia.svg')}}">Empatia</label></span>
        <span><input type="checkbox" name="virtudes[]" id="cbox3" value="flexibilidad"><label for="cbox3"><img src="{{asset('img/icons/virtudes/flexibilidad.svg')}}">Flexibilidad</label></span>
        <span><input type="checkbox" name="virtudes[]" id="cbox4" value="honradez"><label for="cbox4"><img src="{{asset('img/icons/virtudes/honradez.svg')}}">Honradez</label></span>
        <span><input type="checkbox" name="virtudes[]" id="cbox5" value="liderazgo"><label for="cbox5"><img src="{{asset('img/icons/virtudes/liderazgo.svg')}}">Liderazgo</label></span>
        <span><input type="checkbox" name="virtudes[]" id="cbox6" value="perseverancia"><label for="cbox6"><img src="{{asset('img/icons/virtudes/perseverancia.svg')}}">Perseverancia</label></span>
        <span><input type="checkbox" name="virtudes[]" id="cbox7" value="puntualidad"><label for="cbox7"><img src="{{asset('img/icons/virtudes/puntualidad.svg')}}">Puntualidad</label></span>
        <span><input type="checkbox" name="virtudes[]" id="cbox8" value="responsabilidad"><label for="cbox8"><img src="{{asset('img/icons/virtudes/responsabilidad.svg')}}">Responsabilidad</label></span>
        <span><input type="checkbox" name="virtudes[]" id="cbox9" value="socializacion"><label for="cbox9"><img src="{{asset('img/icons/virtudes/socializacion.svg')}}">Socializacion</label></span>
        <span><input type="checkbox" name="virtudes[]" id="cbox10" value="trabajo"><label for="cbox10"><img src="{{asset('img/icons/virtudes/trabajoenequipo.svg')}}">Trabajo en Equipo</label></span>
    
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


