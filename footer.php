<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Mavis
 */
?>

	</div><!-- #content -->


<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 col-sm-9">
				
				<?php wp_nav_menu( array( 'menu' => 'Footer Menu') ); ?>

			</div>
			<div class="col-xs-12 col-sm-3 social_media">
				social media
			</div>
		</div>
	</div>
</footer><!-- #colophon -->


</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
