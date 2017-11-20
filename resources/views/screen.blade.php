@extends('layouts.app')
@section('content')
<div class="pantalla-cell">
  <a class="lanotificacion" href="/proyect"><img src="/img/celular.svg"></a>
  <img style="width:100%" src="/img/ss.png">
  <a class="icono-app" href="/proyect"></a>
</div>

@endsection

@section('scripts')
<script>
function skipPage(){
  $('.pantalla-cell').addClass('notificacion');
}
setTimeout(skipPage, 5000);
</script>
@endsection
