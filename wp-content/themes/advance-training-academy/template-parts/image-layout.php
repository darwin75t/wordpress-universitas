<?php
/**
 * The template part for displaying Image content
 *
 * @package Advance Training Academy
 * @subpackage advance-training-academy
 * @since advance-training-academy 1.0
 */
?>	

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry-content">
        <h1><?php the_title();?></h1>
        <div class="entry-attachment">
            <div class="attachment">
                <?php advance_training_academy_the_attached_image(); ?>
            </div>

            <?php if ( has_excerpt() ) : ?>
                <div class="entry-caption">
                    <div class="entry-content">
                        <?php the_excerpt(); ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>    
        <?php
            the_content();
            wp_link_pages( array(
                'before' => '<div class="page-links">' . __( 'Pages:', 'advance-training-academy' ),
                'after'  => '</div>',
            ) );
        ?>
    </div>
    <?php edit_post_link( __( 'Edit', 'advance-training-academy' ), '<footer role="contentinfo" class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?> 
</article>   
<?php
    // If comments are open or we have at least one comment, load up the comment template
    if ( comments_open() || '0' != get_comments_number() )
        comments_template();

    if ( is_singular( 'attachment' ) ) {
        // Parent post navigation.
        the_post_navigation( array(
            'prev_text' => _x( '<span class="meta-nav text-uppercase p-2">Published in</span><span class="post-title my-3 mx-0">%title</span>', 'Parent post link', 'advance-training-academy' ),
        ) );
    }   elseif ( is_singular( 'post' ) ) {
        // Previous/next post navigation.
        the_post_navigation( array(
            'next_text' => '<span class="meta-nav text-uppercase p-2" aria-hidden="true">' . __( 'Next', 'advance-training-academy' ) . '</span> ' .
                '<span class="screen-reader-text">' . __( 'Next post:', 'advance-training-academy' ) . '</span> ' .
                '<span class="post-title my-3 mx-0">%title</span>',
            'prev_text' => '<span class="meta-nav text-uppercase p-2" aria-hidden="true">' . __( 'Previous', 'advance-training-academy' ) . '</span> ' .
                '<span class="screen-reader-text">' . __( 'Previous post:', 'advance-training-academy' ) . '</span> ' .
                '<span class="post-title my-3 mx-0">%title</span>',
        ) );
    }
?>