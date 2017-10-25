@extends('layouts.app')

@section('content')

<div class="scroll-container">
    
    {!! Form::open(['url' => 'complete', 'class' => 'form-info']) !!}
        <h3>HABILIDADES</h3>
        <p>Elige 5 que más te identifiquen</p>
        <input type="checkbox" name="skills[]" id="cbox1" value="animacion"><label for="cbox1"><img src="{{asset('img/icons/habilidades/animacion.svg')}}">Animación</label>
        <input type="checkbox" name="skills[]" id="cbox2" value="diseñoi"><label for="cbox2"><img src="{{asset('img/icons/habilidades/diseñodeinterfaz.svg')}}">Diseño de Interfaz</label>
        <input type="checkbox" name="skills[]" id="cbox3" value="diseñop"><label for="cbox3"><img src="{{asset('img/icons/habilidades/diseñodepersonaje.svg')}}">Diseño de Personaje</label>
        <input type="checkbox" name="skills[]" id="cbox4" value="edicion"><label for="cbox4"><img src="{{asset('img/icons/habilidades/edicion.svg')}}">Edicion</label>
        <input type="checkbox" name="skills[]" id="cbox5" value="fotografia"><label for="cbox5"><img src="{{asset('img/icons/habilidades/fotografia.svg')}}">Fotografía</label>
        <input type="checkbox" name="skills[]" id="cbox6" value="ilustracion"><label for="cbox6"><img src="{{asset('img/icons/habilidades/ilustracion.svg')}}">Ilustracíon</label>
        <input type="checkbox" name="skills[]" id="cbox7" value="investigacion"><label for="cbox7"><img src="{{asset('img/icons/habilidades/investigacion.svg')}}">Investigación</label>
        <input type="checkbox" name="skills[]" id="cbox8" value="modelado"><label for="cbox8"><img src="{{asset('img/icons/habilidades/modelado3d.svg')}}">Moldelado 3D</label>
        <input type="checkbox" name="skills[]" id="cbox9" value="produccion"><label for="cbox9"><img src="{{asset('img/icons/habilidades/produccion.svg')}}">Producción</label>
        <input type="checkbox" name="skills[]" id="cbox10" value="programacion"><label for="cbox10"><img src="{{asset('img/icons/habilidades/programacion.svg')}}">Programación</label>
    
        <button type="submit">Siguiente</button>
    {!! Form::close() !!}
    
</div>


@endsection

@section('scripts')
@endsection


