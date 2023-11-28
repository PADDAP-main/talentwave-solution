<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://paddap.nl
 * @since             1.0.0
 * @package           Talentwave_Solution
 *
 * @wordpress-plugin
 * Plugin Name:       Talentwave Solution
 * Plugin URI:        https://paddap.nl/talentwave-solution
 * Description:        All-in-one oplossing voor jouw recruitment bureau. Wij bieden een uniek podium met slimme tools om jouw business te laten groeien.
 * Version:           1.0.6
 * Author:            PADDAP
 * Author URI:        https://paddap.nl/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       talentwave-solution
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
define( 'TALENTWAVE_SOLUTION_VERSION', '1.0.6' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-talentwave-solution-activator.php
 */
function activate_talentwave_solution() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-talentwave-solution-activator.php';
	Talentwave_Solution_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-talentwave-solution-deactivator.php
 */
function deactivate_talentwave_solution() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-talentwave-solution-deactivator.php';
	Talentwave_Solution_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_talentwave_solution' );
register_deactivation_hook( __FILE__, 'deactivate_talentwave_solution' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-talentwave-solution.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_talentwave_solution() {

	$plugin = new Talentwave_Solution();
	$plugin->run();

}

use YahnisElsts\PluginUpdateChecker\v5\PucFactory;
require plugin_dir_path( __FILE__ ) . 'plugin-update-checker/plugin-update-checker.php';

$myUpdateChecker = PucFactory::buildUpdateChecker(
	'https://github.com/PADDAP-main/talentwave-solution',
	__FILE__,
	'talentwave-solution'
);

$myUpdateChecker->getVcsApi()->enableReleaseAssets();

run_talentwave_solution();
