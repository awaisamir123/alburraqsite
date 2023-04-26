<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow">
    <meta name="geo.region" content="US-WA">

    @yield('meta')
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>@yield('title')</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap/bootstrap.min.css') }}">
    <!-- Optional theme -->

    <!-- Custom css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style1.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style2.css') }}">

    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/ionicons.min.css') }}">

    <!-- Flexslider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flexslider.css') }}">
    <!-- Owl -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/magnific-popup.css') }}">

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>


    <script src="{{ asset('assets/js/jquery.lazyload.js') }}"></script>

    <script src="{{ asset('assets/js/bootstrap/bootstrap.min.js') }}"></script>

    <script src="{{ asset('assets/js/pace.min.js') }}"></script>

    <script src="{{-- asset('js/jq2.js') --}}"></script>

    <script async src="{{ asset('assets/js/isotope.min.js') }}"></script>

    <script src="{{ asset('assets/js/jquery.flexslider-min.js') }}"></script>

    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-53DNZQC');
    </script>
    <!-- End Google Tag Manager -->


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>


    <![endif]-->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    {{-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-98130539-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-98130539-1');
    </script> --}}

    <style>
        .container {
            width: 85%;
        }

        @media only screen and (max-width: 625px) {

            .container {
                width: 100%;
            }
        }

        header nav.navbar #sidemenu .menu-holder ul li a.active,
        header nav.navbar #sidemenu .menu-holder ul li a.active-item {

            color: #bbb2b2 !important;
        }

        .subMenu {
            width: 240px !important;
        }

        @media only screen and (max-width: 625px) {
            .subMenu {
                width: 100%;
            }
        }

        @media screen and (min-width: 1000px) {
            .mobile-menu {
                display: none !important;
            }
        }

        @media screen and (max-width: 1000px) {
            .desktop-menu {
                display: none !important;
            }
        }

        #myloader .loader .double-bounce1,
        #myloader .loader .double-bounce2 {
            background-color: #32ACE3 !important;
        }
    </style>


</head>

<body>
    <!--  Main Wrap  -->
    <div id="main-wrap">
        <!--  Header & Menu  -->
        <header id="header" class="border">
            <div class="container">
                <nav class="navbar navbar-default">
                    <!--  Header Logo  -->
                    <div id="logo" style="/*margin-left: -24px;*/">
                        <a class="navbar-brand" href="/">
                            <img src="{{ asset('logos/alburraq-logo320.png') }}" class="normal" alt="logo">
                            <img src="{{ asset('logos/alburraq-logo680.png') }}" class="retina" alt="logo">
                        </a>
                    </div>
                    <!--  END Header Logo  -->
                    <!--  Menu  -->
                    <div id="sidemenu">
                        <div class="menu-holder desktop-menu">
                            <ul>
                                <li class="submenu">
                                    <a href="/"
                                        class=@if (url()->current() == route('homepage')) "active-item" @endif>Home</a>
                                </li>
                                <li class="submenu">
                                    <a href="{{ route('talents.index') }}"
                                        class=@if (url()->current() == route('talents.index')) "active-item" @endif>Talent Showcase</a>
                                </li>
                                <li class="submenu " aria-haspopup="true">
                                    <a href="{{ route('services.index') }}" aria-haspopup="true"
                                        class=@if (url()->current() == route('services.index')) "active-item" @endif>Services</a>
                                    <ul class="sub-menu " aria-haspopup="true">
                                        <li {{-- style="width: 330px" --}}class="subMenu"><a
                                                href="{{ route('services.webdesignanddevelopment') }}"
                                                class=@if (url()->current() == route('services.webdesignanddevelopment')) "active-item" @endif>Website
                                                Designing and Development</a></li>

                                        <li {{-- style="width: 330px" --}}class="subMenu"><a
                                                href="{{ route('services.softwaredevelopment') }}"
                                                class=@if (url()->current() == route('services.softwaredevelopment')) "active-item" @endif>Software
                                                Development</a></li>

                                        <li class="subMenu"><a href="{{ route('services.appdevelopment') }}"
                                                class=@if (url()->current() == route('services.appdevelopment')) "active-item" @endif>Mobile
                                                Applications Development</a></li>

                                        <li class="subMenu"><a href="{{ route('services.artificialintelligence') }}"
                                                class=@if (url()->current() == route('services.artificialintelligence')) "active-item" @endif>Artificial
                                                Intelligence</a></li>

                                        <li class="subMenu"><a href="{{ route('services.digitalmarketing') }}"
                                                class=@if (url()->current() == route('services.digitalmarketing')) "active-item" @endif>Digital
                                                Marketing</a></li>

                                    </ul>
                                </li>

                                <li class="submenu">
                                    <a href="{{ route('portfolio.index') }}"
                                        class=@if (url()->current() == route('portfolio.index')) "active-item" @endif>Portfolio</a>
                                </li>


                                <li class="submenu">

                                    <a href="/blogs/"
                                        class=@if (url()->current() == 'https://burraq.zongo.io/blogs/') "active-item" @endif>Blog</a>

                                </li>

                                <li>
                                    <a href="{{ route('contact-us.index') }}"
                                        class=@if (url()->current() == route('contact-us.index')) "active-item" @endif>Contact Us</a>
                                </li>

                                <li>
                                    <a href="{{ route('about-us.index') }}"
                                        class=@if (url()->current() == route('about-us.index')) "active-item" @endif>About Us</a>
                                </li>
                            </ul>
                        </div>
                        <div class="menu-holder mobile-menu">
                            <ul>
                                <li class="submenu">
                                    <a href="/"
                                        class=@if (url()->current() == route('homepage')) "active-item" @endif>Home</a>
                                </li>

                                <li>
                                    <a href="{{ route('talents.index') }}"
                                        class=@if (url()->current() == route('talents.index')) "active-item" @endif>Talent
                                        Showcase</a>
                                </li>
                                <li class="submenu " aria-haspopup="true">
                                    <a href="javascript:void(0)" aria-haspopup="true"
                                        class=@if (url()->current() == route('services.index')) "active-item" @endif>Services</a>
                                    <ul class="sub-menu " aria-haspopup="true">

                                        <li class="subMenu"><a href="{{ route('services.index') }}"
                                                class=@if (url()->current() == route('services.index')) "active-item" @endif>Services</a>
                                        </li>

                                        <li class="subMenu"><a href="{{ route('services.webdesignanddevelopment') }}"
                                                class=@if (url()->current() == route('services.webdesignanddevelopment')) "active-item" @endif>Website
                                                Designing and Development</a></li>

                                        <li class="subMenu"><a href="{{ route('services.softwaredevelopment') }}"
                                                class=@if (url()->current() == route('services.softwaredevelopment')) "active-item" @endif>Software
                                                Development</a></li>

                                        <li class="subMenu"><a href="{{ route('services.appdevelopment') }}"
                                                class=@if (url()->current() == route('services.appdevelopment')) "active-item" @endif>Mobile
                                                Applications Development</a></li>

                                        <li class="subMenu"><a href="{{ route('services.artificialintelligence') }}"
                                                class=@if (url()->current() == route('services.artificialintelligence')) "active-item" @endif>Artificial
                                                Intelligence</a></li>

                                        <li class="subMenu"><a href="{{ route('services.digitalmarketing') }}"
                                                class=@if (url()->current() == route('services.digitalmarketing')) "active-item" @endif>Digital
                                                Marketing </a></li>

                                    </ul>
                                </li>


                                <li>
                                    <a href="{{ route('portfolio.index') }}"
                                        class=@if (url()->current() == route('portfolio.index')) "active-item" @endif>Portfolio</a>
                                </li>


                                <li>

                                    <a href="/blogs/"
                                        class=@if (url()->current() == 'https://burraq.zongo.io/blogs/') "active-item" @endif>Blog</a>

                                </li>

                                <li>
                                    <a href="{{ route('contact-us.index') }}"
                                        class=@if (url()->current() == route('contact-us.index')) "active-item" @endif>Contact Us</a>
                                </li>

                                <li>
                                    <a href="{{ route('about-us.index') }}"
                                        class=@if (url()->current() == route('about-us.index')) "active-item" @endif>About Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--  END Menu  -->
                    <!--  Button for Responsive Menu  -->
                    <div id="menu-responsive-sidemenu">
                        <div class="menu-button">
                            <span class="bar bar-1"></span>
                            <span class="bar bar-2"></span>
                            <span class="bar bar-3"></span>
                        </div>
                    </div>
                    <!--  END Button for Responsive Menu  -->
                </nav>
            </div>
        </header>
        <!--  END Header & Menu  -->

        <!--  Page Content  -->
        <div>
            @yield('page')
        </div>
        <!--  HomePage header  -->
        <!--  END Page Content -->
    </div>
    <!--  Main Wrap  -->

    <div class="row no-margin pre-footer" style="background-color: #32ACE3; margin: 0; width: 100%;">
        <div class="col-md-6 col-sm-6  padding-leftright-null">
            <div class="image">
                <img class="img-responsive"
                    style="margin-right: 5px;width: 100%;max-width: 450px;margin: 30px auto; -webkit-transform: scaleX(-1);
                            transform: scaleX(-1);"
                    src="/design/contact-us.png" alt="image 2">
            </div>
        </div>
        <div class="col-md-6 col-sm-6 pre-footer-contact-us padding-leftright-null">
            <h1 class="white margin-bottom"
                style="margin: 0 !important;padding: 0 30px; font-size: 24px; line-height: 30px;">What are you waiting
                for?</h1>
            <p class="heading left grey-light" style="margin: 0 0 20px 0 !important; padding: 0 30px;">Let's get
                started and make something amazing.</p>
            <a href="{{ route('contact-us.index') }}" class="btn-alt small border margin-null"
                style="font-weight: 700;font-size: 18px;">Contact Us</a>
        </div>
    </div>

    <!--  Footer  -->
    <footer>

        <div class="container">
            <div class="row no-margin">

                <div style="" class="col-md-4 text">
                    <h3><strong>About Al-Burraq</strong></h3>
                    <br>
                    <p>Global Experience in Providing Enterprise Solutions to the
                        e-Commerce & Management System Companies.
                        <br>
                        We understand the value of customization and strive to continually deliver unprecedented
                        solutions
                        which cater directly to your business needs.
                        <br>
                        Passionate People Creative Thinking.

                    </p>
                </div>
                <div id="twitter-div" style="" class="col-md-4 text">

                    <a class="twitter-timeline" href="https://twitter.com/AlBurraqTech" data-width="300"
                        data-height="100" data-chrome="noscrollable transparent noheader nofooter" data-theme="light"
                        data-link-color="#E95F28" data-tweet-limit="1">
                    </a>
                    <script src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
                <div style="" class="col-md-4 text">
                    <h3><strong>Struggling with Product Development? Contact Geeks Below.</strong></h3>
                    <br>
                    <h4 style="padding: 06px 0 05px 0 !important"><strong> <a href="mailto:info@al-burraq.com"><i
                                    class="fa fa-envelope" aria-hidden="true"></i> info@al-burraq.com </a></strong>
                    </h4>

                    <h4 style="padding: 06px 0 05px 0 !important"><i class="fa fa-phone"
                            aria-hidden="true"></i><strong> +1 (301) 887 5877 </strong></h4>
                    <div style="/* margin-top: 10px*/ " class="row no-margin">
                        <ul class="social" style="float: none">
                            <li><a href="https://twitter.com/AlBurraqTech"><i style="padding-left: 0 !important;"
                                        class="fa fa-twitter" aria-hidden="true"></i></a>
                            </li>
                            <li><a href="https://www.linkedin.com/company/alburraqtech/"><i class="fa fa-linkedin"
                                        aria-hidden="true"></i></a></li>
                            <li><a href="https://www.facebook.com/alburraqtech"><i class="fa fa-facebook"
                                        aria-hidden="true"></i></a></li>
                            <li><a href="skype:/http:/alihassan869?chat"><i class="fa fa-skype"
                                        aria-hidden="true"></i></a>
                            </li>
                        </ul>
                        <a href="{{ route('privacy') }}">
                            <h3>Privacy Policy</h3>
                        </a>

                    </div>
                </div>

            </div>
        </div>
    </footer>


    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>

    <script src="{{ asset('assets/js/jquery.scrollTo.min.js') }}"></script>

    <script src="{{-- asset('assets/js/smooth.scroll.min.js') --}}"></script>

    <script src="{{ asset('assets/js/jquery.appear.js') }}"></script>

    <script src="{{ asset('assets/js/jquery.countTo.js') }}"></script>

    <script src="{{ asset('assets/js/jquery.scrolly.min.js') }}"></script>

    <script src="{{ asset('assets/js/plugins-scroll.js') }}"></script>

    <script src="{{ asset('assets/js/imagesloaded.min.js') }}"></script>

    <script src="{{ asset('assets/js/modaal.min.js') }}"></script>

    <script src="{{ asset('assets/js/main.min.js') }}"></script>


    <style>
        .custompaddingBottom {
            padding-bottom: 90px;
        }

        .img-post:hover {
            box-shadow: 0 6px 30px 0 rgba(0, 0, 0, 0.42);
            transition: all .4s ease;
        }

        @media screen and (max-width: 766.99px) {
            .pre-footer-contact-us {
                align-items: center !important;
            }

            .pre-footer-contact-us a {
                margin-bottom: 30px !important;
                margin-left: 0px !important;
            }

        }

        @media screen and (max-width: 500px) {
            .fontsize500 {
                font-size: 35px !important;

            }
        }

        .pre-footer-contact-us {
            display: flex;
            padding: 0 30px !important;
            height: 100%;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
        }

        @media screen and (min-width: 767.99px) {
            .pre-footer {
                height: 320px;
            }

            .pre-footer-contact-us a {
                margin-left: 30px !important;
            }

        }
    </style>
    <script type="text/javascript">
        $(document).ready(function() {

            if ($(".container").size() > 0) {
                if (document.createStyleSheet) {
                    document.createStyleSheet('{{ asset('assets/css/bootstrap/bootstrap-theme.min.css') }}');
                } else {
                    $("head").append($(
                        "<link   rel='stylesheet' type='text/css' media='screen' href='{{ asset('assets/css/bootstrap/bootstrap-theme.min.css') }}'>"
                    ));
                }
            }
        });
    </script>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-53DNZQC" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
</body>

</html>
