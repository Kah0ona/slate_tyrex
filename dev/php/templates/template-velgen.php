<?php
/*
Template Name: Velgen
*/
?>
<?php get_header(); ?>
<div class="container">
	
		<section id="content"> 	
			<div class="u-gridRow">
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

			<h2> <?php the_title(); ?> </h2>
			<div class="editor-content">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
						<div>
							<?php the_content(); ?>
						</div>
					</article>

				<?php endwhile; else: ?>

				<?php endif; ?>
			</div>			
		  	<h2 class="line"><span>Meest verkochte velgen</span></h2>
			<div class="u-gridRow">
				<?php
					$args = array(
						'post_type' => 'velg', 
						'posts_per_page'=>4
					);
					$aanbiedingen = new WP_Query( $args );
					if( $aanbiedingen->have_posts() ) {
						while( $aanbiedingen->have_posts() ) {
							$aanbiedingen->the_post();
							?>


							<div class="band">
								<div class="band-container">
									<div class="afbeelding-band">
										<?php 
										 
										$image = get_field('afbeelding_velg');
										 
										if( !empty($image) ): ?>
										 
											<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
										 
										<?php endif; ?>	
									</div>	
									<div class="naam-band">
										<h3><?php the_field('naam_velg'); ?></h3>
									</div>

									<div class="bg-container">
										<div class="oude-prijs">
											<p>Prijs</p<>
											<p>€<?php the_field('oude_prijs_velg'); ?></p>
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
			</div>
	</section>


	<?php get_footer(); ?>
