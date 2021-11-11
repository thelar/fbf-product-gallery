<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://4x4tyres.co.uk
 * @since             1.0.0
 * @package           Fbf_Product_Gallery
 *
 * @wordpress-plugin
 * Plugin Name:       4x4 Product Gallery
 * Plugin URI:        https://github.com/thelar/fbf-agent-tracking
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Kevin Price-Ward
 * Author URI:        https://4x4tyres.co.uk
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       fbf-product-gallery
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
define( 'FBF_PRODUCT_GALLERY_VERSION', '1.0.1' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-fbf-product-gallery-activator.php
 */
function activate_fbf_product_gallery() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-fbf-product-gallery-activator.php';
	Fbf_Product_Gallery_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-fbf-product-gallery-deactivator.php
 */
function deactivate_fbf_product_gallery() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-fbf-product-gallery-deactivator.php';
	Fbf_Product_Gallery_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_fbf_product_gallery' );
register_deactivation_hook( __FILE__, 'deactivate_fbf_product_gallery' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-fbf-product-gallery.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_fbf_product_gallery() {

	$plugin = new Fbf_Product_Gallery();
	$plugin->run();

}
run_fbf_product_gallery();
