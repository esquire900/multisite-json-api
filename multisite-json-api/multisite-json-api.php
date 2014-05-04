<?php
/**
 * The WordPress Plugin Boilerplate.
 *
 * A foundation off of which to build well-documented WordPress plugins that
 * also follow WordPress Coding Standards and PHP best practices.
 *
 * @package   Multisite_JSON_API
 * @author    Kyle Leaders <kyle@technicasites.com>
 * @license   GPL-2.0+
 * @link      http://technicasites.com
 * @copyright 2014 Technica Sites LLC
 *
 * @wordpress-plugin
 * Plugin Name:       @TODO
 * Plugin URI:        @TODO
 * Description:       @TODO
 * Version:           0.0.1
 * Author:            @TODO
 * Author URI:        @TODO
 * Text Domain:       en_US
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 * GitHub Plugin URI: https://github.com/remkade/multisite-json-api
 * WordPress-Plugin-Boilerplate: v2.6.1
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/*----------------------------------------------------------------------------*
 * Public-Facing Functionality
 *----------------------------------------------------------------------------*/
require_once( plugin_dir_path( __FILE__ ) . 'public/class-multisite-json-api.php' );

register_activation_hook( __FILE__, array( 'Multisite_JSON_API', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'Multisite_JSON_API', 'deactivate' ) );

add_action( 'plugins_loaded', array( 'Multisite_JSON_API', 'get_instance' ) );

/*----------------------------------------------------------------------------*
 * Dashboard and Administrative Functionality
 *----------------------------------------------------------------------------*/

/*
 * @TODO:
 *
 * - replace `class-plugin-name-admin.php` with the name of the plugin's admin file
 * - replace Multisite_JSON_API_Admin with the name of the class defined in
 *   `class-plugin-name-admin.php`
 *
 * If you want to include Ajax within the dashboard, change the following
 * conditional to:
 *
 * if ( is_admin() ) {
 *   ...
 * }
 *
 * The code below is intended to to give the lightest footprint possible.
 */
if ( is_admin() && ( ! defined( 'DOING_AJAX' ) || ! DOING_AJAX ) ) {
	require_once( plugin_dir_path( __FILE__ ) . 'admin/class-multisite-json-api-admin.php' );
	add_action( 'plugins_loaded', array( 'Multisite_JSON_API_Admin', 'get_instance' ) );

}
