<?php
/**
 * Template Name: About Template
 * 
 * 
 * @package blogger
 */
?>

<?php 

    // $funk_category_args = array(
    //   'post_type' => 'post',
    //   'post_status' => 'publish',
    //   'posts_per_page' => '-1',
    //   'tax_query' => array (
    //       array(
    //       'taxonomy' => 'category',
    //       'field' => 'slug',
    //       'terms' => 'funk'
    //       )
    //     )
    //  );

    //  $jazz_category_args = array(
    //     'post_type' => 'post',
    //     'post_status' => 'publish',
    //     'posts_per_page' => '-1',
    //     'tax_query' => array (
    //         array(
    //         'taxonomy' => 'category',
    //         'field' => 'slug',
    //         'terms' => 'jazz'
    //         )
    //       )
    //    );

    //    $metal_category_args = array(
    //     'post_type' => 'post',
    //     'post_status' => 'publish',
    //     'posts_per_page' => '-1',
    //     'tax_query' => array (
    //         array(
    //         'taxonomy' => 'category',
    //         'field' => 'slug',
    //         'terms' => 'metal'
    //         )
    //       )
    //    );

    //    $lofi_category_args = array(
    //     'post_type' => 'post',
    //     'post_status' => 'publish',
    //     'posts_per_page' => '-1',
    //     'tax_query' => array (
    //         array(
    //         'taxonomy' => 'category',
    //         'field' => 'slug',
    //         'terms' => 'lofi'
    //         )
    //       )
    //    );

    //    $rock_category_args = array(
    //     'post_type' => 'post',
    //     'post_status' => 'publish',
    //     'posts_per_page' => '-1',
    //     'tax_query' => array (
    //         array(
    //         'taxonomy' => 'category',
    //         'field' => 'slug',
    //         'terms' => 'rock'
    //         )
    //       )
    //    );
    
    // $posts = new WP_Query($jazz_category_args);

    // if( $posts->have_posts() ) 
    // echo '<h1>Jazz</h1>';
    //     echo '<section id="jazz">';{
    //     while( $posts->have_posts() ) {
    //         $posts->the_post();
    //         echo '<h1>' . the_title() . '</h1>';
    //         echo '<p>' . the_content() . '</p>';
    //     }
    // }

//     $posts = new WP_Query($metal_category_args);

//     if( $posts->have_posts() ) {
//         echo '<h1>Metal</h1>';
//         echo '<section id="metal">';
//         while( $posts->have_posts() ) {
//             $posts->the_post();
//             echo '<h1>' . the_title() . '</h1>';
//             echo '<p>' . the_content() . '</p>';
//         }
//     }

//     $posts = new WP_Query($lofi_category_args);

//     if( $posts->have_posts() ) {
//         echo '<h1>Lofi</h1>';
//         echo '<section id="lofi">';
//         while( $posts->have_posts() ) {
//             $posts->the_post();
//             echo '<h1>' . the_title() . '</h1>';
//             echo '<p>' . the_content() . '</p>';
//         }
//     }

//     $posts = new WP_Query($rock_category_args);

//     if( $posts->have_posts() ) {
//         echo '<h1>Rock</h1>';
//         echo '<section id="rock">';
//         while( $posts->have_posts() ) {
//             $posts->the_post();
//             echo '<h1>' . the_title() . '</h1>';
//             echo '<p>' . the_content() . '</p>';
//         }
//     }

//     $posts = new WP_Query($funk_category_args);

//     if( $posts->have_posts() ) {
//         echo '<h1>Funk</h1>';
//         echo '<section id="funk">';
//         while( $posts->have_posts() ) {
//             $posts->the_post();
//             echo '<h1>' . the_title() . '</h1>';
//             echo '<p>' . the_content() . '</p>';
//         }
//     } 

    // $args = array ( 
    //     'post_type' => 'post',
    //     'status' => 'publish'
    
    // );


    // $posts = new WP_Query( array( 'post_type' => 'post', 'category_name' => 'punk' ) );
    
    // while( $posts->have_posts() ) {

    //     $posts->the_post();

    //     echo '<p>'.get_the_title().'</p>';
    // }
    
    // wp_reset_postdata();

    // $instance = new WP_Query()
    


        $my_pages = new WP_Query(
        array (
            'post_type' => 'page',
            'status' => 'publish',
            'author' => '2'
            )
        );

        while( $my_pages->have_posts()) {
            $my_pages->the_post();
        
        echo the_title();
      }
    
    wp_reset_postdata();
        

?> 