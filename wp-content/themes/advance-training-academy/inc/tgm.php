<?php

	require get_template_directory() . '/inc/class-tgm-plugin-activation.php';
/**
 * Recommended plugins.
 */
function advance_training_academy_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'TS Demo Importer', 'advance-training-academy' ),
			'slug'             => 'ts-demo-importer',
			'required'         => false,
			'force_activation' => false,
		)
	);
	$config = array();
	tgmpa( $plugins, $config );

}
add_action( 'tgmpa_register', 'advance_training_academy_register_recommended_plugins' );