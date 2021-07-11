<?php
/**
 * Theme Functions file
 * 
 * 
 */
?>

<?php

// Initial Theme Setup
if( !function_exists( 'blogger_theme_setup' ) ) {
    function blogger_theme_setup() {
        
        // Theme Features 
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'menus' );

        // Register Navigation Menus
        register_nav_menus( array( 
            'primary' => 'Main Menu',
            'secondary' => 'Footer Menu'
        ) );
    }
    add_action( 'after_setup_theme', 'blogger_theme_setup' );
}



if ( !function_exists( 'chungus_theme_stylesheet_setup') ) {
    function chungus_theme_stylesheet_setup() {
        wp_enqueue_style( 'bootstrap4', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css', array(), '4.4.1','all' );        
        wp_enqueue_style( 'chungus-style', get_template_directory_uri() . "/style.css", array(), '1.0','all' );
        wp_enqueue_style( 'chungus-fontawesome', get_template_directory_uri() . "/assets/css/font-awesome.min.css", array(), '1.0','all' );
        wp_enqueue_style( 'fontlora', "https://fonts.googleapis.com/css?family=Lora|Merriweather:300,400", array(), '', 'all' );
    }
    add_action('wp_enqueue_scripts', 'chungus_theme_stylesheet_setup');
}

if ( !function_exists( 'chungus_theme_scripts_setup') ) {
    function chungus_theme_scripts_setup() {

        wp_enqueue_script( 'boot3','https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js', array( 'jquery' ), '4.1.1', true );
        wp_enqueue_script('chungus-jquery', get_template_directory_uri() . "/assets/js/jquery.js", array(), '1.0', true);
        wp_enqueue_script('chungus-custom', get_template_directory_uri() . "/assets/js/custom.js", array(), '1.0', true);
        wp_enqueue_script('chungus-app', get_template_directory_uri() . "/assets/js/app.js", array(), '1.0', true);
        wp_enqueue_script('chungus-magnificpopup', get_template_directory_uri() . "/assets/js/jquery.magnific-popup.min.js", array(), '1.0', true);
        wp_enqueue_script('chungus-magnificpopup', get_template_directory_uri() . "/assets/js/jquery.magnific-popup-options.js", array(), '1.0', true);
        wp_enqueue_script('chungus-parallax', get_template_directory_uri() . "/assets/js/jquery.parallax.js", array(), '1.0', true);
        wp_enqueue_script('chungus-particles', get_template_directory_uri() . "/assets/js/particles.min.js", array(), '1.0', true);
        wp_enqueue_script('chungus-smoothscroll', get_template_directory_uri() . "/assets/js/smoothscroll.js", array(), '1.0', true);

    }

    add_action('wp_enqueue_scripts', 'chungus_theme_scripts_setup');
}

