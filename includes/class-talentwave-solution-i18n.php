<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://paddap.nl
 * @since      1.0.0
 *
 * @package    Talentwave_Solution
 * @subpackage Talentwave_Solution/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Talentwave_Solution
 * @subpackage Talentwave_Solution/includes
 * @author     PADDAP <development@paddap.nl>
 */
class Talentwave_Solution_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'talentwave-solution',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
