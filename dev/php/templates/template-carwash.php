<?php
/*
Template Name: Carwash
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
							<?php the_content(); ?>
						<?php endwhile; else: ?>
						<?php endif; ?>
					</div>

				</div>
				<div class="grid-30">
					<div class="sidebar">
						<?php
						include_once('widget-reviews.php'); 
						include_once('widget-stoombeurt.php'); 
						include_once('widget-openingstijden.php'); 
						?>
					</div>
				</div>
				<div style="clear:both"></div>
				<div class="u-gridRow servicelist">
			      <!-- placeholder for the banner script -->
			      <div class="banner banner-carwash"></div>
			    </div>
				<div class="u-gridRow carwashRep">

					<!-- velgen CPT -->
					<?php
						$args = array(
							'post_type' => 'carwash', 
							'posts_per_page'=>6
						);
						$aanbiedingen = new WP_Query( $args );
						include_once('1carwash.php');
						if( $aanbiedingen->have_posts() ) {
							while( $aanbiedingen->have_posts() ) {
								$aanbiedingen->the_post();

								the_carwash();
							}
						}
						else {
							echo '<p>Er zijn momenteel geen aanbiedingen</p>';
						}
					?>
					<!-- /velgen CPT -->				


				</div>


		</section>
		</div>

	<?php get_footer(); ?>
