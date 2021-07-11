<?php
/**
 * Single Custom Awesome Events Template
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
                        <?php get_search_form(); ?>
                    </div>
                </div> 
<div class="row tm-row">
    <?php $posts = new WP_Query( ['post_type' => 'awesome_events'] ); ?>
    <?php while( $posts -> have_posts() ) : $posts->the_post(); ?> 
        <?php get_template_part('/template-parts/post'); ?>
    <?php endwhile; ?>
</div>
            
<?php get_footer(); ?> 

