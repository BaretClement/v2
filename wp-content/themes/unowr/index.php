<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package unowr
 */

get_header(); ?>

<script src="https://unpkg.com/masonry-layout@4.1/dist/masonry.pkgd.js"></script>

<script>
$('.grid').masonry({
  // options...
  itemSelector: '.grid-item',
  columnWidth: 200
});
</script>



<!-- intro PART -->
<div class="ui center aligned half height grid">
	<div class="black row">
		<div class="sixteen middle aligned wide column">
			<img src="<?php echo get_template_directory_uri(); ?>/css/img/breakfast-white.svg" class="ui small margin auto image">
			<h1>BLOG</h1>
			<p>Découvrez toute l'actualité UNOWR</p>
			<a href="#blog" class="smooth-scroll"><button class="inverted circular ui basic icon button"><i class="arrow down icon"></i></button></a>
		</div>
	</div>
</div>
<!-- intro PART -->

</div>

<div id="blog" class="ui two column stackable grid container" data-masonry='{ "itemSelector": ".grid-item" }'>
			

			<?php
			if ( have_posts() ) :

				if ( is_home() && ! is_front_page() ) : ?>

				<?php
				endif;

				/* Start the Loop */
				while ( have_posts() ) : the_post();

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					?>
					<div class="column grid-item">
						<div class="ui fluid link card">
							<div class="image">
								<img src="
								<?php 
									if (empty(the_field('post_illustration'))) {
									 	echo "";
									 } 
									 else{
										the_field('post_illustration',$post->ID);
									}
								?>
								">
							</div>
						
							<div class="content">
								<div class="extra">
						        		<span style="font-size: 0.7rem; text-transform: uppercase;"><?php the_date('j F Y') ?></span>
						      		</div>

						      		<a class="header" style="margin: 10px 0"><?php the_title('<h2>', '</h2>'); ?></a>
						       		<div class="extra">
						        		<div class="ui label" style="font-size: 0.7rem; text-transform: uppercase;" "><?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?></div>
						      		</div>

						      		<div class="description">
						        		<br><p><?php echo get_field('introduction',$post->ID) ?></p>
						      		</div>
						      		
						      		<div class="right floated" style="margin-top: 10px">
						      			<a href="<?php trackback_url(display); ?>"><div class="ui button">Lire l'article</div></a>
						      		</div>
							</div>
						</div>
					</div>

				<?php endwhile;

				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>
		
		</div>

	<?php get_footer();?>
