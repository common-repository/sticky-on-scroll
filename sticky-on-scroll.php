<?php
/*
Plugin Name: Sticky on Scroll
Description: You can pick any element that you want to stick on top of the page when you scroll down. It can be used for navigation menus or any element that you want as sticky.
Version: 2.0.1
Requires at least: 5.2
Requires PHP:      7.2
License:           GPL v2 or later
License URI:       https://www.gnu.org/licenses/gpl-2.0.html
Author: Latif Pala
Author URI: https://profiles.wordpress.org/latifpala
Domain Path:       /languages
Text Domain: sticky-scroll
*/
 
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
define('STSC_ROOT', plugin_dir_path(__FILE__));

function stsc_load_custom_scripts($hook) {
        
        wp_register_script('stsc_stick_attop_js', plugins_url('/assets/js/jquery.stopattop.js', __FILE__), array( 'jquery' ), '2.0.1');
		wp_enqueue_script('stsc_stick_attop_js');


		$div_class = get_option('stsc_Elements');
		$width = get_option('stsc_min_screen');

		$args_array = array(
  		  	'selectors' => $div_class,
  		  	'width'		=> $width
		);
		wp_register_script('stsc_stick_attop_custom_js', plugins_url('/assets/js/jquery.custom.js', __FILE__), array( 'jquery' ), '2.0.1');
		wp_localize_script( 'stsc_stick_attop_custom_js', 'SS_obj', $args_array );
		wp_enqueue_script('stsc_stick_attop_custom_js');


}
add_action('wp_enqueue_scripts', 'stsc_load_custom_scripts');

function stsc_load_admin_custom_scripts($hook){
	wp_enqueue_style( 'stsc_admin_custom_style', plugin_dir_url( __FILE__ ) . 'assets/css/stsc-admin-style.css' );
}
add_action('admin_enqueue_scripts', 'stsc_load_admin_custom_scripts');

add_action( 'init', 'stsc_load_textdomain' );
function stsc_load_textdomain() {
	load_plugin_textdomain( 'sticky-scroll', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' ); 
}
require dirname( __FILE__ ) . '/admin/stsc-admin-settings.php';