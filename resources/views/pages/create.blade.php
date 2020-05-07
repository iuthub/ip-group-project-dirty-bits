@extends('layouts.main')
<title>Create Page</title>
@section('content')
<!-- Create Hotel Form -->
<div class="container">
	<!-- Hotel Details -->
	<div class="text-center">
		<h2>Hotel Create Page</h2>
	</div>
	<form method="post" action="{{ route('hotels.store') }}">
		@csrf
		<div class="form-row mt-4">
			<div class="form-group col-md-4">
				<label for="inputName">Hotel Name</label>
				<input type="text" class="form-control" id="inputName" name="name" placeholder="Hiyatt Tashkent">
			</div>
			<div class="form-group col-md-2">
				<label for="inputType">Type</label>
				<select id="inputType" class="form-control" name="hotel_type">
					<option selected>Choose...</option>
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
					<option selected>Choose...</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
				</select>
			</div>
			<div class="form-group col-md-4">
				<label for="inputWebsite">Website</label>
				<input type="text" class="form-control" id="inputWebsite" name="website" placeholder="example.com">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-7">
				<label for="inputDescription">Description</label>
				<input type="text" class="form-control" id="inputDescription" name="description" placeholder="Short description...">
			</div>
			<div class="form-group col-md-5">
				<label for="inputAddress">Address</label>
				<input type="text" class="form-control" id="inputAddress" name="address" placeholder="1234 Main St">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-5">
				<label for="inputCountry">Country</label>
				<input type="text" class="form-control" id="inputContry" name="country" placeholder="Uzbekistan">
			</div>
			<div class="form-group col-md-5">
				<label for="inputCity">City</label>
				<input type="text" class="form-control" id="inputCity" name="city" placeholder="Tashkent">
			</div>
			<div class="form-group col-md-2">
				<label for="inputZip">Zip</label>
				<input type="text" class="form-control" id="inputZip" name="zip" placeholder="100187">
			</div>
		</div>
		<!-- Hotel Details -->
		<div class="text-center mb-3">
			<h4>Room Details</h4>
		</div>
		<div class="form-row mb-4">
			<div class="form-check col-md-4 col-sm-6 text-center mb-3">
				<input class="form-check-input" type="checkbox" id="luxuryCheckbox" value="Luxury" name="room_type[]">
				<label class="form-check-label">Luxury | Price</label>
				<input type="text" class="form-control" id="inputPrice1" name="price[]"
				placeholder="600$">
			</div>
			<div class="form-check col-md-4 col-sm-6 text-center mb-3">
				<input class="form-check-input" type="checkbox" id="comfortPlusCheckbox" value="Comfort Plus" name="room_type[]">
				<label class="form-check-label">Comfort Plus | Price</label>
				<input type="text" class="form-control" id="inputPrice2" name="price[]"
				placeholder="500$">
			</div>
			<div class="form-check col-md-4 col-sm-6 text-center mb-3">
				<input class="form-check-input" type="checkbox" id="comfortCheckbox" value="Comfort" name="room_type[]">
				<label class="form-check-label">Comfort | Price</label>
				<input type="text" class="form-control" id="inputPrice3" name="price[]"
				placeholder="400$">
			</div>
			<div class="form-check col-md-4 col-sm-6 text-center mb-3">
				<input class="form-check-input" type="checkbox" id="familyCheckbox" value="Family" name="room_type[]">
				<label class="form-check-label">Family | Price</label>
				<input type="text" class="form-control" id="inputPrice4" name="price[]"
				placeholder="300$">
			</div>
			<div class="form-check col-md-4 col-sm-6 text-center mb-3">
				<input class="form-check-input" type="checkbox" id="basicCheckbox" value="Basic" name="room_type[]">
				<label class="form-check-label">Basic | Price</label>
				<input type="text" class="form-control" id="inputPrice5" name="price[]"
				placeholder="200$">
			</div>
			<div class="form-check col-md-4 col-sm-6 text-center mb-3">
				<input class="form-check-input" type="checkbox" id="bedOnlyCheckbox" value="Bed Only" name="room_type[]">
				<label class="form-check-label">Bed Only | Price</label>
				<input type="text" class="form-control" id="inputPrice6" name="price[]"
				placeholder="100$">
			</div>
		</div>
		<!-- Facilities -->
		<div class="text-center mb-3">
			<h4>Facilities</h4>
		</div>
		<div class="form-group">
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="checkbox" id="conciergeCheckbox" value="Concierge" name="facility[]">
				<label class="form-check-label" for="conciergeCheckbox">Concierge</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="checkbox" id="businessCheckbox" value="Business Services" name="facility[]">
				<label class="form-check-label" for="businessCheckbox">Business Services</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="checkbox" id="spaCheckbox" value="Spa" name="facility[]">
				<label class="form-check-label" for="spaCheckbox">Spa</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="checkbox" id="fitnessCheckbox" value="Fitness Center" name="facility[]">
				<label class="form-check-label" for="fitnessCheckbox">Fitness Center</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="checkbox" id="poolCheckbox" value="Pool" name="facility[]">
				<label class="form-check-label" for="poolCheckbox">Pool</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="checkbox" id="restaurantCheckbox" value="Restraunt on-site" name="facility[]">
				<label class="form-check-label" for="restaurantCheckbox">Restaurant on-site</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="checkbox" id="laundryCheckbox" value="Laundry" name="facility[]">
				<label class="form-check-label" for="laundryCheckbox">Laundry</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="checkbox" id="shuttleCheckbox" value="Shuttle" name="facility[]">
				<label class="form-check-label" for="shuttleCheckbox"> Airport Shuttle</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="checkbox" id="wifiCheckbox" value="Wifi" name="facility[]">
				<label class="form-check-label" for="wifiCheckbox"> Free WiFi</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="checkbox" id="beachCheckbox" value="Beach Area" name="facility[]">
				<label class="form-check-label" for="beachCheckbox">Beach Area</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="checkbox" id="breakfastCheckbox" value="Breakfast" name="facility[]">
				<label class="form-check-label" for="breakfastCheckbox">Breakfast</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="checkbox" id="petCheckbox" value="Pet Friendly" name="facility[]">
				<label class="form-check-label" for="petCheckbox">Pet Friendly</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="checkbox" id="nonsmokingCheckbox" value="Non-smoking Rooms" name="facility[]">
				<label class="form-check-label" for="nonsmokingCheckbox">Non-smoking Rooms</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="checkbox" id="familyCheckbox" value="Family" name="facility[]">
				<label class="form-check-label" for="familyCheckbox">Family Rooms</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="checkbox" id="chargingCheckbox" value="Electric Vehicle Charging Station" name="facility[]">
				<label class="form-check-label" for="chargingCheckbox">Electric Vehicle Charging Station</label>
			</div>
		</div>
		<div class="text-center">
			<button type="submit" class="btn btn-primary btn-lg w-50">Create</button>
		</div>
	</form>
</div>
@endsection
