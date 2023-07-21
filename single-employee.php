<?php

$employee_name = get_field('employee_name');
$profile_image = get_field('profile_image');
$position_title = get_field('position_title');
$division_title = get_field('division_title');
$division_logo = get_field('division_logo');
$months_at_company = get_field('months_at_company');
$bios = get_field('bios');

get_header();
?>

	<main main id="contents" class="site-main">
		<div class="container">
			<div class="employee-bio">
				<h2><?php echo $employee_name; ?></h2>
				<div class="image">
						<?php if ($profile_image) : ?>
								<img src="<?php echo $profile_image['url']; ?>" alt="<?php echo $employee_name; ?>">
						<?php endif; ?>
				</div>
				<p><strong><?php echo $position_title; ?></strong></p>
				<p><?php echo $division_title; ?></p>
				<?php if ($division_logo) : ?>
						<div class="division-logo">
								<img src="<?php echo $division_logo['url']; ?>" alt="<?php echo $division_title; ?>">
						</div>
				<?php endif; ?>
				<p><?php echo $months_at_company; ?></p>
				<div class="bio-text">
						<?php echo $bios; ?>
				</div>
			</div>

			<?php
				the_post_navigation(
					array(
						'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'zonda-challenge' ) . '</span> <span class="nav-title">%title</span>',
						'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'zonda-challenge' ) . '</span> <span class="nav-title">%title</span>',
					)
				);
			?>

		</div>            
	</main><!-- #main -->

<?php

get_footer();
