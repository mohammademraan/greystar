<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.tempload.com/gaus/green-index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Sep 2025 18:03:19 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Greystar - Best Real Estate Agency in USA')</title>
    <meta name="description" content="Greystar offers real estate services and community management." />
    <meta name="keywords" content="Greystar, real estate, communities, property management" />
    <meta name="author" content="Greystar" />

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}" />

    <!-- Google Fonts: Manrope (Headings) & Newsreader (Body) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500;600;700;800&family=Newsreader:ital,opsz,wght@0,6..72,300;0,6..72,400;0,6..72,500;1,6..72,400&display=swap" rel="stylesheet">

    <!-- Bootstrap & Plugins CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Greystar Design System -->
    <link href="{{ asset('css/greystar-design-system.css') }}" rel="stylesheet" type="text/css">


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-118135390-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-118135390-1');
    </script>
</head>

<body class="@yield('body_class')">

    <!-- ***** Preloader Start ***** -->
    <div class="loader-wrapper">
        <div class="loader">
            <div class="diamond"></div>
            <div class="diamond"></div>
            <div class="diamond"></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="{{ url('/') }}" class="logo">
                            <img src="{{ asset('Apartments & Homes for Rent _ Greystar/imgi_19_GreystarLogo_Navy_NoTagline.png') }}" class="light-logo" height="50px" alt="Greystar" style="filter: brightness(0) invert(1)" />
                            <img src="{{ asset('Apartments & Homes for Rent _ Greystar/imgi_19_GreystarLogo_Navy_NoTagline.png') }}" class="dark-logo" height="50px" alt="Greystar" />
                        </a>
                        <!-- ***** Logo End ***** -->

                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                            <li><a href="{{ url('/data-optimization') }}">Generate Lots</a></li>
                            <li><a href="{{ url('/history') }}">History</a></li>
                            <li><a href="{{ url('/profile') }}">Profile</a></li>
                            <li><a href="{{ url('/wallet-information') }}">Wallet</a></li>
                            <li><a href="{{ url('/contact-us') }}" class="btn-nav-line btn-sm">Contact</a></li>
                        </ul>
                        <a class="menu-trigger">
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    @yield('content')

    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">

                <div class="col-lg-5 col-md-12 col-sm-12">
                    <a href="{{ url('/') }}" class="logo">
                        <img src="{{ asset('Apartments & Homes for Rent _ Greystar/imgi_19_GreystarLogo_Navy_NoTagline.png') }}" height="50px" alt="Greystar" style="filter: brightness(0) invert(1)">
                    </a>
                    <div class="text mt-3">
                        Greystar — trusted real estate and community services. Manage your account, wallet and orders from your dashboard.
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                    <h5>Helpful Links</h5>
                    <ul class="footer-nav">
                            <li><a href="{{ Route::has('recharge') ? route('recharge') : route('user.login') }}"><i class="fa fa-angle-right"></i><span>Recharge</span></a></li>
                            <li><a href="{{ Route::has('redemption') ? route('redemption') : route('user.login') }}"><i class="fa fa-angle-right"></i><span>Redeem</span></a></li>
                            <li><a href="{{ Route::has('recharge.history') ? route('recharge.history') : route('user.login') }}"><i class="fa fa-angle-right"></i><span>Recharge History</span></a></li>
                            <li><a href="{{ Route::has('redemption.history') ? route('redemption.history') : route('user.login') }}"><i class="fa fa-angle-right"></i><span>Redemption History</span></a></li>
                            <li><a href="{{ Route::has('membership') ? route('membership') : route('user.login') }}"><i class="fa fa-angle-right"></i><span>Membership</span></a></li>
                            <li><a href="{{ Route::has('termsconditions') ? route('termsconditions') : route('user.login') }}"><i class="fa fa-angle-right"></i><span>Terms &amp; Conditions</span></a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                    <h5>Account</h5>
                    <ul class="footer-nav">
                        @auth
                            <li><a href="{{ Route::has('dashboard') ? route('dashboard') : url('/dashboard') }}"><i class="fa fa-angle-right"></i><span>Dashboard</span></a></li>
                            <li><a href="{{ Route::has('data-optimization') ? route('data-optimization') : ( Route::has('generate.order') ? route('generate.order') : route('user.login') ) }}"><i class="fa fa-angle-right"></i><span>Generate Lots</span></a></li>
                            <li><a href="{{ Route::has('history') ? route('history') : route('user.login') }}"><i class="fa fa-angle-right"></i><span>History</span></a></li>
                            <li><a href="{{ Route::has('profile') ? route('profile') : route('user.login') }}"><i class="fa fa-angle-right"></i><span>Profile</span></a></li>
                            <li><a href="{{ Route::has('wallet-information') ? route('wallet-information') : route('user.login') }}"><i class="fa fa-angle-right"></i><span>Wallet</span></a></li>
                            <li><a href="{{ Route::has('support') ? route('support') : route('user.login') }}"><i class="fa fa-angle-right"></i><span>Support</span></a></li>
                        @else
                            <li><a href="{{ route('user.login') }}"><i class="fa fa-angle-right"></i><span>Login</span></a></li>
                            <li><a href="{{ Route::has('user-register') ? route('user-register') : route('user.login') }}"><i class="fa fa-angle-right"></i><span>Register</span></a></li>
                        @endauth
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="address">
                        <p class="mb-1"><strong>Contact</strong></p>
                        <p class="mb-1">250 Vesey Street, 15th Floor<br>New York, NY 10281, USA</p>
                        <p class="mb-1">Phone: +1 212-417-7000</p>
                        <p><a href="mailto:contact@greystar.com">contact@greystar.com</a></p>

                        <ul class="social">
                            <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                            <li><a href="#"><i class="fa fa-github-square"></i></a></li>
                        </ul>
                    </div>
                </div>

            </div>

            <div class="row mt-3">
                <div class="col-lg-12">
                    <p class="copyright">&copy; 2026 Greystar Worldwide, LLC. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- ***** Footer End ***** -->

    <!-- jQuery -->
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('assets/js/popper.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- Plugins -->
    <script src="{{ asset('assets/js/scrollreveal.min.js') }}"></script>
    <script src="{{ asset('assets/js/parallax.min.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/imgfix.min.js') }}"></script>
    <!-- Global Init -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    @include('user.layout.chat')
    <style>
        body {
            background-color: var(--color-bg);
            color: var(--color-ink-2);
            font-family: var(--font-body);
        }

        h1, h2, h3, h4, h5, h6, .section-title {
            font-family: var(--font-heading) !important;
            color: var(--color-ink) !important;
        }

        /* Card and surface styling */
        .card,
        .blog-post-thumb,
        .team-item,
        .count-item,
        .home-services-item,
        .welcome-apps .app-item,
        .blog-post-thumb .post-content {
            background-color: #ffffff !important;
            border-radius: var(--radius-card) !important;
            box-shadow: var(--shadow-card) !important;
            border: 1px solid var(--color-surface);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .home-services-item:hover,
        .welcome-apps .app-item:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-raise) !important;
        }

        /* Buttons */
        .btn-primary-line,
        .btn-white-line,
        .theme-btn {
            background: linear-gradient(to right, #0077D4 0%, #0077D4 50%, #00477F 100%) !important;
            color: #FFFFFF !important;
            border-radius: var(--radius-btn) !important;
            border: none !important;
            font-family: var(--font-body) !important;
            font-size: 15px !important;
            font-weight: 500 !important;
            padding: 10px 24px !important;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            text-decoration: none !important;
            transition: filter 0.2s ease;
        }

        .btn-primary-line:hover,
        .btn-white-line:hover,
        .theme-btn:hover {
            filter: brightness(0.92);
        }

        /* Footer styling */
        footer {
            background-color: var(--color-footer) !important;
            color: #FFFFFF !important;
            padding-top: 60px;
            padding-bottom: 30px;
        }

        footer h5 {
            color: #FFFFFF !important;
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 16px;
        }

        footer .footer-nav li a,
        footer .text,
        footer .address p,
        footer .address a {
            color: rgba(255, 255, 255, 0.8) !important;
            font-family: var(--font-body);
            font-size: 14px;
        }

        footer .footer-nav li a:hover,
        footer .address a:hover {
            color: #FFFFFF !important;
            text-decoration: underline;
        }

        footer .copyright {
            color: rgba(255, 255, 255, 0.6) !important;
            border-top: 1px solid rgba(255, 255, 255, 0.15);
            padding-top: 20px;
            font-size: 13px;
        }

        /* ===== Header/Nav Styles ===== */
        .header-area {
            background: var(--glass);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(206, 211, 218, 0.4);
            box-shadow: 0 4px 20px rgba(10, 34, 69, 0.04);
            transition: all 0.3s ease;
        }

        .header-area .nav > li { margin-left: 14px; }
        .header-area .nav > li > a {
            font-family: var(--font-body);
            font-size: 16px;
            font-weight: 500;
            color: var(--color-ink) !important;
            transition: color .2s ease;
        }

        .header-area .nav > li > a:hover {
            color: var(--color-primary) !important;
        }

        .header-area .nav > li > a.btn-nav-line {
            background: linear-gradient(to right, #0077D4 0%, #0077D4 50%, #00477F 100%) !important;
            border: none !important;
            color: #FFFFFF !important;
            border-radius: var(--radius-pill) !important;
            padding: 8px 20px !important;
        }

        .header-area .logo .light-logo { display: none !important; }
        .header-area .logo .dark-logo { display: inline-block !important; }

        @media (min-width: 992px) {
            body:not(.home-body) {
                padding-top: 86px;
            }
        }
    </style>

</body>

<!-- Mirrored from demo.tempload.com/gaus/green-index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Sep 2025 18:04:04 GMT -->

</html>
