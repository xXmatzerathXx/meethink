{!! Form::open(['url' => "proyectsingle/$nombreP", 'class' => 'proyectosingle']) !!}
    <h3>TU EQUIPO IDEAL</h3>
    @foreach ($users as $user)
      <div class="member"><p>{{$user}}<input name="member[]" type="checkbox" value="{{$user}}"></div>
    @endforeach
    <button type="submit">Siguiente</button>
  {!! Form::close() !!}