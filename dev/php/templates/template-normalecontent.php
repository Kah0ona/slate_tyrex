<?php
/*
Template Name: Contentpagina met reviews/openingstijden/waaromtyrex sidebar
*/
?>

<?php get_header(); ?>
<div class="container">
	
		<section id="content"> 	

				<?php include_once('top-usps.php'); ?>
				<div class="grid-70">
					<div class="u-gridRow inhoud">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<h4 class="auto_content"><?php the_title(); ?></h4>
							<?php the_content(); ?>
						<?php endwhile; else: ?>
						<?php endif; ?>
					</div>
				</div>
				<div class="grid-30">
					<div class="sidebar">
						<?php include_once('widget-reviews.php'); ?>
						<?php include_once('widget-openingstijden.php'); ?>
						<?php include_once('widget-waaromtyrex.php'); ?>
					</div>
				</div>
		</section>
	</div>
	<?php get_footer(); ?>
