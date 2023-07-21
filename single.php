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
			the_post();

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'zonda-challenge' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'zonda-challenge' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

		endwhile; 
		?>

	</main>

<?php

get_footer();
