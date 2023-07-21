<?php

$employee_name = get_field('employee_name');
$profile_image = get_field('profile_image');
$position_title = get_field('position_title');
$division_title = get_field('division_title');
$division_logo = get_field('division_logo');
$first_day_at_zonda = get_field('first_day_at_zonda');
$bios = get_field('bios');


$data_intelligence = array("Zonda Urban", "Zonda Builder");
$engagement = array("Zonda Events", "Zonda Listings", "Zonda House Plans", "Zonda Lead Gen");
$awareness = array("Zonda Media", "Zonda Marketing");

get_header();


?>

	<main id="contents" class="site-main">
		<div class="container">

			<div class="employee">

				<section class="employee__info">
					<h1 class="font-serif text-7xl font-normal"><?php echo $employee_name; ?></h1>
	
					<h2 class="text-xl font-normal p-top-xs <?php
							if (in_array($division_title, $data_intelligence)) {
									echo 'text-secondary';
							} elseif (in_array($division_title, $engagement)) {
									echo 'text-primary';
							} elseif (in_array($division_title, $awareness)) {
									echo 'text-red';
							} else {
									echo 'text-gray';
							}
					?>">
						<?php echo $position_title; ?> at <?php echo $division_title; ?>
					</h2>

					<p class="text-xl text-gray">has been working for <?php echo getYearsMonthsWorked($first_day_at_zonda) ?></p>

					<div class="employee__info__bio p-top-small text-lg">
						<?php echo $bios; ?>
					</div>
				</section>		

				<section class="employee__image">
					<div class="employee__image__profile">
						<?php if ($profile_image) : ?>
						<img
							srcset="<?php echo $profile_image['sizes']['employeeProfile']; ?>, <?php echo $profile_image['sizes']['employeeProfile-2x']; ?> 2x"
							src="<?php echo $profile_image['sizes']['employeeProfile']; ?>"
							alt="<?php echo $profile_image['alt'] ? $profile_image['alt'] : $employee_name; ?>"
						/>
						<?php endif; ?>
					</div>
									
					<div class="employee__image__division-logo">
						<?php if ($division_logo) : ?>
							<img src="<?php echo $division_logo['url']; ?>" alt="<?php echo $division_title; ?>">
						<?php else : ?>
							<img src="<?php echo get_theme_file_uri('/images/division-logo-home.svg'); ?>" alt="<?php echo $division_title; ?>">
						<?php endif; ?>
					</div>
				</section>		
			</div>

			<?php custom_post_navigation('employee'); ?>
			
		</div>            
	</main><!-- #main -->

<?php

get_footer();
