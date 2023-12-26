<?php

/**
 * Maak een post type voor alle gidsen.
 * 
 * @package Raketwetenschap
 * @subpackage Plugins/Nieuwe_Post_Types
 * @since 8.0.0
 * @author Thijs Moens <hallo@raketwetenschap.com>
 * @link https://raketwetenschap.com
 */
if ( ! function_exists( 'raketwetenschap__nieuwe_post_type_voor_alle_gidsen' ) ) :

    function raketwetenschap__nieuwe_post_type_voor_alle_gidsen() {
 
        $labels = array(
            'name'                => _x( 'Gidsen', 'Post Type General Name', 'raketwetenschap-nieuwe-post-types' ),
            'singular_name'       => _x( 'Gids', 'Post Type Singular Name', 'raketwetenschap-nieuwe-post-types' ),
            'menu_name'           => __( 'Gidsen', 'raketwetenschap-nieuwe-post-types' ),
            'parent_item_colon'   => __( 'Parent Gids', 'raketwetenschap-nieuwe-post-types' ),
            'all_items'           => __( 'Alle gidsen', 'raketwetenschap-nieuwe-post-types' ),
            'view_item'           => __( 'Bekijk de gids', 'raketwetenschap-nieuwe-post-types' ),
            'add_new_item'        => __( 'Voeg nieuwe gids toe', 'raketwetenschap-nieuwe-post-types' ),
            'add_new'             => __( 'Nieuwe gids', 'raketwetenschap-nieuwe-post-types' ),
            'edit_item'           => __( 'Wijzig gids', 'raketwetenschap-nieuwe-post-types' ),
            'update_item'         => __( 'Update gids', 'raketwetenschap-nieuwe-post-types' ),
            'search_items'        => __( 'Doorzoek gids', 'raketwetenschap-nieuwe-post-types' ),
            'not_found'           => __( 'Geen gids gevonden', 'raketwetenschap-nieuwe-post-types' ),
            'not_found_in_trash'  => __( 'Geen gids gevonden in de prullenbak', 'raketwetenschap-nieuwe-post-types' ),
        );
     
     
        $parameters = array(
            'label'               => __( 'gidsen', 'raketwetenschap-nieuwe-post-types' ),
            'description'         => __( 'Het gids met alle info en artikelen', 'raketwetenschap-nieuwe-post-types' ),
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
     
        // Registreer deze gids
        register_post_type( 'guide', $parameters );
 
    }
 
    add_action( 'init', 'raketwetenschap__nieuwe_post_type_voor_alle_gidsen', 0 );

endif; 


/**
 * Maak een post type voor alle projecten.
 * 
 * @package Raketwetenschap
 * @subpackage Plugins/Nieuwe_Post_Types
 * @since 7.0.0
 * @author Thijs Moens <hallo@raketwetenschap.com>
 * @link https://raketwetenschap.com
 */
// if ( ! function_exists( 'raketwetenschap__nieuwe_post_type_voor_alle_projecten' ) ) :

//     function raketwetenschap__nieuwe_post_type_voor_alle_projecten() {
 
//         $labels = array(
//             'name'                => _x( 'Projecten', 'Post Type General Name', 'raketwetenschap-nieuwe-post-types' ),
//             'singular_name'       => _x( 'Project', 'Post Type Singular Name', 'raketwetenschap-nieuwe-post-types' ),
//             'menu_name'           => __( 'Projecten', 'raketwetenschap-nieuwe-post-types' ),
//             'parent_item_colon'   => __( 'Parent Project', 'raketwetenschap-nieuwe-post-types' ),
//             'all_items'           => __( 'Alle projecten', 'raketwetenschap-nieuwe-post-types' ),
//             'view_item'           => __( 'Bekijk de project', 'raketwetenschap-nieuwe-post-types' ),
//             'add_new_item'        => __( 'Voeg nieuwe project toe', 'raketwetenschap-nieuwe-post-types' ),
//             'add_new'             => __( 'Nieuwe project', 'raketwetenschap-nieuwe-post-types' ),
//             'edit_item'           => __( 'Wijzig project', 'raketwetenschap-nieuwe-post-types' ),
//             'update_item'         => __( 'Update project', 'raketwetenschap-nieuwe-post-types' ),
//             'search_items'        => __( 'Doorzoek project', 'raketwetenschap-nieuwe-post-types' ),
//             'not_found'           => __( 'Geen project gevonden', 'raketwetenschap-nieuwe-post-types' ),
//             'not_found_in_trash'  => __( 'Geen project gevonden in de prullenbak', 'raketwetenschap-nieuwe-post-types' ),
//         );
     
     
//         $parameters = array(
//             'label'               => __( 'project', 'raketwetenschap-nieuwe-post-types' ),
//             'description'         => __( 'Het project met alle info.', 'raketwetenschap-nieuwe-post-types' ),
//             'labels'              => $labels,
//             'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
//             'hierarchical'        => false,
//             'public'              => true,
//             'show_ui'             => true,
//             'show_in_menu'        => true,
//             'show_in_nav_menus'   => true,
//             'show_in_admin_bar'   => true,
//             'menu_position'       => 8,
//             'menu_icon'           => 'dashicons-archive',
//             'can_export'          => true,
//             'has_archive'         => true,
//             'exclude_from_search' => false,
//             'publicly_queryable'  => true,
//             'capability_type'     => 'post',
//             'show_in_rest' => true,
    
//         );
     
//         // Registreer deze project
//         register_post_type( 'project', $parameters );
 
//     }
 
//     add_action( 'init', 'raketwetenschap__nieuwe_post_type_voor_alle_projecten', 0 );

// endif; 



/**
 * Maak een post type voor alle bedrijven.
 * 
 * @package Raketwetenschap
 * @subpackage Plugins/Nieuwe_Post_Types
 * @since 8.0.0
 * @author Thijs Moens <hallo@raketwetenschap.com>
 * @link https://raketwetenschap.com
 */
// if ( ! function_exists( 'raketwetenschap__nieuwe_post_type_voor_alle_bedrijven' ) ) :

//     function raketwetenschap__nieuwe_post_type_voor_alle_bedrijven() {
 
//         $labels = array(
//             'name'                => _x( 'Bedrijven', 'Post Type General Name', 'raketwetenschap-nieuwe-post-types' ),
//             'singular_name'       => _x( 'Bedrijf', 'Post Type Singular Name', 'raketwetenschap-nieuwe-post-types' ),
//             'menu_name'           => __( 'Bedrijven', 'raketwetenschap-nieuwe-post-types' ),
//             'parent_item_colon'   => __( 'Parent Bedrijf', 'raketwetenschap-nieuwe-post-types' ),
//             'all_items'           => __( 'Alle bedrijven', 'raketwetenschap-nieuwe-post-types' ),
//             'view_item'           => __( 'Bekijk dit bedrijf', 'raketwetenschap-nieuwe-post-types' ),
//             'add_new_item'        => __( 'Voeg nieuw bedrijf toe', 'raketwetenschap-nieuwe-post-types' ),
//             'add_new'             => __( 'Nieuw bedrijf', 'raketwetenschap-nieuwe-post-types' ),
//             'edit_item'           => __( 'Wijzig bedrijf', 'raketwetenschap-nieuwe-post-types' ),
//             'update_item'         => __( 'Update bedrijf', 'raketwetenschap-nieuwe-post-types' ),
//             'search_items'        => __( 'Doorzoek bedrijf', 'raketwetenschap-nieuwe-post-types' ),
//             'not_found'           => __( 'Geen bedrijf gevonden', 'raketwetenschap-nieuwe-post-types' ),
//             'not_found_in_trash'  => __( 'Geen bedrijf gevonden in de prullenbak', 'raketwetenschap-nieuwe-post-types' ),
//         );
     
     
//         $parameters = array(
//             'label'               => __( 'bedrijf', 'raketwetenschap-nieuwe-post-types' ),
//             'description'         => __( 'Een bedrijf met alle info.', 'raketwetenschap-nieuwe-post-types' ),
//             'labels'              => $labels,
//             'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
//             'hierarchical'        => false,
//             'public'              => true,
//             'show_ui'             => true,
//             'show_in_menu'        => true,
//             'show_in_nav_menus'   => true,
//             'show_in_admin_bar'   => true,
//             'menu_position'       => 8,
//             'menu_icon'           => 'dashicons-building',
//             'can_export'          => true,
//             'has_archive'         => true,
//             'exclude_from_search' => false,
//             'publicly_queryable'  => true,
//             'capability_type'     => 'post',
//             'show_in_rest' => true,
    
//         );
     
//         // Registreer dit bedrijf
//         register_post_type( 'bedrijf', $parameters );
 
//     }
 
//     add_action( 'init', 'raketwetenschap__nieuwe_post_type_voor_alle_bedrijven', 0 );

// endif; 



/**
 * Maak een post type voor alle personen.
 * 
 * @package Raketwetenschap
 * @subpackage Plugins/Nieuwe_Post_Types
 * @since 8.0.0
 * @author Thijs Moens <hallo@raketwetenschap.com>
 * @link https://raketwetenschap.com
 */
// if ( ! function_exists( 'raketwetenschap__nieuwe_post_type_voor_alle_personen' ) ) :

//     function raketwetenschap__nieuwe_post_type_voor_alle_personen() {
 
//         $labels = array(
//             'name'                => _x( 'Personen', 'Post Type General Name', 'raketwetenschap-nieuwe-post-types' ),
//             'singular_name'       => _x( 'Persoon', 'Post Type Singular Name', 'raketwetenschap-nieuwe-post-types' ),
//             'menu_name'           => __( 'Personen', 'raketwetenschap-nieuwe-post-types' ),
//             'parent_item_colon'   => __( 'Parent Persoon', 'raketwetenschap-nieuwe-post-types' ),
//             'all_items'           => __( 'Alle personen', 'raketwetenschap-nieuwe-post-types' ),
//             'view_item'           => __( 'Bekijk deze persoon', 'raketwetenschap-nieuwe-post-types' ),
//             'add_new_item'        => __( 'Voeg nieuw persoon toe', 'raketwetenschap-nieuwe-post-types' ),
//             'add_new'             => __( 'Nieuw persoon', 'raketwetenschap-nieuwe-post-types' ),
//             'edit_item'           => __( 'Wijzig persoon', 'raketwetenschap-nieuwe-post-types' ),
//             'update_item'         => __( 'Update persoon', 'raketwetenschap-nieuwe-post-types' ),
//             'search_items'        => __( 'Doorzoek persoon', 'raketwetenschap-nieuwe-post-types' ),
//             'not_found'           => __( 'Geen persoon gevonden', 'raketwetenschap-nieuwe-post-types' ),
//             'not_found_in_trash'  => __( 'Geen persoon gevonden in de prullenbak', 'raketwetenschap-nieuwe-post-types' ),
//         );
     
     
//         $parameters = array(
//             'label'               => __( 'persoon', 'raketwetenschap-nieuwe-post-types' ),
//             'description'         => __( 'Een persoon met alle info.', 'raketwetenschap-nieuwe-post-types' ),
//             'labels'              => $labels,
//             'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
//             'hierarchical'        => false,
//             'public'              => true,
//             'show_ui'             => true,
//             'show_in_menu'        => true,
//             'show_in_nav_menus'   => true,
//             'show_in_admin_bar'   => true,
//             'menu_position'       => 8,
//             'menu_icon'           => 'dashicons-businessperson',
//             'can_export'          => true,
//             'has_archive'         => true,
//             'exclude_from_search' => false,
//             'publicly_queryable'  => true,
//             'capability_type'     => 'post',
//             'show_in_rest' => true,
    
//         );
     
//         // Registreer dit bedrijf
//         register_post_type( 'persoon', $parameters );
 
//     }
 
//     add_action( 'init', 'raketwetenschap__nieuwe_post_type_voor_alle_personen', 0 );

// endif; 

?>