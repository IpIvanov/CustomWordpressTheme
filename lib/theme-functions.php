<?php
/**
 * ipivanov theme functions definted in /lib/init.php
 *
 * @package ipivanov
 */


/**
 * Register Widget Areas
 */
function mb_widgets_init() {
	// Main Sidebar
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'ipivanov' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1><span class="widget_border"></span>',
	) );
}

/**
 * Remove Dashboard Meta Boxes
 */
function mb_remove_dashboard_widgets() {
	global $wp_meta_boxes;
	// unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
	// unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
	// unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_drafts']);
	// unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
}

/**
 * Change Admin Menu Order
 */
function mb_custom_menu_order( $menu_ord ) {
	if ( !$menu_ord ) return true;
	return array(
		// 'index.php', // Dashboard
		// 'separator1', // First separator
		// 'edit.php?post_type=page', // Pages
		// 'edit.php', // Posts
		// 'upload.php', // Media
		// 'gf_edit_forms', // Gravity Forms
		// 'genesis', // Genesis
		// 'edit-comments.php', // Comments
		// 'separator2', // Second separator
		// 'themes.php', // Appearance
		// 'plugins.php', // Plugins
		// 'users.php', // Users
		// 'tools.php', // Tools
		// 'options-general.php', // Settings
		// 'separator-last', // Last separator
	);
}

/**
 * Hide Admin Areas that are not used
 */
function mb_remove_menu_pages() {
	// remove_menu_page( 'link-manager.php' );
}

/**
 * Remove default link for images
 */
function mb_imagelink_setup() {
	$image_set = get_option( 'image_default_link_type' );
	if ( $image_set !== 'none' ) {
		update_option( 'image_default_link_type', 'none' );
	}
}

/**
 * Enqueue scripts
 */
function mb_scripts() {
	wp_enqueue_style( 'ipivanov-style', get_stylesheet_uri() );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
	if ( is_front_page() ) {
	function my_jquery_enqueue() {
		wp_deregister_script('jquery');
		wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js", false);
		wp_enqueue_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js", false);
		wp_register_script( 'scrollReveal', get_template_directory_uri() . '/assets/js/scrollReveal.min.js', array( 'jquery' ), true);
		wp_enqueue_script('scrollReveal', get_template_directory_uri() . '/assets/js/scrollReveal.min.js', array( 'jquery' ), true);
		wp_register_script( 'cookie', get_template_directory_uri() . '/assets/js/js.cookie.js', array( 'jquery' ), true);
		wp_enqueue_script('cookie', get_template_directory_uri() . '/assets/js/js.cookie.js', array( 'jquery' ), true);
		wp_register_script( 'particles', get_template_directory_uri() . '/assets/js/particles.min.js', array( 'jquery' ), true);
		wp_enqueue_script('particles', get_template_directory_uri() . '/assets/js/particles.min.js', array( 'jquery' ), true);
		wp_register_script( 'typed', get_template_directory_uri() . '/assets/js/typed.js', array( 'jquery' ), true);
		wp_enqueue_script('typed', get_template_directory_uri() . '/assets/js/typed.js', array( 'jquery' ), true);
		wp_register_script( 'fittext', get_template_directory_uri() . '/assets/js/jquery.fittext.js', array( 'jquery' ), true);
		wp_enqueue_script('fittext', get_template_directory_uri() . '/assets/js/jquery.fittext.js', array( 'jquery' ), true);
		wp_register_script( 'smoothscroll', get_template_directory_uri() . '/assets/js/SmoothScroll.js', array( 'jquery' ), true);
		wp_enqueue_script('smoothscroll', get_template_directory_uri() . '/assets/js/SmoothScroll.js', array( 'jquery' ), true);
		wp_register_script( 'masonry', get_template_directory_uri() . '/assets/js/masonry.pkgd.min.js', array( 'jquery' ), true);
		wp_enqueue_script('masonry', get_template_directory_uri() . '/assets/js/masonry.pkgd.min.js', array( 'jquery' ), true);
		wp_register_script( 'nanobar', get_template_directory_uri() . '/assets/js/nanobar.min.js', array( 'jquery' ), true);
		wp_enqueue_script('nanobar', get_template_directory_uri() . '/assets/js/nanobar.min.js', array( 'jquery' ), true);
		wp_register_script( 'front-page', get_template_directory_uri() . '/assets/js/front-page.js', array( 'jquery' ), true);
		wp_enqueue_script('front-page', get_template_directory_uri() . '/assets/js/front-page.js', array( 'jquery' ), true);
}
}
	if ( is_single() || is_page('contacts') || is_page('about') ) {
	function my_jquery_enqueue() {
		wp_deregister_script('jquery');
		wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js", false);
		wp_enqueue_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js", false);
	
		
		wp_register_script( 'fittext', get_template_directory_uri() . '/assets/js/jquery.fittext.js', array( 'jquery' ), true);
		wp_enqueue_script('fittext', get_template_directory_uri() . '/assets/js/jquery.fittext.js', array( 'jquery' ), true);
		wp_register_script( 'smoothscroll', get_template_directory_uri() . '/assets/js/SmoothScroll.js', array( 'jquery' ), true);
		wp_enqueue_script('smoothscroll', get_template_directory_uri() . '/assets/js/SmoothScroll.js', array( 'jquery' ), true);
		
		wp_register_script( 'nanobar', get_template_directory_uri() . '/assets/js/nanobar.min.js', array( 'jquery' ), true);
		wp_enqueue_script('nanobar', get_template_directory_uri() . '/assets/js/nanobar.min.js', array( 'jquery' ), true);
		wp_register_script( 'single-page', get_template_directory_uri() . '/assets/js/single.js', array( 'jquery' ), true);
		wp_enqueue_script('single-page', get_template_directory_uri() . '/assets/js/single.js', array( 'jquery' ), true);
}
}	
}

/**
 * Remove Query Strings From Static Resources
 */
function mb_remove_script_version( $src ){
	$parts = explode( '?ver', $src );
	return $parts[0];
}

/**
 * Remove Read More Jump
 */
function mb_remove_more_jump_link( $link ) {
	$offset = strpos( $link, '#more-' );
	if ($offset) {
		$end = strpos( $link, '"',$offset );
	}
	if ($end) {
		$link = substr_replace( $link, '', $offset, $end-$offset );
	}
	return $link;
}

function twentytwelvechild_page_menu_args( $args ) {
	$args['show_home'] = false;
	return $args;
}
add_filter( 'wp_page_menu_args', 'twentytwelvechild_page_menu_args', 40 );

add_theme_support( 'post-thumbnails' ); 

add_filter( "the_excerpt", "add_class_to_excerpt" );
function add_class_to_excerpt( $excerpt ) {
    return str_replace('<p', '<p class="the_excerpt"', $excerpt);
}

set_post_thumbnail_size( 75, 75, array( 'center', 'center')  );


