<footer class="footer__wrapper">

	<section class="prefooter__wrapper container-fluid">
		<div class="container">
			<div class="row">
				<div class="prefooter__box prefooter__box--contact col-12 col-sm-6 col-lg-4">
				<?php if ( is_active_sidebar( 'footer-contact' ) ) : ?>
					<?php dynamic_sidebar( 'footer-contact' ); ?>
				<?php endif; ?>
				</div>
				<div class="prefooter__box prefooter__box--sitemap col-12 col-sm-6 col-lg-4">
					<h2 class="prefooter__h2">Mapa strony</h2>
					<?php wp_nav_menu( array( 'theme_location' => 'menu-glowne', 'depth' => 2)); ?>
				</div>
				<div class="prefooter__box col-12 col-xl-4">
					<h2 class="prefooter__h2">Facebook</h2>
					<div class="fb-page" data-href="https://www.facebook.com/dermetogrodzenia/" data-width="350" data-height="215" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/dermetogrodzenia/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/dermetogrodzenia/">Dermet</a></blockquote></div>
				</div>
			</div>
		</div>
	</section>
	<section class="footer__content container-fluid">
		<div class="row">
			<div class="footer__copyrights col-md-4 col-lg-3">
				<h2 class="footer__h2">© <?php echo date('Y'); ?> <a href="<?=get_site_url(); ?>" target="_blank" class="footer__link"><?php bloginfo('name'); ?></a></h2>
			</div>
			<div class="footer__author col-md-4 offset-md-4 col-lg-3 offset-lg-6">
				<h2 class="footer__h2">Projekt i wykonanie <a href="https://kamilweb.pl/" target="_blank" class="footer__link footer__link--author"> KamilWeb</a></h2>
			</div>
		</div>
	</section>
	
</footer>
<?php wp_footer(); ?>
</body>
</html>