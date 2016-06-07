<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--<title>Laravel</title> -->

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

            @yield('body')
    </body>
</html>