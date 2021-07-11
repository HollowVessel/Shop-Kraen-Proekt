<?php
/**
 * Default Front Page Template
 * 
 * 
 * @package blogger
 */
?>

<?php get_header(); ?>

<?php $categories = get_terms(array('taxonomy' => 'category')); ?>

    <div class="content">
        <div class="container-fluid">
            <main class="tm-main">
                <!-- Search form -->
                <div class="row tm-row">
                    <div class="col-12">
                        <?php get_search_form(); ?> 
                    </div>
                </div> 
<?php foreach( $categories as $cat ) { ?>
    <div class="row tm-row">
    <h1 class="tm-pt-30 tm-color-primary tm-header-wrapper">Category <?php echo $cat->name; ?> : </h1>
        <?php 

    $category_args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => 1 ,
        'cat' => $cat->term_id
    );

    $posts = new WP_Query($category_args);
    if ($posts->have_posts() )
        while($posts->have_posts() ) {
            $posts->the_post();
            // echo get_the_title();
            // echo get_the_content();
            get_template_part('/template-parts/post');
        }
?> 
    </div>   
                <div class="row tm-row tm-mt-100 tm-mb-75">
                    <div class="tm-prev-next-wrapper">
                        <div class="mb-2 tm-btn tm-btn-primary tm-prev-next tm-mr-20"> <?php next_posts_link( "Следна" ); ?><?php previous_posts_link( "Назад" ); ?></div>
                    </div>
                    <div class="tm-paging-wrapper">
                        <span class="d-inline-block mr-3">Page</span>
                        <!-- <nav class="tm-paging-nav d-inline-block">
                            <ul> 
                                <li class="tm-paging-item active">
                                    <a href="#" class="mb-2 tm-btn tm-paging-link">1</a>
                                </li>
                                <li class="tm-paging-item">
                                    <a href="#" class="mb-2 tm-btn tm-paging-link">2</a>
                                </li>
                                <li class="tm-paging-item">
                                    <a href="#" class="mb-2 tm-btn tm-paging-link">3</a>
                                </li>
                                <li class="tm-paging-item">
                                    <a href="#" class="mb-2 tm-btn tm-paging-link">4</a>
                                </li>
                            </ul>
                        </nav> -->
                        <br> 
                        <?php echo paginate_links(); ?>
                    </div>               
                </div>      
            <?php } ?> 
                
<?php get_footer(); ?>


