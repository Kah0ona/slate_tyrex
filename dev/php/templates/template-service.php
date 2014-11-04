<?php
/*
Template Name: Service
*/
?>

<?php get_header(); ?> 
<div class="container">
	
		<section id="content"> 	

				<?php include_once('top-usps.php'); ?>
				<div class="grid-70">
					<div class="u-gridRow service">
							<h4 class="auto_content">Service</h4>
							<p class="service">
								Tyrex Banden is een full servicebedrijf voor uw banden. Wij streven ernaar 
								onze klanten de hoogste service te verlenen tegen betaalbare prijzen. 
								Uitsluitend vakkundig personeel zal u te woord staan en indien nodig helpen. 
								Naast bandenservice kunt u bij ons ook terecht voor kleine en grote 
								onderhoudsbeurten. 
							</p>

							<p class="service">
								Wij hebben bij Tyrex Banden de afgelopen jaren opgemerkt dat klanten 
								na het wisselen van banden, aanschaffen van nieuwe velgen of het uitvoeren
								van een onderhoudsbeurt de auto vak doorrijden naar een wasstraat om
								‘de puntjes op de i te zetten’. Sindsdien zijn we gestart met een nieuw
								concept op het gebied van autoreiniging. Onze methode is gebasseerd op 
								een combinatrie van hogedruk en stoom. Hiermee reinigen wij het exterieur 
								en interieur van uw auto. Alles is mogelijk, van een wasbeurt naar een com-
								plete detailbeurt waarbij de auto in showroomstaat wordt afgeleverd.
							</p>
							<p class="service">
								Tenslotte kunnen wij ook uw autobekleding en/of blikschade professioneel 
								laten repareren.</p>
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

				<div class="u-gridRow servicelist">
					<div class="u-gridCol4">
						<div class="boxservice">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/bandenwissel.png" />
							<div class="boxtitle">Banden wisselen</div>
						</div>
					</div>
					<div class="u-gridCol4">
						<div class="boxservice">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/bandenbalanceren.png" />
							<div class="boxtitle">Banden balanceren</div>
						</div>
					</div>
					<div class="u-gridCol4">
						<div class="boxservice">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/bandenuitlijnen.png" />
							<div class="boxtitle">Auto uitlijnen</div>
						</div>
					</div>
				</div>

				<div class="u-gridRow servicelist">
					<div class="u-gridCol4">
						<div class="boxservice">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/onderhoud.png" />
							<div class="boxtitle">Onderhoud</div>
						</div>
					</div>
					<div class="u-gridCol4">
						<div class="boxservice">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cardetailing.png" />
							<div class="boxtitle">Car detailing</div>
						</div>
					</div>
					<div class="u-gridCol4">
						<div class="boxservice">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/spotschade.png" />
							<div class="boxtitle">Spot repair</div>
						</div>
					</div>

				</div>

				<div class="u-gridRow servicelist">
					<div class="u-gridCol4">
						<div class="boxservice">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/bekledingreparatie.png" />
							<div class="boxtitle">Bekleding reparatie</div>
						</div>
					</div>

					<div class="u-gridCol4">
						<div class="boxservice">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/sleepdienst.png" />
							<div class="boxtitle">Sleepdienst</div>
						</div>
					</div>
				</div>
		</section>

		
	<?php get_footer(); ?>
