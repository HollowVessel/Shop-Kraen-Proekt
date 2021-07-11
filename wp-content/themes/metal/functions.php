<?php
/**
 * Theme Functions file
 * 
 * 
 * @package metal
 */

if( !function_exists('metal_custom_post_type')){
function metal_custom_post_type() {
    register_post_type('Metal',
        array(
                'labels'        => array(
                'name'          => __('Metal', 'Metal Blog'),
                'singular_name' => __('Metal', 'Metal Blog'),
            ),
                'public'      => true,
                'has_archive' => true,
        )
    );
}
}

add_action('init', 'metal_custom_post_type');

