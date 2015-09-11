<?php
/**
 * Template Name: Contacts Page
 *
 * Displays content for portfolio page layouts
 *
 * @package ipivanov
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'contacts' ); ?>

			

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
