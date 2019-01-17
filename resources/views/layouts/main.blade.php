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
                            class="nav-icon material-icons">public</span> Home</a></li>
                <li class="{{ Request::is('admin/message') ? 'active' : '' }}" title="Theme Settings"><a href="{{url('/admin/message')}}"><span class="nav-icon material-icons ">color_lens</span>
                        List Message </a>
                </li>
                <li class="{{ Request::is('admin/chat/with') ? 'active' : '' }}"><a href="{{url('/admin/chat/with')}}" title="Layout Options"><span class="nav-icon material-icons">dashboard</span> Chat<span class="toogle-sub-nav material-icons">keyboard_arrow_right</span></a>
                    <ul class="sub-nav">
                        <li><a href="{{url('/admin/chat/with')}}" title="Top Navigation">Kemal</a></li>
                        <li><a href="{{url('/admin/chat/with')}}" title="Fixed Layout">Muhammad</a></li>
                        <li><a href="{{url('/admin/chat/with')}}" title="Compact Menu">Galang</a></li>
                    </ul>
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
                            <a class="dropdown-item" target="_blank"
                               href="https://themeforest.net/item/brio-web-app-bootstrap-admin-template-dashboard/9529051/support">Help
                                & Support</a>
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


<div class="modal fade" id="switchApp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header px-4">
                <h5 class="modal-title" id="exampleModalLabel">Select Application</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="material-icons ">close</span>
                </button>
            </div>
            <div class="modal-body p-4">

                <div class="row align-items-stretch app-switcher">
                    <div class="col-lg-3 col-6 mb-4">
                        <a href="index-2.html" class="text-dark">
                            <div class="card h-100">
                                <div class="card-body text-center">
                                    <span class="material-icons md-48 " style="color:#21C3E0;">bubble_chart</span>
                                    <p class="weight-400 m-0">Dashboard</p>
                                    <small class="weight-300 text-muted">This is some text within a card body.</small>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-6 mb-4">
                        <a href="ecommerce-dashboard.html" class="text-dark">
                            <div class="card h-100">
                                <div class="card-body text-center">
                                    <span class="material-icons md-48 text-primary">security</span>
                                    <p class="weight-400 m-0">Ecommerce</p>
                                    <small class="weight-300 text-muted">This is some text within a card body.</small>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-6 mb-4">
                        <a href="mailbox.html" class="text-dark">
                            <div class="card h-100 active-app">
                                <div class="card-body text-center">
                                    <span class="material-icons md-48 text-danger">blur_on</span>
                                    <p class="weight-400 m-0">Mail Box</p>
                                    <small class="weight-300 text-muted">This is some text within a card body.</small>
                                    <span class="material-icons app-selected md-16">check</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-6 mb-4">
                        <a href="blogger-feed-list.html" class="text-dark">
                            <div class="card h-100">
                                <div class="card-body text-center">
                                    <span class="material-icons md-48 text-warning">camera</span>
                                    <p class="weight-400 m-0">Blogger</p>
                                    <small class="weight-300 text-muted">This is some text within a card body.</small>
                                </div>
                            </div>
                        </a>
                    </div>


                    <div class="col-lg-3 col-6 mb-lg-0 mb-4">
                        <a href="task-manager.html" class="text-dark">
                            <div class="card h-100">
                                <div class="card-body text-center">
                                    <span class="material-icons md-48" style="color:#f98e69;">leak_add</span>
                                    <p class="weight-400 m-0">Task Manager</p>
                                    <small class="weight-300 text-muted">This is some text within a card body.</small>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-6 mb-lg-0 mb-4">
                        <a href="notes.html" class="text-dark">
                            <div class="card h-100">
                                <div class="card-body text-center">
                                    <span class="material-icons md-48 text-success">color_lens</span>
                                    <p class="weight-400 m-0">Notes</p>
                                    <small class="weight-300 text-muted">This is some text within a card body.</small>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-6 ">
                        <a href="file-uploder.html" class="text-dark">
                            <div class="card h-100">
                                <div class="card-body text-center">
                                    <span class="material-icons md-48 " style="color:#9b84fb">category</span>
                                    <p class="weight-400 m-0">File Manager</p>
                                    <small class="weight-300 text-muted">This is some text within a card body.</small>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-6 ">
                        <a href="photos-videos.html" class="text-dark">
                            <div class="card h-100">
                                <div class="card-body text-center">
                                    <span class="material-icons md-48 text-muted">layers</span>
                                    <p class="weight-400 m-0">Videos & Photos</p>
                                    <small class="weight-300 text-muted">This is some text within a card body.</small>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
            <div class="modal-footer px-4">
                <div class="custom-control custom-checkbox mr-auto">
                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1">Default open this application</label>
                </div>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Switch Application</button>
            </div>
        </div>
    </div>
</div>


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


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-56821827-7"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'UA-56821827-7');
</script>

</body>
</html>
