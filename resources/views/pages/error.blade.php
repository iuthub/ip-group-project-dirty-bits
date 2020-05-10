@extends('layouts.app')
<title>Error</title>
@section('content')
<!-- Error Page -->
<div class="container">
	<div class="jumbotron mt-3 text-center">
		<h1 class="display-4">Oops!</h1>
		<p class="lead">Requested page not found or not developed yet! We are working on this problem now!</p>
		<hr class="my-4">
		<p>404 Not Found</p>
		<p class="lead">
			<a class="btn btn-info btn-lg" href="{{ URL::route('/') }}" role="button">Take Me Home</a>
			<a class="btn btn-secondary btn-lg" href="https://github.com/iuthub/ip-group-project-dirty-bits" role="button">Contact Support</a>
		</p>
	</div>
</div>
@endsection
