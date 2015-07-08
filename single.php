<?php
/**
 * The template for displaying all single posts.
 *
 * @package lanyonwp
 */

get_header(); ?>

	<div class="container">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

	</div><!-- .container -->

<?php get_footer(); ?>
