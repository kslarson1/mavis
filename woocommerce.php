<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Mavis
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-8">
			<?php woocommerce_content(); ?>
		</div>
		<div class="col-xs-12 col-sm-4">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
