<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://curious12.com
 * @since             1.0.0
 * @package           C12_Elementor_Plugin
 *
 * @wordpress-plugin
 * Plugin Name:       c12-elementor-plugin
 * Plugin URI:        https://curious12.com
 * Description:       This is the c12-plugin for Arrow
 * Version:           1.0.0
 * Author:            Curious12
 * Author URI:        https://curious12.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       c12-elementor-plugin
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'C12_ELEMENTOR_PLUGIN_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-c12-elementor-plugin-activator.php
 */
function activate_c12_elementor_plugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-c12-elementor-plugin-activator.php';
	C12_Elementor_Plugin_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-c12-elementor-plugin-deactivator.php
 */
function deactivate_c12_elementor_plugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-c12-elementor-plugin-deactivator.php';
	C12_Elementor_Plugin_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_c12_elementor_plugin' );
register_deactivation_hook( __FILE__, 'deactivate_c12_elementor_plugin' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-c12-elementor-plugin.php';


/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_c12_elementor_plugin() {

	$plugin = new C12_Elementor_Plugin();
	$plugin->run();

}
run_c12_elementor_plugin();
