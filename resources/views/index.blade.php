@extends('layout.app')
@section('title','Famoney App')
@section('content')

		<nav class="navbar navbar-expand-lg navbar-light bg-warning">
		  <div class="container-fluid">
		    <a class="navbar-brand fw-bold" href="#">Famoney</a>
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		      <div class="navbar-nav">
		        <a class="nav-link active" aria-current="page" href="#">Home</a>
		        <a class="nav-link active" href="auth/login">Login</a>
		      </div>
		    </div>
		  </div>
		</nav>

		<!--Welcoming Header-->

		<div class="container-fluid">
			<div class="row mb-4" id="welcome">
				<div class="col-6 px-2 py-3 ml-3">
					<h1 class="fs-1">
						Famoney App
					</h1>
					<p>
						Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi modi et, cupiditate ipsa nemo aut corrupti praesentium dignissimos iusto fuga.
					</p>
				</div>
				<div class="col-6 px-2 py-3 ml-3">
					<h1 class="fs-1">
						Famoney App
					</h1>
					<p>
						Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi modi et, cupiditate ipsa nemo aut corrupti praesentium dignissimos iusto fuga.
					</p>
				</div>
			</div>
		</div>

	<div class="container">

		<h2 class="text-center fs-2 fw-bold text-secondary mb-3">
			Powered by
		</h2>

		<div class="row">

			<div class="col-4">
				<div class="card" id="tech">
					<div class="card-body">
						<div class="text-center">
							<h3 class="fs-3 fw-bold">
								Laravel
							</h3>
							<img src="https://laravel.com/img/logomark.min.svg" width="100px" height="auto" alt="">
						</div>
					</div>
				</div>
			</div>

			<div class="col-4">
				<div class="card" id="tech">
					<div class="card-body">
						<div class="text-center">
							<h3 class="fs-3 fw-bold">
								MySql
							</h3>
							<img src="https://www.mysql.com/common/logos/logo-mysql-170x115.png" width="120px" height="auto" alt="">
						</div>
					</div>
				</div>
			</div>

			<div class="col-4">
				<div class="card" id="tech">
					<div class="card-body">
						<div class="text-center">
							<h3 class="fs-3 fw-bold">
								Bootstrap 5
							</h3>
							<img src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" width="100px" height="auto" alt="">
						</div>
					</div>
				</div>
			</div>

		</div>

		<div class="row mt-5">

			<div class="col-12 text-center mb-3">
				<h2 class="fs-2 fw-bold text-secondary">
					Features
				</h2>
			</div>
			
			<div class="col-4">
				<div class="card" id="features">
					<div class="card-body">
						<div class="text-center">
							<h3 class="fs-3 fw-bold">
								Calculate Money
							</h3>
							<h2 class="fs-2">
								<i class="bi bi-calculator"></i>
							</h2>
						</div>
					</div>
				</div>
			</div>

			<div class="col-4">
				<div class="card" id="features">
					<div class="card-body">
						<div class="text-center">
							<h3 class="fs-3 fw-bold">
								Reminder Notification
							</h3>
							<h2 class="fs-2">
								<i class="bi bi-bell"></i>
							</h2>
						</div>
					</div>
				</div>
			</div>

			<div class="col-4">
				<div class="card" id="features">
					<div class="card-body">
						<div class="text-center">
							<h3 class="fs-3 fw-bold">
								Money Report
							</h3>
							<h2 class="fs-2">
								<i class="bi bi-card-heading"></i>
							</h2>
						</div>
					</div>
				</div>
			</div>

		</div>

	</div>
@endsection