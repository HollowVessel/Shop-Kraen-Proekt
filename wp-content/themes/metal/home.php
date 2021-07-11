<?php
/**
 * Default Home Template
 * 
 * 
 * @package metal
 */
?>



<?php while( have_posts() ) : the_post(); ?>
    <?php get_template_part('/post'); ?>
<?php endwhile; ?> 






