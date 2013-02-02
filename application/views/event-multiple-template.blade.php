<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<link rel='icon' type='image/png' href='../favicon.ico' />

{{HTML::style('css/foundation.css');}}
{{HTML::script('js/jquery.js');}}
{{HTML::script('js/foundation.min.js');}}
{{HTML::script('js/app.js');}}
{{HTML::style('css/flexslider.css');}}
{{HTML::style('css/style.css');}}
{{HTML::style('css/udt_shortcodes.css');}}
{{HTML::style('css/udt_media_queries.css');}}

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css' />
<title>Vectors | {{$event->name;}}</title>

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
<div id="wrapper" >

	<!--start header-->
	<div class="header clearfix">
            <div class="inner">
                <div class="logo-pages">
                    <div class="logo">
                        <a class="navigateTo" href="{{URL::to('/');}}#homepage">
                            <img src="../images/logos/hand_s.png" alt=""/>                   
                        </a>
                    </div>
                </div>
                
                <!--mobileMenu toggle-->
                <div class="mobileMenuToggle"><a href="#"></a></div>
                    
                <!--navigation-->
                <ul class="navigation">
                    <li><a class="navigateTo" href="{{URL::to('/');}}#homepage">Welcome</a></li>
                    <li><a class="navigateTo" href="{{URL::to('/');}}#about">About</a></li>
                    <li><a class="navigateTo" href="{{URL::to('/');}}#events">Events</a></li>
                    <li><a class="navigateTo" href="{{URL::to('/');}}#contact">Reach Us</a></li>
                    <li><a class="navigateTo active" href="#">Event | {{$event->name;}}</a></li>
                </ul>
            </div>
	</div>
	<!--end header--> 

	<!--start page-->
	<div id="contact" class="page even">
    
		<!--start content - left-->
        <div class="content clearfix">
		
            <!--content-left--> 
            <div class="content-inner-left">

                      @yield('maincontent')

            </div>
            
             <!--start sidebar-->
               <div id="sidebar" class="left">
                    <ul>
                        <!--widget-recent-posts-->
                        @yield('sidebar')

                    </ul>
               </div>
		</div>
		<!--end content-->
		
	</div>
	<!--end page--> 
    
<!--start footer-->
    <div id="footer" class="even">
    
        <div class="content" style="margin-bottom: 150px;">

            <!--logo-->
            <div class="logo">
                <a class="navigateTo" href="#homepage">
                    <img src="../images/logos/hand.png" alt="logo" style:"height:40px; width:20px;">
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