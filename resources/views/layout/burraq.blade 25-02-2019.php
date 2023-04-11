
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Al-Burraq Tech</title>








    <!-- Bootstrap -->
    <link   rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap/bootstrap.min.css')}}">


    <!-- Optional theme -->
    <link   rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap/bootstrap-theme.min.css')}}">


    <!-- Custom css -->
    <link   rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">


    <!-- Font Awesome -->
    <link   rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.min.css')}}">


    <link   rel="stylesheet" type="text/css" href="{{asset('assets/css/ionicons.min.css')}}">


    <!-- Flexslider -->
    <link   rel="stylesheet" type="text/css" href="{{asset('assets/css/flexslider.css')}}">


    <!-- Owl -->
    <link   rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.carousel.css')}}">


    <!-- Magnific Popup -->
    <link   rel="stylesheet" type="text/css" href="{{asset('assets/css/magnific-popup.css')}}">


    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>


    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <script  src="{{asset('assets/js/pace.min.js')}}"></script>

    <script  src="{{asset('js/jq2.js')}}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>


    <![endif]-->

    <style>
        .container {
            width: 85%;
        }

        @media only screen and (max-width: 625px) {

            .container {
                width: 100%;
            }
        }

        header nav.navbar #sidemenu .menu-holder ul li a.active, header nav.navbar #sidemenu .menu-holder ul li a.active-item {

            color:#bbb2b2 !important;
        }
    </style>
</head>
<body>

<!--  Loader  -->
<div id="myloader">
    <div class="loader">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
</div>
<!--  END Loader  -->


<!--  Main Wrap  -->
<div id="main-wrap">
    <!--  Header & Menu  -->
    <header id="header" class="border">
        <div class="container">
            <nav class="navbar navbar-default">
                <!--  Header Logo  -->
                <div id="logo" style="/*margin-left: -24px;*/">
                    <a class="navbar-brand" href="/">
                        <img src="/assets/img/al-logo-ssa.png" class="normal" alt="logo">
                        <img src="/assets/img/al-logo-ssa.png" class="retina" alt="logo">
                    </a>
                </div>
                <!--  END Header Logo  -->
                <!--  Menu  -->
                <div id="sidemenu">
                    <div class="menu-holder">
                        <ul>
                            <li class="submenu">
                                <a href="/" class=
                                @if(url()->current() == route('homepage')) "active-item" @endif  >Home</a>
                               {{-- <ul class="sub-menu">
                                    <li><a href="index.html">Home Minimal</a></li>
                                    <li><a href="index-creative.html">Home Creative</a></li>
                                    <li><a href="index-agency.html">Home Agency</a></li>
                                    <li><a href="index-shop.html">Home Shop</a></li>
                                </ul>--}}
                            </li>
                            <li class="submenu ">
                                <a  href="{{route('services.index')}}"   class=
                                @if(url()->current() == route('services.index')) "active-item" @endif >Services</a>
                                <ul class="sub-menu">
                                    <li style="width: 330px"><a href="{{route('services.webdesignanddevelopment')}}"  class=
                                        @if(url()->current() == route('services.webdesignanddevelopment')) "active-item" @endif>Web Designing and Development Company in USA</a></li>
                                    <li><a href="{{route('services.wordpressdevelopment')}}" class=
                                        @if(url()->current() == route('services.wordpressdevelopment')) "active-item" @endif>Wordpress Development Company in USA</a></li>
                                    <li><a href="{{route('services.appdevelopment')}}" class=
                                        @if(url()->current() == route('services.appdevelopment')) "active-item" @endif>Mobile App Development Company in USA</a></li>
                                    <li><a href="{{route('services.laraveldevelopment')}}" class=
                                        @if(url()->current() == route('services.laraveldevelopment')) "active-item" @endif>Laravel Development Company In USA</a></li>
                                    <li><a href="{{route('services.softwaredevelopment')}}" class=
                                        @if(url()->current() == route('services.softwaredevelopment')) "active-item" @endif>Software Development Company in USA</a></li>
                                    <li><a href="{{route('services.seo')}}" class=
                                        @if(url()->current() == route('services.seo')) "active-item" @endif>SEO Company in USA </a></li>
                                    <li><a href="{{route('services.socialmediamarketing')}}" class=
                                        @if(url()->current() == route('services.socialmediamarketing')) "active-item" @endif>Social Media Marketing Company in USA</a></li>
                                </ul>
                            </li>

                           {{-- <li class="submenu">
                                <a href="{{route('services.index')}}">Services</a>
                                <ul class="sub-menu" >

                                    <li>
                                        <div class="row">
                                            <div class="col-sm-4">
                                              <ul>
                                                 <li>  <a href="">Android </a></li>
                                                 <li>  <a href="">Android </a></li>
                                                 <li>  <a href="">Android </a></li>
                                              </ul>
                                            </div>
                                            <div class="col-sm-4">
                                                <ul>
                                                    <li>  <a href="">Android </a></li>
                                                    <li>  <a href="">Android </a></li>
                                                    <li>  <a href="">Android </a></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-4">
                                                <ul>
                                                    <li>  <a href="">Android </a></li>
                                                    <li>  <a href="">Android </a></li>
                                                    <li>  <a href="">Android </a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
--}}

                            <li class="submenu">
                                <a href="{{route('portfolio.index')}}" class=
                                @if(url()->current() == route('portfolio.index')) "active-item" @endif>Portfolio</a>
                            </li>

                           {{-- <li class="submenu">
                                <a href="javascript:void(0)">Journal</a>
                                <ul class="sub-menu">
                                    <li><a href="blog.html">Journal Classic</a></li>
                                    <li><a href="blog-minimal.html">Journal Minimal</a></li>
                                    <li><a href="single-post.html">Post</a></li>
                                    <li><a href="single-post-slider.html">Post Slider</a></li>
                                    <li><a href="single-post-video.html">Post Video</a></li>
                                </ul>
                            </li>--}}
                            <li class="submenu">
{{--
                                <a href="{{route('blogs.index')}}">Blog</a>
--}}
                                <a href="/blogs/" class=
                                @if(url()->current() == 'https://burraq.zongo.io/blogs/') "active-item" @endif >Blog</a>
                               {{-- <ul class="sub-menu">
                                    <li><a href="index-shop.html">Index Shop</a></li>
                                    <li><a href="single-product.html">Product</a></li>
                                </ul>--}}
                            </li>

                            <li>
                                <a href="{{route('contact-us.index')}}" class=
                                @if(url()->current() == route('contact-us.index')) "active-item" @endif >Become Partner</a>
                            </li>

                            <li>
                                <a href="{{route('about-us.index')}}" class=
                                @if(url()->current() == route('about-us.index')) "active-item" @endif>About Us</a>
                            </li>

                           {{-- <li>
                                <a href="{{route('contact-us.index')}}">Contacts</a>
                            </li>--}}
                            <!-- Lang -->
                          {{--  <li class="lang">
                                <span class="current"><a href="#">en</a></span>
                                <ul>
                                    <li><a href="#">it</a></li>
                                </ul>
                            </li>--}}
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
    <div {{--style="margin-left: -100px;margin-right: -100px" --}}>
        @yield('page')
    </div>
        <!--  HomePage header  -->
          <!--  END Page Content -->
</div>
<!--  Main Wrap  -->


<!--  Footer  -->
<footer>
    <div class="container">
        <div class="row no-margin">
            <div style="padding: 50px 10px;" class="col-md-4 text">
                <h3><strong>About Al-Burraq</strong></h3>
                <br>
                <p>{{--© 2019 Made with love by --}}Global Experience in Providing Enterprise Solutions to the e-Commerce & Management System Companies.
                    <br>
                    We understand the value of customization and strive to continually deliver unprecedented solutions which cater directly to your business needs.
                    <br>

                    Passionate People. Creative Thinking<a href="/" target="_blank">Al-burraq</a>


                </p>



            </div>
            <div style="padding: 50px 10px;" class="col-md-4 text {{--small--}}">
{{--
                <p>1st Floor 49-C Commercial Area Cavalry Ground Lahore Cantt.</p>
--}}            <h3><strong>From Twitter</strong></h3>
                <br>
                <a href="https://twitter.com/AlBurraqTech"> <h4 style=""><i  class="fa fa-twitter" aria-hidden="true"></i> @AlBurraqTech</h4>  </a>
                <br>
                <p>

                    Al-Burraq Technologies is Looking for SEO/SEM Expert, Content writer. Send your CV at info @al -burraq.com
                    <br>
                    3 years ago
                    <br> <br>
                    <strong>@AlBurraqTech</strong>  is Looking for SEO/SEM Expert, Content writer. Send your CV at info @al -burraq.com
                    <br>
                    3 years ago</p>
            </div>
            <div style="padding: 50px 10px;" class="col-md-4 text {{--small--}}">
               {{-- <p>+92(313) 335-9533<br>
                    <a href="mailto:info@al-burraq.com"> info@al-burraq.com </a></p>--}}
                <h3><strong>Let’s talk business. Contact us and we will discuss further.</strong></h3>
                <br>
                <h4><strong> <a href="mailto:info@al-burraq.com"> info@al-burraq.com </a> <br>

                +1 (301) 887 5877</strong></h4>
                <br>
                <p>

                    1st Floor 49-C Commercial Area Cavalry Ground Lahore Cantt.</p>
                <div style=" margin-top: 20px " class="row no-margin">
                    <ul class="social" style="float: none">
                        <li ><a href="https://twitter.com/AlBurraqTech"><i style="padding-left: 0 !important;" class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/alburraqtech/"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.facebook.com/alburraqtech"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="skype:/http:/alihassan869?chat"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                        <li><a href="https://plus.google.com/116343278252958357866"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
            {{--<div style="padding: 50px 10px; align-content: center;justify-content: center" class="col-md-3 text">
                <div class="row no-margin">
                    <ul class="social">
                        <li><a href="https://twitter.com/AlBurraqTech"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/alburraqtech/"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.facebook.com/alburraqtech"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="skype:/http:/alihassan869?chat"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                        <li><a href="https://plus.google.com/116343278252958357866"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>--}}
        </div>
    </div>
</footer>
<!--  END Footer. Class fixed for fixed footer  -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<script async src="{{asset('assets/js/jquery.min.js')}}"></script>

<!-- All js library -->

<script async src="{{asset('assets/js/bootstrap/bootstrap.min.js')}}"></script>


<script async src="{{asset('assets/js/jquery.flexslider-min.js')}}"></script>


<script async src="{{asset('assets/js/owl.carousel.min.js')}}"></script>


<script async src="{{asset('assets/js/isotope.min.js')}}"></script>


<script async src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>


{{--Googgle Api Key is not set here--}}
{{--
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=false"></script>
--}}



<script async src="{{asset('assets/js/jquery.scrollTo.min.js')}}"></script>

<script async src="{{asset('assets/js/smooth.scroll.min.js')}}"></script>

<script async src="{{asset('assets/js/jquery.appear.js')}}"></script>

<script async src="{{asset('assets/js/jquery.countTo.js')}}"></script>

<script async src="{{asset('assets/js/jquery.scrolly.js')}}"></script>

<script async src="{{asset('assets/js/plugins-scroll.js')}}"></script>

<script async src="{{asset('assets/js/imagesloaded.min.js')}}"></script>


{{--  In Head
<script async src="{{asset('assets/js/pace.min.js')}}"></script>
--}}

<script async src="{{asset('assets/js/main.js')}}"></script>

</body>
</html>
