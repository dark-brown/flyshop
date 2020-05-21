<html>

<head>
   
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!--====== Title ======-->
    <title>Fresh Vial - Drinking Mineral Water Delivery HTMl Template</title>
    
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ url('public/images/favicon.png') }}" type="image/png">
    
    <!--====== Owl Carousel css ======-->
    <link rel="stylesheet" href="{{ url('public/css/owl.carousel.min.css') }}">
    
    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="{{ url('public/css/magnific-popup.css') }}">
    
    <!--====== Slick css ======-->
    <link rel="stylesheet" href="{{ url('public/css/slick.css') }}">
    
    <!--====== Nice Select css ======-->
    <link rel="stylesheet" href="{{ url('public/css/nice-select.css') }}">
    
    <!--====== Nice Number css ======-->
    <link rel="stylesheet" href="{{ url('public/css/jquery.nice-number.min.css') }}">
    
    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="{{ url('public/css/font-awesome.min.css') }}">
    
    <!--====== Aanimate css ======-->
    <link rel="stylesheet" href="{{ url('public/css/animate.css') }}">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{ url('public/css/bootstrap.min.css') }}">
    
    <!--====== Default css ======-->
    <link rel="stylesheet" href="{{ url('public/css/default.css') }}">
    
    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{ url('public/css/style.css') }}">
    
    <!--====== Responsive css ======-->
    <link rel="stylesheet" href="{{ url('public/css/responsive.css') }}">
  
    <link rel="stylesheet" href="{{ url('public/css/admin.css') }}">
    
    <!--====== jquery js ======-->
    <script src="{{ url('public/js/vendor/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ url('public/js/vendor/jquery-1.12.4.min.js') }}"></script>
</head>

<body>

<!--====== PREALOADER PART START ======-->

<div class="preloader">
    <div class="thecube">
        <div class="cube c1"></div>
        <div class="cube c2"></div>
        <div class="cube c4"></div>
        <div class="cube c3"></div>
    </div>
</div>

<!--====== PREALOADER PART START ======-->

<!--====== HEADER PART START ======-->

<header id="header-part">
    <!--===== HEADER TOP START =====-->
    <div class="header-top pt-15 pb-15 d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-xl-3">
                    <div class="phone text-center text-lg-left">
                        <p>Phone : (+88 - 123456789)</p>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-6">
                    <div class="opening text-center">
                        <p>Opening Hours : Monday To Saturday - 8AM TO 8PM</p>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3">
                    <div class="address text-center text-lg-right">
                        <p><i class="fa fa-map-marker"></i>KA-62/1, Kuril, Dubai, Urab State</p>
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> 
    <!--===== HEADER TOP ENDS =====-->
    
    <!--===== NAVBAR START =====-->
    <div class="navigation">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        
                        <a class="navbar-brand" href="index.html">
                            <img src="{{ url('public/images/logo.png') }}" alt="Logo">
                        </a> <!-- Logo -->
                        
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button> <!-- toggle Button -->

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item">
                                    <a class="active" href="{{ url('/') }}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('/about') }}">About Us</a>
                                </li>
                            @guest
                            @else
                                @if (Auth::user()->role == 0)
                                    <li class="nav-item">
                                        <a href="#">Cart Products</a>
                                        <ul class="sub-menu">
                                            <li class="li"><a href="{{ url('/cart') }}">Cart</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('/setting') }}">Setting</a>
                                    </li>
                                @elseif ( Auth::user()->role == 1)
                                    <li class="nav-item">
                                        <a href="{{ url('/setting') }}">Setting</a>
                                    </li>
                                @elseif (Auth::user()->role == 2)
                                    <li class="nav-item">
                                        <a href="#">Cart Products</a>
                                        <ul class="sub-menu">
                                            <li class="li"><a href="{{ url('/cart') }}">Cart</a></li>
                                        </ul>
                                    </li>
                                @endif
                            @endguest
                                <li class="nav-item">
                                    <a href="{{ url('/contact') }}">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                        <div class="cart-search">
                            <ul>
                                @guest
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="/setting_profile">
                                                Setting Profile
                                            </a>
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                            </ul>
                        </div> <!-- cart search -->
                    </nav>  <!-- nav -->
                    
                </div> 
            </div> <!-- row -->
        </div> <!-- container -->
    </div>
    <!--===== NAVBAR ENDS =====-->
</header>

<!--====== HEADER PART ENDS ======-->



@yield('content')

  <!--====== DELIVERY PART START ======-->

  <section id="delivery-part" class="bg_cover" data-overlay="8" style="background-image: url(public/images/bg-2.jpg)">
      <div class="container">
          <div class="row align-items-center">
              <div class="col-lg-7 offset-xl-1">
                  <div class="delivery-text text-center pb-30">
                      <h2>Water Delivery 20 k.m.  Free Service</h2>
                      <p>Nunc molestie mi nunc, nec accumsan libero dignissim sit amet. Fusce sit amet tincidunt metus. Nunc eu risus suscipit massa dapibu.</p>
                      <a href="#">Read More</a>
                  </div>
              </div>
          </div>
      </div>
      <div class="delivery-image d-none d-lg-flex align-items-end">
          <img src="{{ url('public/images/delivery-van.png') }}" style="width: 70%;" alt="Iamge">
      </div>
  </section>

  <!--====== DELIVERY PART ENDS ======-->


  <!--====== FOOTER PART START ======-->

  <footer id="footer-part" class="pt-65">
      <div class="container ">
          <div class="newsletter pb-45">
              <div class="row align-items-end">
                  <div class="col-lg-4">
                      <div class="newsletter-text">
                          <h2>Newsletter</h2>
                          <p>Nullam condimentum varius ipsum at viverra. Donec tortor metus, sollicitudin vitae est id, ullamcorper pretium tortor.</p>
                      </div>
                  </div>
                  <div class="col-lg-7 offset-lg-1">
                      <form action="#">
                          <div class="row no-gutters pt-40">
                              <div class="col-sm-9">
                                  <div class="newsform">
                                      <input type="email" placeholder="Enter Your email address...">
                                  </div>
                              </div>
                              <div class="col-sm-3">
                                      <div class="newsform">
                                          <button type="button">Subscribe</button>
                                      </div>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
          
          <div class="footer pt-20 pb-45">
              <div class="row">
                  <div class="col-lg-3 col-md-6">
                      <div class="footer-about pt-30">
                          <a href="#"><img src="{{ url('public/images/logo-footer.png') }}" alt="logo"></a>
                          <p>Donec vel ligula ornare, finibus ex at, vive risus. Aenean velit ex, finibus elementum eu, dignissim varius augue. </p>
                          <span><i class="fa fa-globe"></i>www.fresh@water.com</span>
                      </div>
                  </div>
                  <div class="col-lg-2 col-md-3 col-sm-6">
                      <div class="footer-title pt-30">
                          <h5>Information</h5>
                      </div>
                      <div class="footer-info">
                          <ul>
                              <li><a href="contact.html">Contact Us</a></li>
                              <li><a href="about.html">About Us</a></li>
                              <li><a href="#">Delivery Information</a></li>
                              <li><a href="#">Privacy Policy</a></li>
                              <li><a href="#">Terms & Conditions</a></li>
                              <li><a href="#">Privacy Policy</a></li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-lg-2 col-md-3 col-sm-6">
                      <div class="footer-title pt-30">
                          <h5>Our Services</h5>
                      </div>
                      <div class="footer-info">
                          <ul>
                              <li><a href="#">My Account</a></li>
                              <li><a href="#">Order History</a></li>
                              <li><a href="#">Wishlist</a></li>
                              <li><a href="#">Newsletter</a></li>
                              <li><a href="#">Returns</a></li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-lg-2 col-md-6 col-sm-6">
                      <div class="footer-title pt-30">
                          <h5>Recent News</h5>
                      </div>
                      <div class="footer-news">
                          <ul>
                              <li>
                                  <div class="f-news">
                                      <h6 class="news-title"><a href="#">Nullam condimenum varius ipsum.</a></h6>
                                      <a class="news-date" href="#"><i class="fa fa-calendar"></i> 15 Aug 2019</a>
                                  </div>
                              </li>
                              <li>
                                  <div class="f-news">
                                      <h6 class="news-title"><a href="#">Nullam condimenum varius ipsum.</a></h6>
                                      <a class="news-date" href="#"><i class="fa fa-calendar"></i> 15 Aug 2019</a>
                                  </div>
                              </li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6">
                      <div class="footer-title pt-30">
                          <h5>Get In Tuch</h5>
                      </div>
                      <div class="footer-address">
                          <ul>
                              <li>
                                  <div class="icon map-i">
                                      <i class="fa fa-map-marker"></i>
                                  </div>
                                  <div class="address">
                                      <h5>Fresh Water</h5>
                                      <p>45 Grand Central Terminal <br> New York.</p>
                                  </div>
                              </li>
                              <li>
                                  <div class="icon">
                                      <i class="fa fa-volume-control-phone"></i>
                                  </div>
                                  <div class="address">
                                      <p>+00123654789</p>
                                  </div>
                              </li>
                              <li>
                                  <div class="icon">
                                      <i class="fa fa-envelope-o"></i>
                                  </div>
                                  <div class="address">
                                      <p>freshwater@gmail.com</p>
                                  </div>
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      
      <div class="copyright pt-15 pb-15 text-center">
          <p>&copy; All Rights Reserved <span>Fresh Water</span> 2020.</p>
      </div>
      
  </footer>

  <!--====== FOOTER PART ENDS ======-->

  <!--====== BACK TO TOP PART START ======-->

  <a href="#" class="back-to-top">
      <img src="{{ url('public/images/back-to-top.png') }}" alt="Icon">
  </a>

  <!--====== BACK TO TOP PART ENDS ======-->

    <!--====== Bootstrap js ======-->
    <script src="{{ url('public/js/popper.min.js') }}"></script>
    <script src="{{ url('public/js/bootstrap.min.js') }}"></script>
    
    <!--====== Owl Carousel js ======-->
    <script src="{{ url('public/js/owl.carousel.min.js') }}"></script>
    
    <!--====== Magnific Popup js ======-->
    <script src="{{ url('public/js/jquery.magnific-popup.min.js') }}"></script>
    
    <!--====== Slick js ======-->
    <script src="{{ url('public/js/slick.min.js') }}"></script>
    
    <!--====== Nice Number js ======-->
    <script src="{{ url('public/js/jquery.nice-number.min.js') }}"></script>
    
    <!--====== Nice Select js ======-->
    <script src="{{ url('public/js/jquery.nice-select.min.js') }}"></script>
    
    <!--====== Validator js ======-->
    <script src="{{ url('public/js/validator.min.js') }}"></script>

    <!--====== Ajax Contact js ======-->
    <script src="{{ url('public/js/ajax-contact.js') }}"></script>

    <!--====== Main js ======-->
    <script src="{{ url('public/js/main.js') }}"></script>

    <!--====== Google Map js ======-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC3Ip9iVC0nIxC6V14CKLQ1HZNF_65qEQ"></script>
    <script src="{{ url('public/js/map-script.js') }}"></script>

</body>

</html>