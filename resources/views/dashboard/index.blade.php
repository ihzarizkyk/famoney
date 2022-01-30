@extends('dashboard.layouts.app')
@section('title','Dashboard - Famoney App')
@section('content')

	@php

	function rupiah($nominal)
	{
		$result = "Rp".number_format($nominal,2,',','.');
		return $result;
	}

	@endphp

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
						@foreach($start as $st)
						{{date('d-m-Y', strtotime($st->created_at));}}
						@endforeach
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
						{{rupiah($count);}}
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
						{{rupiah($pemasukan)}}
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
						{{rupiah($pengeluaran)}}
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