@extends('dashboard.layouts.app')
@section('title','Dashboard - Famoney App')
@section('content')
<div class="container">
		<h1 class="fs-1 fw-bolder">
		{{Auth::user()->name}}
		</h1>
		<a href="/auth/logout" class="text-link text-danger">
			logout
		</a>
</div>
@endsection