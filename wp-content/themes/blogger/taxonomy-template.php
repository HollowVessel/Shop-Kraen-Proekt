<?php
/**
 * Template Name: Taxonomy Template
 * 
 * 
 * @package blogger
 */
?>

<?php get_header(); ?>
<div class="content">
        <div class="container-fluid">
            <main class="tm-main">
                <!-- Search form -->
                <div class="row tm-row">
                    <div class="col-12">
                    </div>
                </div> 

<?php 
	$taxonomies = get_terms(array('taxonomy' => 'types'));
?>

	<?php get_search_form(); ?>
	
	<?php foreach( $taxonomies as $tax ) { ?>
	<div class="row tm-row">
	<h1> Type <?php echo $tax->name; ?> : </h1>
    </div>

<?php
		$taxonomy_args = array(
			'post_type' => 'awesome_events',
			'post_status' => 'publish',
			'posts_per_page' => -1,
			'tax' => $tax->term_id
		);
?>

	<?php	$events = new WP_Query($taxonomy_args); 
		if ($events->have_posts() )
			while($events->have_posts() ) {
				$events->the_post();
				// echo get_the_title();
				// echo get_the_content();
            get_template_part('/template-parts/post'); 
	    }
    }
        ?>
  </main>
    </div>
</div>

<?php get_footer(); ?>
