<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package ipivanov
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo" >
		<div class="site-info" style="background: url('<?php bloginfo('template_directory');?>/assets/images/footbg.jpg') top right">
			<p class="copyright">&copy; <?php echo date( "Y" ); echo " "; ?>Ivan Ivanov</p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
