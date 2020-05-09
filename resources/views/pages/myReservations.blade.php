@extends('layouts.app')
<title>My Reservations</title>
@section('content')
<!-- My Reservations -->
<div class="wrapper container">
	<div class="text-center mb-3">
		<h3>My Reservations</h3>
	</div>
	<div class="row">
		@foreach($reservations as $reservation)
			<div class="col-sm-6 col-md-4 col-xl-3 limited d-flex align-items-stretch mb-2">
			<div class="card">
				<img style="width: 100%; height: 200px; object-fit: cover;" src="@include('partials.images.link_'. rand(1,10))" class="card-img-top" alt="...">
				<div class="card-body">
					<h6 class="card-title">
						Reservation {{ $reservation->id }}
					</h6>
					<p class="card-text">
						Hotel: {{ $reservation->hotel_name }}
					</p>
				</div>
				<div class="collapse" id="collapseReservation{{ $reservation->id }}">
					<div class="card card-body">
						<ul class="list-group list-group-flush">
							<li class="list-group-item">
								From: {{ $reservation->from }}
							</li>
							<li class="list-group-item">
								To: {{ $reservation->to }}
							</li>
							<li class="list-group-item">
								Persons: {{ $reservation->perons }}
							</li>
							<li class="list-group-item">
								Rooms: {{ $reservation->room_num }}
							</li>
							<li class="list-group-item">
								Type: {{ $reservation->room->type }}
							</li>
							<li class="list-group-item">
								Price: {{ $reservation->room->price }}
							</li>
						</ul>
					</div>
				</div>
				<div class="card-body">
					<a class="card-link dropdown-toggle" href="#collapseReservation{{ $reservation->id }}" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample">Show more</a>
					<form action="{{ route('reservations.destroy', $reservation->id)}}" method="post">
	          @csrf
	          @method('DELETE')
	          <button class="btn btn-link card-link" type="submit">
	          	Cancel
	          </button>
	        </form>
				</div>
			</div>
		</div>
		@endforeach
	</div>
</div>
@endsection
