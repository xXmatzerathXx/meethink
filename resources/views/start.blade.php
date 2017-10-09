@extends('layouts.app')

@section('content')

<p>Hola</p>


@endsection

@section('scripts')
<script>
function skipPage(){
  window.location.href = '{{route("steps")}}';
}
setTimeout(skipPage, 2000);
</script>
@endsection
