<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Advance Training Academy
 */
?>

<div id="sidebar" class="mt-3">    
    <?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
        <aside role="complementary" aria-label="firstsidebar" id="archives" class="widget">
            <h2 class="widget-title"><?php esc_html_e( 'Archives', 'advance-training-academy' ); ?></h2>
            <ul>
                <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
            </ul>
        </aside>
        <aside role="complementary" aria-label="secondsidebar" id="meta" class="widget">
            <h2 class="widget-title"><?php esc_html_e( 'Meta', 'advance-training-academy' ); ?></h2>
            <ul>
                <?php wp_register(); ?>
                    <li><?php wp_loginout(); ?></li>
                <?php wp_meta(); ?>
            </ul>
        </aside>
        <aside id="search" class="widget" role="complementary" aria-label="thirdsidebar">
            <h3 class="widget-title"><?php esc_html_e( 'Search', 'advance-training-academy' ); ?></h3>
            <?php get_search_form(); ?>
        </aside>
        <aside id="categories" class="widget" role="complementary" aria-label="forthsidebar">
            <h3 class="widget-title"><?php esc_html_e( 'Categories', 'advance-training-academy' ); ?></h3>
            <ul>
                <?php wp_list_categories('title_li=');  ?>
            </ul>
        </aside>
    <?php endif; // end sidebar widget area ?>  
</div>