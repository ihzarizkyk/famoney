@extends('dashboard.layouts.app')
@section('title','My Money - Famoney App')
@section('content')
<div class="container">

<div class="card mt-3">
	<div class="card-body">

	<h1 class="fs-1 fw-bolder mt-2 mb-2">
		Store Money
	</h1>

	<a href="/dashboard/mymoney" class="btn btn-md btn-danger mb-3 btn-end">
		Back
	</a>

	<form action="{{route('money.store')}}" class="form" method="POST">
		@csrf
		<div class="form-group">
			<label for="">
				<b>Deskripsi:</b>
			</label>
			<input type="text" class="form-control" name="description" value="{{old('description')}}" required>
		</div>
		<div class="form-group">
			<label for="">
				<b>Nominal:</b>
			</label>
			<input type="number" class="form-control" name="nominal" value="{{old('nominal')}}" required>
		</div>
		<div class="form-group">
			<label for="">
				<b>Category:</b>
			</label>
			<select class="form-control" name="category">
				<option disabled selected>Choose Category</option>
				@foreach($category as $ct)
				<option value="{{$ct->id}}">{{$ct->name}}</option>
				@endforeach
			</select>
		</div>
		<br>
		<input type="submit" class="btn btn-lg btn-success" value="Store">
	</form>
	</div>
</div>

</div>
@endsection