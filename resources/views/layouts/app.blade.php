<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Landing page, Template, Registration, Landing">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <title>Crystal - Bootstrap 4 Template</title>

    <link rel="stylesheet" href="{{ url('css/landing_page/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/landing_page/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/landing_page/line-icons.css') }}">
    <link rel="stylesheet" href="{{ url('css/landing_page/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ url('css/landing_page/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ url('css/landing_page/nivo-lightbox.css') }}">
    <link rel="stylesheet" href="{{ url('css/landing_page/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ url('css/landing_page/animate.css') }}">
    <link rel="stylesheet" href="{{ url('css/landing_page/color-switcher.css') }}">
    <link rel="stylesheet" href="{{ url('css/landing_page/menu_sideslide.css') }}">
    <link rel="stylesheet" href="{{ url('css/landing_page/main.css') }}">
    <link rel="stylesheet" href="{{ url('css/landing_page/responsive.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ url('css/landing_page/colors/preset.css') }}" media="screen" />
</head>
<body>

<header id="slider-area">
    <div class="menu-wrap">
        <nav class="menu">
            <div class="icon-list navbar-collapse">
                <div class="about-info">
                    <h3 class="sidebar-title">About</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. sequi ducimus. Voluptate ab esse maiores corporis.</p>
                </div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#">Purchase Now</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#">Support</a>
                    </li>
                </ul>
            </div>
        </nav>
        <button class="close-button" id="close-button"><i class="lnr lnr-cross"></i></button>
    </div>
    <nav class="navbar navbar-expand-md fixed-top scrolling-navbar mainmenu-area">
        <div class="container">
            <a class="navbar-brand" href="index-2.html"><span class="lnr lnr-diamond"></span> CRYSTAL</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="lnr lnr-menu"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto w-100 justify-content-end">
                    @if (Route::has('login'))
                        @auth
                            <li class="nav-item">
                                <a class="nav-link page-scroll" href="{{ url('/#') }}">Home</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link page-scroll" href="{{ url('/login') }}">Login</a>
                            </li>

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link page-scroll" href="{{ url('/register') }}">Register</a>
                                </li>
                            @endif
                        @endauth
                    @endif
                    <li class="nav-item">
                        <button class="menu-button" id="open-button"><i class="lnr lnr-menu"></i></button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>


<section id="contact" class="section">
    <div class="contact-form">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-9">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</section>


<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="social-icons">
                    <ul>
                        <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li class="dribbble"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    </ul>
                </div>
                <div class="site-info">
                    <p>All copyrights reserved &copy; 2017 - Designed & Developed by <a rel="nofollow" href="https://uideck.com/">UIdeck</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>


<a href="#" class="back-to-top">
    <i class="lnr lnr-arrow-up"></i>
</a>
<div id="loader">
    <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
    </div>
</div>

<script src="{{ url('js/landing_page/jquery-min.js') }}"></script>
<script src="{{ url('js/landing_page/popper.min.js') }}"></script>
<script src="{{ url('js/landing_page/bootstrap.min.js') }}"></script>
<script src="{{ url('js/landing_page/classie.js') }}"></script>
<script src="{{ url('js/landing_page/jquery.mixitup.js') }}"></script>
<script src="{{ url('js/landing_page/nivo-lightbox.js') }}"></script>
<script src="{{ url('js/landing_page/owl.carousel.js') }}"></script>
<script src="{{ url('js/landing_page/jquery.stellar.min.js') }}"></script>
<script src="{{ url('js/landing_page/jquery.nav.js') }}"></script>
<script src="{{ url('js/landing_page/scrolling-nav.js') }}"></script>
<script src="{{ url('js/landing_page/jquery.easing.min.js') }}"></script>
<script src="{{ url('js/landing_page/wow.js') }}"></script>
<script src="{{ url('js/landing_page/menu.js') }}"></script>
<script src="{{ url('js/landing_page/jquery.counterup.min.js') }}"></script>
<script src="{{ url('js/landing_page/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ url('js/landing_page/waypoints.min.js') }}"></script>
<script src="{{ url('js/landing_page/form-validator.min.js') }}"></script>
<script src="{{ url('js/landing_page/contact-form-script.js') }}"></script>
<script src="{{ url('js/landing_page/main.js') }}"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHo_WtZ2nIYCgCLf7sINZaqcrpqSDio9o"></script>

<script type="text/javascript">
    var map;
    var defult = new google.maps.LatLng(44.2072183, -101.3681486);
    var mapCoordinates = new google.maps.LatLng(44.2072183, -101.3681486);


    var markers = [];
    var image = new google.maps.MarkerImage(
        'img/map-marker.png',
        new google.maps.Size(84, 70),
        new google.maps.Point(0, 0),
        new google.maps.Point(60, 60)
    );

    function addMarker() {
        markers.push(new google.maps.Marker({
            position: defult,
            raiseOnDrag: false,
            icon: image,
            map: map,
            draggable: false
        }));

    }

    function initialize() {
        var mapOptions = {
            backgroundColor: "#fff",
            zoom: 8,
            disableDefaultUI: true,
            center: mapCoordinates,
            zoomControl: false,
            scaleControl: false,
            scrollwheel: false,
            disableDoubleClickZoom: true,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            styles: [{
                "featureType": "landscape.natural",
                "elementType": "geometry.fill",
                "stylers": [{
                    "color": "#ffffff"
                }]
            }, {
                "featureType": "landscape.man_made",
                "stylers": [{
                    "color": "#ffffff"
                }, {
                    "visibility": "off"
                }]
            }, {
                "featureType": "water",
                "stylers": [{
                    "color": "#80C8E5"
                }, {
                    "saturation": 0
                }]
            }, {
                "featureType": "road.arterial",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#999999"
                }]
            }, {
                "elementType": "labels.text.stroke",
                "stylers": [{
                    "visibility": "off"
                }]
            }, {
                "elementType": "labels.text",
                "stylers": [{
                    "color": "#333333"
                }]
            }

                , {
                    "featureType": "road.local",
                    "stylers": [{
                        "color": "#dedede"
                    }]
                }, {
                    "featureType": "road.local",
                    "elementType": "labels.text",
                    "stylers": [{
                        "color": "#666666"
                    }]
                }, {
                    "featureType": "transit.station.bus",
                    "stylers": [{
                        "saturation": -57
                    }]
                }, {
                    "featureType": "road.highway",
                    "elementType": "labels.icon",
                    "stylers": [{
                        "visibility": "off"
                    }]
                }, {
                    "featureType": "poi",
                    "stylers": [{
                        "visibility": "off"
                    }]
                }

            ]

        };
        map = new google.maps.Map(document.getElementById('google-map'), mapOptions);
        addMarker();

    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>
</body>
</html>
