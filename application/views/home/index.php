<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<meta name="author" content="Tushar Deo" />
	<meta name="description" content="Vectors | 2013" />
	<meta name="keywords" content="techfest, 2013, INDIA, Mumbai" />
	<link rel='icon' type='image/png' href='favicon.ico' />
	<link rel="stylesheet" type="text/css" href="css/jquery.fancybox-1.3.4.css"/>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/animate.css" />
	<link rel="stylesheet" type="text/css" href="css/epicfullscreen.css" />
	<link rel="stylesheet" type="text/css" href="css/udt_shortcodes.css" />
	<link rel="stylesheet" type="text/css" href="css/udt_media_queries.css" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800' rel='stylesheet' type='text/css' />
	<link href='http://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css' />
	<link href='http://fonts.googleapis.com/css?family=Alfa+Slab+One' rel='stylesheet' type='text/css'>
	<title>Vectors | 2013</title>

</head>
<body>
		<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	
	<!--start wrapper-->
<div id="wrapper">

	<!--start header-->
    <div class="header header-main clearfix">
		<div class="inner">
			<div class="logo-pages">
				<div class="logo">
                	<a class="navigateTo" href="#homepage">
						<img src="images/logos/hand_s.png" alt=""/>                   
                    </a>
				</div>
			</div>
            
            <!--mobileMenu toggle-->
            <div class="mobileMenuToggle"><a href="#"></a></div>
                
            <!--navigation-->
            <ul class="navigation">
                <li><a class="navigateTo" href="#homepage">Welcome</a></li>
                <li><a class="navigateTo" href="#about">About</a></li>
                <li><a class="navigateTo" href="#events">Events </a></li>
                <li><a class="navigateTo" href="#contact">Reach Us</a></li>
            </ul>
		</div>
    </div>
    <!--end header--> 
      
	<!--start homepage-->
	<div id="homepage" class="homepage section">    
	<!-- <div id="homepage" class="highlight scroll" style="background: url(images/gallery/pos-back.jpg) no-repeat;"> -->
    	<!--background image-->
        <div class="epicFullscreen">
			<img class="epicImg" src="images/gallery/pos-back.jpg" alt=""/>
    	</div>
        
        <!--start featured content-->
        <div class="container" id="featured">
            <div>
            	<img src="images/logos/mask.png" alt="logo" style:"height:40px; width:20px;">
            </div>
            <div>
				<a id="ll-button" class="button" href="#">Replay!</a>
			</div>
			<p id="ll-message" class="ll-message">A.C. Patil College Of Engineering Event! <br /><span><b>VECTORS </b></span></p>
			<div id="ll-wrapper" class="ll-wrapper">
				<h3>Welcome</h3> 
				<h3>To</h3>	
				<h3>Vectors</h3>
				<h3>2013</h3>
			</div>  
		          
             <!--start page down-->
            <a class="navigateTo page-down" href="#about"></a>
            
        </div>
        <!--end featured content-->   
        
    </div>
	<!--end homepage-->
      
    
	<!--start page 2-->
	<div id="about" class="page odd section scroll" style="background:#fff url(images/patterns/test-pattern.png) repeat;">
     
 		<!--start featured content-->
        <div class="content clearfix">   
                
			<!--info-->
			<div class="column_one_half">
				<h1 class="focus-title"><span>About Vectors!</span></h1>
                 
			</div>
            
            <!--image-->
			<div class="column_one_half last">
            	<p class="info-focus" style="text-align: justify; text-justify: newspaper">Vectors, the technical spirit of A.C Patil college of Engineering is making a grand comeback to engulf the city of dreams with its intoxicating zest and set it ablaze with the hues of felicity. We are presenting to you a carnival of fun filled events to stir your mind, body, soul and provide you a refreshing retreat from your hectic rushed life. Join us in this joy-strewn path to celebrate technology and Intellect…
				</p>
			</div>
        </div>
        <!--end featured content-->  
        
        <!--start highlight-->
        <div id="highlight" class="highlight fixed" style="background: url(images/gallery/back2.jpg) repeat;">
            <div class="info-container">
                <div class="info">
                    <div class="info-inner">
                        <div class="column_one_half">
                            <h5><span>FRESH IN MARKET</span></h5>
                        	<p class="info-focus"><strong>WANA HAVE SOME FUN?</strong></p>
                        </div>
                        <div class="column_one_half last">
                             <!-- <p class="info-focus">  -->
                             	<h5><span>'BEG, BORROW, DEAL', 'CRICK-O-LUMIA', 'WHAT AN IDEA SIRJEE!', 'WORDBLAZE'.</span></h5>
                             <!-- </p> -->
                        </div>
                    </div>
                </div>
            </div>
            
             <!--section-button-->
            <div class="section-button">
                <a class="navigateTo page-up" href="#about"></a>
            </div>
        </div>
        <!--end highlight-->  
        
       
        
	</div>
	<!--end page 2--> 
    
   
    
	<!--start page 3-->
	<div id="events" class="page even section">
     
 		<!--start featured content-->
        <div class="content clearfix">   
                
			<!--image-->
			<div class="column_one_half">
            	<div class="left">
					<ul>
						
            			<li><h5><span><?= HTML::link('event/beg-borrow-deal', 'BEG, BORROW, DEAL'); ?></span></h5></li>
            			<li><h5><span><?= HTML::link('event/crick-o-lumia', 'CRICKO-LUMIA'); ?></span></h5></li>
            			<li><h5><span><?= HTML::link('event/crazy-coding', 'CRAZY CODING'); ?></span></h5></li>
            			<li><h5><span><?= HTML::link('event/engi-nerd', "ENGI-NERD"); ?></span></h5></li>
            			<li><h5><span><?= HTML::link('event/status-employed', 'STATUS: EMPLOYED'); ?></span></h5></li>
            			<li><h5><span><?= HTML::link('event/what-an-idea-sirjee', 'WHAT AN IDEA SIRJEE!'); ?></span></h5></li>
            			<li><h5><span><?= HTML::link('event/lakshyabhed', 'LAKSHYABHED'); ?></span></h5></li>
            			<li><h5><span><?= HTML::link('event/live-cs', 'LIVE! CS'); ?></span></h5></li>
            			<li><h5><span><?= HTML::link('event/mobile-app-dev', 'MOBILE APPLICATION DEVELOPMENT'); ?></span></h5></li>
            			<li><h5><span><?= HTML::link('event/paperx', 'PAPER X'); ?></span></h5></li>
            		</ul>
                </div>
			</div>
            
            <!--info-->
			<div class="column_one_half last" style="text-align: right;">

                <ul>
            			<li><h5><span><?= HTML::link('event/regain-race', 'REGAIN RACE'); ?></span></h5></li>
            			<li><h5><span><?= HTML::link('event/robo-rebels', 'ROBO REBELS'); ?></span></h5></li>
            			<li><h5><span><?= HTML::link('event/are-you-game', 'R U GAME?'); ?></span></h5></li>
            			<li><h5><span><?= HTML::link('event/mission-sql', 'MISSION SQL'); ?></span></h5></li>
            			<li><h5><span><?= HTML::link('event/survival-smartest', 'SURVIVAL OF THE SMARTEST'); ?></span></h5></li>
            			<li><h5><span><?= HTML::link('event/tech-da-vinci', 'TECH DA VINCI'); ?></span></h5></li>
            			<li><h5><span><?= HTML::link('event/tech-mela', 'TECH MELA'); ?></span></h5></li>
            			<li><h5><span><?= HTML::link('event/technopoly', 'TECHNOPOLY'); ?></span></h5></li>
            			<li><h5><span><?= HTML::link('event/wordblaze', 'WORD BLAZE'); ?></span></h5></li>
            			<li><h5><span><?= HTML::link('event/technohunt', 'TECHNOHUNT'); ?></span></h5></li>
            		</ul>
             
			</div>
        </div>
        <!--end featured content-->   
        
        <!--start highlight-->
        <div id="highlight-2" class="highlight scroll" style="background: url(images/gallery/back2.jpg) repeat;">
            <div class="info-container">
                <div class="info">
                    <h1><span>Our Sponsors :</span></h1>
<!--                     <img style="margin-right:20px;" src="images/featured-in.png" alt=""/>
 -->                    <a href="http://www.stupidsid.com/" target="_blank"><img style="margin-right:20px;" src="images/logos/stupidsid.jpg" alt=""/></a>
                    <!-- <a href="#"><img style="margin-right:20px;" src="" alt=""/></a>
                    <a href="#"><img style="margin-right:20px;" src="" alt=""/></a>
                    <a href="#"><img style="margin-right:20px;" src="" alt=""/></a> --><br/>
                </div>
            </div>
             <!--section-button-->
            <div class="section-button">
                <a class="navigateTo page-up" href="#events"></a>
            </div>
        </div>
        <!--end highlight--> 
        
       
        
	</div>
	<!--end page 3--> 
    
   
    
    <!--start contact-->
	<div id="contact" class="page even section">
    
		<!--start featured content-->
        <div class="content clearfix centeralign">      
    
            
            <img src="http://maps.google.com/maps/api/staticmap?center=19.029746,73.060219&zoom=16&markers=A.C.+Patil kharghar&path=color:0x0000FF99|weight:7|19.03017,73.06219|19.02875,73.05985|19.02814,73.06028&path=color:0x0000FF99|weight:7|19.03054,73.06189|19.03023,73.06224&maptype=hybrid&size=800x400&sensor=true" alt="Google Maps">
			
         
         </div>
         
        <!--section-button-->
        <div class="section-button last-page">
        	<a class="navigateTo page-up"  href="#homepage"></a>
        </div>
        
	</div>
	<!--end signup--> 
    
    
	<!--start footer-->
	<div id="footer" class="even">
    
		<div class="content" style="margin-bottom: 150px;">

			<!--logo-->
            <div class="logo">
            	<a class="navigateTo" href="#homepage">
                	<img src="images/logos/hand.png" alt="logo" style:"height:40px; width:20px;">
                </a>
            </div>
            <!--copyright-->
            <p class="copyright">&copy; <a href="" title="Vectors | 2013">Vectors </a>| 2013 was crafted by <a href="http://tusharvikky.github.com/" target="_blank"><b>tusharvikky</b></a>.</p>

            <div class="fb-like" data-href="https://www.facebook.com/Vectors2013" data-send="false" data-width="450" data-show-faces="true" data-colorscheme="dark"></div>        


            </div>

            

        
    </div>
    <!--end footer-->

</div>        
<!--end wrapper-->   












		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js"></script>
		<script type="text/javascript" src="js/jquery.lazyload.js"></script>
		<script type="text/javascript" src="js/jquery.epicfullscreen.js"></script>
		<script type="text/javascript" src="js/waypoints.min.js"></script>   
		<script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
		<script type="text/javascript" src="js/onepage.js"></script>
		<script type="text/javascript" src="js/jquery.fancybox-1.3.4.pack.js"></script>
		<script type="text/javascript" src="js/common.js"></script>
		<script type="text/javascript" src="js/subscribe.js"></script>
		<script type="text/javascript" src="js/jquery.lettering.js"></script>
		<script type="text/javascript" src="js/jquery.animation.js"></script>
		<script type="text/javascript" src="js/modernizr.custom.66501.js"></script>


		<script type="text/javascript">

					
					 

					//device check
					var isMobile = false;
			
					if( navigator.userAgent.match(/Android/i) || 
						navigator.userAgent.match(/webOS/i) ||
						navigator.userAgent.match(/iPhone/i) || 
						navigator.userAgent.match(/iPad/i)|| 
						navigator.userAgent.match(/iPod/i) || 
						navigator.userAgent.match(/BlackBerry/i)){
										
							isMobile = true;
									
					}
					
					
					
					//epic fullscreen
					$(window).ready(function(){
			
						 $('.epicFullscreen').epicFullscreen({
						 
							opacity:0.9,
							background:'#fc7022',
							pattern:true,
							callback: function(){
							
								
								$('#featured').animate({opacity:1},500);
								
								
							}
						 
						 });	
					});
					
		</script>
		
		<script type="text/javascript">
			//Analytics
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-35694116-2']);
		  _gaq.push(['_trackPageview']);

		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();

		</script>	
</body>
</html>
