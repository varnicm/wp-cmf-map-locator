<?php
/**
 * Plugin Name: CMF Map Locator
 * Plugin URI: http://moesanjari.com/wp-cmf-map-locator
 * Description: A plugin to manage and display location data on a map.
 * Version: 1.0
 * Author: Moe Sanjari
 * Author URI: http://moesanjari.com
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

<?php
/**
 * Plugin Name: Your Plugin Name
 * Description: A brief description of your plugin.
 * Version: 1.0
 * Author: Your Name
 * Author URI: Your Website
 */

// Define the plugin directory path and URL for reuse
define('YOUR_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('YOUR_PLUGIN_URL', plugin_dir_url(__FILE__));

// Include the admin menu file
require_once(YOUR_PLUGIN_DIR . 'admin/admin-menu.php');

// Include the database file if necessary
require_once(YOUR_PLUGIN_DIR . 'includes/database.php');

// Activation hook for creating a database table
register_activation_hook(__FILE__, 'cmf_create_table');
