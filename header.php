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
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.min.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,400i,500,600,700&amp;subset=latin-ext" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	 
	<?php wp_head(); ?>
	
</head>

<body id="top">
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pl_PL/sdk.js#xfbml=1&version=v3.2"></script>

<header class="header__wrapper container-fluid">
	<div class="container">
		<div class="header__content row">
			<h1 class="header__logo col-6 col-md-3">
				<a href="<?=get_site_url(); ?>" class="header__link">
					<img src="<?=get_template_directory_uri(); ?>/images/logo.png" alt="Logo <?php bloginfo('name'); ?>" class="header__image img-fluid">
				</a>
			</h1>
			<nav class="header__nav col-3 col-lg-9 offset-xl-2 col-xl-7">
				<button id="menu__icon" class="menu__icon" aria-label="menu" type="button" tabindex="0">
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
		</div>
	</div>
</header>