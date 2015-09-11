<?php
/**
 * The template for displaying all single posts.
 *
 * @package ipivanov
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<div class="left-content">
		
			<h1 class="entry-title"><?php echo get_the_post_thumbnail( $page->ID, array( 75, 75) ); ?><?php the_title(); ?></h1>
			<p class="meta-info">
				<i class="fa fa-calendar"></i><span class="entry-date"><?php echo get_the_date('j F, Y'); ?></span>
				<i class="fa fa-user" title="Author"></i><span><?php the_author_meta('display_name', 1); ?></span>
				<i class="fa fa-comments-o"></i><span><?php comments_number(); ?></span>
				<i class="fa fa-th-list" title="Category"></i><span><?php $category = get_the_category( $custompost ); echo $category[0]->cat_name;?> </span>
				<i class="fa fa-eye" title="Views"></i>
				<span>
					<?php
			if (have_posts()) :
			   while (have_posts()) :
			      the_post();
			         if(function_exists('the_views')) { the_views(); } 
			   endwhile;
			endif;
			?>
				</span>
			</p>
			<?php
			if (have_posts()) :
			   while (have_posts()) :
			      the_post();
			         the_content();
			   endwhile;
			endif;
			?>
									
<div class="share_this social_round"> 
   <div class="social_buttons">
            
    <span class="share_label">Share This</span>
                <?php
				$Path=$_SERVER['REQUEST_URI'];
				$URI='http://www.ipivanov.info'.$Path;
				?>


                <div class="lgn_fb">
                        <a href="http://www.facebook.com/share.php?u=<?php echo $URI ?>&title=<?php the_title(); ?>" title="Share this on Facebook"><i class="fa fa-facebook"></i></a>
                </div>

    


                <div class="lgn_twt">
                    <a href="http://twitter.com/intent/tweet?status=<?php the_title(); ?>+<?php echo $URI ?>" title="Tweet This"><i class="fa fa-twitter"></i></a>
                </div>



				<div class="lgn_gplus">
                    <a title="Plus One This" href="https://plus.google.com/share?url=<?php echo $URI ?>"><i class="fa fa-google-plus"></i></a>
                </div>



                <div class="lgn_pin">
                
                    <a title="Pin This" href="http://pinterest.com/pin/create/bookmarklet/?media=<?php global $post; echo wp_get_attachment_url( get_post_thumbnail_id() );?>&url=<?php  echo $URI ?>&is_video=false&description=<?php the_title(); ?>"><i class="fa fa-pinterest"></i></a>
                </div>



                <div class="lgn_linkedin">
                    <a title="Share this on Linkedin" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php  echo $URI  ?>&title=<?php the_title(); ?>&source=<?php 'ipivanov.info' ?>"><i class="fa fa-linkedin"></i></a>
                </div>

		</div>
		</div>

		<div id="cooler-nav" class="navigation">
			<div class="nav-box previous">
                <?php $prevPost = get_previous_post(true);
					if($prevPost) {?>
					
					<p>Previous Post</p>
                    <?php $prevthumbnail = get_the_post_thumbnail($prevPost->ID, array(100,100) );?>
                    <?php previous_post_link('%link',"$prevthumbnail  %title", TRUE, $prevPostCat); ?>
                    <?php $prevPostCat = the_category( $prevPost->ID ); }?>
                    
					</div>
				<div class="nav-box next">
                <?php $nextPost = get_next_post(true);
					if($nextPost) { ?>
                
                <p>Next Post</p>
                <?php $nextthumbnail = get_the_post_thumbnail($nextPost->ID, array(100,100) );  ?>
					<?php next_post_link('%link',"$nextthumbnail  %title", TRUE, $nextPostCat); ?>
					
					<?php $nextPostCat = the_category( $nextPost->ID ); }?>
					
                    </div>
                   
                </div><!--#cooler-nav div -->
                <div class="related-posts">
                	<h3>Related Posts</h3>
                	<span class="widget_border"></span>
                <?php
				//for use in the loop, list 5 post titles related to first tag on current post
				$tags = wp_get_post_tags($post->ID);
				if ($tags) {
				$first_tag = $tags[0]->term_id;
				$args=array(
				'tag__in' => array($first_tag),
				'post__not_in' => array($post->ID),
				'posts_per_page'=>4,
				'caller_get_posts'=>1
				);
				$my_query = new WP_Query($args);
				if( $my_query->have_posts() ) {
				while ($my_query->have_posts()) : $my_query->the_post(); ?>

				<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php echo get_the_post_thumbnail( $page->ID, 'thumbnail' ); ?><p><?php the_title(); ?></p></a>

				<?php
				endwhile;
				}
				wp_reset_query();
				}
				?>
                </div>
                <div class="comments-wrapper">
                	<h3>Leave a Reply Text</h3>
                	<span class="widget_border"></span>
                	<?php comments_template(); ?>
                </div>
		 
		</div>

		<div class="right-content">
			<?php get_sidebar(); ?>
		</div>
		
		</main><!-- #main -->
		</div>


<?php get_footer(); ?>
