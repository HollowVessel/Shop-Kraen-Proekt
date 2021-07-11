<?php
/**
 * Default Home Template
 * 
 */
?>

<?php get_header(); ?>

<div class="content content--bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-24">
						<!-- Title Page --> 
						<h1 class="title-page">Blog</h1>
						<!-- End of Title Page -->
						<!-- Thumb Article -->
                <?php while( have_posts() ) : the_post(); ?>
                <?php get_template_part('/template-parts/posts'); ?>
                <?php endwhile; ?>
           
						<!-- <article class="thumb-article ">
							<div class="row">
								<div class="col-md-12 col-md-offset-1 col-md-push-11">
									<a class="thumb-article__image-holder" href="article.html">
										<img src="http://placehold.it/940x630" class="thumb-article__image" alt="article thumbnail"> </a>
								</div>
								<div class="col-md-11 col-md-pull-13">
									<p class="thumb-article__date">22 March 2016</p>
									<h3 class="thumb-article__title">
										<a href="article.html">Soluta suscipit eos eligendi iure blanditiis, inventore nesciunt sequi voluptate quod minus!</a>
									</h3>
									<p class="thumb-article__excerpt">Sed, nihil. Quidem laudantium praesentium in laboriosam assumenda voluptates, saepe officia! Quae ex laborum, culpa tempora quisquam, excepturi nesciunt libero? Nulla odio corporis, laudantium cumque. Corporis harum, deserunt obcaecati cupiditate
										magni libero sequi voluptate cum quisquam saepe consequuntur vel beatae tempore eligendi!</p>
								</div>
							</div>
						</article> 
						End of Thumb Article -->
						<div class="mb80 hidden-sm hidden-xs"></div>
						<div class="mb60 hidden-lg hidden-md"></div>
						<!-- Thumb Article -->
						<!-- <article class="thumb-article ">
							<div class="row">
								<div class="col-md-12 col-md-offset-1 col-md-push-11">
									<a class="thumb-article__image-holder" href="article.html">
										<img src="http://placehold.it/940x630" class="thumb-article__image" alt="article thumbnail"> </a>
								</div>
								<div class="col-md-11 col-md-pull-13">
									<p class="thumb-article__date">15 February 2016</p>
									<h3 class="thumb-article__title">
										<a href="article.html">Exercitationem suscipit perspiciatis neque. Sapiente, eum. Provident saepe, placeat libero repellendus dolores.</a>
									</h3>
									<p class="thumb-article__excerpt">Ipsam delectus expedita sed, incidunt, sequi provident perferendis quas blanditiis error assumenda reprehenderit minima dicta ab enim aperiam? Autem laborum quisquam ipsum quas nemo, at vitae voluptatum deleniti enim quos ad incidunt maiores
										et veritatis laudantium, quibusdam quidem quam? Unde, dicta facere.</p>
								</div>
							</div>
						</article> -->
						<!-- End of Thumb Article -->
						<div class="mb80 hidden-sm hidden-xs"></div>
						<div class="mb60 hidden-lg hidden-md"></div>
						<!-- Thumb Article -->
						<!-- <article class="thumb-article ">
							<div class="row">
								<div class="col-md-12 col-md-offset-1 col-md-push-11">
									<a class="thumb-article__image-holder" href="article.html">
										<img src="http://placehold.it/940x630" class="thumb-article__image" alt="article thumbnail"> </a>
								</div>
								<div class="col-md-11 col-md-pull-13">
									<p class="thumb-article__date">3 January 2016</p>
									<h3 class="thumb-article__title">
										<a href="article.html">Iusto minus saepe ex quaerat quibusdam, consectetur ut impedit dicta tempora explicabo.</a>
									</h3>
									<p class="thumb-article__excerpt">Nesciunt aspernatur distinctio quis recusandae laudantium reiciendis tenetur aliquam sed perferendis, ut voluptatibus est atque reprehenderit ipsa dolorum dolor sunt, qui quasi earum id fugiat facere sint sit perspiciatis! Voluptates autem sunt
										eius. Unde sequi magnam provident placeat ea? Tempora consectetur, delectus.</p>
								</div>
							</div> 
						</article> -->
						<!-- End of Thumb Article -->
						<div class="mb80 hidden-sm hidden-xs"></div>
						<div class="mb60 hidden-lg hidden-md"></div>
						<!-- Pagination -->
						<div class="pagination pagination--border-top">
							<div class="row">
								<div class="col-md-8 col-sm-8 col-xs-7">
									<div class="left"> 
										<a href="" class="pagination__nav"><?php previous_posts_link(); ?></a>
									</div> 
								</div> 
								<div class="col-md-8 col-sm-8 col-xs-10">
									<p class="pagination__number"> </p>
								</div> 
								<div class="col-md-8 col-sm-8 col-xs-7">
									<div class="right"> 
										<a href="" class="pagination__nav"><?php next_posts_link(); ?></a>
									</div> 
								</div>  
							</div> 
						</div>
						<!-- End of Pagination -->
					</div>
				</div>
			</div>
		</div>
<?php get_footer(); ?>
