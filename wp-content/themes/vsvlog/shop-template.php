<?php 
/**
 * Template Name: Shop Template
 * 
 * 
 * 
 */
?>

<?php get_header(); ?>

<div class="content content--bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-24">
						<!-- Title Page -->
						<h1 class="title-page">Shop</h1>
						<!-- End of Title Page --> 
					</div>
				</div>
				<div class="row">
					<div class="col-md-17">
						<div class="pt15 pb15 hidden-sm hidden-xs">
							<!-- List -->
							<?php wp_nav_menu( 
								array( 
									'theme_location' => 'third',
									'items_wrap' => '<ul id="menu-list-item" class="list list--horizontal list--separator list--category">%3$s</ul>'
								  )
								); 
							?> 
							<!-- <ul class="list list--horizontal list--separator list--category">
								<li class="list__item">
									<a href="#" class="list__link">Accesories</a>
								</li>
								<li class="list__item">
									<a href="#" class="list__link">Bags</a>
								</li>
								<li class="list__item">
									<a href="#" class="list__link">Jeans</a>
								</li>
								<li class="list__item">
									<a href="#" class="list__link list__link--active">T-Shirts</a>
								</li>
								<li class="list__item">
									<a href="#" class="list__link">Jackets</a>
								</li>
							</ul> -->
							<!-- End of List -->
						</div>
					</div>
					<div class="col-sm-24 hidden-md hidden-lg">
						<!-- Dropdown -->
						<div class="dropdown ">
							<div class="dropdown__label">Categories</div>
							<ul class="dropdown__list">
								<li class="dropdown__item">Accesories</li>
								<li class="dropdown__item">Bags</li>
								<li class="dropdown__item">Jeans</li>
								<li class="dropdown__item">T-Shirts</li>
								<li class="dropdown__item">Jackets</li>
							</ul>
						</div>
						<!-- End of Dropdown -->
					</div>
					<div class="col-md-7 col-sm-24">
						<div class="right">
							<!-- Dropdown -->
							<div class="dropdown ">
								<div class="dropdown__label">Sort by</div>
								<ul class="dropdown__list">
									<li class="dropdown__item">What's new</li>
									<li class="dropdown__item">Price High to Low</li>
									<li class="dropdown__item">Price Low to High</li>
								</ul>
							</div>
							<!-- End of Dropdown --> 
						</div>
					</div>
				</div>
				<div class="mb60 hidden-sm hidden-xs"></div>
				<div class="mb30 hidden-lg hidden-md"></div>
				<div class="row">
					<div class="col-md-8 col-sm-12">
						<!-- Thumb Product --> 
						<?php 
							$args = array(
							'post_type' => 'product',
							'post_status' => 'publish',
							'posts_per_page' => '6'
							); 
							$posts = new WP_Query($args);
							if ($posts->have_posts() )
							while($posts->have_posts() ) {
							$posts->the_post(); 
								get_template_part('/template-parts/shop', 'post');
							}
						?> 	
						<!-- <article class="thumb-product mb40 js-thumb-product">
							<a class="thumb-product__link" href="product.html">
								<span class="thumb-product__label">new</span>
								<img src="http://placehold.it/650x830" class="thumb-product__image" alt="product thumbnail">
								<img src="http://placehold.it/650x830" class="thumb-product__image thumb-product__image--back" alt="product thumbnail back view"> </a>
							<h3 class="thumb-product__title">T-Shirt In Festival Batik Print</h3>
							<p class="thumb-product__price">$16.00</p>
						</article> -->
						<!-- End of Thumb Product --> 
					</div>
					<div class="col-md-8 col-sm-12">
						<!-- Thumb Product -->
						<!-- <article class="thumb-product mb40 js-thumb-product">
							<a class="thumb-product__link" href="product.html">
								<img src="http://placehold.it/650x830" class="thumb-product__image" alt="product thumbnail">
								<img src="http://placehold.it/650x830" class="thumb-product__image thumb-product__image--back" alt="product thumbnail back view"> </a>
							<h3 class="thumb-product__title">T-Shirt In Linen Look With Scratchy Texture Print</h3>
							<p class="thumb-product__price">$16.00</p>
						</article> -->
						<!-- End of Thumb Product -->
					</div>
					<div class="clearfix visible-sm-block"></div>
					<div class="col-md-8 col-sm-12">
						<!-- Thumb Product -->
						<!-- <article class="thumb-product mb40 js-thumb-product">
							<a class="thumb-product__link" href="product.html">
								<span class="thumb-product__label">new</span>
								<img src="http://placehold.it/650x830" class="thumb-product__image" alt="product thumbnail">
								<img src="http://placehold.it/650x830" class="thumb-product__image thumb-product__image--back" alt="product thumbnail back view"> </a>
							<h3 class="thumb-product__title">T-Shirt with Scoop Neck</h3>
							<p class="thumb-product__price">$20.00</p>
						</article> -->
						<!-- End of Thumb Product -->
					</div>
					<div class="clearfix visible-md-block"></div>
					<div class="col-md-8 col-sm-12">
						<!-- Thumb Product -->
						<!-- <article class="thumb-product mb40 js-thumb-product">
							<a class="thumb-product__link" href="product.html">
								<img src="http://placehold.it/650x830" class="thumb-product__image" alt="product thumbnail">
								<img src="http://placehold.it/650x830" class="thumb-product__image thumb-product__image--back" alt="product thumbnail back view"> </a>
							<h3 class="thumb-product__title">T-Shirt with Grey Stripe</h3>
							<p class="thumb-product__price">$20.00</p>
						</article> -->
						<!-- End of Thumb Product -->
					</div>
					<div class="clearfix visible-sm-block"></div>
					<div class="col-md-8 col-sm-12">
						<!-- Thumb Product -->
						<!-- <article class="thumb-product mb40 js-thumb-product">
							<a class="thumb-product__link" href="product.html">
								<img src="http://placehold.it/650x830" class="thumb-product__image" alt="product thumbnail">
								<img src="http://placehold.it/650x830" class="thumb-product__image thumb-product__image--back" alt="product thumbnail back view"> </a>
							<h3 class="thumb-product__title">T-Shirt With Deep V Neck</h3>
							<p class="thumb-product__price">$12.00</p>
						</article> -->
						<!-- End of Thumb Product --> 
					</div>
					<div class="col-md-8 col-sm-12">
						<!-- Thumb Product -->
						<!-- <article class="thumb-product mb40 js-thumb-product">
							<a class="thumb-product__link" href="product.html">
								<span class="thumb-product__label">sale</span>
								<img src="http://placehold.it/650x830" class="thumb-product__image" alt="product thumbnail">
								<img src="http://placehold.it/650x830" class="thumb-product__image thumb-product__image--back" alt="product thumbnail back view"> </a>
							<h3 class="thumb-product__title">T-Shirt with Christmas Day Print</h3>
							<p class="thumb-product__price">$9.00</p>
						</article> -->
						<!-- End of Thumb Product -->
					</div>
				</div>
				<div class="row">
					<div class="col-md-24">
						<!-- Pagination -->
						<div class="pagination pagination--border-top">
							<div class="row">
								<div class="col-md-8 col-sm-8 col-xs-7">
									<div class="left">
										<a href="#" class="pagination__nav"><?php previous_posts_link(); ?></a>
									</div>
								</div>
								<div class="col-md-8 col-sm-8 col-xs-10">
									<p class="pagination__number">1 of 19</p>
								</div>
								<div class="col-md-8 col-sm-8 col-xs-7">
									<div class="right">
										<a href="#" class="pagination__nav"><?php next_posts_link(); ?></a>
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