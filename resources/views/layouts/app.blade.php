<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-2X6E406WQV"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-2X6E406WQV');
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <meta name="description" content="Adventure, Tours, Travel">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->

    <title>Tours and Travel HTML Template</title>
    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
    {{-- @include('meta::manager', [
        'title' => config('app.name', 'Laravel'),
        'description' => 'The concept and service of the best luxury hotel in BodhGaya in our sophisticated.',
        'image' => asset('img/logo/mainLogo_1.png'),
        'keywords' =>
            'bodhgaya, taxi services in bodhgaya,taxi,services ,rooms ,hotel, Bodh Gaya, lodging, accommodation, special offers, packages, specials, weekend breaks, deals Bodh Gaya India, budget, cheap, discount, savings, tours, package, ',
        'author' => 'Dharmendra Chauhan',
        'referrer' => 'default',
    ]) --}}
    <!-- CSRF Token -->
    <link rel="icon" type="image/png" sizes="6x6" href="{{ asset('img/logo/logo.jpg') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/gijgo.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hotel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mybooking.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bookingBar.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    @livewireStyles
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7927060033825760"
        crossorigin="anonymous"></script>
</head>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">


<!--====== Favicon Icon ======-->

<link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/png">

<!--====== Google Fonts ======-->

<link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

<!--====== Flaticon css ======-->

<link rel="stylesheet" href="{{ asset('assets/fonts/flaticon/flaticon_gowilds.css') }}">

<!--====== FontAwesome css ======-->

<link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome/css/all.min.css') }}">

<!--====== Bootstrap css ======-->

<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">

<!--====== magnific-popup css ======-->

<link rel="stylesheet" href="{{ asset('assets/vendor/magnific-popup/dist/magnific-popup.css') }}">

<!--====== Slick-popup css ======-->

<link rel="stylesheet" href="{{ asset('assets/vendor/slick/slick.css') }}">

<!--====== Jquery UI css ======-->

<link rel="stylesheet" href="{{ asset('assets/vendor/jquery-ui/jquery-ui.min.css') }}">

<!--====== Nice Select css ======-->

<link rel="stylesheet" href="{{ asset('assets/vendor/nice-select/css/nice-select.css') }}">

<!--====== Animate css ======-->

<link rel="stylesheet" href="{{ asset('assets/vendor/animate.css') }}">

<!--====== Default css ======-->

<link rel="stylesheet" href="{{ asset('assets/css/default.css') }}">

<!--====== Style css ======-->

<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

<body>
    @livewireScripts
    @include('layouts.header')
    @yield('content')
    <div id="back-top">
        <a class="wrapper" title="WhatsApp" target="_blank" href="https://wa.me/+919971840388">
            <img src="{{ asset('img/WhatsApp.svg') }}" alt="">
            {{-- <div class="arrows-container">
                <div class="arrow arrow-one">
                </div>
                <div class="arrow arrow-two">
                </div>
            </div> --}}
        </a>
    </div>
    <div id="back-top_call">
        <a class="wrapper" title="Call" href="tel:9971840388">
            <img src="{{ asset('img/call.png') }}" width="30px" alt="">
        </a>
    </div>
    <div id="back-top_gmail">
        <a class="wrapper" title="Email" href="mailto:enquiry@hotel.com">
            <img src="{{ asset('img/gmail.png') }}" width="30px" alt="">
        </a>
    </div>









    @include('layouts.footer')
    <script src="{{ asset('js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/jquery.slicknav.min.js') }}"></script>

    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('js/waypoints.min.js') }}"></script>
    <script src="{{ asset('js/gijgo.min.js') }}"></script>

    <script src="{{ asset('js/contact.js') }}"></script>
    <script src="{{ asset('js/jquery.form.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/mail-script.js') }}"></script>
    <script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>

    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/email-decode.min.js') }}"></script>



    <!--====== Jquery js ======-->

    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>

    <!--====== Bootstrap js ======-->

    <script src="{{ asset('assets/js/popper.min.js') }}"></script>

    <!--====== Bootstrap js ======-->

    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <!--====== Slick js ======-->

    <script src="{{ asset('assets/js/slick.min.js') }}"></script>

    <!--====== Magnific js ======-->

    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>

    <!--====== Counterup js ======-->

    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>

    <!--====== Waypoints js ======-->

    <script src="{{ asset('assets/js/jquery.waypoints.js') }}"></script>

    <!--====== Nice-select js ======-->

    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>

    <!--====== jquery UI js ======-->

    <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>

    <!--====== WOW js ======-->

    <script src="{{ asset('assets/js/wow.min.js') }}"></script>

    <!--====== Main js ======-->

    <script src="{{ asset('assets/js/theme.js') }}"></script>
</body>

</html>
