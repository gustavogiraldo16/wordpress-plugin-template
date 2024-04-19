<?php
/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://www.webtemplate.com/
 * @since             1.0.0
 * @package           arrendasoft-customer-area
 *
 * @wordpress-plugin
 * Plugin Name:       Template
 * Plugin URI:        http://www.webtemplate.com/
 * Description:       Aute ea ea ut esse ullamco ullamco ea nostrud ut. Elit excepteur labore commodo reprehenderit est nostrud.
 * Version:           1.0.0
 * Author:            Gustavo Giraldo
 * Author URI:        https://github.com/gustavogiraldo16
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       Template
 * Domain Path:       /languages
 * Requires at least: 6.0
 * Requires PHP: 7.4.33
 */

// If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) exit;

// Plugin constants
define( 'TEMPLATE_DIR', __FILE__);
define( 'TEMPLATE_PLUGIN_DIR', plugin_dir_path( TEMPLATE_DIR ) );
define( 'TEMPLATE_PLUGIN_URL', plugin_dir_url( TEMPLATE_DIR ) );
define( 'TEMPLATE_PLUGIN_NAME', 'TEMPLATE' );
define( 'TEMPLATE_CANTIDAD_ELEMENTOS', 12 );
define( 'TEMPLATE_VERSION', '1.0.0' );

// Include classes
require_once TEMPLATE_PLUGIN_DIR . 'classes/PluginManager.php';

// Hook for activation
register_activation_hook( TEMPLATE_DIR, [PluginManager::class, 'template_activate'] );

// Hook for deactivation
register_deactivation_hook( TEMPLATE_DIR, [PluginManager::class, 'template_deactivate'] );

// Incluir el archivo de funciones para renderizar_api_html
require_once TEMPLATE_PLUGIN_DIR . 'includes/renderizar_api_html.php';
