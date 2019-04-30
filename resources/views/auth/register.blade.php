@extends('auth.app')

@section('content')
	<div class="container">
		<div class="mx-auto mt-5 col-5">
			<div class="card mt-5">
				<div class="py-5 px-3">
					<div class="card-body">
						<div class="text-center mb-4">
							<h3>Create an Account</h3>
						</div>
						<form>
						  <div class="form-group">
						    <input name="first" type="text" class="form-control rounded-pill px-3" placeholder="First Name">
						  </div>
						  <div class="form-group mb-4">
						    <input name="last" type="text" class="form-control rounded-pill px-3" placeholder="Last Name">
						  </div>
						  <div class="form-group">
						    <input name="email" type="email" class="form-control rounded-pill px-3" placeholder="Email">
						  </div>
						  <div class="form-group">
						    <input name="password" type="password" class="form-control rounded-pill px-3" placeholder="Password">
						  </div>
						  <div class="form-group">
						    <input name="repeatpassword" type="password" class="form-control rounded-pill px-3" placeholder="Repeat Password">
						  </div>
						  <button type="submit" class="btn btn-primary btn-block rounded-pill mt-4">Register Account</button>
						</form>
						<div class="py-2 text-center">
							<a href="login">
								<span class="small">Already Have an Account? Login!</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection