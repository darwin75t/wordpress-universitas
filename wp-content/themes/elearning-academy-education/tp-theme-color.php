<?php

	$elearning_education_tp_theme_css = "";


//======================= slider Content layout ===================== //

$elearning_academy_education_slider_content_layout = get_theme_mod('elearning_academy_education_slider_content_layout', 'RIGHT-ALIGN'); 
$elearning_education_tp_theme_css .= '#slider .carousel-caption{';
switch ($elearning_academy_education_slider_content_layout) {
    case 'LEFT-ALIGN':
        $elearning_education_tp_theme_css .= 'text-align:left; right: 45%; left: 15%';
        break;
    case 'CENTER-ALIGN':
        $elearning_education_tp_theme_css .= 'text-align:center; left: 25%; right: 25%';
        break;
    case 'RIGHT-ALIGN':
        $elearning_education_tp_theme_css .= 'text-align:right; left: 45%; right: 15%';
        break;
    default:
        $elearning_education_tp_theme_css .= 'text-align:left; right: 45%; left: 15%';
        break;
}
$elearning_education_tp_theme_css .= '}';