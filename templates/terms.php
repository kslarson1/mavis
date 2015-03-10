<?php
/**
 * Template Name: Terms
 *
 * @package Mavis
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>
	
<div class="container-fluid">
<div id="terms">

	<div class="row">
		<div class="col-xs-12">
			<h2><?php the_field('customer_service_header'); ?></h2>
		</div>
		<div class="col-xs-12 col-sm-6 col-sm-offset-3">
			<p><?php the_field('customer_service_text'); ?></p>
		</div>
	</div>

	<hr>

	<div class="row">
		<div class="col-xs-12">
			<h2><?php the_field('privacy_notice_header'); ?></h2>
		</div>
		<div class="col-xs-12 col-sm-6 col-sm-offset-3">
			<p><?php the_field('privacy_notice_text'); ?></p>
		</div>
	</div>

	<hr>

	<div class="row">
		<div class="col-xs-12">
			<h2><?php the_field('returns_header'); ?></h2>
		</div>
		<div class="col-xs-12 col-sm-6 col-sm-offset-3">
			<p><?php the_field('returns_text'); ?></p>
		</div>
	</div>

</div>


</div>  <!-- end of =shipping -->
				

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
