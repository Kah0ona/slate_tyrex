<?php
/*
Template Name: Review
*/
?>

<?php get_header(); ?> 
<div class="container">
	
		<section id="content"> 	

			<div class="u-gridRow usp">
		  		<div class="u-gridCol3">
		  			<h4 class="red-title-bar">Topkwaliteit</h4>
		  			<p class="red-content">Service en kwaliteit vormen onze basis.</br>
		  				Onze tevredenheidsgarantie laat u nooit steken.</p>
		  			<div class="col-foot">
		  					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ups4.png" />
		  			</div>
		  		</div>
		  		<div class="u-gridCol3">
		  			<h4 class="red-title-bar">Grote voorraad</h4>
		  			<p class="red-content">Meeste maten direct leverbaar uit voorraad.</br>
		  				Uw maat niet voorradig? Binnen een werkdag weer wel!</p>
		  			<div class="col-foot">
		  					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ups2.png" />
		  			</div>
		  		</div>
		  		<div class="u-gridCol3">
		  			<h4 class="red-title-bar">Beste koop</h4>
		  			<p class="red-content">Betaal nooit teveel.</br>
		  				De prijzen van onze concurrenten worden dagelijks gemonitord.</p>
		  			<div class="col-foot">
		  					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ups3.png" />
		  			</div>
		  		</div>
		  		<div class="u-gridCol3">
		  			<h4 class="red-title-bar">Verdien geld</h4>
		  			<p class="red-content">Verdien tot 20,- euro per klant!</br>
		  				Ontdek ons Member Gets Member systeem en start met verdienen.</p>
		  			<div class="col-foot">
		  					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ups5.png" />
		  			</div>
		  		</div>
		  	</div>
				<div class="grid-70">
					<div class="u-gridRow service">
							<article>
								<?php if (have_posts()) : ?>
									<?php while (have_posts()) : the_post(); ?>

										<fieldset>
										     <legend align="center">Beoordelingen</legend>
										</fieldset>
										<?php echo do_shortcode("[RICH_REVIEWS_SHOW]"); ?>
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
