<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package lanyonwp
 */
?>

	</div><!-- #content -->
	
	<footer class="container">
		<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'lanyonwp' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'lanyonwp' ), 'WordPress' ); ?></a>
		<span> | </span>
		<?php printf( esc_html__( 'Theme: %1$s', 'lanyonwp' ), '<a href="https://github.com/nagoldivad/lanyonwp" rel="designer">lanyonwp</a>' ); ?>
	</footer><!-- .container -->

</div><!-- #page -->

<!-- for the lanyon sidebar -->
<label for="sidebar-checkbox" class="sidebar-toggle"></label>

<?php wp_footer(); ?>

</body>
</html>
