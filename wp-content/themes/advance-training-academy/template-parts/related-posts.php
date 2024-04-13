<?php 

$archive_year  = get_the_time('Y');
$archive_month = get_the_time('m');
$archive_day   = get_the_time('d');

$related_posts = advance_training_academy_related_posts();

if(get_theme_mod('advance_training_academy_show_related_post',true)==1){ ?>
<?php if ( $related_posts->have_posts() ): ?>
    <div class="related-posts">
        <?php if ( get_theme_mod('advance_training_academy_related_post_title','Related Posts') != '' ) {?>
            <h3 class="mb-3"><?php echo esc_html( get_theme_mod('advance_training_academy_related_post_title',__('Related Posts','advance-training-academy')) ); ?></h3>
        <?php }?>
        <div class="row">
            <?php while ( $related_posts->have_posts() ) : $related_posts->the_post(); ?>
                <div class="col-lg-4 col-md-6">
                    <div class="related-box mb-3 p-2">
                        <?php if( get_theme_mod( 'advance_training_academy_date_hide',true) != '') { ?>
                            <div class="metabox">
                                <span class="entry-date"><i class="fa fa-calendar me-1"></i><a href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span><?php echo esc_html( get_theme_mod('advance_training_academy_metabox_separator_blog_post') ); ?>
                            </div>
                        <?php }?>
                        <?php if(has_post_thumbnail()) { ?>
                            <div class="box-image mb-3">
                                <?php the_post_thumbnail(); ?>
                            </div>
                        <?php }?>
                        <h4 class="p-0"><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></h4>
                        <div class="entry-content"><p class="my-3 mx-0"><?php $advance_training_academy_excerpt = get_the_excerpt(); echo esc_html( advance_training_academy_string_limit_words( $advance_training_academy_excerpt, esc_attr(get_theme_mod('advance_training_academy_related_post_excerpt_number','20')))); ?> <?php echo esc_html( get_theme_mod('advance_training_academy_post_suffix_option','...') ); ?></p></div>
                        <?php if( get_theme_mod('advance_training_academy_button_text','Read More') != ''){ ?>
                            <div class="read-more-btn my-3 mx-0">
                                <a href="<?php the_permalink(); ?>" class="py-3 px-4"><?php echo esc_html(get_theme_mod('advance_training_academy_button_text','Read More'));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('advance_training_academy_button_text','Read More'));?></span></a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
<?php endif; ?>
<?php wp_reset_postdata(); }?>