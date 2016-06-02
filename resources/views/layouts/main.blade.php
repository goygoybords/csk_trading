<!doctype html>
<html class="no-js" lang="en" prefix="og: http://ogp.me/ns#"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  		<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
      	<title>CSK Trading - Importers of Trucks and Truck Cabins</title>
	    
	    <!-- Bootstrap -->
	    <link href="{{ URL::asset('css/main.combined.css') }}" rel="stylesheet">
	    <link href="{{ URL::asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

	    <!-- Google Fonts -->
	    <script type="text/javascript">
	    	WebFontConfig = { 
	    			google: { families: [ 'Lato:100,300,400,700,900:latin', 'Open+Sans:700,400italic,300,400,600:latin' ] }};
			  	(function() 
			  	{
			  	var wf = document.createElement('script');
			  	wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
			  	wf.type = 'text/javascript';
			  	wf.async = 'true';
			  	var s = document.getElementsByTagName('script')[0];
			  	s.parentNode.insertBefore(wf, s);
			  })(); 
  		</script>
  	
		<!-- <meta name="google-site-verification" content="7R7RcjqNlRGWAHpjfvcSfs6J3DuhLIMKPY00UqhsIsY" /> -->
	    <meta name="description" content="Welcome to CSK Trading. We are importers of Japan used trucks">
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <script src="http://d1k45mg6o9axif.cloudfront.net/js/libs/modernizr-2.5.3.min.js"></script>
	</head>

	<body>
		<header id="header-wrapper" class="container header-body">
			<!---FOR DESKTOP ONLY -->
			<nav id="nav-menu" class="nav-content">
				<div id="main-nav" class="main-desktop-only hidden-xs">
					<div class="logo navbar-left">
						<a href="{{ route('main:home') }}">
							<img src="{{ URL::asset('images/csk-logo.png')}}" style = "height:70px; width:135px;"/>
						</a>

					</div>
					<div class="navbar-right">
						<ul class="navbar-nav header-menu">
							<li><a href="{{ route('main:home') }}">HOME</a></li>
							<li><a href="{{ route('main:trucks', ['slug' => 'all-trucks']  )}}">TRUCKS</a></li>
							<li><a href="{{ route('main:about') }}">ABOUT US</a></li>
							<li><a href="{{ route('main:contact') }}">CONTACT US</a></li>
							<li><a href="{{ url('/login') }}">LOGIN</a></li> 
						</ul>
						<!-- <p style="text-align: right;margin-right: 11px;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif">Inquire Now (032) 236 - 6797</p> -->
					</div>
				</div>
				<div id="secondary-nav" class="secondary-desktop-only hidden-xs">
					<div class="container-fluid nopadding">
						<ul class="navbar-nav menu">
							<li class="li-home"><a href="{{ route('main:home') }}">HOME</a></li>
							<li class="li-services services-hover">
                            	<a href = "#" class="services-top-menu">TRUCKS</a>
                            	<ul class="nav secondary-sub services-sub-menu" style="display:none;">
                            		@foreach($categories as $c)
				                    	<li>
				                    		<a href="{{ route('main:trucks' , ['slug' => $c->slug ]) }}">{{ $c->description }}</a>
				                    	</li>          
				                    @endforeach
				                    <li>
				                    	<a href="{{ route('main:trucks' , ['slug' => 'all-trucks'] ) }}">ALL TRUCKS</a>
				                    </li>
                				</ul> 
            				</li>
                            <li class="about-us about-hover">
                            	<a href = "{{ route('main:about') }}">ABOUT US</a>
            				</li>
            				<li class="about-us about-hover">
            					<a href = "{{ route('main:contact') }}">CONTACT US</a>
                			</li>
                		</ul>
               		</div>
            	</div><!--/secondary-nav-->

            <!--FOR MOBILE ONLY -->
            <div id="nav-mobile-wrapper" class="nav-mobile-only visible-xs">
            	<div class="nav-mobile-fixed">
            		<ul class="mobile-nav">
            			<li class="mobile-logo pull-left">
            				<a href="?page=home"><img src="http://isuzuphil.imgix.net/assets/images/isuzu_logo.png?w=300" /></a>
            			</li>
            			<li class="secondary-menu pull-right">
            				<button type="button" class="navbar-secondary-menu"><span class="icon-bar"></span></button>
            			</li>
            			<li class="main-menu pull-right">
            				<span class="location_icon"></span>
            				<button type="button" class="navbar-main-menu">
            					<span class="icon-bar"></span>
            				</button>
            			</li>
            		</ul>
            	</div>
            	<div class="main-menu-mobile" id="main-menu-toggle" style="display:none;">
            		<ul class="nav main-menu-list">
            			<li>
            				<form method="get" id="sumbitSearch">
            					<span class="search-bar">
            						<input type="hidden" name="page" value="search" />
            						<input class="search_input_mobile" id="search" name="searchTxt" class="search" placeholder="Search" />
            						<i class="fa fa-search"></i>
            					</span>
            				</form>
            			</li>
			            <li><a href="?page=pricelist">PRICELIST</a></li>
			            <li><a href="?page=brochures">BROCHURE</a></li>
			            <li><a href="?page=testdrive">TEST DRIVE</a></li>
			            <li><a href="?page=quotation">REQUEST FOR QUOTATION</a></li>
			            <li><a href="?page=dealer">LOCATE A DEALER</a></li>
			        </ul>
			    </div>
			    <div class="secondary-menu-mobile" id="secondary-menu-toggle">
			    	<ul class="nav secondary-menu-list">
			    		<li class="li-home">
			    			<a href="?page=home" title="Isuzu Homepage" class="btn-home">HOME</a>
			    		</li>
			    		<li class="li-products-mobile">
			    			<a class="btn-menu">PRODUCTS<span class="arrow-white"></span></a>
			    		</li>
			    	</ul>
			    </div>
			</div>
		</header>
		@yield('content')
		
		
	  	<footer id="footer-wrapper">
  			<div class="secondary-footer container">
     			<div class="row">
        			<!-- <div class="col-md-4 nopadding">
          				<div class="col-xs-12 col-md-4 footer nopadding">
            				<div class="footer-name products">
				              	<h4>PRODUCTS</h4>
				            	<div class="arrow"></div>
				          	</div>
			              	<ul class="footer-list">
			              		<li><a href="?page=prodDetail&cat=17">Crosswind</a></li>
                          		<li><a href="?page=prodDetail&cat=18">D-MAX</a></li>
                          		<li><a href="?page=prodDetail&cat=19">mu-X</a></li>
		                        <li><a href="?page=prodDetail&cat=21">N-Series</a></li>
		                        <li><a href="?page=prodDetail&cat=28">F-Series</a></li>
		                        <li><a href="?page=prodDetail&cat=29">C&E Series</a></li>
		                        <li><a class="menu_cat_link" href="?page=product#Powertrain">Powertrain</a></li>
		                        <li><a href="?page=bus">Bus</a></li>
		                        <li><a href="?page=product">All Products</a></li>
		                    </ul> 
		                </div>
		                <div class="col-xs-12 col-md-8 footer nopadding">
		                	<div class="footer-name parts-services"><h4>PARTS & SERVICE</h4>
		                		<div class="arrow"> </div>
		                	</div>
				              <ul class="footer-list">
				                <li><a href="?page=parts">Parts & Accessories</a></li>
				                <li><a href="?page=periodic">Periodic Maintenance</a></li>
				                <li><a href="?page=serviceAnnounce">Service Campaign Announcements</a></li>
				              </ul>
				        </div>
				    </div>
				    <div class="col-md-5 nopadding">
				    	<div class="col-xs-12 col-md-3 footer nopadding">
				    		<div class="footer-name latest">
				    			<h4>LATEST</h4>
				    			<div class="arrow"></div>
				    		</div>
				              <ul class="footer-list">
				                <li><a href="?page=promos">Promos</a></li>
				                <li><a href="?page=news">News</a></li>
				                <li><a href="?page=activities">Events</a></li>
				                <li><a href="?page=video">Videos</a></li>
				              </ul>
				        </div>
				        <div class="col-xs-12 col-md-3 footer nopadding">
				        	<div class="footer-name dealers"><h4>DEALERS</h4>
				        		<div class="arrow"> </div>
				        	</div>
				              <ul class="footer-list">
				                <li><a href="?page=dealer&area=metro+manila">Metro Manila</a></li>
				                <li><a href="?page=dealer&area=luzon">Luzon</a></li>
				                <li><a href="?page=dealer&area=visayas">Visayas</a></li>
				                <li><a href="?page=dealer&area=mindanao">Mindanao</a></li>
				              </ul>
				        </div>
				        <div class="col-xs-12 col-md-6 footer nopadding">
				        	<div class="footer-name extra-mile"><h4>EXTRA MILE</h4>
				        		<div class="arrow"> </div>
				        	</div>
				              <ul class="footer-list">
				                <li><a href="?page=fuel">Fuel Calculator</a></li>
				                <li><a href="?page=isuzuKababayan">Isuzu Kababayan</a></li>
				                <li><a href="?page=bpi">BPI Family Online Financing</a></li>
				                <li><a href="?page=careers">Careers</a></li>
				                <li><a href="?page=embassy">Embassy Locator</a></li>
				              </ul>
			          	</div>
			        </div>
			        <div class="col-md-3 nopadding">
			        	<div class="col-xs-12 footer nopadding">
			        		<div class="footer-name contact_us">
			        			<h4>CONTACT US</h4>
			        			<div class="arrow"> </div>
			        		</div>
				              <ul class="footer-list">
				                <li><a href="?page=contact"><i class="fa fa-paper-plane-o"></i>Send Us A Message</a></li>
				                <li><i class="fa fa-phone"></i>Laguna:(049)541-0224</li>
				                <li><i class="fa fa-phone"></i>Manila:(632)757-6070</li>
				                <li><a href="maito:customer-relations@isuzuphil.com"><span class="mail-icon"></span>customer-relations@isuzuphil.com</a></li>
				                <li style="font-size: 13px;"><a href="maito:fleet-sales@isuzuphil.com"><span class="mail-icon"></span>Fleet Inquiry:fleet-sales@isuzuphil.com</a></li>
				                <li><i class="fa fa-home"></i>Isuzu Philippines Corporation
				                  <ul class="address">
				                    <li>&nbsp; 114 Technology Avenue,</li>
				                    <li>&nbsp; Laguna Technopark,</li>
				                    <li>&nbsp; Binan Laguna,4024</li>
				                  </ul>
				                </li>
				              </ul>
				        </div>
				    </div> -->
				</div>
			</div>
			<div class="main-footer-bg">
				<div class="container main-footer">
					<div class="logo pull-left" style="margin: 0 338px;">
						<span>&copy; 2016 CSK TRADING CEBU PHILIPPINES. ALL RIGHTS RESERVED.</span>
					</div>
					<!-- <div class="fb_icon pull-right">
						<a href="https://www.facebook.com/csktrading" target="_blank">
							<i class="fa fa-facebook"></i>
						</a>
					</div> -->
				</div>
			</div>
		</footer>
  		<!--footer-wrapper-->
  		<!-- JS Files -->
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
	    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
	    <script src="http://d1k45mg6o9axif.cloudfront.net/assets/js/slick.min.js"></script>
	    <script src="{{ URL::asset('js/common-scripts.js') }}"></script>
	    <script src="{{ URL::asset('js/readmore.min.js') }}"></script>
	    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
	    <script src="{{ URL::asset('js/bootstrap-datepicker.min.js') }}"></script>
  		<?php 
  		/**
  		*	<!-- STYLES FOR FlowPlayer-->
  		*<!-- a player skin as usual -->
  		*<link rel="stylesheet" href="css/minimalist.css">
		*<!-- the quality selector stylesheet -->
		*<link rel="stylesheet" href="css/quality-selector.css">
		*<!-- Add fancyBox main stylesheet -->
		*<!-- <link rel="stylesheet" type="text/css" href="/media/fancybox/jquery.fancybox.css?v=2.1.4" media="screen"> -->
		*
		*<!-- the Flowplayer script as usual -->
		*<script src="//releases.flowplayer.org/6.0.3/flowplayer.min.js"></script>
		*<!-- the quality selector plugin -->
		*<script src="//flowplayer.org/drive/quality-selector-v6.js"></script>
		*<!-- Add fancyBox main JS -->
		*<!-- <script src="/media/fancybox/jquery.fancybox.js?v=2.1.4"></script> -->
		*<!-- Add jQuery library -->
		*<!-- <script type="text/javascript" src="lib/jquery-1.10.1.min.js"></script>-->
		*<!--<link rel="stylesheet" type="text/css" href="popup.css">-->
		*<script src="js/script.js"></script>
		*<!-- Magnific Popup core CSS file -->
		*<link rel="stylesheet" href="css/magnific-popup.css">
		*<!-- Magnific Popup core JS file -->
		*<script src="js/jquery.magnific-popup.js"></script>
		*/
		?>
	</body>
</html>

