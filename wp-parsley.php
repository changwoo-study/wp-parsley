<?php
/**
 * Plugin Name: wp-parsley
 * Description: <a href="http://parsleyjs.org/">parsley</a> library tester
 */

add_action( 'admin_menu', 'parsley_admin_menu' );

function parsley_admin_menu() {
	add_menu_page( 'Parsley', 'Parsley', 'manage_options', 'wp-parsley', 'parsley_output_admin_menu' );
}

function parsley_output_admin_menu() {
	include( __DIR__ . '/templates/wp-parsley.php' );
	wp_enqueue_script(
		'wp-parsley',
		plugin_dir_url( __FILE__ ) . 'assets/bower_components/parsleyjs/dist/parsley.min.js',
		array( 'jquery' ),
		'2.8.1',
		true
	);
	wp_enqueue_style(
		'wp-parsley-doc',
		plugin_dir_url( __FILE__ ) . 'assets/css/docs.css'
	);
}
