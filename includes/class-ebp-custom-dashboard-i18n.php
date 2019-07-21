<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://duaneleem.com
 * @since      1.0.0
 *
 * @package    Ebp_Custom_Dashboard
 * @subpackage Ebp_Custom_Dashboard/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Ebp_Custom_Dashboard
 * @subpackage Ebp_Custom_Dashboard/includes
 * @author     Duane Leem <duane@leemfamily.com>
 */
class Ebp_Custom_Dashboard_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'ebp-custom-dashboard',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
