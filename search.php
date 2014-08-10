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
												
											    <li class="current_page_item"> <a href="search.php">Search</a></li>
											
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
									<?php
									$inputKeyword = '';
									if(isset($_POST['keywords']))
									{
								    	$inputKeyword = $_POST['keywords'];
									}
									else
									{
									  if(isset($_GET['keywords']))
									  $inputKeyword = $_GET['keywords'];
									}
									?>
										<div class="row">
											<div class="12u skel-cell-important">
											<article class="box is-post">
												<!-- Search form -->

												<form action="search.php" name="search" method="post">
														<div class="row">
															<div class="6u">
																<label for="keywords" class="form_field">Keywords</label> 
															</div>
															<div class="6u">
														    	<input type="text" class="input_field" name="keywords" value="<?php echo $inputKeyword ?>" id="keywords">
															</div>													    
														</div>
														<div class="clear"></div>
													    <div class="right">									 																																		
															<input type="submit" value="Search" id="submit" name="submit" class="button">
														</div>
														<div class="clear"></div>
														<?php 
														$dbhost = 'localhost:3036';
														$dbuser = 'seanli';
														$dbpass = 'pass21';
														$rec_limit = 10;
														$conn = mysql_connect($dbhost, $dbuser, $dbpass);
														if(! $conn )
														{
														  die('Could not connect: ' . mysql_error());
														}
														mysql_select_db('chenlab');
														$query = '';
													
														if ($inputKeyword=='')
														{
														    $query = 'SELECT * FROM chenlab.miRNA_search';
														}
														else
														{
														   $query = "SELECT * FROM chenlab.miRNA_search where id like '%".$inputKeyword."%' "
															. " or access like '%".$inputKeyword."%' "
															. " or description like '%".$inputKeyword."%' "
															. " or unac like '%".$inputKeyword."%' "
															. " or unid like '%".$inputKeyword."%' "
															. " or miRNA_name like '%".$inputKeyword."%' "
															. " or cancer_name like '%".$inputKeyword."%' "
															. " or omimid like '%".$inputKeyword."%' "
															. " or autophagy_type like '%".$inputKeyword."%' "
															. " or symbol like '%".$inputKeyword."%' ";
														}
														 $result=mysql_query($query,$conn); 
														 ?>
														,
														 <table class="search-result">
															 <tr>
																 <th>
																 miRNA ID
																 </th>
																  <th>
																  access
																 </th>
																  <th>
																  symbol
																 </th>
																  
																  <!-- <th>
																  miRNA description
																 </th>-->
																   <th>
																 unac
																 </th>
																   <th>
																  unid
																 </th>
																   <th>
																  status
																 </th>
																   <th>
																gene
																 </th>
																   <th>
																 miRNA_name
																 </th>
																   <th>
																 method
																 </th>
																 
																  <th>
																 cancer_name
																 </th>
																  <th>
																 omimid
																 </th>
																 <!--  <th>
																 // cancer_desc
																 // </th>
																  // <th>
																 // mirRNA_function
																 // </th>
																  // <th>
																 // cancer_function
																 // </th>
																
																  // <th>
																 // autophagy_type
																 // </th>
															   </tr>-->
																  <?php
																  if(isset($_POST['keywords']))
																  {
																		  //-create  while loop and loop through result set 
																		while($row=mysql_fetch_array($result)){ 
																		$miRNA_ID  =$row['id']; 
																		$access=$row['access']; 
																		$symbol=$row['symbol']; 
																		
																		
																		
																		$miRNA_description  =$row['description']; 
															
																		//-display the result of the array 
																		echo "<tr>"; 
																		echo " <td>"  .$miRNA_ID  . " </td>\n"; 
																		echo " <td>"  .$access  . " </td>\n"; 
																		echo " <td>"  .$symbol  . " </td>\n"; 
																		
																		
																		// echo " <td>"  .$miRNA_description  . " </td>\n"; 	
																		echo " <td>"  .$row['unac']  . " </td>\n"; 
																		echo " <td>"  .$row['unid']  . " </td>\n"; 
																		echo " <td>"  .$row['status']  . " </td>\n"; 
																		echo " <td>"  .$row['gene']  . " </td>\n"; 
																		echo " <td>"  .$row['miRNA_name']  . " </td>\n"; 		
																		echo " <td>"  .$row['method']  . " </td>\n"; 		


																		echo " <td>"  .$row['cancer_name']  . " </td>\n"; 
																		echo " <td>"  .$row['omimid']  . " </td>\n"; 
																		// echo " <td>"  .$row['cancer_desc']  . " </td>\n"; 
																		// echo " <td>"  .$row['mirRNA_function']  . " </td>\n"; 
																		// echo " <td>"  .$row['cancer_function']  . " </td>\n"; 		
																		// echo " <td>"  .$row['stage']  . " </td>\n"; 
																		// echo " <td>"  .$row['autophagy_type']  . " </td>\n"; 
																			
																		echo "</tr>"; 
															
																 
																  }
																  }
																
																	mysql_close($conn);
																?>
														 </table>
														
												</form>
												</article>
												<!-- Content -->
												<!-- 
													<article class="box is-post" style="display:none">
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
													-->
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