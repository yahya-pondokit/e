@extends('auth.app')

@section('content')
	<div class="container">
		<div class="mx-auto mt-5 col-5">
			<div class="card mt-5">
				<div class="py-5 px-3">
					<div class="card-body">
						<div class="text-center mb-4">
							<h3>Login</h3>
						</div>
						<form action="{{ route('login') }}" method="post" class="pb-3 border-bottom">
							@csrf
							<div class="form-group">
								<input name="email" type="email" class="form-control rounded-pill px-3" placeholder="Email">
								<small class="form-text text-muted">We'll never share your email with anyone else.</small>
							</div>
							<div class="form-group">
								<input name="password" type="password" class="form-control rounded-pill px-3" placeholder="Password">
							</div>
							<div class="form-group form-check">
								<input type="checkbox" class="form-check-input" id="remember">
								<label class="form-check-label" for="remember">remember me</label>
							</div>
							<button type="submit" class="btn btn-md btn-primary btn-block rounded-pill">Login</button>
						</form>
						<div class="py-2 text-center">
							<a href="register">
								<span class="small"> Create an Account!</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection