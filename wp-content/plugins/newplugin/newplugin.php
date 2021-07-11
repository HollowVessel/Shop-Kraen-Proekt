<?php 
/**
 * @package NewPlugin
 */
/*
Plugin Name: New Plugin
Plugin URI: https://google.com/
Description: Manage your local events
Version: 1.0.0
Author: Stefan
Author URI: https://google.com
*/

$ids = [];

if( !function_exists('new_plugin_activate') ) {
    function new_plugin_activate() {
        // global $ids;

        flush_rewrite_rules();
        
        // $username_one = 'pero_user';
        // $password_one = 'Pero123';
        // $email_one = 'pero@gmail.com';

        // Define User Credentials
        // $logins = array(
        //     'first_user' => array (
        //         'username' => 'pero_user',
        //         'password' => 'Pero123',
        //         'email' => 'pero@gmail.com'
        //     ), 
        //     'second_user' => array(
        //         'username' => 'stevo_user',
        //         'password' => 'Stevo123',
        //         'email' => 'stevo@gmail.com'
        //     )
        // );

        // Iterate through credentials and insert
        // them into the database
        // foreach( $logins as $user ) {
        //     $ids = wp_create_user( $user['username'], $user['password'], $user['email'] );
        // }   

        // $userdata = array(
        //     'ID'                    => 0,    //(int) User ID. If supplied, the user will be updated.
        //     'user_pass'             => '',   //(string) The plain-text user password.
        //     'user_login'            => '',   //(string) The user's login username.
        //     'user_nicename'         => '',   //(string) The URL-friendly user name.
        //     'user_url'              => '',   //(string) The user URL.
        //     'user_email'            => '',   //(string) The user email address.
        //     'display_name'          => '',   //(string) The user's display name. Default is the user's username.
        //     'nickname'              => '',   //(string) The user's nickname. Default is the user's username.
        //     'first_name'            => '',   //(string) The user's first name. For new users, will be used to build the first part of the user's display name if $display_name is not specified.
        //     'last_name'             => '',   //(string) The user's last name. For new users, will be used to build the second part of the user's display name if $display_name is not specified.
        //     'description'           => '',   //(string) The user's biographical description.
        //     'rich_editing'          => '',   //(string|bool) Whether to enable the rich-editor for the user. False if not empty.
        //     'syntax_highlighting'   => '',   //(string|bool) Whether to enable the rich code editor for the user. False if not empty.
        //     'comment_shortcuts'     => '',   //(string|bool) Whether to enable comment moderation keyboard shortcuts for the user. Default false.
        //     'admin_color'           => '',   //(string) Admin color scheme for the user. Default 'fresh'.
        //     'use_ssl'               => '',   //(bool) Whether the user should always access the admin over https. Default false.
        //     'user_registered'       => '',   //(string) Date the user registered. Format is 'Y-m-d H:i:s'.
        //     'show_admin_bar_front'  => '',   //(string|bool) Whether to display the Admin Bar for the user on the site's front end. Default true.
        //     'role'                  => '',   //(string) User's role.
        //     'locale'                => '',   //(string) User's locale. Default empty.
        // );


        // $userdata = array(
        //     'user_pass' => 'Pero123',
        //     'user_login' => 'pero_user',
        //     'user_nicename' => 'Pero Lepotan',
        //     'user_email' => 'pero@gmail.com',
        //     'display_name' => 'Pero Lepotant',
        //     'nickname' => 'Perica',
        //     'first_name' => 'Pero',
        //     'last_name' => 'Perovski',
        //     'role' => 'administrator'
        // );

        // wp_insert_user( $userdata );

    
    } 

    if( !function_exists( 'parties_plugin_register_post_types') ) {
        function parties_plugin_register_post_types() {
            register_post_type('parties', ['label' => 'Parties',
            'capability_type' => 'post',
                'capabilities' => array( 
                    'edit_post'          => 'edit_party', 
                    'read_post'          => 'read_party', 
                    'delete_post'        => 'delete_party', 
                    // 'edit_posts'         => 'edit_parties', 
                    'publish_posts'      => 'publish_parties',       
                    // 'create_posts'       => 'create_events', 
                  ),
            'public' => true]); 
        }
    }
    
    add_action('init', 'parties_plugin_register_post_types');

    function add_editor_caps() {
        $editor = get_role( 'editor' );
        $editor->add_cap( 'edit_party' ); 
        $editor->add_cap( 'read_party' ); 
        $editor->add_cap( 'delete_party' ); 
        $editor->add_cap( 'edit_parties' ); 
        $editor->add_cap( 'publish_parties' ); 
        $editor->add_cap( 'create_parties' ); 
    }
    add_action( 'editor_init', 'add_editor_caps');
}   

if( !function_exists( 'new_plugin_register_post_types') ) {
    function new_plugin_register_post_types() {

        $labels = array(
            'search_items' => __( 'Search Events' ),
            'edit_item' => __( 'Edit Event' ),
            'update_item' => __( 'Update Event') ,
            'delete_item' => __( 'Delete Event' ),
        );

        register_post_type('awesome_events', array( 
            'label' => 'Events', 
            'labels' => $labels,
            'capability_type' => 'post', 
                'capabilities' => array(
                    'edit_post'          => 'edit_event', 
                    'read_post'          => 'read_event', 
                    'delete_post'        => 'delete_event', 
                    'edit_posts'         => 'edit_events', 
                    'publish_posts'      => 'publish_events',     
                    // 'search_posts'       => 'search_events'
                    // 'create_posts'       => 'create_events', 
            ),
            'public' => true 
            ) 
        ); 
    }
}

add_action('init', 'new_plugin_register_post_types');

function add_theme_caps() {
    $subscriber = get_role( 'subscriber' );
    $subscriber->add_cap( 'edit_event' ); 
    $subscriber->add_cap( 'read_event' ); 
    $subscriber->add_cap( 'delete_event' ); 
    $subscriber->add_cap( 'edit_events' ); 
    $subscriber->add_cap( 'publish_events' ); 
    $subscriber->add_cap( 'create_events' ); 
}
add_action( 'admin_init', 'add_theme_caps');





// if( !function_exists( 'new_plugin_register_post_types2') ) {
//     function new_plugin_register_post_types2() {
//         register_post_type('metal', ['label' => 'Metal', 'description' => 'Metal', 'menu_position' => 4, 'public' => true ]);
//     }
// }

// add_action('init', 'new_plugin_register_post_types2');



if( !function_exists( 'new_plugin_deactivate' ) ) {
    function new_plugin_deactivate() {
        unregister_post_type('awesome_events');
        // unregister_post_type('Metal');
        unregister_post_type('parties');
        flush_rewrite_rules();

    }
}


if ( !function_exists( 'new_plugin_register_taxonomies' ) ) {
    function new_plugin_register_taxonomies() {

        // Taxonomy name: Event Type
        // Related to: Events

        $taxonomy_name = 'types';
        
        $taxonomy_mood = 'moods';
    
        $labels_types = array(
            'name' => _x( 'Types', 'Types of Events'),
            'singular_name' => _x( 'Type', 'Type of Event' ),
            'search_items' => __( 'Search Events' ),
            'parent_item' => __( 'Parent Type' ),
            'all_items' => __( 'All Types' ),
            'edit_item' => __(' Edit Type '),
            'update_item' => __( 'Update Type') ,
            'delete_item' => __( 'Delete Type' ),
            'add_new_item' => __( 'Add New Event Type' ),
            'new_item_name' => __( 'New Type Name' ), 
            'menu_name' => __( 'Event Types' ),
        );

        $labels_moods = array(
            'name' => _x( 'Moods', 'Types of Moods'),
            'singular_name' => _x( 'Mood', 'Type of Mood' ),
            'search_items' => __( 'Search Moods' ),
            'all_items' => __( 'All Moods' ),
            'edit_item' => __(' Edit Mood '),
            'update_item' => __( 'Update Mood') ,
            'delete_item' => __( 'Delete Mood' ),
            'add_new_item' => __( 'Add New Mood' ),
            'new_item_name' => __( 'New Mood Name' ), 
            'menu_name' => __( 'Event Moods' ),
        );

        $post_type_args = array(
            'label' => 'Event',
            'has_archive' => 'awesome_events',
            'public' => true,
            'menu_icon' => 'dashicons-calendar-alt'
        );

        register_post_type('awesome_events', $post_type_args);

        register_taxonomy($taxonomy_name, array( 'awesome_events' ), array(
            'hierarchical' => true,
            'labels' => $labels_types,
            'show_ui' => true,
            'query_var' => true,
            'rewrite' => array( 'slug' => 'types' )
        ));

        register_taxonomy($taxonomy_mood, array( 'awesome_events' ), array(
            'hierarchical' => false,
            'labels' => $labels_moods,
            'show_ui' => true,
            'query_var' => true,
            'rewrite' => array( 'slug' => 'moods' )
        ));
    }
}

add_action( 'init', 'new_plugin_register_taxonomies' ); 

register_activation_hook( __FILE__, 'new_plugin_activate' );
register_deactivation_hook( __FILE__ , 'new_plugin_deactivate' );

?> 



