<?php

/**
 *
 * @wordpress-plugin
 * Plugin Name:       PayPal Pro Credit Card gateway for WooCommerce
 * Plugin URI:        http://webs-spider.com/
 * Description:       Provides a Credit Card Payment Gateway through Paypal Pro for WooCommerce.
 * Version:           1.2.1
 * Author:            johnwickjigo
 * Author URI:        http://webs-spider.com/
 * License:           GNU General Public License v3.0
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain:       paypal-pro-credit-card-gateway-for-woocommerce
 * Domain Path:       /languages
 */
// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-paypal-pro-credit-card-gateway-for-woocommerce-activator.php
 */
function activate_paypal_pro_credit_card_gateway_for_woocommerce() {
    require_once plugin_dir_path(__FILE__) . 'includes/class-paypal-pro-credit-card-gateway-for-woocommerce-activator.php';
    PayPal_Pro_Credit_Card_Gateway_For_WooCommerce_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-paypal-pro-credit-card-gateway-for-woocommerce-deactivator.php
 */
function deactivate_paypal_pro_credit_card_gateway_for_woocommerce() {
    require_once plugin_dir_path(__FILE__) . 'includes/class-paypal-pro-credit-card-gateway-for-woocommerce-deactivator.php';
    PayPal_Pro_Credit_Card_Gateway_For_WooCommerce_Deactivator::deactivate();
}

register_activation_hook(__FILE__, 'activate_paypal_pro_credit_card_gateway_for_woocommerce');
register_deactivation_hook(__FILE__, 'deactivate_paypal_pro_credit_card_gateway_for_woocommerce');

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path(__FILE__) . 'includes/class-paypal-pro-credit-card-gateway-for-woocommerce.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_paypal_pro_credit_card_gateway_for_woocommerce() {

    $plugin = new PayPal_Pro_Credit_Card_Gateway_For_WooCommerce();
    $plugin->run();
}

run_paypal_pro_credit_card_gateway_for_woocommerce();
