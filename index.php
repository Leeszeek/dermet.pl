<? /* Template Name: Strona główna */ ?>
<?php get_header(); ?>

<main class="home main">
	<div class="slider__wrapper">
		<div id="carousel-slider" class="owl-carousel owl-theme wow zoomInDown" data-wow-offset="0" data-wow-delay="0">
			<section class="slider__item slider__item--first">
				<img src="<?=get_template_directory_uri(); ?>/images/slide-4.jpg" alt="Panele ogrodzeniowe <?php bloginfo('name'); ?>">
				<header class="slider__content slider__content--first container">
					<h2 class="slider__h2">Panele ogrodzeniowe</h2>
					<h3 class="slider__h3">Ogrodzenia panelowe, są coraz popularniejszym rozwiązaniem stosowanym na posesjach prywatnych jak i przemysłowych</h3>
					<a href="#panelowe" class="slider__button">Sprawdź ofertę</a>
				</header>
			</section>
			<section class="slider__item slider__item--second">
				<img src="<?=get_template_directory_uri(); ?>/images/slide-3.jpg" alt="Bramy, furtki i ogrodzenia <?php bloginfo('name'); ?>">
				<header class="slider__content slider__content--second container">
					<h2 class="slider__h2">Bramy, furtki i ogrodzenia</h2>
					<h3 class="slider__h3">Firma świadczy kompleksowe usługi w zakresie sprzedaży produkcji bram przesuwnych i skrzydłowych oraz furtek</h3>
					<a href="<?php echo get_page_link( 16 ); ?>" class="slider__button">Sprawdź ofertę</a>
				</header>
			</section>
			<section class="slider__item slider__item--third">
				<img src="<?=get_template_directory_uri(); ?>/images/slide-1.jpg" alt="Sprzedaż kruszyw i ziemi <?php bloginfo('name'); ?>">
				<header class="slider__content slider__content--third container">
					<h2 class="slider__h2">Sprzedaż kruszyw i ziemi</h2>
					<h3 class="slider__h3">Sprzedajemy i dowozimy na budowę kruszywa drogowe i budowlane oraz ziemie</h3>
					<a href="#kruszywa" class="slider__button">Sprawdź ofertę</a>
				</header>
			</section>
		</div>
	</div>
	<section id="about" class="section__container container">
		<header class="section__header row wow bounceIn" data-wow-offset="100" data-wow-delay="0s">
			<h2 class="section__h2 col-12">poznaj <span class="section__span">naszą markę</span></h2>
		</header>
		<article class="about__wrapper row">
			<div class="col-12 col-lg-5 wow flipInX" data-wow-offset="100" data-wow-delay="0">
				<header>
					<h3 class="section__h3">Słowem wstępu</h3>
				</header>
				<p class="about__text"><strong>DERMET</strong> jest firmą istniejąca na rynku od 2009 roku, zajmującą się sprzedażą elementów oraz kompletnych systemów ogrodzeniowych. Głównym walorem firmy Dermet jest rzetelna i fachowa obsługa oraz doradztwo w doborze odpowiedniego ogrodzenia.</p>
				<p class="about__text">Naszym priorytetem jest  dbałość o wysoką jakość asortymentu oferowanego w sprzedaży przy zachowaniu konkurencyjnych cen oraz kompleksowe świadczenie usług w zakresie sprzedaży, montażu oraz produkcji.</p>
			</div>
			<div class="col-12 col-lg-7 wow bounceInRight" data-wow-offset="100" data-wow-delay="0.25s">
				<picture class="about__picture about__picture--right">
					<img class="about__image img-fluid" src="<?=get_template_directory_uri(); ?>/images/about-1.jpg" alt="Słowem wstępu <?php bloginfo('name'); ?>">
				</picture>
			</div>
		</article>
		<article class="about__wrapper row">
			<div class="col-12 col-md-6 wow flipInX" data-wow-offset="100" data-wow-delay="0">
				<header>
					<h3 class="section__h3">Kompleksowe usługi</h3>
				</header>
				<p class="about__text">Firma świadczy kompleksowe usługi w zakresie:</p>
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
			<div class="col-12 col-md-6 wow flipInX" data-wow-offset="100" data-wow-delay="0">
				<header>
					<h3 class="section__h3">Sprzęt budowlany</h3>
				</header>
				<p class="about__text">Oferujemy usługi sprzętem budowlanym. Firma posiada zaplecze maszynowe w postaci:</p>
				<ul>
					<li>koparko-ładowarki,</li>
					<li>wywrotki 3-28 ton.</li>
				</ul>
				<p class="about__text">Zakres usług:</p>
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
		<article id="kruszywa" class="about__wrapper row">
			<div class="col-12 col-lg-7 wow bounceInLeft" data-wow-offset="100" data-wow-delay="0.25s">
				<picture class="about__picture about__picture--left">
					<img class="about__image img-fluid" src="<?=get_template_directory_uri(); ?>/images/about-2.jpg" alt="Sprzedaż kruszyw <?php bloginfo('name'); ?>">
				</picture>
			</div>
			<div class="col-12 col-lg-5 wow flipInX" data-wow-offset="100" data-wow-delay="0">
				<header>
					<h3 class="section__h3">Sprzedaż kruszyw</h3>
				</header>
				<p class="about__text">Poza działalnością usługową oferujemy także sprzedaż kruszyw budowlanych oraz ziemi. Sprzedajemy i dowozimy na budowę kruszywa drogowe i budowlane oraz ziemie. Wykonujemy wszelkie roboty ziemne koparką i wywrotką: wykopy, niwelacje terenu, korytowanie, budowanie i utwardzenia dróg dojazdowych, parkingów, placów. Wykonujemy także rozbiórki, wyburzenia domów, stodół oraz innych obiektów.</p>
				<p class="about__text">Naszym priorytetem jest  dbałość o wysoką jakość asortymentu oferowanego w sprzedaży przy zachowaniu konkurencyjnych cen oraz kompleksowe świadczenie usług w zakresie sprzedaży, montażu oraz produkcji.</p>
			</div>
		</article>
		<article id="panelowe" class="about__wrapper row">
			<div class="col-12 col-lg-5 wow flipInX" data-wow-offset="100" data-wow-delay="0">
				<header>
					<h3 class="section__h3">Panele ogrodzeniowe</h3>
				</header>
				<p class="about__text">Ogrodzenia panelowe, są coraz popularniejszym rozwiązaniem stosowanym na posesjach prywatnych jak i przemysłowych. Charakteryzują się łatwym i szybkim montażem oraz dużą wytrzymałością ze względu na wykonanie. Sprzedawane przez naszą firmę panele, są produkcji polskiej z wysokiej jakości drutów ocynkowanych ogniowo, a następnie malowane metodą proszkową, dzięki czemu posiadają jeszcze większą odporność na korozję.</p>
				<p class="about__text">Panele ogrodzeniowe to zestawienie trwałości i estetyki, dlatego też cieszą się taką popularnością i szerokim zakresem zastosowań: - na terenach przemysłowych, - obiektach sportowych, - posesjach prywatnych. W folderze zamieszczone zdjęcia realizacji naszych wybranych ogrodzeń.</p>
			</div>
			<div class="col-12 col-lg-7 wow bounceInRight" data-wow-offset="100" data-wow-delay="0.25s">
				<picture class="about__picture about__picture--right">
					<img class="about__image img-fluid" src="<?=get_template_directory_uri(); ?>/images/about-3.jpg" alt="Panele ogrodzeniowe <?php bloginfo('name'); ?>">
				</picture>
			</div>
		</article>
	</section>
	<section id="services" class="section__container container">
		<header class="section__header row wow bounceIn" data-wow-offset="100" data-wow-delay="0s">
			<h2 class="section__h2 col-12">usługi <span class="section__span">naszej firmy</span></h2>
		</header>
		<div class="row">
			<div class="services__box col-12 col-md-6 col-lg-3 wow flipInY" data-wow-offset="100" data-wow-delay="0s">
				<a href="<?=get_page_link( 16 ); ?>">
					<figure>
						<img src="<?=get_template_directory_uri(); ?>/images/icon-1.png" alt="Bramy, furtki i ogrodzenia <?php bloginfo('name'); ?>">
						<figcaption><h2><?php echo get_the_title( 16 ); ?></h2></figcaption>
					</figure>
				</a>
			</div>
			<div class="services__box col-12 col-md-6 col-lg-3 wow flipInY" data-wow-offset="100" data-wow-delay="0.25s">
				<a href="<?=get_page_link( 18 ); ?>">
					<figure>
						<img src="<?=get_template_directory_uri(); ?>/images/icon-3.png" alt="Kruszywa i ziemie <?php bloginfo('name'); ?>">
						<figcaption><h2><?php echo get_the_title( 18 ); ?></h2></figcaption>
					</figure>
				</a>
			</div>
			<div class="services__box col-12 col-md-6 col-lg-3 wow flipInY" data-wow-offset="100" data-wow-delay="0.5s">
				<a href="<?=get_page_link( 20 ); ?>">
					<figure>
						<img src="<?=get_template_directory_uri(); ?>/images/icon-4.png" alt="Konstrukcje stalowe <?php bloginfo('name'); ?>">
						<figcaption><h2><?php echo get_the_title( 20 ); ?></h2></figcaption>
					</figure>
				</a>
			</div>
			<div class="services__box col-12 col-md-6 col-lg-3 wow flipInY" data-wow-offset="100" data-wow-delay="0.75s">
				<a href="<?=get_page_link( 22 ); ?>">
					<figure>
						<img src="<?=get_template_directory_uri(); ?>/images/icon-2.png" alt="Usługi koparko-ładowarką <?php bloginfo('name'); ?>">
						<figcaption><h2><?php echo get_the_title( 22 ); ?></h2></figcaption>
					</figure>
				</a>
			</div>
		</div>
	</section>
	<section id="realizations" class="realizations section__container container-fluid">
		<header class="section__header row wow bounceIn" data-wow-offset="100" data-wow-delay="0s">
			<h2 class="section__h2 col-12">nasze <span class="section__span">realizacje</span></h2>
		</header>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); the_content(); endwhile; else: ?>
			<p>Przepraszamy, brak wpisów spełniających podane kryteria.</p>
		<?php endif; ?>
	</section>
	<section id="contact" class="section__container container">
		<header class="section__header row wow bounceIn" data-wow-offset="100" data-wow-delay="0s">
			<h2 class="section__h2 col-12">kontakt <span class="section__span">do Nas</span></h2>
		</header>
		<div class="row">
			<section class="contact__box col-12 col-md-4 wow bounceInLeft" data-wow-offset="100" data-wow-delay="0.25s">
				<header>
					<h3 class="section__h3">Dane kontaktowe</h3>
				</header>
				<address>
					<ul class="contact__list">
						<li class="contact__item">
							<i class="contact__icon fas fa-home"></i>ul. Kielecka 63<span class="contact__span">42-240 Konin</span><span class="contact__span">woj. Śląskie</span><span class="contact__span">POLSKA</span>
						</li>
						<li class="contact__item">
							<i class="contact__icon fas fa-envelope"></i><a href="mailto:info@dermet.pl" class="contact__link">info@dermet.pl</a>
						</li>
						<li class="contact__item">
							<i class="contact__icon contact__icon--phone fas fa-phone"></i><a href="tel:+48693960999" class="contact__link">+48 693 960 999</a>
						</li>
					</ul>
				</address>
			</section>
			<div class="contact__box col-12 col-md-8 wow zoomInRight" data-wow-offset="100" data-wow-delay="0.5s">
				<header>
					<h3 class="section__h3">Formularz kontaktowy</h3>
				</header>
				<div class="form__wrapper">
					<?php echo do_shortcode('[contact-form-7 id="38" title="Formularz kontaktowy"]'); ?>
				</div>
			</div>
		</div>
	</section>
	<div class="section__container map__wrapper container-fluid">
		<iframe src="https://snazzymaps.com/embed/151431" class="map__iframe"></iframe>
	</div>

</main>

<?php get_footer(); ?>