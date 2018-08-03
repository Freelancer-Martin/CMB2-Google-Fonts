<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       Freelancer Martin developerforwebsites@gmail.com
 * @since      1.0.0
 *
 * @package    CMB2_Google_Fonts
 * @subpackage CMB2_Google_Fonts/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    CMB2_Google_Fonts
 * @subpackage CMB2_Google_Fonts/includes
 * @author     Freelancer Martin developerforwebsites@gmail.com
 */
class cMB2_Google_Font_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'cmb2-google-fonts',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
