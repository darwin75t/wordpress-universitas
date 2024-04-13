<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Advance Training Academy
 */

get_header(); ?>

<main role="main" id="maincontent" class="content-ts">
	<div class="container">
        <div class="py-5">
			<h1><?php echo esc_html(get_theme_mod('advance_training_academy_title_404_page',__('404','advance-training-academy')));?></h1>
			<p class="text-404"><?php echo esc_html(get_theme_mod('advance_training_academy_content_404_page',__('We could not find the page you were looking for.','advance-training-academy')));?></p>
			<?php if( get_theme_mod('advance_training_academy_button_404_page','Go Back') != ''){ ?>
				<div class="read-moresec my-4">
	        		<a href="<?php echo esc_url(home_url()); ?>" class="py-2 px-3"><?php echo esc_html(get_theme_mod('advance_training_academy_button_404_page',__('Go Back','advance-training-academy')));?><span class="screen-reader-text"><?php esc_html_e( 'Go Back', 'advance-training-academy' ); ?></span></a>
	        	</div>
        	<?php } ?>
			<div class="clearfix"></div>
        </div>
	</div>
</main>

<?php get_footer(); ?>