<html>
<head>
	<title><?php wp_title(); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/normalize.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick.css"/>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/typed.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/function.js"></script>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Quattrocento:400,700|Oswald:400,300,700' rel='stylesheet' type='text/css'>
	<meta name="viewport" content="width=device-width">
	<?php wp_head(); ?>
</head>
<body class="homepage">
	<div class="col-wrap">	
		<header class="skyline column">
			<h1 class="logo taligncenter"><a href="<?php echo get_site_url(); ?>">Inspyre</a></h1>
			<h2 class="taligncenter"><i><span>california</span> digital agency</i></h2>
			<div class="container">
				<nav class="aligncenter">
					<ul>
						<li>Menu</li>
						<li><a href="<?php echo get_site_url(); ?>/contact-us">Contact Us</a></li>
					</ul>
				</nav>
				<div class="bottom">
					<p>Ready to start your next project?</p>
					<div class="bottom-content">
						<p>Talk to us</p>
						<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 5 ); } ?>
					</div>
				</div>
			</div>
			<div class="menu">
				<div class="close"><i class="fa fa-times"></i></div>
				<div class="menu-section black">
					<div class="col-wrap">
						<div class="column half">
							<h3>what we do</h3>
						</div>
						<div class="column half">
							<ul>
								<li><a href="<?php echo get_site_url(); ?>/services/web-design">Web Design</a></li>
								<li><a href="<?php echo get_site_url(); ?>/services/photography">Photography</a></li>
								<li><a href="<?php echo get_site_url(); ?>/services/ecommerce">e-Commerce</a></li>
								<li><a href="<?php echo get_site_url(); ?>/services/print-and-branding">Print and Branding</a></li>
								<li><a href="<?php echo get_site_url(); ?>/services/custom-projects">Custom Projects</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="menu-section white">
					<div class="col-wrap">
						<div class="column half">
							<h3>who we are</h3>
						</div>
						<div class="column half">
							<ul>
								<li><a href="<?php echo get_site_url(); ?>/about-us">About Us</a></li>
								<!-- <li><a href="<?php echo get_site_url(); ?>/our-team">Our Team</a></li>-->
							</ul>
						</div>
					</div>
				</div>
				<div class="menu-section black">
					<div class="col-wrap">
						<div class="column half">
							<h3>how to reach us</h3>
						</div>
						<div class="column half">
							<ul>
								<li>1205 J St. San Diego CA, 92021</li>
								<li>contact@inspyregroup.com</li>
								<li>619-729-8424</li>
								<li>Hours 9AM - 5PM Mon-Fri</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</header>