<?php
/*
Template Name: Waar vindt u ons
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
							<h2><?php the_title(); ?></h2>

							<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false">
							</script><div style="overflow:hidden;height:500px;width:600px;">
							<div id="gmap_canvas" style="height:500px;width:600px;"></div>
							<style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
							</div>
							<script type="text/javascript"> function init_map(){var myOptions = {zoom:15,center:new google.maps.LatLng(51.5432365,4.4937783999999965),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(51.5432365, 4.4937783999999965)});infowindow = new google.maps.InfoWindow({content:"<b>Tyrex Banden</b><br/>Schuurakker 11<br/> Roosendaal" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
							<article>
							
							<div><?php the_content(); ?></div>
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
							<a href="#">Lees meer >></a>a

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
