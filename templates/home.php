<?php
/**
 * Template Name: Home
 *
 * @package Mavis
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>
<div class="container-fluid">
	<div class="left_side">
		<img src="<?php bloginfo('template_directory'); ?>/images/mavis-logo.png" class="left_img">
	</div>
	<div class="right_side" style="background-image: url(<?php the_field('home_product'); ?>);">
	</div>
</div>

<div class="container-fluid">
	<div class="break">
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-sm-offset-2">
				<h1 class="center gray-5"><?php the_field('home_header'); ?></h1>
				<p class="gray-5 center"><?php the_field('home_sell'); ?></p>
				<br>
				<a href="mavis/shop"><button class="button_ghost">SHOP</button></a>
			</div>
		</div>
	</div>  <!-- end of break -->

	<div class="full_bg" style="background-image: url(<?php the_field('bottom_bg'); ?>);">
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-sm-offset-2">
				<p class="inline-b center"><?php the_field('testimonial_text'); ?></p><h1 class="t-right"><?php the_field('testimonial_author'); ?></h1>
			</div>
		</div>
	</div>
</div>

				

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
