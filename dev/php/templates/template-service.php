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
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<h4 class="auto_content"><?php the_title(); ?></h4>
								<div>
									<?php the_content(); ?>
								</div>
						<?php endwhile; else: ?>
						<?php endif; ?>
					</div>
				</div>
				<div class="grid-30">
					<div class="sidebar">
						<?php include_once('widget-reviews.php'); ?>
						<?php include_once('widget-openingstijden.php'); ?>
					</div>
				</div>

				<div class="u-gridRow servicelist">
					<div class="u-gridCol4">
						<a href="/bandenwissel-2/"><div class="boxservice">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/bandenwissel.png" />
							<div class="boxtitle">Banden wisselen</div>
						</div></a>
					</div>
					<div class="u-gridCol4">
						<a href="/balanceren/"><div class="boxservice">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/bandenbalanceren.png" />
							<div class="boxtitle">Banden balanceren</div>
						</div></a>
					</div>
					<div class="u-gridCol4">
						<a href="/uitlijnen/"><div class="boxservice">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/bandenuitlijnen.png" />
							<div class="boxtitle">Auto uitlijnen</div>
						</div></a>
					</div>
				</div>

				<div class="u-gridRow servicelist">
					<!--<div class="u-gridCol4">
						<div class="boxservice">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/onderhoud.png" />
							<div class="boxtitle">Onderhoud</div>
						</div>
					</div>-->
					<div class="u-gridCol4">
						<a href="/sleepdienst/"><div class="boxservice">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/sleepdienst.png" />
							<div class="boxtitle">Sleepdienst</div>
						</div></a>
					</div>
					<!--<div class="u-gridCol4">
						<div class="boxservice">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cardetailing.png" />
							<div class="boxtitle">Car detailing</div>
						</div>
					</div>-->
					<div class="u-gridCol4">
						<a href="/spot-repair/"><div class="boxservice">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/spotschade.png" />
							<div class="boxtitle">Spot repair</div>
						</div></a>
					</div>

				</div>

				<!--<div class="u-gridRow servicelist">
					<div class="u-gridCol4">
						<div class="boxservice">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/bekledingreparatie.png" />
							<div class="boxtitle">Bekleding reparatie</div>
						</div>
					</div>
					
				</div>-->
		</section>

		
	<?php get_footer(); ?>
