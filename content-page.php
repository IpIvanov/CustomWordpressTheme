<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package ipivanov
 */
?>
<div class="sizer"></div>
<article id="post-<?php the_ID(); ?>" <?php post_class('grid-item'); ?> data-sr="scale up 20%, move 500px, over 0.6s, no reset, vFactor 0.5, opacity 0">
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
	<header class="entry-header">
		<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>
		<img src="<?php echo $url; ?>" alt="<?php the_title(); ?>" />
		
	</header><!-- .entry-header -->

	<div class="entry-content">
	<h2 class="entry-title"><?php the_title(); ?></h2>
		<?php $little_excerpt = substr(the_excerpt(),0, 250); ?>
		
		<?php
		?>
	</div><!-- .entry-content -->
	<footer class="entry-footer">
		<!-- <p><i class="fa fa-hand-o-right"></i>More</p> -->
	</footer><!-- .entry-footer -->
	</a>
</article><!-- #post-## -->
