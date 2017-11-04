@extends('layouts.app')
@section('content')
@include ('nav-complete')

<div class="proyect-single-b">
  @if ($proyect == "dogs")
    <h3>Dogs vs. Cats</h3>
    <h4>Descripción:</h4>
    <p>Videojuego que trata sobre la competencia entre adolecentes en preparatoria</p>
    <h4>Fecha de realización:</h4>
    <p>Agosto 2016</p>
    <h4>Equipo:</h4>
    <p>Fernanda Peralta y Daphne Esparza</p>
    <h4>Tags:</h4>
    <p>Competencia, Videojuego</p>
  @elseif($proyect == "dory")
    <h3>Dory Dory</h3>
    <h4>Descripción:</h4>
    <p>Videojuego que trata acerca de sumar puntos a travez de un escenario infinito.</p>
    <h4>Fecha de realización:</h4>
    <p>Verano 2016</p>
    <h4>Equipo:</h4>
    <p>Fernanda Peralta y Daphne Esparza</p>
    <h4>Tags:</h4>
    <p>Runner, Videojuego, Dory</p>
  @elseif($proyect == "anima")
    <h3>ANIMATLÉTICOS</h3>
    <h4>Descripción:</h4>
    <p>Videojuego que trata acerca de cuidado y prevención de la obecidad infantil en mexico a travéz del kinect</p>
    <h4>Fecha de realización:</h4>
    <p>Enero 2017</p>
    <h4>Equipo:</h4>
    <p>Fernanda Peralta y Daphne Esparza</p>
    <h4>Tags:</h4>
    <p>Videojuego, obecidad, nutrición, deportes, ejercicio, videojuego</p>
  @elseif($proyect == "picto")
    <h3>Pictour</h3>
    <h4>Descripción:</h4>
    <p>Aplicación que trata acerca del turismo en puebla</p>
    <h4>Fecha de realización:</h4>
    <p>Enero 2016</p>
    <h4>Equipo:</h4>
    <p>Karla Valencia y Daphne Esparza</p>
    <h4>Tags:</h4>
    <p>Aplicación, Turismo, Puebla, Album, Fotografía</p>
  @endif
    </div>
  @endsection