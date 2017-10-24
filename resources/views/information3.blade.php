@extends('layouts.app')

@section('content')

<div class="scroll-container">
    
    {!! Form::open(['url' => 'complete']) !!}
    
    <input type="checkbox" name="skills[]" id="cbox1" value="animación"> <label for="cbox1">Animación</label>
    <input type="checkbox" name="skills[]" id="cbox2" value="diseñoi"> <label for="cbox2">Diseño de Interfaz</label>
    <input type="checkbox" name="skills[]" id="cbox3" value="diseñop"> <label for="cbox3">Diseño de Personaje</label>
    <input type="checkbox" name="skills[]" id="cbox4" value="edicion"> <label for="cbox4">Edicion</label>
    <input type="checkbox" name="skills[]" id="cbox5" value="fotografía"> <label for="cbox5">Fotografía</label>
    <input type="checkbox" name="skills[]" id="cbox6" value="ilustración"> <label for="cbox6">Ilustracíon</label>
    <input type="checkbox" name="skills[]" id="cbox7" value="investigación"> <label for="cbox7">Investigación</label>
    <input type="checkbox" name="skills[]" id="cbox8" value="modelado"> <label for="cbox8">Moldelado 3D</label>
    <input type="checkbox" name="skills[]" id="cbox9" value="producción"> <label for="cbox9">Producción</label>
    <input type="checkbox" name="skills[]" id="cbox10" value="programación"> <label for="cbox10">Programación</label>
    
    <button type="submit">Siguiente</button>
    {!! Form::close() !!}
    
</div>


@endsection

@section('scripts')
@endsection


