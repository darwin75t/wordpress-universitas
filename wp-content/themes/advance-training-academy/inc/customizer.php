<?php
/**
 * Advance Training Academy Theme Customizer
 *
 * @package Advance Training Academy
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function advance_training_academy_customize_register($wp_customize) {

	load_template( trailingslashit( get_template_directory() ) . '/inc/icon-changer.php' );

	//add home page setting pannel
	$wp_customize->add_panel('advance_training_academy_panel_id', array(
		'priority'       => 10,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => __('Theme Settings', 'advance-training-academy'),
		'description'    => __('Description of what this panel does.', 'advance-training-academy'),
	));	

	// font array
	$advance_training_academy_font_array = array(
        '' => 'No Fonts',
        'Abril Fatface' => 'Abril Fatface',
        'Acme' => 'Acme',
        'Anton' => 'Anton',
        'Architects Daughter' => 'Architects Daughter',
        'Arimo' => 'Arimo',
        'Arsenal' => 'Arsenal', 
        'Arvo' => 'Arvo',
        'Alegreya' => 'Alegreya',
        'Alfa Slab One' => 'Alfa Slab One',
        'Averia Serif Libre' => 'Averia Serif Libre',
        'Bangers' => 'Bangers', 
        'Boogaloo' => 'Boogaloo',
        'Bad Script' => 'Bad Script',
        'Bitter' => 'Bitter',
        'Bree Serif' => 'Bree Serif',
        'BenchNine' => 'BenchNine', 
        'Cabin' => 'Cabin', 
        'Cardo' => 'Cardo',
        'Courgette' => 'Courgette',
        'Cherry Swash' => 'Cherry Swash',
        'Cormorant Garamond' => 'Cormorant Garamond',
        'Crimson Text' => 'Crimson Text',
        'Cuprum' => 'Cuprum', 
        'Cookie' => 'Cookie', 
        'Chewy' => 'Chewy', 
        'Days One' => 'Days One', 
        'Dosis' => 'Dosis',
        'Droid Sans' => 'Droid Sans',
        'Economica' => 'Economica',
        'Fredoka One' => 'Fredoka One',
        'Fjalla One' => 'Fjalla One',
        'Francois One' => 'Francois One',
        'Frank Ruhl Libre' => 'Frank Ruhl Libre',
        'Gloria Hallelujah' => 'Gloria Hallelujah',
        'Great Vibes' => 'Great Vibes',
        'Handlee' => 'Handlee', 
        'Hammersmith One' => 'Hammersmith One',
        'Inconsolata' => 'Inconsolata', 
        'Indie Flower' => 'Indie Flower', 
        'IM Fell English SC' => 'IM Fell English SC', 
        'Julius Sans One' => 'Julius Sans One',
        'Josefin Slab' => 'Josefin Slab', 
        'Josefin Sans' => 'Josefin Sans', 
        'Kanit' => 'Kanit', 
        'Lobster' => 'Lobster', 
        'Lato' => 'Lato',
        'Lora' => 'Lora', 
        'Libre Baskerville' =>'Libre Baskerville',
        'Lobster Two' => 'Lobster Two',
        'Merriweather' =>'Merriweather', 
        'Monda' => 'Monda',
        'Montserrat' => 'Montserrat',
        'Muli' => 'Muli', 
        'Marck Script' => 'Marck Script',
        'Noto Serif' => 'Noto Serif',
        'Open Sans' => 'Open Sans', 
        'Overpass' => 'Overpass',
        'Overpass Mono' => 'Overpass Mono',
        'Oxygen' => 'Oxygen', 
        'Orbitron' => 'Orbitron', 
        'Patua One' => 'Patua One', 
        'Pacifico' => 'Pacifico',
        'Padauk' => 'Padauk', 
        'Playball' => 'Playball',
        'Playfair Display' => 'Playfair Display', 
        'PT Sans' => 'PT Sans',
        'Philosopher' => 'Philosopher',
        'Permanent Marker' => 'Permanent Marker',
        'Poiret One' => 'Poiret One', 
        'Quicksand' => 'Quicksand', 
        'Quattrocento Sans' => 'Quattrocento Sans', 
        'Raleway' => 'Raleway', 
        'Rubik' => 'Rubik', 
        'Rokkitt' => 'Rokkitt', 
        'Russo One' => 'Russo One', 
        'Righteous' => 'Righteous', 
        'Slabo' => 'Slabo', 
        'Source Sans Pro' => 'Source Sans Pro', 
        'Shadows Into Light Two' =>'Shadows Into Light Two', 
        'Shadows Into Light' => 'Shadows Into Light', 
        'Sacramento' => 'Sacramento', 
        'Shrikhand' => 'Shrikhand', 
        'Tangerine' => 'Tangerine',
        'Ubuntu' => 'Ubuntu', 
        'VT323' => 'VT323', 
        'Varela Round' => 'Varela Round', 
        'Vampiro One' => 'Vampiro One',
        'Vollkorn' => 'Vollkorn',
        'Volkhov' => 'Volkhov', 
        'Yanone Kaffeesatz' => 'Yanone Kaffeesatz',
    );

	//Typography
	$wp_customize->add_section( 'advance_training_academy_typography', array(
    	'title'      => __( 'Typography', 'advance-training-academy' ),
		'priority'   => 30,
		'panel' => 'advance_training_academy_panel_id'
	) );
	
	// This is Paragraph Color picker setting
	$wp_customize->add_setting( 'advance_training_academy_paragraph_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_training_academy_paragraph_color', array(
		'label' => __('Paragraph Color', 'advance-training-academy'),
		'section' => 'advance_training_academy_typography',
		'settings' => 'advance_training_academy_paragraph_color',
	)));

	//This is Paragraph FontFamily picker setting
	$wp_customize->add_setting('advance_training_academy_paragraph_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_training_academy_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_training_academy_paragraph_font_family', array(
	    'section'  => 'advance_training_academy_typography',
	    'label'    => __( 'Paragraph Fonts','advance-training-academy'),
	    'type'     => 'select',
	    'choices'  => $advance_training_academy_font_array,
	));

	$wp_customize->add_setting('advance_training_academy_paragraph_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_training_academy_paragraph_font_size',array(
		'label'	=> __('Paragraph Font Size','advance-training-academy'),
		'section'	=> 'advance_training_academy_typography',
		'setting'	=> 'advance_training_academy_paragraph_font_size',
		'type'	=> 'text'
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'advance_training_academy_atag_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_training_academy_atag_color', array(
		'label' => __('"a" Tag Color', 'advance-training-academy'),
		'section' => 'advance_training_academy_typography',
		'settings' => 'advance_training_academy_atag_color',
	)));

	//This is "a" Tag FontFamily picker setting
	$wp_customize->add_setting('advance_training_academy_atag_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_training_academy_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_training_academy_atag_font_family', array(
	    'section'  => 'advance_training_academy_typography',
	    'label'    => __( '"a" Tag Fonts','advance-training-academy'),
	    'type'     => 'select',
	    'choices'  => $advance_training_academy_font_array,
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'advance_training_academy_li_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_training_academy_li_color', array(
		'label' => __('"li" Tag Color', 'advance-training-academy'),
		'section' => 'advance_training_academy_typography',
		'settings' => 'advance_training_academy_li_color',
	)));

	//This is "li" Tag FontFamily picker setting
	$wp_customize->add_setting('advance_training_academy_li_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_training_academy_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_training_academy_li_font_family', array(
	    'section'  => 'advance_training_academy_typography',
	    'label'    => __( '"li" Tag Fonts','advance-training-academy'),
	    'type'     => 'select',
	    'choices'  => $advance_training_academy_font_array,
	));

	// This is H1 Color picker setting
	$wp_customize->add_setting( 'advance_training_academy_h1_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_training_academy_h1_color', array(
		'label' => __('H1 Color', 'advance-training-academy'),
		'section' => 'advance_training_academy_typography',
		'settings' => 'advance_training_academy_h1_color',
	)));

	//This is H1 FontFamily picker setting
	$wp_customize->add_setting('advance_training_academy_h1_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_training_academy_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_training_academy_h1_font_family', array(
	    'section'  => 'advance_training_academy_typography',
	    'label'    => __( 'H1 Fonts','advance-training-academy'),
	    'type'     => 'select',
	    'choices'  => $advance_training_academy_font_array,
	));

	//This is H1 FontSize setting
	$wp_customize->add_setting('advance_training_academy_h1_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_training_academy_h1_font_size',array(
		'label'	=> __('H1 Font Size','advance-training-academy'),
		'section'	=> 'advance_training_academy_typography',
		'setting'	=> 'advance_training_academy_h1_font_size',
		'type'	=> 'text'
	));

	// This is H2 Color picker setting
	$wp_customize->add_setting( 'advance_training_academy_h2_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_training_academy_h2_color', array(
		'label' => __('h2 Color', 'advance-training-academy'),
		'section' => 'advance_training_academy_typography',
		'settings' => 'advance_training_academy_h2_color',
	)));

	//This is H2 FontFamily picker setting
	$wp_customize->add_setting('advance_training_academy_h2_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_training_academy_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_training_academy_h2_font_family', array(
	    'section'  => 'advance_training_academy_typography',
	    'label'    => __( 'h2 Fonts','advance-training-academy'),
	    'type'     => 'select',
	    'choices'  => $advance_training_academy_font_array,
	));

	//This is H2 FontSize setting
	$wp_customize->add_setting('advance_training_academy_h2_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_training_academy_h2_font_size',array(
		'label'	=> __('h2 Font Size','advance-training-academy'),
		'section'	=> 'advance_training_academy_typography',
		'setting'	=> 'advance_training_academy_h2_font_size',
		'type'	=> 'text'
	));

	// This is H3 Color picker setting
	$wp_customize->add_setting( 'advance_training_academy_h3_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_training_academy_h3_color', array(
		'label' => __('h3 Color', 'advance-training-academy'),
		'section' => 'advance_training_academy_typography',
		'settings' => 'advance_training_academy_h3_color',
	)));

	//This is H3 FontFamily picker setting
	$wp_customize->add_setting('advance_training_academy_h3_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_training_academy_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_training_academy_h3_font_family', array(
	    'section'  => 'advance_training_academy_typography',
	    'label'    => __( 'h3 Fonts','advance-training-academy'),
	    'type'     => 'select',
	    'choices'  => $advance_training_academy_font_array,
	));

	//This is H3 FontSize setting
	$wp_customize->add_setting('advance_training_academy_h3_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_training_academy_h3_font_size',array(
		'label'	=> __('h3 Font Size','advance-training-academy'),
		'section'	=> 'advance_training_academy_typography',
		'setting'	=> 'advance_training_academy_h3_font_size',
		'type'	=> 'text'
	));

	// This is H4 Color picker setting
	$wp_customize->add_setting( 'advance_training_academy_h4_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_training_academy_h4_color', array(
		'label' => __('h4 Color', 'advance-training-academy'),
		'section' => 'advance_training_academy_typography',
		'settings' => 'advance_training_academy_h4_color',
	)));

	//This is H4 FontFamily picker setting
	$wp_customize->add_setting('advance_training_academy_h4_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_training_academy_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_training_academy_h4_font_family', array(
	    'section'  => 'advance_training_academy_typography',
	    'label'    => __( 'h4 Fonts','advance-training-academy'),
	    'type'     => 'select',
	    'choices'  => $advance_training_academy_font_array,
	));

	//This is H4 FontSize setting
	$wp_customize->add_setting('advance_training_academy_h4_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_training_academy_h4_font_size',array(
		'label'	=> __('h4 Font Size','advance-training-academy'),
		'section'	=> 'advance_training_academy_typography',
		'setting'	=> 'advance_training_academy_h4_font_size',
		'type'	=> 'text'
	));

	// This is H5 Color picker setting
	$wp_customize->add_setting( 'advance_training_academy_h5_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_training_academy_h5_color', array(
		'label' => __('h5 Color', 'advance-training-academy'),
		'section' => 'advance_training_academy_typography',
		'settings' => 'advance_training_academy_h5_color',
	)));

	//This is H5 FontFamily picker setting
	$wp_customize->add_setting('advance_training_academy_h5_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_training_academy_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_training_academy_h5_font_family', array(
	    'section'  => 'advance_training_academy_typography',
	    'label'    => __( 'h5 Fonts','advance-training-academy'),
	    'type'     => 'select',
	    'choices'  => $advance_training_academy_font_array,
	));

	//This is H5 FontSize setting
	$wp_customize->add_setting('advance_training_academy_h5_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_training_academy_h5_font_size',array(
		'label'	=> __('h5 Font Size','advance-training-academy'),
		'section'	=> 'advance_training_academy_typography',
		'setting'	=> 'advance_training_academy_h5_font_size',
		'type'	=> 'text'
	));

	// This is H6 Color picker setting
	$wp_customize->add_setting( 'advance_training_academy_h6_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_training_academy_h6_color', array(
		'label' => __('h6 Color', 'advance-training-academy'),
		'section' => 'advance_training_academy_typography',
		'settings' => 'advance_training_academy_h6_color',
	)));

	//This is H6 FontFamily picker setting
	$wp_customize->add_setting('advance_training_academy_h6_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_training_academy_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_training_academy_h6_font_family', array(
	    'section'  => 'advance_training_academy_typography',
	    'label'    => __( 'h6 Fonts','advance-training-academy'),
	    'type'     => 'select',
	    'choices'  => $advance_training_academy_font_array,
	));

	//This is H6 FontSize setting
	$wp_customize->add_setting('advance_training_academy_h6_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_training_academy_h6_font_size',array(
		'label'	=> __('h6 Font Size','advance-training-academy'),
		'section'	=> 'advance_training_academy_typography',
		'setting'	=> 'advance_training_academy_h6_font_size',
		'type'	=> 'text'
	));

  	$wp_customize->add_setting('advance_training_academy_background_skin_mode',array(
        'default' => 'Transparent Background',
        'sanitize_callback' => 'advance_training_academy_sanitize_choices'
	));
	$wp_customize->add_control('advance_training_academy_background_skin_mode',array(
        'type' => 'select',
        'label' => __('Background Type','advance-training-academy'),
        'section' => 'background_image',
        'choices' => array(
            'With Background' => __('With Background','advance-training-academy'),
            'Transparent Background' => __('Transparent Background','advance-training-academy'),
        ),
	) );

	// woocommerce section

	$wp_customize->add_section('advance_training_academy_woocommerce_settings', array(
		'title'    => __('WooCommerce Settings', 'advance-training-academy'),
		'priority' => null,
		'panel'    => 'woocommerce',
	));

	$wp_customize->add_setting( 'advance_training_academy_shop_page_sidebar',array(
		'default' => true,
		'sanitize_callback'	=> 'advance_training_academy_sanitize_checkbox'
    ) );
    $wp_customize->add_control('advance_training_academy_shop_page_sidebar',array(
    	'type' => 'checkbox',
       	'label' => __('Show / Hide Shop Page Sidebar','advance-training-academy'),
		'section' => 'advance_training_academy_woocommerce_settings'
    ));

	$wp_customize->add_setting( 'advance_training_academy_wocommerce_single_page_sidebar',array(
		'default' => true,
		'sanitize_callback'	=> 'advance_training_academy_sanitize_checkbox'
    ) );
    $wp_customize->add_control('advance_training_academy_wocommerce_single_page_sidebar',array(
    	'type' => 'checkbox',
       	'label' => __('Show / Hide Single Product Page Sidebar','advance-training-academy'),
		'section' => 'advance_training_academy_woocommerce_settings'
    ));

	$wp_customize->add_setting('advance_training_academy_show_related_products',array(
       'default' => true,
       'sanitize_callback'	=> 'advance_training_academy_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_training_academy_show_related_products',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Related Product','advance-training-academy'),
       'section' => 'advance_training_academy_woocommerce_settings',
    ));

	$wp_customize->add_setting('advance_training_academy_show_wooproducts_border',array(
       'default' => false,
       'sanitize_callback'	=> 'advance_training_academy_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_training_academy_show_wooproducts_border',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Product Border','advance-training-academy'),
       'section' => 'advance_training_academy_woocommerce_settings',
    ));

    $wp_customize->add_setting( 'advance_training_academy_wooproducts_per_columns' , array(
		'default'           => 3,
		'transport'         => 'refresh',
		'sanitize_callback' => 'advance_training_academy_sanitize_choices',
	) );
	$wp_customize->add_control( 'advance_training_academy_wooproducts_per_columns', array(
		'label'    => __( 'Display Product Per Columns', 'advance-training-academy' ),
		'section'  => 'advance_training_academy_woocommerce_settings',
		'type'     => 'select',
		'choices'  => array(
			'2' => '2',
			'3' => '3',
			'4' => '4',
			'5' => '5',
		),
	)  );

	$wp_customize->add_setting('advance_training_academy_wooproducts_per_page',array(
		'default'	=> 9,
		'sanitize_callback'	=> 'advance_training_academy_sanitize_float',
	));	
	$wp_customize->add_control('advance_training_academy_wooproducts_per_page',array(
		'label'	=> __('Display Product Per Page','advance-training-academy'),
		'section'	=> 'advance_training_academy_woocommerce_settings',
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'advance_training_academy_top_bottom_wooproducts_padding',array(
		'default' => 0,
		'sanitize_callback'	=> 'advance_training_academy_sanitize_float',
	));
	$wp_customize->add_control( 'advance_training_academy_top_bottom_wooproducts_padding',	array(
		'label' => esc_html__( 'Top Bottom Product Padding','advance-training-academy' ),
		'section' => 'advance_training_academy_woocommerce_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'advance_training_academy_left_right_wooproducts_padding',array(
		'default' => 0,
		'sanitize_callback'	=> 'advance_training_academy_sanitize_float',
	));
	$wp_customize->add_control( 'advance_training_academy_left_right_wooproducts_padding',	array(
		'label' => esc_html__( 'Right Left Product Padding','advance-training-academy' ),
		'section' => 'advance_training_academy_woocommerce_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'advance_training_academy_wooproducts_border_radius',array(
		'default' => 0,
		'sanitize_callback'	=> 'advance_training_academy_sanitize_number_range',
	));
	$wp_customize->add_control('advance_training_academy_wooproducts_border_radius',array(
		'label' => esc_html__( 'Product Border Radius','advance-training-academy' ),
		'section' => 'advance_training_academy_woocommerce_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type' => 'range'
	));

	$wp_customize->add_setting( 'advance_training_academy_wooproducts_box_shadow',array(
		'default' => 0,
		'sanitize_callback'	=> 'advance_training_academy_sanitize_number_range',
	));
	$wp_customize->add_control('advance_training_academy_wooproducts_box_shadow',array(
		'label' => esc_html__( 'Product Box Shadow','advance-training-academy' ),
		'section' => 'advance_training_academy_woocommerce_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'range'
	));

	$wp_customize->add_setting('advance_training_academy_products_navigation',array(
       'default' => 'Yes',
       'sanitize_callback'	=> 'advance_training_academy_sanitize_choices'
    ));
    $wp_customize->add_control('advance_training_academy_products_navigation',array(
       'type' => 'radio',
       'label' => __('Woocommerce Products Navigation','advance-training-academy'),
       'choices' => array(
            'Yes' => __('Yes','advance-training-academy'),
            'No' => __('No','advance-training-academy'),
        ),
       'section' => 'advance_training_academy_woocommerce_settings',
    ));

	$wp_customize->add_setting( 'advance_training_academy_top_bottom_product_button_padding',array(
		'default' => 10,
		'sanitize_callback'	=> 'advance_training_academy_sanitize_float',
	));
	$wp_customize->add_control('advance_training_academy_top_bottom_product_button_padding',	array(
		'label' => esc_html__( 'Product Button Top Bottom Padding','advance-training-academy' ),
		'section' => 'advance_training_academy_woocommerce_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number',
	));

	$wp_customize->add_setting( 'advance_training_academy_left_right_product_button_padding',array(
		'default' => 16,
		'sanitize_callback'	=> 'advance_training_academy_sanitize_float',
	));
	$wp_customize->add_control('advance_training_academy_left_right_product_button_padding',array(
		'label' => esc_html__( 'Product Button Right Left Padding','advance-training-academy' ),
		'section' => 'advance_training_academy_woocommerce_settings',
		'type'		=> 'number',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'advance_training_academy_product_button_border_radius',array(
		'default' => 0,
		'sanitize_callback'	=> 'advance_training_academy_sanitize_number_range',
	));
	$wp_customize->add_control('advance_training_academy_product_button_border_radius',array(
		'label' => esc_html__( 'Product Button Border Radius','advance-training-academy' ),
		'section' => 'advance_training_academy_woocommerce_settings',
		'type'		=> 'range',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('advance_training_academy_align_product_sale',array(
        'default' => 'Right',
        'sanitize_callback' => 'advance_training_academy_sanitize_choices'
	));
	$wp_customize->add_control('advance_training_academy_align_product_sale',array(
        'type' => 'radio',
        'label' => __('Product Sale Button Alignment','advance-training-academy'),
        'section' => 'advance_training_academy_woocommerce_settings',
        'choices' => array(
            'Right' => __('Right','advance-training-academy'),
            'Left' => __('Left','advance-training-academy'),
        ),
	) );

	$wp_customize->add_setting( 'advance_training_academy_border_radius_product_sale',array(
		'default' => 0,
		'sanitize_callback'	=> 'advance_training_academy_sanitize_float',
	));
	$wp_customize->add_control('advance_training_academy_border_radius_product_sale', array(
        'label'  => __('Product Sale Button Border Radius','advance-training-academy'),
        'section'  => 'advance_training_academy_woocommerce_settings',
        'type'        => 'number',
        'input_attrs' => array(
        	'step'=> 1,
            'min' => 0,
            'max' => 50,
        )
    ) );

	$wp_customize->add_setting('advance_training_academy_product_sale_font_size',array(
		'default'=> 14,
		'sanitize_callback'	=> 'advance_training_academy_sanitize_float'
	));
	$wp_customize->add_control('advance_training_academy_product_sale_font_size',array(
		'label'	=> __('Product Sale Button Font Size','advance-training-academy'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'advance_training_academy_woocommerce_settings',
		'type'=> 'number'
	));

	// Add the Theme Color Option section.
	$wp_customize->add_section( 'advance_training_academy_theme_color_option', array( 
		'panel' => 'advance_training_academy_panel_id', 
		'title' => esc_html__( 'Theme Color Option', 'advance-training-academy' ) )
	);

  	$wp_customize->add_setting( 'advance_training_academy_theme_color_first', array(
	    'default' => '#fdc800',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_training_academy_theme_color_first', array(
  		'label' => __( 'First Color Option', 'advance-training-academy' ),
  		'description' => __('One can change complete theme color on just one click.', 'advance-training-academy'),
	    'section' => 'advance_training_academy_theme_color_option',
	    'settings' => 'advance_training_academy_theme_color_first',
  	)));

  	$wp_customize->add_setting( 'advance_training_academy_theme_color_second', array(
	    'default' => '#002147',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_training_academy_theme_color_second', array(
  		'label' => __( 'Second Color Option', 'advance-training-academy' ),
  		'description' => __('One can change complete theme color on just one click.', 'advance-training-academy'),
	    'section' => 'advance_training_academy_theme_color_option',
	    'settings' => 'advance_training_academy_theme_color_second',
  	)));

	//Header
	$wp_customize->add_section('advance_training_academy_header',array(
		'title'	=> __('Header Section','advance-training-academy'),
		'description'	=> __('Add topbar content','advance-training-academy'),
		'priority'	=> null,
		'panel' => 'advance_training_academy_panel_id',
	));

	$wp_customize->add_setting('advance_training_academy_phone_icon',array(
		'default'	=> 'fas fa-phone',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Advance_Training_Academy_Icon_Changer(
        $wp_customize,'advance_training_academy_phone_icon',array(
		'label'	=> __('Phone Number Icon','advance-training-academy'),
		'transport' => 'refresh',
		'section'	=> 'advance_training_academy_header',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('advance_training_academy_phoneno',array(
		'default'	=> '',
		'sanitize_callback'	=> 'advance_training_academy_sanitize_phone_number',
	));
	$wp_customize->add_control('advance_training_academy_phoneno',array(
		'label'	=> __('Phone Number','advance-training-academy'),
		'section'	=> 'advance_training_academy_header',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('advance_training_academy_mail_icon',array(
		'default'	=> 'fas fa-envelope',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Advance_Training_Academy_Icon_Changer(
        $wp_customize,'advance_training_academy_mail_icon',array(
		'label'	=> __('Mail Address Icon','advance-training-academy'),
		'transport' => 'refresh',
		'section'	=> 'advance_training_academy_header',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('advance_training_academy_mail_address',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_email',
	));
	$wp_customize->add_control('advance_training_academy_mail_address',array(
		'label'	=> __('Mail Address','advance-training-academy'),
		'section'	=> 'advance_training_academy_header',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('advance_training_academy_header_button_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('advance_training_academy_header_button_text',array(
		'label'	=> __('Button Text','advance-training-academy'),
		'section'	=> 'advance_training_academy_header',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('advance_training_academy_header_button_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('advance_training_academy_header_button_url',array(
		'label'	=> __('Button Link','advance-training-academy'),
		'section'	=> 'advance_training_academy_header',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('advance_training_academy_header_premium_info',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_training_academy_header_premium_info',array(
		'type'=> 'hidden',
		'description' => "<p>For more settings and features, please explore our premium theme.</p><a target='_blank' href='". esc_url('https://www.themeshopy.com/themes/education-training-wordpress-theme/') ." '>Upgrade to Pro</a>",
		'section'=> 'advance_training_academy_header'
	));

	// Social Icons
	$wp_customize->add_section('advance_training_academy_social_icons',array(
		'title'	=> __('Social Icons','advance-training-academy'),
		'description'	=> __('Add social icons.','advance-training-academy'),
		'priority'	=> null,
		'panel' => 'advance_training_academy_panel_id',
	));

	$wp_customize->add_setting('advance_training_academy_facebook_icon',array(
		'default'	=> 'fab fa-facebook-f',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Advance_Training_Academy_Icon_Changer(
        $wp_customize,'advance_training_academy_facebook_icon',array(
		'label'	=> __('Facebook Icon','advance-training-academy'),
		'transport' => 'refresh',
		'section'	=> 'advance_training_academy_social_icons',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('advance_training_academy_facebook_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('advance_training_academy_facebook_url',array(
		'label'	=> __('Add Facebook Link','advance-training-academy'),
		'section'	=> 'advance_training_academy_social_icons',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('advance_training_academy_twitter_icon',array(
		'default'	=> 'fab fa-twitter',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Advance_Training_Academy_Icon_Changer(
        $wp_customize,'advance_training_academy_twitter_icon',array(
		'label'	=> __('Twitter Icon','advance-training-academy'),
		'transport' => 'refresh',
		'section'	=> 'advance_training_academy_social_icons',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('advance_training_academy_twitter_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('advance_training_academy_twitter_url',array(
		'label'	=> __('Add Twitter Link','advance-training-academy'),
		'section'	=> 'advance_training_academy_social_icons',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('advance_training_academy_instagram_icon',array(
		'default'	=> 'fab fa-instagram',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Advance_Training_Academy_Icon_Changer(
        $wp_customize,'advance_training_academy_instagram_icon',array(
		'label'	=> __('Instagram Icon','advance-training-academy'),
		'transport' => 'refresh',
		'section'	=> 'advance_training_academy_social_icons',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('advance_training_academy_instagram_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('advance_training_academy_instagram_url',array(
		'label'	=> __('Add Instagram Link','advance-training-academy'),
		'section'	=> 'advance_training_academy_social_icons',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('advance_training_academy_linkedin_icon',array(
		'default'	=> 'fab fa-linkedin',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Advance_Training_Academy_Icon_Changer(
        $wp_customize,'advance_training_academy_linkedin_icon',array(
		'label'	=> __('Linkedin Icon','advance-training-academy'),
		'transport' => 'refresh',
		'section'	=> 'advance_training_academy_social_icons',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('advance_training_academy_linkedin_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('advance_training_academy_linkedin_url',array(
		'label'	=> __('Add Linkedin Link','advance-training-academy'),
		'section'	=> 'advance_training_academy_social_icons',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('advance_training_academy_youtube_icon',array(
		'default'	=> 'fab fa-youtube',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Advance_Training_Academy_Icon_Changer(
        $wp_customize,'advance_training_academy_youtube_icon',array(
		'label'	=> __('Youtube Icon','advance-training-academy'),
		'transport' => 'refresh',
		'section'	=> 'advance_training_academy_social_icons',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('advance_training_academy_youtube_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('advance_training_academy_youtube_url',array(
		'label'	=> __('Add Youtube Link','advance-training-academy'),
		'section'	=> 'advance_training_academy_social_icons',
		'type'	=> 'url'
	));

	// Menu settings
	$wp_customize->add_section('advance_training_academy_menu_settings',array(
		'title'	=> __('Menu Settings','advance-training-academy'),
		'priority'	=> null,
		'panel' => 'advance_training_academy_panel_id',
	));

	$wp_customize->add_setting('advance_training_academy_text_tranform_menu',array(
		'default' => 'Uppercase',
		'sanitize_callback' => 'advance_training_academy_sanitize_choices'
 	));
 	$wp_customize->add_control('advance_training_academy_text_tranform_menu',array(
		'type' => 'radio',
		'label' => __('Menu Text Transform','advance-training-academy'),
		'section' => 'advance_training_academy_menu_settings',
		'choices' => array(
		   'Uppercase' => __('Uppercase','advance-training-academy'),
		   'Lowercase' => __('Lowercase','advance-training-academy'),
		   'Capitalize' => __('Capitalize','advance-training-academy'),
		),
	) );

	$wp_customize->add_setting('advance_training_academy_menus_font_size',array(
		'default'=> 12,
		'sanitize_callback'	=> 'advance_training_academy_sanitize_float'
	));
	$wp_customize->add_control('advance_training_academy_menus_font_size',array(
		'label'	=> __('Menus Font Size','advance-training-academy'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'advance_training_academy_menu_settings',
		'type'=> 'number'
	));

	$wp_customize->add_setting('advance_training_academy_menu_weight',array(
		'default'=> '',
		'sanitize_callback'	=> 'advance_training_academy_sanitize_choices',
	));
	$wp_customize->add_control('advance_training_academy_menu_weight',array(
		'label'	=> __('Menus Font Weight','advance-training-academy'),
		'section'=> 'advance_training_academy_menu_settings',
		'type' => 'select',
		'choices' => array(
            '100' => __('100','advance-training-academy'),
            '200' => __('200','advance-training-academy'),
            '300' => __('300','advance-training-academy'),
            '400' => __('400','advance-training-academy'),
            '500' => __('500','advance-training-academy'),
            '600' => __('600','advance-training-academy'),
            '700' => __('700','advance-training-academy'),
            '800' => __('800','advance-training-academy'),
            '900' => __('900','advance-training-academy'),
        ),
	));

	$wp_customize->add_setting('advance_training_academy_menus_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'advance_training_academy_sanitize_float'
	));
	$wp_customize->add_control('advance_training_academy_menus_padding',array(
		'label'	=> __('Menus Padding','advance-training-academy'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'advance_training_academy_menu_settings',
		'type'=> 'number'
	));

	$wp_customize->add_setting( 'advance_training_academy_menu_color_settings', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_training_academy_menu_color_settings', array(
  		'label' => __('Menu Color', 'advance-training-academy'),
	    'section' => 'advance_training_academy_menu_settings',
	    'settings' => 'advance_training_academy_menu_color_settings',
  	)));

  	$wp_customize->add_setting( 'advance_training_academy_menu_hover_color_settings', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_training_academy_menu_hover_color_settings', array(
  		'label' => __('Menu Hover Color', 'advance-training-academy'),
	    'section' => 'advance_training_academy_menu_settings',
	    'settings' => 'advance_training_academy_menu_hover_color_settings',
  	)));

  	$wp_customize->add_setting( 'advance_training_academy_submenu_color_settings', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_training_academy_submenu_color_settings', array(
  		'label' => __('Sub-menu Color', 'advance-training-academy'),
	    'section' => 'advance_training_academy_menu_settings',
	    'settings' => 'advance_training_academy_submenu_color_settings',
  	)));

  	$wp_customize->add_setting( 'advance_training_academy_submenu_hover_color_settings', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_training_academy_submenu_hover_color_settings', array(
  		'label' => __('Sub-menu Hover Color', 'advance-training-academy'),
	    'section' => 'advance_training_academy_menu_settings',
	    'settings' => 'advance_training_academy_submenu_hover_color_settings',
  	)));

	//404 Page Setting
	$wp_customize->add_section('advance_training_academy_404_page_setting',array(
		'title'	=> __('404 Page','advance-training-academy'),
		'panel' => 'advance_training_academy_panel_id',
	));	

	$wp_customize->add_setting('advance_training_academy_title_404_page',array(
		'default'=> __('404','advance-training-academy'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_training_academy_title_404_page',array(
		'label'	=> __('404 Page Title','advance-training-academy'),
		'section'=> 'advance_training_academy_404_page_setting',
		'type'=> 'text'
	));

	$wp_customize->add_setting('advance_training_academy_content_404_page',array(
		'default'=>  __('We could not find the page you were looking for.','advance-training-academy'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_training_academy_content_404_page',array(
		'label'	=> __('404 Page Content','advance-training-academy'),
		'section'=> 'advance_training_academy_404_page_setting',
		'type'=> 'text'
	));

	$wp_customize->add_setting('advance_training_academy_button_404_page',array(
		'default'=> __('Go Back','advance-training-academy'), 
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_training_academy_button_404_page',array(
		'label'	=> __('404 Page Button','advance-training-academy'),
		'section'=> 'advance_training_academy_404_page_setting',
		'type'=> 'text'
	));

	//Blog Post
	$wp_customize->add_section('advance_training_academy_blog_post',array(
		'title'	=> __('Blog Post Settings','advance-training-academy'),
		'panel' => 'advance_training_academy_panel_id',
	));	

	$wp_customize->add_setting('advance_training_academy_date_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'advance_training_academy_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_training_academy_date_hide',array(
       'type' => 'checkbox',
       'label' => __('Post Date','advance-training-academy'),
       'section' => 'advance_training_academy_blog_post'
    ));

	$wp_customize->add_setting('advance_training_academy_date_icon',array(
		'default'	=> 'fa fa-calendar',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Advance_Training_Academy_Icon_Changer(
        $wp_customize,'advance_training_academy_date_icon',array(
		'label'	=> __('Post Date Icon','advance-training-academy'),
		'transport' => 'refresh',
		'section'	=> 'advance_training_academy_blog_post',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('advance_training_academy_author_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'advance_training_academy_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_training_academy_author_hide',array(
       'type' => 'checkbox',
       'label' => __('Author','advance-training-academy'),
       'section' => 'advance_training_academy_blog_post'
    ));

	$wp_customize->add_setting('advance_training_academy_author_icon',array(
		'default'	=> 'fa fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Advance_Training_Academy_Icon_Changer(
        $wp_customize,'advance_training_academy_author_icon',array(
		'label'	=> __('Author Icon','advance-training-academy'),
		'transport' => 'refresh',
		'section'	=> 'advance_training_academy_blog_post',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('advance_training_academy_comment_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'advance_training_academy_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_training_academy_comment_hide',array(
       'type' => 'checkbox',
       'label' => __('Comments','advance-training-academy'),
       'section' => 'advance_training_academy_blog_post'
    ));

	$wp_customize->add_setting('advance_training_academy_comment_icon',array(
		'default'	=> 'fas fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Advance_Training_Academy_Icon_Changer(
        $wp_customize,'advance_training_academy_comment_icon',array(
		'label'	=> __('Comments Icon','advance-training-academy'),
		'transport' => 'refresh',
		'section'	=> 'advance_training_academy_blog_post',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('advance_training_academy_show_featured_image_post',array(
       'default' => true,
       'sanitize_callback'	=> 'advance_training_academy_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_training_academy_show_featured_image_post',array(
       'type' => 'checkbox',
       'label' => __('Blog Post Image','advance-training-academy'),
       'section' => 'advance_training_academy_blog_post'
    ));
    
    $wp_customize->add_setting( 'advance_training_academy_featured_img_border_radius', array(
		'default'=> 0,
		'sanitize_callback'	=> 'advance_training_academy_sanitize_float',
	) );
	$wp_customize->add_control( 'advance_training_academy_featured_img_border_radius', array(
		'label'       => esc_html__( 'Blog Post Image Border Radius','advance-training-academy' ),
		'section'     => 'advance_training_academy_blog_post',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 100,
		),
	) );

	$wp_customize->add_setting( 'advance_training_academy_featured_img_box_shadow',array(
		'default' => 0,
		'sanitize_callback'    => 'advance_training_academy_sanitize_float',
	));
	$wp_customize->add_control('advance_training_academy_featured_img_box_shadow',array(
		'label' => esc_html__( 'Blog Post Image Shadow','advance-training-academy' ),
		'section' => 'advance_training_academy_blog_post',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type' => 'number'
	));

	$wp_customize->add_setting('advance_training_academy_show_first_caps',array(
        'default' => false,
        'sanitize_callback' => 'advance_training_academy_sanitize_checkbox',
    ));
	$wp_customize->add_control( 'advance_training_academy_show_first_caps',array(
		'label' => esc_html__('First Cap (First Capital Letter)', 'advance-training-academy'),
		'type' => 'checkbox',
		'section' => 'advance_training_academy_blog_post',
	));

	$wp_customize->add_setting('advance_training_academy_blog_post_description_option',array(
    	'default'   => 'Excerpt Content', 
        'sanitize_callback' => 'advance_training_academy_sanitize_choices'
	));
	$wp_customize->add_control('advance_training_academy_blog_post_description_option',array(
        'type' => 'radio',
        'label' => __('Post Description Length','advance-training-academy'),
        'section' => 'advance_training_academy_blog_post',
        'choices' => array(
            'No Content' => __('No Content','advance-training-academy'),
            'Excerpt Content' => __('Excerpt Content','advance-training-academy'),
            'Full Content' => __('Full Content','advance-training-academy'),
        ),
	) );

    $wp_customize->add_setting( 'advance_training_academy_excerpt_number', array(
		'default'              => 20,
		'sanitize_callback'	=> 'advance_training_academy_sanitize_float',
	) );
	$wp_customize->add_control( 'advance_training_academy_excerpt_number', array(
		'label'       => esc_html__( 'Excerpt length','advance-training-academy' ),
		'section'     => 'advance_training_academy_blog_post',
		'type'        => 'number',
		'settings'    => 'advance_training_academy_excerpt_number',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'advance_training_academy_post_suffix_option', array(
		'default'   => __('...','advance-training-academy'), 
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'advance_training_academy_post_suffix_option', array(
		'label'       => esc_html__( 'Post Excerpt Indicator Option','advance-training-academy' ),
		'section'     => 'advance_training_academy_blog_post',
		'type'        => 'text',
		'settings'    => 'advance_training_academy_post_suffix_option',
	) );

	$wp_customize->add_setting( 'advance_training_academy_metabox_separator_blog_post', array(
		'default'   => '|',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'advance_training_academy_metabox_separator_blog_post', array(
		'label'       => esc_html__( 'Meta Box Separator','advance-training-academy' ),
		'input_attrs' => array(
            'placeholder' => __( 'Add Meta Separator. e.g.: "|", "/", etc.', 'advance-training-academy' ),
        ),
		'section'     => 'advance_training_academy_blog_post',
		'type'        => 'text',
		'settings'    => 'advance_training_academy_metabox_separator_blog_post',
	) );

	$wp_customize->add_setting('advance_training_academy_blog_post_pagination',array(
       'default' => true,
       'sanitize_callback'	=> 'advance_training_academy_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_training_academy_blog_post_pagination',array(
       'type' => 'checkbox',
       'label' => __('Pagination in Blog Page','advance-training-academy'),
       'section' => 'advance_training_academy_blog_post'
    ));

	$wp_customize->add_setting( 'advance_training_academy_pagination_settings', array(
        'default'			=> 'Numeric Pagination',
        'sanitize_callback'	=> 'advance_training_academy_sanitize_choices'
    ));
    $wp_customize->add_control( 'advance_training_academy_pagination_settings', array(
        'section' => 'advance_training_academy_blog_post',
        'type' => 'radio',
        'label' => __( 'Post Pagination', 'advance-training-academy' ),
        'choices'		=> array(
            'Numeric Pagination'  => __( 'Numeric Pagination', 'advance-training-academy' ),
            'next-prev' => __( 'Next / Previous', 'advance-training-academy' ),
    )));

    //Button Setting
	$wp_customize->add_section('advance_training_academy_btn_settings',array(
		'title'	=> __('Button Option','advance-training-academy'),
		'panel' => 'advance_training_academy_panel_id',
	));

	$wp_customize->add_setting('advance_training_academy_button_text',array(
		'default'=> __('Read More','advance-training-academy'), 
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_training_academy_button_text',array(
		'label'	=> __('Add Button Text','advance-training-academy'),
		'section'=> 'advance_training_academy_btn_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('advance_training_academy_button_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'advance_training_academy_sanitize_float'
	));
	$wp_customize->add_control('advance_training_academy_button_font_size',array(
		'label'	=> __('Button Font Size','advance-training-academy'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'advance_training_academy_btn_settings',
		'type'=> 'number'
	));

	$wp_customize->add_setting('advance_training_academy_btn_font_weight',array(
		'default'=> '',
		'sanitize_callback'	=> 'advance_training_academy_sanitize_choices',
	));
	$wp_customize->add_control('advance_training_academy_btn_font_weight',array(
		'label'	=> __('Button Font Weight','advance-training-academy'),
		'section'=> 'advance_training_academy_btn_settings',
		'type' => 'select',
		'choices' => array(
            '100' => __('100','advance-training-academy'),
            '200' => __('200','advance-training-academy'),
            '300' => __('300','advance-training-academy'),
            '400' => __('400','advance-training-academy'),
            '500' => __('500','advance-training-academy'),
            '600' => __('600','advance-training-academy'),
            '700' => __('700','advance-training-academy'),
            '800' => __('800','advance-training-academy'),
            '900' => __('900','advance-training-academy'),
        ),
	));

	$wp_customize->add_setting('advance_training_academy_button_text_transform',array(
		'default' => 'Uppercase',
		'sanitize_callback' => 'advance_training_academy_sanitize_choices'
 	));
 	$wp_customize->add_control('advance_training_academy_button_text_transform',array(
		'type' => 'radio',
		'label' => __('Button Text Transform','advance-training-academy'),
		'section' => 'advance_training_academy_btn_settings',
		'choices' => array(
		   'Uppercase' => __('Uppercase','advance-training-academy'),
		   'Lowercase' => __('Lowercase','advance-training-academy'),
		   'Capitalize' => __('Capitalize','advance-training-academy'),
		),
	) );

    //Single Post Setting
	$wp_customize->add_section('advance_training_academy_single_post',array(
		'title'	=> __('Single Post Settings','advance-training-academy'),
		'panel' => 'advance_training_academy_panel_id',
	));

	$wp_customize->add_setting('advance_training_academy_single_post_date_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'advance_training_academy_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_training_academy_single_post_date_hide',array(
       'type' => 'checkbox',
       'label' => __('Single Post Date','advance-training-academy'),
       'section' => 'advance_training_academy_single_post'
    ));

	$wp_customize->add_setting('advance_training_academy_single_post_date_icon',array(
		'default'	=> 'fa fa-calendar',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Advance_Training_Academy_Icon_Changer(
        $wp_customize,'advance_training_academy_single_post_date_icon',array(
		'label'	=> __('Single Post Date Icon','advance-training-academy'),
		'transport' => 'refresh',
		'section'	=> 'advance_training_academy_single_post',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('advance_training_academy_single_post_author_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'advance_training_academy_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_training_academy_single_post_author_hide',array(
       'type' => 'checkbox',
       'label' => __('Single Post Author','advance-training-academy'),
       'section' => 'advance_training_academy_single_post'
    ));

	$wp_customize->add_setting('advance_training_academy_single_post_author_icon',array(
		'default'	=> 'fa fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Advance_Training_Academy_Icon_Changer(
        $wp_customize,'advance_training_academy_single_post_author_icon',array(
		'label'	=> __('Single Post Author Icon','advance-training-academy'),
		'transport' => 'refresh',
		'section'	=> 'advance_training_academy_single_post',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('advance_training_academy_single_post_comment_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'advance_training_academy_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_training_academy_single_post_comment_hide',array(
       'type' => 'checkbox',
       'label' => __('Single Post Comments','advance-training-academy'),
       'section' => 'advance_training_academy_single_post'
    ));

	$wp_customize->add_setting('advance_training_academy_single_post_comment_icon',array(
		'default'	=> 'fas fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Advance_Training_Academy_Icon_Changer(
        $wp_customize,'advance_training_academy_single_post_comment_icon',array(
		'label'	=> __('Single Post Comments Icon','advance-training-academy'),
		'transport' => 'refresh',
		'section'	=> 'advance_training_academy_single_post',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('advance_training_academy_category_show_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'advance_training_academy_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_training_academy_category_show_hide',array(
       'type' => 'checkbox',
       'label' => __('Single Post Category','advance-training-academy'),
       'section' => 'advance_training_academy_single_post'
    ));

	$wp_customize->add_setting('advance_training_academy_tags_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'advance_training_academy_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_training_academy_tags_hide',array(
       'type' => 'checkbox',
       'label' => __('Single Post Tags','advance-training-academy'),
       'section' => 'advance_training_academy_single_post'
    ));

    $wp_customize->add_setting( 'advance_training_academy_post_comment',array(
		'default' => true,
		'sanitize_callback'	=> 'advance_training_academy_sanitize_checkbox'
	) );
	$wp_customize->add_control('advance_training_academy_post_comment',array(
		'type' => 'checkbox',
		'label' => __('Single Post Comment Box','advance-training-academy'),
		'section' => 'advance_training_academy_single_post'
	));

	$wp_customize->add_setting( 'advance_training_academy_single_post_breadcrumb',array(
		'default' => false,
		'transport' => 'refresh',
      	'sanitize_callback'	=> 'advance_training_academy_sanitize_checkbox'
    ) );
    $wp_customize->add_control('advance_training_academy_single_post_breadcrumb',array(
    	'type' => 'checkbox',
        'label' => __( 'Show / Hide Single Post Breadcrumb','advance-training-academy' ),
        'section' => 'advance_training_academy_single_post'
    ));

   	$wp_customize->add_setting('advance_training_academy_show_featured_image_single_post',array(
       'default' => true,
       'sanitize_callback'	=> 'advance_training_academy_sanitize_checkbox'
    ));
   	$wp_customize->add_control('advance_training_academy_show_featured_image_single_post',array(
       'type' => 'checkbox',
       'label' => __('Single Post Image','advance-training-academy'),
       'section' => 'advance_training_academy_single_post'
    ));

    $wp_customize->add_setting( 'advance_training_academy_single_img_border_radius', array(
		'default'=> 0,
		'sanitize_callback'	=> 'advance_training_academy_sanitize_float',
	) );
	$wp_customize->add_control( 'advance_training_academy_single_img_border_radius', array(
		'label'       => esc_html__( 'Single Post Image Border Radius','advance-training-academy' ),
		'section'     => 'advance_training_academy_single_post',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 100,
		),
	) );

	$wp_customize->add_setting( 'advance_training_academy_single_img_box_shadow',array(
		'default' => 0,
		'sanitize_callback'    => 'advance_training_academy_sanitize_float',
	));
	$wp_customize->add_control('advance_training_academy_single_img_box_shadow',array(
		'label' => esc_html__( 'Single Post Image Shadow','advance-training-academy' ),
		'section' => 'advance_training_academy_single_post',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type' => 'number'
	));

    // show/hide single post pagination
    $wp_customize->add_setting('advance_training_academy_show_single_post_pagination',array(
       'default' => true,
       'sanitize_callback'	=> 'advance_training_academy_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_training_academy_show_single_post_pagination',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post Pagination','advance-training-academy'),
       'section' => 'advance_training_academy_single_post'
    ));

    $wp_customize->add_setting('advance_training_academy_title_comment_form',array(
       'default' => __('Leave a Reply','advance-training-academy'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('advance_training_academy_title_comment_form',array(
       'type' => 'text',
       'label' => __('Comment Form Heading Text','advance-training-academy'),
       'section' => 'advance_training_academy_single_post'
    ));

    $wp_customize->add_setting('advance_training_academy_comment_form_button_content',array(
       'default' => __('Post Comment','advance-training-academy'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('advance_training_academy_comment_form_button_content',array(
       'type' => 'text',
       'label' => __('Comment Form Button Text','advance-training-academy'),
       'section' => 'advance_training_academy_single_post'
    ));

    //Comment Textarea Width
    $wp_customize->add_setting( 'advance_training_academy_comment_width', array(
		'default'=> '100',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(
	    'advance_training_academy_comment_width', array(
		'label'  => __('Comment Textarea Width','advance-training-academy'),
		'section'  => 'advance_training_academy_single_post',
		'description' => __('Measurement is in %.','advance-training-academy'),
		'input_attrs' => array(
		   'step'=> 1,
		   'min' => 0,
		   'max' => 100,
		),
		'type'		=> 'number'
    ));

    $wp_customize->add_setting( 'advance_training_academy_single_post_meta_seperator', array(
		'default'   => '|',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'advance_training_academy_single_post_meta_seperator', array(
		'label'       => esc_html__( 'Single Post Meta Box Seperator','advance-training-academy' ),
		'section'     => 'advance_training_academy_single_post',
		'description' => __('Here you can add the seperator for meta box. e.g. "|",  ",", "/", etc. ','advance-training-academy'),
		'type'        => 'text',
		'settings'    => 'advance_training_academy_single_post_meta_seperator',
	) );

    //Related Post Setting
	$wp_customize->add_section('advance_training_academy_related_post',array(
		'title'	=> __('Related Post Setting','advance-training-academy'),
		'panel' => 'advance_training_academy_panel_id',
	));

	$wp_customize->add_setting( 'advance_training_academy_show_related_post',array(
		'default' => true,
      	'sanitize_callback'	=> 'advance_training_academy_sanitize_checkbox'
    ) );
    $wp_customize->add_control('advance_training_academy_show_related_post',array(
    	'type' => 'checkbox',
        'label' => __( 'Related Post','advance-training-academy' ),
        'section' => 'advance_training_academy_related_post'
    ));

    $wp_customize->add_setting('advance_training_academy_related_posts_taxanomies_options',array(
        'default' => 'categories',
        'sanitize_callback' => 'advance_training_academy_sanitize_choices'
	));
	$wp_customize->add_control('advance_training_academy_related_posts_taxanomies_options',array(
        'type' => 'radio',
        'label' => __('Related Post Taxonomies','advance-training-academy'),
        'section' => 'advance_training_academy_related_post',
        'choices' => array(
            'categories' => __('Categories','advance-training-academy'),
            'tags' => __('Tags','advance-training-academy'),
        ),
	) );

	$wp_customize->add_setting('advance_training_academy_related_post_title',array(
		'default'=> __('Related Posts','advance-training-academy'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_training_academy_related_post_title',array(
		'label'	=> __('Related Post Title','advance-training-academy'),
		'section'=> 'advance_training_academy_related_post',
		'type'=> 'text'
	));

   	$wp_customize->add_setting('advance_training_academy_related_posts_number',array(
		'default'=> 3,
		'sanitize_callback'	=> 'advance_training_academy_sanitize_float',
	));
	$wp_customize->add_control('advance_training_academy_related_posts_number',array(
		'label'	=> __('Related Post Number','advance-training-academy'),
		'section'=> 'advance_training_academy_related_post',
		'type'=> 'number',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
	));

	$wp_customize->add_setting('advance_training_academy_related_post_excerpt_number',array(
		'default'=> 20,
		'sanitize_callback'	=> 'advance_training_academy_sanitize_float',
	));
	$wp_customize->add_control('advance_training_academy_related_post_excerpt_number',array(
		'label'	=> __('Related Post Content Limit','advance-training-academy'),
		'section'=> 'advance_training_academy_related_post',
		'type'=> 'number',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
	));

	//Layouts
	$wp_customize->add_section('advance_training_academy_left_right', array(
		'title'    => __('Layout Settings', 'advance-training-academy'),
		'priority' => null,
		'panel'    => 'advance_training_academy_panel_id',
	));

	$wp_customize->add_setting('advance_training_academy_theme_options',array(
        'default' => 'Default',
        'sanitize_callback' => 'advance_training_academy_sanitize_choices'
	));
	$wp_customize->add_control('advance_training_academy_theme_options',array(
        'type' => 'radio',
        'label' => __('Container Box','advance-training-academy'),
        'description' => __('Here you can change the Width layout. ','advance-training-academy'),
        'section' => 'advance_training_academy_left_right',
        'choices' => array(
            'Default' => __('Default','advance-training-academy'),
            'Container' => __('Container','advance-training-academy'),
            'Box Container' => __('Box Container','advance-training-academy'),
        ),
	) );

	$wp_customize->add_setting('advance_training_academy_preloader_option',array(
       'default' => false,
       'sanitize_callback'	=> 'advance_training_academy_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_training_academy_preloader_option',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Preloader','advance-training-academy'),
       'section' => 'advance_training_academy_left_right'
    ));

    $wp_customize->add_setting('advance_training_academy_preloader_type_options', array(
		'default'           => 'Preloader 1',
		'sanitize_callback' => 'advance_training_academy_sanitize_choices',
	));
	$wp_customize->add_control('advance_training_academy_preloader_type_options',array(
		'type'           => 'radio',
		'label'          => __('Preloader Type', 'advance-training-academy'),
		'section'        => 'advance_training_academy_left_right',
		'choices'        => array(
			'Preloader 1'  => __('Preloader 1', 'advance-training-academy'),
			'Preloader 2' => __('Preloader 2', 'advance-training-academy'),
		),
	));

    $wp_customize->add_setting( 'advance_training_academy_loader_background_color_first', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_training_academy_loader_background_color_first', array(
  		'label' => __('Background Color for Preloader', 'advance-training-academy'),
	    'section' => 'advance_training_academy_left_right',
	    'settings' => 'advance_training_academy_loader_background_color_first',
  	)));

   	$wp_customize->add_setting( 'advance_training_academy_single_page_breadcrumb',array(
		'default' => false,
      	'sanitize_callback'	=> 'advance_training_academy_sanitize_checkbox'
    ) );
    $wp_customize->add_control('advance_training_academy_single_page_breadcrumb',array(
    	'type' => 'checkbox',
        'label' => __( 'Show / Hide Single Page Breadcrumb','advance-training-academy' ),
        'section' => 'advance_training_academy_left_right'
    ));

	$wp_customize->add_setting( 'advance_training_academy_breadcrumb_color', array(
	    'default' => '#002147',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_training_academy_breadcrumb_color', array(
  		'label' => __('Breadcrumb Color', 'advance-training-academy'),
	    'section' => 'advance_training_academy_left_right',
	    'settings' => 'advance_training_academy_breadcrumb_color',
  	)));

  	$wp_customize->add_setting( 'advance_training_academy_breadcrumb_bg_color', array(
	    'default' => '#fdc800',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_training_academy_breadcrumb_bg_color', array(
  		'label' => __('Breadcrumb Background Color', 'advance-training-academy'),
	    'section' => 'advance_training_academy_left_right',
	    'settings' => 'advance_training_academy_breadcrumb_bg_color',
  	)));

	$wp_customize->add_setting('advance_training_academy_layout_options', array(
		'default'           => 'Right Sidebar',
		'sanitize_callback' => 'advance_training_academy_sanitize_choices',
	));
	$wp_customize->add_control('advance_training_academy_layout_options',array(
		'type'           => 'radio',
		'label'          => __('Blog Post Layouts', 'advance-training-academy'),
		'section'        => 'advance_training_academy_left_right',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'advance-training-academy'),
			'Right Sidebar' => __('Right Sidebar', 'advance-training-academy'),
			'One Column'    => __('One Column', 'advance-training-academy'),
			'Three Columns'    => __('Three Columns', 'advance-training-academy'),
			'Four Columns'    => __('Four Columns', 'advance-training-academy'),
			'Grid Layout'   => __('Grid Layout', 'advance-training-academy')
		),
	));

	$wp_customize->add_setting('advance_training_academy_single_post_sidebar_layout', array(
		'default'           => 'Right Sidebar', 
		'sanitize_callback' => 'advance_training_academy_sanitize_choices',
	));
	$wp_customize->add_control('advance_training_academy_single_post_sidebar_layout',array(
		'type'           => 'radio',
		'label'          => __('Single Post Layouts', 'advance-training-academy'),
		'section'        => 'advance_training_academy_left_right',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'advance-training-academy'),
			'Right Sidebar' => __('Right Sidebar', 'advance-training-academy'),
			'One Column'    => __('One Column', 'advance-training-academy'),
		),
	));

	$wp_customize->add_setting('advance_training_academy_single_page_sidebar_layout', array(
		'default'           => 'One Column',
		'sanitize_callback' => 'advance_training_academy_sanitize_choices',
	));
	$wp_customize->add_control('advance_training_academy_single_page_sidebar_layout',array(
		'type'           => 'radio',
		'label'          => __('Single Page Layouts', 'advance-training-academy'),
		'section'        => 'advance_training_academy_left_right',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'advance-training-academy'),
			'Right Sidebar' => __('Right Sidebar', 'advance-training-academy'),
			'One Column'    => __('One Column', 'advance-training-academy'),
		),
	));

	//no Result Found
	$wp_customize->add_section('advance_training_academy_noresult_found',array(
		'title'	=> __('No Result Found','advance-training-academy'),
		'panel' => 'advance_training_academy_panel_id',
	));	

	$wp_customize->add_setting('advance_training_academy_nosearch_found_title',array(
		'default'=> __('Nothing Found','advance-training-academy'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_training_academy_nosearch_found_title',array(
		'label'	=> __('No Result Found Title','advance-training-academy'),
		'section'=> 'advance_training_academy_noresult_found',
		'type'=> 'text'
	));

	$wp_customize->add_setting('advance_training_academy_nosearch_found_content',array(
		'default'=> __('Sorry, but nothing matched your search terms. Please try again with some different keywords.','advance-training-academy'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_training_academy_nosearch_found_content',array(
		'label'	=> __('No Result Found Content','advance-training-academy'),
		'section'=> 'advance_training_academy_noresult_found',
		'type'=> 'text'
	));

	$wp_customize->add_setting('advance_training_academy_show_noresult_search',array(
       'default' => true,
       'sanitize_callback'	=> 'advance_training_academy_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_training_academy_show_noresult_search',array(
       'type' => 'checkbox',
       'label' => __('No Result search','advance-training-academy'),
       'section' => 'advance_training_academy_noresult_found'
    ));	

	//responsive
	$wp_customize->add_section('advance_training_academy_responsive_setting', array(
		'title'       => __('Responsive Settings', 'advance-training-academy'),
		'priority'    => null,
		'panel'       => 'advance_training_academy_panel_id',
	));

	$wp_customize->add_setting( 'advance_training_academy_toggle_button_bg_color', array(
	    'default' => '#002147',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_training_academy_toggle_button_bg_color', array(
  		'label' => __('Toggle Button Bg Color', 'advance-training-academy'),
	    'section' => 'advance_training_academy_responsive_setting',
	    'settings' => 'advance_training_academy_toggle_button_bg_color',
  	)));

    $wp_customize->add_setting('advance_training_academy_responsive_preloader',array(
       'default' => false,
       'sanitize_callback'	=> 'advance_training_academy_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_training_academy_responsive_preloader',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Preloader','advance-training-academy'),
       'section' => 'advance_training_academy_responsive_setting'
    ));

	//footer
	$wp_customize->add_section('advance_training_academy_footer_section', array(
		'title'       => __('Footer Text', 'advance-training-academy'),
		'priority'    => null,
		'panel'       => 'advance_training_academy_panel_id',
	));

	$wp_customize->add_setting('advance_training_academy_show_hide_footer',array(
		'default' => true,
		'sanitize_callback'	=> 'advance_training_academy_sanitize_checkbox'
	));
	$wp_customize->add_control('advance_training_academy_show_hide_footer',array(
     	'type' => 'checkbox',
        'label' => __('Show / Hide Footer','advance-training-academy'),
        'section' => 'advance_training_academy_footer_section',
	));

	$wp_customize->add_setting('advance_training_academy_footer_widget_areas',array(
        'default'           => 4,
        'sanitize_callback' => 'advance_training_academy_sanitize_choices',
    ));
    $wp_customize->add_control('advance_training_academy_footer_widget_areas',array(
        'type'        => 'select',
        'label'       => __('Footer widget area', 'advance-training-academy'),
        'section'     => 'advance_training_academy_footer_section',
        'description' => __('Select the number of widget areas you want in the footer. After that, go to Appearance > Widgets and add your widgets.', 'advance-training-academy'),
        'choices' => array(
            '1'     => __('One', 'advance-training-academy'),
            '2'     => __('Two', 'advance-training-academy'),
            '3'     => __('Three', 'advance-training-academy'),
            '4'     => __('Four', 'advance-training-academy')
        ),
    ));

    $wp_customize->add_setting('advance_training_academy_footer_widget_bg_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'advance_training_academy_footer_widget_bg_color', array(
		'label'    => __('Footer Widget Background Color', 'advance-training-academy'),
		'section'  => 'advance_training_academy_footer_section',
	)));

	$wp_customize->add_setting('advance_training_academy_footer_widget_bg_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'advance_training_academy_footer_widget_bg_image',array(
        'label' => __('Footer Widget Background Image','advance-training-academy'),
        'section' => 'advance_training_academy_footer_section'
	)));

	$wp_customize->add_setting('advance_training_academy_footer_heading',array(
	    'default' => 'Left',
	    'transport' => 'refresh',
	    'sanitize_callback' => 'advance_training_academy_sanitize_choices'
	));
	$wp_customize->add_control('advance_training_academy_footer_heading',array(
	    'type' => 'select',
	    'label' => __('Footer Heading Alignment','advance-training-academy'),
	    'section' => 'advance_training_academy_footer_section',
	    'choices' => array(
	    	'Left' => __('Left','advance-training-academy'),
	        'Center' => __('Center','advance-training-academy'),
	        'Right' => __('Right','advance-training-academy')
	    ),
	) );

	$wp_customize->add_setting('advance_training_academy_footer_content',array(
	    'default' => 'Left',
	    'transport' => 'refresh',
	    'sanitize_callback' => 'advance_training_academy_sanitize_choices'
	));
	$wp_customize->add_control('advance_training_academy_footer_content',array(
	    'type' => 'select',
	    'label' => __('Footer Content Alignment','advance-training-academy'),
	    'section' => 'advance_training_academy_footer_section',
	    'choices' => array(
	    	'Left' => __('Left','advance-training-academy'),
	        'Center' => __('Center','advance-training-academy'),
	        'Right' => __('Right','advance-training-academy')
	    ),
	) );

	$wp_customize->add_setting('advance_training_academy_show_hide_copyright',array(
		'default' => true,
		'sanitize_callback'	=> 'advance_training_academy_sanitize_checkbox'
	));
	$wp_customize->add_control('advance_training_academy_show_hide_copyright',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Copyright','advance-training-academy'),
      	'section' => 'advance_training_academy_footer_section',
	));

	$wp_customize->add_setting('advance_training_academy_footer_copy', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('advance_training_academy_footer_copy', array(
		'label'   => __('Copyright Text', 'advance-training-academy'),
		'section' => 'advance_training_academy_footer_section',
		'type'    => 'text',
	));

	$wp_customize->add_setting('advance_training_academy_copyright_content_align',array(
        'default' => 'center',
        'sanitize_callback' => 'advance_training_academy_sanitize_choices'
	));
	$wp_customize->add_control('advance_training_academy_copyright_content_align',array(
        'type' => 'select',
        'label' => __('Copyright Text Alignment','advance-training-academy'),
        'section' => 'advance_training_academy_footer_section',
        'choices' => array(
            'left' => __('Left','advance-training-academy'),
            'right' => __('Right','advance-training-academy'),
            'center' => __('Center','advance-training-academy'),
        ),
	) );

	$wp_customize->add_setting('advance_training_academy_footer_content_font_size',array(
		'default'=> 16,
		'sanitize_callback'	=> 'advance_training_academy_sanitize_float',
	));
	$wp_customize->add_control('advance_training_academy_footer_content_font_size',array(
		'label' => esc_html__( 'Copyright Font Size','advance-training-academy' ),
		'section'=> 'advance_training_academy_footer_section',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
        'type' => 'number',
	));

	$wp_customize->add_setting('advance_training_academy_copyright_padding',array(
		'default'=> 15,
		'sanitize_callback'	=> 'advance_training_academy_sanitize_float',
	));
	$wp_customize->add_control('advance_training_academy_copyright_padding',array(
		'label'	=> __('Copyright Padding','advance-training-academy'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'advance_training_academy_footer_section',
		'type'=> 'number'
	));

	$wp_customize->add_setting('advance_training_academy_footer_text_color', array(
		'default'           => '#fff',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'advance_training_academy_footer_text_color', array(
		'label'    => __('Copyright Text Color', 'advance-training-academy'),
		'section'  => 'advance_training_academy_footer_section',
	)));

	$wp_customize->add_setting('advance_training_academy_enable_disable_scroll',array(
        'default' => true,
        'sanitize_callback'	=> 'advance_training_academy_sanitize_checkbox'
	));
	$wp_customize->add_control('advance_training_academy_enable_disable_scroll',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Scroll Top Button','advance-training-academy'),
      	'section' => 'advance_training_academy_footer_section',
	));

	$wp_customize->add_setting('advance_training_academy_back_to_top_icon',array(
		'default'	=> 'fas fa-chevron-up',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Advance_Training_Academy_Icon_Changer(
        $wp_customize,'advance_training_academy_back_to_top_icon',array(
		'label'	=> __('Scroll Back to Top Icon','advance-training-academy'),
		'transport' => 'refresh',
		'section'	=> 'advance_training_academy_footer_section',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('advance_training_academy_back_to_top_bg_color', array(
		'default'           => '#252525',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'advance_training_academy_back_to_top_bg_color', array(
		'label'    => __('Back to Top Background Color', 'advance-training-academy'),
		'section'  => 'advance_training_academy_footer_section',
	)));

    $wp_customize->add_setting('advance_training_academy_back_to_top_bg_hover_color', array(
		'default'           => '#252525',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'advance_training_academy_back_to_top_bg_hover_color', array(
		'label'    => __('Back to Top Background Hover Color', 'advance-training-academy'),
		'section'  => 'advance_training_academy_footer_section',
	)));

	$wp_customize->add_setting('advance_training_academy_scroll_setting',array(
        'default' => 'Right',
        'sanitize_callback' => 'advance_training_academy_sanitize_choices'
	));
	$wp_customize->add_control('advance_training_academy_scroll_setting',array(
        'type' => 'select',
        'label' => __('Scroll Back to Top Position','advance-training-academy'),
        'section' => 'advance_training_academy_footer_section',
        'choices' => array(
            'Left' => __('Left','advance-training-academy'),
            'Right' => __('Right','advance-training-academy'),
            'Center' => __('Center','advance-training-academy'),
        ),
	) );

	$wp_customize->add_setting('advance_training_academy_scroll_font_size_icon',array(
		'default'=> 20,
		'sanitize_callback'	=> 'advance_training_academy_sanitize_float',
	));
	$wp_customize->add_control('advance_training_academy_scroll_font_size_icon',array(
		'label'	=> __('Scroll Icon Font Size','advance-training-academy'),
		'section'=> 'advance_training_academy_footer_section',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
        'type' => 'number',
	) );

	$wp_customize->add_setting('advance_training_academy_footer_premium_info',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_training_academy_footer_premium_info',array(
		'type'=> 'hidden',
		'description' => "<p>For more settings and features, please explore our premium theme.</p><a target='_blank' href='". esc_url('https://www.themeshopy.com/themes/education-training-wordpress-theme/') ." '>Upgrade to Pro</a>",
		'section'=> 'advance_training_academy_footer_section'
	));
	
}
add_action('customize_register', 'advance_training_academy_customize_register');

// logo resize
load_template( trailingslashit( get_template_directory() ) . '/inc/logo/logo-resizer.php' );

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Advance_Training_Academy_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if (is_null($instance)) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action('customize_register', array($this, 'sections'));

		// Register scripts and styles for the conadvance_training_academy_Customizetrols.
		add_action('customize_controls_enqueue_scripts', array($this, 'enqueue_control_scripts'), 0);
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections($manager) {

		// Load custom sections.
		load_template(trailingslashit(get_template_directory()).'/inc/section-pro.php');

		// Register custom section types.
		$manager->register_section_type('Advance_Training_Academy_Customize_Section_Pro');

		// Register sections.
		$manager->add_section(
			new Advance_Training_Academy_Customize_Section_Pro(
				$manager,
				'advance_training_academy_example_1',
				array(
					'priority' => 9,
					'title'    => esc_html__('Advance Training PRO', 'advance-training-academy'),
					'pro_text' => esc_html__('Get Pro', 'advance-training-academy'),
					'pro_url'  => esc_url('https://www.themeshopy.com/themes/education-training-wordpress-theme/'),
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script('advance-training-academy-customize-controls', trailingslashit(esc_url(get_template_directory_uri())).'/js/customize-controls.js', array('customize-controls'));
		wp_enqueue_style('advance-training-academy-customize-controls', trailingslashit(esc_url(get_template_directory_uri())).'/css/customize-controls.css');
	}
}

// Doing this customizer thang!
Advance_Training_Academy_Customize::get_instance();