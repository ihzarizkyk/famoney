<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title')</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel=”stylesheet” href=" https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <link rel="stylesheet" href="{{asset('css/sidebar.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.css">
</head>
<body>

<div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-dark" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom text-center border ms-3 my-3 w-50" id="logo"><b>Famoney</b>&nbsp;&nbsp;</div>
                <div class="list-group list-group-flush align-items-center">
                @if(Auth::user()->role == 'user')
      				<a class="list-group-item list-group-item-action list-group-item-light p-3 my-3 w-75" href="#">&nbsp;Hi, {{Auth::user()->name}}!</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 my-3 w-75" href="/dashboard">&nbsp;&nbsp;<i class="fas fa-tachometer-alt"></i> Dashboard</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 my-3 w-75" href="/dashboard/myprofile">&nbsp;&nbsp;<i class="fas fa-user"></i> Profile</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 my-3 w-75" href="/dashboard/mymoney">&nbsp;&nbsp;<i class="fas fa-money-check"></i> My Money</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 my-3 w-75" href="/dashboard/report">&nbsp;&nbsp;<i class="fas fa-file-alt"></i> Report</a>
                    <div class=""></div>
                    @elseif(Auth::user()->role == 'admin')
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 my-3 w-75" href="#">&nbsp;Hi, {{Auth::user()->name}}!</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 my-3 w-75" href="/dashboard">&nbsp;&nbsp;<i class="fas fa-tachometer-alt"></i> Dashboard</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 my-3 w-75" href="/dashboard/myprofile">&nbsp;&nbsp;<i class="fas fa-user"></i> Profile</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 my-3 w-75" href="/dashboard/user">&nbsp;&nbsp;<i class="fas fa-user"></i> User Management</a>
                    <div class=""></div>
                    @endif
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-fluid">
                        <button class="btn btn-primary" id="sidebarToggle">Menu</button>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                <li class="nav-item active"><a class="nav-link" href="#!">Dashboard</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    @if(Auth::user()->role == 'user')
                                    Pengguna
                                    @elseif(Auth::user()->role == 'admin')
                                    Admin
                                    @endif
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#!">
                                        {{Auth::user()->name}}
                                        </a>
                                        <a class="dropdown-item" href="#">About</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="/auth/logout">Logout</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- Page content-->
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </div>

@yield('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="{{asset('js/scripts.js')}}"></script>
@stack('script')
</body>
</html>