<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{URL:: asset('favicon.html')}}">
    <title>U-Life WELLNESS</title>

    <!--******** javascript code for validations done maunually**********/      -->  

    <script type="text/javascript">
   <!--
      // Form validation code will come here.
      function validate()
      {
      
         if( document.myForm.name.value == "" )
         {
            alert( "Please provide your name!" );
            document.myForm.name.focus() ;
            return false;
         }
         
         if( document.myForm.email.value == "" )
         {
            alert( "Please provide your Email!" );
            document.myForm.email.focus() ;
            return false;
         }
         
         if( document.myForm.phoneno.value == "" ||
         isNaN( document.myForm.phoneno.value ) ||
         document.myForm.phoneno.value.length < 10 )
         {
            alert( "Please provide a phone number!" );
            document.myForm.phoneno.focus() ;
            return false;
         }
         
         if( document.myForm.doa.value == "" )
         {
            alert( "Please provide a date for appointment!" );
            return false;
         }

         if( document.myForm.toa.value == "" )
         {
            alert( "Please provide time of appointment!" );
            return false;
         }

         return( true );
      }
   //-->
      </script>

    




    
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
    <!-- Theme color selector -->
    

    <div id="pm_layout_wrapper" class="pm-full-mode"><!-- Use wrapper for wide or boxed mode -->
        
        <!-- Sub-Menu -->
        <div class="pm-sub-menu-container">
        
            <div class="container">
            
                <div class="row">
                    
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        
                        <div class="pm-sub-menu-info">
                            
                            <ul class="pm-micro-navigation">
                                <li><a href="{{URL:: asset('clinic-info')}}">Clinic Information</a></li>
                                <!--<li><a href="{{URL:: asset('general-ques')}}">General Questions</a></li> -->
                                <li><a href="#" id="pm-appointment-form-btn">Request an appointment</a></li>
                            </ul>
                            
                        </div>

                                                
                    </div>
                    
                    
                    <div class="col-lg-6 col-md-6 col-sm-12">
                    
                        <ul class="pm-social-navigation">
                            <li class="pm_tip_static_bottom" title="Twitter"><a href="#" class="fa fa-twitter"></a></li>
                            <li class="pm_tip_static_bottom" title="Facebook"><a href="#" class="fa fa-facebook"></a></li>
                            <li class="pm_tip_static_bottom" title="Google Plus"><a href="#" class="fa fa-google-plus"></a></li>
                           <!-- <li class="pm_tip_static_bottom" title="Linkedin"><a href="#" class="fa fa-linkedin"></a></li>
                            <li class="pm_tip_static_bottom" title="YouTube"><a href="#" class="fa fa-youtube"></a></li>.
                            <li class="pm_tip_static_bottom" title="Reddit"><a href="#" class="fa fa-reddit"></a></li> -->
                        </ul> 
                    
                        <ul class="pm-sub-navigation">
                            <li>
                                <div class="pm-dropdown pm-language-selector-menu">
                                   <!-- <div class="pm-dropmenu">
                                        <p class="pm-menu-title">Language</p>
                                        <i class="fa fa-angle-down"></i>
                                    </div> 
                                    <div class="pm-dropmenu-active">
                                        <ul>
                                           <li><a href="#">English</a></li>
                                           <li><a href="#">French</a></li>
                                        </ul>
                                    </div> -->
                                </div>
                            </li>
                        </ul>
                        
                    </div>
                    
                </div>
            
            </div>
            
        </div>
        <!-- /Sub-header -->
        
        <!-- Request appointment form -->
        <div class="pm-request-appointment-form" id="pm-appointment-form">
            
            <div class="container">
                <div class="row">
                    
                    <form action="getAppointment" method="post" name="myForm" onsubmit="return(validate())">
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <input type="text" name="name" id="name" class="pm-request-appointment-form-textfield" placeholder="Full Name">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <input type="email" name="email" id="email" class="pm-request-appointment-form-textfield" placeholder="Email Address">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <input type="tel" name="phoneno" id="phoneno" class="pm-request-appointment-form-textfield" placeholder="Phone Number" >
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <input name="doa" class="pm-request-appointment-form-textfield appointment-form-datepicker" type="text" placeholder="Date of Appointment"  id ="datepicker">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <input type="text" name="toa" id="toa" class="pm-request-appointment-form-textfield appointment-form-datepicker" placeholder="Time of Appointment (ex. 10:30am)">
                        </div>
                        <div class="col-lg-12 pm-clear-element" style="padding-top:20px;">
                            <input type="submit" value="Submit Request" class="pm-square-btn appointment-form" />
                            <p class="pm-appointment-form-notice">All fields are required.</p>                            <a href="{{URL:: asset('/getappointment')}}" class="pm-appointment-form-close" id="pm-close-appointment-form"><i class="fa fa-close"></i> Close Appointment form</a>
                        </div>
                        
                            <input type="hidden" name="_token" value="{{csrf_token()}}">

                    </form>
                    
                </div>
            </div>
            
        </div>
        <!-- Request appointment form end -->
            
        <!-- Header area -->
        <header>
                
            <div class="container">
            
                <div class="row">
                
                    <div class="col-lg-4 col-md-4 col-sm-12">
                    

                       <!-- <span> ULife Wellness </span> -->
                    

                        <div class="pm-header-logo-container">
                            <a href="{{URL:: asset('index')}}"><img src="img/images.png" class="img-responsive pm-header-logo" alt="ULife Template"></a> 
                        </div> 
                        
                    </div>
                    
                    <div class="col-lg-8 col-md-8 col-sm-12">
                        
                        <ul class="pm-header-info">
                            <!--<li><p><i class="fa fa-mobile-phone"></i> + 488 (0) 333.444.212</p></li> 
                            <li><p> <i class="fa fa-inbox"></i> &nbsp;<a href="mailto:support@medical-link.com">support@medical-link.com</a></p></li> -->
                        </ul>
                        
                       <!-- <ul class="pm-search-container">
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
                        </ul> -->
                        
                    </div>
                    
                </div>
            
            </div>
                    
        </header>
        <!-- /Header area end -->
        
        <!-- Navigation area -->
        <div class="pm-nav-container">
        
            <div class="container">
            
                <div class="row">
                    
                    <div class="col-lg-10 col-md-10 col-sm-12">
                        
                        <nav class="navbar-collapse collapse" id="pm-main-navigation">
                        
                            <ul class="sf-menu pm-nav">
                        
                                <li><a href="{{URL:: asset('index')}}" class="fa fa-home" id="pm-home-btn"></a></li>
                               <!-- <li>
                                    <a href="{{URL:: asset('medical-staff')}}">Medical Staff</a>
                                    <ul>
                                        <li><a href="{{URL:: asset('medical-staff')}}">Surgeons</a></li>
                                        <li><a href="{{URL:: asset('medical-staff')}}">Doctors</a></li>
                                        <li><a href="{{URL:: asset('medical-staff')}}">Nurses</a></li>
                                    </ul>
                                </li>  -->
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
                               <!-- <li><a href="{{URL:: asset('store')}}">Store</a></li> -->
                                
                                <li><a href="{{URL:: asset('contact')}}">Contact Us</a></li>
                            
                        </ul>   
                    </nav>
                    </div>

                    <div class="col-lg-2 col-md-2 col-sm-12 pm-main-menu nav navbar-nav navbar-right">
                                        
                        <ul class="pm-cart-info">
                           <li><a href="{{URL:: asset('/login')}}">Login   </a></li><span>  
                            <li><a href="{{URL:: asset('/panel')}}">Admin Login</a></li>
                        </ul>
                                              
                    </div>





                      <!--
                        <div class="collapse navbar-collapse col-lg-2 col-md-2 col-sm-12 pm-main-menu" id="app-navbar-collapse">

                            <div class="nav navbar-nav navbar-right">
                             <ul class="sf-menu pm-nav " >
                            <li><a style="text-align : right"  href="{{URL:: asset('/login')}}">Login</a></li>
                            <li><a style="text-align : right"   href="{{URL:: asset('/panel')}}">Admin Login</a></li>
                        </ul>
                        </div>
                         </div> 
                 -->
                    
                                           
                    </div>
                    
                </div>
            
            </div>
        
        </div>
        <!-- Navigation area end -->
                




              