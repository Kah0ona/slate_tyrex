<?php
/*
Template Name: OVERIGE
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
						<div class="box box-relative">
							<div class="title">Onze klanten aan het woord.</div></br>
							<div>
								<div class="view-snippet"><?php echo do_shortcode("[RICH_REVIEWS_SNIPPET]"); ?></div> 
								<img align="right" src="/files/2014/10/duim.png" />
							</div>

							Service en kwaliteit vormen onze basis.<br/><br/>

							<a href="/beoordelingen/">Bekijk beoordeling >></a>
						</div>
						<div class="box">
							<div class="title">Gratis stoombeurt</div>
							Spaar punten bij elke euro die u uitgeeft. Bij 100 punten wordt uw auto gratis gereinigd van buiten en van binnen.</br></br>
							<a href="#">Lees meer >></a>

						</div>
						<div class="box">
							<div class="title">Hulp nodig?</div>
							Onze medewerkers staan u graag telefonisch te woord tijdens on ze openingstijden:<br/><br/>
							
						<div class="u-gridRow">
							<div class="u-gridCol6">ma t/m vr<br/>
							zaterdag
							</div>
							<div class="u-gridCol6">08:00 - 17:30</br>
								08:00 - 17:00
							</div>
						</div>
						<p class="telefoon">0165 - 32 00 02
						</div>
					</div>
				</div>

		</section>

		</div>
	<?php get_footer(); ?>
