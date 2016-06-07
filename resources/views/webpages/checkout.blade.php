<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{URL:: asset('favicon')}}">

    <title>MEDICAL-LINK :: Premium Medical Template</title>
    
    <link href="{{URL:: asset('bootstrap3/css/bootstrap.css')}}" rel="stylesheet">

    <!-- main css -->
    <link href="{{URL:: asset('css/master.css')}}" rel="stylesheet">
    
    <!-- mobile css -->
    <link href="{{URL:: asset('css/responsive.css')}}" rel="stylesheet">
    
    <!-- FontAwesome Support -->
    <link rel="stylesheet" type="text/css" href="{{URL:: asset('css/fontawesome/font-awesome.min.css')}}" />
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
        <!-- /Sub-header -->
        
        <!-- Request appointment form -->
        <div class="pm-request-appointment-form" id="pm-appointment-form">
        	
            <div class="container">
            	<div class="row">
                	
                    <form action="#" method="post">
                        <div class="col-lg-4 col-md-4 col-sm-6">
                        	<input name="" type="text" class="pm-request-appointment-form-textfield" placeholder="Full Name">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                        	<input name="" type="email" class="pm-request-appointment-form-textfield" placeholder="Email Address">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                        	<input name="" type="email" class="pm-request-appointment-form-textfield" placeholder="Phone Number">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                        	<input name="" class="pm-request-appointment-form-textfield appointment-form-datepicker" type="text" placeholder="Date of Appointment" id="datepicker">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                        	<input name="" class="pm-request-appointment-form-textfield appointment-form-datepicker" type="text" placeholder="Time of Appointment (ex. 10:30am)">
                        </div>
                        <div class="col-lg-12 pm-clear-element" style="padding-top:20px;">
                        	<input type="submit" value="Submit Request" class="pm-square-btn appointment-form" />
                            <p class="pm-appointment-form-notice">All fields are required.</p>                            <a href="#" class="pm-appointment-form-close" id="pm-close-appointment-form"><i class="fa fa-close"></i> Close Appointment form</a>
                        </div>
                        
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
                    
                    	 <div class="pm-header-logo-container">
                            <a href="{{URL:: asset('index')}}"><img src="img/medical-link.jpg" class="img-responsive pm-header-logo" alt="Medical-Link Template"></a> 
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
        <!-- /Header area end -->
        
        <!-- Navigation area -->
        <div class="pm-nav-container">
        
        	<div class="container">
            
                <div class="row">
                    
                    <div class="col-lg-10 col-md-10 col-sm-12">
                        
                        <nav class="navbar-collapse collapse" id="pm-main-navigation">
                        
                            <ul class="sf-menu pm-nav">
                        
                        		<li><a href="{{URL:: asset('index')}}" class="fa fa-home" id="pm-home-btn"></a></li>
                                <li>
                                	<a href="medical-staff.html">Medical Staff</a>
                                    <ul>
                                        <li><a href="{{URL:: asset('medical-staff')}}">Surgeons</a></li>
                                        <li><a href="{{URL:: asset('medical-staff')}}">Doctors</a></li>
                                        <li><a href="{{URL:: asset('medical-staff')}}">Nurses</a></li>
                                    </ul>
                                </li>
                                <li>
                                	<a href="news.html">News</a>
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
                        	<li><p>(1) $49.99</p></li>
                            <li><a href="{{URL:: asset('cart')}}" class="typcn typcn-shopping-cart"></a></li>
                        </ul>
                                              
                    </div>
                    
                </div>
            
            </div>
        
        </div>
        <!-- Navigation area end -->
                
        <!-- Sub-header area -->
        
        <div class="pm-sub-header-container">
        
        	<div class="pm-sub-header-info">
            	
                <div class="container">
                	<div class="row">
                    	<div class="col-lg-12">
                        	
                            <p class="pm-page-title">Checkout</p>
                            <p class="pm-page-message">Almost done!</p>
                            
                        </div>
                    </div>
                </div>
                
            </div>
            
            <div class="pm-sub-header-breadcrumbs">
            	
                <div class="container">
                	<div class="row">
                    	<div class="col-lg-12">
                        	
                            <ul class="pm-breadcrumbs">
                            	<li><a href="{{URL:: asset('index')}}">Home </a></li>
                                <li><i class="fa fa-angle-right"></i></li>
                                <li>checkout</li>
                            </ul>
                            
                            <!--<ul class="pm-post-navigation">
                            	<li class="pm_tip_static_top" title="Prev. Post"><a href="#" class="fa fa-angle-left"></a></li>
                                <li class="pm_tip_static_top" title="Next Post"><a href="#" class="fa fa-angle-right"></a></li>
                            </ul>-->
                            
                        </div>
                    </div>
                </div>
                
            </div>
        
        </div>
        
 		<!-- Sub-header area end -->
        
        <!-- BODY CONTENT -->
        
        <!-- PANEL 1 -->
        <div class="container pm-containerPadding-top-110 pm-containerPadding-bottom-40">
        	<div class="row">
            	
                <div class="col-lg-12">
                	
                    <h3 class="pm-woocomm-checkout-titles">Returning customer? <a href="#" id="pm-returning-customer-form-trigger">Click here to login</a></h3>
                    
                    <div class="pm-expandable-login-container" id="pm-returning-customer-form">
                    
                    	<p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer please proceed to the Billing & Shipping section.</p>
                        
                        <form action="http://projects.pulsarmedia.ca/medical-link/post">
                        
                        	<div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input type="text" name="pm-login-username" class="pm-woocomm-textfield" placeholder="Username or Email" />
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input type="password" name="pm-login-password" class="pm-woocomm-textfield" placeholder="Password" />
                                </div>
                                <div class="col-lg-12 pm-clear-element">
                                	<div class="pm-form-checkbox-input">
                                        <input name="pm-remember-box" type="checkbox" value="" class="pm-remember-checkbox" />
                                        <p>Remember me</p>
                                    </div>
                                    <input name="" type="button" value="Login" class="pm-woocomm-submit-btn">
                                </div>
                            </div>
                        
                        </form>
                                            
                    </div>
                    
                </div>
                
            </div>
        </div>
        <!-- PANEL 1 end -->
        
        <!-- PANEL 2 -->
        <div class="container pm-containerPadding-bottom-40">
        	<div class="row">
            
            	<div class="col-lg-12">
                	
                    <h3 class="pm-woocomm-checkout-titles">Have a promotional code? <a href="#" id="pm-promotional-code-form-trigger">Click here to enter your code</a></h3>
                    
                    <div class="pm-expandable-login-container" id="pm-promotional-code-form">
                    
                    	<form action="http://projects.pulsarmedia.ca/medical-link/post">
                        
                            <div class="row">
                                <div class="col-lg-12">
                                    <input type="text" name="pm-login-username" class="pm-woocomm-textfield" placeholder="Username or Email" style="margin-bottom:15px;" />
                                </div>
                                <div class="col-lg-12">
                                    <input name="" type="button" value="apply coupon" class="pm-woocomm-submit-btn">
                                </div>
                            </div>
                        
                        </form>
                    
                    </div>
                                        
                </div>
            
            </div>
        </div>
        <!-- PANEL 2 end -->
        
        
        <!-- PANEL 3 FORM -->
        <form action="http://projects.pulsarmedia.ca/medical-link/post">
        
            <div class="container pm-containerPadding-bottom-40">
                <div class="row">
                
                    <div class="col-lg-12">
                    
                        <h3 class="pm-woocomm-checkout-titles">Billing Details</h3>
                                                                    
                      <label for="pm-country-list">Country *</label>
                        <select name="pm-country-list" id="pm-country-list">
                          <option>Canada</option>
                          <option selected>United States (US)</option>
                        </select>
                        
                      <label for="pm-first-name-field">First Name *</label>
                        <input name="pm-first-name-field" id="pm-first-name-field" class="pm-woocomm-textfield" type="text">
                        
                      <label for="pm-last-name-field">Last Name *</label>
                        <input name="pm-last-name-field" id="pm-last-name-field" class="pm-woocomm-textfield" type="text">
                        
                      <label for="pm-company-name-field">Company Name</label>
                        <input name="pm-company-name-field" id="pm-company-name-field" class="pm-woocomm-textfield" type="text">
                        
                      <label for="pm-address-field">Address *</label>
                        <input name="pm-address-field" id="pm-address-field" class="pm-woocomm-textfield" type="text">
                        
                      <label for="pm-town-field">Town / City *</label>
                        <input name="pm-town-field" id="pm-town-field" class="pm-woocomm-textfield" type="text">
                        
                        <label for="pm-state-list">State *</label>
                        <select name="pm-state-list" id="pm-state-list">
                          <option>San Francisco</option>
                          <option selected>New York</option>
                        </select>
                        
                      <label for="pm-zip-field">Zip *</label>
                        <input name="pm-zip-field" id="pm-zip-field" class="pm-woocomm-textfield" type="text">
                        
                      <label for="pm-email-address-field">Email Address *</label>
                        <input name="pm-email-address-field" id="pm-email-address-field" class="pm-woocomm-textfield" type="text">
                        
                      <label for="pm-phone-field">Phone *</label>
                        <input name="pm-phone-field" id="pm-phone-field" class="pm-woocomm-textfield" type="text">
                    
                        <div class="pm-form-checkbox-input">
                            <input name="pm-remember-box" type="checkbox" class="pm-remember-checkbox" id="pm-create-account-checkbox" value="" />
                            <p>Create an account?</p>
                      </div>    
                        
                        
                        <div class="pm-checkout-password-field" id="pm-checkout-password-field">
                       	  <p>Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
                        
                          <label for="pm-password-field">Password *</label>
                            <input name="pm-password-field" id="pm-password-field" class="pm-woocomm-textfield" type="password">
                        </div>
                                                
                  </div>
                
                </div>
            </div>
            
            
            <div class="container">
                <div class="row">
                
                    <div class="col-lg-12">
                    
                        <h3 class="pm-woocomm-checkout-titles">Order Summary</h3>
                        
                        <div class="pm-order-summary-container">
                            
                            <ul class="pm-order-summary">
                                <li>
                                    <p class="title">Gel Seat</p>
                                    <p class="price">$49.99</p>
                                </li>
                                <li>
                                    <p class="label">Shipping and Handling</p>
                                    <p class="price">$7.99</p>
                                </li>
                                <li>
                                    <p class="label">Cart Sub-Total</p>
                                    <p class="price">$57.98</p>
                                </li>
                                <li>
                                    <p class="label">Order Total</p>
                                    <p class="price">$57.98</p>
                                </li>
                            </ul>
                                                        
                        </div>
                        
                    </div>
                </div>
            </div>
            
            
            <div class="container pm-containerPadding-bottom-110">
                <div class="row">
                    <div class="col-lg-12">
                    
                    	<h3 class="pm-woocomm-checkout-titles">Payment Method</h3>
                        
                        <div class="pm-payment-option-container">
                        
                        	<ul class="pm-payment-options">
                            	<li>
                                	<input name="pm-selected-payment[]" type="radio" value="">
                                	<label>Direct Transfer</label>
                                </li>
                                <li>
                                	<input name="pm-selected-payment[]" type="radio" value="">
                                	<label>Cheque Draft</label>
                                </li>
                                <li>
                                	<input name="pm-selected-payment[]" type="radio" value="">
                                	<label>PayPal</label>
                                </li>
                            </ul>
                                                    
                            <div class="pm-clear-element" style="margin-top:20px;">
                            	<input name="" type="button" value="process order" class="pm-woocomm-submit-btn" />
                            </div>
                            
                      	</div>
                    </div>
                </div>
            </div>
        
        </form>
        <!-- PANEL 3 FORM end -->
        
        <!-- BODY CONTENT end -->
        
        <div class="pm-fat-footer pm-parallax-panel" data-stellar-background-ratio="0.5">
        	
            <div class="container">
                <div class="row">
                
                    <div class="col-lg-3 col-md-3 col-sm-12 pm-widget-footer">
                    
                    	<h6 class="pm-fat-footer-title"><span>About</span> Medical-Link</h6>
                        <div class="pm-fat-footer-title-divider"></div>
                        
                        <p>Medical-Link is a premium medical template designed by Pulsar Media.</p>
                        
                        <p>Medical-Link is perfect for anyone in the medical and health industry and can be used by health facilities, hospitals, walk-in clinics, dental offices, chiropractors, physiotherapists, pediatricians etc.</p>
                        <p>Medical-Link offers many great features such as a custom slider system, testimonials carousel and a clean modern design.</p>
                        
                    </div>
                    
                    
                    <div class="col-lg-3 col-md-3 col-sm-12 pm-widget-footer">
                    
                       <h6 class="pm-fat-footer-title"> <span>Request</span> an appointment</h6>
                       <div class="pm-fat-footer-title-divider"></div>
                       
                       <ul class="pm-general-icon-list">
                       	  <li>
                          	<span class="fa fa-mobile-phone pm-general-icon"></span>
                       		<p>+ 488 (0) 333.444.212</p>
                          </li>
                          <li>
                          	<span class="fa fa-inbox pm-general-icon"></span>
                       		<p><a href="mailto:info@medical-link.com">info@medical-link.com</a></p>
                          </li>
                          <li>
                          	<span class="fa fa-bars pm-general-icon"></span>
                       		<p><a href="#">Fill out our appointment form</a></p>
                          </li>
                       </ul>
                        
                    </div>
                    
                    <div class="col-lg-3 col-md-3 col-sm-12 pm-widget-footer">
                    
                        <h6 class="pm-fat-footer-title"><span>Latest</span> Tweets</h6>
                        <div class="pm-fat-footer-title-divider"></div>
                        
                        <ul class="tweet_list">
                        
                            <li class="tweet_first">
                                <div class="tweet_container">
                                    <span class="tweet_time"><a title="view tweet on twitter" href="#">about 14 days ago</a></span>
                                    <span class="tweet_join"></span>
                                    <span class="tweet_text"><a href="#">#Propranolol</a> is used in thyrotoxicosis due to it's antithyroid activity in addition the B blocker activity.  <a href="#">bit.ly/1szLobl</a></span>
                                </div>
                            </li>
                            
                            <li class="tweet_first">
                                <div class="tweet_container">
                                    <span class="tweet_time"><a title="view tweet on twitter" href="#">about 21 days ago</a></span>
                                    <span class="tweet_join"></span>
                                    <span class="tweet_text">Insulin is an anabolic hormone, promotes fuel storage. <a href="#">bit.ly/1szLobl</a></span>
                                </div>
                            </li>
                            
                            <li class="tweet_first">
                                <div class="tweet_container">
                                    <span class="tweet_time"><a title="view tweet on twitter" href="#">about 26 days ago</a></span>
                                    <span class="tweet_join"></span>
                                    <span class="tweet_text">CO2 diffuses 1st before O2 in respiration (alveolar gas exchange), due to higher solubility. <a href="#">bit.ly/1szLobl</a></span>
                                </div>
                            </li>
                            
                        </ul>
                        
                    </div>
                    
                    <div class="col-lg-3 col-md-3 col-sm-12 pm-widget-footer">
                    
                        <h6 class="pm-fat-footer-title"><span>Popular</span> Posts</h6>
                        <div class="pm-fat-footer-title-divider"></div>
                        
                        <ul class="pm-recent-blog-posts">
                            <!-- Post -->
                            <li>
                                <div style="background-image:url(img/home/p1.jpg);" class="pm-recent-blog-post-thumb"></div>
                                <div class="pm-recent-blog-post-details">
                                    <a href="{{URL:: asset('news-post')}}">Severe stroke patients recover better with prompt stent action</a>
                                    <p class="pm-date">Jan 29, 2015</p>
                                    <div class="pm-recent-blog-post-divider"></div>
                                </div>
                            </li>
                            <!-- Post end -->
                            <!-- Post -->
                            <li>
                                <div style="background-image:url(img/home/p2.jpg);" class="pm-recent-blog-post-thumb"></div>
                                <div class="pm-recent-blog-post-details">
                                    <a href="{{URL:: asset('news-post')}}">High fitness levels reduce hypertension risk</a>
                                    <p class="pm-date">Jan 25, 2015</p>
                                    <div class="pm-recent-blog-post-divider"></div>
                                </div>
                            </li>
                            <!-- Post end -->
                        </ul>
                        
                    </div>
                    
                </div>	
            </div>
            
        </div>
        
        <footer>

            
            <div class="container pm-containerPadding20">
            	<div class="row">
                
                	<div class="col-lg-4 col-md-4 col-sm-12 pm-center-mobile">
               	    	<img src="img/medical-link.jpg" width="264" height="81" class="img-responsive pm-inline" alt="Medical-Link">
                    </div>
                    
                    <div class="col-lg-8 col-md-8 col-sm-12">
                    	<ul class="pm-footer-navigation">
                        	<li><a href="{{URL:: asset('index')}}" class="active">Home</a></li>
                            <li><a href="{{URL:: asset('news')}}">News</a></li>
                            <li><a href="{{URL:: asset('services')}}">Services</a></li>
                            <li><a href="{{URL:: asset('gallery')}}">Gallery</a></li>
                            <li><a href="{{URL:: asset('store')}}">Store</a></li>
                            <li><a href="{{URL:: asset('contact')}}">Contact Us</a></li>
                        </ul>
                    </div>
                
                </div>
            </div>

                
        </footer>
                
       
    
    </div><!-- /pm_layout-wrapper -->
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/jquery.viewport.mini.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="bootstrap3/js/bootstrap.min.js"></script>
    <script src="js/modernizr.custom.js"></script>
    <script src="js/owl-carousel/owl.carousel.js"></script>
    <script src="js/main.js"></script>
    <script src="js/jquery.tooltip.js"></script>
    <script src="js/superfish/superfish.js"></script>
    <script src="js/superfish/hoverIntent.js"></script>
    <script src="js/stellar/jquery.stellar.js"></script>
    <script src="js/theme-color-selector/theme-color-selector.js"></script>
    <script src="js/meanmenu/jquery.meanmenu.min.js"></script>
    <script src="js/flexslider/jquery.flexslider.js"></script>
    <script src="js/jquery.testimonials.js"></script>
    <script src="js/wow/wow.min.js"></script>
    <script src="js/jquery-migrate-1.2.1.js"></script>
    <script src="js/prettyphoto/js/jquery.prettyPhoto.js"></script>
    <script src="js/tinynav.js"></script>
    <script src="js/jquery-ui.js"></script>
        
    <p id="back-top" class="visible-lg visible-md visible-sm"></p>
    
  </body>
</html>
