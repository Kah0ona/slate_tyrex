<?php
/*
Template Name: Waar vindt u ons
*/
?>

<?php get_header(); ?> 
<div class="container">
	
		<section id="content"> 	

				<?php include_once('top-usps.php'); ?>
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
					<?php include_once('widget-reviews.php'); ?>
					<?php include_once('widget-stoombeurt.php'); ?>
					<?php include_once('widget-openingstijden.php'); ?>
					</div>
				</div>
		</section>

		</div>
	<?php get_footer(); ?>
