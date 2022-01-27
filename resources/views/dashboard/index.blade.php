@extends('dashboard.layouts.app')
@section('title','Dashboard - Famoney App')
@section('content')
<div class="container">
	<div class="row text-center content-justify-center">

		<div class="col-12 mt-3">

		<h1 class="fs-1 fw-bolder mb-2">
			Dashboard
		</h1>

			<div class="card">
				<div class="card-body">
					<h2 class="fs-2 fw-bold">
						Kapan anda pertama kali memasukkan / mengeluarkan uang?
					</h2>
					<p class="card-text">
						Senin, 17 Januari 2022
					</p>
				</div>
			</div>
		</div>


		<div class="col-12 mt-3">
			<div class="card">
				<div class="card-body">
					<h2 class="fs-2 fw-bold">
						Total Uang Anda
					</h2>
					<p class="card-text fw-semi-bold">
						Rp{{$count}}
					</p>
				</div>
			</div>
		</div>

		<div class="col-6 mt-3">
			<div class="card">
				<div class="card-body">
					<h2 class="fs-2 fw-bold">
						Total Pemasukan Anda
					</h2>
					<p class="card-text fw-semi-bold">
						Rp{{$pemasukan}}
					</p>
				</div>
			</div>
		</div>

		<div class="col-6 mt-3">
			<div class="card">
				<div class="card-body">
					<h2 class="fs-2 fw-bold">
						Total Pengeluaran Anda
					</h2>
					<p class="card-text fw-semi-bold">
						Rp{{$pengeluaran}}
					</p>
				</div>
			</div>
		</div>

	</div>
</div>
@endsection
@push('script')
<script>
	
</script>
@endpush