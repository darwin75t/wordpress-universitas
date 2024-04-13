<?php
/**
 * The template part for displaying grid post
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
<div class="col-lg-4 col-md-4">
  <article class="page-box my-3">
    <?php if( get_theme_mod( 'advance_training_academy_show_featured_image_post',true) != '' && has_post_thumbnail()) { ?>
      <div class="box-img">
        <?php the_post_thumbnail(); ?>
      </div>
    <?php } ?>
    <div class="new-text">
      <div class="metabox">
        <?php if( get_theme_mod( 'advance_training_academy_date_hide',true) != '') { ?>
          <span class="entry-date me-2"><i class="<?php echo esc_attr(get_theme_mod('advance_training_academy_date_icon','fa fa-calendar')); ?> me-1"></i><a href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span><span class="mx-1"><?php echo esc_html( get_theme_mod('advance_training_academy_metabox_separator_blog_post','|') ); ?></span>
        <?php } ?>
        <?php if( get_theme_mod( 'advance_training_academy_author_hide',true) != '') { ?>
          <span class="entry-author mx-2"><i class="<?php echo esc_attr(get_theme_mod('advance_training_academy_author_icon','fa fa-user')); ?> me-1"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a></span><span class="mx-1"><?php echo esc_html( get_theme_mod('advance_training_academy_metabox_separator_blog_post','|') ); ?></span>
        <?php } ?>
        <?php if( get_theme_mod( 'advance_training_academy_comment_hide',true) != '') { ?>
          <span class="entry-comments mx-2"><i class="<?php echo esc_attr(get_theme_mod('advance_training_academy_comment_icon','fas fa-comments')); ?> me-1"></i><?php comments_number( __('0 Comments','advance-training-academy'), __('0 Comments','advance-training-academy'), __('% Comments','advance-training-academy') ); ?></span>
        <?php } ?>
      </div>
      <h2><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
      <?php if(get_theme_mod('advance_training_academy_blog_post_description_option') == 'Full Content'){ ?>
        <div class="entry-content"><?php the_content();?></div>
      <?php }
      if(get_theme_mod('advance_training_academy_blog_post_description_option', 'Excerpt Content') == 'Excerpt Content'){ ?>
        <?php if(get_the_excerpt()) { ?>
          <div class="entry-content"><p><?php $excerpt = get_the_excerpt(); echo esc_html( advance_training_academy_string_limit_words( $excerpt, esc_attr(get_theme_mod('advance_training_academy_excerpt_number','20')))); ?> <?php echo esc_html( get_theme_mod('advance_training_academy_post_suffix_option','...') ); ?></p></div>
        <?php }?>
      <?php }?>
      <div class="post-btn">
        <?php if( get_theme_mod('advance_training_academy_button_text','Read More') != ''){ ?>
          <div class="read-more-btn">
            <a href="<?php the_permalink(); ?>"><?php echo esc_html(get_theme_mod('advance_training_academy_button_text','Read More'));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('advance_training_academy_button_text','Read More'));?></span></a>
          </div>
        <?php } ?>
      </div>
    </div>
    <div class="clearfix"></div>
  </article>
</div>