<?php
/**
 * @package lanyonwp
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header>
		
		<?php the_title( sprintf( '<h1 class="post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>
		
		<div class="post-date"><?php the_date(); ?> by <?php the_author(); ?></div>
		
		<?php endif; ?>
		
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

	<div class="post-date">
		<?php lanyonwp_entry_footer(); ?>
	</div><!-- close footer -->
	
</article><!-- #post-## -->
