<?php get_header(); ?>

<!-- Blog Single Post Section -->

<section id="blog-single-post">
     <div class="container">
          <div class="row">

               <div class="col-md-offset-1 col-md-10 col-sm-12">
                    <div class="blog-single-post-thumb">
                         
                         <div class="blog-post-title">
                              <h2><?php the_title(); ?></h2>
                         </div>

                         <div class="blog-post-format">
                              <span><a href="#"><img src="/wp-content/themes/chungus/assets/images/author-image1.jpg" class="img-responsive img-circle"> Jen Lopez</a></span>
                              <span><i class="fa fa-date"></i><?php the_time('F jS, y'); ?></span>
                              <span><a href="#"><i class="fa fa-comment-o"></i> <?php get_comments(); ?></a></span>
                         </div>

                         <div class="blog-post-des">
                              <?php the_content(); ?>
                              
                         </div>
                    </div>
                         
                        <div class="blog-author">
                              <div class="media">
                                   <div class="media-object pull-left">
                                        <img src="/wp-content/themes/chungus/assets/images/author-image1.jpg" class="img-circle img-responsive" alt="blog">
                                   </div>
                                   <div class="media-body">
                                        <h3 class="media-heading"><a href="#">Jen Lopez ( Designer )</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                   </div>
                              </div>
                         </div>

                         <div class="blog-comment-form">
                              <h3>Leave a Comment</h3>
                                   <form action="#" method="post">
                           	 	 	 	<input type="text" class="form-control" placeholder="Name" name="name" required>
                                        <input type="email" class="form-control" placeholder="Email" name="email" required>
                                        <textarea name="message" rows="5" class="form-control" id="message" placeholder="Message" message="message" required="required"></textarea>
                                        <div class="col-md-3 col-sm-4">
                                             <input name="submit" type="submit" class="form-control" id="submit" value="Post Your Comment">
                                        </div>
                                   </form>
                         </div>
                    </div>
          </div>
     </div>
</section>

<?php get_footer();