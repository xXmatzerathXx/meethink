<ul>
@foreach ($users as $user)
  <li><a href="/usuario/{{$user}}">{{$user}}</a></li>
@endforeach
</ul>