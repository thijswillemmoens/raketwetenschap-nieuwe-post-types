<?php

/**
 * Maak een post type voor alle collecties.
 * 
 * @package Thijs__
 * @subpackage Thijs/Nieuwe_Post_Types
 * @since 1.0
 * @author Thijs Moens <post@thijs.email>
 * @link https://thijs.website
 */
if ( ! function_exists( 'thijs__nieuwe_post_type_voor_alle_collecties' ) ) :

    function thijs__nieuwe_post_type_voor_alle_collecties() {
 
        $labels = array(
            'name'                => _x( 'Collecties', 'Post Type General Name', 'thijs--nieuwe-post-types' ),
            'singular_name'       => _x( 'Collectie', 'Post Type Singular Name', 'thijs--nieuwe-post-types' ),
            'menu_name'           => __( 'Collecties', 'thijs--nieuwe-post-types' ),
            'parent_item_colon'   => __( 'Parent Collectie', 'thijs--nieuwe-post-types' ),
            'all_items'           => __( 'Alle collecties', 'thijs--nieuwe-post-types' ),
            'view_item'           => __( 'Bekijk de collectie', 'thijs--nieuwe-post-types' ),
            'add_new_item'        => __( 'Voeg nieuwe collectie toe', 'thijs--nieuwe-post-types' ),
            'add_new'             => __( 'Nieuwe collectie', 'thijs--nieuwe-post-types' ),
            'edit_item'           => __( 'Wijzig collectie', 'thijs--nieuwe-post-types' ),
            'update_item'         => __( 'Update collectie', 'thijs--nieuwe-post-types' ),
            'search_items'        => __( 'Doorzoek collectie', 'thijs--nieuwe-post-types' ),
            'not_found'           => __( 'Geen collectie gevonden', 'thijs--nieuwe-post-types' ),
            'not_found_in_trash'  => __( 'Geen collectie gevinden in de prullenbak', 'thijs--nieuwe-post-types' ),
        );
     
     
        $parameters = array(
            'label'               => __( 'collectie', 'thijs--nieuwe-post-types' ),
            'description'         => __( 'De collectie met alle info en artikelen', 'thijs--nieuwe-post-types' ),
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
 
    add_action( 'init', 'thijs__nieuwe_post_type_voor_alle_collecties', 0 );

endif; 

?>