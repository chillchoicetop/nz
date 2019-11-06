
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="distribution" content="global" />
<title>CerebralFix | New Zealand Game, VR and App Developers</title>
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<link href="https://cerebralfix.com/addons/CF/themes/cerebralfix/img/favicon.ico" rel="shortcut icon" type="image/x-icon" />

<!-- iPhone Specific Fix -->
<style type="text/css">
@media screen and (max-device-width: 480px){
  body{
    -webkit-text-size-adjust: none;
  }
}
</style>

<!-- Load Stylesheet -->
<link href="https://cerebralfix.com/addons/CF/themes/cerebralfix/css/cerebralfix.css" rel="stylesheet" type="text/css" />


<!-- Fonts -->
<link href="//fonts.googleapis.com/css?family=Paytone+One|Raleway:400,600,700" rel="stylesheet">

<script src="https://cerebralfix.com/addons/CF/themes/cerebralfix/js/cerebralfix.jquery.min.js" type="text/javascript"></script>

<script type="text/javascript">
	$(window).load(function() {
	  // When the page has loaded
	  $(".loader").hide();
	  $("#layout").fadeIn(1000);
	});

	function init() {
		var imgDefer = document.getElementsByTagName('img');
		for (var i=0; i<imgDefer.length; i++) {
			if(imgDefer[i].getAttribute('data-src')) {
				imgDefer[i].setAttribute('src',imgDefer[i].getAttribute('data-src'));
			}
		} 
	}
	window.onload = init;

    $(window).load(function() { 
		$('.contact-form .name').attr('placeholder', 'Name');
		$('.contact-form .email').attr('placeholder', 'Email');
		$('.contact-form .message').attr('placeholder', 'Message');
		$('.contact-form .humanchecker').attr('placeholder', '8+6=');
		var maxHeight = 0;
		$(".service").each(function(){
		   if ($(this).height() > maxHeight) { maxHeight = $(this).height(); }
		});
		$(".service").height(maxHeight);

	});

	window.addEventListener("beforeunload", function () {
	  document.body.classList.add("animate-out");
	});

</script>
<script type="application/ld+json">
	{ "@context": "http://schema.org",
	"@type": "Organization",
	"name": "CerebralFix",
	"legalName" : "CerebralFix Limited",
	"url": "http://www.cerebralfix.com",
	"logo": "http://cerebralfix.com/addons/CF/themes/cerebralfix/img/cf_logo_dark_alpha.png",
	"foundingDate": "2006",
	"founders": [
	{
	"@type": "Person",
	"name": "Ben Dellaca"
	},
	{
	"@type": "Person",
	"name": "Jeremy Cadillac"
	} ],
	"address": {
	"@type": "PostalAddress",
	"streetAddress": "78 - 100 Manchester Street, EPIC Innovation Campus",
	"addressLocality": "Christchurch",
	"postalCode": "8011",
	"addressCountry": "NZD"
	},
	"contactPoint": {
	"@type": "ContactPoint",
	"contactType": "Customer Support",
	"url": "http://www.cerebralfix.com"
	},
	"sameAs": [ 
	"https://twitter.com/CerebralFix",
	"https://www.facebook.com/Cerebralfix/",
	"https://www.instagram.com/cerebralfix/",
	"https://www.youtube.com/user/CerebralFixTV",
	"https://www.linkedin.com/company/cerebralfix"
	]}
</script>


				<script type="text/javascript">
					var APPPATH_URI = "/system/cms/";
					var BASE_URI = "/";
				</script>
		<link rel="canonical" href="https://cerebralfix.com/" />
		<link rel="alternate" type="application/rss+xml" title="CerebralFix" href="https://cerebralfix.com/blog/rss/all.rss" />
		<meta name="keywords" content="2d artists, 3d artists, app development, christchurch, developers, game, game design, game developers, mobile developers, new zealand, software engineering" />
		<meta name="description" content="CerebralFix is a leading games developer from Christchurch New Zealand, specializing in Games, VR, Casino, Software and Mobile App Development.
" />
				<style type="text/css">
					.banner-image { width: 100%; }
					
				</style>
</head>
<body>
    
	<div class="loader"></div>
    <div id="layout">

		<!-- Header -->
		<div class="pure-g">
			<div class="pure-u-1-1" id="header">
				<div class="pure-u-1-1">	
	<div class="header-shell">
		<a href="https://cerebralfix.com/" title="Home"><img class="moblogo" alt="We Make Fun" src="https://cerebralfix.com/addons/CF/themes/cerebralfix/img/cf-icon.png" /><img class="logo" alt="We Make Fun" src="https://cerebralfix.com/addons/CF/themes/cerebralfix/img/cf_logo_dark_alpha.png" /></a>
		<!-- Mobile Navigation -->
		<div class="mobile-nav">
			<!-- Hamburger icon -->
			<a id="nav-toggle">
				<span></span>
			</a>
			<div id="menu">
				<div class="pure-menu pure-menu-open">
					<ul class="mob-header-nav">
												<li><a href="https://cerebralfix.com/home" class="first current">Home</a>
						    						</li>
												<li><a href="https://cerebralfix.com/products" class="">Products</a>
						    						</li>
												<li><a href="https://cerebralfix.com/articles" class="">Articles</a>
						    						</li>
												<li><a href="#footer" class="last">Contact</a>
						    						</li>
						
					</ul>
				</div>
			</div>
		</div>
		<!-- Standard Navigation -->
	    <div class="header-nav">
						<a href="https://cerebralfix.com/home"><div class="btn">Home</div></a>
						<a href="https://cerebralfix.com/products"><div class="btn">Products</div></a>
						<a href="https://cerebralfix.com/articles"><div class="btn">Articles</div></a>
						<a href="#footer"><div class="btn">Contact</div></a>
			
	    </div>
	</div>
</div>

			</div>
		</div>

		<!-- Video -->
		<div id="video-container">
			<video autoplay loop muted playsinline class="fillWidth">
			<source src="https://cerebralfix.com/addons/CF/themes/cerebralfix/vid/cf-website-vid.mp4" type="video/mp4"/>
			<source src="https://cerebralfix.com/addons/CF/themes/cerebralfix/vid/cf-website-vid.ogv" type="video/ogv"/>
			<source src="https://cerebralfix.com/addons/CF/themes/cerebralfix/vid/cf-website-vid.webm" type="video/webm"/>
			Your browser does not support the video tag. I suggest you upgrade your browser.
			</video>
			<div class="video-caption">
				<h1>We Make Fun</h1>
				<p>Partnering with the world's largest entertainment companies we deliver games and digital experiences for everyone to enjoy.</p>
			</div>
		</div>

		<!-- Body -->
		<div class="pure-g">
			<div class="pure-u-1-1" id="content">
				<div class="content-shell">
					<div class="padding">
					    
		      					      			<div class="content-container" id="our-team">
		      				<div class="container-body">
		      			    	<div class="page-chunk default"><div class="pure-u-1-1 pure-u-md-1-2">
	<div class="padding home-image-shell center">
		<img alt="CerebralFix Team" class="pyro-image alignment-none" data-="" src="https://cerebralfix.com/files/large/309" /></div>
</div>
<div class="pure-u-1-1 pure-u-md-1-2">
	<div class="padding home-text-shell">
		<h1>
			Our Team</h1>
		<p>
			We love what we do. Our development team works as a cohesive unit to ensure projects are delivered to a world class standard. We've spent 10 years bringing the cheeky Kiwi spirit to all of our partnerships, helping companies venture into new industries, captivating existing audiences and making great engaging products.</p>
	</div>
</div>
<p>
	&nbsp;</p>
</div>

								<div class="clear"></div>
		      				</div>
		      			</div>
		      					      			<div class="content-container" id="our-products">
		      				<div class="container-body">
		      			    	<div class="page-chunk default"><div class="pure-u-1-1 pure-u-md-1-2">
	<div class="padding home-text-shell">
		<h1>
			Our Products</h1>
		<p>
			Our development helps power some of the largest properties in entertainment, Transformers, Toy Story, Wheel of Fortune and many more. With a complete stack of services we create quality products that are loved by millions of users.</p>
		<div class="btn ios">
			<a href="/products/">View our products</a></div>
	</div>
</div>
<div class="pure-u-1-1 pure-u-md-1-2">
	<div class="padding home-image-shell">
		  <img alt="Ninja Tobu" class="product-image" src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="https://cerebralfix.com/files/large/nt-site-promo11.png" />  </div>
</div>
</div>

								<div class="clear"></div>
		      				</div>
		      			</div>
		      					      			<div class="content-container" id="services">
		      				<div class="container-body">
		      			    	<div class="page-chunk default"><div class="animatedParent animateOnce">
	 	<div class="pure-u-1-1 pure-u-md-1-3 service animated fadeIn">
		<div class="padding">
			<img alt="Game Development" class="service-logo" src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="https://cerebralfix.com/files/large/cfsiteicon_games1.png" />
			<h2>
				Game Development</h2>
			<p>
				We have over 10 years experience crafting games and making fun. We have worked with some of the biggest names in the entertainment industry. We have world class developers, artists, designers and testers that are capable of working on pretty much anything you can throw at them. There is no challenge that we will not consider if we think there is an opportunity to entertain and reach an audience.</p>
		</div>
	</div>
		<div class="pure-u-1-1 pure-u-md-1-3 service animated fadeIn">
		<div class="padding">
			<img alt="Virtual Reality" class="service-logo" src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="https://cerebralfix.com/files/large/cfsiteicon_vr1.png" />
			<h2>
				Virtual Reality</h2>
			<p>
				Virtual Reality is revolutionizing the way we experience entertainment and is well on its way to asserting itself as critical technology in many industries. CerebralFix already has several years of VR development experience including video games, medical training, education and sports science. We have even built tax training software!</p>
		</div>
	</div>
		<div class="pure-u-1-1 pure-u-md-1-3 service animated fadeIn">
		<div class="padding">
			<img alt="Casino" class="service-logo" src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="https://cerebralfix.com/files/large/cfsiteicon_casino1.png" />
			<h2>
				Casino</h2>
			<p>
				Specializing in the delivery of both free to play and real money casino products, CerebralFix has worked on a huge range of games with some of the biggest names in the business. Anything from Slots, Bingo, Poker, Scratch Cards and even Real Money Match 3 games, we are experienced, effective and innovative. We craft the very best experiences for our players.</p>
		</div>
	</div>
		<div class="pure-u-1-1 pure-u-md-1-3 service animated fadeIn">
		<div class="padding">
			<img alt="App Development" class="service-logo" src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="https://cerebralfix.com/files/large/cfsiteicon_mobile1.png" />
			<h2>
				App Development</h2>
			<p>
				Great applications don't just require great technologies and slick UI, they start with great understanding. We’ve developed apps across a huge array of industries from banking, tourism, social media and entertainment. We can comfortably create solutions of any size for any platform. We work with you to solve problems, creating huge value for you and the users of your app.</p>
		</div>
	</div>
		<div class="pure-u-1-1 pure-u-md-1-3 service animated fadeIn">
		<div class="padding">
			<img alt="Software Development" class="service-logo" src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="https://cerebralfix.com/files/large/cfsiteicon_software1.png" />
			<h2>
				Software Development</h2>
			<p>
				Celebrated for our technical skill set by some of the biggest names in software, we have helped build backend and customer facing solutions for the likes of Disney, BBC and Sony. Our teams know exactly what it takes to put together a world class solution.</p>
		</div>
	</div>
		<div class="pure-u-1-1 pure-u-md-1-3 service animated fadeIn">
		<div class="padding">
			<img alt="Art" class="service-logo" src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="https://cerebralfix.com/files/large/cfsiteicon_art1.png" />
			<h2>
				Art</h2>
			<p>
				CerebralFix has an exceptional art core who can create a huge array of 2D and 3D assets, offering services such as concepting characters, environment illustration, slick websites, UI consultation and design, animation services and video work. We have years of experience working with the most respected and inspiring companies in the world of digital media. </p>
		</div>
	</div>
	 </div>
</div>

								<div class="clear"></div>
		      				</div>
		      			</div>
		      					      			<div class="content-container" id="partners">
		      				<div class="container-body">
		      			    	<div class="page-chunk default"> <div class="pure-u-1-2 pure-u-sm-1-3 pure-u-md-1-4 pure-u-lg-1-6">
	<img alt="Disney" class="partner-logo" data-src="https://cerebralfix.com/files/large/disney-logo1.png" src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" /></div>
<div class="pure-u-1-2 pure-u-sm-1-3 pure-u-md-1-4 pure-u-lg-1-6">
	<img alt="Lionsgate" class="partner-logo" data-src="https://cerebralfix.com/files/large/lionsgate-logo.png" src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" /></div>
<div class="pure-u-1-2 pure-u-sm-1-3 pure-u-md-1-4 pure-u-lg-1-6">
	<img alt="Electronic Arts" class="partner-logo" data-src="https://cerebralfix.com/files/large/ea-logo.png" src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" /></div>
<div class="pure-u-1-2 pure-u-sm-1-3 pure-u-md-1-4 pure-u-lg-1-6">
	<img alt="Sony" class="partner-logo" data-src="https://cerebralfix.com/files/large/sony-logo.png" src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" /></div>
<div class="pure-u-1-2 pure-u-sm-1-3 pure-u-md-1-4 pure-u-lg-1-6">
	<img alt="BBC Worldwide" class="partner-logo" data-src="https://cerebralfix.com/files/large/bbc-logo.png" src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" /></div>
<div class="pure-u-1-2 pure-u-sm-1-3 pure-u-md-1-4 pure-u-lg-1-6">
	<img alt="Dreamworks" class="partner-logo" data-src="https://cerebralfix.com/files/large/dreamworks-logo.png" src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" /></div>
 </div></div>

								<div class="clear"></div>
		      				</div>
		      			</div>
		      			
					</div>
				</div>
			</div>
		</div>

		<!-- Footer -->
		<div class="pure-g">
			<div class="pure-u-1-1" id="footer">
				<div class="pure-u-1-1">
	<div class="footer-shell">
		<div class="pure-u-1-1 pure-u-md-1-3">
			<div class="padding">
				<h2>About Us</h2>
									<div class="page-chunk default"><p>
	Games are our lives. Based in Christchurch, New Zealand, we have over 10 years experience crafting games and making fun. Working with some of the largest names in the entertainment industry our team of world class Developers, Artists, Designers and Testers have proven they are capable of working on pretty much anything the industry throws at them. There is no challenge that we will not consider if we think there is an opportunity to entertain and reach an audience.</p>
</div>

				
				<div class="social">
					<a href="mailto:%77%65%62%73%69%74%65@%63%65%72%65%62%72%61%6C%66%69%78.%63%6F%6D"><i class="fa fa-envelope" aria-hidden="true"></i></a>
					<a href="https://twitter.com/CerebralFix" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
					<a href="https://www.facebook.com/Cerebralfix/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
					<a href="https://www.instagram.com/cerebralfix/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
					<a href="https://www.youtube.com/user/CerebralFixTV" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
					<a href="https://www.linkedin.com/company/cerebralfix" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
				</div>
			</div>
		</div>
		<div class="pure-u-1-1 pure-u-md-1-3">
			<div class="padding">
				<h2>Articles</h2>
				<div>
													<div class="pure-u-1-1 article-small">
						<a href="/articles/6-tips-to-improve-faster-as-an-artist">
							<div class="padding">
								<div class="pure-u-1-1 article-small-image">
									<div class="padding">
										<img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="https://cerebralfix.com/files/thumb/361/400" alt="6 Tips to Improve Faster as an Artist." />
										<h3>6 Tips to Improve Faster as an Artist.</h3>
									</div>
								</div>
								<div class="clear"></div>
							</div>
						</a>
					</div>
									<div class="pure-u-1-1 article-small">
						<a href="/articles/how-the-christchurch-earthquake-made-us-better">
							<div class="padding">
								<div class="pure-u-1-1 article-small-image">
									<div class="padding">
										<img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="https://cerebralfix.com/files/thumb/324/400" alt="How the Christchurch Earthquake Made Us Better" />
										<h3>How the Christchurch Earthquake Made Us Better</h3>
									</div>
								</div>
								<div class="clear"></div>
							</div>
						</a>
					</div>
				
				
				</div>
			</div>
		</div>
		<div class="pure-u-1-1 pure-u-md-1-3">
			<div class="padding">
				<h2>Contact</h2>
									<div class="page-chunk default"><div class="contact_form">
		<form action="https://cerebralfix.com/" class="contact-form" enctype="multipart/form-data" method="post" accept-charset="utf-8">

<input type="text" name="d0ntf1llth1s1n" value=" " class="default-form" style="display:none" />
<input type="text" name="name" value="" id="contact_name" class="name" />
<br />
<input type="text" name="email" value="" id="contact_email" class="email" />
<br />
<input type="text" name="humanchecker" value="" id="contact_humanchecker" class="humanchecker" />
<br />
<input class="answer hidden" id="contact_answer" name="answer" type="text" value="14" />
<textarea name="message" cols="40" rows="10" id="contact_message" class="message"></textarea>

		
<span class="contact-button"><input type="submit" name="contact-submit" value="Send"  />
</span>
</form> 
</div></div>

				
			</div>
		</div>
	</div>
</div>

<div class="pure-u-1-1 copyright-bar">
	<div class="padding">
		<p class="copyright">&copy; 2019 CerebralFix Limited. All Rights Reserved. CerebralFix and the CerebralFix logo are worldwide trademarks.</p>
	</div>
</div>

<script type="text/javascript">

	(function (window, document) {
	
		var layout   = document.getElementById('layout'),
		menu     = document.getElementById('menu'),
		menuLink = document.getElementById('nav-toggle');
	
		function toggleClass(element, className) {
			var classes = element.className.split(/\s+/),
			length = classes.length,
			i = 0;
	
			for(; i < length; i++) {
				if (classes[i] === className) {
					classes.splice(i, 1);
					break;
				}
			}
			// The className is not found
			if (length === classes.length) {
				classes.push(className);
			}
	
			element.className = classes.join(' ');
		}
	
		menuLink.onclick = function (e) {
		
			var active = 'active';
	
			e.preventDefault();
			toggleClass(layout, active);
			toggleClass(menu, active);
			toggleClass(menuLink, active);
		};
	
	}(this, this.document));

	$(function() {
	  $('a[href*="#"]:not([href="#"])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html, body').animate({
	          scrollTop: target.offset().top
	        }, 1000);
	        return false;
	      }
	    }
	  });
	});
</script>
<script src="https://cerebralfix.com/addons/CF/themes/cerebralfix/js/css3-animate-it.js" type="text/javascript"></script>
			</div>
		</div>

    </div>
</body>
</html>
