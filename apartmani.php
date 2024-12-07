<?php
/**
 * Plugin Name: Apartmani
 * Plugin URI: https://mp-web.hr
 * Description: Custom plugin for managing apartments.
 * Version: 1.0.0
 * Author: Maro Pinčević
 * Author URI: https://maropincevic.form.hr
 * License: GPL2
 * Text Domain: apartmani
 */

// Prevent direct access to this file for security 

if (!defined('ABSPATH')) :
    exit;
endif;

// Include the Composer autoloader if it exists

if (file_exists(__DIR__ . '/vendor/autoload.php')) :
    require_once __DIR__ . '/vendor/autoload.php';
endif;

// Check if the main plugin class exists and initialize it

if (class_exists('Apartmani\Plugin')) :
    Apartmani\Plugin::getInstance();
endif;


