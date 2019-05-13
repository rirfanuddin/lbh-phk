<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" href="{{ url('img/panel/favicon.ico')}}">

    <!-- Messgaes CSS -->
    <link href="{{ url('css/panel/pages/messages.css')}}" rel="stylesheet">

    <!-- Base CSS -->
    <link rel="stylesheet" href="{{ url('css/panel/basestyle/style.css')}}">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Date Range Picker -->
    <link rel="stylesheet" type="text/css" href="{{ url('css/panel/daterangepicker/daterangepicker.css')}}"/>

    <!-- Full Calendar Icons -->
    <link href="{{ url('css/panel/fullcalendar/fullcalendar.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ url('css/custom.css')}}" rel="stylesheet">

    <title>Admin LBH Payung Hitam Keadilan</title>

</head>

<body>

<!-- Pre Loader-->
<div class="loader-wrapper">
    <div class="spinner">
        <svg viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
            <circle class="length" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="28"></circle>
        </svg>
        <svg viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
            <circle fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="28"></circle>
        </svg>
        <svg viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
            <circle fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="28"></circle>
        </svg>
        <svg viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
            <circle fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="28"></circle>
        </svg>
    </div>
</div>
<!-- Pre Loader-->


<section class="wrapper">

    <!-- SIDEBAR -->
    <aside class="sidebar">
        <nav class="navbar navbar-dark bg-primary">
            <a class="navbar-brand m-0 py-2 brand-title" href="#">Admin LBH</a>
            <span></span>
            <a class="navbar-brand py-2 material-icons toggle-sidebar" href="#">menu</a>
        </nav>

        <nav class="navigation">
            <ul>
                <li class="{{ Request::is('admin/home') ? 'active' : '' }}"><a href="{{url('/admin/home')}}" title="Dashboard"><span
                            class="nav-icon material-icons">dashboard</span> Home</a></li>
                <li class="{{ Request::is('admin/user') ? 'active' : '' }}" title="Daftar User"><a href="{{url('/admin/user')}}"><span class="nav-icon material-icons ">people</span>
                        User </a>
                </li>
                <li class="{{ Request::is('admin/message') ? 'active' : '' }}" title="Pesan"><a href="{{url('/admin/message')}}"><span class="nav-icon material-icons ">message</span>
                        Message </a>
                </li>
            </ul>
        </nav>

    </aside>


    <!--RIGHT CONTENT AREA-->
    <div class="content-area">

        <header class="header sticky-top">
            <nav class="navbar navbar-light bg-white px-sm-4 ">
                <a class="navbar-brand py-2 d-md-none  m-0 material-icons toggle-sidebar" href="#">menu</a>
                <ul class="navbar-nav flex-row ml-auto">
                    <li class="nav-item notification">
                        <a href="#" id="notificationDropdown" data-toggle="dropdown" class="nav-link"><span
                                class="material-icons align-middle">notifications_none</span></a>
                        <div class="dropdown-menu p-0 dropdown-lg notificationDropdown dropdown-menu-right"
                             aria-labelledby="notificationDropdown">

                            <a class="dropdown-item py-3 border-bottom" href="#">
                                <p class="text-muted mb-1">
                                    <small>John Doe Application</small>
                                </p>
                                <div class="progress" style="height:8px;">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 25%"
                                         aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a>
                            <a class="dropdown-item py-3 border-bottom" href="#">
                                <p class="text-muted mb-1">
                                    <small>Akshay Application</small>
                                </p>
                                <div class="progress" style="height:8px;">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 75%"
                                         aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a>
                            <a class="dropdown-item whitespace-normal py-3 border-bottom" href="#">
                                <div class="media">
                                    <img class="mr-3 rounded" width="26" src="{{ url('img/panel/user.png')}}">
                                    <div class="media-body">
                                        <h6 class="m-0 weight-400">Media heading</h6>
                                        <small class="text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel
                                            metus scelerisque ante.
                                        </small>
                                    </div>
                                </div>
                            </a>

                            <a class="dropdown-item py-3 border-bottom" href="#">
                                <p class="text-muted mb-1">
                                    <small>Uploading Documents</small>
                                </p>
                                <div class="progress" style="height:8px;">
                                    <div class="progress-bar-animated bg-primary progress-bar-striped"
                                         role="progressbar" style="width: 40%" aria-valuenow="10" aria-valuemin="0"
                                         aria-valuemax="100"></div>
                                </div>
                            </a>
                            <a class="dropdown-item py-3 border-bottom" href="#">
                                <span class="badge badge-pill badge-danger mr-2">Warning</span>
                                <small class="text-muted">Somthing went wrong !</small>
                            </a>
                            <button type="button" class="btn btn-light btn-sm btn-block">View All</button>
                        </div>
                    </li>
                    <li class="nav-item ml-sm-3 user-logedin dropdown">
                        <a href="#" id="userLogedinDropdown" data-toggle="dropdown"
                           class="nav-link weight-400 dropdown-toggle"><img src="{{ url('img/panel/user.png')}}"
                                                                            class="mr-2 rounded" width="28">{{ Auth::user()->name }}</a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userLogedinDropdown">
                            <a class="dropdown-item" href="profile.html">My Account</a>
                            <a class="dropdown-item" href="profile.html">Account Settings</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>

                </ul>
            </nav>
        </header>


        <div class="content-wrapper">

            @yield('content')


            <footer class="footer">
                <p class="text-muted m-0">
                    <small class="float-right">Made with <span class="material-icons md-16 text-danger align-middle">favorite</span>
                        by Akshay Kumar
                    </small>
                    <small>FreakPixels © 2016–2018 - freakpixels.com</small>
                </p>
            </footer>


        </div>


    </div>


</section>


<!-- ChartJS -->
<script src="{{ url('js/panel/chartjs/Chart.js')}}"></script>
<script src="{{ url('js/panel/chartjs/utils.js')}}"></script>

<script src="{{ url('js/panel/lib/moment.min.js')}}"></script>
<script src="{{ url('js/panel/lib/jquery.min.js')}}"></script>
<script src="{{ url('js/panel/lib/popper.min.js')}}"></script>
<script src="{{ url('js/panel/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{ url('js/panel/chosen-js/chosen.jquery.js')}}"></script>
<script src="{{ url('js/panel/fullcalendar/fullcalendar.js')}}"></script>

<script src="{{ url('js/panel/daterangepicker/daterangepicker.min.js')}}"></script>
<script src="{{ url('js/panel/custom.html')}}"></script>

<script src="{{ url('js/panel/pages/dashboard.script.js')}}"></script>

@yield('script')

</body>
</html>
