@extends('layouts.main')
<title>Create Page</title>
@section('content')
<!-- Create Hotel Form -->
<div class="container">
	<!-- Hotel Details -->
	<div class="text-center">
		<h2>Hotel Create Page</h2>
	</div>
	<form>
		<div class="form-row mt-4">
			<div class="form-group col-md-4">
				<label for="inputName">Hotel Name</label>
				<input type="text" class="form-control" id="inputName" placeholder="Hiyatt Tashkent">
			</div>
			<div class="form-group col-md-2">
				<label for="inputType">Type</label>
				<select id="inputType" class="form-control">
					<option selected>Choose...</option>
					<option>Hotel</option>
					<option>Resort</option>
					<option>Villa</option>
					<option>Apartment</option>
					<option>Boat</option>
					<option>Hostel</option>
					<option>Bed and Breakfast</option>
					<option>Homestay</option>
				</select>
			</div>
			<div class="form-group col-md-2">
				<label for="inputRating">Star Rating</label>
				<select id="inputRating" class="form-control">
					<option selected>Choose...</option>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</select>
			</div>
			<div class="form-group col-md-4">
				<label for="inputWebsite">Website</label>
				<input type="text" class="form-control" id="inputWebsite" placeholder="example.com">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-7">
				<label for="inputDescription">Description</label>
				<input type="text" class="form-control" id="inputDescription" placeholder="Short description...">
			</div>
			<div class="form-group col-md-5">
				<label for="inputAddress">Address</label>
				<input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-5">
				<label for="inputCountry">Country</label>
				<input type="text" class="form-control" id="inputContry" placeholder="Uzbekistan">
			</div>
			<div class="form-group col-md-5">
				<label for="inputCity">City</label>
				<input type="text" class="form-control" id="inputCity" placeholder="Tashkent">
			</div>
			<div class="form-group col-md-2">
				<label for="inputZip">Zip</label>
				<input type="text" class="form-control" id="inputZip"
				placeholder="100187">
			</div>
		</div>
		<!-- Hotel Details -->
		<div class="text-center mb-3">
			<h4>Room Details</h4>
		</div>
		<div class="form-row mb-4">
			<div class="form-check col-md-4 col-sm-6 text-center mb-3">
				<input class="form-check-input" type="checkbox" id="luxuryCheckbox" value="Luxury">
				<label class="form-check-label">Luxury </label>
				<label>| Price</label>
				<input type="text" class="form-control" id="inputPrice1"
				placeholder="600$">
			</div>
			<div class="form-check col-md-4 col-sm-6 text-center mb-3">
				<input class="form-check-input" type="checkbox" id="comfortPlusCheckbox" value="Comfort Plus">
				<label class="form-check-label">Comfort Plus </label>
				<label>| Price</label>
				<input type="text" class="form-control" id="inputPrice2"
				placeholder="500$">
			</div>
			<div class="form-check col-md-4 col-sm-6 text-center mb-3">
				<input class="form-check-input" type="checkbox" id="comfortCheckbox" value="Comfort">
				<label class="form-check-label">Comfort </label>
				<label>| Price</label>
				<input type="text" class="form-control" id="inputPrice3"
				placeholder="400$">
			</div>
			<div class="form-check col-md-4 col-sm-6 text-center mb-3">
				<input class="form-check-input" type="checkbox" id="familyCheckbox" value="Family">
				<label class="form-check-label">Family </label>
				<label>| Price</label>
				<input type="text" class="form-control" id="inputPrice4"
				placeholder="300$">
			</div>
			<div class="form-check col-md-4 col-sm-6 text-center mb-3">
				<input class="form-check-input" type="checkbox" id="basicCheckbox" value="Family">
				<label class="form-check-label">Basic </label>
				<label>| Price</label>
				<input type="text" class="form-control" id="inputPrice5"
				placeholder="200$">
			</div>
			<div class="form-check col-md-4 col-sm-6 text-center mb-3">
				<input class="form-check-input" type="checkbox" id="bedOnlyCheckbox" value="Bed Only">
				<label class="form-check-label">Bed Only </label>
				<label>| Price</label>
				<input type="text" class="form-control" id="inputPrice5"
				placeholder="100$">
			</div>
		</div>
		<!-- Facilities -->
		<div class="text-center mb-3">
			<h4>Facilities</h4>
		</div>
		<div class="form-group">
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="checkbox" id="conciergeCheckbox" value="concierge">
				<label class="form-check-label" for="conciergeCheckbox">Concierge</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="checkbox" id="businessCheckbox" value="business">
				<label class="form-check-label" for="businessCheckbox">Business Services</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="checkbox" id="spaCheckbox" value="spa">
				<label class="form-check-label" for="spaCheckbox">Spa</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="checkbox" id="fitnessCheckbox" value="fitness">
				<label class="form-check-label" for="fitnessCheckbox">Fitness Center</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="checkbox" id="poolCheckbox" value="pool">
				<label class="form-check-label" for="poolCheckbox">Pool</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="checkbox" id="restaurantCheckbox" value="restraunt">
				<label class="form-check-label" for="restaurantCheckbox">Restaurant on-site</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="checkbox" id="laundryCheckbox" value="laundry">
				<label class="form-check-label" for="laundryCheckbox">Laundry</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="checkbox" id="shuttleCheckbox" value="shuttle">
				<label class="form-check-label" for="shuttleCheckbox"> Airport Shuttle</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="checkbox" id="wifiCheckbox" value="wifi">
				<label class="form-check-label" for="wifiCheckbox"> Free WiFi</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="checkbox" id="beachCheckbox" value="beach">
				<label class="form-check-label" for="beachCheckbox">Beach Area</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="checkbox" id="breakfastCheckbox" value="breakfast">
				<label class="form-check-label" for="breakfastCheckbox">Breakfast</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="checkbox" id="petCheckbox" value="pet">
				<label class="form-check-label" for="petCheckbox">Pet Friendly</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="checkbox" id="nonsmokingCheckbox" value="nonsmoking">
				<label class="form-check-label" for="nonsmokingCheckbox">Non-smoking Rooms</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="checkbox" id="familyCheckbox" value="family">
				<label class="form-check-label" for="familyCheckbox">Family Rooms</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="checkbox" id="chargingCheckbox" value="charging">
				<label class="form-check-label" for="chargingCheckbox">Electric Vehicle Charging Station</label>
			</div>
		</div>
		<div class="text-center">
			<button type="submit" class="btn btn-primary btn-lg w-50">Create</button>
		</div>

	</form>
</div>
@endsection
