<!DOCTYPE html>

<html lang="en">

<head>

    <!--====== Required meta tags ======-->

    <meta charset="utf-8">

    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <meta name="description" content="Adventure, Tours, Travel">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->

    <title>Tours and Travel HTML Template</title>

    <!--====== Favicon Icon ======-->

    {{-- <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/png"> --}}
    <link rel="icon" type="image/png" sizes="6x6" href="{{ asset('img/logo/logo.jpg') }}">


    <!--====== Google Fonts ======-->

    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!--====== Flaticon css ======-->

    <link rel="stylesheet" href="assets/fonts/flaticon/flaticon_gowilds.css">

    <!--====== FontAwesome css ======-->

    <link rel="stylesheet" href="assets/fonts/fontawesome/css/all.min.css">

    <!--====== Bootstrap css ======-->

    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">

    <!--====== magnific-popup css ======-->

    <link rel="stylesheet" href="assets/vendor/magnific-popup/dist/magnific-popup.css">

    <!--====== Slick-popup css ======-->

    <link rel="stylesheet" href="assets/vendor/slick/slick.css">

    <!--====== Jquery UI css ======-->

    <link rel="stylesheet" href="assets/vendor/jquery-ui/jquery-ui.min.css">

    <!--====== Nice Select css ======-->

    <link rel="stylesheet" href="assets/vendor/nice-select/css/nice-select.css">

    <!--====== Animate css ======-->

    <link rel="stylesheet" href="assets/vendor/animate.css">

    <!--====== Default css ======-->

    <link rel="stylesheet" href="assets/css/default.css">

    <!--====== Style css ======-->

    <link rel="stylesheet" href="assets/css/style.css">


    <style>

.slick-list
{

    background-color: white;

}
    </style>
</head>

<body>

    <!--====== Start Preloader ======-->

    <div class="preloader">

        <div class="loader">

            <div class="pre-shadow"></div>

            <div class="pre-box"></div>

        </div>

    </div><!--====== End Preloader ======-->

    <!--====== Search From ======-->

    <div class="modal fade search-modal" id="search-modal">

        <div class="modal-dialog modal-dialog-centered">

            <div class="modal-content">

                <form>

                    <div class="form_group">

                        <input type="search" class="form_control" placeholder="Search here" name="search">

                        <label><i class="fa fa-search"></i></label>

                    </div>

                </form>

            </div>

        </div>

    </div><!--====== Search From ======-->

    <!--====== Header Area ======-->

    <header class="header-area header-one transparent-header">

        <!--====== Header Navigation ======-->

        <div class="header-navigation navigation-white">

            <div class="nav-overlay"></div>

            <div class="container-fluid">

                <div class="primary-menu">

                    <!--====== Site Branding ======-->

                    <div class="site-branding">

                        <a href="index.html" class="brand-logo"><img class="brandLogo" src="{{asset('img/logo/logo.jpg')}}"
                                alt="Site Logo"></a>

                    </div>

                    <!--====== Nav Menu ======-->

                    <div class="nav-menu">

                        <!--====== Site Branding ======-->

                        <div class="mobile-logo mb-30 d-block d-xl-none">

                            <a href="index.html" class="brand-logo"><img src="{{asset('img/logo/logo.jpg')}}"
                                    alt="Site Logo"></a>

                        </div>

                        <!--=== Nav Search ===-->

                        <div class="nav-search mb-30 d-block d-xl-none ">

                            <form>

                                <div class="form_group">

                                    <input type="email" class="form_control" placeholder="Search Here" name="email"
                                        required>

                                    <button class="search-btn"><i class="fas fa-search"></i></button>

                                </div>

                            </form>

                        </div>

                        <!--====== main Menu ======-->

                        <nav class="main-menu mb-2 mt-2">

                            <ul>

                                <li class="{{ (\Request::route()->getName() == 'home') ? 'active' : ''}}"><a class="text-black menu_nav"  href="{{route('home')}}">Home</a></li>
                                <li  class="{{(\Request::route()->getName() == 'tour') ? 'active' : ''}}"><a class="text-black menu_nav" href="{{route('tour')}}">Tour</a></li>
                                <li  class="{{(\Request::route()->getName() == 'taxi') ? 'active' : ''}}"><a class="text-black menu_nav" href="{{route('taxi')}}">Taxi</a></li>
                                <li  class="{{(\Request::route()->getName() == 'about') ? 'active' : ''}}"><a class="text-black menu_nav" href="{{route('about')}}">About</a></li>
                                <li  class="{{(\Request::route()->getName() == 'contact') ? 'active' : ''}}"><a class="text-black menu_nav" href="{{route('contact')}}">Contact </a></li>

                            </ul>

                        </nav>

                        <!--====== Menu Button ======-->

                        <div class="menu-button mt-40 d-xl-none">

                            <a href="contact.html" class="main-btn secondary-btn">Book Now<i
                                    class="fas fa-paper-plane"></i></a>

                        </div>

                    </div>

                    <!--====== Nav Right Item ======-->

                    <div class="nav-right-item">

                        <div class="menu-button d-xl-block d-none">

                            <a href="contact.html" class="main-btn primary-btn">Book Now<i
                                    class="fas fa-paper-plane"></i></a>

                        </div>

                        <div class="navbar-toggler">

                            <span></span>

                            <span></span>

                            <span></span>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </header><!--====== End Area ======-->

    <!--====== Start Hero Section ======-->

    <section class="hero-section">

        <!--=== Hero Wrapper ===-->

        <div class="hero-wrapper black-bg">

            <!--=== Hero Slider ===-->

            <div class="hero-slider-one">

                <!--=== Single Slider ===-->

                <div class="single-slider">

                    <div class="container-fluid">

                        <div class="row align-items-center">

                            <div class="col-xl-6">

                                <!--=== Hero Content ===-->

                                <div class="hero-content text-black">

                                    <h1 data-animation="fadeInDown" data-delay=".4s">Travel &

                                        Adventure

                                        Camping</h1>

                                    <div class="text-button d-flex align-items-center">

                                        <p data-animation="fadeInLeft" data-delay=".5s">Nunc et dui nullam aliquam eget

                                            velit. Consectetur nulla convallis

                                            viverra quisque eleifend</p>

                                        <div class="hero-button" data-animation="fadeInRight" data-delay=".6s">

                                            <a href="about.html" class="main-btn primary-btn">Explore More<i
                                                    class="fas fa-paper-plane"></i></a>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="col-xl-6">

                                <!--=== Hero Image ===-->

                                <div class="hero-image" data-animation="fadeInRight">

                                    <img src="{{asset('img/slider/slider1.jpg')}}" alt="Hero Image">

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <!--=== Single Slider ===-->

                <div class="single-slider">

                    <div class="container-fluid">

                        <div class="row align-items-center">

                            <div class="col-xl-6">

                                <!--=== Hero Content ===-->

                                <div class="hero-content text-black">

                                    <h1 data-animation="fadeInDown" data-delay=".4s">Travel &

                                        Adventure

                                        Tour</h1>

                                    <div class="text-button d-flex align-items-center">

                                        <p data-animation="fadeInLeft" data-delay=".5s">Nunc et dui nullam aliquam eget

                                            velit. Consectetur nulla convallis

                                            viverra quisque eleifend</p>

                                        <div class="hero-button" data-animation="fadeInRight" data-delay=".6s">

                                            <a href="about.html" class="main-btn primary-btn">Explore More<i
                                                    class="fas fa-paper-plane"></i></a>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="col-xl-6">

                                <!--=== Hero Image ===-->

                                <div class="hero-image" data-animation="fadeInRight">

                                    <img src="{{asset('img/slider/slider-1.webp')}}" alt="Hero Image">

                                </div>

                            </div>

                        </div>

                    </div>

                </div>
                <div class="single-slider">

                    <div class="container-fluid">

                        <div class="row align-items-center">

                            <div class="col-xl-6">

                                <!--=== Hero Content ===-->

                                <div class="hero-content text-black">

                                    <h1 data-animation="fadeInDown" data-delay=".4s">Travel &

                                        Adventure

                                        Tour</h1>

                                    <div class="text-button d-flex align-items-center">

                                        <p data-animation="fadeInLeft" data-delay=".5s">Nunc et dui nullam aliquam eget

                                            velit. Consectetur nulla convallis

                                            viverra quisque eleifend</p>

                                        <div class="hero-button" data-animation="fadeInRight" data-delay=".6s">

                                            <a href="about.html" class="main-btn primary-btn">Explore More<i
                                                    class="fas fa-paper-plane"></i></a>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="col-xl-6">

                                <!--=== Hero Image ===-->

                                <div class="hero-image" data-animation="fadeInRight">

                                    <img src="{{asset('img/slider/slider-2.webp')}}" alt="Hero Image">

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section><!--====== End Hero Section ======-->

    <!--====== Start About Section ======-->

    <section class="about-section pt-100">

        <div class="container-fluid">

            <div class="row justify-content-center">

                <div class="col-xl-6 col-lg-9">

                    <!--=== About Content Box ===-->

                    <div class="about-content-box text-center mb-55 wow fadeInDown">

                        <div class="section-title mb-30">

                            <span class="sub-title">About Company</span>

                            <h2>We Are Most Funning Company

                                About Travel & Tours</h2>

                        </div>

                        <p>Sit amet consectetur. Velit integer eu tincidunt scelerisque. Sodales volutpat neque
                            fermentum

                            malesuada scelerisque massa lacus. Ultrices eget leo cras odio blandit rhoncus eu. At
                            feugiat

                            condimentum massa integer iaculis sit sit. Sagittis vitae quis sed vitae congue</p>

                    </div>

                </div>

            </div>

            <div class="slider-active-4-item wow fadeInUp">

                <!--=== Features Image Item ===-->

                <div class="single-features-item mb-40">

                    <div class="img-holder">

                        <img src="assets/images/features/feat-1.jpg" alt="Features Image">

                        <div class="content">

                            <div class="text">

                                <h4 class="title">Tent Camping

                                    Services</h4>

                                <a href="#" class="icon-btn"><i class="far fa-arrow-right"></i></a>

                            </div>

                            <p>Set unde omnis estenatus voluptatem aperiae.</p>

                        </div>

                    </div>

                </div>

                <!--=== Features Image Item ===-->

                <div class="single-features-item mb-40">

                    <div class="img-holder">

                        <img src="assets/images/features/feat-2.jpg" alt="Features Image">

                        <div class="content">

                            <div class="text">

                                <h4 class="title">Trailers and RV Spots</h4>

                                <a href="#" class="icon-btn"><i class="far fa-arrow-right"></i></a>

                            </div>

                            <p>Set unde omnis estenatus voluptatem aperiae.</p>

                        </div>

                    </div>

                </div>

                <!--=== Features Image Item ===-->

                <div class="single-features-item mb-40">

                    <div class="img-holder">

                        <img src="assets/images/features/feat-3.jpg" alt="Features Image">

                        <div class="content">

                            <div class="text">

                                <h4 class="title">Adventure and Climbing</h4>

                                <a href="#" class="icon-btn"><i class="far fa-arrow-right"></i></a>

                            </div>

                            <p>Set unde omnis estenatus voluptatem aperiae.</p>

                        </div>

                    </div>

                </div>

                <!--=== Features Image Item ===-->

                <div class="single-features-item mb-40">

                    <div class="img-holder">

                        <img src="assets/images/features/feat-4.jpg" alt="Features Image">

                        <div class="content">

                            <div class="text">

                                <h4 class="title">Couple Camping

                                    or Cabin</h4>

                                <a href="#" class="icon-btn"><i class="far fa-arrow-right"></i></a>

                            </div>

                            <p>Set unde omnis estenatus voluptatem aperiae.</p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section><!--====== End Hero Section ======-->

    <!--====== Start Booking Section ======-->

    <section class="booking-section pt-60 pb-50">

        <div class="container">

            <div class="row align-items-xl-center">

                {{-- <div class="col-lg-6">

                    <!--=== Booking Content Box ===-->

                    {{-- <div class="booking-content-box mb-50 wow fadeInLeft">

                        <div class="section-title mb-50">

                            <span class="sub-title">Availability</span>

                            <h2>Booking Your Best Tour

                                Camping Availability</h2>

                        </div>

                        <form class="booking-form">

                            <div class="row">

                                <div class="col-md-6">

                                    <div class="form_group">

                                        <label><i class="far fa-calendar-alt"></i></label>

                                        <input type="text" class="form_control datepicker" placeholder="Check In">

                                    </div>

                                </div>

                                <div class="col-md-6">

                                    <div class="form_group">

                                        <label><i class="far fa-calendar-alt"></i></label>

                                        <input type="text" class="form_control datepicker" placeholder="Check Out">

                                    </div>

                                </div>

                                <div class="col-md-6">

                                    <div class="form_group">

                                        <label><i class="far fa-user-alt"></i></label>

                                        <input type="text" class="form_control" placeholder="Guest" name="text">

                                    </div>

                                </div>

                                <div class="col-md-6">

                                    <div class="form_group">

                                        <select class="wide">

                                            <option data-display="Accommodations">Accommodations</option>

                                            <option value="01">Classic Tent</option>

                                            <option value="01">Forest Camping</option>

                                            <option value="01">Small Trailer</option>

                                            <option value="01">Tree House Tent</option>

                                            <option value="01">Tent Camping</option>

                                            <option value="01">Couple Tent</option>

                                        </select>

                                    </div>

                                </div>

                                <div class="col-md-12">

                                    <textarea name="comments" placeholder="Comments" class="form_control" cols="8"
                                        rows="3"></textarea>

                                </div>

                                <div class="col-md-12">

                                    <div class="form_group">

                                        <button class="main-btn primary-btn">Check availability<i
                                                class="fas fa-paper-plane"></i></button>

                                    </div>

                                </div>

                            </div>

                        </form>

                    </div>

                </div>

                <div class="col-lg-6">

                    <!--=== Booking Image Box ===-->

                    <div class="booking-image-box mb-50 ml-lg-45 wow fadeInRight">

                        <img src="assets/images/contact/contact-1.jpg" class="radius-60" alt="Contact Image">

                    </div>

                </div> --}}

            </div>

        </div>

    </section><!--====== End Hero Section ======-->

    <!--====== Start Activity Section ======-->

    <section class="activity-section">

        <div class="activity-wrapper-bgc  text-black white-bg">

            <div class="container">

                <div class="row justify-content-center">

                    <div class="col-xl-7">

                        <div class="section-title text-center mb-50 wow fadeInDown">

                            <span class="sub-title">Popular Activity</span>

                            <h2>Feel Real Adventure and Very

                                Colse to Nature</h2>

                        </div>

                    </div>

                </div>

                <div class="row">

                    <div class="col-lg-4">

                        <!--=== Activity Nav Tab ===-->

                        <div class="activity-nav-tab mb-50 wow fadeInLeft">

                            <ul class="nav nav-tabs">

                                <li>

                                    <a href="#tab1" class="nav-link active" data-bs-toggle="tab"
                                        data-bs-target="#tab1">Tent Camping</a>

                                </li>

                                <li>

                                    <a href="#tab2" class="nav-link" data-bs-toggle="tab"
                                        data-bs-target="#tab2">Mountain Biking</a>

                                </li>

                                <li>

                                    <a href="#tab3" class="nav-link" data-bs-toggle="tab"
                                        data-bs-target="#tab3">Birdwatching</a>

                                </li>

                                <li>

                                    <a href="#tab4" class="nav-link" data-bs-toggle="tab"
                                        data-bs-target="#tab4">Fishing</a>

                                </li>

                                <li>

                                    <a href="#tab5" class="nav-link" data-bs-toggle="tab"
                                        data-bs-target="#tab5">Mountain Hiking</a>

                                </li>

                                <li>

                                    <a href="#tab6" class="nav-link" data-bs-toggle="tab"
                                        data-bs-target="#tab6">Mountain Hiking</a>

                                </li>

                            </ul>

                        </div>

                    </div>

                    <div class="col-lg-8">

                        <!--=== Tab Content ===-->

                        <div class="tab-content mb-50 wow fadeInRight">

                            <!--=== Tab Pane ===-->

                            <div class="tab-pane fade show active" id="tab1">

                                <div class="row align-items-center">

                                    <div class="col-md-6">

                                        <!--=== Activity Content Box ===-->

                                        <div class="activity-content-box pl-lg-40">

                                            <div class="icon">

                                                <i class="flaticon-camp"></i>

                                            </div>

                                            <h3 class="title">Real Adventure & Enjoy

                                                Your Dream Tours</h3>

                                            <p>Sit amet consectetur velit integer tincidunt

                                                scelerisque. Sodales volutpat neque fermeny

                                                malesuada scelerisque massa lacus</p>

                                            <ul class="check-list">

                                                <li><i class="fas fa-badge-check"></i>Family Camping</li>

                                                <li><i class="fas fa-badge-check"></i>Couple Camping</li>

                                                <li><i class="fas fa-badge-check"></i>Wild Camping</li>

                                            </ul>

                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <!--=== Activity Image Box ===-->

                                        <div class="activity-image-box">

                                            <img src="assets/images/gallery/activity.jpg" class="radius-12" alt="Image">

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <!--=== Tab Pane ===-->

                            <div class="tab-pane fade" id="tab2">

                                <div class="row align-items-center">

                                    <div class="col-md-6">

                                        <!--=== Activity Content Box ===-->

                                        <div class="activity-content-box pl-lg-40">

                                            <div class="icon">

                                                <i class="flaticon-camp"></i>

                                            </div>

                                            <h3 class="title">Real Adventure & Enjoy

                                                Your Dream Tours</h3>

                                            <p>Sit amet consectetur velit integer tincidunt

                                                scelerisque. Sodales volutpat neque fermeny

                                                malesuada scelerisque massa lacus</p>

                                            <ul class="check-list">

                                                <li><i class="fas fa-badge-check"></i>Family Camping</li>

                                                <li><i class="fas fa-badge-check"></i>Couple Camping</li>

                                                <li><i class="fas fa-badge-check"></i>Wild Camping</li>

                                            </ul>

                                        </div>

                                    </div>

                                    <div class="col-lg-6">

                                        <!--=== Acctivity Image Box ===-->

                                        <div class="activity-image-box">

                                            <img src="assets/images/gallery/activity.jpg" class="radius-12" alt="Image">

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <!--=== Tab Pane ===-->

                            <div class="tab-pane fade" id="tab3">

                                <div class="row align-items-center">

                                    <div class="col-md-6">

                                        <!--=== Activity Content Box ===-->

                                        <div class="activity-content-box pl-lg-40">

                                            <div class="icon">

                                                <i class="flaticon-camp"></i>

                                            </div>

                                            <h3 class="title">Real Adventure & Enjoy

                                                Your Dream Tours</h3>

                                            <p>Sit amet consectetur velit integer tincidunt

                                                scelerisque. Sodales volutpat neque fermeny

                                                malesuada scelerisque massa lacus</p>

                                            <ul class="check-list">

                                                <li><i class="fas fa-badge-check"></i>Family Camping</li>

                                                <li><i class="fas fa-badge-check"></i>Couple Camping</li>

                                                <li><i class="fas fa-badge-check"></i>Wild Camping</li>

                                            </ul>

                                        </div>

                                    </div>

                                    <div class="col-lg-6">

                                        <!--=== Activity Image Box ===-->

                                        <div class="activity-image-box">

                                            <img src="assets/images/gallery/activity.jpg" class="radius-12" alt="Image">

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <!--=== Tab Pane ===-->

                            <div class="tab-pane fade" id="tab4">

                                <div class="row align-items-center">

                                    <div class="col-md-6">

                                        <!--=== Activity Content Box ===-->

                                        <div class="activity-content-box pl-lg-40">

                                            <div class="icon">

                                                <i class="flaticon-camp"></i>

                                            </div>

                                            <h3 class="title">Real Adventure & Enjoy

                                                Your Dream Tours</h3>

                                            <p>Sit amet consectetur velit integer tincidunt

                                                scelerisque. Sodales volutpat neque fermeny

                                                malesuada scelerisque massa lacus</p>

                                            <ul class="check-list">

                                                <li><i class="fas fa-badge-check"></i>Family Camping</li>

                                                <li><i class="fas fa-badge-check"></i>Couple Camping</li>

                                                <li><i class="fas fa-badge-check"></i>Wild Camping</li>

                                            </ul>

                                        </div>

                                    </div>

                                    <div class="col-lg-6">

                                        <!--=== Activity Image Box ===-->

                                        <div class="activity-image-box">

                                            <img src="assets/images/gallery/activity.jpg" class="radius-12" alt="Image">

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <!--=== Tab Pane ===-->

                            <div class="tab-pane fade" id="tab5">

                                <div class="row align-items-center">

                                    <div class="col-md-6">

                                        <!--=== Activity Content Box ===-->

                                        <div class="activity-content-box pl-lg-40">

                                            <div class="icon">

                                                <i class="flaticon-camp"></i>

                                            </div>

                                            <h3 class="title">Real Adventure & Enjoy

                                                Your Dream Tours</h3>

                                            <p>Sit amet consectetur velit integer tincidunt

                                                scelerisque. Sodales volutpat neque fermeny

                                                malesuada scelerisque massa lacus</p>

                                            <ul class="check-list">

                                                <li><i class="fas fa-badge-check"></i>Family Camping</li>

                                                <li><i class="fas fa-badge-check"></i>Couple Camping</li>

                                                <li><i class="fas fa-badge-check"></i>Wild Camping</li>

                                            </ul>

                                        </div>

                                    </div>

                                    <div class="col-lg-6">

                                        <!--=== Activity Image Box ===-->

                                        <div class="activity-image-box">

                                            <img src="assets/images/gallery/activity.jpg" class="radius-12" alt="Image">

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <!--=== Tab Pane ===-->

                            <div class="tab-pane fade" id="tab6">

                                <div class="row align-items-center">

                                    <div class="col-md-6">

                                        <!--=== Activity Cotent Box ===-->

                                        <div class="activity-content-box pl-lg-40">

                                            <div class="icon">

                                                <i class="flaticon-camp"></i>

                                            </div>

                                            <h3 class="title">Real Adventure & Enjoy

                                                Your Dream Tours</h3>

                                            <p>Sit amet consectetur velit integer tincidunt

                                                scelerisque. Sodales volutpat neque fermeny

                                                malesuada scelerisque massa lacus</p>

                                            <ul class="check-list">

                                                <li><i class="fas fa-badge-check"></i>Family Camping</li>

                                                <li><i class="fas fa-badge-check"></i>Couple Camping</li>

                                                <li><i class="fas fa-badge-check"></i>Wild Camping</li>

                                            </ul>

                                        </div>

                                    </div>

                                    <div class="col-lg-6">

                                        <!--=== Activity Image ===-->

                                        <div class="activity-image-box">

                                            <img src="assets/images/gallery/activity.jpg" class="radius-12" alt="Image">

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section><!--====== End Activity Section ======-->

    <!--====== Start Services Section ======-->

    <!--====== Start Features Section ======-->

    <!--====== Start CTA Section ======-->


    <!--====== Start Fact Section ======-->
{{--
    <section class="fact-section pt-100">

        <div class="container">

            <div class="row">

                <div class="col-lg-3 col-sm-6">

                    <!--=== Counter Item ===-->

                    <div class="single-counter-item text-center mb-40 wow fadeInUp">

                        <div class="icon">

                            <i class="flaticon-journey"></i>

                        </div>

                        <h2 class="number"><span class="count">3568</span>+</h2>

                        <p>Happy Traveler</p>

                    </div>

                </div>

                <div class="col-lg-3 col-sm-6">

                    <!--=== Counter Item ===-->

                    <div class="single-counter-item text-center mb-40 wow fadeInDown">

                        <div class="icon">

                            <i class="flaticon-tent-1"></i>

                        </div>

                        <h2 class="number"><span class="count">8453</span>+</h2>

                        <p>Tent Sites</p>

                    </div>

                </div>

                <div class="col-lg-3 col-sm-6">

                    <!--=== Counter Item ===-->

                    <div class="single-counter-item text-center mb-40 wow fadeInUp">

                        <div class="icon">

                            <i class="flaticon-reviews"></i>

                        </div>

                        <h2 class="number"><span class="count">99.3</span>%</h2>

                        <p>Positive Reviews</p>

                    </div>

                </div>

                <div class="col-lg-3 col-sm-6">

                    <!--=== Counter Item ===-->

                    <div class="single-counter-item text-center mb-40 wow fadeInDown">

                        <div class="icon">

                            <i class="flaticon-award"></i>

                        </div>

                        <h2 class="number"><span class="count">63</span>K</h2>

                        <p>Awards Winning</p>

                    </div>

                </div>

            </div>

        </div>

    </section><!--====== End Fact Section ======--> --}}

    <!--====== Start Testimonial Section ======-->

    <section class="testimonial-section pt-60">

        <div class="container">

            <div class="row justify-content-center">

                <div class="col-xl-8">

                    <!--=== Section Title ===-->

                    <div class="section-title text-center mb-50 wow fadeInDown">

                        <span class="sub-title">Testimonials</span>

                        <h2>What Our Traveler Say About Our Tour Services</h2>

                    </div>

                </div>

            </div>

            <div class="row align-items-xl-center">

                <div class="col-xl-5 col-lg-12 order-2 order-xl-1">

                    <!--=== Testimonial Image ===-->

                    <div class="testimonial-one_image-box mb-40 wow fadeInLeft">

                        <img src="assets/images/testimonial/testimonial-1.jpg" alt="Testimonial Image">

                    </div>

                </div>

                <div class="col-xl-7 col-lg-12 order-1 order-xl-2">

                    <!--=== Testimonial Slider ===-->

                    <div class="testimonial-slider-one pl-lg-55 mb-40 wow fadeInRight">

                        <!--=== Testimonial Item ===-->

                        <div class="gw-testimonial-item">

                            <div class="testimonial-inner-content">

                                <div class="quote-rating-box">

                                    <div class="icon">

                                        <img src="assets/images/testimonial/quote.png" alt="quote icon">

                                    </div>

                                    <div class="ratings-box">

                                        <h4>Quality Services</h4>

                                        <ul class="ratings">

                                            <li><i class="fas fa-star"></i></li>

                                            <li><i class="fas fa-star"></i></li>

                                            <li><i class="fas fa-star"></i></li>

                                            <li><i class="fas fa-star"></i></li>

                                            <li><i class="fas fa-star"></i></li>

                                        </ul>

                                    </div>

                                </div>

                                <p>To take a trivial example which of

                                    usev undertakes laborious physical

                                    exercise excepto obtain advantage

                                    from has any right to find fault with

                                    man who chooses to enjoy</p>

                                <div class="author-thumb-title">

                                    <div class="author-thumb">

                                        <img src="assets/images/testimonial/author-1.jpg" alt="Author Image">

                                    </div>

                                    <div class="author-title">

                                        <h3 class="title">Douglas D. Hall</h3>

                                        <p class="position">CEO & Founder</p>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <!--=== Testimonial Item ===-->

                        <div class="gw-testimonial-item">

                            <div class="testimonial-inner-content">

                                <div class="quote-rating-box">

                                    <div class="icon">

                                        <img src="assets/images/testimonial/quote.png" alt="quote icon">

                                    </div>

                                    <div class="ratings-box">

                                        <h4>Quality Services</h4>

                                        <ul class="ratings">

                                            <li><i class="fas fa-star"></i></li>

                                            <li><i class="fas fa-star"></i></li>

                                            <li><i class="fas fa-star"></i></li>

                                            <li><i class="fas fa-star"></i></li>

                                            <li><i class="fas fa-star"></i></li>

                                        </ul>

                                    </div>

                                </div>

                                <p>To take a trivial example which of

                                    usev undertakes laborious physical

                                    exercise excepto obtain advantage

                                    from has any right to find fault with

                                    man who chooses to enjoy</p>

                                <div class="author-thumb-title">

                                    <div class="author-thumb">

                                        <img src="assets/images/testimonial/author-1.jpg" alt="Author Image">

                                    </div>

                                    <div class="author-title">

                                        <h3 class="title">Douglas D. Hall</h3>

                                        <p class="position">CEO & Founder</p>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <!--=== Testimonial Item ===-->

                        <div class="gw-testimonial-item">

                            <div class="testimonial-inner-content">

                                <div class="quote-rating-box">

                                    <div class="icon">

                                        <img src="assets/images/testimonial/quote.png" alt="quote icon">

                                    </div>

                                    <div class="ratings-box">

                                        <h4>Quality Services</h4>

                                        <ul class="ratings">

                                            <li><i class="fas fa-star"></i></li>

                                            <li><i class="fas fa-star"></i></li>

                                            <li><i class="fas fa-star"></i></li>

                                            <li><i class="fas fa-star"></i></li>

                                            <li><i class="fas fa-star"></i></li>

                                        </ul>

                                    </div>

                                </div>

                                <p>To take a trivial example which of

                                    usev undertakes laborious physical

                                    exercise excepto obtain advantage

                                    from has any right to find fault with

                                    man who chooses to enjoy</p>

                                <div class="author-thumb-title">

                                    <div class="author-thumb">

                                        <img src="assets/images/testimonial/author-1.jpg" alt="Author Image">

                                    </div>

                                    <div class="author-title">

                                        <h3 class="title">Douglas D. Hall</h3>

                                        <p class="position">CEO & Founder</p>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section><!--====== End Testimonial Section ======-->


    <!--====== Start Gallery Section ======-->

    <section class="gallery-section mbm-150">

        <div class="container-fluid">

            <div class="slider-active-5-item wow fadeInUp">

                <!--=== Single Gallery Item ===-->

                <div class="single-gallery-item">

                    <div class="gallery-img">

                        <img src="assets/images/gallery/gl-1.jpg" alt="Gallery Image">

                        <div class="hover-overlay">

                            <a href="assets/images/gallery/gl-1.jpg" class="icon-btn img-popup"><i
                                    class="far fa-plus"></i></a>

                        </div>

                    </div>

                </div>

                <!--=== Single Gallery Item ===-->

                <div class="single-gallery-item">

                    <div class="gallery-img">

                        <img src="assets/images/gallery/gl-2.jpg" alt="Gallery Image">

                        <div class="hover-overlay">

                            <a href="assets/images/gallery/gl-2.jpg" class="icon-btn img-popup"><i
                                    class="far fa-plus"></i></a>

                        </div>

                    </div>

                </div>

                <!--=== Single Gallery Item ===-->

                <div class="single-gallery-item">

                    <div class="gallery-img">

                        <img src="assets/images/gallery/gl-3.jpg" alt="Gallery Image">

                        <div class="hover-overlay">

                            <a href="assets/images/gallery/gl-3.jpg" class="icon-btn img-popup"><i
                                    class="far fa-plus"></i></a>

                        </div>

                    </div>

                </div>

                <!--=== Single Gallery Item ===-->

                <div class="single-gallery-item">

                    <div class="gallery-img">

                        <img src="assets/images/gallery/gl-4.jpg" alt="Gallery Image">

                        <div class="hover-overlay">

                            <a href="assets/images/gallery/gl-4.jpg" class="icon-btn img-popup"><i
                                    class="far fa-plus"></i></a>

                        </div>

                    </div>

                </div>

                <!--=== Single Gallery Item ===-->

                <div class="single-gallery-item">

                    <div class="gallery-img">

                        <img src="assets/images/gallery/gl-5.jpg" alt="Gallery Image">

                        <div class="hover-overlay">

                            <a href="assets/images/gallery/gl-5.jpg" class="icon-btn img-popup"><i
                                    class="far fa-plus"></i></a>

                        </div>

                    </div>

                </div>

                <!--=== Single Gallery Item ===-->

                <div class="single-gallery-item">

                    <div class="gallery-img">

                        <img src="assets/images/gallery/gl-3.jpg" alt="Gallery Image">

                        <div class="hover-overlay">

                            <a href="assets/images/gallery/gl-3.jpg" class="icon-btn img-popup"><i
                                    class="far fa-plus"></i></a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section><!--====== End Gallery Section ======-->

    <!--====== Start Footer ======-->

    <footer class="main-footer white-bg pt-230">

        <div class="container">

            <!--=== Footer Top ===-->

            <div class="footer-top pt-40 wow fadeInUp">

                <div class="row">

                    <div class="col-lg-3 col-sm-6">

                        <!--=== Single Info Item ===-->

                        <div class="single-info-item mb-40">

                            <div class="icon">

                                <i class="far fa-map-marker-alt"></i>

                            </div>

                            <div class="info">

                                <span class="title">Location</span>

                                <p>55 Main Street, Australia</p>

                            </div>

                        </div>

                    </div>

                    <div class="col-lg-3 col-sm-6">

                        <!--=== Single Info Item ===-->

                        <div class="single-info-item mb-40">

                            <div class="icon">

                                <i class="far fa-envelope-open"></i>

                            </div>

                            <div class="info">

                                <span class="title">Email</span>

                                <p><a href="/cdn-cgi/l/email-protection#6f1c1a1f1f001d1b2f08020e0603410c0002"><span
                                            class="__cf_email__"
                                            data-cfemail="bfcccacfcfd0cdcbffd8d2ded6d391dcd0d2">[email&#160;protected]</span></a>
                                </p>

                            </div>

                        </div>

                    </div>

                    <div class="col-lg-3 col-sm-6">

                        <!--=== Single Info Item ===-->

                        <div class="single-info-item mb-40">

                            <div class="icon">

                                <i class="far fa-map-marker-alt"></i>

                            </div>

                            <div class="info">

                                <span class="title">Hotline</span>

                                <p><a href="tel:+000(123)456898">+000 (123) 456 898</a></p>

                            </div>

                        </div>

                    </div>

                    <div class="col-lg-3 col-sm-6">

                        <!--=== Social Box ===-->

                        <div class="social-box mb-40 float-lg-end">

                            <ul class="social-link">

                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>

                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>

                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>

                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

            <!--=== Footer Widget ===-->

            <div class="footer-widget-area pt-75 pb-30">

                <div class="row">

                    <div class="col-lg-3 col-md-6">

                        <!--=== Footer Widget ===-->

                        <div class="footer-widget about-company-widget mb-40 wow fadeInUp">

                            <h4 class="widget-title">About</h4>

                            <div class="footer-content">

                                <p>To take trivial example which us

                                    ever undertakes laborious physica

                                    exercise except obsome</p>

                                <a href="#" class="footer-logo"><img src="{{asset('img/logo/logo.jpg')}}"
                                        alt="Site Logo"></a>

                            </div>

                        </div>

                    </div>

                    <div class="col-lg-5 col-md-6">

                        <!--=== Footer Widget ===-->

                        <div class="footer-widget service-nav-widget mb-40 pl-lg-70 wow fadeInDown">

                            <h4 class="widget-title">Services</h4>

                            <div class="footer-content">

                                <ul class="footer-widget-nav">

                                    <li><a href="#">Caravan Soler Tent</a></li>

                                    <li><a href="#">Family Tent Camping</a></li>

                                    <li><a href="#">Classic Tent Camping</a></li>

                                    <li><a href="#">Wild Tent Camping</a></li>

                                    <li><a href="#">Small Cabin Wood</a></li>

                                </ul>

                                <ul class="footer-widget-nav">

                                    <li><a href="#">Need a Career ?</a></li>

                                    <li><a href="#">Latest News & Blog</a></li>

                                    <li><a href="#">Core Features</a></li>

                                    <li><a href="#">Meet Our teams</a></li>

                                </ul>

                            </div>

                        </div>

                    </div>

                    <div class="col-lg-4 col-md-6">

                        <!--=== Footer Widget ===-->

                        <div class="footer-widget footer-newsletter-widget mb-40 pl-lg-100 wow fadeInUp">

                            <h4 class="widget-title">Newsletter</h4>

                            <div class="footer-content">

                                <p>Which of us ever undertake laborious

                                    physical exercise except obtain</p>

                                <form>

                                    <div class="form_group">

                                        <label><i class="far fa-paper-plane"></i></label>

                                        <input type="email" class="form_control" placeholder="Email Address"
                                            name="email" required>

                                    </div>

                                </form>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <!--=== Footer Copyright ===-->

            <div class="footer-copyright">

                <div class="row">

                    <div class="col-lg-6">

                        <!--=== Footer Text ===-->

                        <div class="footer-text">

                            <p>Copy@ 2023 <span style="color: #F7921E;"></span>, All Right Reserved</p>

                        </div>

                    </div>

                    <div class="col-lg-6">

                        <!--=== Footer Nav ===-->

                        <div class="footer-nav float-lg-end">

                            <ul>

                                <li><a href="#">Setting & privacy</a></li>

                                <li><a href="#">Faqs</a></li>

                                <li><a href="#">Support</a></li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </footer><!--====== End Footer ======-->

    <!--====== Back To Top  ======-->

    <a href="#" class="back-to-top"><i class="far fa-angle-up"></i></a>

    <!--====== Jquery js ======-->

    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <!--====== Bootstrap js ======-->

    <script src="assets/js/popper.min.js"></script>

    <!--====== Bootstrap js ======-->

    <script src="assets/js/bootstrap.min.js"></script>

    <!--====== Slick js ======-->

    <script src="assets/js/slick.min.js"></script>

    <!--====== Magnific js ======-->

    <script src="assets/js/jquery.magnific-popup.min.js"></script>

    <!--====== Counterup js ======-->

    <script src="assets/js/jquery.counterup.min.js"></script>

    <!--====== Waypoints js ======-->

    <script src="assets/js/jquery.waypoints.js"></script>

    <!--====== Nice-select js ======-->

    <script src="assets/js/jquery.nice-select.min.js"></script>

    <!--====== jquery UI js ======-->

    <script src="assets/js/jquery-ui.min.js"></script>

    <!--====== WOW js ======-->

    <script src="assets/js/wow.min.js"></script>

    <!--====== Main js ======-->

    <script src="assets/js/theme.js"></script>

</body>

</html>
