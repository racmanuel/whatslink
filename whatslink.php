<?php
/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress or ClassicPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/racmanuel
 * @since             1.0.0
 * @package           Whatslink
 *
 * @wordpress-plugin
 * Plugin Name:       WhatsLink
 * Plugin URI:        https://plugin.com/whatslink-uri/
 * Description:       Plugin to show with a Shortcode a WhatsApp Form for generate links,
 * Version:           1.0.0
 * Author:            Manuel Ramirez Coronel
 * Requires at least: 1.0.0
 * Requires PHP:      7.4
 * Tested up to:      78433
 * Author URI:        https://github.com/racmanuel/
 * License:           GPL-2.0+
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       whatslink
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Current plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'WHATSLINK_VERSION', '1.0.0' );

/**
 * Define the Plugin basename
 */
define( 'WHATSLINK_BASE_NAME', plugin_basename( __FILE__ ) );

/**
 * The code that runs during plugin activation.
 *
 * This action is documented in includes/class-whatslink-activator.php
 * Full security checks are performed inside the class.
 */
function whatslink_activate() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-whatslink-activator.php';
	Whatslink_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 *
 * This action is documented in includes/class-whatslink-deactivator.php
 * Full security checks are performed inside the class.
 */
function whatslink_deactivate() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-whatslink-deactivator.php';
	Whatslink_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'whatslink_activate' );
register_deactivation_hook( __FILE__, 'whatslink_deactivate' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-whatslink.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * Generally you will want to hook this function, instead of callign it globally.
 * However since the purpose of your plugin is not known until you write it, we include the function globally.
 *
 * @since    1.0.0
 */
function whatslink_run() {

	$plugin = new Whatslink();
	$plugin->run();

}
whatslink_run();
