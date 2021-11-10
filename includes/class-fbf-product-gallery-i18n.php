<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://4x4tyres.co.uk
 * @since      1.0.0
 *
 * @package    Fbf_Product_Gallery
 * @subpackage Fbf_Product_Gallery/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Fbf_Product_Gallery
 * @subpackage Fbf_Product_Gallery/includes
 * @author     Kevin Price-Ward <kevin.price-ward@4x4tyres.co.uk>
 */
class Fbf_Product_Gallery_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'fbf-product-gallery',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
