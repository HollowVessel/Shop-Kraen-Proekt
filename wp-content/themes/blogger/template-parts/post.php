<?php
/**
 * Default Single Post Template Part
 * 
 * 
 * @package blogger
 */
?>

<article class="col-12 col-md-6 tm-post">
    <hr class="tm-hr-primary">
    <a href="<?php the_permalink(); ?>" class="effect-lily tm-post-link tm-pt-60">
        <div class="tm-post-link-inner">
            <img src="<?php the_post_thumbnail_url(); ?>" alt="Image" class="img-fluid">                            
        </div>
        <span class="position-absolute tm-new-badge">New</span>
        <h2 class="tm-pt-30 tm-color-primary tm-post-title"><?php the_title(); ?></h2>
    </a>                    
    <p class="tm-pt-30">
        <?php the_excerpt(); ?>
    </p> 
    <div class="d-flex justify-content-between tm-pt-45">
        <span class="tm-color-primary"><?php the_category(', '); ?></span>
        <span class="tm-color-primary"><?php the_time('F jS, y'); ?></span>
    </div>
    <hr> 
    <div class="d-flex justify-content-between">
        <span><?php the_author(); ?></span>
    </div>
</article>

