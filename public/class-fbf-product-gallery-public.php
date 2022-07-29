<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://4x4tyres.co.uk
 * @since      1.0.0
 *
 * @package    Fbf_Product_Gallery
 * @subpackage Fbf_Product_Gallery/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Fbf_Product_Gallery
 * @subpackage Fbf_Product_Gallery/public
 * @author     Kevin Price-Ward <kevin.price-ward@4x4tyres.co.uk>
 */
class Fbf_Product_Gallery_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Fbf_Product_Gallery_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Fbf_Product_Gallery_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/fbf-product-gallery-public.css', array(), $this->version, 'all' );
		wp_enqueue_style( $this->plugin_name . '/pinchzoomer.css', plugin_dir_url( __FILE__ ) . 'css/pinchzoomer.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {
		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Fbf_Product_Gallery_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Fbf_Product_Gallery_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/fbf-product-gallery-public.js', array( 'jquery' ), $this->version, false );
        if(is_product() || is_singular('brand')){
            wp_enqueue_script( $this->plugin_name . '/hammer.min.js', plugin_dir_url( __FILE__ ) . 'js/hammer.min.js', [ 'jquery' ], $this->version, false );
            wp_enqueue_script( $this->plugin_name . '/TweenMax.min.js', plugin_dir_url( __FILE__ ) . 'js/TweenMax.min.js', [ 'jquery' ], $this->version, false );
            wp_enqueue_script( $this->plugin_name . '/jquery.pinchzoomer.min.js', plugin_dir_url( __FILE__ ) . 'js/jquery.pinchzoomer.min.js', [ 'jquery' ], $this->version, false );
        }
	}

}
