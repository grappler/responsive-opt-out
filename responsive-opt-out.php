<?php
/**
 * Responsive Opt-Out
 *
 * Responsive Opt-Out allows visitors of your site to switch between the flexible and fixed width layout.
 *
 * @package   Responsive Opt-Out
 * @author    Ulrich Pogson <ulrich@pogson.ch>
 * @license   GPL-2.0+
 * @link      http://ulrich.pogson.ch/
 * @copyright 2013 Ulrich Pogson
 *
 * @wordpress-plugin
 * Plugin Name: Responsive Opt-Out
 * Plugin URI:  http://wordpress.org/extend/plugins/responsive-opt-out/
 * Description: Responsive Opt-Out allows visitors of your site to switch between the flexible and fixed width layout.
 * Version:     0.4.0
 * Author:      Ulrich Pogson
 * Author URI:  http://ulrich.pogson.ch
 * License:     GPL2+
 * Text Domain: responsive-opt-out
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Adds a `responsive` class to the array of body classes, to allows to switch class for the fixed width.
 *
 * @since 0.1.0
 */
function responsive_opt_out_body_classes( $classes ) {
	$classes[] = 'responsive';
	return $classes;
}
add_filter( 'body_class', 'responsive_opt_out_body_classes' );

/**
 * A safe way of adding JavaScripts to a WordPress generated page.
 *
 * @since 0.1.0
 */
function responsive_opt_out_js() {
	$suffix = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
	wp_enqueue_script('responsive-opt-out', plugins_url( '/js/responsive-opt-out' . $suffix . '.js', __FILE__ ), '1.0', false);
}
add_action( 'wp_enqueue_scripts', 'responsive_opt_out_js' );