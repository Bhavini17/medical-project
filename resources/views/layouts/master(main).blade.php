<!DOCTYPE html>
<html lang="en" class="no-js">
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


  
    
  <!-- SLIDER AREA -->
        
        <div class="pm-pulse-container" id="pm-pulse-container">
                
            <div id="pm-pulse-loader">
                <img src="js/pulse/img/ajax-loader.gif" alt="Slider Loading" />
            </div>
            
            <div id="pm-slider" class="pm-slider">
                
                <div id="pm-slider-progress-bar"></div>
            
                <ul class="pm-slides-container" id="pm_slides_container">
                    
                    <!-- FULL WIDTH slides -->
                    <li data-thumb="img/home/slide1a.jpg" class="pmslide_0"><img src="img/home/slide1.jpg" alt="img01" />
                    
                        
                            <div class="pm-holder">
                                <div class="pm-caption">
                                      <h1>Medical professionals</h1>
                                      <span class="pm-caption-decription">
                                        that you can trust
                                      </span>
                                      <span class="pm-caption-excerpt">
                                        Medical-Link is a premium quality template for Medical Professionals.
                                      </span>
                                      <a href="{{URL:: asset('services')}}" class="pm-slide-btn">learn more <i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        
                    
                    </li>
                    
                    <li data-thumb="img/home/slide2a.jpg" class="pmslide_1"><img src="img/home/slide2.jpg" alt="img02" />
                        
                        
                            <div class="pm-holder">
                                <div class="pm-caption">
                                      <h1>Leading the way</h1>
                                      <span class="pm-caption-decription">
                                        in research and development
                                      </span>
                                      <span class="pm-caption-excerpt">
                                        Medical-Link provides many great features like a custom slider and a medical appointment form.
                                      </span>
                                      <a href="{{URL:: asset('services.html')}}" class="pm-slide-btn">learn more <i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                                 
                                                           
                    </li>
                    
                    <li data-thumb="img/home/slide3a.jpg" class="pmslide_2"><img src="img/home/slide3.jpg" alt="img02" />
                        
                        
                            <div class="pm-holder">
                                <div class="pm-caption">
                                      <h1>A friendly staff</h1>
                                      <span class="pm-caption-decription">
                                        for a comfortable experience
                                      </span>
                                      <span class="pm-caption-excerpt">
                                        Pulsar Media is always around to answer your questions or help solve your technical issues.
                                      </span>
                                      <a href="{{URL:: asset('medical-staff')}}" class="pm-slide-btn">meet our staff <i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        
                                            
                    </li>
                                    
                </ul>
               
            </div>
        
        </div>
        
        <!-- SLIDER AREA end -->
        
        <!-- BODY CONTENT starts here -->
        
        <!-- PANEL 1 -->
        <div class="container pm-containerPadding-top-120 pm-containerPadding-bottom-90">
            <div class="row">
            
                <!-- Column 1 -->
                <div class="col-lg-4 col-md-4 col-sm-12 pm-center pm-columnPadding-30 pm-column-spacing wow fadeInUp animated" data-wow-delay="0.3s" data-wow-offset="50" data-wow-duration="1s">
                
                    <a href="#" class="fa fa-plus-square pm-icon-btn"></a>
                                        
                    <h6 class="pm-column-title">Premium Healthcare</h6>
                    
                    <div class="pm-title-divider"></div>
                    
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    
                    <a href="#" class="pm-standard-link">view our services <i class="fa fa-plus"></i></a>
                    
                </div>
                <!-- Column 1 end -->
                
                <!-- Column 2 -->
                <div class="col-lg-4 col-md-4 col-sm-12 pm-center pm-columnPadding-30 pm-column-spacing wow fadeInUp animated
" data-wow-delay="0.6s" data-wow-offset="50" data-wow-duration="1s">
                    
                    <a href="#" class="fa fa-medkit pm-icon-btn"></a>
                    
                    <h6 class="pm-column-title">Medical Counseling</h6>
                    
                    <div class="pm-title-divider"></div>
                    
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    
                    <a href="#" class="pm-standard-link">Learn More <i class="fa fa-plus"></i></a>
                    
                </div>
                <!-- Column 2 end -->
                
                <!-- Column 3 -->
                <div class="col-lg-4 col-md-4 col-sm-12 pm-center pm-columnPadding-30 wow fadeInUp animated
" data-wow-delay="0.9s" data-wow-offset="50" data-wow-duration="1s">
                    
                    <a href="#" class="fa fa-ambulance pm-icon-btn"></a>
                    
                    <h6 class="pm-column-title">Emergency Services</h6>
                    
                    <div class="pm-title-divider"></div>
                    
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    
                    <a href="#" class="pm-standard-link">Learn More <i class="fa fa-plus"></i></a>
                    
                </div>
                <!-- Column 3 end -->
                
            </div>
        </div>
        <!-- PANEL 1 end -->
        
        <!-- PANEL 2 -->
        <div class="pm-column-container pm-parallax-panel" style="background-color:#20bac7; background-image:url(img/home/video-panel-bg.jpg);" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="100">
        
            <!-- Column message -->
            <div class="pm-column-container-message">
                <p><strong>Did you know?</strong>  celiac diesease can go undetected for years</p>
            </div>
            <!-- Column message end -->
        
            <div class="container pm-containerPadding-top-50 pm-containerPadding-bottom-80">
            
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 pm-column-spacing">
                    
                        <h4>Take a tour of our medical facility</h4>
                        <p class="light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                        
                        <div class="pm-video-container" style="background-image:url(img/home/video.jpg);">
                        
                            <div class="pm-video-overlay">
                                <a href="https://www.youtube.com/watch?v=5ZxQ7UHjPXA" data-rel="prettyPhoto" class="pm-video-activator-btn fa fa-play expand lightbox"></a>
                            </div>
                            
                        </div>
                        
                        <a href="{{URL:: asset('gallery')}}" class="pm-rounded-btn pm-center-align">View our gallery <i class="fa fa-plus"></i></a>
                        
                    </div>
                    
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        
                        <h4>Our Departments</h4>
                        <p class="light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                        
                        <!-- Bootstrap accordion system -->
                        <div id="accordion" class="panel-group">
                        
                            <!-- accordion item 1 -->
                            <div class="panel panel-default">
                            
                                <div class="panel-heading">
                                    <h4 class="panel-title"><i class="fa fa-plus"></i><a class="pm-accordion-link collapsed" href="#collapse0" data-parent="#accordion" data-toggle="collapse">Primary health care</a></h4>
                                </div>
                                
                                <div class="panel-collapse collapse" id="collapse0" style="height: 0px;">
                                    <div class="panel-body">
                                        <p>Mauris adisciping fringila turpis intend tellus ornare etos pelim. Pulvunar est cardio neque vitae elit. Lorem vulputat paentra nunc gravida. Mauris adisciping fringila turpis intend tellus ornare etos.</p>
                                        <a href="#" class="pm-standard-link pm-no-margin">Learn more <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                                
                            </div>
                            <!-- accordion item 1 end -->
                            
                            <!-- accordion item 2 -->
                            <div class="panel panel-default">
                            
                                <div class="panel-heading">
                                    <h4 class="panel-title"><i class="fa fa-plus"></i><a class="pm-accordion-link collapsed" href="#collapse1" data-parent="#accordion" data-toggle="collapse">Pediactric Clinic</a></h4>
                                </div>
                                
                                <div class="panel-collapse collapse" id="collapse1">
                                    <div class="panel-body">
                                        <img src="img/home/accordion-baby.jpg" width="99" height="99" class="pull-left" style="margin-right:20px;" alt="baby"> <p>Mauris adisciping fringila turpis intend tellus ornare etos pelim. Pulvunar est cardio neque vitae elit. Lorem vulputat paentra nunc gravida. Mauris adisciping fringila turpis intend tellus ornare etos. </p>
                                        
                                        <p>Mauris adisciping fringila turpis intend tellus ornare etos pelim. Pulvunar est cardio neque vitae elit. Lorem vulputat paentra nunc gravida. Mauris adisciping fringila turpis intend tellus ornare etos. </p>
                                        <a href="#" class="pm-standard-link pm-no-margin">Learn more <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            
                            </div>
                            <!-- accordion item 2 end -->
                            
                            <!-- accordion item 3 -->
                            <div class="panel panel-default">
                            
                                <div class="panel-heading">
                                    <h4 class="panel-title"><i class="fa fa-plus"></i><a class="pm-accordion-link collapsed" href="#collapse2" data-parent="#accordion" data-toggle="collapse">Dental Clinic</a></h4>
                                </div>
                                
                                <div class="panel-collapse collapse" id="collapse2">
                                    <div class="panel-body">
                                        <p>Mauris adisciping fringila turpis intend tellus ornare etos pelim. Pulvunar est cardio neque vitae elit. Lorem vulputat paentra nunc gravida. Mauris adisciping fringila turpis intend tellus ornare etos.</p>
                                        <a href="#" class="pm-standard-link pm-no-margin">Learn more <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            
                            </div>
                            <!-- accordion item 3 end -->
                            
                            <!-- accordion item 4 -->
                            <div class="panel panel-default">
                            
                                <div class="panel-heading">
                                    <h4 class="panel-title"><i class="fa fa-plus"></i><a class="pm-accordion-link collapsed" href="#collapse3" data-parent="#accordion" data-toggle="collapse">Physiotherapy</a></h4>
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
                                    <h4 class="panel-title"><i class="fa fa-plus"></i><a class="pm-accordion-link collapsed" href="#collapse4" data-parent="#accordion" data-toggle="collapse">Outpatient Rehabilitation</a></h4>
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
                                    <h4 class="panel-title"><i class="fa fa-plus"></i><a class="pm-accordion-link collapsed" href="#collapse5" data-parent="#accordion" data-toggle="collapse">Allergic Diseases</a></h4>
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
                                    <h4 class="panel-title"><i class="fa fa-plus"></i><a class="pm-accordion-link collapsed" href="#collapse6" data-parent="#accordion" data-toggle="collapse">Cancer Center</a></h4>
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
        
        </div>
        <!-- PANEL 2 end -->
        
        <!-- PANEL 3 -->
        <div class="container pm-containerPadding-top-100 pm-containerPadding-bottom-100">
        
            <div class="row">
                <div class="col-lg-12 pm-columnPadding30 pm-center">
                    
                    <h5>Latest News from Health and Medical</h5>
                    <div class="pm-column-title-divider">
                        <img src="img/divider-icon.png" width="29" height="29" alt="icon">
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt<br>
 ut laoreet dolore magna aliquam erat volutpat.</p>
                    
                </div>
            </div>
        
            <div class="row">
            
                <div class="col-lg-4 col-md-4 col-sm-12">
                    
                    <!-- Blog post 1 -->
                    <article class="pm-column-spacing wow fadeInUp animated" data-wow-delay="0.3s" data-wow-offset="50" data-wow-duration="1s">
                    
                        <p class="pm-standalone-news-post-category"><a href="#"><span>general information</span></a></p>
                    
                        <div class="pm-standalone-news-post" style="background-image:url(img/home/news-post1.jpg);">
                        
                            <div class="pm-standalone-news-post-overlay">
                                
                                <div class="pm-standalone-news-post-icon">
                                    <img src="img/home/post-icon.jpg" width="33" height="41" alt="icon">
                                </div>
                                
                                <h6 class="pm-standalone-news-post-title"><a href="{{URL:: asset('news-post')}}">asking the right questions when meeting your family doctor</a></h6>
                                
                                <p class="pm-standalone-news-post-date">January 21, 2015 by Dr. John Stanton</p>
                                
                            </div>
                        
                        </div>
                                                
                        <div class="pm-standalone-news-post-excerpt">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras id bibendum massa, vulputate consectetur dui. Ut ut eros congue, condimentum massa <a href="#">[...]</a> </p>
                            
                            <a href="{{URL:: asset('news-post')}}" class="pm-rounded-btn pm-center-align">view post  <i class="fa fa-plus"></i></a>
                            
                        </div>
                        
                    </article>
                    <!-- Blog post 1 end -->
                    
                </div>
                
                <div class="col-lg-4 col-md-4 col-sm-12">
                    
                    <!-- Blog post 2 -->
                    <article class="pm-column-spacing wow fadeInUp animated" data-wow-delay="0.6s" data-wow-offset="50" data-wow-duration="1s">
                    
                        <p class="pm-standalone-news-post-category"><a href="#"><span>physician</span></a></p>
                    
                        <div class="pm-standalone-news-post" style="background-image:url(img/home/news-post2.jpg);">
                        
                            <div class="pm-standalone-news-post-overlay">
                                
                                <div class="pm-standalone-news-post-icon">
                                    <img src="img/home/post-icon.jpg" width="33" height="41" alt="icon">
                                </div>
                                
                                <h6 class="pm-standalone-news-post-title"><a href="{{URL:: asset('news-post')}}">The difficulty of coordinating primary care</a></h6>
                                
                                <p class="pm-standalone-news-post-date">January 15, 2015 by Dr. Jane Williams</p>
                                
                            </div>
                        
                        </div>
                                                
                        <div class="pm-standalone-news-post-excerpt">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras id bibendum massa, vulputate consectetur dui. Ut ut eros congue, condimentum massa <a href="#">[...]</a> </p>
                            
                            <a href="{{URL:: asset('news-post')}}" class="pm-rounded-btn pm-center-align">view post  <i class="fa fa-plus"></i></a>
                            
                        </div>
                        
                    </article>
                    <!-- Blog post 2 end -->
                    
                </div>
                
                <div class="col-lg-4 col-md-4 col-sm-12">
                    
                    <!-- Blog post 3 -->
                    <article class="pm-column-spacing wow fadeInUp animated" data-wow-delay="0.9s" data-wow-offset="50" data-wow-duration="1s">
                    
                        <p class="pm-standalone-news-post-category"><a href="#"><span>education</span></a></p>
                    
                        <div class="pm-standalone-news-post" style="background-image:url(img/home/news-post3.jpg);">
                        
                            <div class="pm-standalone-news-post-overlay">
                                
                                <div class="pm-standalone-news-post-icon">
                                    <img src="img/home/post-icon.jpg" width="33" height="41" alt="icon">
                                </div>
                                
                                <h6 class="pm-standalone-news-post-title"><a href="{{URL:: asset('news-post')}}">what i learned from the next generation of doctors</a></h6>
                                
                                <p class="pm-standalone-news-post-date">January 8, 2015 by Dr. John Stanton</p>
                                
                            </div>
                        
                        </div>
                                                
                        <div class="pm-standalone-news-post-excerpt">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras id bibendum massa, vulputate consectetur dui. Ut ut eros congue, condimentum massa <a href="#">[...]</a> </p>
                            
                            <a href="{{URL:: asset('news-post')}}" class="pm-rounded-btn pm-center-align">view post  <i class="fa fa-plus"></i></a>
                            
                        </div>
                        
                    </article>
                    <!-- Blog post 3 end -->
                    
                </div>
            
            </div>
        
        </div>
        <!-- PANEL 3 end -->
        
        <!-- PANEL 4 -->
        <div class="pm-column-container testimonials pm-parallax-panel" style="background-color:#20bac7; background-image:url(img/home/newsletter-bg.jpg); background-repeat:repeat-y;" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="-50">
        
            <div class="container pm-containerPadding110">
                <div class="row">
                
                    <div class="col-lg-12 pm-center">
                    
                        <h5 class="light">Sign up for our Newsletter</h5>
                        
                        <p class="light">Follow us and stay up to date on the latest news in the medical industry</p>
                        
                        
                        <div class="pm-newsletter-form-container">
                            <form novalidate target="_blank" class="validate" name="mc-embedded-subscribe-form" id="mc-embedded-subscribe-form" method="post" action="http://pulsarmedia.us4.list-manage.com/subscribe/post?u=2aa9334fc1bc18c8d05500b41&amp;id=dbcb577c4d">  
                                <input type="text" placeholder="Name" id="MERGE1" name="MERGE1" class="placeholder">
                                <input type="text" placeholder="Email Address" id="MERGE0" name="MERGE0" class="placeholder">
                                <input type="submit" class="pm-newsletter-submit-btn" value="subscribe &plus;" id="mc-embedded-subscribe" name="subscribe">
                            </form>
                        </div>
                        
                    </div>
                
                </div><!-- /.row -->
            </div><!-- /.container -->
        
        </div>
        <!-- PANEL 4 end -->
        
        <!-- PANEL 5 -->
        <div class="container pm-containerPadding-top-120 pm-containerPadding-bottom-80">
            
            <div class="row">
                <div class="col-lg-12 pm-center pm-column-spacing">
                    <h5>Meet our Medical Specialists</h5>
                    <div class="pm-column-title-divider">
                        <img src="img/divider-icon.png" width="29" height="29" alt="icon">
                    </div>
                </div>
            </div>
        
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 pm-column-spacing">
                    
                    <!-- Staff profile -->
                    <div class="pm-staff-profile-parent-container wow fadeInUp animated" data-wow-delay="0.3s" data-wow-offset="50" data-wow-duration="1s">
                    
                        <div class="pm-staff-profile-container" style="background-image:url(img/home/staff-profile1.jpg);">
                    
                            <div class="pm-staff-profile-overlay-container">
                            
                                <ul class="pm-staff-profile-icons">
                                    <li><a href="#" class="fa fa-twitter"></a></li>
                                    <li><a href="#" class="fa fa-facebook"></a></li>
                                    <li><a href="#" class="fa fa-google-plus"></a></li>
                                    <li><a href="#" class="fa fa-linkedin"></a></li>
                                </ul>
                                
                                <div class="pm-staff-profile-quote">
                                    <p>"We should be concerned not only about the health of individual patients, but also the health of our entire society."</p>
                                    <a href="#" class="pm-square-btn pm-center-align">View profile</a>
                                </div>
                            
                            </div>
                                                    
                            <a href="#" class="pm-staff-profile-expander fa fa-plus"></a>
                                                
                        </div>
                        
                        <div class="pm-staff-profile-info">
                            <p class="pm-staff-profile-name">dr. john stanton</p>
                            <p class="pm-staff-profile-title">family physician</p>
                        </div>
                    
                    </div>
                    
                    
                    <!-- Staff profile end -->
                    
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 pm-column-spacing">
                    
                    <!-- Staff profile -->
                    <div class="pm-staff-profile-parent-container wow fadeInUp animated" data-wow-delay="0.6s" data-wow-offset="50" data-wow-duration="1s">
                    
                        <div class="pm-staff-profile-container" style="background-image:url(img/home/staff-profile2.jpg);">
                    
                            <div class="pm-staff-profile-overlay-container">
                            
                                <ul class="pm-staff-profile-icons">
                                    <li><a href="#" class="fa fa-twitter"></a></li>
                                    <li><a href="#" class="fa fa-facebook"></a></li>
                                    <li><a href="#" class="fa fa-google-plus"></a></li>
                                    <li><a href="#" class="fa fa-linkedin"></a></li>
                                </ul>
                                
                                <div class="pm-staff-profile-quote">
                                    <p>"Never go to a doctor whose office plants have died."</p>
                                    <a href="#" class="pm-square-btn pm-center-align">View profile</a>
                                </div>
                            
                            </div>
                                                    
                            <a href="#" class="pm-staff-profile-expander fa fa-plus"></a>
                                                
                        </div>
                        
                        <div class="pm-staff-profile-info">
                            <p class="pm-staff-profile-name">mellisa dale</p>
                            <p class="pm-staff-profile-title">nutrionist</p>
                        </div>
                    
                    </div>                    
                    <!-- Staff profile end -->
                    
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    
                    <!-- Staff profile -->
                    <div class="pm-staff-profile-parent-container wow fadeInUp animated" data-wow-delay="0.9s" data-wow-offset="50" data-wow-duration="1s">
                    
                        <div class="pm-staff-profile-container" style="background-image:url(img/home/staff-profile3.jpg);">
                    
                            <div class="pm-staff-profile-overlay-container">
                            
                                <ul class="pm-staff-profile-icons">
                                    <li><a href="#" class="fa fa-twitter"></a></li>
                                    <li><a href="#" class="fa fa-facebook"></a></li>
                                    <li><a href="#" class="fa fa-google-plus"></a></li>
                                    <li><a href="#" class="fa fa-linkedin"></a></li>
                                </ul>
                                
                                <div class="pm-staff-profile-quote">
                                    <p>"The good physician treats the disease; the great physician treats the patient who has the disease."</p>
                                    <a href="#" class="pm-square-btn pm-center-align">View profile</a>
                                </div>
                            
                            </div>
                                                    
                            <a href="#" class="pm-staff-profile-expander fa fa-plus"></a>
                                                
                        </div>
                        
                        <div class="pm-staff-profile-info">
                            <p class="pm-staff-profile-name">dr. peter michaels</p>
                            <p class="pm-staff-profile-title">pediatrician</p>
                        </div>
                        
                    </div>                    
                    <!-- Staff profile end -->
                    
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
        <!-- PANEL 5 end -->
        
        <!-- PANEL 6 -->
        <div class="pm-column-container testimonials pm-parallax-panel" style="background-color:#20bac7; background-image:url(img/home/testimonials-bg.jpg); background-repeat:repeat-y;" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0">
            
            <div class="container pm-containerPadding100">
                <div class="row">
                
                    <div class="col-lg-12 pm-center">
                        <h5 class="light">What patients are saying about Medical-Link</h5>
                    </div>
                                
                    <div class="pm-testimonials-carousel" id="pm-testimonials-carousel">
                    
                        <ul class="pm-testimonial-items">
                            <li>
                                <div class="pm-testimonial-img" style="background-image:url(img/home/testimonial-1.jpg);">
                                    <div class="pm-testimonial-img-icon">
                                        <img src="img/home/post-icon.jpg" class="img-responsive pm-center-align" alt="icon">
                                    </div>
                                </div>
                                <p class="pm-testimonial-name">christine blaine</p>
                                <p class="pm-testimonial-title">Graphic Artist</p>
                                <div class="pm-testimonial-divider"></div>
                                <p class="pm-testimonial-quote">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam quis nostrud exerci tation.</p>
                            </li>
                            <li>                                
                                <div class="pm-testimonial-img" style="background-image:url(img/home/testimonial-2.jpg);">
                                    <div class="pm-testimonial-img-icon">
                                        <img src="img/home/post-icon.jpg" class="img-responsive pm-center-align" alt="icon">
                                    </div>
                                </div>
                                <p class="pm-testimonial-name">dave johnson</p>
                                <p class="pm-testimonial-title">HR Specialist</p>
                                <div class="pm-testimonial-divider"></div>
                                <p class="pm-testimonial-quote">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam quis nostrud exerci tation.</p>
                            </li>
                            <li>
                                <div class="pm-testimonial-img" style="background-image:url(img/home/testimonial-3.jpg);">
                                    <div class="pm-testimonial-img-icon">
                                        <img src="img/home/post-icon.jpg" class="img-responsive pm-center-align" alt="icon">
                                    </div>
                                </div>
                                <p class="pm-testimonial-name">Michael smith</p>
                                <p class="pm-testimonial-title">Mechanical Engineer</p>
                                <div class="pm-testimonial-divider"></div>
                                <p class="pm-testimonial-quote">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam quis nostrud exerci tation.</p>
                            </li>
                        </ul>
                    
                    </div>
                
                </div>
            </div>
            
        </div>
        <!-- PANEL 6 end -->
        
        
        <!-- PANEL 7 -->
        <div class="container pm-containerPadding-top-100 pm-containerPadding-bottom-120">
        
            <div class="row">
                <div class="col-lg-12 pm-columnPadding30 pm-center">
                    
                    <h5>Our Sponsors &amp; Partners</h5>
                    <div class="pm-column-title-divider">
                        <img height="29" width="29" src="img/divider-icon.png" alt="icon">
                    </div>
                    
                </div>
            </div>
        
            <div class="row">
            
                <div class="col-lg-12">
                    
                    <!-- carousel -->
                    <div id="pm-brands-carousel" class="owl-carousel owl-theme">
                        <div class="pm-brand-item">
                            
                            
                            <img src="img/home/client-carousel1.jpg" width="263" height="67" alt="Foundation Medicine"> 
                            <a href="http://www.google.com/" target="_blank">foundation-medicine.com</a>
                        </div>
                        <div class="pm-brand-item">
                            
                            
                            <img src="img/home/client-carousel2.jpg" width="263" height="67" alt="Hansen Medical"> 
                            <a href="http://www.google.com/" target="_blank">hansenmedical.com</a>
                        </div>
                        <div class="pm-brand-item">
                            
                            
                            <img src="img/home/client-carousel3.jpg" width="263" height="67" alt="Clinica Sant Jordi"> 
                            <a href="http://www.google.com/" target="_blank">santjordit.com</a>
                        </div>
                        <div class="pm-brand-item">
                            
                            
                            <img src="img/home/client-carousel4.jpg" width="263" height="67" alt="Sensile Medical"> 
                            <a href="http://www.google.com/" target="_blank">sensilemedical.com</a>
                        </div>
                        <div class="pm-brand-item">
                            
                            
                            <img src="img/home/client-carousel5.jpg" width="263" height="67" alt="Medical Advantages Group Inc."> 
                            <a href="http://www.google.com/" target="_blank">maginc.com</a>
                        </div>
                    </div>
                    <!-- carousel end -->
                    
                    <!-- carousel controls -->
                    <div class="pm-brand-carousel-btns">
                        <a class="btn pm-owl-prev fa fa-chevron-left"></a>
                        <!--<a class="btn pm-owl-play fa fa-play" id="pm-owl-play"></a>
                        <a class="btn pm-owl-stop fa fa-stop"></a>-->
                        <a class="btn pm-owl-next fa fa-chevron-right"></a>
                    </div>
                    <!-- carousel controls end -->
                    
                </div>
            
            </div>
        
        </div>
        <!-- PANEL 7 end -->
              
       
    
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
    

            @yield('body')
	</body>
</html>