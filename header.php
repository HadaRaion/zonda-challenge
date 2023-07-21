<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Zonda-challenge
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	<a class="skip-link screen-reader-text" href="#contents"><?php esc_html_e( 'Skip to content', 'zonda-challenge' ); ?></a>

	<header class="site-header" aria-label="Site header">
		<div class="container">
			<?php

			if ( is_front_page() OR is_home() ) :
				?>
				<h1 class="site-title" aria-label="Site title logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img class="site-header__logo" src="<?php echo get_theme_file_uri('/images/zonda-logo.svg'); ?>" alt="Zonda Logo">
						<span class="sr-only"><?php bloginfo( 'name' ); ?><span>
				</a></h1>
				<?php
			else :
				?>
				<p class="site-title" aria-label="Site title logo">		
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img class="site-header__logo" src="<?php echo get_theme_file_uri('/images/zonda-logo.svg'); ?>" alt="Zonda Logo">
						<span class="sr-only"><?php bloginfo( 'name' ); ?><span>
					</a>
				</p>
				<?php
			endif; ?>

			<nav class="site-nav" aria-label="Site main">
				<ul>
					<li <?php if (get_post_type() == 'employee') echo 'class="underline"' ?>><a class="text-lg font-medium" href="<?php echo get_post_type_archive_link('employee'); ?>">Employee</a></li>
				</ul>
			</nav>
		</div>
	</header>