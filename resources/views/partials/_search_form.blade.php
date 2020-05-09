<!-- Search Hotels Form -->
<div class="container mt-3">
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
				<button href="#"  type="submit" class="button1">Find Hotels</button>
			</div>
		</div>
	</form>
</div>