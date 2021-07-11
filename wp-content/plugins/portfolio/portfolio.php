<?php 
/**
 * @package Portfolio
 */
/*
Plugin Name: Portfolio
Plugin URI: https://google.com/
Description: Something bout a portfolio
Version: 1.0.0
Author: Stefan
Author URI: https://google.com
*/

if( !function_exists('portfolio_activate') ) {
    function portfolio_activate() {
        
        flush_rewrite_rules();

    }

    if( !function_exists( 'project_plugin_register_post_types' ) ) {
        function project_plugin_register_post_types() {
            register_post_type('projects', ['label' => 'Projects',
            'capability_type' => 'post',
                'capabilities' => array(
                    'edit_post'          => 'edit_project', 
                    'read_post'          => 'read_project', 
                    'delete_post'        => 'delete_project',                     // 'edit_posts'         => 'edit_parties', 
                    // 'publish_posts'      => 'publish_portoflios',       
                    // 'create_posts'       => 'create_projects',
                ),
            'public' => true]);
        }
    } 
}

add_action('init', 'project_plugin_register_post_types');

if( !function_exists( 'portfolio_deactivate' ) ) {
    function portfolio_deactivate() {
        unregister_post_type('projects');
        flush_rewrite_rules();
    }
}

if( !function_exists( 'project_plugin_register_taxonomies' ) ) {
    function project_plugin_register_taxonomies() {
        
        $taxonomy_name = 'type';

        $labels_types = array(
            'name' => _x( 'Types', 'Types '),
            'singular_name' => _x( 'Type', 'Type ' ),
            'search_items' => __( 'Search Types' ),
            'parent_item' => __( 'Parent Type' ),
            'all_items' => __( 'All Types' ),
            'edit_item' => __(' Edit Type '),
            'update_item' => __( 'Update Type') ,
            'delete_item' => __( 'Delete Type' ),
            'add_new_item' => __( 'Add New  Type' ),
            'new_item_name' => __( 'New Type' ), 
            'menu_name' => __( 'Types' ),
        );

        // $post_type_args = array(
        //     'label' => 'Type',
        //     'has_archive' => 'projects',
        //     'public' => true,
        // );

        // register_post_type('projects', $post_type_args);

        register_taxonomy($taxonomy_name, array( 'projects' ), array(
            'hierarchical' => true,
            // 'labels' => $labels_types,
            'show_ui' => true,
            'query_var' => true,
            // 'rewrite' => array( 'slug' => 'types' )
        ));
    }
}

add_action( 'init', 'project_plugin_register_taxonomies' ); 

register_activation_hook( __FILE__, 'portfolio_activate' );
register_deactivation_hook( __FILE__ , 'portfolio_deactivate' );

