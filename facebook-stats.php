<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              williambewzenko.github.io
 * @since             1.0.0
 * @package           Facebook_Stats
 *
 * @wordpress-plugin
 * Plugin Name:       WP Facebook Stats
 * Plugin URI:        https://github.com/WilliamBewzenko/facebook-stats
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            William Bewzenko de Jesus
 * Author URI:        williambewzenko.github.io
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       facebook-stats
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-facebook-stats-activator.php
 */
function activate_Facebook_Stats() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-facebook-stats-activator.php';
	Facebook_Stats_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-facebook-stats-deactivator.php
 */
function deactivate_Facebook_Stats() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-facebook-stats-deactivator.php';
	Facebook_Stats_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_Facebook_Stats' );
register_deactivation_hook( __FILE__, 'deactivate_Facebook_Stats' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-facebook-stats.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_Facebook_Stats() {
	$plugin = new Facebook_Stats();
	$plugin->run();
}
run_Facebook_Stats();
