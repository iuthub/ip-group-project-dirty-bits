@extends('layouts.main')
@section('content')
<!-- Reservation Details Page Content -->
<div class="container">
	<div class="row">
		<div class="col-md-6 mb-12">
			<div class="text-center">
				<h3>Reservation Details</h3>
			</div>
			<form>
				<div class="card card-body">
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<label for="inputFrom">From</label>
							<input type="date" id="inputFrom" class="form-control" value="2020-04-28">
						</div>
						<div class="col-md-6 col-sm-6">
							<label for="inputTo">To</label>
							<input type="date" id="inputTo" class="form-control" value="2020-04-29">
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<label for="inputName">Number of Rooms</label>
							<input type="number" min="1" max="2" class="form-control" id="inputName" value="1">
						</div>
						<div class="col-md-6">
							<label for="inputName">Number of Persons</label>
							<input type="number" min="1" max="5" class="form-control" id="inputName" value="1">
						</div>
					</div>
					<div class="row">
						<div class="col">
							<label for="inputType">Room Type</label>
							<select id="inputType" class="form-control">
								<option selected>Choose...</option>
								<option selected="selected">Luxury</option>
								<option>Comfort Plus</option>
								<option>Comfort</option>
								<option>Family</option>
								<option>Basic</option>
								<option>Bed Only</option>
							</select>
						</div>
					</div>
				</div>
				<div class="text-center">
					<button type="submit" class="btn btn-primary w-50">Reserve</button>
					<button class="btn btn-primary" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="collapseHotelInfo collapseReservationImage">Show Hotel</button>
				</div>
			</form>
		</div>
		<div class="col-md-6 mb-12">
			<div class="collapse multi-collapse" id="collapseHotelInfo">
				<div class="text-center">
					<h3>Hotel Info</h3>
				</div>
				<div class="card card-body">
					<img src="https://dubai.in.ua/wp-content/uploads/2011/06/room1.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">HOTEL NAME</h5>
						<p class="card-text">HOTEL BRIEF INFOLorem ipsum dolor sit amet.</p>
					</div>
					<div class="collapse" id="collapseHotelInfoMore">
						<div class="card card-body">
							<ul class="list-group list-group-flush">
								<li class="list-group-item">Cras justo odio</li>
								<li class="list-group-item">Dapibus ac facilisis in</li>
								<li class="list-group-item">Vestibulum at eros</li>
								<li class="list-group-item">Cras justo odio</li>
								<li class="list-group-item">Dapibus ac facilisis in</li>
								<li class="list-group-item">Vestibulum at eros</li>
							</ul>
						</div>
					</div>
					<div class="card-body">
						<a class="card-link dropdown-toggle" href="#collapseHotelInfoMore" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample">Show more</a>
					</div>
				</div>
			</div>
			<div class="collapse show multi-collapse" id="collapseReservationImage">
				<img src="https://pro.regiondo.com/wp-content/uploads/2019/12/Blog_image_Events2.jpg" alt="..." class="img-thumbnail">
			</div>
		</div>
	</div>
</div>
@endsection