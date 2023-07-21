<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Zonda-challenge
 */

get_header();
?>

	<main id="contents" class="site-main">
		<div class="container">
		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<ul>
				<?php

				while ( have_posts() ) :
					the_post(); 
					
					$employee_name = get_field('employee_name');
					$profile_image = get_field('profile_image');
					$position_title = get_field('position_title');
					?>
					<li>
						<a class="post" href="<?php the_permalink(); ?>" aria-label="<?php the_title(); ?>">
							
							<span class="post__thumbnail">				
	
							</span>
						<h2><?php echo $employee_name; ?></h2>
            <p><?php echo $position_title; ?></p>
							<span class="post__title text-2xl font-500"><?php the_title(); ?></span>
						</a>
					</li>
					

				<?php endwhile; 
				?>
			<ul>

			<?php the_posts_navigation();

		else : ?>

			<p>No employees yet.</p>

		<?php endif;
		?>
		</div>
	</main><!-- #main -->

<?php
get_footer();
