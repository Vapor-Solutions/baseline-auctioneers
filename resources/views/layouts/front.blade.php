<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Document Title -->
    <title>Baseline Auctioneers</title>

    <!-- Meta -->
    <meta name="description" content="Baseline Auctioneers">
    <meta name="keywords" content="baseline, auctioneers, nairobi, distress, auction">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700%7CUbuntu:400,700">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="/front/css/font-awesome.min.css">

    <!-- Bootstrap Framework -->
    <link rel="stylesheet" href="/front/css/bootstrap.min.css">

    <!-- Animate.css Plugin -->
    <link rel="stylesheet" href="/front/css/animate.min.css">

    <!-- Owl Carousel Plugin -->
    <link rel="stylesheet" href="/front/css/owl.carousel.min.css">

    <!-- Magnific Popup Plugin -->
    <link rel="stylesheet" href="/front/css/magnific-popup.css">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="/front/style.css">

    <!-- Responsive Stylesheet -->
    <link rel="stylesheet" href="/front/css/responsive.css">

    <!-- Theme Color Stylesheet -->
    <link rel="stylesheet" href="/front/css/theme-color.css">

    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="/front/css/custom.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles()

    <!-- ==== HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries ==== -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="body">
    <!-- Preloader Start -->
    <div id="preloader" class="bg--color-theme">
        <div class="preloader--spinner">
            <img src="android-chrome-192x192.png" alt="">
        </div>
    </div>
    <!-- Preloader End -->

    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Header Section Start -->
        <div class="header--section">
            <!-- Header Topbar Start -->
            <div class="header--topbar bg--color-lightgray">
                <div class="container">
                    <ul class="nav float--left">
                        <li class="hidden-xxs">
                            <a href="tel:{{ env('COMPANY_PHONE') }}">
                                <i class="fa fa-phone"></i>{{ env('COMPANY_PHONE') }}
                            </a>
                        </li>
                        <li class="hidden-xxs"><a href="mailto:info@baselineauctioneers.com"><i
                                    class="fa fa-envelope-o"></i>info@baselineauctioneers.com</a></li>
                    </ul>

                    {{-- <ul class="nav links float--right float--xxs-none">
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Pricing</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul> --}}
                </div>
            </div>
            <!-- Header Topbar End -->

            <x-front.header></x-front.header>
            <x-front.navbar></x-front.navbar>

        </div>
        <!-- Header Section End -->

        @yield('content')
        <x-front.footer></x-front.footer>
    </div>
    <!-- Wrapper End -->

    <!-- Back To Top Button Start -->
    <div id="backToTop" class="bg--color-theme" data-animate-scroll="a">
        <a href="#body"><i class="fa fa-angle-up"></i></a>
    </div>
    <!-- Back To Top Button End -->

    <!-- jQuery Library -->
    <script src="/front/js/jquery-3.2.1.min.js"></script>

    <!-- Bootstrap Framework -->
    <script src="/front/js/bootstrap.min.js"></script>

    <!-- StickyJS Plugin -->
    <script src="/front/js/jquery.sticky.min.js"></script>

    <!-- Owl Carousel Plugin -->
    <script src="/front/js/owl.carousel.min.js"></script>

    <!-- Magnific Popup Plugin -->
    <script src="/front/js/jquery.magnific-popup.min.js"></script>

    <!-- Waypoints Plugin -->
    <script src="/front/js/jquery.waypoints.min.js"></script>

    <!-- Counter-Up Plugin -->
    <script src="/front/js/jquery.counterup.min.js"></script>

    <!-- Validation Plugin -->
    <script src="/front/js/jquery.validate.min.js"></script>

    <!-- Isotope Plugin -->
    <script src="/front/js/isotope.min.js"></script>

    <!-- Parallax Plugin -->
    <script src="/front/js/parallax.min.js"></script>

    <!-- AniamteScroll Plugin -->
    <script src="/front/js/animatescroll.min.js"></script>

    <!-- Google Map API -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDx6Q7BeUVtvH2jCZY-jhjnQD_nzzGlMwo"></script>

    <!-- Main Script -->
    <script src="/front/js/main.js"></script>

    @livewireScripts()

    <script>
        Livewire.on('done', (e) => {
            if (e.success) {
                Toast.fire({
                    icon: 'success',
                    text: e.success
                })
            }
            if (e.warning) {
                Toast.fire({
                    icon: 'warning',
                    text: e.warning
                })
            }
            if (e.info) {
                Toast.fire({
                    icon: 'info',
                    text: e.info
                })
            }
            if (e.error) {
                Toast.fire({
                    icon: 'error',
                    text: e.error
                })
            }
        });


        // $('#datatable').DataTable();
    </script>

</body>

</html>
