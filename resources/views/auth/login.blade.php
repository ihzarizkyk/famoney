@extends('layout.app')
@section('title','Login - Famoney App')
@section('content')
	<div class="container">
		<div class="row d-flex justify-content-center mt-3">
			<div class="col col-md-6">
				<div class="card">
					<div class="card-body">
						<h3 class="card-title">
							Login Form - Famoney App
						</h3>
						<form action="#" class="form" method="POST" name="loginform">
							<div class="form-group">
								<label for="username"><b>Username</b></label>
								<input type="text" class="form-control" name="name" autocomplete="off">
							</div>
							<br>
							<div class="form-group">
								<label for="password"><b>Password</b></label>
								<input type="password" class="form-control" name="passwword" autocomplete="off">
							</div>
							<br>
							<input type="submit" class="btn btn-primary rounded-pill" value="Login">
							<br><br>
							<p class="text-secondary">Don't have an account? <a href="/auth/register">Register Here</a></p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection