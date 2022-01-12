@extends('layout.app')
@section('title','Register - Famoney App')
@section('content')
	<div class="container">
		<div class="row d-flex justify-content-center mt-3">
			<div class="col col-md-6">
				<div class="card">
					<div class="card-body">
						<h3 class="card-title">
							Register Form - Famoney App
						</h3>
						<form action="#" class="form" method="POST" name="registerform">
							<div class="form-group">
								<label for="username"><b>Email</b></label>
								<input type="text" class="form-control" name="email" autocomplete="off">
							</div>
							<br>
							<div class="form-group">
								<label for="username"><b>Username</b></label>
								<input type="text" class="form-control" name="name" autocomplete="off">
							</div>
							<br>
							<div class="form-group">
								<label for="password"><b>Password</b></label>
								<input type="password" class="form-control" name="passwword">
							</div>
							<br>
							<input type="submit" class="btn btn-primary rounded-pill" value="Register">
							<br><br>
							<p class="text-secondary">Already Have an Account? <a href="/auth/login">Please login here</a> </p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection