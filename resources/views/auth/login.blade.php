@extends('layout.app')
@section('title','Login - Famoney App')
@section('content')
	<div class="container">
		<div class="row d-flex justify-content-center mt-3 px-5 py-5">
			<div class="col col-lg-6">
				<div class="card">
					<div class="card-body">
						<h3 class="card-title fw-bolder">
							Login - Famoney App
						</h3>
						<form action="{{route('post.login')}}" class="form" method="POST" name="loginform">
							@csrf
							<div class="form-group">
								<label for="username"><b>Username</b></label>
								<input type="text" class="form-control" name="name" autocomplete="off">
							</div>
							<br>
							<div class="form-group">
								<label for="password"><b>Password</b></label>
								<input type="password" class="form-control" name="password" autocomplete="off">
							</div>
							<p class="text-secondary mt-2"><i class="fas fa-question-circle"></i> Don't have an account? <a href="/auth/register">Register Here</a></p>
							<br>
							<div class="text-center">
								<input type="submit" class="btn btn-lg btn-primary rounded-pill" value="Login">

								<a href="/" class="btn btn-lg btn-danger rounded-pill">
									Back
								</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>


		<div class="text-center mt-1 mb-5 px-5 py-5">
			<p class="text-white" id="footer">
				&copy; 2022	by Famoney App Team
			</p>
		</div>

	</div>
@endsection
@once
	@push('css')
	<style>
	body{
		background: #2980b9;  /* fallback for old browsers */
		background: -webkit-linear-gradient(to right, #2c3e50, #2980b9);  /* Chrome 10-25, Safari 5.1-6 */
		background: linear-gradient(to right, #2c3e50, #2980b9); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
		}
	.card{
		border-radius: 10px;
	}
	</style>
	@endpush
@endonce