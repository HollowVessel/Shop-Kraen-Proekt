
<div class="col-md-offset-1 col-md-10 col-sm-12">
    <div class="blog-post-thumb">
            <div class="blog-post-image">
                    <img src="<?php the_post_thumbnail(); ?>" class="img-responsive">
            </div>
            <div class="blog-post-title">
            <a href="<?php the_permalink(); ?>">
            <h3><?php the_title(); ?></h3>
            </a>
            
            </div>
            <div class="blog-post-format">
                <span><a href="#"><img src="/wp-content/themes/chungus/assets/images/author-image1.jpg" class="img-responsive img-circle"> <?php the_author(); ?></a></span>
                <span><i class="fa fa-date"></i><?php the_time('F jS, y'); ?></span>
                <span><a href="#"><i class="fa fa-comment-o"></i><?php get_comments(); ?></a></span>
            </div> 
            <div class="blog-post-des">
            <p><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink(); ?>" class="btn btn-default">Continue Reading</a>
            </div>
    </div>
</div>
