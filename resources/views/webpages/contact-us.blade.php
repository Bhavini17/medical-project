@extends('layouts.master')

@section('body')


        <!-- Sub-header area -->
        
        <div class="pm-sub-header-container">
        
        	<div class="pm-sub-header-info">
            	
                <div class="container"> 
                	<div class="row">
                    	<div class="col-lg-12">
                        	
                            <p class="pm-page-title">Contact Us</p>
                            <p class="pm-page-message">Have a question? Our friendly staff is here to help</p>
                            
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
                                <li>contact us</li>
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
                
        <!-- PANEL 1 -->
        <div class="container pm-containerPadding-top-80 pm-containerPadding-bottom-50">
        
        	<div class="row">
            	<div class="col-lg-12 pm-columnPadding30 pm-center">
                	
                    <h5>Get in touch with us</h5>
                    <div class="pm-column-title-divider">
                    	<img height="29" width="29" src="img/divider-icon.png" alt="icon">
                    </div>
                    
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat consectetuer adipiscing elit, sed diam nonummy.</p>
                    
                    <br />
                    
                    <p><strong>Phone:</strong> +1-800-123-4567</p>
                    <p><strong>Fax:</strong> +1-877-123-4567</p>
                    <p><strong>Email:</strong> <a href="mailto:info@medical-link.com">info@medical-link.com</a></p>
                    
                    <br />
                    <br />
                    
                    <h5>Medical-Link</h5>
                    <div class="pm-column-title-divider">
                    	<img height="29" width="29" src="img/divider-icon.png" alt="icon">
                    </div>
                    
                    <p>1 Dundas St. West <br />Toronto, Ontario Canada <br />L4B BJ9</p>
                    
                </div>
            </div>
        
        
        </div>
        
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2886.625890490841!2d-79.38174200000002!3d43.6559513!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b369f05582ca3%3A0x7d0cc89d80fac311!2s1+Dundas+St+W%2C+Toronto+Eaton+Centre%2C+Toronto%2C+ON+M6P+2A1!5e0!3m2!1sen!2sca!4v1421441132728" height="450" style="border:0"></iframe>
        <!-- PANEL 1 end -->
        
        <!-- PANEL 2 -->
        <div class="container pm-containerPadding110">
        
        	<div class="row">
            	<div class="col-lg-12 pm-center pm-column-spacing">
                	<h5>Contact us by Form</h5>
                    <div class="pm-column-title-divider">
                    	<img height="29" width="29" src="img/divider-icon.png" alt="icon">
                    </div>
                </div>
            </div>
            
            <div class="row">
                
                	<form action="#" method="post">
                    	
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <input name="pm-first-name-field" class="pm-form-textfield" type="text" placeholder="First Name">
                        </div>
                        
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <input name="pm-last-name-field" class="pm-form-textfield" type="text" placeholder="Last Name">
                        </div>
                        
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <input name="pm-email-field" class="pm-form-textfield" type="text" placeholder="Email Address">
                        </div>
                        
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <input name="pm-phone-field" class="pm-form-textfield" type="text" placeholder="Phone Number">
                        </div>
                        
                        <div class="col-lg-12">
                            <textarea name="pm-textarea-field" class="pm-form-textarea" cols="50" rows="10" placeholder="Message"></textarea>
                        </div>
                        
                        <div class="col-lg-12 pm-center">
                            <input type="button" value="Submit Form &plus;" name="pm-form-submit-btn" class="pm-form-submit-btn">
                            <p class="pm-required">all fields are required</p>
                        </div>
                    
                    </form>
                
                
                </div>
            
        </div>
        <!-- PANEL 2 end -->
    

 @stop


