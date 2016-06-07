<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link href="{{URL:: asset('bootstrap3/css/bootstrap.css')}}" rel="stylesheet">

    <!-- main css -->
    <link href="{{URL:: asset('css/master.css')}}" rel="stylesheet">
    
    <!-- mobile css -->
    <link href="{{URL:: asset('css/responsive.css')}}" rel="stylesheet">
    
    <!-- FontAwesome Support -->
    <link rel="stylesheet" type="text/css" href= "{{URL:: asset('css/fontawesome/font-awesome.min.css')}}"/>
    <!-- FontAwesome Support -->
    
    <!-- Superfish menu -->
    <link rel="stylesheet" type="text/css" href="{{URL:: asset('css/superfish/superfish.css')}}" />
    <!-- Superfish menu -->
    
    <!-- Theme Color selector -->
    <link href="{{URL:: asset('js/theme-color-selector/theme-color-selector.css')}}" type="text/css" rel="stylesheet">
    <!-- Theme Color selector -->
    
    <!-- Owl Carousel -->
    <link rel="stylesheet" type="text/css" href="{{URL:: asset('js/owl-carousel/owl.carousel.css')}}" />
    <!-- Owl Carousel -->
    
    <!-- Typicons -->
    <link rel="stylesheet" type="text/css" href="{{URL:: asset('css/typicons/typicons.min.css')}}" />
    <!-- Typicons -->
    
    <!-- WOW animations -->
    <link rel="stylesheet" type="text/css" href="{{URL:: asset('js/wow/css/libs/animate.css')}}" />
    <!-- WOW animations -->
    
    <!-- Pulse Slider -->
    <link rel="stylesheet" type="text/css" href="{{URL:: asset('js/pulse/pm-slider.css')}}" />
    <!-- Pulse Slider -->
    
    <!-- MeanMenu (mobile) -->
    <link rel="stylesheet" type="text/css" href="{{URL:: asset('js/meanmenu/meanmenu.css')}}" />
    <!-- MeanMenu (mobile) -->
    
    <!-- Flexslider -->
    <link rel="stylesheet" type="text/css" href="{{URL:: asset('js/flexslider/flexslider-post.css')}}" />
    <!-- Flexslider -->
    
    <!-- PrettyPhoto -->
    <link rel="stylesheet" type="text/css" href="{{URL:: asset('js/prettyphoto/css/prettyPhoto.css')}}" />
    <!-- PrettyPhoto -->
    
    <!-- jQuery UI -->
    <link rel="stylesheet" type="text/css" href="{{URL:: asset('css/jquery-ui/jquery-ui.css')}}" />
    <!-- jQuery UI -->
        
    <!-- Development Google Fonts -->
    <link href='{{URL:: asset('http://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600,600italic,700,700italic,800,800italic%7COpen+Sans+Condensed:300,300italic,700%7CRaleway:400,200,300,100,600,500,700,800,900%7COswald:400,300,700%7CRoboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic%7CRoboto+Condensed:400,300,300italic,400italic,700,700italic%7CRoboto+Slab:400,100,300,700%7CLato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic')}}' rel='stylesheet' type='text/css'>
    <!-- Development Google Fonts -->
    
  </head>

  <body>
    
  <!-- Theme color selector -->
  <div id="pm_theme_color_selector">
        <a class="pm_theme_color_selector_btn"><i class="typcn typcn-cog"></i></a>
        <p class="pm_theme_color_selector_title">Style Sampler</p>

        <div class="pm_theme_color_selector_container">
            <p>Layout Style</p>
            <select name="pm_theme_color_selector_mode" id="pm_theme_color_selector_mode">
              <option value="pm-full-mode" selected>Fullscreen</option>
              <option value="pm-boxed-mode">Boxed Mode</option>
            </select>
        </div>
        <div class="pm_theme_color_selector_container">
            <p>Patterns for Boxed Mode</p>
            <ul class="pm_theme_img_selector" id="pm_theme_pattern_selector">
                <li><a href="#" id="pattern1-lg"><img src="img/boxed-patterns/pattern1.png" alt="pattern1"></a></li>
                <li><a href="#" id="pattern2-lg"><img src="img/boxed-patterns/pattern2.png" alt="pattern2"></a></li>
                <li><a href="#" id="pattern3-lg"><img src="img/boxed-patterns/pattern3.png" alt="pattern3"></a></li>
                <li><a href="#" id="pattern4"><img src="img/boxed-patterns/pattern4.png" alt="pattern4"></a></li>
                <li><a href="#" id="pattern5"><img src="img/boxed-patterns/pattern5.png" alt="pattern5"></a></li>
                <li><a href="#" id="pattern6"><img src="img/boxed-patterns/pattern6.png" alt="pattern6"></a></li>
            </ul>
        </div>
        
        <div class="pm_theme_color_selector_container">
            <p>Backgrounds for Boxed Mode</p>
            <ul class="pm_theme_img_selector" id="pm_theme_background_selector">
                <li><a href="#" id="1a"><img src="img/boxed-bgs/1.jpg" alt="bg1"></a></li>
                <li><a href="#" id="2a"><img src="img/boxed-bgs/2.jpg" alt="bg2"></a></li>
                <li><a href="#" id="3a"><img src="img/boxed-bgs/3.jpg" alt="bg3"></a></li>
                <li><a href="#" id="4a"><img src="img/boxed-bgs/4.jpg" alt="bg4"></a></li>
                <li><a href="#" id="5a"><img src="img/boxed-bgs/5.jpg" alt="bg5"></a></li>
            </ul>
        </div>
   
    </div>
    <!-- Theme color selector-->
    
<!-- Theme color selector  -->
    
    <div id="pm_layout_wrapper" class="pm-full-mode"><!-- Use wrapper for wide or boxed mode
        
        <!-- Sub-Menu -->
        <!-- Theme color selector -->
      
        <div class="pm-sub-menu-container">

       <!-- Theme color selector  -->
    
            <div class="container">
            
                <div class="row">
                    
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        
                        <div class="pm-sub-menu-info">
                            
                            <ul class="pm-micro-navigation">
                                <li><a href="{{URL:: asset('clinic-info')}}">Clinic Information</a></li>
                                <li><a href="{{URL:: asset('general-ques')}}">General Questions</a></li>
                                <li><a href="#" id="pm-appointment-form-btn">Request an appointment</a></li>
                            </ul>
                            
                        </div>

                                                
                    </div>
                    
                    
                    <div class="col-lg-6 col-md-6 col-sm-12">
                    
                        <ul class="pm-social-navigation">
                            <li class="pm_tip_static_bottom" title="Twitter"><a href="#" class="fa fa-twitter"></a></li>
                            <li class="pm_tip_static_bottom" title="Facebook"><a href="#" class="fa fa-facebook"></a></li>
                            <li class="pm_tip_static_bottom" title="Google Plus"><a href="#" class="fa fa-google-plus"></a></li>
                            <li class="pm_tip_static_bottom" title="Linkedin"><a href="#" class="fa fa-linkedin"></a></li>
                            <li class="pm_tip_static_bottom" title="YouTube"><a href="#" class="fa fa-youtube"></a></li>
                            <li class="pm_tip_static_bottom" title="Reddit"><a href="#" class="fa fa-reddit"></a></li>
                        </ul>
                    
                        <ul class="pm-sub-navigation">
                            <li>
                                <div class="pm-dropdown pm-language-selector-menu">
                                    <div class="pm-dropmenu">
                                        <p class="pm-menu-title">Language</p>
                                        <i class="fa fa-angle-down"></i>
                                    </div>
                                    <div class="pm-dropmenu-active">
                                        <ul>
                                           <li><a href="#">English</a></li>
                                           <li><a href="#">French</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        
                    </div>
                    
                </div>
            
            </div>
            
        </div>
        -->
        <!-- /Sub-header -->
        
  


    <!-- Header area  -->
        <header>
                
            <div class="container">
            
                <div class="row">
                
                    <div class="col-lg-4 col-md-4 col-sm-12">
                    
                         <div class="pm-header-logo-container">
                            <a href="{{URL:: asset('index')}}"><img src="img/images.png" class="img-responsive pm-header-logo" alt="Medical-Link Template"></a> 
                        </div>
                        
                    </div>
                    
                    <div class="col-lg-8 col-md-8 col-sm-12">
                        
                       <ul class="pm-header-info">
                            <li><p><i class="fa fa-mobile-phone"></i> + 488 (0) 333.444.212</p></li>
                            <li><p> <i class="fa fa-inbox"></i> &nbsp;<a href="mailto:support@medical-link.com">support@medical-link.com</a></p></li>
                        </ul> 
                        
                        <ul class="pm-search-container">
                            <li>
                                <div class="pm-search-field-container">
                                    <a href="#" class="fa fa-search"></a>
                                    <form action="#" method="post">
                                        <input name="pm-search-field" class="pm-search-field" type="text" placeholder="search...">
                                    </form>
                                </div>
                            </li>
                            <li>
                                <div class="pm-dropdown pm-categories-menu">
                                    <div class="pm-dropmenu">
                                        <p class="pm-menu-title">Categories</p>
                                        <i class="fa fa-angle-down"></i>
                                    </div>
                                    <div class="pm-dropmenu-active">
                                        <ul>
                                           <li><a href="{{URL:: asset('news')}}">Health</a></li>
                                           <li><a href="{{URL:: asset('news')}}">Medicine</a></li>
                                           <li><a href="{{URL:: asset('news')}}">Research</a></li>
                                           <li><a href="{{URL:: asset('news')}}">Diseases</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        
                    </div>
                    
                </div>
            
            </div>
                    
        </header>
        <!--Header area end -->

<!-- Navigation  -->
        <div class="pm-nav-container">
        
            <div class="container">
            
                <div class="row">
                    
                    <div class="col-lg-10 col-md-10 col-sm-12">
                        
                        <nav class="navbar-collapse collapse" id="pm-main-navigation">
                        
                            <ul class="sf-menu pm-nav">
                        
                                <li><a href="{{URL:: asset('index')}}" class="fa fa-home" id="pm-home-btn"></a></li>
                                <li>
                                    <a href="{{URL:: asset('medical-staff')}}">Medical Staff</a>
                                    <ul>
                                        <li><a href="{{URL:: asset('medical-staff')}}">Surgeons</a></li>
                                        <li><a href="{{URL:: asset('medical-staff')}}">Doctors</a></li>
                                        <li><a href="{{URL:: asset('medical-staff')}}">Nurses</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{URL:: asset('news')}}">News</a>
                                    <ul>
                                        <li><a href="{{URL:: asset('news')}}">Blog Page</a></li>
                                        <li><a href="{{URL:: asset('news-post')}}">News Post</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{URL:: asset('services')}}">Services</a>
                                    <ul>
                                        <li><a href="{{URL:: asset('services')}}">Dental Implants</a></li>
                                        <li><a href="{{URL:: asset('services')}}">Medical Research</a></li>
                                        <li><a href="{{URL:: asset('services')}}">Medical Counseling</a></li>
                                        <li><a href="{{URL:: asset('services')}}">Pharmaceutical Advice</a></li>
                                        <li><a href="{{URL:: asset('services')}}">Blood Bank</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{URL:: asset('gallery')}}">Gallery</a></li>
                                <li><a href="{{URL:: asset('store')}}">Store</a></li>
                                
                                <li><a href="{{URL:: asset('contact')}}">Contact Us</a></li>
                            
                            </ul>
                        
                        </nav> 
                    
                    </div>
                    
                    <div class="col-lg-2 col-md-2 col-sm-12 pm-main-menu">
                                        
                        <ul class="pm-cart-info"> 
                    <ul class="sf-menu pm-nav"> 

                             <!--Authentication Links -->
                    @if (Auth::guest())
                       <li><a  href="{{ url('/login') }}">Login</a></li> 
                       <li><a  href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif

                        </ul>
                                              
                    </div>
                    
                </div>
            
            </div>
        
        </div>
     <!--Navigation area end -->
                
        


<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
           <div class="navbar-header">

                <!-- Collapsed Hamburger  -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button> 

                 <!--  ***Branding Image  -->
               <a class="navbar-brand" href="{{ url('/') }}">
                </a>  
            </div>


                    <div class="collapse navbar-collapse" id="app-navbar-collapse"> 
                
                        *** Right Side Of Navbar 
                <ul class="nav navbar-nav navbar-right">
                    Authentication Links
                    @if (Auth::guest())
                       <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>  
            </div>
        </div>
    </nav>





    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
