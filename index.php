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
     <div id="about" class="page section">
     
        <div class="container aboutContainer">
        
            <div class="sixteen columns">
            	<h1><span>Nosotros<br /></span>Nombre</h1>
                <h3><span class="smallBold">Lorem ipsum dolor sit amet,</span> <span class="small">consectetur adipisicing</span>
                <br><span class="mediumBold">tempor incididunt ut</span> <span class="medium">andlabore et dolore magna</span>
                <br><span class="medium">aliqua. Ut enim ad minim,</span><span class="mediumBold">veniam, quis </span>
                <br><span class="large">ostrud exercitation</span> <span class="largeBold">ullamco laboris nisi</span>
                <br><span class="medium">ut aliquip ex ea commodo</span><span class="mediumBold"> onsequat.</span> 
                </h3>
            </div>
            
            <div class="one-third column">
            	<div class="teamImage">
                    <img class="scale-with-grid lazy" src="images/team1.jpg" alt=""/> 
                    <div class="teamName">
                        <h2>Nombre</h2>
                        <h3>Director Creativo   </h3>
                        <ul class="socialLinksTeam tooltips">
                            <li class="twitter-white"><a href="#" rel="tooltip" title="Twitter">Twitter</a></li>
                            <li class="facebook-white"><a href="#" rel="tooltip" title="Facebook">Facebook</a></li>
                            <li class="skype-white"><a href="#" rel="tooltip" title="Skype">Skype</a></li>
                            <li class="linkedin-white"><a href="#" rel="tooltip" title="LinkedIn">Linked In</a></li>
                            <li class="dropbox-white"><a href="#" rel="tooltip" title="Dropbox">Dropbox</a></li>
                        </ul>
                    </div>
                </div>                        
            	<p>Le Lorem Ipsum est simplement du faux <span class="highlight">texte employé dans</span> la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie!</p>
             
                <h3 class="sectionTitle">Skills</h3>
                <div class="teamSkill">
                    <ul>
                        <li>
                            <p class="skill">Client Liasing</p>
                            <div class="bar percent90">
                            <p class="percent">90%</p></div>
                        </li>
                        <li>
                            <p class="skill">Client Lunches</p>
                            <div class="bar percent100">
                            <p class="percent">100%</p></div>
                        </li>
                        <li>
                            <p class="skill">i devices</p>
                            <div class="bar percent90">
                            <p class="percent">90%</p></div>
                        </li>
                        <li>
                            <p class="skill">Driving</p>
                            <div class="bar percent40">
                            <p class="percent">40%</p></div>
                        </li>
                        <li>
                            <p class="skill">MS Word</p>
                            <div class="bar percent25">
                            <p class="percent">25%</p></div>
                        </li>
                        
                    </ul>
                </div>
            </div>
            
            <div class="one-third column">
            	<div class="teamImage">
                    <img class="scale-with-grid lazy" src="images/team2.jpg" alt=""/> 
                    <div class="teamName">
                        <h2>Nombre</h2>
                        <h3>Diseñador Senior</h3>
                        <ul class="socialLinksTeam tooltips">
                            <li class="twitter-white"><a href="#" rel="tooltip" title="Twitter">Twitter</a></li>
                            <li class="facebook-white"><a href="#" rel="tooltip" title="Facebook">Facebook</a></li>
                            <li class="skype-white"><a href="#" rel="tooltip" title="Skype">Skype</a></li>
                            <li class="linkedin-white"><a href="#" rel="tooltip" title="LinkedIn">Linked In</a></li>
                            <li class="dropbox-white"><a href="#" rel="tooltip" title="Dropbox">Dropbox</a></li>
                        </ul>
                    </div>
                </div>                        
            	<p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. <span class="highlight">Le Lorem</span> Ipsum est le faux texte standard de l'imprimerie!</p>
             
                <h3 class="sectionTitle">Skills</h3>
                <div class="teamSkill">
                    <ul>
                        <li>
                            <p class="skill">Photoshop</p>
                            <div class="bar percent90">
                            <p class="percent">90%</p></div>
                        </li>
                        <li>
                            <p class="skill">Illustrator</p>
                            <div class="bar percent80">
                            <p class="percent">80%</p></div>
                        </li>
                        <li>
                            <p class="skill">i devices</p>
                            <div class="bar percent90">
                            <p class="percent">90%</p></div>
                        </li>
                        <li>
                            <p class="skill">Movies</p>
                            <div class="bar percent60">
                            <p class="percent">60%</p></div>
                        </li>
                        <li>
                            <p class="skill">Cleaning</p>
                            <div class="bar percent25">
                            <p class="percent">25%</p></div>
                        </li>
                        
                    </ul>
                </div>
            </div>
            
            <div class="one-third column">
            	<div class="teamImage">
                    <img class="scale-with-grid lazy" src="images/team3.jpg" alt=""/> 
                    <div class="teamName">
                        <h2>Nombre</h2>
                        <h3>Desarrolador Senior </h3>
                        <ul class="socialLinksTeam tooltips">
                            <li class="twitter-white"><a href="#" rel="tooltip" title="Twitter">Twitter</a></li>
                            <li class="facebook-white"><a href="#" rel="tooltip" title="Facebook">Facebook</a></li>
                            <li class="skype-white"><a href="#" rel="tooltip" title="Skype">Skype</a></li>
                            <li class="linkedin-white"><a href="#" rel="tooltip" title="LinkedIn">Linked In</a></li>
                            <li class="dropbox-white"><a href="#" rel="tooltip" title="Dropbox">Dropbox</a></li>
                        </ul>
                    </div>
                </div>                        
            	<p>Le Lorem Ipsum est <span class="highlight">simplement du faux</span> texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie!</p>
             
                <h3 class="sectionTitle">Skills</h3>
                <div class="teamSkill">
                    <ul>
                        <li>
                            <p class="skill">HTML</p>
                            <div class="bar percent90">
                            <p class="percent">90%</p></div>
                        </li>
                        <li>
                            <p class="skill">PHP</p>
                            <div class="bar percent60">
                            <p class="percent">60%</p></div>
                        </li>
                        <li>
                            <p class="skill">Coffee</p>
                            <div class="bar percent70">
                            <p class="percent">70%</p></div>
                        </li>
                        <li>
                            <p class="skill">Shopping</p>
                            <div class="bar percent100">
                            <p class="percent">100%</p></div>
                        </li>
                        <li>
                            <p class="skill">Shoes</p>
                            <div class="bar percent80">
                            <p class="percent">80%</p></div>
                        </li>
                        
                    </ul>
                </div>
            </div>

            
            <div class="sixteen columns">
            	<h3 class="sectionTitle">Nuestros numeros</h3>
            </div>
            
            <div class="statsWrap">
            	<div class="stats">
                    <div class="statDummy"></div>
                    <div class="statInfo">
                        <p class="statNumber">98%</p>
                        <p class="statText">Clientes satisfechos</p>
                    </div>
                </div>
            </div>
            <div class="statsWrap">
            	<div class="stats">
                    <div class="statDummy"></div>
                    <div class="statInfo">
                        <p class="statNumber">21</p>
                        <p class="statText"></p>
                    </div>
                </div>
            </div>
            <div class="statsWrap">
            	<div class="stats">
                    <div class="statDummy"></div>
                    <div class="statInfo">
                        <p class="statNumber">36</p>
                        <p class="statText"></p>
                    </div>
                </div>
            </div>
            <div class="statsWrap">
            	<div class="stats">
                    <div class="statDummy"></div>
                    <div class="statInfo">
                        <p class="statNumber statNumberMedium">1,350</p>
                        <p class="statText"></p>
                    </div>
                </div>
            </div>
            <div class="statsWrap">
            	<div class="stats">
                    <div class="statDummy"></div>
                    <div class="statInfo">
                        <p class="statNumber">67</p>
                        <p class="statText"></p>
                    </div>
                </div>
            </div>
            <div class="statsWrap">
            	<div class="stats">
                    <div class="statDummy"></div>
                    <div class="statInfo">
                        <p class="statNumber statNumberSmall">122,345</p>
                        <p class="statText"></p>
                    </div>
                </div>
            </div>
            <div class="statsWrap">
            	<div class="stats">
                    <div class="statDummy"></div>
                    <div class="statInfo">
                        <p class="statNumber">54</p>
                        <p class="statText"></p>
                    </div>
                </div>
            </div>
            <div class="statsWrap">
            	<div class="stats">
                    <div class="statDummy"></div>
                    <div class="statInfo">
                        <p class="statNumber statNumberSmall">234,989</p>
                        <p class="statText"></p>
                    </div>
                </div>
            </div>
            
     	</div>
        
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
    
    
 <!--start Services -->
     <div id="services" class="page section">
     
        <div class="container servicesContainer">
        
             <div class="sixteen columns">
             	<h1><span>Nuestros</span><br/>Servicios</h1>
                <h3><span class="smallBold">Lorem ipsum dolor sit amet,</span> <span class="small">consectetur adipisicing</span>
                <br><span class="medium">aliqua. Ut enim ad minim,</span><span class="mediumBold">veniam, quis </span>
                <br><span class="large">ostrud exercitation</span> <span class="largeBold">ullamco laboris nisi</span>
                <br><span class="medium">ut aliquip ex ea commodo</span><span class="mediumBold"> onsequat.</span> 
                </h3>
            </div>
      
            <div class="one-third column">
                <div class="serviceItem creativity">
                    <div class="serviceInfoWrap">
                        <div class="serviceInfo">
                            <div class="serviceInfoFront"></div>
                            <div class="serviceInfoBack">
                                <div class="serviceIcon"></div>
                                <h3>Creativity</h3>
                                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="one-third column">
                <div class="serviceItem strategy">
                    <div class="serviceInfoWrap">
                        <div class="serviceInfo">
                            <div class="serviceInfoFront"></div>
                            <div class="serviceInfoBack">
                                <div class="serviceIcon"></div>
                                <h3>Brand Strategy</h3>
                                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="one-third column">
                <div class="serviceItem development">
                    <div class="serviceInfoWrap">
                        <div class="serviceInfo">
                            <div class="serviceInfoFront"></div>
                            <div class="serviceInfoBack">
                                <div class="serviceIcon"></div>
                                <h3>App Development</h3>
                                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="one-third column">
                <div class="serviceItem copywriting">
                    <div class="serviceInfoWrap">
                        <div class="serviceInfo">
                            <div class="serviceInfoFront"></div>
                            <div class="serviceInfoBack">
                                <div class="serviceIcon"></div>
                                <h3>Copywriting</h3>
                                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="one-third column">
                <div class="serviceItem photography">
                    <div class="serviceInfoWrap">
                        <div class="serviceInfo">
                            <div class="serviceInfoFront"></div>
                            <div class="serviceInfoBack">
                                <div class="serviceIcon"></div>
                                <h3>Photography</h3>
                                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="one-third column">
                <div class="serviceItem production">
                    <div class="serviceInfoWrap">
                        <div class="serviceInfo">
                            <div class="serviceInfoFront"></div>
                            <div class="serviceInfoBack">
                                <div class="serviceIcon"></div>
                                <h3>Video Production</h3>
                                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ten columns marginTop">
                <p class="introtext"><span class="dropcap">V</span>ivamus lacinia metus at tellus commodo eu faucibus ante ultricies. Nullam sed diam eget justo vehicula auctor nec non turpis. Maecenas lacus nulla, scelerisque vel porta nec, rhoncus vitae diam. <span class="highlight">Suspendisse feugiat metus</span> sit amet justo commodo placerat elementum dui venenatis. Aenean euismod laoreet magna, vel egestas sem convallis quis. </p>	
                <p>Nullam quam augue, tincidunt ut dapibus nec, tempor sit amet purus. Nam quis felis eu mauris dictum auctor. Phasellus sit amet magna tortor, laoreet pharetra sem. Donec magna metus, viverra vitae aliquam et, convallis in tellus. <span class="highlight">Duis in massa massa</span> vel ultricies nisi. Morbi at tortor volutpat purus mattis blandit vel sit amet sapien. Sed eu nulla mollis felis semper faucibus. Fusce sed ipsum id leo posuere tempor. Nullam eget purus orci, ac posuere libero. </p>
            </div>


     	</div>
        
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
    
    
<!--start Features -->
     <div id="features" class="page section">
     
        <div class="container featuresContainer">
        
        	 <div class="sixteen columns">
             	<h1><span>Caracteristicas</span><br/>Principales</h1>
                <h3><span class="mediumBold">Lorem ipsum dolor sit amet,</span> <span class="medium">consectetur adipisicing</span>
                <br><span class="medium">aliqua. Ut enim ad minim,</span><span class="mediumBold">veniam, quis </span>
                <br><span class="large">ostrud exercitation</span> <span class="largeBold">ullamco laboris nisi</span>
                </h3>
            </div>
              
            <div class="sixteen columns">
                <h3 class="sectionTitle">Youtube & Vimeo Support</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,.</p>
                <div class="embed-container">
                    <iframe width="1280" height="720" src="https://www.youtube.com/embed/VXPoJAyeF8k" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        
        	<!-- Flickr -->
          <!--  <div class="sixteen columns latestFlickr">
                <h3 class="sectionTitle">Flickr</h3>
                    <div class="flickrListing">
                        <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=8&amp;display=latest&amp;size=s&amp;layout=x&amp;source=user&amp;user=21644167@N04"></script>
                        <div class="clearfix"></div>
                    </div>
            </div>-->
            
            <!-- FAQs -->
			<div class="sixteen columns">
            <h3 class="sectionTitle">FAQs</h3>
        	<p class="introtext">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. <br/>Sed posuere consectetur est at lobortis. Nulla vitae elit libero, a pharetra augue.</p>

                <!-- Accordion #1 -->
                <span class="accTrigger question"><a href="#">What is a HTML Template</a></span>
                <div class="accContainer">
                    <div class="accContent">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Sed posuere consectetur est at lobortis. Nulla vitae elit libero, a pharetra augue. Sed posuere consectetur est at lobortis. Nulla vitae elit libero, a pharetra augue. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</div>
                </div>
                    
                <!-- Accordion #2 -->
                <span class="accTrigger question"><a href="#">How do you modify the CSS file</a></span>
                <div class="accContainer">
                    <div class="accContent">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Sed posuere consectetur est at lobortis. Nulla vitae elit libero, a pharetra augue. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</div>
                </div>
                    
                <!-- Accordion #3 -->
                <span class="accTrigger question"><a href="#">Can I add captions on the slider</a></span>
                <div class="accContainer">
                    <div class="accContent">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Sed posuere consectetur est at lobortis. Nulla vitae elit libero, a pharetra augue.</div>
                </div>
                
                <!-- Accordion #4 -->
                <span class="accTrigger question"><a href="#">What are Shortcodes</a></span>
                <div class="accContainer">
                    <div class="accContent">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Sed posuere consectetur est at lobortis. Nulla vitae elit libero, a pharetra augue.</div>
                </div>
                
                <!-- Accordion #5 -->
                <span class="accTrigger question"><a href="#">What is isotope filtering</a></span>
                <div class="accContainer">
                    <div class="accContent">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Sed posuere consectetur est at lobortis. Nulla vitae elit libero, a pharetra augue. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</div>
                </div>
                
                <!-- Accordion #6 -->
                <span class="accTrigger question"><a href="#">Where do I find the CSS files</a></span>
                <div class="accContainer">
                    <div class="accContent">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Sed posuere consectetur est at lobortis. Nulla vitae elit libero, a pharetra augue.</div>
                </div>

			</div>
            
     	</div>
        
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
     <div id="contact" class="page section">
     
        <div class="container contactContainer">
        
        	<div class="sixteen columns">
            	<h1>Contactanos</h1>
                <h3><span class="mediumBold">Ponte en</span> <span class="medium">contacto</span>
                <br><span class="medium">Hablemos de</span> <span class="mediumBold">negocios</span>
                <br><span class="large">Podemos</span> <span class="largeBold">ayudarle</span>
                <br><span class="medium">Promueva se</span> <span class="mediumBold">negocio.</span> 
                </h3>
            </div> 
            <div class="three columns marginTop contactDetails">
                    <p class="contactAddress">123 Flinders St<br/>Melbourne VIC 3000
                    		<br/><a href="#?custom=true&width=500&height=500" rel="prettyPhoto">Google Map</a></p>
            </div>
            <div class="three columns marginTop contactDetails">
                    <p class="contactPhone">Phone: (03) 1234 5678</p>
                    <p class="contactEmail">Email: <a href="#">office@.com.au</a></p>
                    <p class="contactSkype">Skype: <a href="#">melb@.com.au</a></p>
            </div>
            <div class="three columns marginTop contactDetails">
                    <p class="contactTime">
                            Mon-Fri: 9:00am &rarr; 5:30pm <br/>
                            Sat: 10:00am &rarr; 2:30pm <br/>
                            Sunday: Closed
                    </p>
            </div>       
                    
        
            
            <div id="contact_form">
                <div class="two-thirds column marginTop formWrap">
                    <form action="#" method="post" class="contactForm">
                        <div class="formSecWrap">
                            <label for="form_name">Name</label>
                                <input type="text" id="form_name" name="form_name" value="" />
           
                            <label for="form_email">Email</label>
                                <input type="text" name="form_email" id="form_email" value="" />
                      
                            <label for="form_subject">Subject</label>
                                <input type="text" name="form_subject" id="form_subject" value="" />
                        </div>
                        <div class="formSecWrap formSecWrap2">
                            <label for="form_message">Message</label>
                                <textarea class="textarea" name="form_message" id="form_message"></textarea>
                        
                                <input class="button" id="submit-form" type="submit" name="submit" value="Send Message" />
                        </div>
                        <div id="success"></div>
                    </form>
                </div>
            </div>
   	   </div>
        
        
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
