<?php
/**
 * Template Name: Test Template
 * 
 * 
 * @package blogger
 */
?>

<?php 

// PRIVATE PAGES
// $private_pages = new WP_Query(
//         array (
//             'post_type' => 'page',
//             'post_status' => 'private',
//             'author' => 2
//             ) 
//         );

//         while( $private_pages->have_posts()) {
//             $private_pages->the_post();
        
//         echo get_the_title();
//         echo get_the_content(); 
//       }
    
//     wp_reset_postdata(); 



 // DRAFT POSTS 
//     $draft_posts = new WP_Query(
//       array (
//           'post_type' => 'post',
//           'post_status' => 'draft',
//           'author' => 2,
//           // 'author_name' => 'admin2'
//           ) 
//       );
      
//       while( $draft_posts->have_posts()) {
//           $draft_posts->the_post();
      
//       echo get_the_title();
//       echo get_the_content();
//     }
  
//   wp_reset_postdata(); 
?>

<?php get_header(); ?>

<?php 
	$categories = get_terms(array('taxonomy' => 'category'));
?>

	<?php get_search_form(); ?>
	
	<?php foreach( $categories as $cat ) { ?>
	<div class="row tm-row">
	<h1> Category <?php echo $cat->name; ?> : </h1>

<?php
		$category_args = array(
			'post_type' => 'post',
			'post_status' => 'publish',
			'posts_per_page' => 1,
			'cat' => $cat->term_id
		);

		$posts = new WP_Query($category_args);
		if ($posts->have_posts() )
			while($posts->have_posts() ) {
				$posts->the_post();
				echo get_the_title();
				echo get_the_content();
			}
	}

?>

<?php get_footer(); ?> 
