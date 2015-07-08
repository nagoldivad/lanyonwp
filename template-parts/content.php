<?php
/**
 * @package lanyonwp
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header>
		
		<?php the_title( sprintf( '<h1 class="post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>
		
		<?php lanyonwp_posted_on(); ?>
		
		<?php endif; ?>
		
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'lanyonwp' ), array( 'span' => array() ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'lanyonwp' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<div class="post-date">
		<?php /*lanyonwp_entry_footer();*/ ?>
	</div><!-- close footer -->
	
</article><!-- #post-## -->
