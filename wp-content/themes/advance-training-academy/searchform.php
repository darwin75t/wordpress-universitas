<?php
/**
 * The template for displaying search forms in advance-training-academy
 *
 * @package Advance Training Academy
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php echo esc_html_x( 'Search for:', 'label', 'advance-training-academy' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder','advance-training-academy' ); ?>" value="<?php echo esc_attr( get_search_query()) ?>" name="s">
	</label>
	<input type="submit" class="search-submit" value="<?php echo esc_html_x( 'Search', 'submit button','advance-training-academy' ); ?>">
</form>