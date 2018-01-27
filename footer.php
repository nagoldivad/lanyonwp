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
	
	<footer>
        <div class="footer-content container">
                Proudly powered by <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'lanyonwp' ) ); ?>"><?php printf( esc_html__( '%s', 'lanyonwp' ), 'WordPress' ); ?></a>
                <span> | </span>
                <?php printf( esc_html__( '%1$s', 'lanyonwp' ), '<a href="https://github.com/nagoldivad/lanyonwp" rel="designer">lanyonwp</a> theme' ); ?>
        </div>
	</footer><!-- .container -->

</div><!-- #page -->

<!-- for the lanyon sidebar -->
<label for="sidebar-checkbox" class="sidebar-toggle"></label>

<?php wp_footer(); ?>

</body>
</html>
