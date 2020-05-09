@extends('layouts.app')
<title>Hotel</title>
@section('content')
<div class="wrapper container">
	<!-- Three Hotel Service Info Cards -->
	<div class="row centered">
		<div class="col-md-4 mb-2">
			<div class="card limited">
				<img src="https://q-cf.bstatic.com/images/hotel/max1024x768/227/227030896.jpg" class="card-img-top" alt="...">
				<div class="card-body">
					<h4 class="card-title limited">Flexible Change and Cancellation</h4>
					<p class="card-text">Guided by OUR HOTEL NAME’s purpose of care, our temporary changes allow for flexibility in your upcoming travel.</p>
				</div>
			</div>
		</div>
		<div class="col-md-4 mb-2">
			<div class="card limited">
				<img src="https://q-cf.bstatic.com/images/hotel/max1024x768/224/22443294.jpg" class="card-img-top" alt="...">
				<div class="card-body">
					<h4 class="card-title limited">Hotel's Membership Updates</h4>
					<p class="card-text">Learn about the extension of World of OUR HOTEL NAME loyalty program benefits for all qualifying members globally.</p>
				</div>
			</div>
		</div>
		<div class="col-md-4 mb-2">
			<div class="card limited">
				<img src="https://storage.googleapis.com/static-content-hc/sites/default/files/cataloina_porto_doble_balcon2_2.jpg" class="card-img-top" alt="...">
				<div class="card-body">
					<h4 class="card-title limited">Manage Your Stay from Mobile</h4>
					<p class="card-text">The OUR HOTEL NAME's app lets members book, modify and manage stays with ease from mobile - everything is just a tap away.</p>
				</div>
			</div>
			<br>
		</div>
	</div>
</div>
@endsection
