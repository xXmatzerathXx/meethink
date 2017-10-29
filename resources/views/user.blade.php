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
    <div class="hobbie {{$hobbie}}"></div>
    @endforeach
  </div>
  <div class="virtudes">
    <h4>Virtudes</h4>
    @foreach ($virtudes as $virtud)
    <div class="virtud {{$virtud}}"></div>
    @endforeach
    <div class="content-p"><a href="/virtudessingle">VER</a></div>
  </div>
  <div class="skills">
    <h4>Habilidades</h4>
    @foreach ($skills as $skill)
    <div class="skill {{$skill}}"></div>
    @endforeach
    <div class="content-p"><a href="/habilidadessingle">VER</a></div>
  </div>
</div>