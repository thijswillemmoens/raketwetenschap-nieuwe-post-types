<?php
/**
 * Raketwetenschap Nieuwe Post Types Plugin.
 *
 * @package   	Raketwetenschap
 * @subpackage 	Plugins/Nieuwe_Post_types
 * @copyright 	Copyright (C) 2022 - 2023, Thijs Moens.
 *
 * @raketwetenschap-nieuwe-post-types
 * Plugin Name: Raketwetenschap Nieuwe Post Types
 * Version:     8.0.0
 * Plugin URI:  https://raketwetenschap.com
 * Description: Een simpele plugin voor het maken van nieuwe post types op de website van Raketwetenschap.
 * Author:      Thijs Moens
 * Author URI:  https://raketwetenschap.com
 * Text Domain: raketwetenschap-nieuwe-post-types
 */

if ( ! function_exists( 'add_filter' ) ) {
	header( 'Status: 403 Forbidden' );
	header( 'HTTP/1.1 403 Forbidden' );
	exit();
}

if ( ! defined( 'RW_NIEUWE_POST_TYPES_FILE' ) ) {
	define( 'RW_NIEUWE_POST_TYPES_FILE', __FILE__ );
}

// Laad de plugin.
require_once dirname( RW_NIEUWE_POST_TYPES_FILE ) . '/raketwetenschap-nieuwe-post-types-hoofd.php';