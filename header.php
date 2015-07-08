<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package lanyonwp
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Enable responsiveness on mobile devices-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	
	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>

<!-- Target for toggling the sidebar `.sidebar-checkbox` is for regular
     styles, `#sidebar-checkbox` for behavior. -->
<input type="checkbox" class="sidebar-checkbox" id="sidebar-checkbox">

<!-- Toggleable sidebar -->
<div class="sidebar" id="sidebar">
  
	<div class="sidebar-item">
		<?php
			if ( ! is_active_sidebar( 'sidebar-1' ) ) {
				return;
			} ?>
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div>
  
</div><!-- .sidebar #sidebar -->


<!-- Wrap is the content to shift when toggling the sidebar. We wrap the
         content to avoid any CSS collisions with our real content. -->
<div id="page" class="hfeed site wrap">

	<!-- Header / masthead -->
	<header class="masthead" role="banner">
		<div class="container">
			<h3 class="masthead-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				&nbsp;
				<small class="site-description"><?php bloginfo( 'description' ); ?></small>
			</h3>
		</div><!-- .container -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
