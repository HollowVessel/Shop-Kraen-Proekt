<?php
/**
 * Default Single Post Template
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
                    <form method="GET" class="form-inline tm-mb-80 tm-search-form">                
                        <input class="form-control tm-search-input" name="query" type="text" placeholder="Search..." aria-label="Search">
                        <button class="tm-search-button" type="submit">
                            <i class="fas fa-search tm-search-icon" aria-hidden="true"></i>
                        </button>                 
                    </form>
                </div>
            </div> 
        </main>
    </div>
        
        <hr class="tm-hr-primary">
        <div class="row tm-row">    
            
        </div>
   

        <?php the_post_thumbnail(); ?>
            <h2 class="tm-pt-30 tm-color-primary tm-post-title"> <?php the_title(); ?> </h2>

            <p class="tm-pt-30"> <?php the_content(); ?> </p>
            
            <div class="d-flex justify-content-between tm-pt-45">
                <span class="tm-color-primary"> <?php the_category(', '); ?>  </span>
                </span class="tm-color-primary"> <?php get_the_date('F jS, y'); ?> </span>
            </div>
    </div>    
    
</div>
<?php get_footer(); ?>

