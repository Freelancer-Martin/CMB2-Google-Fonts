<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/Freelancer-Martin/CMB2-Google-Fonts
 * @since             1.0.0
 * @package           cmb2-google-fonts
 *
 * @wordpress-plugin
 * Plugin Name:       CMB2 Google Font Field
 * Plugin URI:        https://github.com/Freelancer-Martin/CMB2-Google-Fonts
 * Description:       CMB2 Google Fonts lets you add google font for every title or text you like, simple and easy to use
 * Version:           1.0.0
 * Author:            freelancer Martin
 * Author URI:        http://developerforwebsites.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       cmb2-google-fonts
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
define( 'CMB2_Google_Font_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-plugin-name-activator.php
 */
function activate_cmb2_google_fonts() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-cmb2-google-fonts-activator.php';
	CMB2_Google_Font_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-plugin-name-deactivator.php
 */
function deactivate_cmb2_google_fonts() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-cmb2-google-fonts-deactivator.php';
	Google_Font_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_cmb2_google_fonts' );
register_deactivation_hook( __FILE__, 'deactivate_cmb2_google_fonts' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-cmb2-google-fonts.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_cmb2_google_fonts() {

	$plugin = new CMB2_Google_Font();
	$plugin->run();

}
run_cmb2_google_fonts();
