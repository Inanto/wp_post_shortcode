<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/Inanto
 * @since             1.0.0
 * @package           Wp_post_shortcode
 *
 * @wordpress-plugin
 * Plugin Name:       Post Shortcode
 * Plugin URI:        https://github.com/Inanto/wp_post_shortcode
 * Description:       Get single post from shortcode
 * Version:           1.0.0
 * Author:            Leo Libanan
 * Author URI:        https://github.com/Inanto
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp_post_shortcode
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'WP_POST_SHORTCODE_VERSION', '1.0.0' );

require_once plugin_dir_path( __FILE__ ) . 'includes/wp_post_shortcode_class.php';

function run_wp_post_shortcode() {

	$plugin = new WP_Shortcode();
	$plugin->register();

}
run_wp_post_shortcode();
