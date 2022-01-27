@extends('dashboard.layouts.app')
@section('title','Profile - Famoney App')
@section('content')
<div class="container">
	<div class="card mt-3">
		<div class="card-body">
			<h1 class="fs-1 fw-bolder mt-3">
				Profile - {{Auth::user()->name}}
			</h1>
			<h4 class="fs-4 fw-bolder">
				Role: {{Auth::user()->role}}</h4>
			<p>Bergabung sejak {{date('d-m-Y', strtotime(Auth::user()->created_at));}}</p>
		</div>
	</div>
</div>
@endsection