<!DOCTYPE HTML>
<!--
	AutomiRDB 2.5 by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Search</title>
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
	<body class="no-sidebar">

		<!-- Header Wrapper -->
			<div id="header-wrapper">
				<div class="container">
					<div class="row">
						<div class="12u">
						
							<!-- Header -->
								<section id="header">
									
									<!-- Logo -->
										<h1><a href="#">AutomiRDB</a></h1>
									
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
											    <li class="current_page_item"> <a href="search.php">Search</a></li>
												<li><a href="contact-us.php">Contact Us</a></li>
											
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
											<h2>Howdy. This is AutomiRDB.</h2>
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
										<h2>Search</h2>
									</header>
									<div>
										<div class="row">
											<div class="12u skel-cell-important">
											<article class="box is-post">
												<!-- Search form -->
												<form action="search.php" name="search" method="post">
														<div class="row">
															<div class="6u">
																<label for="herb" class="form_field">Herb Name (e.g. U00533; Salvia deserta Schang; Xinjiangshuweicao):</label> 
															</div>
															<div class="6u">
														    	<input type="text" class="input_field" name="herb" id="herb">
															</div>
														    <div class="6u">
																<label for="email">Compound Name</label>
															</div>
															<div class="6u">
														    	<input type="text" class="input_field" name="compound" id="compound">		
															</div>
														    <div class="6u">
																<label for="url">Protein Name (e.g. P04637, P53_HUMAN, P53):</label> 
															</div>
															<div class="6u">
																<input type="text" class="input_field" id="protein" name="protein">	
															</div>
														</div>
														<div class="clear"></div>
													    <div class="right">									 																																		
															<input type="submit" value="Search" id="submit" name="submit" class="button">
															<input type="reset" value="Reset" id="reset" name="reset" class="button">
														</div>
														<div class="clear"></div>
												</form>
												</article>
												<!-- Content -->
													<article class="box is-post">
														<a href="http://facebook.com/DreametryDoodle" class="image image-full"><img src="images/pic01.jpg" alt="" /></a>
														<header>
															<h2>No Sidebar</h2>
															<span class="byline">Lorem ipsum dolor sit amet feugiat</span>
														</header>
														<p>
															Vestibulum scelerisque ultricies libero id hendrerit. Vivamus malesuada quam faucibus ante dignissim auctor 
															hendrerit libero placerat. Nulla facilisi. Proin aliquam felis non arcu molestie at accumsan turpis commodo. 
															Proin elementum, nibh non egestas sodales, augue quam aliquet est, id egestas diam justo adipiscing ante. 
															Pellentesque tempus nulla non urna eleifend ut ultrices nisi faucibus.
															Vestibulum scelerisque ultricies libero id hendrerit. Vivamus malesuada quam faucibus ante dignissim auctor 
															hendrerit libero placerat. Nulla facilisi. Proin aliquam felis non arcu molestie at accumsan turpis commodo. 
															Proin elementum, nibh non egestas sodales, augue quam aliquet est, id egestas diam justo adipiscing ante. 
														</p>
														<p>
															Praesent a dolor leo. Duis in felis in tortor lobortis volutpat et pretium tellus. Vestibulum ac ante nisl, 
															a elementum odio. Duis semper risus et lectus commodo fringilla. Maecenas sagittis convallis justo vel mattis. 
															placerat, nunc diam iaculis massa, et aliquet nibh leo non nisl vitae porta lobortis, enim neque fringilla nunc, 
															eget faucibus lacus sem quis nunc suspendisse nec lectus sit amet augue rutrum vulputate ut ut mi. Aenean 
															elementum, mi sit amet porttitor lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor.
														</p>
														<section>
															<header>
																<h3>Something else</h3>
															</header>
															<p>
																Elementum odio duis semper risus et lectus commodo fringilla. Maecenas sagittis convallis justo vel mattis. 
																placerat, nunc diam iaculis massa, et aliquet nibh leo non nisl vitae porta lobortis, enim neque fringilla nunc, 
																eget faucibus lacus sem quis nunc suspendisse nec lectus sit amet augue rutrum vulputate ut ut mi. Aenean 
																elementum, mi sit amet porttitor lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor
																sit amet nullam consequat feugiat dolore tempus.
																Elementum odio duis semper risus et lectus commodo fringilla. Maecenas sagittis convallis justo vel mattis. 
																placerat, nunc diam iaculis massa, et aliquet nibh leo non nisl vitae porta lobortis, enim neque fringilla nunc, 
																eget faucibus lacus sem quis nunc suspendisse nec lectus sit amet augue rutrum vulputate ut ut mi. Aenean 
																elementum, mi sit amet porttitor lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor.
															</p>
															<p>
																Nunc diam iaculis massa, et aliquet nibh leo non nisl vitae porta lobortis, enim neque fringilla nunc, 
																eget faucibus lacus sem quis nunc suspendisse nec lectus sit amet augue rutrum vulputate ut ut mi. Aenean 
																elementum, mi sit amet porttitor lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor
																sit amet nullam consequat feugiat dolore tempus.
															</p>
														</section>
														<section>
															<header>
																<h3>So in conclusion ...</h3>
															</header>
															<p>
																Nunc diam iaculis massa, et aliquet nibh leo non nisl vitae porta lobortis, enim neque fringilla nunc, 
																eget faucibus lacus sem quis nunc suspendisse nec lectus sit amet augue rutrum vulputate ut ut mi. Aenean 
																elementum, mi sit amet porttitor lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor
																sit amet nullam consequat feugiat dolore tempus. Elementum odio duis semper risus et lectus commodo fringilla. 
																Maecenas sagittis convallis justo vel mattis. 
															</p>
														</section>
													</article>

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

	</body>
</html>