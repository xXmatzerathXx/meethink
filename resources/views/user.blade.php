@php
  $hobbies = json_decode($dataArray[0]['hobbies'], true);
  $skills = json_decode($dataArray[0]['skills'], true);
  $virtudes = json_decode($dataArray[0]['virtues'], true);
@endphp
<div class="user">
<img class="user-big" src="{{asset('img/icons/nav/usuario.svg')}}">
<h3>{{Auth::user()->name}}</h3>
<a class="link-portafolio" href="/portafolio">PORTAFOLIO</a>
  <div class="user-hobbies">
    <h4>Hobbies</h4>
    @foreach ($hobbies as $hobbie)
    <a href="/actividad"><div class="hobbie {{$hobbie}}"></div></a>
    @endforeach
  </div>
  <div class="virtudes">
    <h4>Virtudes</h4>
    @foreach ($virtudes as $virtud)
    <a href="/actividad"><div class="virtud {{$virtud}}"></div></a>
    @endforeach
    <div class="content-p"><a class="link" href="/virtudessingle">VER</a></div>
  </div>
  <div class="skills">
    <h4>Habilidades</h4>
    @foreach ($skills as $skill)
    <a href="/actividad"><div class="skill {{$skill}}"></div></a>
    @endforeach
    <div class="content-p"><a class="link" href="/habilidadessingle">VER</a></div>
  </div>
</div>