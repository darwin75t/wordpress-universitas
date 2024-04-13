<?php
/**
 * The template part for displaying single post
 *
 * @package Advance Training Academy
 * @subpackage advance-training-academy
 * @since advance-training-academy 1.0
 */
?> 
<?php 
  $archive_year  = get_the_time('Y'); 
  $archive_month = get_the_time('m'); 
  $archive_day   = get_the_time('d'); 
?>
<article class="page-box-single">
  <?php if( get_theme_mod( 'advance_training_academy_show_featured_image_single_post',true) != '') { ?>
    <div class="box-img">
      <?php if(has_post_thumbnail()){
         the_post_thumbnail();
        } else{?>
          <div class="single-img"></div>
      <?php } ?>
    </div>
  <?php }?>
  <div class="new-text text-start">
    <div class="container">
      <div class="main-content-box">
        <h1><?php the_title(); ?></h1>
        <div class="metabox my-3 text-start">
          <?php if( get_theme_mod( 'advance_training_academy_single_post_date_hide',true) != '') { ?>
            <span class="entry-date me-2"><i class="<?php echo esc_attr(get_theme_mod('advance_training_academy_single_post_date_icon','fa fa-calendar')); ?> me-1"></i><a href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span><span class="me-1"><?php echo esc_html( get_theme_mod('advance_training_academy_single_post_meta_seperator','|') ); ?></span>
          <?php } ?>
          <?php if( get_theme_mod( 'advance_training_academy_single_post_author_hide',true) != '') { ?>
            <span class="entry-author me-2"><i class="<?php echo esc_attr(get_theme_mod('advance_training_academy_single_post_author_icon','fa fa-user')); ?> me-2"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a></span><span class="me-1"><?php echo esc_html( get_theme_mod('advance_training_academy_single_post_meta_seperator','|') ); ?></span>
          <?php } ?>
          <?php if( get_theme_mod( 'advance_training_academy_single_post_comment_hide',true) != '') { ?>
            <span class="entry-comments me-2"><i class="<?php echo esc_attr(get_theme_mod('advance_training_academy_single_post_comment_icon','fas fa-comments')); ?> me-1"></i><?php comments_number( __('0 Comments','advance-training-academy'), __('0 Comments','advance-training-academy'), __('% Comments','advance-training-academy') ); ?></span>
          <?php } ?>
        </div>
        <?php if( get_theme_mod('advance_training_academy_category_show_hide',true) != ''){ ?>
          <div class="category-sec">
             <span class="category"><?php esc_html_e('Categories:','advance-training-academy'); ?></span>
           <?php the_category(); ?>
        </div>
        <?php } ?>
        <div class="entry-content"><?php the_content();?></div>
        <div class="row tags mt-3 mb-5">
          <div class="col-lg-6 col-md-6">
            <?php if( get_theme_mod( 'advance_training_academy_tags_hide',true) != '') { ?>
              <div class="tags"><p class="text-start"><?php
                if( $tags = get_the_tags() ) {
                  echo '<span class="meta-sep"></span>';
                  foreach( $tags as $content_tag ) {
                    $sep = ( $content_tag === end( $tags ) ) ? '' : ' ';
                    echo '<a href="' . esc_url(get_term_link( $content_tag, $content_tag->taxonomy )) . '">' . esc_html($content_tag->name) . '</a>' . esc_html($sep);
                  }
                } ?></p>
              </div>
            <?php } ?>
          </div>
          <div class="col-lg-6 col-md-6">
            <?php if(get_theme_mod('advance_training_academy_metafields_share_link',true)==1){ ?>
              <div class="att_socialbox text-md-end text-center mt-4">
                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" class="m-1 facebook" target="_blank"><i class="fab fa-facebook" aria-hidden="true"></i><span class="screen-reader-text"><?php esc_html_e( 'Facebook', 'advance-training-academy' ); ?></span></a>
                <a href="https://twitter.com/share?url=<?php the_permalink(); ?>" class="m-1 twitter" target="_blank"><i class="fab fa-twitter" aria-hidden="true"></i><span class="screen-reader-text"><?php esc_html_e( 'Twitter', 'advance-training-academy' ); ?></span></a>
                <a href="#" class="m-1 sharing" target="_blank"><i class="fas fa-solid fa-link"></i><span class="screen-reader-text"><?php esc_html_e( 'sharing', 'advance-training-academy' ); ?></span>
              </div>
            <?php }?>
          </div>
        </div>
        <div class="single-bottom-content pt-4">
         <?php if( get_theme_mod( 'advance_training_academy_show_single_post_pagination',true) != '') { ?>
           <?php
            if ( is_singular( 'attachment' ) ) {
            // Parent post navigation.
            the_post_navigation( array(
              'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'advance-training-academy' ),
            ) );
            }   elseif ( is_singular( 'post' ) ) {
            // Previous/next post navigation.  
            the_post_navigation( array(
            'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next <i class="fas fa-solid fa-chevron-right ms-2"></i>', 'advance-training-academy' ) . '</span> ' .
              '<span class="screen-reader-text">' . __( 'Next post:', 'advance-training-academy' ) . '</span> ' .
              '<span class="post-title mt-2">%title</span>',
            'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( '<i class="fas fa-solid fa-chevron-left me-2"></i> Previous', 'advance-training-academy' ) . '</span> ' .
              '<span class="screen-reader-text">' . __( 'Previous post:', 'advance-training-academy' ) . '</span> ' .
              '<span class="post-title mt-2">%title</span>',
            ) );
            }
            echo '<div class="clearfix"></div>';?>
          <?php } ?> 
          <div class="commentbox mt-5">
            <?php if( get_theme_mod( 'advance_training_academy_post_comment',true) != '') { 
            // If comments are open or we have at least one comment, load up the comment template
              if ( comments_open() || '0' != get_comments_number() ) {
                comments_template();}
            } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php get_template_part('template-parts/related-posts'); ?>
</article>
