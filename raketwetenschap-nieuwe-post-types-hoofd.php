<?php

/**
 * Maak een post type voor alle collecties.
 * 
 * @package Raketwetenschap
 * @subpackage Plugins/Nieuwe_Post_Types
 * @since 2.0
 * @author Thijs Moens <post@thijsmoens.nl>
 * @link https://thijsmoens.nl
 */
if ( ! function_exists( 'raketwetenschap__nieuwe_post_type_voor_alle_collecties' ) ) :

    function raketwetenschap__nieuwe_post_type_voor_alle_collecties() {
 
        $labels = array(
            'name'                => _x( 'Collecties', 'Post Type General Name', 'raketwetenschap-nieuwe-post-types' ),
            'singular_name'       => _x( 'Collectie', 'Post Type Singular Name', 'raketwetenschap-nieuwe-post-types' ),
            'menu_name'           => __( 'Collecties', 'raketwetenschap-nieuwe-post-types' ),
            'parent_item_colon'   => __( 'Parent Collectie', 'raketwetenschap-nieuwe-post-types' ),
            'all_items'           => __( 'Alle collecties', 'raketwetenschap-nieuwe-post-types' ),
            'view_item'           => __( 'Bekijk de collectie', 'raketwetenschap-nieuwe-post-types' ),
            'add_new_item'        => __( 'Voeg nieuwe collectie toe', 'raketwetenschap-nieuwe-post-types' ),
            'add_new'             => __( 'Nieuwe collectie', 'raketwetenschap-nieuwe-post-types' ),
            'edit_item'           => __( 'Wijzig collectie', 'raketwetenschap-nieuwe-post-types' ),
            'update_item'         => __( 'Update collectie', 'raketwetenschap-nieuwe-post-types' ),
            'search_items'        => __( 'Doorzoek collectie', 'raketwetenschap-nieuwe-post-types' ),
            'not_found'           => __( 'Geen collectie gevonden', 'raketwetenschap-nieuwe-post-types' ),
            'not_found_in_trash'  => __( 'Geen collectie gevonden in de prullenbak', 'raketwetenschap-nieuwe-post-types' ),
        );
     
     
        $parameters = array(
            'label'               => __( 'collectie', 'raketwetenschap-nieuwe-post-types' ),
            'description'         => __( 'De collectie met alle info en artikelen', 'raketwetenschap-nieuwe-post-types' ),
            'labels'              => $labels,
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'menu_icon'           => 'dashicons-open-folder',
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
            'show_in_rest' => true,
    
        );
     
        // Registreer deze collectie
        register_post_type( 'collectie', $parameters );
 
    }
 
    add_action( 'init', 'raketwetenschap__nieuwe_post_type_voor_alle_collecties', 0 );

endif; 


/**
 * Maak een post type voor alle projecten.
 * 
 * @package Raketwetenschap
 * @subpackage Plugins/Nieuwe_Post_Types
 * @since 2.2
 * @author Thijs Moens <post@thijsmoens.nl>
 * @link https://thijsmoens.nl
 */
if ( ! function_exists( 'raketwetenschap__nieuwe_post_type_voor_alle_projecten' ) ) :

    function raketwetenschap__nieuwe_post_type_voor_alle_projecten() {
 
        $labels = array(
            'name'                => _x( 'Projecten', 'Post Type General Name', 'raketwetenschap-nieuwe-post-types' ),
            'singular_name'       => _x( 'Project', 'Post Type Singular Name', 'raketwetenschap-nieuwe-post-types' ),
            'menu_name'           => __( 'Projecten', 'raketwetenschap-nieuwe-post-types' ),
            'parent_item_colon'   => __( 'Parent Project', 'raketwetenschap-nieuwe-post-types' ),
            'all_items'           => __( 'Alle projecten', 'raketwetenschap-nieuwe-post-types' ),
            'view_item'           => __( 'Bekijk de project', 'raketwetenschap-nieuwe-post-types' ),
            'add_new_item'        => __( 'Voeg nieuwe project toe', 'raketwetenschap-nieuwe-post-types' ),
            'add_new'             => __( 'Nieuwe project', 'raketwetenschap-nieuwe-post-types' ),
            'edit_item'           => __( 'Wijzig project', 'raketwetenschap-nieuwe-post-types' ),
            'update_item'         => __( 'Update project', 'raketwetenschap-nieuwe-post-types' ),
            'search_items'        => __( 'Doorzoek project', 'raketwetenschap-nieuwe-post-types' ),
            'not_found'           => __( 'Geen project gevonden', 'raketwetenschap-nieuwe-post-types' ),
            'not_found_in_trash'  => __( 'Geen project gevonden in de prullenbak', 'raketwetenschap-nieuwe-post-types' ),
        );
     
     
        $parameters = array(
            'label'               => __( 'project', 'raketwetenschap-nieuwe-post-types' ),
            'description'         => __( 'Het project met alle info.', 'raketwetenschap-nieuwe-post-types' ),
            'labels'              => $labels,
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 8,
            'menu_icon'           => 'dashicons-archive',
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
            'show_in_rest' => true,
    
        );
     
        // Registreer deze project
        register_post_type( 'project', $parameters );
 
    }
 
    add_action( 'init', 'raketwetenschap__nieuwe_post_type_voor_alle_projecten', 0 );

endif; 



/**
 * Maak een post type voor alle raadsels.
 * 
 * @package Raketwetenschap
 * @subpackage Plugins/Nieuwe_Post_Types
 * @since 3.0
 * @author Thijs Moens <post@thijsmoens.nl>
 * @link https://thijsmoens.nl
 */
if ( ! function_exists( 'raketwetenschap__nieuwe_post_type_voor_alle_raadsels' ) ) :

    function raketwetenschap__nieuwe_post_type_voor_alle_raadsels() {
 
        $labels = array(
            'name'                => _x( 'Raadsels', 'Post Type General Name', 'raketwetenschap-nieuwe-post-types' ),
            'singular_name'       => _x( 'Raadsel', 'Post Type Singular Name', 'raketwetenschap-nieuwe-post-types' ),
            'menu_name'           => __( 'Raadsels', 'raketwetenschap-nieuwe-post-types' ),
            'parent_item_colon'   => __( 'Parent Raadsel', 'raketwetenschap-nieuwe-post-types' ),
            'all_items'           => __( 'Alle raadsels', 'raketwetenschap-nieuwe-post-types' ),
            'view_item'           => __( 'Bekijk het raadsel', 'raketwetenschap-nieuwe-post-types' ),
            'add_new_item'        => __( 'Voeg nieuw raadsel toe', 'raketwetenschap-nieuwe-post-types' ),
            'add_new'             => __( 'Nieuwe raadsel', 'raketwetenschap-nieuwe-post-types' ),
            'edit_item'           => __( 'Wijzig raadsel', 'raketwetenschap-nieuwe-post-types' ),
            'update_item'         => __( 'Update raadsel', 'raketwetenschap-nieuwe-post-types' ),
            'search_items'        => __( 'Doorzoek raadsel', 'raketwetenschap-nieuwe-post-types' ),
            'not_found'           => __( 'Geen raadsel gevonden', 'raketwetenschap-nieuwe-post-types' ),
            'not_found_in_trash'  => __( 'Geen raadsel gevonden in de prullenbak', 'raketwetenschap-nieuwe-post-types' ),
        );
     
     
        $parameters = array(
            'label'               => __( 'raadsel', 'raketwetenschap-nieuwe-post-types' ),
            'description'         => __( 'Het raadsel met alle info.', 'raketwetenschap-nieuwe-post-types' ),
            'labels'              => $labels,
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 8,
            'menu_icon'           => 'dashicons-bell',
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
            'show_in_rest' => true,
    
        );
     
        // Registreer deze raadsel
        register_post_type( 'raadsel', $parameters );
 
    }
 
    add_action( 'init', 'raketwetenschap__nieuwe_post_type_voor_alle_raadsels', 0 );

endif; 

?>