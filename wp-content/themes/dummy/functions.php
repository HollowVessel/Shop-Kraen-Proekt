<?php
/**
 * Theme Functions file
 * 
 * 
 */
?>

<?php

function dummy_menus() {
    $locations = array(
        'primary' => "Desktop Primary Left Sidebar",
        'footer' => 'Footer Menu Items'
    );

    register_nav_menus($locations);
}    

add_action('init', 'dummy_menus');




if ( !function_exists( 'dummy_theme_stylesheet_setup') ) {
    function dummy_theme_stylesheet_setup() {

        $version = wp_get_theme()->get( 'Version' );
        wp_enqueue_style( 'dummy-style', get_template_directory_uri() . "/style.css", array('dummy-bootstrap'), $version, 'all' );
        wp_enqueue_style( 'dummy-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1','all' );
        wp_enqueue_style( 'dummy-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0','all' );
    }

    add_action('wp_enqueue_scripts', 'dummy_theme_stylesheet_setup');
}

if ( !function_exists( 'dummy_theme_scripts_setup') ) {
    function dummy_theme_scripts_setup() {

        wp_enqueue_script('dummy-jquery', "https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), '3.4.1', true);
        wp_enqueue_script('dummy-popper', "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" , array(), '1.16.0', true);
        wp_enqueue_script('dummy-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array(), '4.4.1', true);
        wp_enqueue_script('dummy-mainjs', get_template_directory_uri() . "/assets/js/main.js", array(), '1.0', true);

    }

    add_action('wp_enqueue_scripts', 'dummy_theme_scripts_setup');
}


