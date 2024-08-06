<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ankr_theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
	<link rel='stylesheet' id='slick_style-css' href='//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css?ver=6.5.5' media='all' />
	<!-- ankr agency links -->

	<link rel='stylesheet' id='contact-form-7-css' href='https://ankragency.com/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.8.1' media='all' />
	<link rel='stylesheet' id='bootstrap_style-css' href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css?ver=6.5.5' media='all' />
	<link rel='stylesheet' id='font_awesome-css' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css?ver=6.5.5' media='all' />
	<link rel='stylesheet' id='slick_style-css' href='//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css?ver=6.5.5' media='all' />
	<link rel='stylesheet' id='swiper_style-css' href='https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css?ver=6.5.5' media='all' />
	<link rel='stylesheet' id='urban_insight-style-css' href='https://ankragency.com/wp-content/themes/urban_insight/style.css?ver=1.0.0' media='all' />
	<link rel='stylesheet' id='style-style-css' href='https://ankragency.com/wp-content/themes/urban_insight/assets/css/style.css?ver=1722939335' media='all' />


	<script src="https://ankragency.com/wp-includes/js/jquery/jquery.min.js?ver=3.7.1" id="jquery-core-js"></script>
	<script src="https://ankragency.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1" id="jquery-migrate-js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js?ver=6.5.5" id="bootstrap-js"></script>
	<script src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js?ver=6.5.5" id="slick-js"></script>
	<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js?ver=6.5.5" id="swiper-js"></script>
	</body>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'ankr_theme'); ?></a>

		<header id="masthead" class="header-container text-center">
			<div class="logo">
				<a href="https://ankragency.com/" class="custom-logo-link" rel="home" aria-current="page"><img width="100" height="100" src="https://ankragency.com/wp-content/uploads/2024/02/Ankr-Final-White.png" class="custom-logo" alt="ANKR Agency | Digital Marketing Agency in Dallas Fort Worth" decoding="async" fetchpriority="high" srcset="https://ankragency.com/wp-content/uploads/2024/02/Ankr-Final-White.png 476w, https://ankragency.com/wp-content/uploads/2024/02/Ankr-Final-White-289x300.png 289w" sizes="(max-width: 476px) 100vw, 476px" /></a>
			</div>

			<div class="nav-container">

				<nav class="navbar navbar-ankr">
					<?php
					wp_nav_menu(array(
						'theme_location' => 'primary',
						'container' => false,
						'menu_class' => 'nav navbar-nav',
					));
					?>
				</nav>
			</div><!-- .nav-container -->
			<div class="header__cta d-lg-block d-none">
				<a href="#contactUs-section" class="header__cta--btn btn">SCHEDULE STRATEGY SESSION</a>
			</div>

		</header><!-- #masthead -->