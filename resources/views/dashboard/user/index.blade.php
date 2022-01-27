@extends('dashboard.layouts.app')
@section('title','All User - Famoney App')
@section('content')
<div class="container">

	<h1 class="fs-1 fw-bolder mt-2 mb-2">
		All User
	</h1>

	<table class="table table-hover" id="table_user">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                        	@foreach($user as $us)
                        	<tr>
                        		<td>{{$loop->iteration}}</td>
                        		<td>{{$us->name}}
                        			<a class="btn btn-sm btn-warning"  href="/dashboard/user/{{$us->id}}/admin">admin</a>
                        			<a class="btn btn-sm btn-dark" href="/dashboard/user/{{$us->id}}/user">user</a>
                        		</td>
                        		<td>{{$us->email}}</td>
                        		<td>{{$us->role}}</td>
                        		<td>{{date('d-m-Y', strtotime($us->created_at));}}</td>
                        		<td><a href="/dashboard/user/{{$us->id}}/delete" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure? ');"><i class="fas fa-trash"></i></a></td>
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
	                $('#table_user').DataTable();
	            } );
		</script>
@endsection