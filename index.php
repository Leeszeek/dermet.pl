<? /* Template Name: Strona główna */ ?>
<?php get_header(); ?>

<main class="home">
	<section class="slider-wrapper container-fluid">
		<div id="carousel-slider" class="owl-carousel owl-theme wow zoomInDown" data-wow-offset="100" data-wow-delay="0">
			<div class="item item-first">
				<img src="<?=get_template_directory_uri(); ?>/images/slide-4.jpg" alt="Panele ogrodzeniowe <?php bloginfo('name'); ?>">
				<div class="slider__content container">
					<h2>Panele ogrodzeniowe</h2>
					<p>Ogrodzenia panelowe, są coraz popularniejszym rozwiązaniem stosowanym na posesjach prywatnych jak i przemysłowych</p>
					<a href="#panelowe" class="slider__button">Sprawdź ofertę</a>
				</div>
			</div>
			<div class="item item-second">
				<img src="<?=get_template_directory_uri(); ?>/images/slide-3.jpg" alt="Bramy, furtki i ogrodzenia <?php bloginfo('name'); ?>">
				<div class="slider__content container">
					<h2>Bramy, furtki i ogrodzenia</h2>
					<p>Firma świadczy kompleksowe usługi w zakresie sprzedaży produkcji bram przesuwnych i skrzydłowych oraz furtek</p>
					<a href="<?php echo get_page_link( 16 ); ?>" class="slider__button">Sprawdź ofertę</a>
				</div>
			</div>
			<div class="item item-third">
				<img src="<?=get_template_directory_uri(); ?>/images/slide-1.jpg" alt="Sprzedaż kruszyw i ziemi <?php bloginfo('name'); ?>">
				<div class="slider__content container">
					<h2>Sprzedaż kruszyw i ziemi</h2>
					<p>Sprzedajemy i dowozimy na budowę kruszywa drogowe i budowlane oraz ziemie</p>
					<a href="#kruszywa" class="slider__button">Sprawdź ofertę</a>
				</div>
			</div>
		</div>
	</section>
	<section class="section-container container">
		<div class="row">
			<section id="about" class="top-boxes container">
				<header class="section-header wow bounceIn" data-wow-offset="100" data-wow-delay="0.5s">
					<h3>poznaj<span>naszą markę</span></h3>
				</header>
				<article class="about__box--wrapper row">
					<div class="about__box--text col-12 col-lg-5 wow flipInX" data-wow-offset="100" data-wow-delay="0">
						<header class="section__box--header">
							<h4>Słowem wstępu</h4>
						</header>
						<p><strong>DERMET</strong> jest firmą istniejąca na rynku od 2009 roku, zajmującą się sprzedażą elementów oraz kompletnych systemów ogrodzeniowych. Głównym walorem firmy Dermet jest rzetelna i fachowa obsługa oraz doradztwo w doborze odpowiedniego ogrodzenia.</p>
						<p>Naszym priorytetem jest  dbałość o wysoką jakość asortymentu oferowanego w sprzedaży przy zachowaniu konkurencyjnych cen oraz kompleksowe świadczenie usług w zakresie sprzedaży, montażu oraz produkcji.</p>
					</div>
					<div class="about__box--image col-12 col-lg-7 wow bounceInRight" data-wow-offset="100" data-wow-delay="1s">
						<figure>
							<img class="img-fluid" src="<?=get_template_directory_uri(); ?>/images/about-1.jpg" alt="<?php bloginfo('name'); ?>">
						</figure>
					</div>
				</article>
				<article class="about__box--wrapper row">
					<div class="about__box--text col-12 col-md-6 wow flipInX" data-wow-offset="100" data-wow-delay="0">
						<header class="section__box--header">
							<h4>Kompleksowe usługi</h4>
						</header>
						<p>Firma świadczy kompleksowe usługi w zakresie:</p>
						<ul>
							<li>sprzedaży wysokiej jakości komponentów ogrodzeniowych polskiej produkcji,</li>
							<li>produkcji bram przesuwnych i skrzydłowych oraz furtek,</li>
							<li>produkcji przęseł,</li>
							<li>produkcji oraz montażu konstrukcji stalowych,</li>
							<li>pomocy technicznej przy ustalaniu szerokości bram i furtek,</li>
							<li>profesjonalnego doradztwa w doborze odpowiedniego ogrodzenia,</li>
							<li>pomiaru działek przeznaczonych do ogrodzenia wraz z profesjonalnym montażem ogrodzenia,</li>
							<li>realizacji zamówień specjalnych.</li>
						</ul>
					</div>
					<div class="about__box--text col-12 col-md-6 wow flipInX" data-wow-offset="100" data-wow-delay="0">
						<header class="section__box--header">
							<h4>Sprzęt budowlany</h4>
						</header>
						<p>Oferujemy usługi sprzętem budowlanym. Firma posiada zaplecze maszynowe w postaci:</p>
						<ul>
							<li>koparko-ładowarki,</li>
							<li>wywrotki 3-28 ton.</li>
						</ul>
						<p>Zakres usług:</p>
						<ul>
							<li>wykopy pod fundamenty oraz ogrodzenia,</li>
							<li>drenaże, przyłącza wodne, elektryczne, gazowe,</li>
							<li>korytowanie pod kostkę</li>
							<li>rekultywacja terenu,</li>
							<li>wyburzenia,</li>
							<li>usuwanie starych fundamentów, elementów betonowych, a także korzeni drzew z ziemi,</li>
							<li>załadunek materiałów sypkich.</li>
						</ul>
					</div>
				</article>
				<article id="kruszywa" class="about__box--wrapper row">
					<div class="about__box--image col-12 col-lg-7 wow bounceInLeft" data-wow-offset="100" data-wow-delay="1s">
						<figure>
							<img class="img-fluid" src="<?=get_template_directory_uri(); ?>/images/about-2.jpg" alt="<?php bloginfo('name'); ?>">
						</figure>
					</div>
					<div class="about__box--text col-12 col-lg-5 wow flipInX" data-wow-offset="100" data-wow-delay="0">
						<header class="section__box--header">
							<h4>Sprzedaż kruszyw</h4>
						</header>
						<p>Poza działalnością usługową oferujemy także sprzedaż kruszyw budowlanych oraz ziemi. Sprzedajemy i dowozimy na budowę kruszywa drogowe i budowlane oraz ziemie. Wykonujemy wszelkie roboty ziemne koparką i wywrotką: wykopy, niwelacje terenu, korytowanie, budowanie i utwardzenia dróg dojazdowych, parkingów, placów. Wykonujemy także rozbiórki, wyburzenia domów, stodół oraz innych obiektów.</p>
						<p>Naszym priorytetem jest  dbałość o wysoką jakość asortymentu oferowanego w sprzedaży przy zachowaniu konkurencyjnych cen oraz kompleksowe świadczenie usług w zakresie sprzedaży, montażu oraz produkcji.</p>
					</div>
				</article>
				<article id="panelowe" class="about__box--wrapper row">
					<div class="about__box--text col-12 col-lg-5 wow flipInX" data-wow-offset="100" data-wow-delay="0">
						<header class="section__box--header">
							<h4>Panele ogrodzeniowe</h4>
						</header>
						<p>Ogrodzenia panelowe, są coraz popularniejszym rozwiązaniem stosowanym na posesjach prywatnych jak i przemysłowych. Charakteryzują się łatwym i szybkim montażem oraz dużą wytrzymałością ze względu na wykonanie. Sprzedawane przez naszą firmę panele, są produkcji polskiej z wysokiej jakości drutów ocynkowanych ogniowo, a następnie malowane metodą proszkową, dzięki czemu posiadają jeszcze większą odporność na korozję.</p>
						<p>Panele ogrodzeniowe to zestawienie trwałości i estetyki, dlatego też cieszą się taką popularnością i szerokim zakresem zastosowań: - na terenach przemysłowych, - obiektach sportowych, - posesjach prywatnych. W folderze zamieszczone zdjęcia realizacji naszych wybranych ogrodzeń.</p>
					</div>
					<div class="about__box--image col-12 col-lg-7 wow bounceInRight" data-wow-offset="100" data-wow-delay="1s">
						<figure>
							<img class="img-fluid" src="<?=get_template_directory_uri(); ?>/images/about-3.jpg" alt="<?php bloginfo('name'); ?>">
						</figure>
					</div>
				</article>
			</section>
		</div>
	</section>
	<section class="section-container container">
		<div class="row">
			<section id="services" class="top-boxes container">
				<header class="section-header wow bounceIn" data-wow-offset="100" data-wow-delay="0.5s">
					<h3>usługi<span>naszej firmy</span></h3>
				</header>
				<div class="row">
					<div class="top-box col-12 col-md-6 col-lg-3 wow flipInY" data-wow-offset="100" data-wow-delay="0s">
						<a href="<?=get_page_link( 16 ); ?>">
							<figure>
								<img src="<?=get_template_directory_uri(); ?>/images/icon-1.png" alt="<?php bloginfo('name'); ?>">
								<figcaption><h2><?php echo get_the_title( 16 ); ?></h2></figcaption>
							</figure>
						</a>
					</div>
					<div class="top-box col-12 col-md-6 col-lg-3 wow flipInY" data-wow-offset="100" data-wow-delay="0.25s">
						<a href="<?=get_page_link( 18 ); ?>">
							<figure>
								<img src="<?=get_template_directory_uri(); ?>/images/icon-3.png" alt="<?php bloginfo('name'); ?>">
								<figcaption><h2><?php echo get_the_title( 18 ); ?></h2></figcaption>
							</figure>
						</a>
					</div>
					<div class="top-box col-12 col-md-6 col-lg-3 wow flipInY" data-wow-offset="100" data-wow-delay="0.5s">
						<a href="<?=get_page_link( 20 ); ?>">
							<figure>
								<img src="<?=get_template_directory_uri(); ?>/images/icon-4.png" alt="<?php bloginfo('name'); ?>">
								<figcaption><h2><?php echo get_the_title( 20 ); ?></h2></figcaption>
							</figure>
						</a>
					</div>
					<div class="top-box col-12 col-md-6 col-lg-3 wow flipInY" data-wow-offset="100" data-wow-delay="0.75s">
						<a href="<?=get_page_link( 22 ); ?>">
							<figure>
								<img src="<?=get_template_directory_uri(); ?>/images/icon-2.png" alt="<?php bloginfo('name'); ?>">
								<figcaption><h2><?php echo get_the_title( 22 ); ?></h2></figcaption>
							</figure>
						</a>
					</div>
				</div>
			</section>
		</div>
	</section>
	<section id="realizations" class="realizations section-container container-fluid">
		<section>
			<header class="section-header wow bounceIn" data-wow-offset="100" data-wow-delay="0.5s">
				<h3>nasze<span>realizacje</span></h3>
			</header>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); the_content(); endwhile; else: ?>
				<p>Przepraszamy, brak wpisów spełniających podane kryteria.</p>
			<?php endif; ?>
		</section>
	</section>
	<section class="section-container container-fluid">
		<section id="contact" class="contact container">
			<header class="section-header wow bounceIn" data-wow-offset="100" data-wow-delay="0.5s">
				<h3>kontakt<span>do Nas</span></h3>
			</header>
			<div class="row">
				<address class="contact-box col-12 col-md-4 wow bounceInLeft" data-wow-offset="100" data-wow-delay="0.5s">
					<header class="section__box--header">
						<h4>Dane kontaktowe</h4>
					</header>
					<ul>
						<li>
							<i class="fas fa-home"></i>ul. Kielecka 63<span>42-240 Konin</span><span>woj. Śląskie</span><span>POLSKA</span>
						</li>
						<li>
							<i class="fas fa-envelope"></i><a href="mailto:info@dermet.pl">info@dermet.pl</a>
						</li>
						<li>
							<i class="fas fa-phone"></i><a href="tel:+48693960999">+48 693 960 999</a>
						</li>
					</ul>
				</address>
				<div class="contact-form col-12 col-md-8 wow zoomInRight" data-wow-offset="100" data-wow-delay="0.5s">
					<header class="section__box--header">
						<h4>Formularz kontaktowy</h4>
					</header>
					<?php echo do_shortcode('[contact-form-7 id="38" title="Formularz kontaktowy"]'); ?>
				</div>
			</div>
		</section>
		<section class="map col-12">
			<iframe src="https://snazzymaps.com/embed/151431" width="100%" height="500px" style="border:none;"></iframe>
		</section>
	</section>
	
</main>

<?php get_footer(); ?>