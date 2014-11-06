<?php
/*
Template Name: Acties
*/
?>

<?php get_header(); ?>
<div class="container">
	
		<section id="content"> 	

				<?php include_once('top-usps.php'); ?>
				<div class="">
					<div class="u-gridRow inhoud">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<h4 class="auto_content"><?php the_title(); ?></h4>
							<div class="u-gridRow">
								<div class="actie-menu">
								    <a href="#" class="actie-menu-color actie-menu-banden banden-a">Banden</a>
								    <a href="#" class="actie-menu-color actie-menu-velgen velgen-a">Velgen</a>
								    <a href="#" class="actie-menu-color actie-menu-service service-a">Service</a>
								    <a href="#" class="actie-menu-color actie-menu-carwash carwash-a">Carwash</a>
								</div>

							</div>
							<?php the_content(); ?>
						<?php endwhile; else: ?>
						<?php endif; ?>
						<div class="actie_box actie_banden u-gridRow">
						<?php
							$args = array(
								'post_type' => 'band', 
								'posts_per_page'=>8,
								'meta_key'=>'is_actie',
								'meta_value'=>'ja'
							);
							$aanbiedingen = new WP_Query( $args );
							include_once('1band.php');
							if( $aanbiedingen->have_posts() ) {
								while( $aanbiedingen->have_posts() ) {
									$aanbiedingen->the_post();
									$button = '<a class="banden-link actieformulier-button-band" href="#actie-formulier">Bestellen</a>';
									?>
										<?php the_band(true, 3, $button);
										// zie 1band.php ?>
									<?php
								}
							}
							else {
								echo '<p>Er zijn momenteel geen aanbiedingen</p>';
							}
						?>
						</div>

						<div class="actie_box actie_velgen u-gridRow">
						<?php
							$args = array(
								'post_type' => 'velg', 
								'posts_per_page'=>8,
								'meta_key'=>'is_actie',
								'meta_value'=>'ja'
							);
							$aanbiedingen = new WP_Query( $args );
							include_once('1velg.php');
							if( $aanbiedingen->have_posts() ) {
								while( $aanbiedingen->have_posts() ) {
									$aanbiedingen->the_post();
									$button = '<a class="banden-link actieformulier-button-band" href="#actie-formulier">Bestellen</a>';

									?>
										<?php the_velg(3, $button);// zie 1band.php ?>
										

									<?php
								}
							}
							else {
								echo '<p>Er zijn momenteel geen aanbiedingen</p>';
							}
						?>
						</div>


						<?php 
						include_once('1actie.php');
						$cats = array('Service', 'Carwash');
						foreach ($cats as $cat) { ?>
							<div class="actie_box actie_<?php echo strtolower($cat); ?> u-gridRow">
							<?php
								$args = array(
									'post_type' => 'acties', 
									'posts_per_page'=>1,
									'meta_key'=>'categorie',
									'meta_value'=>$cat
								);
								$aanbiedingen = new WP_Query( $args );
								if( $aanbiedingen->have_posts() ) {
									while( $aanbiedingen->have_posts() ) {
										$aanbiedingen->the_post();
										$button = '';

										?>
											<?php the_actie(12, $button); ?>
										<?php
									}
								}
								else {
									echo '<p>Er zijn momenteel geen aanbiedingen</p>';
								}
							?>
							</div>
						<?php } ?>



					</div>





				</div>
		</section>
	</div>
	<?php get_footer(); ?>
