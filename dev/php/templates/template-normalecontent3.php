<?php
/*
Template Name: Contentpagina met reviews/stoombeurt/openingstijden sidebar
*/
?>

<?php get_header(); ?> 
<div class="container">
	
		<section id="content"> 	

			<?php include_once('top-usps.php'); ?>
				<div class="grid-70">
					<div class="u-gridRow service">
						<article>
							<?php if (have_posts()) : ?>
								<?php while (have_posts()) : the_post(); ?>

									<h2><?php the_title(); ?></h2>
									<div><?php the_content(); ?></div>

								<?php endwhile; ?>
							<?php endif; ?>				

						</article>
						
					</div>

				</div>
				<div class="grid-30">
					<div class="sidebar">
						<?php include_once('widget-reviews.php'); ?>
						<?php include_once('widget-stoombeurt.php'); ?>
						<?php include_once('widget-openingstijden.php'); ?>
					</div>
				</div>

		</section>

		</div>
	<?php get_footer(); ?>
