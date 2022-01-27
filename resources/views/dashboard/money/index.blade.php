@extends('dashboard.layouts.app')
@section('title','My Money - Famoney App')
@section('content')
<div class="container">

	<h1 class="fs-1 fw-bolder mt-2 mb-2">
		My Money
	</h1>

	<a href="{{route('money.new')}}" class="btn btn-md btn-success mb-3 btn-end">
		Create
	</a>

	@if($total == 0)
	<div class="alert bg-primary text-white">Anda menyimpan atau mengeluarkan uang berapapun</div>
	@elseif($pengeluaran == $limit)
	<div class="alert fw-bold bg-warning">Pengeluaran anda melebihi batas wajar</div>
	@endif

	@if($message = session('success'))
	<div class="alert bg-success fw-bold text-white">{{$message}}</div>
	@endif

	@if($message = session('delete'))
	<div class="alert bg-success fw-bold text-white">{{$message}}</div>
	@endif

	<table class="table table-hover" id="table_money">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Keterangan</th>
                                <th>Kategori</th>
                                <th>Nominal</th>
                                <th>Tanggal</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                        	@foreach($money as $mn)
                        	<tr>
                        		<td>{{$loop->iteration}}</td>
                        		<td>{{$mn->description}}</td>
                        		<td>{{$mn->category->name}}</td>
                        		<td>{{$mn->nominal}}</td>
                        		<td>{{date('d-m-Y', strtotime($mn->created_at));}}</td>
                        		<td><a href="/dashboard/mymoney/{{$mn->id}}/delete" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure? ');"><i class="fas fa-trash"></i></a></td>
                        	</tr>
                        	@endforeach
                        </tbody>
                    </table>

</div>
@endsection
@section('script')
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js"></script>

		<script>
			$(document).ready( function () {
	                $('#table_money').DataTable();
	            } );
		</script>
@endsection