@extends('layouts.app')

@section('content')
<div class="global-container-r white start-logo">
<h1>{{ Auth::user()}}</h1>
<img src="{{asset('img/meethink.gif')}}" class="center">
</div>
@endsection

@section('scripts')
<script>
function skipPage(){
  window.location.href = '{{route("steps")}}';
}
setTimeout(skipPage, 3000);
</script>
@endsection
