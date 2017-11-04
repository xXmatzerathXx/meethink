@extends('layouts.app')
@section('content')

@include ('nav-complete')
<div class="single-act">
  <span class="{{$hobbie}} single"><img src="{{asset('img/icons/hobbies/arte.svg')}}"></span>
  <h2 style="text-transform: uppercase;">{{$hobbie}}</h2>
  <h4>Descripción:</h4>
  @if ($hobbie == 'ejercicio')
  <p>Practico fútbol, soy capitán de un equipo en la universidad. Mi posición es defensiva, pero puedo jugar de medio.</p>
  @elseif($hobbie == 'escribir')
  <p>Me gusta expresarme con la escritura. Tengo una cuenta en Tumblr donde comparto frases y textos míos.</p>
  @elseif($hobbie == 'musica')
  <p>Me gusta pasar tiempo escuchando todo tipo de géneros musicales. Mis favoritos son: Electrónica, Rock Alternativo e Indie.</p>
  @elseif($hobbie == 'amigos')
  <p>La mayor parte de mi tiempo libre la paso con mis amigos en bares, fiestas y sitios de comida.</p>
  @elseif($hobbie == 'videojuegos')
  <p>Me gustan los que son de competencia, pero mi favorito es FIFA.</p>

  @elseif($hobbie == 'empatia')
  <p>Me consideró una persona que tiene muy buena relación con los demás. Brindo mi ayuda, apoyo y comprensión a la gente que me rodea. Pueden contar conmigo cuando me necesiten.</p>
  @elseif($hobbie == 'liderazgo')
  <p>Siento que soy un buen líder, ya que puedo organizar, planear y trabajar en equipo de una manera muy buena. Brindo confianza, orientación, atención y sé escuchar a mi equipo de trabajo.</p>
  @elseif($hobbie == 'responsabildad')
  <p>Considero que soy una persona muy responsable en todos los aspectos, siempre trato de ser puntual y entregar las cosas a tiempo.</p>
  @elseif($hobbie == 'socializacion')
  <p>Soy una persona que le gusta relacionarse con los demás, me gusta conocer gente y ser amable.</p>
  @elseif($hobbie == 'trabajo')
  <p>Considero que trabajar en equipo es algo que se me facilita ya que sé organizar, administrar tiempos y planificar el proyecto.</p>

  @elseif($hobbie == 'animacion')
  <p>Me desempeño en la realización de Motion Graphics y Mapping.</p>
  @elseif($hobbie == 'edicion')
  <p>Suelo ser ágil y dedicado en edición. Tengo buena práctica y experiencia al respecto.</p>
  @elseif($hobbie == 'investigacion')
  <p>Tengo muy buena redacción y habilidad en él área de búsqueda de información sobre algún tema en específico.</p>
  @elseif($hobbie == 'modelado')
  <p>Tengo buena práctica de modelado de objetos geométricos, casas, estructuras y edificios. Tengo conocimiento de rigging y animación.</p>
  @elseif($hobbie == 'produccion')
  <p>Se me facilita poder tratar con un equipo de trabajo y conseguir los recursos o materiales que se necesitan para realizar un proyecto.</p>

  @endif
  <a href="#">Editar</a>
</div>
@include('boton-proyecto')

@endsection