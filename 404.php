<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package cb_neat
 */

get_header(); ?>

	<div id="primary" class="content-area">

		<section class="error-404 not-found container" style="padding-top: 200px; margin-bottom: 200px;position: relative; z-index: 1;">
			<h1>This page could not be found</h1>
			<a href="<?php echo home_url(); ?>" class="btn_1">home</a>
		</section><!-- .error-404 -->

	</div><!-- #primary -->

<?php get_footer(); ?>
