@extends('layout.app')
@section('title','Famoney App')
@section('content')

		<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
		  <div class="container-fluid">
		    <a class="navbar-brand fw-bold" href="#"> <img src="Image/LOGO.png" width="140" height="38"></a>
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		      <div class="navbar-nav">
		      </div>
		    </div>
                <div class="row">
                    <div class=" text-right">
                        <a href="/auth/register" class="btn btn-outline-primary m-2" >REGISTER</a>
                        <a href="/auth/login" class="btn btn-primary m-2">LOGIN</a>
                    </div>
                </div>
		  </div>
		</nav>

		<!--Welcoming Header-->

		<div class="container-fluid">
			<div class="row mb-4" id="welcome">
				<div class="col-6 px-3 py-5">
					<br><br>
					<h1 class="fw-bold">
						KELOLA KEUANGANMU DENGAN MUDAH !
					</h1>
					<br>
					<p>
					Famoney merupakan sebuah platform berupa website yang dimana user dapat mengelola keuangan pribadi maupun keuangan dalam keluarga.
                    Fitur yang kami tawarkan diantaranya yang pertama untuk admin website bisa mengelola user seperti create dan add or remove user, kemudian yang terakhir untuk user dapat membuat laporan keuangan berupa tabel pemasukan dan pengeluaran serta adanya report keuangan tiap bulan.
					</p>
				</div>
				<div class="col-6 mb-4 px-5 py-10">
                    <img src="Image/Audit-bro.png" width="580" height="580">
				</div>
			</div>
		</div>

	<div class="container">

        <div class="row mt-5">

			<div class="col-12 text-center mb-3">
				<h2 class="fs-3 fw-bold">
					OUR FEATURE
				</h2>
			</div>

			<div class="col-4">
				<div class="card" id="features">
					<div class="card-body">
						<div class="text-center">
							<h3 class="fs-5 fw-semibold">
								CALCULATE MONEY
							</h3>
							<h2 class="fs-1">
								<img src="Image/Calculator-bro.png" width="180" height="180">
							</h2>
                            <p>
								Kamu dapat menghitung pengeluaran dan pemasukanmu secara manual dengan fitur calculator yang dapat kamu akses kapanpun dan dimanapun.
                            </p>
						</div>
					</div>
				</div>
			</div>

			<div class="col-4">
				<div class="card" id="features">
					<div class="card-body">
						<div class="text-center">
							<h3 class="fs-5 fw-semibold">
								REMINDER NOTIFICATION
							</h3>
							<h2 class="fs-1">
								<img src="Image/Calendar-amico.png" width="180" height="180">
							</h2>
                            <p>
                                Kamu akan menerima notifikasi jika pengeluaran tiap harinya telah melewati batas budget yang kamu inputkan tiap bulannya.
                            </p>
						</div>
					</div>
				</div>
			</div>

			<div class="col-4">
				<div class="card" id="features">
					<div class="card-body">
						<div class="text-center">
							<h3 class="fs-5 fw-semibold">
								MONEY REPORT
							</h3>
							<h2 class="fs-1">
								<img src="Image/Audit-rafiki.png" width="180" height="180">
							</h2>
                            <p>
                                Kamu dapat mengetahui report dari total pengeluaran dan pemasukanmu pada tiap bulanya dengan mudah tanpa harus menghitungnya.
                            </p>
						</div>
					</div>
				</div>
			</div>
        <br><br><br><br>
		<h2 class="text-center fs-3 fw-bold mb-3">
			<br>
				POWERED BY
			</h2>

			<div class="row">

				<div class="col-4">
					<div class="card" id="tech">
						<div class="card-body">
							<div class="text-center">
								<h3 class="fs-5 fw-semibold">
								LARAVEL
								</h3>
								<img src="https://laravel.com/img/logomark.min.svg" width="100px" height="80px" alt="">
							</div>
						</div>
					</div>
				</div>

				<div class="col-4">
					<div class="card" id="tech">
						<div class="card-body">
							<div class="text-center">
								<h3 class="fs-5 fw-semibold">
								MYSQL
								</h3>
								<img src="https://www.mysql.com/common/logos/logo-mysql-170x115.png" width="100px" height="80px" alt="">
							</div>
						</div>
					</div>
				</div>

				<div class="col-4">
					<div class="card" id="tech">
						<div class="card-body">
							<div class="text-center">
								<h3 class="fs-5 fw-semibold">
								BOOTSTRAP 5
								</h3>
								<img src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" width="100px" height="80px" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <br><br>
<footer>
  <p class="text-center">Copyright @ 2022</p>
  <p class="text-center">Develope By : <img src="Image/LOGO.png" width="104" height="24"></p>
</footer>
@endsection
