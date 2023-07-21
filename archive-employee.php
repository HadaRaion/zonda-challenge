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
				<h1 class="font-serif font-normal text-center text-7xl">Meet our employees</h1>
			</header><!-- .page-header -->

			<ul class="employee-list">
				<?php

				while ( have_posts() ) :
					the_post(); 
					
					$employee_name = get_field('employee_name');
					$profile_image = get_field('profile_image');
					$position_title = get_field('position_title');
					?>

					<li>
						<a class="employee-card" href="<?php the_permalink(); ?>" aria-label="<?php the_title(); ?>">
							
							<span class="employee-card__image">				
								<img
									srcset="<?php echo $profile_image['sizes']['employeeProfile']; ?>, <?php echo $profile_image['sizes']['employeeProfile-2x']; ?> 2x"
									src="<?php echo $profile_image['sizes']['employeeProfile']; ?>"
									alt="<?php echo $profile_image['alt'] ? $profile_image['alt'] : $employee_name; ?>"
								/>
							</span>
							<span class="employee-card__text">
								<h2 class="font-serif font-normal text-4xl"><?php echo $employee_name; ?></h2>
								<h3 class="font-light text-xl text-gray"><?php echo $position_title; ?></h3>
							<span>
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
