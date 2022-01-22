@extends('layouts.app')
@section('title','DASHBOARD Famoney App')
@section('content')
	<h1 class="fs-1 fw-bolder">
		{{Auth::user()->name}}
	</h1>
@endsection