<?php
/**
 * ThijsMoens Nieuwe Post Types Plugin.
 *
 * @package   	ThijsMoens
 * @subpackage 	Plugins/New_Post_types
 * @copyright 	Copyright (C) 2022 - 2023, Thijs Moens.
 *
 * @thijsmoens-new-post-types
 * Plugin Name: ThijsMoens Nieuwe Post Types
 * Version:     6.0
 * Plugin URI:  https://thijs.website
 * Description: Een simpele plugin voor het maken van nieuwe post types op de website van Thijs Moens.
 * Author:      Thijs Moens
 * Author URI:  https://thijs.website
 * Text Domain: thijsmoens-new-post-types
 */

if ( ! function_exists( 'add_filter' ) ) {
	header( 'Status: 403 Forbidden' );
	header( 'HTTP/1.1 403 Forbidden' );
	exit();
}

if ( ! defined( 'TM__NEW_POST_TYPES_FILE' ) ) {
	define( 'TM__NEW_POST_TYPES_FILE', __FILE__ );
}

// Laad de plugin.
require_once dirname( TM__NEW_POST_TYPES_FILE ) . '/thijsmoens-new-post-types-hoofd.php';