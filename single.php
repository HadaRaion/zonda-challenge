<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Zonda-challenge
 */

get_header();
?>

	<main id="contents" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post(); ?>

			<h1><?php the_title(); ?></h1>

		<?php endwhile; 
		?>

	</main>

<?php

get_footer();
