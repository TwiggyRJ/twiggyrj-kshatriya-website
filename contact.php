<!DOCTYPE html>
<html lang="en" manifest="kshatriya.appcache">
<!-- This is the doctype declaration which has been selected as HTML 5 -->

<head>
	
	<!--This is the header of the document-->
	<title>Contact Us at Kshatriya</title>
	<!-- Include SEO Metatags -->
	<meta name = "keywords" content = "Kshatriya, Aaron Fryer, Prototype, Square Index Prototype"/>
	<meta name = "description" content = "The Kshatriya prototype index page"/>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<!-- Change Internet Explorer Navigation arrows IE9+ -->
	<meta name="msapplication-navbutton-color" content="green">
	
<script src="js/jquery.js"></script>
	<script src="js/jquerym.js"></script>

	<!-- Dependences -->

	<style>
		ol{
			list-style:none !important;
		}
		.pri_accent{
			background-color: #333;
		}
		.sidr_button:hover{
			background-color: #333;
		}
		.sec_accent{
			color: #232323;
		}
		.nav_button{
			color: #232323 !important;
			font-size: 18px !important;
			text-shadow: none !important;
		}
		.nav_button:hover{
			color: #232323 !important;
			text-shadow: none !important;
		}
		.toc {
			background-image: url("img/placeholder.jpg");
			background-position: left;
			margin-top: -6% !important;
			padding-bottom: 30%;
			background-repeat: no-repeat;
			color: #fff !important;
			background-size: 160%;
			vertical-align: text-bottom;
			box-shadow: 0px 2px 5px rgba(0,0,0,0.26);
		}
		.toc_text {
			margin-top: -24.2% !important;
			padding: 0 15px;
			color: #fff;
			font-size: 1.2em;
			font-weight: normal;
		}
		header{
			padding-left: 10%;
			font-size: 4em;
			padding-top: 3%;
			height: 100px;
			margin-left: -10%;
			box-shadow: 0px 2px 5px rgba(0,0,0,0.26);
			background-color: #333;
			-webkit-transition: all 0.4s ease;
			transition: all 0.4s ease;
		}

		header.sticky{
			font-size: 2em;
			padding-left: 10%;
			padding-top: 0%;
			height: auto;
			padding-left: 9.5%;
			background-color: none;
			box-shadow: 0px 2px 5px rgba(0,0,0,0.26);
		}
		#search_sub{
			margin-top: 0px;
		}
		#search_sub.sticky{
			margin-top: 10px;
		}
		#search_sub.js{
			display:none;
		}
		.search_span{
			display: inline;
		}
		
		@media only screen and (max-width: 520px) and (max-height: 720px){
			header.sticky{
				padding-left: 8%;
			}
		}
		
	</style>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<link rel="icon" type="image/x-icon" href="img/favicon.ico" />	
	
</head>

<body>
	
	<div id = "wrapper" data-role="page">
	
		<div class = "container">
			<!-- This is a container DIV box that contains the other div container boxes to keep everything on the page contained -->
			<header>
			<ul id="nav" class = "pri_accent">
				<li>
					<a class = "nav_button" href="#leftpanel">
						<i class="fa fa-bars fa-lg"></i>
					</a>
				</li>
                <li class="active nav_padding"><a href="index.html">Kshatriya</a></li>
			</ul>
		</div>
		<div data-role="panel" id="leftpanel" data-display="overlay" data-position="left">
			<!-- Table Of Contents -->
			<ul>
				<li class = "toc">&nbsp;</li>
				<li class = "toc_text">Kshatriya</li>
				<li class = "sidr_button"><a href="http://www.kshatriya.co.uk/index.html">Kshatriya</a></li>
				<li class = "sidr_button"><a href="#">Clique</a></li>
				<li class = "sidr_button"><a href="blog/index.php">NTD Project</a></li>
			</ul>
			<br />
			<h2>Kshatriya</h2>
			<ul>
				<li class = "sidr_button"><a data-ajax="false" href="index.html">Kshatriya</a></li>
				<li class = "sidr_button"><a data-ajax="false" href="about.html">About</a></li>
				<li class = "sidr_button"><a data-ajax="false" href="contact.php">Contact Us</a></li>
				<li class = "sidr_button"><a data-ajax="false" href="videos.html">Our Apps</a></li>
			</ul>
			<ul>
				<li class = "sidr_button"><a href="#nav" data-rel="close">Back <i class="fa fa-arrow-right"></i></a></li>
			</ul>
		</div><!-- /panel -->
	
		
		<div id = "home-intro">
			<div id = "home-intro-content">
				<div id = "home-intro-welcome">
				
				</div>
				<div id = "intro-image">
					<img src="img/placeholder_contact.jpg" id = "home-intro-image" alt = "Sleepy woman at an office desk" title = "Sleepy woman at an office desk source: http://pictures.4ever.eu/cartoons/anime-and-fantasy/anime-girl-175245#pic175245"/>
					<h1>
					<img class="banner_img" src="img/Kshatriya_Logo.svg">
					<span class = "index"><span><span class = "grey">Contact Us:<span class='spacer'></span></span><span class ='spacing'><br/></span><span class='spacer'></span><span class = "title">At Kshatriya</span></span></span>
					</h1>
				</div>
			</div>
			<div class="line"></div>
			<div class="arrow-down" id ="him"></div>
		</div>
		
		<div id = "Content">
			
			<div class="section group">
			
				<div class="col span_3_of_3 center_footer padding_less">
					<h1>Contacting Us</h1>
					<p class = "parapadding">
						<b>Kshatriya</b> welcomes any comments you may have, this form is for all enquiries and complaints just provide the subject in the subject field to help us with your enquiry in a speedier fashion.
					</p>
					<a id = "contactk"/></a>
				</div>
			
				<div class="col span_11_of_12">
				
					<h2>Personal & Contact Details</h2>
					
					<?php
	
						if (!isset($_POST["submit"])) {
					
					?>
					
					<div id = "formbox">
						
						<form name = "contactus" action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
						
							<fieldset>
								<input type = "text" name = "name" placeholder = "Your Name" required /><br/>
								<input type = "email" name = "email" placeholder = "Your Email" required /><br/>
								<input type = "text" name = "subject" placeholder = "Subject" required /><br/>

								<textarea rows="8" cols="100" name ="message">Please add your message here
								</textarea>	
							
							</fieldset>
							
							<fieldset>
								<legend>Submitting the Form</legend>
								<br>
								<span class = "buttonspacing">
								
								<input type="submit" name="submit" class="button" value="Send to Kshatriya"/>
								
								<br><br>
								
								<button class="button" href="mailto:aaron@kshatriya.co.uk?subject=General Enquiry">If the form fails try this link</button>
								
								<br><br>
								
								<input type="reset" class ="button" value="Reset"/>
								
								</span>
							</fieldset>
							
							<?php
							
								}else{

									require("php/class.phpmailer.php");

									$mail = new PHPMailer();

									$mail->IsSMTP();  // telling the class to use SMTP
									$mail->Host     = "fan.fanhosted.com"; // SMTP server

									$mail->From     = "kshatriy@kshatriya.co.uk";
									$mail->FromName = $_POST["name"];
									$mail->AddAddress("aaron@kshatriya.co.uk");
									$mail->AddReplyTo("aaron@kshatriya.co.uk", "Aaron Fryer");
									
									$signature = "This is sent via the automated form";
									$mail->Subject  = $_POST["subject"];
									$mail->Body     = $_POST["message"]. PHP_EOL . $_POST["name"]. PHP_EOL . $_POST["email"]. PHP_EOL . $signature;
									$mail->WordWrap = 50;
								
									
									if(!$mail->Send()) {
										echo 'Message was not sent.';
										echo 'Mailer error: ' . $mail->ErrorInfo;
									}else{
										echo 'Message has been sent.';
									}
								
								}
							
							?>
						</form>
						</p><a id = "forms"/></a>
					</div>
				</div>
			</div>
		</div>
		
		<div>
			<a id = "form"/></a><br/>
		</div>

	</div>
		
	<footer>
		<div class="section group footer_firtone">
			<div class="col span_12_of_12 center_footer">
				<a href = "#home-intro" id="top" class = "arrow_up_jq"><i class="fa fa-angle-double-up fa-lg"></i></a> 
			</div>
			<div class="col span_2_of_12">
				<div class ="sitemap">

					<nav><h3>Kshatriya</h3>
						<ul class="footer_sitemap">
							
							<li><a href="index.html">Kshatriya</a></li>
							<li><a href="about.html">About Us</a></li>
							<li><a href="contact.php">Contact Us</a></li>
						</ul>
					</nav>
					
				</div>
			</div>
			
			<div class="col span_2_of_12">
				<div class ="sitemap">

					<nav><h3>Blogs</h3>
						<ul class="footer_sitemap">
							
							<li><a href="index.html">News</a></li>
							<li><a href="about.html">Aaron's Personal Blog</a></li>
						</ul>
					</nav>
					
				</div>
			</div>
			
			<div class="col span_2_of_12">
				<div class ="sitemap">

					<nav><h3>Labs</h3>
						<ul class="footer_sitemap">
							
							<li><a href="index.html">Kshatriya</a></li>
							<li><a href="about.html">About Us</a></li>
							<li><a href="contact.php">Contact Us</a></li>
						</ul>
					</nav>
				
				</div>
			</div>
			<div class="col span_5_of_12">
				
				<h1>Social</h1>

				<nav>
				
					<a href="https://www.facebook.com/kshatriyadev" class ="sc_bt"><i class="fa fa-facebook fa-lg"></i></a>
					<a href="" class ="sc_bt"><i class="fa fa-twitter fa-lg"></i></a>
					<a href="https://plus.google.com/114066318397277764361" rel="publisher" class ="sc_bt"><i class="fa fa-google-plus fa-lg"></i></a>
					<a href="" class ="sc_bt"><i class="fa fa-linkedin fa-lg"></i></a>
					<a href="" class ="sc_bt"><i class="fa fa-envelope fa-lg"></i></a>

				</nav>
			</div>

		</div>
		<div class="section group footer_tritone">
			<div class="col span_2_of_3">
				<p class = "parapadding">This is the Kshatriya Index Page, this is a prototype/work in progress. This is version 0.2, this was created by <b>Kshatriya</b> a.k.a: Aaron Fryer. <br>The music below is set to play when you click it, instead of autoplay. We know how annoying it can be to open a webpage and music suddenly starts playing.</p>
				 
			</div>
			<div class="col span_1_of_3">
				<br>
				<audio controls loop>
				   <source src="audio/01.mp3" type="audio/mpeg">
				   Your browser does not support the audio tag.
				</audio>
			</div>
		</div>
	</footer>
	
	</div>
	
	<!-- Include CSS -->
	<!-- Main CSS -->
	<link rel="stylesheet" type="text/css" href="css/flat.css"/>
	
	<!-- Include Javascript -->
	<!-- Include jQuery -->
	<script type="text/javascript" src="js/kshatriya.js"></script>
	<script type="text/javascript" src="js/kshatriya_scroll.js"></script>

	<script>
		$('#top').scrollTo();
	</script>
	<script>	
		$(window).scroll(function() {
			if ($(this).scrollTop() > 1){  
				$('header').addClass("sticky");
			}
			else{
				$('header').removeClass("sticky");
			}
			if ($(this).scrollTop() > 1){  
				$('#search_sub').addClass("sticky");
			}
			else{
				$('#search_sub').removeClass("sticky");
			}
		});
	</script>
	

</body>

</html>