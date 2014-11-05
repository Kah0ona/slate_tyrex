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

										<h4 class="auto_content">Beoordelingen</h4>
										<p>
											Uw mening is voor ons erg belangrijk. Wij streven ernaar om al onze
											 klanten de service te verlenen die ze verdienen. Met behulp van ons 
											 beoordelingssysteem kunt u uw ervaringen delen met de rest. Kwaliteit 
											 is onze reclame! 
										</p>
										<hr>
										<?php echo do_shortcode("[RICH_REVIEWS_SHOW]"); ?>
										

										<a id="show-meer" style="display:inline-block; text-align: center" class="tyrex-button">Laat alle beoordelingen zien</a>
										<fieldset>
										     <legend align="center">Persoonlijke ervaring toevoegen</legend>
										</fieldset>
										<p>
											Je beoordeling helpt het bedrijf om de service te verfijnen, Vrienden en andere bezoekers die overwegen een bezoekje te brengen of een aankoop te doen bij Tyrex Banden, kunnen jouw ervaring lezen ter ondersteuning van hun beslising.
										</p>
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
