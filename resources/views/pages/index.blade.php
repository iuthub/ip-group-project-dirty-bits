@extends('layouts.app')
<title>Booking Uz</title>
<style>
    .card-img-top {
        width: 100%;
        height: 15vw;
        object-fit: cover;
    }
</style>
@section('content')
<div class="wrapper container">
	<!-- Three Hotel Service Info Cards -->
	<div class="row centered">
		<div class="col-md-4 mb-2">
			<div class="card limited">
				<img src="https://www.littlehotelier.com/wp-content/uploads/2016/03/tripadvisor-tripconnect-instant-booking-for-small-hotels.jpg" class="card-img-top" alt="...">
				<div class="card-body">
					<h4 class="card-title limited">Flexible Change and Cancellation</h4>
					<p class="card-text">Guided by Booking Uz’s purpose of care, our temporary changes allow for flexibility in your upcoming travel. Book and Cancel as You wish!</p>
				</div>
			</div>
		</div>
		<div class="col-md-4 mb-2">
			<div class="card limited">
				<img src="https://i.ytimg.com/vi/aRuW-cAOP88/maxresdefault.jpg" class="card-img-top" alt="...">
				<div class="card-body">
					<h4 class="card-title limited">Websites's Admin Membership</h4>
					<p class="card-text">The Admin extension of Booking Uz program alows you to create, modify and delete hotel with proper notifications. Admin gives You all power, enjoy it!</p>
				</div>
			</div>
		</div>
		<div class="col-md-4 mb-2">
			<div class="card limited">
				<img src="https://www.cediweb.ch/wp-content/uploads/2017/02/responsive-cediweb-1024x670.png" class="card-img-top" alt="...">
				<div class="card-body">
					<h4 class="card-title limited">Manage Your Stay from Mobile</h4>
					<p class="card-text">The Booking Uz's app lets members book, modify and manage stays with ease from mobile - everything is just a tap away. We made it adaptive!</p>
				</div>
			</div>
			<br>
		</div>
	</div>
</div>
@endsection
