<?php
/**
 * Template Name: About Template
 * 
 * 
 */
?>

<?php get_header(); ?>
<!-- Hero -->
<style>
	.hero { 
		background-image: url("<?php echo get_template_directory_uri() .  "/assets/img/common/backgrounds/about.jpg" ?>") !important;
	} 
</style> 
<div class="hero"> 
	<div class="hero__overlay"> 
		<div class="container"> 
			<div class="row"> 
				<div class="col-md-20 col-lg-13"> 
					<h1 class="hero__title mb50"> About Me </h1> 
					<p class="hero__description"> I'm a 20 year old metalhead, web design student that desperately wants concerts to be allowed so he can see his favorite bands on stage. </p>
					<p class="hero__description">
					Labore quam nulla in harum debitis reiciendis consectetur voluptatem alias cupiditate, impedit quidem soluta ipsa consequuntur, aut totam dolorem eaque maxime repellat porro non accusantium iure? Pariatur earum, deleniti nostrum suscipit, possimus
						repudiandae a neque libero odit fugit blanditiis laudantium corporis, debitis culpa dolorum iusto sed! Odio vero natus obcaecati possimus dignissimos. </p>
					<div class="hidden-xs mt60">
						<!-- List --> 
						<ul class="list list--horizontal list--separator">
							<li class="list__item">
								<a href="#" class="list__link">YOUTUBE</a>
							</li>
							<li class="list__item">
								<a href="#" class="list__link">FACEBOOK</a>
							</li>
							<li class="list__item">
								<a href="#" class="list__link">INSTAGRAM</a>
							</li>
							<li class="list__item">
								<a href="#" class="list__link">TWITTER</a>
							</li>
						</ul>
						<!-- End of List -->
					</div>
					<div class="hidden-lg hidden-md hidden-sm">
						<!-- Socials -->
						<ul class="socials socials--large mt40">
							<li class="socials__item">
								<a href="#" class="socials__link">
									<i class="fontello-facebook"></i>
								</a>
							</li> 
							<li class="socials__item">
								<a href="#" class="socials__link">
									<i class="fontello-twitter-bird"></i>
								</a>
							</li>
							<li class="socials__item">
								<a href="#" class="socials__link">
									<i class="fontello-youtube-play"></i>
								</a>
							</li>
							<li class="socials__item">
								<a href="#" class="socials__link">
									<i class="fontello-instagram-filled"></i>
								</a>
							</li>
							<li class="socials__item">
								<a href="#" class="socials__link"> 
									<i class="fontello-tumblr"></i>
								</a>
							</li>
						</ul>
						<!-- End of Socials -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div> 
<!-- End of Hero --> 
<div class="content content--top content--bottom"> 
	<div class="container">
		<div class="row"> 
			<!-- <div class="col-md-11 col-sm-11"> -->
					<?php 
					$args = array(
					'post_type' => 'post',
					'post_status' => 'publish',
					'posts_per_page' => '4'
					); 
					$posts = new WP_Query($args);
					if ($posts->have_posts() )
					while($posts->have_posts() ) {
					$posts->the_post(); 
						get_template_part('/template-parts/about', 'post');
					}
				?> 	
			<!-- </div> --> 
		</div>

		<div class="row">
			<div class="col-md-24">
				<!-- Pagination -->
				<div class="pagination pagination--border-top">
					<div class="row">
						<div class="col-md-8 col-sm-8 col-xs-7">
							<div class="left">
								<a href="#" class="pagination__nav">Prev</a>
							</div>
						</div>
						<div class="col-md-8 col-sm-8 col-xs-10">
							<p class="pagination__number">1 of 1</p>
						</div>
						<div class="col-md-8 col-sm-8 col-xs-7">
							<div class="right">
								<a href="#" class="pagination__nav">Next</a>
							</div>
						</div>
					</div>
				  </div> 
					<!-- End of Pagination -->
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>


