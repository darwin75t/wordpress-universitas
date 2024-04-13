<?php

// Paragraph
$advance_training_academy_paragraph_color = get_theme_mod('advance_training_academy_paragraph_color', '');
$advance_training_academy_paragraph_font_family = get_theme_mod('advance_training_academy_paragraph_font_family', '');
$advance_training_academy_paragraph_font_size = get_theme_mod('advance_training_academy_paragraph_font_size', '');
// "a" tag
$advance_training_academy_atag_color = get_theme_mod('advance_training_academy_atag_color', '');
$advance_training_academy_atag_font_family = get_theme_mod('advance_training_academy_atag_font_family', '');
// "li" tag
$advance_training_academy_li_color = get_theme_mod('advance_training_academy_li_color', '');
$advance_training_academy_li_font_family = get_theme_mod('advance_training_academy_li_font_family', '');
// H1
$advance_training_academy_h1_color = get_theme_mod('advance_training_academy_h1_color', '');
$advance_training_academy_h1_font_family = get_theme_mod('advance_training_academy_h1_font_family', '');
$advance_training_academy_h1_font_size = get_theme_mod('advance_training_academy_h1_font_size', '');
// H2
$advance_training_academy_h2_color = get_theme_mod('advance_training_academy_h2_color', '');
$advance_training_academy_h2_font_family = get_theme_mod('advance_training_academy_h2_font_family', '');
$advance_training_academy_h2_font_size = get_theme_mod('advance_training_academy_h2_font_size', '');
// H3
$advance_training_academy_h3_color = get_theme_mod('advance_training_academy_h3_color', '');
$advance_training_academy_h3_font_family = get_theme_mod('advance_training_academy_h3_font_family', '');
$advance_training_academy_h3_font_size = get_theme_mod('advance_training_academy_h3_font_size', '');
// H4
$advance_training_academy_h4_color = get_theme_mod('advance_training_academy_h4_color', '');
$advance_training_academy_h4_font_family = get_theme_mod('advance_training_academy_h4_font_family', '');
$advance_training_academy_h4_font_size = get_theme_mod('advance_training_academy_h4_font_size', '');
// H5
$advance_training_academy_h5_color = get_theme_mod('advance_training_academy_h5_color', '');
$advance_training_academy_h5_font_family = get_theme_mod('advance_training_academy_h5_font_family', '');
$advance_training_academy_h5_font_size = get_theme_mod('advance_training_academy_h5_font_size', '');
// H6
$advance_training_academy_h6_color = get_theme_mod('advance_training_academy_h6_color', '');
$advance_training_academy_h6_font_family = get_theme_mod('advance_training_academy_h6_font_family', '');
$advance_training_academy_h6_font_size = get_theme_mod('advance_training_academy_h6_font_size', '');

$advance_training_academy_typo_css ='
	p,span{
	    color:'.esc_html($advance_training_academy_paragraph_color).'!important;
	    font-family: '.esc_html($advance_training_academy_paragraph_font_family).';
	    font-size: '.esc_html($advance_training_academy_paragraph_font_size).';
	}
	a{
	    color:'.esc_html($advance_training_academy_atag_color).'!important;
	    font-family: '.esc_html($advance_training_academy_atag_font_family).';
	}
	li{
	    color:'.esc_html($advance_training_academy_li_color).'!important;
	    font-family: '.esc_html($advance_training_academy_li_font_family).';
	}
	h1{
	    color:'.esc_html($advance_training_academy_h1_color).'!important;
	    font-family: '.esc_html($advance_training_academy_h1_font_family).'!important;
	    font-size: '.esc_html($advance_training_academy_h1_font_size).'!important;
	}
	h2{
	    color:'.esc_html($advance_training_academy_h2_color).'!important;
	    font-family: '.esc_html($advance_training_academy_h2_font_family).'!important;
	    font-size: '.esc_html($advance_training_academy_h2_font_size).'!important;
	}
	h3{
	    color:'.esc_html($advance_training_academy_h3_color).'!important;
	    font-family: '.esc_html($advance_training_academy_h3_font_family).'!important;
	    font-size: '.esc_html($advance_training_academy_h3_font_size).'!important;
	}
	h4{
	    color:'.esc_html($advance_training_academy_h4_color).'!important;
	    font-family: '.esc_html($advance_training_academy_h4_font_family).'!important;
	    font-size: '.esc_html($advance_training_academy_h4_font_size).'!important;
	}
	h5{
	    color:'.esc_html($advance_training_academy_h5_color).'!important;
	    font-family: '.esc_html($advance_training_academy_h5_font_family).'!important;
	    font-size: '.esc_html($advance_training_academy_h5_font_size).'!important;
	}
	h6{
	    color:'.esc_html($advance_training_academy_h6_color).'!important;
	    font-family: '.esc_html($advance_training_academy_h6_font_family).'!important;
	    font-size: '.esc_html($advance_training_academy_h6_font_size).'!important;
	}
';