<?php
/**
 * Custom header implementation
 *
 * @link https://codex.wordpress.org/Custom_Headers
 *
 * @package eLearning Education
 * @subpackage elearning_education
 */

function elearning_education_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'elearning_education_custom_header_args', array(
		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1600,
		'height'                 => 400,
		'flex-width'  		     => true,
		'flex-height'            => true,
		'wp-head-callback'       => 'elearning_education_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'elearning_education_custom_header_setup' );

if ( ! function_exists( 'elearning_education_header_style' ) ) :
add_action( 'wp_enqueue_scripts', 'elearning_education_header_style' );
function elearning_education_header_style() {
	if ( get_header_image() ) :
	$elearning_education_custom_css = "
        .headerbox{
			background-image:url('".esc_url(get_header_image())."');
			background-position: center top;
			background-size: cover;
		}";
	   	wp_add_inline_style( 'elearning-education-style', $elearning_education_custom_css );
	endif;
}
endif;
