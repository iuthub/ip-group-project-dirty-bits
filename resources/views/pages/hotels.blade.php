@extends('layouts.main')
@section('content')
<!-- Hotels' List -->
<div class="wrapper container">
	<div class="text-center mb-3">
		<h3>{{$title}}</h3>
	</div>
	<div class="row">
	@include('partials._hotel_card_generator')
	</div>
</div>
@endsection