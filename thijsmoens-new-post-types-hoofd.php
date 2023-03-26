<?php

/**
 * Maak een post type voor alle series.
 * 
 * @package ThijsMoens
 * @subpackage Plugins/New_Post_Types
 * @since 6.0
 * @author Thijs Moens <thijs@thijs.email
 * @link https://thijs.website
 */
if ( ! function_exists( 'thijsmoens__new_post_type_voor_alle_series' ) ) :

    function thijsmoens__new_post_type_voor_alle_series() {
 
        $labels = array(
            'name'                => _x( 'Series', 'Post Type General Name', 'thijsmoens-new-post-types' ),
            'singular_name'       => _x( 'Serie', 'Post Type Singular Name', 'thijsmoens-new-post-types' ),
            'menu_name'           => __( 'Series', 'thijsmoens-new-post-types' ),
            'parent_item_colon'   => __( 'Parent Serie', 'thijsmoens-new-post-types' ),
            'all_items'           => __( 'Alle series', 'thijsmoens-new-post-types' ),
            'view_item'           => __( 'Bekijk de serie', 'thijsmoens-new-post-types' ),
            'add_new_item'        => __( 'Voeg new serie toe', 'thijsmoens-new-post-types' ),
            'add_new'             => __( 'Nieuwe serie', 'thijsmoens-new-post-types' ),
            'edit_item'           => __( 'Wijzig serie', 'thijsmoens-new-post-types' ),
            'update_item'         => __( 'Update serie', 'thijsmoens-new-post-types' ),
            'search_items'        => __( 'Doorzoek serie', 'thijsmoens-new-post-types' ),
            'not_found'           => __( 'Geen serie gevonden', 'thijsmoens-new-post-types' ),
            'not_found_in_trash'  => __( 'Geen serie gevonden in de prullenbak', 'thijsmoens-new-post-types' ),
        );
     
     
        $parameters = array(
            'label'               => __( 'serie', 'thijsmoens-new-post-types' ),
            'description'         => __( 'De serie met alle info en artikelen', 'thijsmoens-new-post-types' ),
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
     
        // Registreer deze serie
        register_post_type( 'serie', $parameters );
 
    }
 
    add_action( 'init', 'thijsmoens__new_post_type_voor_alle_series', 0 );

endif; 


/**
 * Maak een post type voor alle projecten.
 * 
 * @package ThijsMoens
 * @subpackage Plugins/New_Post_Types
 * @since 6.0
 * @author Thijs Moens <thijs@thijs.email
 * @link https://thijs.website
 */
if ( ! function_exists( 'thijsmoens__new_post_type_voor_alle_projecten' ) ) :

    function thijsmoens__new_post_type_voor_alle_projecten() {
 
        $labels = array(
            'name'                => _x( 'Projecten', 'Post Type General Name', 'thijsmoens-new-post-types' ),
            'singular_name'       => _x( 'Project', 'Post Type Singular Name', 'thijsmoens-new-post-types' ),
            'menu_name'           => __( 'Projecten', 'thijsmoens-new-post-types' ),
            'parent_item_colon'   => __( 'Parent Project', 'thijsmoens-new-post-types' ),
            'all_items'           => __( 'Alle projecten', 'thijsmoens-new-post-types' ),
            'view_item'           => __( 'Bekijk de project', 'thijsmoens-new-post-types' ),
            'add_new_item'        => __( 'Voeg new project toe', 'thijsmoens-new-post-types' ),
            'add_new'             => __( 'Nieuwe project', 'thijsmoens-new-post-types' ),
            'edit_item'           => __( 'Wijzig project', 'thijsmoens-new-post-types' ),
            'update_item'         => __( 'Update project', 'thijsmoens-new-post-types' ),
            'search_items'        => __( 'Doorzoek project', 'thijsmoens-new-post-types' ),
            'not_found'           => __( 'Geen project gevonden', 'thijsmoens-new-post-types' ),
            'not_found_in_trash'  => __( 'Geen project gevonden in de prullenbak', 'thijsmoens-new-post-types' ),
        );
     
     
        $parameters = array(
            'label'               => __( 'project', 'thijsmoens-new-post-types' ),
            'description'         => __( 'Het project met alle info.', 'thijsmoens-new-post-types' ),
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
 
    add_action( 'init', 'thijsmoens__new_post_type_voor_alle_projecten', 0 );

endif; 







?>