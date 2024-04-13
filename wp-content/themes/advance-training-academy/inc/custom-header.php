<?php
/**
 * @package Advance Training Academy
 * @subpackage advance_training_academy
 * @since advance-training-academy 1.0
 * Setup the WordPress core custom header feature.
 *
 * @uses advance_training_academy_header_style()
*/

function advance_training_academy_custom_header_setup() {

	add_theme_support( 'custom-header', apply_filters( 'advance_training_academy_custom_header_args', array(
		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1400,
		'height'                 => 115,
		'flex-width'         	=> true,
        'flex-height'        	=> true,
		'wp-head-callback'       => 'advance_training_academy_header_style',
	) ) );
}

add_action( 'after_setup_theme', 'advance_training_academy_custom_header_setup' );

if ( ! function_exists( 'advance_training_academy_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see advance_training_academy_custom_header_setup().
 */
add_action( 'wp_enqueue_scripts', 'advance_training_academy_header_style' );
function advance_training_academy_header_style() {
	//Check if user has defined any header image.
	if ( get_header_image() ) :
	$advance_training_academy_custom_css = "
        .bottom-header{
			background-image:url('".esc_url(get_header_image())."');
			background-position: center top;
			background-size: cover;
		}";
	   	wp_add_inline_style( 'advance-training-academy-basic-style', $advance_training_academy_custom_css );
	endif;
}
endif; // advance_training_academy_header_style