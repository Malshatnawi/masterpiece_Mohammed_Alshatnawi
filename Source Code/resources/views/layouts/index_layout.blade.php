<!DOCTYPE html>
<html lang="zxx">   
    <head> 
        <!-- meta tag -->
        <meta charset="utf-8">
        <title>Taktika Educational Platform</title>
        <meta name="description" content="">
        <!-- responsive tag -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon -->
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/taktika_logo.jpg')}}">
        <!-- Bootstrap v4.4.1 css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
        <!-- font-awesome css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.min.css')}}">
        <!-- animate css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css')}}">
        <!-- owl.carousel css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.carousel.css')}}">
        <!-- slick css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/slick.css')}}">
        <!-- off canvas css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/off-canvas.css')}}">
        <!-- linea-font css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/linea-fonts.css')}}">
        <!-- flaticon css  -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/flaticon.css')}}">
        <!-- magnific popup css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/magnific-popup.css')}}">
        <!-- Main Menu css -->
        <link rel="stylesheet" href="{{asset('assets/css/rsmenu-main.css')}}">
        <!-- spacing css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/rs-spacing.css')}}">
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/style.css')}}"> <!-- This stylesheet dynamically changed from style.less -->
        <!-- responsive css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">




        @yield('style')











    </head>
    <body class="home-style5">
        
        <!--Preloader area start here-->
        <div id="loader" class="loader">
            <div class="loader-container">
                <div class='loader-icon'>
                    <img src="{{asset('assets/images/pre-logo.png')}}" alt="">
                </div>
            </div>
        </div>
        <!--Preloader area End here-->

        <!--Full width header Start-->
        <div class="full-width-header header-style2">
            <!--Header Start-->
            <header id="rs-header" class="rs-header">
                <!-- Topbar Area Start -->
                <div class="topbar-area">
                    <div class="container">
                        <div class="row y-middle">
                            <div class="col-md-6">
                                <ul class="topbar-contact">
                                    <li>
                                        <a href="https://www.google.com/maps/place/7th+Cir.,+Amman/@31.9594683,35.8554694,17z/data=!3m1!4b1!4m5!3m4!1s0x151ca10efc21a31d:0x6e8f71c86248f350!8m2!3d31.9594683!4d35.8576581">📍 7th circle - Silawi complex No. 404</a>
                                    </li>              
                                    <li>
                                        <a href="#">🕘 Sun - Thu: 9:00am–4:00pm.</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6 text-right">
                                <ul class="topbar-right">
                                    <li class="login-register">
                                        <a href="tel:+962 797627466">📞 +962 (6) 5815821 | +962 797627466</a>
                                    </li>
                                    <!-- <li class="btn-part">
                                        <a class="apply-btn" href="https://www.taktikaweb.com/">Visit Taktika</a>
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Topbar Area End -->

                <!-- Menu Start -->
                <div class="menu-area menu-sticky">
                    <div class="container">
                        <div class="row y-middle">
                            <div class="col-lg-5">
                                <div class="logo-cat-wrap">
                                    <div class="logo-part pr-90">
                                        <a class="dark-logo" href="/">
                                            <img src="https://www.taktikaweb.com/wp-content/uploads/2018/11/Taktika-Logo-2.png" alt="">
                                        </a>
                                        <a class="light-logo" href="/">
                                            <img src="https://www.taktikaweb.com/wp-content/uploads/2018/11/Taktika-Logo-2.png" alt="">
                                        </a>
                                    </div>
                                    <div class="categories-btn">
                                       <button type="button" class="cat-btn"><i class="fa fa-th"></i>Categories</button>
                                        <div class="cat-menu-inner">
                                            <ul id="cat-menu">
                                            @foreach($all_categories as $key => $value)
                                                <li><a href="/categories/{{$value->id}}">{{$value->category_name}}</a></li>
                                            @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            <div class="col-lg-7 text-center">
                                <div class="rs-menu-area">
                                    <div class="main-menu pr-80">
                                        <div class="mobile-menu">
                                            <a class="rs-menu-toggle">
                                                <i class="fa fa-bars"></i>
                                            </a>
                                        </div>
                                        <nav class="rs-menu">
                                            <ul class="nav-menu">
                                                <li class="menu-item-has-children current-menu-item">
                                                    <a href="/">Home</a>
                                                </li>
                                                <li class="menu-item-has-children">
                                                    <a href="#" id="nav-expander">About</a>
                                                </li>


                                            
                                                

                                                <!-- <li class="menu-item-has-children">
                                                    <a href="#">Courses</a>
                                                </li> -->

                                                <!-- <li class="menu-item-has-children">
                                                    <a href="#">Pages</a>
                                                </li> -->

                                                @if(Auth::check())

                                                <li class="menu-item-has-children">
                                                    <a href="/orders">My Learning</a>
                                                </li>

                                                 <li class="menu-item-has-children">

                                                <a href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();">
                                                        {{ __('Logout') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                                 
                                                </li>
                                                
                                                
                                                
                                                @else
                                                
                                                <li class="menu-item-has-children">
                                                    <a href="/register">Register</a>
                                                </li>

                                                <li class="menu-item-has-children">
                                                    <a href="/login">Login</a>
                                                </li>

                                                @endif
                                            </ul> <!-- //.nav-menu -->
                                        </nav>
                                    </div> <!-- //.main-menu -->
                                    <div class="expand-btn-inner">
                                        <ul>
                                            <li class="icon-bar cart-inner mini-cart-active">
                                                <a class="cart-icon">
                                                    <!-- <span class="cart-count">2</span> -->
                                                    <i class="flaticon-bag">{{ Session::has('cart') ? Session::get('cart')->totalQty : ''}}</i>
                                                    
                                                </a>
                                                <div class="woocommerce-mini-cart text-left">
                                                    <div class="cart-bottom-part">
                                                        <ul class="cart-icon-product-list">
                                                        @if(Session::has('cart'))
                                                        @foreach(Session::get('cart')->items as $key => $value)
                                                        
                                                            <li class="display-flex">
                                                                <div class="icon-cart">
                                                                    <a href="#"><i class="fa fa-times"></i></a>
                                                                </div>
                                                                <div class="product-info">
                                                                    <a href="cart.html">{{$value['item']->course_name}}</a><br>
                                                                    <span class="quantity">{{$value['item']->course_price}} JD</span>
                                                                </div>
                                                                <div class="product-image">
                                                                <!-- {{$item=$value['item']}} -->
                                                                    <a href="cart.html"><img src='{{asset("images/courses/$item->course_image")}}' alt="Product Image"></a>
                                                                </div>                       
                                                            </li>
                                                        @endforeach
                                                        @else
                                                            <!-- <li class="display-flex">
                                                                <div class="icon-cart">
                                                                    <a href="#"><i class="fa fa-times"></i></a>
                                                                </div>
                                                                <div class="product-info">
                                                                    <a href="cart.html">Spirit Level</a><br>
                                                                    <span class="quantity">1 × $30.00</span>
                                                                </div>
                                                                <div class="product-image">
                                                                    <a href="cart.html"><img src="{{asset('assets/images/shop/2.jpg')}}" alt="Product Image"></a>
                                                                </div>
                                                            </li> -->
                                                        @endif
                                                        </ul>
                                                       
                                                        <div class="total-price text-center">
                                                            <span class="subtotal">Subtotal:</span>
                                                            @if(Session::has('cart'))
                                                            <span class="current-price">{{Session::get('cart')->totalPrice}} JD</span>
                                                            @else
                                                            <span class="current-price">0 JD</span>
                                                            @endif
                                                        </div>

                                                        <div class="cart-btn text-center">
                                                            <a class="crt-btn btn1" href="/cart">View Cart</a>
                                                            <a class="crt-btn btn2" href="/checkout">Check Out</a>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </li>
                                            <li>
                                                <a class="hidden-xs rs-search" data-target=".search-modal" data-toggle="modal" href="#">
                                                    <i class="flaticon-search"></i>
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- <a id="nav-expander" class="nav-expander style3">
                                            <div class="bar">
                                                <h5>h</h5>
                                            </div>
                                        </a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Menu End -->

                <!-- Canvas Menu start -->
                <nav class="right_menu_togle hidden-md">
                    <div class="close-btn">
                        <span id="nav-close">
                            <div class="line">
                                <span class="line1"></span><span class="line2"></span>
                            </div>
                        </span>
                    </div>
                    <div class="canvas-logo">
                        <a href="/"><img src="https://www.taktikaweb.com/wp-content/uploads/2018/11/Taktika-Logo-2.png" alt="logo"></a>
                    </div>
                    <div class="offcanvas-text">
                        <p>Taktika is a training company that delivers practical training programs cross Middle East & North Africa for pharmaceutical &amp; non pharmaceutical companies. Our vast training experience cross region in training give us the advantage to deliver a state-of-the-art, unique, and practical training programs.
Two strong points make us stand out: Our materials are up-to-date. we have the know-how to convert theory into practice</p>
                    </div>
                    <div class="offcanvas-gallery">
                        <div class="gallery-img">
                            <a class="image-popup" href="https://www.taktikaweb.com/wp-content/uploads/2019/02/in.svg"><img src="https://www.taktikaweb.com/wp-content/uploads/2019/02/in.svg" alt=""></a>
                        </div>
                        <div class="gallery-img">
                            <a class="image-popup" href="https://www.taktikaweb.com/wp-content/uploads/2019/02/cons.svg"><img src="https://www.taktikaweb.com/wp-content/uploads/2019/02/cons.svg" alt=""></a>
                        </div>
                        <div class="gallery-img">
                            <a class="image-popup" href="https://www.taktikaweb.com/wp-content/uploads/2019/02/han.svg"><img src="https://www.taktikaweb.com/wp-content/uploads/2019/02/han.svg" alt=""></a>
                        </div>
                        <div class="gallery-img">
                            <a class="image-popup" href="https://www.taktikaweb.com/wp-content/uploads/2019/02/ac.svg"><img src="https://www.taktikaweb.com/wp-content/uploads/2019/02/ac.svg" alt=""></a>
                        </div>
                        <div class="gallery-img">
                            <a class="image-popup" href="{{asset('assets/images/gallery/5.jpg')}}"><img src="https://i1.wp.com/www.taktikaweb.com/wp-content/uploads/2019/01/6_hospital-512.png?w=512&ssl=1" alt=""></a>
                        </div>
                        <!-- <div class="gallery-img">
                            <a class="image-popup" href="{{asset('assets/images/gallery/6.jpg')}}"><img src="{{asset('assets/images/gallery/6.jpg')}}" alt=""></a>
                        </div> -->
                    </div>
                    <div class="map-img">
                        <img src="https://www.taktikaweb.com/wp-content/uploads/2020/07/17-1.jpg" alt="">
                    </div>
                    <div class="canvas-contact">
                        <ul class="social">
                            <li><a href="https://www.facebook.com/taktika.jo"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </nav>
                <!-- Canvas Menu end -->
            </header>
            <!--Header End-->
        </div>
        <!--Full width header End-->

		<!-- Main content Start -->
        <div class="main-content">


        @yield('content')
            

        
        </div> 
        <!-- Main content End --> 

        <!-- Footer Start -->
        <footer id="rs-footer" class="rs-footer">
            
            <div class="footer-bottom">
                <div class="container">                    
                    <div class="row y-middle">
                        <div class="col-lg-4 md-mb-20">
                            <div class="footer-logo md-text-center">
                                <a href="/"><img src="https://www.taktikaweb.com/wp-content/uploads/2018/11/Taktika-Logo-2.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-4 md-mb-20">
                            <div class="copyright text-center md-text-left">
                                <p> Copyright 2021 © Taktika</p>
                            </div>
                        </div>
                        <div class="col-lg-4 text-right md-text-left">
                            <ul class="footer-social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer End -->

        <!-- start scrollUp  -->
        <div id="scrollUp">
            <i class="fa fa-angle-up"></i>
        </div>
        <!-- End scrollUp  -->

        <!-- Search Modal Start -->
        <div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span class="flaticon-cross"></span>
            </button>
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="search-block clearfix">
                        <form method="get" action="/search">
                            <div class="form-group">
                                <input class="form-control" name="query" placeholder="Search Here..." type="text">
                                <br>
                                <button class="btn btn-success">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search Modal End -->

        @include('sweetalert::alert')


        @yield('script')

        <!-- modernizr js -->
        <script src="{{asset('assets/js/modernizr-2.8.3.min.js')}}"></script>
        <!-- jquery latest version -->
        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
        <!-- Bootstrap v4.4.1 js -->
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <!-- Menu js -->
        <script src="{{asset('assets/js/rsmenu-main.js')}}"></script> 
        <!-- op nav js -->
        <script src="{{asset('assets/js/jquery.nav.js')}}"></script>
        <!-- owl.carousel js -->
        <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
        <!-- Slick js -->
        <script src="{{asset('assets/js/slick.min.js')}}"></script>
        <!-- isotope.pkgd.min js -->
        <script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
        <!-- imagesloaded.pkgd.min js -->
        <script src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
        <!-- wow js -->
        <script src="{{asset('assets/js/wow.min.js')}}"></script>
        <!-- Skill bar js -->
        <script src="{{asset('assets/js/skill.bars.jquery.js')}}"></script>
        <script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>        
         <!-- counter top js -->
        <script src="{{asset('assets/js/waypoints.min.js')}}"></script>
        <!-- video js -->
        <script src="{{asset('assets/js/jquery.mb.YTPlayer.min.js')}}"></script>
        <!-- magnific popup js -->
        <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>      
        <!-- plugins js -->
        <script src="{{asset('assets/js/plugins.js')}}"></script>
        <!-- contact form js -->
        <script src="{{asset('assets/js/contact.form.js')}}"></script>
        <!-- main js -->
        <script src="{{asset('assets/js/main.js')}}"></script>
    </body>
</html>