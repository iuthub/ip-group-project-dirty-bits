@foreach($hotels as $hotel)
	<div class="col-lg-6 col-xl-4 limited d-flex align-items-stretch mb-2">
		<div class="card">
			<img style="width: 100%; height: 300px; object-fit: cover;" src="@include('partials.images.link_'. rand(1,10))" class="card-img-top" alt="...">
			<div class="card-body">
				<h5 class="card-title">{{ $hotel->name }}</h5>
				<p class="card-text">{{ $hotel->description }}</p>
			</div>
			<div class="collapse" id="collapseReservation{{ $hotel->id }}">
				<div class="card card-body">
					<ul class="list-group list-group-flush">
						<li class="list-group-item">Type: {{ $hotel->type }}</li>
						<li class="list-group-item">Stars: {{ $hotel->rating }}</li>
						<li class="list-group-item">Site: {{ $hotel->website }}</li>
						<li class="list-group-item">Adress: {{ $hotel->address }}</li>
						<li class="list-group-item">City: {{ $hotel->city }}</li>
						<li class="list-group-item">Country: {{ $hotel->country }}</li>
						<li class="list-group-item">Zip: {{ $hotel->zip }}</li>
						@foreach($rooms as $room)
							@if($hotel->id == $room->hotel_id )
								<li class="list-group-item">{{ $room->type }} | {{ $room->price }}$ </li>
							@endif
						@endforeach
						@foreach($facilities as $facility)
							@if($hotel->id == $facility->hotel_id )
								<li class="list-group-item">{{ $facility->name }}</li>
							@endif
						@endforeach
					</ul>
				</div>
			</div>
			<div class="card-body">
				<a class="card-link dropdown-toggle" href="#collapseReservation{{ $hotel->id }}" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample">Show more</a>
				<a href="{{ URL::route('reservation-details') }}" class="card-link">
					Book now
				</a>
				<form action="{{ route('hotels.edit', $hotel->id)}}" method="get">
          <button class="btn btn-link card-link" type="submit">
          	Edit
        	</button>
        </form>
				<form action="{{ route('hotels.destroy', $hotel->id)}}" method="post">
          @csrf
          @method('DELETE')
          <button class="btn btn-link card-link" type="submit">
          	Delete
          </button>
        </form>
			</div>
		</div>
	</div>
@endforeach