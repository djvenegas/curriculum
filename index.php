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

    
    <!-- Favicons -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

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
            	<h1><span>About<br /></span>Surreal</h1>
                <h3><span class="smallBold">Award winning</span> <span class="small">digital agency.</span>
                <br><span class="mediumBold">We bring a personal</span> <span class="medium">and effective approach</span>
                <br><span class="medium">to every project we work on,</span><span class="mediumBold">which is why</span>
                <br><span class="large">our clients </span> <span class="largeBold">love us</span>
                <br><span class="medium">and why they keep</span><span class="mediumBold"> coming back.</span> 
                </h3>
            </div>
            
            <div class="one-third column">
            	<div class="teamImage">
                    <img class="scale-with-grid lazy" src="images/team1.jpg" alt=""/> 
                    <div class="teamName">
                        <h2>Jane Smith</h2>
                        <h3>Creative Director</h3>
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
                        <h2>Julie Smith</h2>
                        <h3>Senior Designer</h3>
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
                        <h2>Judy Smith</h2>
                        <h3>Developer</h3>
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
            	<h3 class="sectionTitle">Our Numbers</h3>
            </div>
            
            <div class="statsWrap">
            	<div class="stats">
                    <div class="statDummy"></div>
                    <div class="statInfo">
                        <p class="statNumber">98%</p>
                        <p class="statText">Client Satisfaction</p>
                    </div>
                </div>
            </div>
            <div class="statsWrap">
            	<div class="stats">
                    <div class="statDummy"></div>
                    <div class="statInfo">
                        <p class="statNumber">21</p>
                        <p class="statText">Awards Won in 2012</p>
                    </div>
                </div>
            </div>
            <div class="statsWrap">
            	<div class="stats">
                    <div class="statDummy"></div>
                    <div class="statInfo">
                        <p class="statNumber">36</p>
                        <p class="statText">Cups of coffee a day</p>
                    </div>
                </div>
            </div>
            <div class="statsWrap">
            	<div class="stats">
                    <div class="statDummy"></div>
                    <div class="statInfo">
                        <p class="statNumber statNumberMedium">1,350</p>
                        <p class="statText">Lines of code in this site</p>
                    </div>
                </div>
            </div>
            <div class="statsWrap">
            	<div class="stats">
                    <div class="statDummy"></div>
                    <div class="statInfo">
                        <p class="statNumber">67</p>
                        <p class="statText">Websites Built</p>
                    </div>
                </div>
            </div>
            <div class="statsWrap">
            	<div class="stats">
                    <div class="statDummy"></div>
                    <div class="statInfo">
                        <p class="statNumber statNumberSmall">122,345</p>
                        <p class="statText">Unique visitors to our site in 2012</p>
                    </div>
                </div>
            </div>
            <div class="statsWrap">
            	<div class="stats">
                    <div class="statDummy"></div>
                    <div class="statInfo">
                        <p class="statNumber">54</p>
                        <p class="statText">Average apps on iphone</p>
                    </div>
                </div>
            </div>
            <div class="statsWrap">
            	<div class="stats">
                    <div class="statDummy"></div>
                    <div class="statInfo">
                        <p class="statNumber statNumberSmall">234,989</p>
                        <p class="statText">Clients Unique Visitors for the first week after site launch</p>
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
                            <h3><span class="smallBold">A true</span> <span class="small">artist</span>
                            <br><span class="large">is not one who</span> <span class="largeBold">is inspired,</span>
                            <br><span class="medium">but one who</span><span class="mediumBold"> inspires others.</span> 
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
             	<h1><span>Our</span><br/>Services</h1>
                <h3><span class="mediumBold">We have a</span> <span class="medium">unique</span>
                <br><span class="medium">blend of talent</span> <span class="mediumBold">that allows</span>
                <br><span class="large">us to offer</span> <span class="largeBold">such a diverse</span>
                <br><span class="medium">range of</span> <span class="mediumBold">services.</span> 
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
                            <h3><span class="largeBold">Intelligence</span> <span class="large">without ambition</span>
                                <br><span class="medium">is a bird</span> <span class="mediumBold">without wings.</span> 
                                <br><span class="author">Salvador Dali</span>
                            </h3>
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
             	<h1><span>Key</span><br/>Features</h1>
                <h3><span class="mediumBold">Easily add</span> <span class="medium">more sections</span>
                <br><span class="medium">to the site</span> <span class="mediumBold">with ease</span>
                <br><span class="large">very clean</span> <span class="largeBold">HTML & CSS.</span>
                </h3>
            </div>
              
            <div class="sixteen columns">
                <h3 class="sectionTitle">Youtube & Vimeo Support</h3>
                <p>Embed Videos directly from your favourite video websites like Vimeo or Youtube & show off your Creativity.</p>
                <div class="embed-container">
                    <iframe width="1280" height="720" src="http://www.youtube.com/embed/TjBCu4N8bxQ" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        
        	<!-- Flickr -->
            <div class="sixteen columns latestFlickr">
                <h3 class="sectionTitle">Flickr</h3>
                    <div class="flickrListing">
                        <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=8&amp;display=latest&amp;size=s&amp;layout=x&amp;source=user&amp;user=21644167@N04"></script>
                        <div class="clearfix"></div>
                    </div>
            </div>
            
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
                            <h3><span class="largeBold">Drawing is the</span> <span class="large">honesty of the art.</span>
                                <br><span class="medium">There is no possibility</span> <span class="mediumBold">of cheating:</span>
                                <br><span class="large">It is either</span> <span class="largeBold">good or bad.</span> 
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
            	<h1>Contact<span>Us</span></h1>
                <h3><span class="mediumBold">Get in</span> <span class="medium">touch</span>
                <br><span class="medium">let's</span> <span class="mediumBold">have a chat</span>
                <br><span class="large">we can</span> <span class="largeBold">help you</span>
                <br><span class="medium">promote</span> <span class="mediumBold">your business.</span> 
                </h3>
            </div> 
               
            <div class="three columns marginTop contactDetails">
                    <p class="contactAddress">123 Flinders St<br/>Melbourne VIC 3000
                    		<br/><a href="#?custom=true&width=500&height=500" rel="prettyPhoto">Google Map</a></p>
            </div>
            <div class="three columns marginTop contactDetails">
                    <p class="contactPhone">Phone: (03) 1234 5678</p>
                    <p class="contactEmail">Email: <a href="#">office@surreal.com.au</a></p>
                    <p class="contactSkype">Skype: <a href="#">melb@surreal.com.au</a></p>
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
                        	<h3>
                            <span class="large">Visit our</span> <span class="largeBold">funky studio</span>
                            <br><span class="medium">in the heart of</span><span class="mediumBold"> Sydney.</span> 
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
                <h3 class="sectionTitle">Our Clients</h3>
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
                <p class="copyright">&copy; Surreal Studio 2012. <br/>All rights reserved. Theme by <a href="http://html5css3templates.com/" title="Premium Responsive Templates">HTML5CSS3Templates</a>.</p>
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