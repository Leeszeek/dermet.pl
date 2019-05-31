	
<footer class="footer-wrapper">

	<section class="prefooter container-fluid">
		<div class="container">
			<div class="row">
				<div class="prefooter__box box-contact col-12 col-sm-6 col-lg-4">
				<?php if ( is_active_sidebar( 'footer-contact' ) ) : ?>
					<?php dynamic_sidebar( 'footer-contact' ); ?>
				<?php endif; ?>
				</div>
				<div class="prefooter__box box-sitemap col-12 col-sm-6 col-lg-4">
					<h5>Mapa strony</h5>
					<?php wp_nav_menu( array( 'theme_location' => 'menu-glowne', 'depth' => 2)); ?>
				</div>
				<div class="prefooter__box box-facebook col-12 col-xl-4">
					<h5>Facebook</h5>
					<div class="fb-page" data-href="https://www.facebook.com/dermetogrodzenia/" data-width="350" data-height="215" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/dermetogrodzenia/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/dermetogrodzenia/">Dermet</a></blockquote></div>
				</div>
			</div>
		</div>
	</section>
	
	<section class="footer container-fluid">
		<div class="row">
			<div class="footer-copyrights col-md-4 col-lg-3">
				<span>© <?php echo date('Y'); ?> <a href="<?=get_site_url(); ?>" target="_blank"><?php bloginfo('name'); ?></a></span>
			</div>
			<div class="footer-author col-md-4 offset-md-4 col-lg-3 offset-lg-6">
				<span>Projekt i wykonanie <a href="https://kamilweb.pl/" target="_blank" rel="dofollow"> KamilWeb</a></span>
			</div>
		</div>
	</section>
	
</footer>
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,400i,500,600,700&amp;subset=latin-ext" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<?php wp_footer(); ?>
</body>
</html>