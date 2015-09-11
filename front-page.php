<?php
/**
 * The template for displaying the front page.
 *
 * This is the template that displays on the front page only.
 *
 * @package ipivanov
 */

get_header(); ?>   
<div id="particles-js"><span></span></div>
	<div id="primary" class="content-area">
		<main id="main" class="site-main grid js-masonry" role="main">

			<?php


$args = array( 'posts_per_page'   => -1,
	'offset'           => 0,
	'category'         => '',
	'category_name'    => '',
	'orderby'          => 'date',
	'order'            => 'DESC',
	'include'          => '',
	'exclude'          => '',
	'meta_key'         => '',
	'meta_value'       => '',
	'post_type'        => 'post',
	'post_mime_type'   => '',
	'post_parent'      => '',
	'author'	   => '',
	'post_status'      => 'publish',
	'suppress_filters' => true,
	'posts_per_page' => -1 );

$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
	<?php get_template_part( 'content', 'page' ); ?>
<?php endforeach; 
wp_reset_postdata();?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
