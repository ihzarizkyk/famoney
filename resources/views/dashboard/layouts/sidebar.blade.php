<div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom text-center border ms-3 my-3 w-50" id="logo"><b>Sikers</b></div>
                <div class="list-group list-group-flush align-items-center">
                @if(Auth::user()->role == 5)
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 my-3 w-75" href="/dashboard">Dashboard</a>
                    <div class=""></div>
                    @elseif(Auth::user()->role == 1)
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 my-3 w-75" href="/dashboard">Dashboard</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 my-3 w-75" href="/dashboard/documents">Documents</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 my-3 w-75" href="/dashboard/submission">Submission</a>
                    <div class=""></div>
                    @elseif(Auth::user()->role == 3)
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 my-3 w-75" href="/dashboard">Dashboard</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 my-3 w-75" href="/dashboard/documents">Documents</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 my-3 w-75" href="/dashboard/submission">Submission</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 my-3 w-75" href="/dashboard/tracking">Tracking</a>
                    <div class=""></div>
                    @elseif(Auth::user()->role == 4)
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 my-3 w-75" href="/dashboard">Dashboard</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 my-3 w-75" href="/dashboard/documents">Documents</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 my-3 w-75" href="/dashboard/tracking">Tracking</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 my-3 w-75" href="/dashboard/legalization">Legalization</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 my-3 w-75" href="/dashboard/legalization/report">Report</a>
                    <div class=""></div>
                    @else
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 my-3 w-75" href="/dashboard">Dashboard</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 my-3 w-75" href="/dashboard/documents">Documents</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 my-3 w-75" href="/dashboard/submission">Submission</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 my-3 w-75" href="/dashboard/user">User Management</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 my-3 w-75" href="/dashboard/tracking">Tracking</a>
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
                                    @if(Auth::user()->role == 5)
                                    Tamu
                                    @elseif(Auth::user()->role == 1)
                                    Unit Pelaksana
                                    @elseif(Auth::user()->role == 2)
                                    Unit Pengelola
                                    @elseif(Auth::user()->role == 3)
                                    Legal
                                    @elseif(Auth::user()->role == 4)
                                    Pimpinan
                                    @endif
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#!">
                                        {{Auth::user()->name}}
                                        </a>
                                        <a class="dropdown-item" href="#">About</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="/auth/dashboard/logout">Logout</a>
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