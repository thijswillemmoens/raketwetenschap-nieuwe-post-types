<?php
/**
 * Thijs Moens Nieuwe Post Types Plugin.
 *
 * @package   	Thijs__
 * @subpackage 	Thijs/Nieuwe_Post_types
 * @copyright 	Copyright (C) 2022, Thijs Moens
 *
 * @thijs--nieuwe-post-types
 * Plugin Name: Thijs Moens Nieuwe Post Types
 * Version:     1.0
 * Plugin URI:  https://thijs.website
 * Description: Een simpele plugin voor het maken van nieuwe post types op de website van Thijs Moens.
 * Author:      Thijs Moens
 * Author URI:  https://thijs.website
 * Text Domain: thijs--nieuwe-post-types
 */

if ( ! function_exists( 'add_filter' ) ) {
	header( 'Status: 403 Forbidden' );
	header( 'HTTP/1.1 403 Forbidden' );
	exit();
}

if ( ! defined( 'THIJS__NIEUWE_POST_TYPES_FILE' ) ) {
	define( 'THIJS__NIEUWE_POST_TYPES_FILE', __FILE__ );
}

// Laad de plugin.
require_once dirname( THIJS__NIEUWE_POST_TYPES_FILE ) . '/thijs--nieuwe-post-types-hoofd.php';