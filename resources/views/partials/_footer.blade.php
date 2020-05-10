<footer class="page-footer font-small bg-light">
	<div class="container text-center mt-3 pt-3">
		<div class="mb-2">
			<h5>Subscribe to Offers & Updates</h5>
			<lable>Offers on hotel rooms delivered directly to your inbox</lable>
		</div>
		<form action="{{ URL::route('error') }}" class="form-inline justify-content-center mt-3 mb-3">
			<div class="form-group mx-sm-2 mb-2 ">
				<input type="email" class="form-control" id="inputEmail" placeholder="email@example.com">
			</div>
			<button type="submit" class="btn btn-info md-6 mb-2">Subscribe</button>
		</form>
		<div class="footer-copyright text-black-50">© 2020 Copyright:
			<a class="dark-grey-text" href="{{ URL::route('/') }}"> ourhotelname.uz</a>
			<p>Created by: <a href="https://github.com/iuthub/ip-group-project-dirty-bits" class="dark-grey-text">Dirty Bits GitHub</a></p>
		</div>
	</div>
</footer>