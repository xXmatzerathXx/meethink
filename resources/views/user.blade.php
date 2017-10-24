@php
  $hobbies = json_decode($dataArray[0]['hobbies'], true);
  $skills = json_decode($dataArray[0]['skills'], true);
  $virtudes = json_decode($dataArray[0]['virtues'], true);
@endphp
<div class="user">
<h3>{{Auth::user()->name}}</h3>
  <div class="hobbies">
    <h4>Hobbies</h4>
    @foreach ($hobbies as $hobbie)
    {{ $hobbie }}
    @endforeach
  </div>
  <div class="virtudes">
    <h4>Virtudes</h4>
    @foreach ($virtudes as $virtud)
    {{ $virtud }}
    @endforeach
  </div>
  <div class="skills">
    <h4>Habilidades</h4>
    @foreach ($skills as $skill)
    {{ $skill }}
    @endforeach
  </div>
</div>