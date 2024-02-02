<?php

/**
 * Plugin Name: Testimonial - Addon for WPBakery Page Builder
 * Plugin URI: http://www.thecodude.com/codecanyon/testimonial-vc-addon
 * Description: Create nice and advance testimonial with more choice and more possibility.
 * Author: thecodude
 * Author URI: http://www.thecodude.com
 * Version: 1.2.0
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: vcat-testimonial
 * Domain Path: /languages
 *
 * Copyright (C) 2019  thecodude  mycodrops@gmail.com
 *
 */

// Exit if access directly
if ( !defined('ABSPATH') ) {
	die();
}

if ( !class_exists( 'VCAT_Testimonial' ) ) {

	class VCAT_Testimonial {
		public function __construct() {

			$this->define_constants();
			$this->load_assets();
			$this->define_functions();
			$this->define_classes();

			add_action('plugins_loaded', array( $this, 'after_plugins_loaded' ) );
		}

		/**
		 * Define Constants
		 */

		function define_constants() {
			define( 'VCAT_VERSION', '1.2.0' );
			define( 'VCAT_PLUGIN_FILE', __FILE__ );
			define( 'VCAT_PLUGIN_DIR_PATH', plugin_dir_path( __FILE__ ) );
			define( 'VCAT_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
			define( 'VCAT_PLUGIN_NAME', 'Testimonial - Addon for WPBakery Page Builder' );
		}

		/**
		 * Load Plugin Files
		 */

		function after_plugins_loaded() {
			load_plugin_textdomain( 'vcat-testimonial', false, dirname(__FILE__) . '/languages' );
		}

		/**
		 * Load Assets
		 */

		function front_assets() {
			wp_enqueue_style('tc-testimonial', VCAT_PLUGIN_URL . 'assets/css/testimonial.css', array(), VCAT_VERSION);
			vc_icon_element_fonts_enqueue( 'fontawesome' );
		}

		function load_assets() {
			add_action( 'wp_enqueue_scripts', array( $this, 'front_assets' ) );
		}

		/**
		 * Define Functions
		 */

		function define_functions() {
			require_once VCAT_PLUGIN_DIR_PATH . 'inc/functions.php';
		}


		/**
		 * Define Classes
		 */

		function define_classes() {
			require_once VCAT_PLUGIN_DIR_PATH . 'inc/class-vc-testimonial.php';
		}

	}

	new VCAT_Testimonial();
}

