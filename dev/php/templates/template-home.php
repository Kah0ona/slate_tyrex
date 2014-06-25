<?php
/*
Template Name: Home
*/
?>

<div class="container">
	<?php get_header(); ?>
		<section id="content"> 	
			  <h2 class="line"><span>Meest verkochte banden</span></h2>

			<?php
				$args = array(
					'post_type' => 'band',
				);
				$aanbiedingen = new WP_Query( $args );
				if( $aanbiedingen->have_posts() ) {
					while( $aanbiedingen->have_posts() ) {
						$aanbiedingen->the_post();
						?>

						<div class="band">
							<div class="band-container">
								<div class="afbeelding-merk">
									<?php 
									 
									$image = get_field('afbeelding_merk');
									 
									if( !empty($image) ): ?>
									 
										<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
									 
									<?php endif; ?>	
								</div>
								<div class="afbeelding-band">
									<?php 
									 
									$image = get_field('afbeelding_band');
									 
									if( !empty($image) ): ?>
									 
										<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
									 
									<?php endif; ?>	
								</div>	
								<div class="naam-band">
									<h3><?php the_field('naam_band'); ?></h3>
								</div>

								<div class="bg-container">
									<div class="type-band">
										<h4><?php the_field('type_band'); ?></h4>
									</div>
									<div class="oude-prijs">
										<p>Normale prijs</p<>
										<p>€<?php the_field('oude_prijs'); ?></p>
									</div>
									<div class="nieuwe-prijs">
										<p> Uw prijs </p>
										<p class="prijs">€<?php the_field('nieuwe_prijs'); ?></p>
									</div>
									
									<div class="klasse-container">
										<div class="klasse-benzine <?php the_field('klasse_benzine'); ?>">
											
										</div>


										<div class="klasse-weer <?php the_field('klasse_weer'); ?>">
											
										</div>
										<div class="klasse-geluid
											<?php $geluid = get_field('klasse_geluid');
												if($geluid > 0 && $geluid < 33) {
													echo 'soft';
												} elseif($geluid >= 33 && $geluid < 66) {
													echo 'medium';
												} elseif($geluid >= 66) {
													echo 'loud';
												} else {// toon geen plaatje
													echo '';
												}
											?>
										">
										
											<p class="geluid"><?php the_field('klasse_geluid'); ?></p>

										</div>
									</div>
								</div>
							</div>

							<div class="info">
								<a href="<?php echo get_permalink(); ?>">Meer info</a>
							</div>
						</div>

						<?php
					}
				}
				else {
					echo '<p>Er zijn momenteel geen aanbiedingen</p>';
				}
			?>
	</section>

	<?php get_sidebar(); ?>

	<?php get_footer(); ?>
