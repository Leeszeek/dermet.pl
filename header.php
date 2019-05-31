<!DOCTYPE HTML>
<html lang="<?php bloginfo('language'); ?>">
<head>

	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title><?php wp_title(''); ?></title>

	<meta name="title" content="<?php wp_title(''); ?> <?php bloginfo('name'); ?>">
	<meta name="keywords" content="">
	<meta name="author" content="KamilWeb - Kamil Leszewicz https://kamilweb.pl/">
	<meta name="theme-color" content="#f4c10d">

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/owlcarousel/owl.carousel.min.css">
	<!--<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">-->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.min.css" type="text/css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.min.css" type="text/css">
	 
	<?php wp_head(); ?>
	
</head>
<body id="top">
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pl_PL/sdk.js#xfbml=1&version=v3.2"></script>

<header class="header-wrapper container-fluid">
	<div class="container">
		<section class="row main-menu-wrapper">
			<div class="header-logo col-6 col-md-3">
				<a href="<?=get_site_url(); ?>">
					<img src="<?=get_template_directory_uri(); ?>/images/logo.png" class="img-fluid" alt="Logo <?php bloginfo('name'); ?>">
				</a>
			</div>
			<nav class="header-nav offset-3 col-1 col-sm-1 offset-lg-1 col-lg-8 offset-xl-2 col-xl-7">
				<button id="menu-icon" aria-label="menu" type="button" tabindex="0">
					<span></span>
					<span></span>
					<span></span>
				</button>
				<?php 
				if (is_page( 6 )) {
					wp_nav_menu( array( 'theme_location' => 'menu-glowne', 'depth' => 2)); 
				} else {
					wp_nav_menu( array( 'theme_location' => 'menu-glowne-podstrona', 'depth' => 2));
				}?>	
			</nav>
		</section>
	</div>
</header>