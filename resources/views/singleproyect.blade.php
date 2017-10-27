@php 
$nombre = $proyect[0]["nombre"];
$descripcion = $proyect[0]["descripcion"];
$especificaciones = $proyect[0]["especificaciones"];
$tags = $proyect[0]["tags"];
$teams = json_decode($proyect[0]["team"], true);
@endphp

<p>{{$nombre}}</p>
<p>{{$descripcion}}</p>
<p>
@foreach ($teams as $team)
<span>{{$team}},</span>
<span>@endforeach</span>
<p>
<p>{{$tags}}</p>