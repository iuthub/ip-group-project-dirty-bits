<header class="container">
	<nav class="navbar navbar-expand-lg navbar-light">
		<a class="navbar-brand" href="#">Our Hotel Name</a>
		<button class="navbar-toggler active" type="button" data-toggle="collapse" data-target="#navbarContent">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse float-right" id="navbarContent">
			<ul class="nav navbar-nav navbar-right">
				<li class="nav-item">
					<a class="nav-link active" href="{{ URL::route('/') }}">Offers</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ URL::route('my-reservations') }}">My Reservations</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ URL::route('about') }}">About</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
						Sign in
					</a>
					<div class="dropdown-menu">
						<form class="px-4 py-3">
							<div class="form-group">
								<label for="dropdownFormEmail">Email address</label>
								<input type="email" class="form-control" id="dropdownFormEmail" placeholder="email@example.com">
							</div>
							<div class="form-group">
								<label for="dropdownFormPassword">Password</label>
								<input type="password" class="form-control" id="dropdownFormPassword" placeholder="Password">
							</div>
							<div class="form-check">
								<input type="checkbox" class="form-check-input" id="dropdownCheck">
								<label class="form-check-label" for="dropdownCheck">
									Remember me
								</label>
							</div>
							<button type="submit" class="btn btn-primary">Sign in</button>
						</form>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">New around here? Sign up</a>
						<a class="dropdown-item" href="#">Forgot password?</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ URL::route('create') }}">Create</a>
				</li>
			</ul>
		</div>
	</nav>
</header>