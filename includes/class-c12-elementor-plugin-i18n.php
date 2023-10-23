<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://curious12.com
 * @since      1.0.0
 *
 * @package    C12_Elementor_Plugin
 * @subpackage C12_Elementor_Plugin/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    C12_Elementor_Plugin
 * @subpackage C12_Elementor_Plugin/includes
 * @author     Curious12 <info@curious12.com>
 */
class C12_Elementor_Plugin_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'c12-elementor-plugin',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
