<?php
/**
 * lanyonwp Theme Customizer
 *
 * @package lanyonwp
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function lanyonwp_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	
// FROM: http://buildwpyourself.com/building-theme-color-options-customizer/
// add color picker setting
$wp_customize->add_setting( 'lanyonwp_theme_color', array(
	'default' => 'Black',
	'capability' => 'edit_theme_options',
	'type' => 'theme_mod',
	'transport' => 'refresh', // or postMessage
    'sanitize_callback' => '',
    'sanitize_js_callback' => '' // Basically to_json.
) );
// add color select
$wp_customize->add_control( 'lanyonwp_theme_color', array(
	'type' => 'select',
	'priority' => '1',
	'label' => 'Theme Color',
	'section' => 'colors',
	'settings' => 'lanyonwp_theme_color',
	'choices' => array(
		'Black' => 'Black',
		'Red' => 'Red',
		'Orange' => 'Orange',
		'Yellow' => 'Yellow',
		'Green' => 'Green',
		'Cyan' => 'Cyan',
		'Blue' => 'Blue',
		'Magenta' => 'Magenta',
		'Brown' => 'Brown'
	)
) );

}
add_action( 'customize_register', 'lanyonwp_customize_register' );


// FROM: http://buildwpyourself.com/building-theme-color-options-customizer/
function lanyonwp_body_class_colors( $classes ) {
	if ( get_theme_mod( 'lanyonwp_theme_color' ) == 'Black' ) :		
		$classes[] = '';		
	elseif ( get_theme_mod( 'lanyonwp_theme_color' ) == 'Red' ) :		
		$classes[] = 'theme-base-08';		
	elseif ( get_theme_mod( 'lanyonwp_theme_color' ) == 'Orange' ) :		
		$classes[] = 'theme-base-09';
	elseif ( get_theme_mod( 'lanyonwp_theme_color' ) == 'Yellow' ) :		
		$classes[] = 'theme-base-0a';
	elseif ( get_theme_mod( 'lanyonwp_theme_color' ) == 'Green' ) :		
		$classes[] = 'theme-base-0b';
	elseif ( get_theme_mod( 'lanyonwp_theme_color' ) == 'Cyan' ) :		
		$classes[] = 'theme-base-0c';
	elseif ( get_theme_mod( 'lanyonwp_theme_color' ) == 'Blue' ) :		
		$classes[] = 'theme-base-0d';
	elseif ( get_theme_mod( 'lanyonwp_theme_color' ) == 'Magenta' ) :		
		$classes[] = 'theme-base-0e';
	elseif ( get_theme_mod( 'lanyonwp_theme_color' ) == 'Brown' ) :		
		$classes[] = 'theme-base-0f';		
	endif;
		
	return $classes;
}
add_filter( 'body_class', 'lanyonwp_body_class_colors');


/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function lanyonwp_customize_preview_js() {
	wp_enqueue_script( 'lanyonwp_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'lanyonwp_customize_preview_js' );
