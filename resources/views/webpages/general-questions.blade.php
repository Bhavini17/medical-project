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
        <!-- Sub-Menu end -->
        
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
                        	
                            <p class="pm-page-title">General Questions</p>
                            <p class="pm-page-message">Check out our most commonly asked questions</p>
                            
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
                                <li>General Questions</li>
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
        
        <!-- BODY CONTENT starts here -->
        
        <div class="container pm-containerPadding-top-80">
        
        	<div class="row">
            
            	<div class="col-lg-12">
                	<h5>Don't see a particular question on our list?</h5>
                    <div class="pm-divider"></div>
                    <p>Feel free to email us at <a href="mailto:info@medical-link.com">info@medical-link.com</a> or call our support line at <strong>1-888-234-5678</strong>.</p>
                </div>
            
            </div>
        
        </div>
                
        <!-- PANEL 1 -->
        <div class="container pm-containerPadding-bottom-80">
        
        	<div class="row">
            	<div class="col-lg-12">
                	
                    <!-- Bootstrap accordion system -->
                    <div id="accordion" class="panel-group">
                    
                        <!-- accordion item 1 -->
                        <div class="panel panel-default">
                        
                            <div class="panel-heading">
                                <h4 class="panel-title"><i class="fa fa-plus"></i><a class="pm-accordion-link collapsed pm-dark-link" href="#collapse0" data-parent="#accordion" data-toggle="collapse">What are your hours of operation?</a></h4>
                            </div>
                            
                            <div class="panel-collapse collapse in" id="collapse0">
                                <div class="panel-body">
                                    <p>Mauris adisciping fringila turpis intend tellus ornare etos pelim. Pulvunar est cardio neque vitae elit. Lorem vulputat paentra nunc gravida. Mauris adisciping fringila turpis intend tellus ornare etos.</p>
                                </div>
                            </div>
                            
                        </div>
                        <!-- accordion item 1 end -->
                        
                        <!-- accordion item 2 -->
                        <div class="panel panel-default">
                        
                            <div class="panel-heading">
                                <h4 class="panel-title"><i class="fa fa-plus"></i><a class="pm-accordion-link collapsed pm-dark-link" href="#collapse1" data-parent="#accordion" data-toggle="collapse">Do you have a dental clinic?</a></h4>
                            </div>
                            
                            <div class="panel-collapse collapse" id="collapse1">
                                <div class="panel-body">
                                    <p>Mauris adisciping fringila turpis intend tellus ornare etos pelim. Pulvunar est cardio neque vitae elit. Lorem vulputat paentra nunc gravida. Mauris adisciping fringila turpis intend tellus ornare etos. </p>
                                    
                                    <p>Mauris adisciping fringila turpis intend tellus ornare etos pelim. Pulvunar est cardio neque vitae elit. Lorem vulputat paentra nunc gravida. Mauris adisciping fringila turpis intend tellus ornare etos. </p>
                                    <a href="#" class="pm-standard-link pm-no-margin">Learn more <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        
                        </div>
                        <!-- accordion item 2 end -->
                        
                        <!-- accordion item 3 -->
                        <div class="panel panel-default">
                        
                            <div class="panel-heading">
                                <h4 class="panel-title"><i class="fa fa-plus"></i><a class="pm-accordion-link collapsed pm-dark-link" href="#collapse2" data-parent="#accordion" data-toggle="collapse">What are your general wait times?</a></h4>
                            </div>
                            
                            <div class="panel-collapse collapse" id="collapse2">
                                <div class="panel-body">
                                    <p>Mauris adisciping fringila turpis intend tellus ornare etos pelim. Pulvunar est cardio neque vitae elit. Lorem vulputat paentra nunc gravida. Mauris adisciping fringila turpis intend tellus ornare etos.</p>
                                    
                                </div>
                            </div>
                        
                        </div>
                        <!-- accordion item 3 end -->
                        
                        <!-- accordion item 4 -->
                        <div class="panel panel-default">
                        
                            <div class="panel-heading">
                                <h4 class="panel-title"><i class="fa fa-plus"></i><a class="pm-accordion-link collapsed pm-dark-link" href="#collapse3" data-parent="#accordion" data-toggle="collapse">What is your appointment cancellation policy?</a></h4>
                            </div>
                            
                            <div class="panel-collapse collapse" id="collapse3">
                                <div class="panel-body">
                                    <p>Mauris adisciping fringila turpis intend tellus ornare etos pelim. Pulvunar est cardio neque vitae elit. Lorem vulputat paentra nunc gravida. Mauris adisciping fringila turpis intend tellus ornare etos.</p>
                                </div>
                            </div>
                        
                        </div>
                        <!-- accordion item 4 end -->
                        
                        <!-- accordion item 5 -->
                        <div class="panel panel-default">
                        
                            <div class="panel-heading">
                                <h4 class="panel-title"><i class="fa fa-plus"></i><a class="pm-accordion-link collapsed pm-dark-link" href="#collapse4" data-parent="#accordion" data-toggle="collapse">My child is sick? What should i do?</a></h4>
                            </div>
                            
                            <div class="panel-collapse collapse" id="collapse4">
                                <div class="panel-body">
                                    <p>Mauris adisciping fringila turpis intend tellus ornare etos pelim. Pulvunar est cardio neque vitae elit. Lorem vulputat paentra nunc gravida. Mauris adisciping fringila turpis intend tellus ornare etos.</p>
                                </div>
                            </div>
                        
                        </div>
                        <!-- accordion item 5 end -->
                        
                        <!-- accordion item 6 -->
                        <div class="panel panel-default">
                        
                            <div class="panel-heading">
                                <h4 class="panel-title"><i class="fa fa-plus"></i><a class="pm-accordion-link collapsed pm-dark-link" href="#collapse5" data-parent="#accordion" data-toggle="collapse">Do you provide home health care services?</a></h4>
                            </div>
                            
                            <div class="panel-collapse collapse" id="collapse5">
                                <div class="panel-body">
                                    <p>Mauris adisciping fringila turpis intend tellus ornare etos pelim. Pulvunar est cardio neque vitae elit. Lorem vulputat paentra nunc gravida. Mauris adisciping fringila turpis intend tellus ornare etos.</p>
                                    <a href="#" class="pm-standard-link pm-no-margin">Learn more <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        
                        </div>
                        <!-- accordion item 6 end -->
                        
                        <!-- accordion item 7 -->
                        <div class="panel panel-default">
                        
                            <div class="panel-heading">
                                <h4 class="panel-title"><i class="fa fa-plus"></i><a class="pm-accordion-link collapsed pm-dark-link" href="#collapse6" data-parent="#accordion" data-toggle="collapse">Do you have a cancer treatment team?</a></h4>
                            </div>
                            
                            <div class="panel-collapse collapse" id="collapse6">
                                <div class="panel-body">
                                    <p>Mauris adisciping fringila turpis intend tellus ornare etos pelim. Pulvunar est cardio neque vitae elit. Lorem vulputat paentra nunc gravida. Mauris adisciping fringila turpis intend tellus ornare etos.</p>
                                </div>
                            </div>
                        
                        </div>
                        <!-- accordion item 7 end -->
                        
                    </div>
                    <!-- Bootstrap accordion system end -->
                    
                </div>
            </div>
        
        
        </div>
        <!-- PANEL 1 end -->
        
        
        
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
