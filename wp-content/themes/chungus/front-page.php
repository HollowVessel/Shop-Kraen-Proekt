<?php get_header(); ?>

<!-- Home Section -->

<section id="home" class="main-home parallax-section">
     <div class="overlay"></div>
     <div id="particles-js"></div>
     <div class="container">
          <div class="row">
               <div class="col-md-12 col-sm-12">
                    <h1>Hello! This is Neuron.</h1>
                    <h4>Responsive Blog HTML CSS Website Template</h4>
                    <a href="#blog" class="smoothScroll btn btn-default">Discover More</a>
               </div>

          </div>
     </div>
</section>

<!-- Blog Section --> 

<section id="blog">
     <div class="container">
          <div class="row">

               <div class="col-md-offset-1 col-md-10 col-sm-12">
 
               <?php

               if ( have_posts() )
               while( have_posts() ) {
                    the_post();
                    // echo get_the_title();
                    // echo get_the_content();
                    get_template_part('/template-parts/posts');
               }
               ?>
               
               </div>
          </div>
     </div>
</section>

<!-- Footer Section -->

<?php get_footer();