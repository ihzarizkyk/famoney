@extends('dashboard.layouts.app')
@section('title','Report - Famoney App')
@section('content')
<div class="container">

	<h1 class="fs-1 fw-bolder mt-2 mb-2">
		Money Report
	</h1>

	<a href="/dashboard/report/all" class="btn btn-sm btn-success mb-2"><i class="fas fa-print"></i> Print All</a>

	<table class="table table-hover" id="table_report">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Keterangan</th>
                                <th>Kategori</th>
                                <th>Nominal</th>
                                <th>Tanggal</th>
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
	                $('#table_report').DataTable();
	            } );
		</script>
@endsection