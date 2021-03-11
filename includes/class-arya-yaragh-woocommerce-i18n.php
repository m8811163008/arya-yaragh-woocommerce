<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://www.instagram.com/miladhesami1369/
 * @since      1.0.0
 *
 * @package    Arya_Yaragh_Woocommerce
 * @subpackage Arya_Yaragh_Woocommerce/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Arya_Yaragh_Woocommerce
 * @subpackage Arya_Yaragh_Woocommerce/includes
 * @author     Milad, Mohammad <m8811163008@gmail.com>
 */
class Arya_Yaragh_Woocommerce_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'arya-yaragh-woocommerce',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
