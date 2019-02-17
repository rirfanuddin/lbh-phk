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
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#slider-area">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#portfolios">Works</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#pricing">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#team">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#blog">Blog</a>
                    </li>
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

    <div id="carousel-area">
        <div id="carousel-slider" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-slider" data-slide-to="1"></li>
                <li data-target="#carousel-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="{{ url('img/landing_page/slider/bg-1.jpg') }}" alt="">
                    <div class="carousel-caption">
                        <h1>Ultimate Solution for Your<br>Website or Landing Page</h1>
                        <p>High-quality Responsive Website Template Based on Bootstrap 4 to Create Complete Website in Minutes</p>
                        <a href="#why" class="btn btn-lg btn-border">GET STARTED!</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ url('img/landing_page/slider/bg-2.jpg') }}" alt="">
                    <div class="carousel-caption">
                        <h1 class="text-center">We Promise You'll Be<br>Impressed With Crystal</h1>
                        <p>High-quality Responsive Website Template Based on Bootstrap 4 to Create Complete Website in Minutes</p>
                        <a href="#" class="btn btn-lg btn-common">Download</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ url('img/landing_page/slider/bg-3.jpg') }}" alt="">
                    <div class="carousel-caption">
                        <h1>Create Bootstrap 4 Powered<br>Website in Minutes</h1>
                        <p>High-quality Responsive Website Template Based on Bootstrap 4 to Create Complete Website in Minutes</p>
                        <a href="{{ url('/register') }}" class="btn btn-lg btn-common">Register</a>
                        <a href="{{ url('/login') }}" class="btn btn-lg btn-border">Login</a>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel-slider" role="button" data-slide="prev">
                <i class="lnr  lnr-arrow-left"></i>
            </a>
            <a class="carousel-control-next" href="#carousel-slider" role="button" data-slide="next">
                <i class="lnr  lnr-arrow-right"></i>
            </a>
        </div>
    </div>
</header>


<section id="services" class="section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Our <span>Services</span></h2>
            <hr class="lines wow zoomIn" data-wow-delay="0.3s">
            <p class="section-subtitle wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy <br> nibh euismod tincidunt ut laoreet dolore magna.</p>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="item-boxes wow fadeInDown" data-wow-delay="0.2s">
                    <div class="icon">
                        <i class="lnr lnr-pencil"></i>
                    </div>
                    <h4>Content Writing</h4>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="item-boxes wow fadeInDown" data-wow-delay="0.4s">
                    <div class="icon">
                        <i class="lnr lnr-cog"></i>
                    </div>
                    <h4>Web Development</h4>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="item-boxes wow fadeInDown" data-wow-delay="0.6s">
                    <div class="icon">
                        <i class="lnr lnr-chart-bars"></i>
                    </div>
                    <h4>Graphic Design</h4>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="item-boxes wow fadeInDown" data-wow-delay="0.8s">
                    <div class="icon">
                        <i class="lnr lnr-layers"></i>
                    </div>
                    <h4>UI/UX Design</h4>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="item-boxes wow fadeInDown" data-wow-delay="1s">
                    <div class="icon">
                        <i class="lnr lnr-tablet"></i>
                    </div>
                    <h4>App Development</h4>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="item-boxes wow fadeInDown" data-wow-delay="1.2s">
                    <div class="icon">
                        <i class="lnr lnr-briefcase"></i>
                    </div>
                    <h4>Digital Marketing</h4>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="features" class="section" data-stellar-background-ratio="0.2">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Amazing <span>Features</span></h2>
            <hr class="lines">
            <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy <br> nibh euismod tincidunt ut laoreet dolore magna.</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="content-left text-right">
                    <div class="box-item left">
<span class="icon">
<i class="lnr lnr-rocket"></i>
</span>
                        <div class="text">
                            <h4>Bootstrap 4 Based</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                    <div class="box-item left">
<span class="icon">
<i class="lnr lnr-laptop-phone"></i>
</span>
                        <div class="text">
                            <h4>Fully Responsive</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                    <div class="box-item left">
<span class="icon">
<i class="lnr lnr-cog"></i>
</span>
                        <div class="text">
                            <h4>HTML5, CSS3 & LESS</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="show-box">
                    <img src="{{ url('img/landing_page/features/feature.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="content-right text-left">
                    <div class="box-item right">
<span class="icon">
<i class="lnr lnr-select"></i>
</span>
                        <div class="text">
                            <h4>4 Variations</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                        </div>
                    </div>
                    <div class="box-item right">
<span class="icon">
<i class="lnr lnr-magic-wand"></i>
</span>
                        <div class="text">
                            <h4>Feature-rich Sections</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                    <div class="box-item right">
<span class="icon">
<i class="lnr lnr-spell-check"></i>
</span>
                        <div class="text">
                            <h4>Ajax Contact Form</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="video-promo section" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="video-promo-content text-center">
                    <h2 class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">Our Introductory Video</h2>
                    <p class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">Learn more about us, its only 30mins</p>
                    <a href="https://www.youtube.com/watch?v=r44RKWyfcFw" class="video-popup"><i class="lnr lnr-film-play"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="portfolios" class="section">

    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Our <span>Works</span></h2>
            <hr class="lines">
            <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy <br> nibh euismod tincidunt ut laoreet dolore magna.</p>
        </div>
        <div class="row">
            <div class="col-md-12">

                <div class="controls text-center">
                    <a class="filter active btn btn-common" data-filter="all">
                        All
                    </a>
                    <a class="filter btn btn-common" data-filter=".design">
                        Design
                    </a>
                    <a class="filter btn btn-common" data-filter=".development">
                        Development
                    </a>
                    <a class="filter btn btn-common" data-filter=".print">
                        Print
                    </a>
                </div>

            </div>

            <div id="portfolio" class="row">
                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix development print">
                    <div class="portfolio-item">
                        <div class="shot-item">
                            <a class="overlay lightbox" href="{{ url('img/landing_page/portfolio/img1.jpg') }}">
                                <img src="{{ url('img/landing_page/portfolio/img1.jpg') }}" alt="" />
                                <i class="lnr lnr-plus-circle item-icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix design print">
                    <div class="portfolio-item">
                        <div class="shot-item">
                            <a class="overlay lightbox" href="{{ url('img/landing_page/portfolio/img2.jpg') }}">
                                <img src="{{ url('img/landing_page/portfolio/img2.jpg') }}" alt="" />
                                <i class="lnr lnr-plus-circle item-icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix development">
                    <div class="portfolio-item">
                        <div class="shot-item">
                            <a class="overlay lightbox" href="{{ url('img/landing_page/portfolio/img3.jpg') }}">
                                <img src="{{ url('img/landing_page/portfolio/img3.jpg') }}" alt="" />
                                <i class="lnr lnr-plus-circle item-icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix development design">
                    <div class="portfolio-item">
                        <div class="shot-item">
                            <a class="overlay lightbox" href="{{ url('img/landing_page/portfolio/img4.jpg') }}">
                                <img src="{{ url('img/landing_page/portfolio/img4.jpg') }}" alt="" />
                                <i class="lnr lnr-plus-circle item-icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix development">
                    <div class="portfolio-item">
                        <div class="shot-item">
                            <a class="overlay lightbox" href="{{ url('img/landing_page/portfolio/img5.jpg') }}">
                                <img src="{{ url('img/landing_page/portfolio/img5.jpg') }}" alt="" />
                                <i class="lnr lnr-plus-circle item-icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix print design">
                    <div class="portfolio-item">
                        <div class="shot-item">
                            <a class="overlay lightbox" href="{{ url('img/landing_page/portfolio/img6.jpg') }}">
                                <img src="{{ url('img/landing_page/portfolio/img6.jpg') }}" alt="" />
                                <i class="lnr lnr-plus-circle item-icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>


<div id="pricing" class="section pricing-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Pricing <span>Plans</span></h2>
            <hr class="lines">
            <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy <br> nibh euismod tincidunt ut laoreet dolore magna.</p>
        </div>
        <div class="row pricing-tables">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="pricing-table table-left">
                    <div class="icon">
                        <i class="lnr lnr-rocket"></i>
                    </div>
                    <div class="pricing-details">
                        <h2>Starter Plan</h2>
                        <span>Free</span>
                        <ul>
                            <li>Consectetur adipiscing</li>
                            <li>Nunc luctus nulla et tellus</li>
                            <li>Suspendisse quis metus</li>
                            <li>Vestibul varius fermentum erat</li>
                        </ul>
                    </div>
                    <div class="plan-button">
                        <a href="#" class="btn btn-common">Get Plan</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="pricing-table">
                    <div class="icon">
                        <i class="lnr lnr-heart"></i>
                    </div>
                    <div class="pricing-details">
                        <h2>Popular Plan</h2>
                        <span>$3.99</span>
                        <ul>
                            <li>Consectetur adipiscing</li>
                            <li>Nunc luctus nulla et tellus</li>
                            <li>Suspendisse quis metus</li>
                            <li>Vestibul varius fermentum erat</li>
                        </ul>
                    </div>
                    <div class="plan-button">
                        <a href="#" class="btn btn-common">Buy Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="pricing-table table-left">
                    <div class="icon">
                        <i class="lnr lnr-magic-wand"></i>
                    </div>
                    <div class="pricing-details">
                        <h2>Premium Plan</h2>
                        <span>$9.50</span>
                        <ul>
                            <li>Consectetur adipiscing</li>
                            <li>Nunc luctus nulla et tellus</li>
                            <li>Suspendisse quis metus</li>
                            <li>Vestibul varius fermentum erat</li>
                        </ul>
                    </div>
                    <div class="plan-button">
                        <a href="#" class="btn btn-common">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="counters section" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="facts-item">
                    <div class="icon">
                        <i class="lnr lnr-magic-wand"></i>
                    </div>
                    <div class="fact-count">
                        <h3><span class="counter">100</span>%</h3>
                        <h4>Faster</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="facts-item">
                    <div class="icon">
                        <i class="lnr lnr-coffee-cup"></i>
                    </div>
                    <div class="fact-count">
                        <h3><span class="counter">700</span></h3>
                        <h4>Cup of Coffee</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="facts-item">
                    <div class="icon">
                        <i class="lnr lnr-user"></i>
                    </div>
                    <div class="fact-count">
                        <h3><span class="counter">10000</span>+</h3>
                        <h4>Active Clients</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="facts-item">
                    <div class="icon">
                        <i class="lnr lnr-heart"></i>
                    </div>
                    <div class="fact-count">
                        <h3><span class="counter">1689</span></h3>
                        <h4>Peoples Love</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="testimonial" class="section">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-10">
                <div class="touch-slider owl-carousel owl-theme">
                    <div class="testimonial-item">
                        <img src="{{ url('img/landing_page/testimonial/customer1.png') }}" alt="Client Testimonoal" />
                        <div class="testimonial-text">
                            <p>Morbi eget dictum enim. Praesent sed quam sit amet lorem tempor rhoncus. <br>In hac habitasse platea dictumst. Vivamus in accumsan ex</p>
                            <h3>Johnathan Doe</h3>
                            <span>Marketing Head Matrix media</span>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <img src="{{ url('img/landing_page/testimonial/customer2.png') }}" alt="Client Testimonoal" />
                        <div class="testimonial-text">
                            <p>Morbi eget dictum enim. Praesent sed quam sit amet lorem tempor rhoncus. <br>In hac habitasse platea dictumst. Vivamus in accumsan ex</p>
                            <h3>Oidila Matik</h3>
                            <span>President Lexo Inc</span>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <img src="{{ url('img/landing_page/testimonial/customer3.png') }}" alt="Client Testimonoal" />
                        <div class="testimonial-text">
                            <p>Morbi eget dictum enim. Praesent sed quam sit amet lorem tempor rhoncus. <br>In hac habitasse platea dictumst. Vivamus in accumsan ex</p>
                            <h3>- Alex Dattilo</h3>
                            <span>CEO Optima Inc</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<section id="download" class="section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title"><span>Download</span> Our App</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="download-area text-center">
                    <a href="#" class="btn btn-border"><i class="fa fa-apple"></i>Download Now</a>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="team" class="section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Our <span>Team</span></h2>
            <hr class="lines">
            <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy <br> nibh euismod tincidunt ut laoreet dolore magna.</p>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="single-team">
                    <img src="{{ url('img/landing_page/team/team1.png') }}" alt="">
                    <div class="team-details">
                        <div class="overlay"></div>
                        <div class="team-inner">
                            <h4 class="team-title">Jhon Doe</h4>
                            <p>Chief Technical Officer</p>
                            <ul class="social-list">
                                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="single-team">
                    <img src="{{ url('img/landing_page/team/team2.png') }}" alt="">
                    <div class="team-details">
                        <div class="overlay"></div>
                        <div class="team-inner">
                            <h4 class="team-title">Luke Chesser</h4>
                            <p>Marketing Executive</p>
                            <ul class="social-list">
                                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="single-team">
                    <img src="{{ url('img/landing_page/team/team3.png') }}" alt="">
                    <div class="team-details">
                        <div class="overlay"></div>
                        <div class="team-inner">
                            <h4 class="team-title">David Givens</h4>
                            <p>Business Manager</p>
                            <ul class="social-list">
                                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="single-team">
                    <img src="{{ url('img/landing_page/team/team4.png') }}" alt="">
                    <div class="team-details">
                        <div class="overlay"></div>
                        <div class="team-inner">
                            <h4 class="team-title">Annie Spratt</h4>
                            <p>Graphic Designer</p>
                            <ul class="social-list">
                                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div id="clients" class="section">

    <div class="container">

        <div class="row" id="clients-scroller">
            <div class="client-item-wrapper">
                <img src="{{ url('img/landing_page/clients/img1.png') }}" alt="">
            </div>
            <div class="client-item-wrapper">
                <img src="{{ url('img/landing_page/clients/img2.png') }}" alt="">
            </div>
            <div class="client-item-wrapper">
                <img src="{{ url('img/landing_page/clients/img3.png') }}" alt="">
            </div>
            <div class="client-item-wrapper">
                <img src="{{ url('img/landing_page/clients/img4.png') }}" alt="">
            </div>
            <div class="client-item-wrapper">
                <img src="{{ url('img/landing_page/clients/img5.png') }}" alt="">
            </div>
            <div class="client-item-wrapper">
                <img src="{{ url('img/landing_page/clients/img6.png') }}" alt="">
            </div>
        </div>
    </div>
</div>


<section id="blog" class="section">

    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Latest <span>Blogs</span></h2>
            <hr class="lines">
            <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy <br> nibh euismod tincidunt ut laoreet dolore magna.</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-item">

                <div class="blog-item-wrapper">
                    <div class="blog-item-img">
                        <a href="single-post.html">
                            <img src="{{ url('img/landing_page/blog/img1.jpg') }}" alt="">
                        </a>
                    </div>
                    <div class="blog-item-text">
                        <h3>
                            <a href="single-post.html">How often should you tweet?</a>
                        </h3>
                        <div class="meta-tags">
                            <span class="date"><i class="lnr lnr-calendar-full"></i>on Mar 23, 2018</span>
                            <span class="comments"><a href="#"><i class="lnr lnr-bubble"></i> 24 Comments</a></span>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...
                        </p>
                        <a href="single-post.html" class="btn btn-common btn-rm">Read More</a>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-item">

                <div class="blog-item-wrapper">
                    <div class="blog-item-img">
                        <a href="single-post.html">
                            <img src="{{ url('img/landing_page/blog/img2.jpg') }}" alt="">
                        </a>
                    </div>
                    <div class="blog-item-text">
                        <h3>
                            <a href="single-post.html">Content is still king</a>
                        </h3>
                        <div class="meta-tags">
                            <span class="date"><i class="lnr lnr-calendar-full"></i>on Mar 29, 2018</span>
                            <span class="comments"><a href="#"><i class="lnr lnr-bubble"></i> 24 Comments</a></span>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...
                        </p>
                        <a href="single-post.html" class="btn btn-common btn-rm">Read More</a>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-item">

                <div class="blog-item-wrapper">
                    <div class="blog-item-img">
                        <a href="single-post.html">
                            <img src="{{ url('img/landing_page/blog/img3.jpg') }}" alt="">
                        </a>
                    </div>
                    <div class="blog-item-text">
                        <h3>
                            <a href="single-post.html">Social media at work</a>
                        </h3>
                        <div class="meta-tags">
                            <span class="date"><i class="lnr lnr-calendar-full"></i>on Mar 21, 2018</span>
                            <span class="comments"><a href="#"><i class="lnr lnr-bubble"></i> 24 Comments</a></span>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...
                        </p>
                        <a href="single-post.html" class="btn btn-common btn-rm">Read More</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


<section id="contact" class="section">
    <div class="contact-form">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-9">
                    <div class="contact-block">
                        <div class="section-header">
                            <h2 class="section-title">Contact <span>Us</span></h2>
                            <hr class="lines">
                        </div>
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required data-error="Please enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Your Email" id="email" class="form-control" name="name" required data-error="Please enter your email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="Subject" id="msg_subject" class="form-control" required data-error="Please enter your subject">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" id="message" placeholder="Your Message" rows="11" data-error="Write your message" required></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="submit-button text-center">
                                        <button class="btn btn-common" id="submit" type="submit">Send Message</button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="toggle-map">
        <a href="#" class="map-icon wow pulse" data-wow-iteration="infinite" data-wow-duration="500ms">
            <i class="lnr lnr-map"></i>
        </a>
    </div>
    <div id="google-map">
    </div>
</section>


<div id="subscribe" class="section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Subscribe <span>Newsletter</span></h2>
            <hr class="lines">
            <p class="section-subtitle">Subscribe to get all latest news from us.</p>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-md-8">
                <form class="text-center form-inline">
                    <input class="mb-20 form-control" name="email" placeholder="Your Email Address">
                    <button class="sub_btn">subscribe</button>
                </form>
            </div>
        </div>
    </div>
</div>


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
