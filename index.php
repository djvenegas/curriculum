<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
	<meta charset="UTF-8">
	<title>Daniel Venegas</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
	<!-- CSS Styles -->
    <link rel="stylesheet" type="text/css" href="css/main.css">	

    
    <!-- Favicons 
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">-->

	<!-- Google Web Fonts -->

    
    <!-- JavaScripts -->
    <script type="text/javascript" src="js/prefixfree.min.js"></script>
	<script type="text/javascript" src="js/modernizr-2.6.2.js"></script>
    <script type="text/javascript" src="js/iOS-timer.js"></script>
    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.run.js"></script>
    <script type="text/javascript" src="js/jquery.easing.min.js"></script>
    <script type="text/javascript" src="js/jquery.mobile-touch-swipe-1.0.js"></script>
    <script type="text/javascript" src="js/jquery.lazyload.js"></script>
    <script type="text/javascript" src="js/jquery.flexslider.js"></script>
    <script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
    <script type="text/javascript" src="js/supersized.3.2.7.min.js"></script>
    <script type="text/javascript" src="js/supersized.shutter.min.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
    <script type="text/javascript" src="js/contact_form.js"></script>
    <script type="text/javascript" src="js/tooltip.js"></script>
    <script type="text/javascript" src="js/jquery.sticky.js"></script>


	<script type="text/javascript">

			var isMobile = false;
	
			if( navigator.userAgent.match(/Android/i) || 
				navigator.userAgent.match(/webOS/i) ||
				navigator.userAgent.match(/iPhone/i) || 
				navigator.userAgent.match(/iPad/i)|| 
				navigator.userAgent.match(/iPod/i) || 
				navigator.userAgent.match(/BlackBerry/i)){
								
				isMobile = true;
							
			}
			
			/*iOS5 fixed-menu fix*/
			var iOS5 = false;
			
			if (navigator.userAgent.match(/OS 5(_\d)+ like Mac OS X/i)){
			
				iOS5 = true;
			
			}
		
			
	</script>
    
<!-- Google Maps Code -->
    <script type="text/javascript"
        src="http://maps.google.com/maps/api/js?sensor=true">
    </script>
    <script type="text/javascript">
      function initialize() {
        var latlng = new google.maps.LatLng(-37.82179, 144.95302);
        var myOptions = {
          zoom: 12,
          center: latlng,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("map_canvas"),
            myOptions);
      }

    </script>
<!-- END Google Maps Code -->
    
	<script>
		$(document).ready(function(){
			$("nav").sticky({topSpacing:0});
		});
	</script>


</head>

<body>

<!-- Start Homepage -->
	<div id="homepage" class="homepage section">
		
		<div class="container">
			<div class="sixteen columns">
				<img alt="" class="logo" src="images/logo.png" />
			</div>
			
			<div class="slider-text">
				<div class="sixteen columns">
					<div class="line"></div>
				</div>
				
				<div class="twelve columns">
					<div id="slidecaption"></div>
				</div>
				
				<div class="four columns">
					<a id="prevslide" class="load-item"></a>
					<a id="nextslide" class="load-item"></a>
				</div>
			</div>
	
		</div>
	</div>      
	
<!--End homepage -->

<!-- Start Navigation -->
<?php require_once('mod/menu.php');?>   
<!-- End Navigation -->	
     
     
<!--start portfolio -->
<?php require_once('mod/portafolio.php');?>   
<!--start parallax 1-->
         <div id="parallax-1" class="parallax fixed" style="background-image: url(images/parallax-1.jpg);">
             <div class="quoteWrap">
				<div class="quote">
                	<div class="container">
                        <div class="sixteen columns">
                            <h3><span class="large"> La inteligencia </span> <span class="largeBold">sin ambición.</span>
                            	<br><span class="medium">es un pájaro </span> <span class="mediumBold">sin alas.</span> 
                            	<br><span class="author">Salvador Dali</span></h3>
                        </div>
                    </div>  
				</div>
             </div>
         </div>
         <!--end parallax-->

     </div>
<!--end portfolio-->       
     
<!--start About -->
<?php require_once('mod/nosotros.php');?>  
        
        <!--start parallax 2-->
         <div id="parallax-2" class="parallax fixed" style="background-image: url(images/parallax-2.jpg);">
             <div class="quoteWrap">
				<div class="quote">
                	<div class="container">
                        <div class="sixteen columns">
                            <h3><span class="smallBold">Lorem ipsum dolor sit amet,</span> <span class="small">consectetur adipisicing</span>
                            <br><span class="large">ostrud exercitation</span> <span class="largeBold">ullamco laboris nisi</span>
                            <br><span class="medium">aliqua. Ut enim ad minim,</span><span class="mediumBold">veniam, quis </span>
                            <br><span class="author">Salvador Dali</span></h3>
                        </div>
                    </div>  
				</div>
             </div>
         </div>
       <!--end parallax 2-->
        
     </div>
 <!--end about--> 
<?php require_once('mod/servicios.php');?>      
    
 <!--start Services -->

        
        <!--start parallax 3-->
         <div id="parallax-3" class="parallax fixed" style="background-image: url(images/parallax-3.jpg);">
             <div class="quoteWrap">
				<div class="quote">
                	<div class="container">
                        <div class="sixteen columns">
                            <h3><span class="smallBold">Lorem ipsum dolor sit amet,</span> <span class="small">consectetur adipisicing</span>
                            <br><span class="large">ostrud exercitation</span> <span class="largeBold">ullamco laboris nisi</span>
                            <br><span class="medium">aliqua. Ut enim ad minim,</span><span class="mediumBold">veniam, quis </span>
                            <br><span class="author">Salvador Dali</span></h3>
                        </div>
                    </div>
				</div>
             </div>
         </div>
       <!--end parallax 3-->
        
     </div>
<!--end services-->  
    

<?php require_once('mod/cualidades.php');?>      
        
<!--start Features -->
   
        
        <!--start parallax 4-->
         <div id="parallax-4" class="parallax fixed" style="background-image: url(images/parallax-4.jpg);">
             <div class="quoteWrap">
				<div class="quote">
                	<div class="container">
                        <div class="sixteen columns">
                            <h3><span class="largeBold">Lorem ipsum dolor sit amet,</span> <span class="large">consectetur adipisicing.</span>
                                <br><span class="medium">aliqua. Ut enim ad minim,</span><span class="mediumBold">veniam, quis </span>
                                <br><span class="large">ostrud exercitation</span> <span class="largeBold">ullamco laboris nisi</span>
                                <br><span class="author">Salvador Dali</span>
                            </h3>
                        </div>
                    </div>  
				</div>
             </div>
         </div>
       <!--end parallax 4-->
        
     </div>
<!--end Features-->  
    
<!--start contact-->
<?php require_once('mod/contacto.php');?>          
        <!--start parallax 5-->
         <div id="parallax-5" class="parallax fixed" style="background-image: url(images/parallax-5.jpg);">
            <div class="quoteWrap">
				<div class="quote">
                	<div class="container">
                        <div class="sixteen columns">
                        	 <h3><span class="largeBold">Lorem ipsum dolor sit amet,</span> <span class="large">consectetur adipisicing.</span>
                                <br><span class="medium">aliqua. Ut enim ad minim,</span><span class="mediumBold">veniam, quis </span>
                            </h3>
                        </div>
                    </div>  
				</div>
             </div>
         </div>
       <!--end parallax 5-->
        
     </div>
<!--end contact--> 
    
    
<!--start footer-->
    <div id="footer">
    
        <div class="container">
            <!-- Our Clients -->
            <div class="sixteen columns">
                <h3 class="sectionTitle">Nuestros clientes</h3>
            </div>
            
            <div class="sixteen columns">
                 <section class="slider">
                    <div id="carouselSlider" class="flexslider carousel">
                       <ul class="slides">
                          <li><img src="images/logos/Marlin-white.png" alt="Marlin" /></li>
                          <li><img src="images/logos/Aquatic-white.png" alt="Aquatic"/></li>
                          <li><img src="images/logos/Dalmation-Design-white.png" alt="Dalmation Design" /></li>
                          <li><img src="images/logos/Imperius-Horse-white.png" alt="Imperius" /></li>
                          <li><img src="images/logos/Octopixel-white.png" alt="Octopixel" /></li>
                          <li><img src="images/logos/Sirius-white.png" alt="Sirius" /></li>
                          <li><img src="images/logos/Solenergy-white.png" alt="Solenergy" /></li>
                          <li><img src="images/logos/Spiralus-Multimedia-white.png" alt="Spiralus" /></li>
                          <li><img src="images/logos/Think-pink-white.png" alt="Think Pink" /></li>
                       </ul>
                    </div>
                 </section>
            </div>
            <!-- Our Clients End -->
            
            <div class="sixteen columns">	
                <p class="copyright">&copy; agencia 2014. <br/>All rights reserved. </p>
            </div>
        </div>
    </div>
<!--end footer-->
<?php require_once('mod/top-letter.php'); ?> 
<script type="text/javascript">
	function moveTo(contentArea){
		var goPosition = $(contentArea).offset().top;
		$('html,body').animate({ scrollTop: goPosition}, 'slow');
	}
</script>

<script type="text/javascript">
	  $('#carouselSlider').flexslider({
		animation: "slide",
		animationLoop: true,
		itemWidth: 237,
		itemMargin: 2,
		start: function(slider){
		  $('body').removeClass('loading');
		}
	  });
</script>

<script type="text/javascript" charset="utf-8">
	$(document).ready(function(){
		
		$("a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',slideshow:6000});
		$(".contactDetails a[rel^='prettyPhoto']:first").prettyPhoto({
			custom_markup: '<div id="map_canvas" style="width:500px; height:500px"></div>',
			changepicturecallback: function(){ initialize(); }
		});
	});
</script>

  

</body>
</html>
