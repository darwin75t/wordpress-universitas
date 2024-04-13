<?php
/**
 * The template for displaying home page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Advance Training Academy
 */

get_header(); ?>

<main role="main" id="maincontent" class="our-services py-5">
  <div class="innerlightbox">
	  <div class="container">
      <?php
        $advance_training_academy_left_right = get_theme_mod( 'advance_training_academy_layout_options','Right Sidebar');
        if($advance_training_academy_left_right == 'Left Sidebar'){ ?>
        <div class="row">
          <div class="col-lg-4 col-md-4">
            <?php get_sidebar();?>
          </div>
          <div id="post-<?php the_ID(); ?>" <?php post_class('col-lg-8 col-md-8'); ?>>
            <div class="row">
              <?php if ( have_posts() ) :
                while ( have_posts() ) : the_post(); ?>
                  <div class="col-lg-6 col-md-6" >
                    <?php get_template_part( 'template-parts/content' ); ?>
                  </div>
                <?php endwhile;
              else :
                get_template_part( 'no-results' ); 
              endif; 
              ?>
            </div>
            <?php if( get_theme_mod( 'advance_training_academy_blog_post_pagination',true) != '') { ?>
          	  <div class="navigation">
                <?php advance_training_academy_pagination_type(); ?>
              </div> 
            <?php } ?> 
    	    </div>
        </div>
      <?php }else if($advance_training_academy_left_right == 'Right Sidebar'){ ?>
        <div class="row">
          <div id="post-<?php the_ID(); ?>" <?php post_class('col-lg-8 col-md-8'); ?>>
            <div class="row">
              <?php if ( have_posts() ) :
                while ( have_posts() ) : the_post(); ?>
                  <div class="col-lg-6 col-md-6" >
                    <?php get_template_part( 'template-parts/content' ); ?>
                  </div>
                <?php endwhile;
              else :
                get_template_part( 'no-results' ); 
              endif; 
              ?>
            </div>
            <?php if( get_theme_mod( 'advance_training_academy_blog_post_pagination',true) != '') { ?>
              <div class="navigation">
                <?php advance_training_academy_pagination_type(); ?>
              </div> 
            <?php } ?>  
          </div>
      	  <div class="col-lg-4 col-md-4">
      			<?php get_sidebar();?>
      	  </div>
        </div>
      <?php }else if($advance_training_academy_left_right == 'One Column'){ ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <div class="row">
            <?php if ( have_posts() ) :
              while ( have_posts() ) : the_post(); ?>
                  <?php get_template_part( 'template-parts/content' ); ?>
              <?php endwhile;
            else :
              get_template_part( 'no-results' ); 
            endif; 
            ?>
          </div>
          <?php if( get_theme_mod( 'advance_training_academy_blog_post_pagination',true) != '') { ?>
            <div class="navigation">
              <?php advance_training_academy_pagination_type(); ?>
            </div> 
          <?php } ?>  
        </div>
      <?php }else if($advance_training_academy_left_right == 'Three Columns'){ ?>
        <div class="row">
          <div class="col-lg-4 col-md-4">
            <?php get_sidebar();?>
          </div>
          <div id="post-<?php the_ID(); ?>" <?php post_class('col-lg-4 col-md-4'); ?>>
            <?php if ( have_posts() ) :
              /* Start the Loop */
              while ( have_posts() ) : the_post();
                get_template_part( 'template-parts/content'); 
              endwhile;
              else :
                get_template_part( 'no-results' );
              endif; 
            ?>
            <?php if( get_theme_mod( 'advance_training_academy_blog_post_pagination',true) != '') { ?>
              <div class="navigation">
                <?php advance_training_academy_pagination_type(); ?>
              </div> 
            <?php } ?>  
          </div>
          <div id="sidebar" class="col-lg-4 col-md-4 pt-3"><?php dynamic_sidebar('sidebar-2');?>
          </div>
        </div>
      <?php }else if($advance_training_academy_left_right == 'Four Columns'){ ?>
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <?php get_sidebar();?>
          </div>
          <div id="post-<?php the_ID(); ?>" <?php post_class('col-lg-3 col-md-6'); ?>>
            <?php if ( have_posts() ) :
              /* Start the Loop */
              while ( have_posts() ) : the_post();
                get_template_part( 'template-parts/content'); 
              endwhile;
              else :
                get_template_part( 'no-results' );
              endif; 
            ?>
            <?php if( get_theme_mod( 'advance_training_academy_blog_post_pagination',true) != '') { ?>
              <div class="navigation">
                <?php advance_training_academy_pagination_type(); ?>
              </div> 
            <?php } ?>  
          </div>
          <div id="sidebar" class="col-lg-3 col-md-6 pt-3"><?php dynamic_sidebar('sidebar-2');?>
          </div>
          <div id="sidebar" class="col-lg-3 col-md-6 pt-3"><?php dynamic_sidebar('sidebar-3');?>
          </div>
        </div>
      <?php }else if($advance_training_academy_left_right == 'Grid Layout'){ ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class('row'); ?>>
          <?php if ( have_posts() ) :
            /* Start the Loop */
            while ( have_posts() ) : the_post();
              get_template_part( 'template-parts/grid-layout' ); 
            endwhile;
            else :
              get_template_part( 'no-results' );
            endif; 
          ?>
          <?php if( get_theme_mod( 'advance_training_academy_blog_post_pagination',true) != '') { ?>
            <div class="navigation">
              <?php advance_training_academy_pagination_type(); ?>
            </div> 
          <?php } ?> 
        </div>
      <?php } else { ?>
        <div class="row">
          <div id="post-<?php the_ID(); ?>" <?php post_class('col-lg-8 col-md-8'); ?>>
            <?php if ( have_posts() ) :
              /* Start the Loop */
              while ( have_posts() ) : the_post();
                get_template_part( 'template-parts/content'); 
              endwhile;
              else :
                get_template_part( 'no-results' );
              endif; 
            ?>
            <?php if( get_theme_mod( 'advance_training_academy_blog_post_pagination',true) != '') { ?>
              <div class="navigation">
                <?php advance_training_academy_pagination_type(); ?>
              </div> 
            <?php } ?>  
          </div>
          <div class="col-lg-4 col-md-4">
            <?php get_sidebar();?>
          </div>
        </div>  
      <?php }?>
		  <div class="clearfix"></div>
    </div>
  </div>
</main>

<?php get_footer(); ?>