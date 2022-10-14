<?php

/**
 * Maak een post type voor de kennisbank.
 * 
 * @package Raketwetenschap
 * @subpackage Plugins/Nieuwe_Post_Types
 * @since 2.1
 * @author Thijs Moens <post@thijsmoens.nl>
 * @link https://thijsmoens.nl
 */
if ( ! function_exists( 'raketwetenschap__nieuwe_post_type_voor_alle_kennisbank' ) ) :

    function raketwetenschap__nieuwe_post_type_voor_alle_kennisbank() {
 
        $labels = array(
            'name'                => _x( 'Kennisbank', 'Post Type General Name', 'raketwetenschap-nieuwe-post-types' ),
            'singular_name'       => _x( 'Kennisbank', 'Post Type Singular Name', 'raketwetenschap-nieuwe-post-types' ),
            'menu_name'           => __( 'Kennisbank', 'raketwetenschap-nieuwe-post-types' ),
            'parent_item_colon'   => __( 'Parent Kennisbank', 'raketwetenschap-nieuwe-post-types' ),
            'all_items'           => __( 'Alle kennisbank', 'raketwetenschap-nieuwe-post-types' ),
            'view_item'           => __( 'Bekijk de kennisbank', 'raketwetenschap-nieuwe-post-types' ),
            'add_new_item'        => __( 'Voeg nieuwe kennisbank toe', 'raketwetenschap-nieuwe-post-types' ),
            'add_new'             => __( 'Nieuwe kennisbank', 'raketwetenschap-nieuwe-post-types' ),
            'edit_item'           => __( 'Wijzig kennisbank', 'raketwetenschap-nieuwe-post-types' ),
            'update_item'         => __( 'Update kennisbank', 'raketwetenschap-nieuwe-post-types' ),
            'search_items'        => __( 'Doorzoek kennisbank', 'raketwetenschap-nieuwe-post-types' ),
            'not_found'           => __( 'Geen kennisbank gevonden', 'raketwetenschap-nieuwe-post-types' ),
            'not_found_in_trash'  => __( 'Geen kennisbank gevonden in de prullenbak', 'raketwetenschap-nieuwe-post-types' ),
        );
     
     
        $parameters = array(
            'label'               => __( 'kennisbank', 'raketwetenschap-nieuwe-post-types' ),
            'description'         => __( 'De kennisbank met alle info en artikelen', 'raketwetenschap-nieuwe-post-types' ),
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
     
        // Registreer deze kennisbank
        register_post_type( 'knowledge-base', $parameters );
 
    }
 
    add_action( 'init', 'raketwetenschap__nieuwe_post_type_voor_alle_kennisbank', 0 );

endif; 

?>