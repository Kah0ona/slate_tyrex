<?php
/*
Template Name: Review
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

										<fieldset>
										     <legend align="center">Beoordelingen</legend>
										</fieldset>
										<?php echo do_shortcode("[RICH_REVIEWS_SHOW]"); ?>
										

										<a id="show-meer" style="display:inline-block; text-align: center" class="tyrex-button">Laat alle beoordelingen zien</a>
										<fieldset>
										     <legend align="center">Schrijf zelf een beoordeling!</legend>
										</fieldset>
										<?php echo do_shortcode("[RICH_REVIEWS_FORM]"); ?>
									<?php endwhile; ?>
								<?php endif; ?>				
							</article>
						
					</div>

				</div>
				<div class="grid-30">
					<div class="sidebar">
						<?php //include_once('widget-reviews.php'); ?>
						<?php include_once('widget-stoombeurt.php'); ?>
						<?php include_once('widget-openingstijden.php'); ?>
					</div>
				</div>

		</section>

		</div>
	<?php get_footer(); ?>
