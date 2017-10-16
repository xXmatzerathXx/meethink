@extends('layouts.app')

@section('content')

  <div id="myCarousel" class="carousel slidep" data-ride="carousel" data-interval="false">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="http://placekitten.com/g/300/400" alt="Los Angeles" style="width:100%;">
        <div class="carousel-caption">
          <p>LA is always so much fun!</p>
        </div>
      </div>

      <div class="item">
        <img src="http://placekitten.com/g/300/400" alt="Los Angeles" style="width:100%;">
        <div class="carousel-caption">
          <p>LA1 is always so much fun!</p>
        </div>
      </div>
    
      <div class="item">
        <img src="http://placekitten.com/g/300/400" alt="Los Angeles" style="width:100%;">
        <div class="carousel-caption">
          <p>LA2 is always so much fun!</p>
        </div>
      </div>

      <div class="item">
        <img src="http://placekitten.com/g/300/400" alt="Los Angeles" style="width:100%;">
        <div class="carousel-caption">
          <a href="{{route("home")}}">Empezar</a>
          <p>LA3 is always so much fun!</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->

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
@endsection
