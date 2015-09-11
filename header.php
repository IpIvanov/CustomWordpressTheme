<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package ipivanov
 */
?><!DOCTYPE html>
<!--[if IE 8]>
	<html id="ie8" <?php language_attributes(); ?>>
		<![endif]-->
		<!--[if !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ) ?></title>
	<meta name="description" content="At this site you can find articles about computer coding. The information here will give you basic knowledge and also here you will strengthen your capability to code.
If you like coding in general this is your place to find out how fun and easy is that." />
	<meta name="keywords" content="ipivanov, html5, html, css, javascript, jquery, coding, coding bulgaria, coding-bulgaria" />
	<meta name="author" content="Ivan Ivanov" />
    <meta name="contact" content="ipivanov11@gmail.com" />
	<link rel="alternate" hreflang="en" href="http://ipivanov.info/" />
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/apple-touch-icon.png">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<!--[if lt IE 8]>
	    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, multilanguagePage: true}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
	<header id="masthead" class="site-header" role="banner">
		<div class="header-wrapper">
			<div class="social-share-buttons">
				<a href="http://www.facebook.com/share.php?u=http://www.ipivanov.info&title=<?php the_title(); ?>" title="Share this on Facebook"><i class="fa fa-facebook"></i></a>
				<a href="http://twitter.com/intent/tweet?status=Here you will find great articles about coding:+http://www.ipivanov.info" title="Tweet This"><i class="fa fa-twitter"></i></a>				
				<a href="https://www.youtube.com/" title="View videos on youtube"><i class="fa fa-youtube"></i></a>
			</div>

		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' );  ?></a></h1>
			
		</div>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<i class="fa fa-search">
				<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
					<label>
						<!-- <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span> -->
						<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
					</label>
					<!-- <input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" /> -->
				</form>
			</i>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'show_home' => false)); ?>
		</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->

