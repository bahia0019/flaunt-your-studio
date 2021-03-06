<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://flauntsites.com
 * @since      1.0.0
 *
 * @package    Flaunt_Your_Studio
 * @subpackage Flaunt_Your_Studio/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Flaunt_Your_Studio
 * @subpackage Flaunt_Your_Studio/includes
 * @author     William Bay <william@williambay.com>
 */
class Flaunt_Your_Studio_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'flaunt-your-studio',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
