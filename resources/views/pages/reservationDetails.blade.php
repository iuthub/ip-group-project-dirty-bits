@extends('layouts.app')
<title>Reservation Details</title>
@section('content')
<!-- Reservation Details Page Content -->
<div class="container">
	<div class="row">
		<div class="col-md-6 mb-12">
			<div class="text-center">
				<h3>Reservation Details</h3>
			</div>
			<form method="post" action="{{ route('reservations.store') }}">
				@csrf
				<div class="card card-body">
					<div class="row justify-content-center mb-2 mt-2">
						<input type="button" id="hotel_name" class="form-control w-50" value="{{ $hotel->name }}" name="hotel_name" read only data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="collapseHotelInfo collapseReservationImage">
					</div>
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<label for="inputFrom">From</label>
							<input type="date" id="inputFrom" class="form-control" value="2020-04-28" name="from">
						</div>
						<div class="col-md-6 col-sm-6">
							<label for="inputTo">To</label>
							<input type="date" id="inputTo" class="form-control" value="2020-04-29" name="to">
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<label for="inputName">Number of Rooms</label>
							<input type="number" min="1" max="2" class="form-control" id="inputName" value="1" name="room_num">
						</div>
						<div class="col-md-6">
							<label for="inputName">Number of Persons</label>
							<input type="number" min="1" max="5" class="form-control" id="inputName" value="1" name="persons">
						</div>
					</div>
					<div class="row">
						<div class="col">
							<label for="inputType">Room Type</label>
							<select id="inputType" class="form-control" name="room_id">
								<option selected>Choose...</option>
								@foreach($hotel->room as $room)
									<option value="{{$room->id}}">
										{{$room->type}} | {{$room->price}}$
									</option>
								@endforeach
							</select>
						</div>
					</div>
				</div>
				<div class="text-center mt-3 mb-4">
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
						<h5 class="card-title">{{ $hotel->name }}</h5>
						<p class="card-text">{{ $hotel->description }}</p>
					</div>
					<div class="collapse" id="collapseHotelInfoMore">
						<div class="card card-body">
							<ul class="list-group list-group-flush">
								<li class="list-group-item">Type: {{ $hotel->type }}</li>
								<li class="list-group-item">Stars: {{ $hotel->rating }}</li>
								<li class="list-group-item">Site: {{ $hotel->website }}</li>
								<li class="list-group-item">Adress: {{ $hotel->address }}</li>
								<li class="list-group-item">City: {{ $hotel->city }}</li>
								<li class="list-group-item">Country: {{ $hotel->country }}</li>
								<li class="list-group-item">Zip: {{ $hotel->zip }}</li>
							@foreach($hotel->room as $room)
								<li class="list-group-item">{{ $room->type }} | {{ $room->price }}$ </li>
							@endforeach
							@foreach($hotel->facility as $facility)
								@if($hotel->id == $facility->hotel_id )
									<li class="list-group-item">{{ $facility->name }}</li>
								@endif
							@endforeach
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
