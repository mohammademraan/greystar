<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from themepanthers.com/html/creote-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Sep 2025 18:34:42 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>@yield('title', 'Greystar - Best Real Estate Agency in USA')</title>
    <!-- Fav Icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- Fav Icon -->
    <!-- Google Fonts: Manrope (Headings) & Newsreader (Body) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500;600;700;800&family=Newsreader:ital,opsz,wght@0,6..72,300;0,6..72,400;0,6..72,500;1,6..72,400&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <!-- Google Fonts -->
    <!-- Style -->
    <link rel='stylesheet' href='assets/css/bootstrap.min.css' type='text/css' media='all' />
    <link rel='stylesheet' href='assets/css/owl.css' type='text/css' media='all' />
    <link rel='stylesheet' href='assets/css/swiper.min.css' type='text/css' media='all' />
    <link rel='stylesheet' href='assets/css/jquery.fancybox.min.css' type='text/css' media='all' />
    <link rel='stylesheet' href='assets/css/icomoon.css' type='text/css' media='all' />
    <link rel='stylesheet' href='assets/css/flexslider.css' type='text/css' media='all' />
    <link rel='stylesheet' href='assets/css/font-awesome.min.css' type='text/css' media='all' />
    <link rel='stylesheet' href='assets/css/style.css' type='text/css' media='all' />
    <link rel='stylesheet' href='assets/css/scss/elements/theme-css.css' type='text/css' media='all' />
    <link rel='stylesheet' id="creote-color-switcher-css" href='assets/css/scss/elements/color-switcher/color.css'
        type='text/css' media='all' />
    <!-- Greystar Design System -->
    <link rel="stylesheet" href="{{ asset('css/greystar-design-system.css') }}" type="text/css" media="all" />
    <!-- Style-->
    <!----woocommerce---->
    <link rel='stylesheet' href='assets/css/woocommerce-layout.css' type='text/css' media='all' />
    <link rel='stylesheet' href='assets/css/woocommerce.css' type='text/css' media='all' />
    <!----woocommerce---->
</head>

<body class="theme-creote">
    <div id="page" class="page_wapper hfeed site">

        <div id="wrapper_full" class="content_all_warpper">

            <!----preloader----->
            <div class="preloader-wrap">
                <div class="preloader" style="background-image:url(assets/images/preloader.gif)">
                </div>
                <div class="overlay"></div>
            </div>
            <!----preloader----->
            <!----header----->
            @include('user.layout.header')
            <!----header end----->
            @yield('content')
            <!---==============footer start =================-->
            @include('user.layout.footer')
            <!---==============footer end =================-->
            <!---==============mobile menu =================-->
            <div class="crt_mobile_menu">
                <div class="menu-backdrop"></div>
                <nav class="menu-box">
                    <div class="close-btn"><i class="icon-close"></i></div>
                    <form role="search" method="get" action="#">
                        <input type="search" class="search" placeholder="Search..." value="" name="s"
                            title="Search" />
                        <button type="submit" class="sch_btn"> <i class="icon-search"></i></button>
                    </form>
                    <div class="menu-outer">
                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                    </div>
                </nav>
            </div>
            <!---==============mobile menu end =================-->
            <!---==============search popup =================-->
            <div id="search-popup" class="search-popup">
                <div class="close-search"><i class="fa fa-times"></i></div>
                <div class="popup-inner">
                    <div class="overlay-layer"></div>
                    <div class="search-form">
                        <fieldset>
                            <form role="search" method="get" action="#">
                                <input type="search" class="search" placeholder="Search..." value=""
                                    name="s" title="Search" />
                                <button type="submit" class="sch_btn"> <i class="icon-search"></i></button>
                            </form>
                        </fieldset>
                    </div>
                </div>
            </div>
            <!---==============search popup end =================-->
            <!---==============modal popup =================-->
            <div class="modal_popup one">
                <div class="modal-popup-inner">
                    <div class="close-modal"><i class="fa fa-times"></i></div>
                    <div class="modal_box">
                        <div class="row">
                            <div class="col-lg-5 col-md-12 form_inner">
                                <div class="form_content">
                                    <form class="contact-form" method="post"
                                        action="https://themepanthers.com/html/creote-html/sendemail.php">
                                        <p>
                                            <label> Your name<br />
                                                <input type="text" name="name" value="" size="40"
                                                    aria-required="true" aria-invalid="false"
                                                    placeholder="Enter Your Name" />
                                                <br />
                                                <i class="fa fa-user"></i><br />
                                            </label>
                                        </p>
                                        <p><label> Your email<br />
                                                <input type="email" name="email" value="" size="40"
                                                    aria-required="true" aria-invalid="false"
                                                    placeholder="Enter Your Email" />
                                                <br />
                                                <i class="fa fa-envelope"></i><br />
                                            </label>
                                        </p>
                                        <p>
                                            <label> Subject<br />
                                                <input type="text" name="subject" value="" size="40"
                                                    aria-required="true" aria-invalid="false"
                                                    placeholder="Enter Your Subject" />
                                                <br />
                                                <i class="fa fa-folder"></i><br />
                                            </label>
                                        </p>
                                        <p>
                                            <label> Your message (optional)<br />
                                                <textarea name="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea"
                                                    aria-invalid="false" placeholder="Enter Your Message"></textarea>
                                                <br />
                                                <i class="fa fa-comments"></i><br />
                                            </label>
                                        </p>
                                        <p><input type="submit" value="Submit" /></p>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-12 about_company_inner">
                                <div class="abt_content">
                                    <div class="logo">
                                        <img src="assets/images/logo-default.png" alt="img"
                                            class="company_logo_modal">
                                    </div>
                                    <div class="text">
                                        <p> The great explorer of the truth, the master-builder of human happiness no
                                            one rejects
                                            dislikes avoids pleasure itself because it is pleasure but because know who
                                            do not those
                                            how to pursue pleasures rationally encounter consequences that are extremely
                                            painful
                                            desires to obtain.</p>
                                        <a href="#">Read More</a>
                                    </div>
                                    <div class="post_contet_modal">
                                        <h2> Latest News</h2>
                                        <div class="post_enable">
                                            <div class="modal_post_grid">
                                                <a href="blog-single.html">
                                                    <img width="852" height="812"
                                                        src="assets/images/blog/blog-image-9.jpg"
                                                        class="main_img wp-post-image" alt="img" />
                                                </a>
                                            </div>
                                            <div class="modal_post_grid">
                                                <a href="blog-single.html">
                                                    <img width="852" height="812"
                                                        src="assets/images/blog/blog-image-8.jpg"
                                                        class="main_img wp-post-image" alt="img" />
                                                </a>
                                            </div>
                                            <div class="modal_post_grid">
                                                <a href="blog-single.html">
                                                    <img width="852" height="812"
                                                        src="assets/images/blog/blog-image-7.jpg"
                                                        class="main_img wp-post-image" alt="img" />
                                                </a>
                                            </div>
                                            <div class="modal_post_grid">
                                                <a href="blog-single.html">
                                                    <img width="852" height="812"
                                                        src="assets/images/blog/blog-image-6.jpg"
                                                        class="main_img wp-post-image" alt="img" />
                                                </a>
                                            </div>
                                            <div class="modal_post_grid">
                                                <a href="blog-single.html">
                                                    <img width="852" height="812"
                                                        src="assets/images/blog/blog-image-5.jpg"
                                                        class="main_img wp-post-image" alt="img" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="copright">
                                        © 2025 Creote. All Rights Reserved.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!---==============modal popup end=================-->
            <!---==============cart=================-->
            <div class="side_bar_cart" id="mini_cart">
                <div class="cart_overlay"></div>
                <div class="cart_right_conten">
                    <div class="close">
                        <div class="close_btn_mini"><i class="icon-close"></i></div>
                    </div>
                    <div class="cart_content_box">
                        <div class="contnet_cart_box">
                            <div class="widget_shopping_cart_content">
                                <p class="woocommerce-mini-cart__empty-message">No products in the cart.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!---==============cart=================-->
            <!---==============floating menu=================-->
            <div class="floating_menu_box">
                <ul class="float_menu_box">
                    <i class="close fa fa-times"></i>
                    <li class="floating_menu_text active">
                        <a href="#home"> Home </a>
                    </li>

                    <li class="floating_menu_text ">
                        <a href="#about">About </a>
                    </li>

                    <li class="floating_menu_text ">
                        <a href="#service"> Service </a>
                    </li>

                    <li class="floating_menu_text ">
                        <a href="#process"> Process </a>
                    </li>

                    <li class="floating_menu_text ">
                        <a href="#projects"> Projects </a>
                    </li>

                    <li class="floating_menu_text">
                        <a href="#blog"> Blog </a>
                    </li>
                </ul>
            </div>
            <!---==============floating menu=================-->
        </div>
        <!-- Back to top with progress indicator-->
        <div class="prgoress_indicator">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
        <!---========================== javascript ==========================-->
        <script type='text/javascript' src='assets/js/jquery-3.6.0.min.js'></script>
        <script type='text/javascript' src='assets/js/bootstrap.min.js'></script>
        <script type='text/javascript' src='assets/js/jquery.fancybox.js'></script>
        <script type='text/javascript' src='assets/js/jQuery.style.switcher.min.js'></script>
        <script type='text/javascript' src='assets/js/jquery.flexslider-min.js'></script>
        <script type='text/javascript' src='assets/js/color-scheme.js'></script>
        <script type='text/javascript' src='assets/js/owl.js'></script>
        <script type='text/javascript' src='assets/js/swiper.min.js'></script>
        <script type='text/javascript' src='assets/js/isotope.min.js'></script>
        <script type='text/javascript' src='assets/js/countdown.js'></script>
        <script type='text/javascript' src='assets/js/simpleParallax.min.js'></script>
        <script type='text/javascript' src='assets/js/appear.js'></script>
        <script type='text/javascript' src='assets/js/jquery.countTo.js'></script>
        <script type='text/javascript' src='assets/js/sharer.js'></script>
        <script type='text/javascript' src='assets/js/validation.js'></script>
        <!-- map script -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script>
        <script src="assets/js/gmaps.js"></script>
        <script src="assets/js/map-helper.js"></script>
        <!-- main-js -->
        <script type='text/javascript' src='assets/js/creote-extension.js'></script>
        <!---========================== javascript ==========================-->
        @include('user.layout.chat')
</body>

<!-- Mirrored from themepanthers.com/html/creote-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Sep 2025 18:36:17 GMT -->

</html>
