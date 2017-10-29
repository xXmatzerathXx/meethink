@extends('layouts.app')

@section('content')


<div class="global-container white start-logo">
<img src="{{asset('img/icons/nav/loading.gif')}}" class="center" style="width: 150px; padding: 0;">
</div>
@endsection

@section('scripts')
<script>
function skipPage(){
  window.location.href = '{{route("home")}}';
}
setTimeout(skipPage, 2500);
</script>
@endsection
