<?php
/**
 * Template Name: About
 *
 * @package Mavis
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

<div id="about">
	<div class="container-fluid">
		<img src="<?php the_field('about_bg'); ?>">
	</div>

	<div class="container-fluid">
		<div class="break2">
			<div class="row">
				<div class="col-xs-12">
					<h1 class="center">Mavis</h1>
					<p class="limited_width"><?php the_field('about_text'); ?></p>
				</div>
			</div>
		</div>

	<div class="break">
		<div class="row">
			<div class="col-xs-12 col-sm-4">
				<p>insert picture</p>
			</div>
			<div class="col-xs-12 col-sm-4">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate culpa laboriosam, consectetur est dignissimos rerum veniam accusantium, laborum deleniti fuga distinctio maiores doloremque corporis. Sed repudiandae iste voluptatum architecto atque.</p>
			</div>
			<div class="col-xs-12 col-sm-4">
				<img class="image_small" src="<?php the_field('about_founder'); ?>">
			</div>
		</div>
	</div>

	</div>
</div>  <!-- end of =about -->
				

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
