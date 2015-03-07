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
		left side
	</div>
	<div class="right_side" style="background-image: url(<?php the_field('home_product'); ?>);">
	</div>
</div>

<div class="container-fluid">
	<div class="break">
		<div class="row">
			<div class="col-xs-12">
				<h3 class="center">header here</h3>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-sm-5 col-sm-offset-1">		
				<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas sed diam eget risus varius blandit sit amet non magna. Aenean eu leo quam.</p>
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
