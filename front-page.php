<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Zonda-challenge
 */

get_header();
?>

	<main id="contents" class="site-main">
		<div class="container">
			<h2 class="text-3xl text-center"><?php the_title(); ?> Page</h2>
		</div>
	</main><!-- #main -->

<?php

get_footer();
