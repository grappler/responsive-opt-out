<?php

/*
 * Plugin Name: Responsive Opt-Out
 * Plugin URI: http://wordpress.org/extend/plugins/responsive-opt-out/
 * Description: Responsive Opt-Out allows visitors of your site to switch between the flexible and fixed width layout.
 * Version: 0.3
 * Author: Ulrich Pogson
 * Author URI: http://ulrich.pogson.ch
 * License: GPL2+
 */
 
/*
    Copyright (C) 2013  Ulrich Pogson

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.

*/

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Adds a custom class to the array of body classes, to allows to switch class for the fixed width.
 */
if (!function_exists('responsive_setup')):

	function responsive_opt_out_body_classes( $classes ) {
		$classes[] = 'responsive';
		return $classes;
	}
	add_filter( 'body_class', 'responsive_opt_out_body_classes' );

endif;

/**
 * A safe way of adding JavaScripts to a WordPress generated page.
 */
if (!is_admin())
	add_action('wp_enqueue_scripts', 'responsive_opt_out_js');

if (!function_exists('responsive_opt_out_js')) {

	function responsive_opt_out_js() {
		wp_enqueue_script('responsive-opt-out', plugins_url( '/js/responsive-opt-out.min.js', __FILE__ ), '1.0', false);
	}

}
