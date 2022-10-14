<?php

/**
 * Maak een post type voor alle dossiers.
 * 
 * @package Raketwetenschap
 * @subpackage Plugins/Nieuwe_Post_Types
 * @since 2.0
 * @author Thijs Moens <post@thijsmoens.nl>
 * @link https://thijsmoens.nl
 */
if ( ! function_exists( 'raketwetenschap__nieuwe_post_type_voor_alle_dossiers' ) ) :

    function raketwetenschap__nieuwe_post_type_voor_alle_dossiers() {
 
        $labels = array(
            'name'                => _x( 'Dossiers', 'Post Type General Name', 'raketwetenschap-nieuwe-post-types' ),
            'singular_name'       => _x( 'Dossier', 'Post Type Singular Name', 'raketwetenschap-nieuwe-post-types' ),
            'menu_name'           => __( 'Dossiers', 'raketwetenschap-nieuwe-post-types' ),
            'parent_item_colon'   => __( 'Parent Dossier', 'raketwetenschap-nieuwe-post-types' ),
            'all_items'           => __( 'Alle dossiers', 'raketwetenschap-nieuwe-post-types' ),
            'view_item'           => __( 'Bekijk de dossier', 'raketwetenschap-nieuwe-post-types' ),
            'add_new_item'        => __( 'Voeg nieuwe dossier toe', 'raketwetenschap-nieuwe-post-types' ),
            'add_new'             => __( 'Nieuwe dossier', 'raketwetenschap-nieuwe-post-types' ),
            'edit_item'           => __( 'Wijzig dossier', 'raketwetenschap-nieuwe-post-types' ),
            'update_item'         => __( 'Update dossier', 'raketwetenschap-nieuwe-post-types' ),
            'search_items'        => __( 'Doorzoek dossier', 'raketwetenschap-nieuwe-post-types' ),
            'not_found'           => __( 'Geen dossier gevonden', 'raketwetenschap-nieuwe-post-types' ),
            'not_found_in_trash'  => __( 'Geen dossier gevonden in de prullenbak', 'raketwetenschap-nieuwe-post-types' ),
        );
     
     
        $parameters = array(
            'label'               => __( 'dossier', 'raketwetenschap-nieuwe-post-types' ),
            'description'         => __( 'De dossier met alle info en artikelen', 'raketwetenschap-nieuwe-post-types' ),
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
     
        // Registreer deze dossier
        register_post_type( 'dossier', $parameters );
 
    }
 
    add_action( 'init', 'raketwetenschap__nieuwe_post_type_voor_alle_dossiers', 0 );

endif; 

?>