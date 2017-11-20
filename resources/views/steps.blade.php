@extends('layouts.app')

@section('content')

@include ('nav-solo')

<div class="global-container-r">
  
  <div id="myCarousel" class="carousel slide" data-ride="carousel"  data-interval="false">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
      <img src="{{asset('img/images/steps/1.png')}}" alt="Flower">
      <div class="carousel-caption">
          <h3>CONOCE PERSONAS</h3>
          <p>A través de esta plataforma descubre los hobbies, las virtudes y las habilidades de tus compañeros</p>
        </div>
      </div>

      <div class="item">
      <img src="{{asset('img/images/steps/2.png')}}" alt="Flower">
      <div class="carousel-caption">
          <h3>GENERA GRUPOS DE TRABAJO</h3>
          <p>Crea, únete y participa en diversos proyectos con el fin de aplicar tus conocimientos y habilidades</p>
        </div>
      </div>
    
      <div class="item">
      <img src="{{asset('img/images/steps/3.png')}}" alt="Flower">
      <div class="carousel-caption">
          <h3>EVALÚA EL DESEMPEÑO DE TU EQUIPO</h3>
          <p>Al finalizar cada proyecto, califica el desempeño de tus compañeros con el objetivo de que puedan detectar sus áreas de oportunidad</p>
        </div>
      </div>

      <div class="item">
      <img src="{{asset('img/images/steps/4.png')}}" alt="Flower">
      <div class="carousel-caption">
          <h3>OBTÉN RETROALIMENTACIÓN</h3>
          <p>Conoce qué opinan tus compañeros de ti mediante gráficas y estadísticas que te servirán para identificar en qué estás fallando y qué puedes mejorar</p>
        </div>
      </div>

      <div class="item">
        <div class="carousel-caption">
            <h3 class="titile-2">COMENCEMOS</h3>
            <p class="paragraph-2">Regístrate y deja que te conozcamos primero</p>
            <img src="{{asset('img/comienzo.gif')}}" class="center">     
            <a class="continuar-b" href="{{route("login")}}">Continuar</a>       
          </div>
        </div>

      

  
    </div>

  </div>
</div>
  
@endsection

@section('scripts')
<script src="{{ asset('js/jquery.touchSwipe.min.js') }}"></script>
<script>
  $(".carousel").swipe({
    
      swipe: function(event, direction, distance, duration, fingerCount, fingerData) {
    
        if (direction == 'left') $(this).carousel('next');
        if (direction == 'right') $(this).carousel('prev');
    
      },
      allowPageScroll:"vertical"
    
    });
</script>
<script>
  $('.carousel').carousel({
    wrap: false
  });
</script>
@endsection


