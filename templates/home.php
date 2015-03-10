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
			<div class="col-xs-12">
				<h1 class="center"><?php the_field('home_header'); ?></h3>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-sm-5 col-sm-offset-1">		
				<p><?php the_field('home_sell'); ?></p>
			</div>
			<div class="col-xs-12 col-sm-5">
				<a href="mavis/shop"><button class="button_raised">SHOP</button></a>
			</div>
		</div>  <!-- end of row -->
	</div>  <!-- end of break -->

	<div class="full_bg" style="background-image: url(<?php the_field('bottom_bg'); ?>);">
		<div class="row">
			<div class="col-xs-12 center">
				<h1>FRESH INGREDIENTS</h1>
			</div>
		</div>
	</div>
</div>

				

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
