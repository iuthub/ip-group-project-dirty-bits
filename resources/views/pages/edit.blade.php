@extends('layouts.main')
@section('content')
<!-- Edit Hotel Form -->
<div class="container">
	<!-- Hotel Details -->
	<div class="text-center">
		<h2>{{$title}}</h2>
	</div>
	<form method="post" action="{{ route('hotels.store') }}">
		@csrf
		<div class="form-row mt-4">
			<div class="form-group col-md-4">
				<label for="inputName">Hotel Name</label>
				<input type="text" class="form-control" id="inputName" name="name" value={{ $hotel->name }}>
			</div>
			<div class="form-group col-md-2">
				<label for="inputType">Type</label>
				<select id="inputType" class="form-control" name="hotel_type">
					<option selected value="{{ $hotel->name }}">
						{{ $hotel->type }}
					</option>
					<option value="Hotel">Hotel</option>
					<option value="Resort">Resort</option>
					<option value="Villa">Villa</option>
					<option value="Apartment">Apartment</option>
					<option value="Boat">Boat</option>
					<option value="Hostel">Hostel</option>
					<option value="Bed and Breakfast">Bed and Breakfast</option>
					<option value="Homestay">Homestay</option>
				</select>
			</div>
			<div class="form-group col-md-2">
				<label for="inputRating">Star Rating</label>
				<select id="inputRating" class="form-control" name="rating">
					<option value="{{ $hotel->name }}" selected>
						{{ $hotel->rating }}
					</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
				</select>
			</div>
			<div class="form-group col-md-4">
				<label for="inputWebsite">Website</label>
				<input type="text" class="form-control" id="inputWebsite" name="website" value="{{ $hotel->website }}">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-7">
				<label for="inputDescription">Description</label>
				<input type="text" class="form-control" id="inputDescription" name="description" value={{ $hotel->description }}>
			</div>
			<div class="form-group col-md-5">
				<label for="inputAddress">Address</label>
				<input type="text" class="form-control" id="inputAddress" name="address" value="{{ $hotel->address }}">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-5">
				<label for="inputCountry">Country</label>
				<input type="text" class="form-control" id="inputContry" name="country" value="{{ $hotel->country }}">
			</div>
			<div class="form-group col-md-5">
				<label for="inputCity">City</label>
				<input type="text" class="form-control" id="inputCity" name="city" value="{{ $hotel->city }}">
			</div>
			<div class="form-group col-md-2">
				<label for="inputZip">Zip</label>
				<input type="text" class="form-control" id="inputZip" name="zip" value="{{ $hotel->zip }}">
			</div>
		</div>
		<!-- Hotel Details -->
		<div class="text-center mb-3">
			<h4>Room Details</h4>
		</div>
		<div class="form-row mb-4">
			@foreach($hotel->room as $room)
				<div class="form-check col-md-4 col-sm-6 text-center mb-3">
					<input class="form-check-input" type="checkbox" value="{{ $room->type }}" name="room_type[]">
					<label class="form-check-label">
						{{ $room->type }} | Price
					</label>
					<input type="text" class="form-control" name="price[]"
					value="{{ $room->price }}">
				</div>
			@endforeach		
		</div>
		<!-- Facilities -->
		<div class="text-center mb-3">
			<h4>Facilities</h4>
		</div>
		<div class="form-group">
			@foreach($hotel->facility as $facility)
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="checkbox" id="conciergeCheckbox" value="Concierge" name="facility[]">
					<label class="form-check-label" for="conciergeCheckbox">{{ $facility->name }}</label>
				</div>
			@endforeach
		</div>
		<div class="text-center">
			<button type="submit" class="btn btn-primary btn-lg w-50">Save Changes</button>
		</div>
	</form>
</div>
@endsection