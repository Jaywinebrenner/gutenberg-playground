<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package cb_neat
 */

 get_header(); ?>

 <div class="container section-pad">

 	<?php while ( have_posts() ) : the_post(); ?>

 		<?php if (!get_field('hero')['image']): ?>
 			<h1 class="red title"><?php the_title(); ?></h1>
 		<?php endif; ?>
 		<div class="content">
 			<?php the_content(); ?>
 		</div>
 	<?php endwhile; // end of the loop. ?>

 </div>

 <?php get_sidebar(); ?>

 <?php get_footer(); ?>
