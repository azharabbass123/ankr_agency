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