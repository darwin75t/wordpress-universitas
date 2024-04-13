<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div class="content-ts">
 *
 * @package Advance Training Academy
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
  } else {
    do_action( 'wp_body_open' );
  } ?>
  <header role="banner">
    <?php if(get_theme_mod('advance_training_academy_preloader_option',false)!= ''  || get_theme_mod('advance_training_academy_responsive_preloader', false) != ''){ ?>
      <?php if(get_theme_mod('advance_training_academy_preloader_type_options', 'Preloader 1')  == 'Preloader 1') {?>
        <div id="loader-wrapper" class="w-100 h-100">
          <div id="loader" class="rounded-circle"></div>
          <div class="loader-section section-left"></div>
          <div class="loader-section section-right"></div>
        </div>
      <?php } else if(get_theme_mod('advance_training_academy_preloader_type_options', 'Preloader 1') ==  'Preloader 2') {?>
        <div id="loader-wrapper" class="w-100 h-100">
          <div class="loader">
            <div></div>
            <div></div>
            <div></div>
          </div>
        </div>
      <?php }?>
    <?php }?>
    <a class="screen-reader-text skip-link" href="#maincontent" ><?php esc_html_e( 'Skip to content', 'advance-training-academy' ); ?></a>    

    <div id="header">
      <div class="row m-0">
        <div class="col-lg-3 col-md-4 logo-box py-4 px-5">
          <div class="logo text-md-start text-center">
            <?php if ( has_custom_logo() ) : ?>
              <div class="site-logo"><?php the_custom_logo(); ?></div>
            <?php endif; ?>
            <?php $blog_info = get_bloginfo( 'name' ); ?>
            <?php if ( ! empty( $blog_info ) ) : ?>
              <?php if( get_theme_mod('advance_training_academy_site_title',true) != ''){ ?>
                <?php if ( is_front_page() && is_home() ) : ?>
                  <h1 class="site-title p-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-start pt-0" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <?php else : ?>
                  <p class="site-title mb-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="text-start pt-0"><?php bloginfo( 'name' ); ?></a></p>
                <?php endif; ?>
              <?php }?>
            <?php endif; ?>
            <?php
            $description = get_bloginfo( 'description', 'display' );
            if ( $description || is_customize_preview() ) :
              ?>
              <?php if( get_theme_mod('advance_training_academy_tagline',false) != ''){ ?>
                <p class="site-description mb-0">
                  <?php echo esc_html($description); ?>
                </p>
              <?php }?>
            <?php endif; ?>
          </div>
        </div>
        <div class="col-lg-9 col-md-8 bottom-header p-0">
          <div class="topbar px-3">
            <div class="row mx-0">
              <div class="col-lg-8 col-md-8 align-self-center">
                <?php if( get_theme_mod('advance_training_academy_mail_address') != '') {?>
                  <span class="contact email">
                    <a href="mailto:<?php echo esc_attr(get_theme_mod('advance_training_academy_mail_address')); ?>"><i class="<?php echo esc_attr(get_theme_mod('advance_training_academy_mail_icon','fas fa-envelope')); ?> me-2"></i><?php echo esc_html(get_theme_mod('advance_training_academy_mail_address')); ?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('advance_training_academy_mail_address')); ?></span></a>
                  </span>
                <?php }?>
                <?php if( get_theme_mod('advance_training_academy_phoneno') != '') {?>
                  <span class="contact">
                    <a href="tel:<?php echo esc_attr(get_theme_mod('advance_training_academy_phoneno')); ?>"><i class="<?php echo esc_attr(get_theme_mod('advance_training_academy_phone_icon','fas fa-phone')); ?> me-2"></i><?php echo esc_html(get_theme_mod('advance_training_academy_phoneno')); ?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('advance_training_academy_phoneno')); ?></span></a>
                  </span>
                <?php }?>
              </div>
              <div class="col-lg-4 col-md-4 align-self-center text-center">
                <div class="social-icons d-md-inline-block">
                  <?php if(get_theme_mod('advance_training_academy_facebook_url') != ''){?>
                    <a target="_blank" href="<?php echo esc_url(get_theme_mod('advance_training_academy_facebook_url')); ?>"><i class="<?php echo esc_attr(get_theme_mod('advance_training_academy_facebook_icon','fab fa-facebook-f')); ?>"></i><span class="screen-reader-text"><?php echo esc_html('Facebook', 'advance-training-academy'); ?></span></a>
                  <?php }?>
                  <?php if(get_theme_mod('advance_training_academy_twitter_url') != ''){?>
                    <a target="_blank" href="<?php echo esc_url(get_theme_mod('advance_training_academy_twitter_url')); ?>"><i class="<?php echo esc_attr(get_theme_mod('advance_training_academy_twitter_icon','fab fa-twitter')); ?>"></i><span class="screen-reader-text"><?php echo esc_html('Twitter', 'advance-training-academy'); ?></span></a>
                  <?php }?>
                  <?php if(get_theme_mod('advance_training_academy_instagram_url') != ''){?>
                    <a target="_blank" href="<?php echo esc_url(get_theme_mod('advance_training_academy_instagram_url')); ?>"><i class="<?php echo esc_attr(get_theme_mod('advance_training_academy_instagram_icon','fab fa-instagram')); ?>"></i><span class="screen-reader-text"><?php echo esc_html('Instagram', 'advance-training-academy'); ?></span></a>
                  <?php }?>
                  <?php if(get_theme_mod('advance_training_academy_linkedin_url') != ''){?>
                    <a target="_blank" href="<?php echo esc_url(get_theme_mod('advance_training_academy_linkedin_url')); ?>"><i class="<?php echo esc_attr(get_theme_mod('advance_training_academy_linkedin_icon','fab fa-linkedin')); ?>"></i><span class="screen-reader-text"><?php echo esc_html('Linkedin', 'advance-training-academy'); ?></span></a>
                  <?php }?>
                  <?php if(get_theme_mod('advance_training_academy_youtube_url') != ''){?>
                    <a target="_blank" href="<?php echo esc_url(get_theme_mod('advance_training_academy_youtube_url')); ?>"><i class="<?php echo esc_attr(get_theme_mod('advance_training_academy_youtube_icon','fab fa-youtube')); ?>"></i><span class="screen-reader-text"><?php echo esc_html('Youtube', 'advance-training-academy'); ?></span></a>
                  <?php }?>
                </div>
              </div>
            </div>
          </div>
          <div class="menu-box my-3">
            <div class="row m-0">
              <div class="col-lg-9 col-md-4 col-6 align-self-center">
                <div class="main-menu">
                  <div class="toggle-menu mobile-menu text-center">
                    <button class="mobiletoggle responsive-toggle"><i class="fas fa-bars"></i><span class="screen-reader-text"><?php esc_html_e('Open Menu','advance-training-academy'); ?></span></button>
                  </div>
                  <div id="menu-sidebar" class="nav sidebar text-center">
                    <nav id="primary-site-navigation" class="primary-navigation ps-0" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'advance-training-academy' ); ?>">
                      <?php
                        wp_nav_menu( array(
                          'theme_location' => 'primary',
                          'container_class' => 'main-menu-navigation responsive-menu clearfix' ,
                          'menu_class' => 'main-menu-navigation clearfix',
                          'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
                          'fallback_cb' => 'wp_page_menu',
                        ) );
                      ?>
                      <a href="javascript:void(0)" class="closebtn mobile-menu"><i class="far fa-times-circle"></i><span class="screen-reader-text"><?php esc_html_e('Close Menu','advance-training-academy'); ?></span></a>
                    </nav>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 col-6 align-self-center req-btn">
                <?php if(get_theme_mod('advance_training_academy_header_button_text') != '' || get_theme_mod('advance_training_academy_header_button_url') != '') {?>
                <a href="<?php echo esc_url(get_theme_mod('advance_training_academy_header_button_url')); ?>" class="reach-btn"><?php echo esc_html(get_theme_mod('advance_training_academy_header_button_text')); ?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('advance_training_academy_header_button_text')); ?></span></a>
              <?php }?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>