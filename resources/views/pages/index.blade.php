@extends('layouts.main')
<title>Hotel</title>
@section('content')
<div class="wrapper container">
	<!-- Search Hotels Form -->
	<div>
		<form method="get" action="{{ route('find') }}">
			<div class="form-row">
				<div class="col-md-4 mb-3">
					<input type="text" class="form-control" placeholder="Country, city, district, place..." name="find_arg">
				</div>
				<div class="col-md-3 mb-3">
					<input type="date" class="form-control" value="2020-04-28" name="from">
				</div>
				<div class="col-md-3 mb-3">
					<input type="date" class="form-control" value="2020-04-29" name="to">
				</div>
				<div class="col-md-2 mb-3">
					<button class="btn btn-primary" type="submit">Find Hotels</button>
				</div>
			</div>
		</form>
	</div>
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
	<div class="wrapper container">
		<div class="text-center mb-3">
			<h3>Recommendations</h3>
		</div>
		<div class="row">
			<div class="col-lg-6 col-xl-3 limited d-flex align-items-stretch mb-2">
				<div class="card">
					<img src="https://dubai.in.ua/wp-content/uploads/2011/06/room1.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">HOTEL NAME</h5>
						<p class="card-text">HOTEL BRIEF INFOLorem ipsum dolor sit amet.</p>
					</div>
					<div class="collapse" id="collapseHairdresser">
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
						<a class="card-link dropdown-toggle" href="#collapseHairdresser" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample">Show more</a>
						<a href="{{ URL::route('reservation-details') }}" class="card-link">Book now</a>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-xl-3 limited d-flex align-items-stretch mb-2">
				<div class="card">
					<img src="https://r-cf.bstatic.com/images/hotel/max1024x768/223/223888941.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">HOTEL NAME</h5>
						<p class="card-text">HOTEL BRIEF INFOLorem ipsum dolor sit amet.</p>
					</div>
					<div class="collapse" id="collapseCosmetology">
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
						<a class="card-link dropdown-toggle" href="#collapseCosmetology" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample">Show more</a>
						<a href="{{ URL::route('reservation-details') }}" class="card-link">Book now</a>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-xl-3 limited d-flex align-items-stretch mb-2">
				<div class="card">
					<img src="https://www.atorus.ru/public/ator/data/image/TOP10/4421/4.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">HOTEL NAME</h5>
						<p class="card-text">HOTEL BRIEF INFOLorem ipsum dolor sit amet.</p>
					</div>
					<div class="collapse" id="collapseVisage">
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
						<a class="card-link dropdown-toggle" href="#collapseVisage" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample">Show more</a>
						<a href="{{ URL::route('reservation-details') }}" class="card-link">Book now</a>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-xl-3 limited d-flex align-items-stretch">
				<div class="card">
					<img src="https://voyagecdn.blob.core.windows.net/files/Galeri/11105.jpg" class="card-img-top adaptive" alt="...">
					<div class="card-body">
						<h5 class="card-title">HOTEL NAME</h5>
						<p class="card-text">HOTEL BRIEF INFOLorem ipsum dolor sit amet.</p>
					</div>
					<div class="collapse" id="collapseNail">
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
						<a class="card-link dropdown-toggle" href="#collapseNail" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample">Show more</a>
						<a href="{{ URL::route('reservation-details') }}" class="card-link">Book now</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
