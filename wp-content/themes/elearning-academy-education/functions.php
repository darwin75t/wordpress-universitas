<?php

require get_stylesheet_directory() . '/customizer/customizer.php';

add_action( 'after_setup_theme', 'elearning_academy_education_after_setup_theme' );
function elearning_academy_education_after_setup_theme() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( "responsive-embeds" );
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'align-wide' );
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'elearning-academy-education-featured-image', 2000, 1200, true );
    add_image_size( 'elearning-academy-education-thumbnail-avatar', 100, 100, true );

    // Set the default content width.
    $GLOBALS['content_width'] = 525;

    // Add theme support for Custom Logo.
    add_theme_support( 'custom-logo', array(
        'width'       => 250,
        'height'      => 250,
        'flex-width'  => true,
        'flex-height'  => true,

    ) );

    add_theme_support( 'custom-background', array(
        'default-color' => 'ffffff'
    ) );

    add_theme_support( 'html5', array('comment-form','comment-list','gallery','caption',) );

    add_editor_style( array( 'assets/css/editor-style.css') );
}

/**
 * Register widget area.
 */
function elearning_academy_education_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Blog Sidebar', 'elearning-academy-education' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'elearning-academy-education' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Page Sidebar', 'elearning-academy-education' ),
        'id'            => 'sidebar-2',
        'description'   => __( 'Add widgets here to appear in your sidebar on pages.', 'elearning-academy-education' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Sidebar 3', 'elearning-academy-education' ),
        'id'            => 'sidebar-3',
        'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'elearning-academy-education' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer 1', 'elearning-academy-education' ),
        'id'            => 'footer-1',
        'description'   => __( 'Add widgets here to appear in your footer.', 'elearning-academy-education' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer 2', 'elearning-academy-education' ),
        'id'            => 'footer-2',
        'description'   => __( 'Add widgets here to appear in your footer.', 'elearning-academy-education' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer 3', 'elearning-academy-education' ),
        'id'            => 'footer-3',
        'description'   => __( 'Add widgets here to appear in your footer.', 'elearning-academy-education' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer 4', 'elearning-academy-education' ),
        'id'            => 'footer-4',
        'description'   => __( 'Add widgets here to appear in your footer.', 'elearning-academy-education' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'elearning_academy_education_widgets_init' );

// enqueue styles for child theme
function elearning_academy_education_enqueue_styles() {

    wp_enqueue_style( 'elearning-academy-education-fonts', elearning_education_fonts_url(), array(), null );

    // Bootstrap
    wp_enqueue_style( 'bootstrap-css', get_theme_file_uri( '/assets/css/bootstrap.css' ) );

    // Theme block stylesheet.
    wp_enqueue_style( 'elearning-academy-education-block-style', get_theme_file_uri( '/assets/css/blocks.css' ), array( 'elearning-academy-education-child-style' ), '1.0' );

    // enqueue parent styles
    wp_enqueue_style('elearning-education-style', get_template_directory_uri() .'/style.css');

    // enqueue child styles
    wp_enqueue_style('elearning-academy-education-child-style', get_stylesheet_directory_uri() .'/style.css', array('elearning-education-style'));

    require get_theme_file_path( '/tp-theme-color.php' );
        wp_add_inline_style( 'elearning-academy-education-child-style',$elearning_education_tp_theme_css );

    wp_enqueue_script( 'comment-reply', '/wp-includes/js/comment-reply.min.js', array(), false, true );

    $elearning_education_body_font_family = get_theme_mod('elearning_education_body_font_family', '');

    $elearning_education_menu_font_family = get_theme_mod('elearning_education_menu_font_family', '');

    $elearning_education_heading_font_family = get_theme_mod('elearning_education_heading_font_family', '');

    $elearning_education_tp_theme_css = '
        body{
            font-family: '.esc_html($elearning_education_body_font_family).';
        }
        .main-navigation a{
            font-family: '.esc_html($elearning_education_menu_font_family).';
        }
        h1{
            font-family: '.esc_html($elearning_education_heading_font_family).';
        }
        h2{
            font-family: '.esc_html($elearning_education_heading_font_family).';
        }
        h3{
            font-family: '.esc_html($elearning_education_heading_font_family).';
        }
        h4{
            font-family: '.esc_html($elearning_education_heading_font_family).';
        }
        h5{
            font-family: '.esc_html($elearning_education_heading_font_family).';
        }
        h6{
            font-family: '.esc_html($elearning_education_heading_font_family).';
        }
        #theme-sidebar .wp-block-search .wp-block-search__label{
            font-family: '.esc_html($elearning_education_heading_font_family).';
        }
    ';
    wp_add_inline_style('elearning-academy-education-child-style', $elearning_education_tp_theme_css);
}
add_action('wp_enqueue_scripts', 'elearning_academy_education_enqueue_styles');

function elearning_academy_education_admin_scripts() {
    // Backend CSS
    wp_enqueue_style( 'elearning-academy-education-backend-css', get_theme_file_uri( '/assets/css/customizer.css' ) );
}
add_action( 'admin_enqueue_scripts', 'elearning_academy_education_admin_scripts' );

function elearning_academy_education_header_style() {
    if ( get_header_image() ) :
    $custom_header = "
        .headerbox{
            background-image:url('".esc_url(get_header_image())."');
            background-position: center top;
            background-size: cover;
        }";
        wp_add_inline_style( 'elearning-academy-education-child-style', $custom_header );
    endif;
}
add_action( 'wp_enqueue_scripts', 'elearning_academy_education_header_style' );

require get_theme_file_path( '/customizer/customize-control-toggle.php' );


if ( ! defined( 'ELEARNING_EDUCATION_PRO_THEME_URL' ) ) {
    define( 'ELEARNING_EDUCATION_PRO_THEME_URL', 'https://www.themespride.com/themes/academy-wordpress-theme/' );
}
if ( ! defined( 'ELEARNING_EDUCATION_PRO_THEME_NAME' ) ) {
    define( 'ELEARNING_EDUCATION_PRO_THEME_NAME', esc_html__( 'Elearning Academy Pro', 'elearning-academy-education' ));
}
if ( ! defined( 'ELEARNING_EDUCATION_FREE_THEME_URL' ) ) {
	define( 'ELEARNING_EDUCATION_FREE_THEME_URL', 'https://www.themespride.com/themes/free-education-wordpress-theme/' );
}
if ( ! defined( 'ELEARNING_EDUCATION_DEMO_THEME_URL' ) ) {
	define( 'ELEARNING_EDUCATION_DEMO_THEME_URL', 'https://www.themespride.com/elearning-academy-education-pro/' );
}
if ( ! defined( 'ELEARNING_EDUCATION_DOCS_THEME_URL' ) ) {
    define( 'ELEARNING_EDUCATION_DOCS_THEME_URL', 'https://themespride.com/demo/docs/elearning-academy-education/' );
}
if ( ! defined( 'ELEARNING_EDUCATION_DOCS_URL' ) ) {
    define( 'ELEARNING_EDUCATION_DOCS_URL', 'https://themespride.com/demo/docs/elearning-academy-education/' );
}
if ( ! defined( 'ELEARNING_EDUCATION_RATE_THEME_URL' ) ) {
    define( 'ELEARNING_EDUCATION_RATE_THEME_URL', 'https://wordpress.org/support/theme/elearning-academy-education/reviews/#new-post' );
}
if ( ! defined( 'ELEARNING_EDUCATION_CHANGELOG_THEME_URL' ) ) {
    define( 'ELEARNING_EDUCATION_CHANGELOG_THEME_URL', get_stylesheet_directory() . '/readme.txt' );
}
if ( ! defined( 'ELEARNING_EDUCATION_SUPPORT_THEME_URL' ) ) {
    define( 'ELEARNING_EDUCATION_SUPPORT_THEME_URL', 'https://wordpress.org/support/theme/elearning-academy-education' );
}

define('ELEARNING_ACADEMY_EDUCATION_CREDIT',__('https://www.themespride.com/themes/free-education-wordpress-theme/','elearning-academy-education') );
if ( ! function_exists( 'elearning_academy_education_credit' ) ) {
    function elearning_academy_education_credit(){
        echo "<a href=".esc_url(ELEARNING_ACADEMY_EDUCATION_CREDIT)." target='_blank'>".esc_html__(get_theme_mod('elearning_education_footer_text',__('Elearning Academy Education WordPress Theme','elearning-academy-education')))."</a>";
    }
}
