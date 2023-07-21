<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Zonda-challenge
 */

get_header();
?>

	<main id="contents" class="site-main">

		<section class="error-404 not-found container">
			<header class="page-header p-top">
				<h1 class="text-3xl text-center"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'zonda-challenge' ); ?></h1>
			</header><!-- .page-header -->

			<div class="text-lg text-center p-top-xs">
				<p><?php esc_html_e( 'It looks like nothing was found at this location.', 'zonda-challenge' ); ?>
					<a class="underline" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php esc_html_e( 'Click here to go back to main page.', 'zonda-challenge' ); ?></a>
				</p>
			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
