<?php
if( !class_exists( 'wphaxTheme' ) ) {

	class wphaxTheme {

		public function __construct() {
			// enqueue scripts and styles on the frontend
			add_action( 'wp_enqueue_scripts', array( $this, 'wp_enqueue_scripts' ) );
		}

		public function wp_enqueue_scripts() {
			global $wp_version;

			// styles
			wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/node_modules/bootstrap/dist/css/bootstrap.min.css', array(), $wp_version );
			wp_enqueue_style( 'bootstrap-theme', get_template_directory_uri() . '/node_modules/bootstrap/dist/css/bootstrap-theme.min.css', array(), $wp_version );
			wp_enqueue_style( 'wphax-screen', get_template_directory_uri() . '/css/screen.css', array(), $wp_version, 'screen' );
			wp_enqueue_style( 'wphax-print', get_template_directory_uri() . '/css/print.css', array(), $wp_version, 'print' );

			// scripts
			wp_enqueue_script( 'jquery' );
			wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.min.js', array(), $wp_version, true );
		}

	}

}

global $wphax;
$wphax = new wphaxTheme();