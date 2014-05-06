<!DOCTYPE HTML>
<!--
	Dopetrope 2.5 by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Contact Us</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,900,300italic" rel="stylesheet" />
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/config.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/script.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<link rel="stylesheet" href="css/custom.css" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
	</head>
	<body class="right-sidebar">

				<!-- Header Wrapper -->
			<div id="header-wrapper">
				<div class="container">
					<div class="row">
						<div class="12u">
						
							<!-- Header -->
								<section id="header">
									
									<!-- Logo -->
										<h1><a href="#">Dopetrope</a></h1>
									
									<!-- Nav -->
										<nav id="nav">
											<ul>
												<li><a href="index.php">Home</a></li>
												<li>
													<a href="about-us.php">About Us</a>
												<!-- 	<ul>
														<li><a href="#">Lorem ipsum dolor</a></li>
														<li><a href="#">Magna phasellus</a></li>
														<li><a href="#">Etiam dolore nisl</a></li>
														<li>
															<a href="">Phasellus consequat</a>
															<ul>
																<li><a href="#">Magna phasellus</a></li>
																<li><a href="#">Etiam dolore nisl</a></li>
																<li><a href="#">Veroeros feugiat</a></li>
															</ul>
														</li>
														<li><a href="#">Veroeros feugiat</a></li>
													</ul> -->
												</li>
											    <li><a href="search.php">Search</a></li>
												<li class="current_page_item"><a href="contact-us.php">Contact Us</a></li>
											
											</ul>
										</nav>

								</section>

						</div>
					</div>
					<div class="row hide">
						<div class="12u">

							<!-- Banner -->
								<section id="banner">
									<a href="http://facebook.com/DreametryDoodle">
										<span class="image image-full"><img src="images/pic01.jpg" alt="" /></span>
										<header>
											<h2>Howdy. This is Dopetrope.</h2>
											<span class="byline">A responsive template by HTML5 UP</span>
										</header>
									</a>
								</section>

						</div>
					</div>
					<div class="row hide">
						<div class="12u">
								
							<!-- Intro -->
								<section id="intro">
								
									<div>
										<div class="row">
											<div class="4u">
												<section class="first">
													<span class="pennant"><span class="fa fa-cog"></span></span>
													<header>
														<h2>Ipsum consequat</h2>
													</header>
													<p>Nisl amet dolor sit ipsum veroeros sed blandit consequat veroeros et magna tempus.</p>
												</section>
											</div>
											<div class="4u">
												<section class="middle">
													<span class="pennant pennant-alt"><span class="fa fa-flash"></span></span>
													<header>
														<h2>Magna etiam dolor</h2>
													</header>
													<p>Nisl amet dolor sit ipsum veroeros sed blandit consequat veroeros et magna tempus.</p>
												</section>
											</div>
											<div class="4u">
												<section class="last">
													<span class="pennant pennant-alt2"><span class="fa fa-star"></span></span>
													<header>
														<h2>Tempus adipiscing</h2>
													</header>
													<p>Nisl amet dolor sit ipsum veroeros sed blandit consequat veroeros et magna tempus.</p>
												</section>
											</div>
										</div>
									</div>

									<div class="actions">
										<a href="#" class="button big">Get Started</a>
										<a href="#" class="button alt big">Learn More</a>
									</div>
								
								</section>

						</div>
					</div>
				</div>
			</div>
	
		<!-- Main Wrapper -->
			<div id="main-wrapper">
				<div class="container">
					<div class="row">
						<div class="12u">
							
							<!-- Portfolio -->
								<section>
								<header class="major">
										<h2>Contact Us</h2>
									</header>
									<div>
										<div class="row">
											<div class="8u skel-cell-important">
												<article class="box is-post">
												<!-- Search form -->
												<form action="contact-us.php" id="contact-us-form" name="search" method="post">
												<div id="contact-us-form-error" class="error">
											
												</div>
												<div class="success">
													<?php
														try {
															if (isset($_POST["submit"])) {
																$from = "chenyi@yu-lab.org"; // sender
																$subject = "Contact from ".$_POST["name"];
																// message lines should not exceed 70 characters (PHP rule), so wrap it
																$message = wordwrap("phone: ".$_POST["phone"]."\r\n".$_POST["message"], 70);
																// send mail
																mail("dalao5000@hotmail.com",$subject,$message,"From: ".$from."\r\n"
																.'Reply-To: '.$_POST["email"] . "\r\n");
																echo "Thank you for contacting us, we will reply to you shortly.";
															} 
														}
														catch (Exception $e) {
															echo 'Caught exception: ',  $e->getMessage(), "\n";
														}
														
													 
												?>
												</div>
														<div>
															<div>
																<label for="name" class="form_field">Name:</label> 
															</div>
															<div >
														    	<input type="text" class="input_field" name="name" >
															</div>
														    <div>
																<label for="email">Email</label>
															</div>
															<div>
														    	<input type="text" id="email-field" class="input_field" name="email">		
															</div>
														    <div>
																<label for="phone">Phone:</label> 
															</div>
															<div >
																<input type="text" class="input_field"  name="phone">	
															</div>
															 <div >
																<label for="message">Message:</label> 
															</div>
															<div>
																<textarea rows="4" class="input_field" name="message">	</textarea> 
															</div>
														</div>
														<div class="clear"></div>
													    <div class="right">									 																																		
															<input type="submit" value="Search" id="submit" name="submit" class="button">
															<input type="reset" value="Reset" id="reset" name="reset" class="button">
														</div>
														<div class="clear"></div>
												</form>
												<!-- Content -->
												
												
												</article>
										</div>
											<div class="4u">
											
												<!-- Sidebar -->
													<section class="box">
														<a href="http://facebook.com/DreametryDoodle" class="image image-full"><img src="images/pic09.jpg" alt="" /></a>
														<header>
															<h3>Sed etiam lorem nulla</h3>
														</header>
														<p>Lorem ipsum dolor sit amet sit veroeros sed amet blandit consequat veroeros lorem blandit  adipiscing et feugiat phasellus tempus dolore ipsum lorem dolore.</p>
														<footer>
															<a href="#" class="button alt">Magna sed taciti</a>
														</footer>
													</section>
													<section class="box">
														<header>
															<h3>Feugiat consequat</h3>
														</header>
														<p>Veroeros sed amet blandit consequat veroeros lorem blandit adipiscing et feugiat sed lorem consequat feugiat lorem dolore.</p>
														<ul class="divided">
															<li><a href="#">Sed et blandit consequat sed</a></li>
															<li><a href="#">Hendrerit tortor vitae sapien dolore</a></li>
															<li><a href="#">Sapien id suscipit magna sed felis</a></li>
															<li><a href="#">Aptent taciti sociosqu ad litora</a></li>
														</ul>
														<footer>
															<a href="#" class="button alt">Ipsum consequat</a>
														</footer>
													</section>

											</div>
										</div>
									</div>
								</section>

						</div>
					</div>
				</div>
			</div>

		<!-- Footer Wrapper -->
			<div id="footer-wrapper">
				
				<!-- Footer -->
					<section id="footer" class="container">
					    <div class="row center">
						 
						</div>
							
						<div class="row">
							<div class="12u">
							
								<!-- Copyright -->
									<div id="copyright">
									<!-- 	<ul class="links">
											<li>&copy; Untitled	</li>
											<li>Images: <a href="http://facebook.com/DreametryDoodle">Dreametry Doodle</a></li>
											<li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
										</ul> -->
										 Copyright © 2013 - 2014 | the Laboratory of Dr. Chen Yi| Sichuan University
									</div>

							</div>
						</div>
					</section>
				
			</div>
		<script>
		$(document).ready( function()
			{
				$("#reset").click(function()
				{
					$("#contact-us-form .input_field").val("");
				});
				$("#contact-us-form").submit(function( event ) {
					
							
						$("#contact-us-form-error").html("");
							//Validate
							var valid = true;
							$.each( $("#contact-us-form .input_field"), function( key, field ) {
								if($.trim($(field).val())=="")
								{
									valid = false;
								  $("#contact-us-form-error").html("Please fill all fields");
								}
								else
								if(!IsEmail($("#email-field").val()))
								{
									valid = false;
								   $("#contact-us-form-error").html("Please enter a valid email");
								}
							});
							if(valid)
							{
								return;}
							else
							{
								event.preventDefault();
							}
				
					});
			}	
			);
		</script>
	</body>
</html>