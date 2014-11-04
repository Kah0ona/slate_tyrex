<?php
/*
Template Name: Velgen
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
		  	
			
			<div class="banden_featured_placeholder"></div>

			<div clasddfcfds="merk-lijst-beschrijvingen2 bandenmerken">
				<div class="merk-container">
					<?php
						$args = array(
							'post_type' => 'automerk',
							'orderby'=>'title',
							'order'=>'ASC',
							'nopaging' => true
						);
						$aanbiedingen = new WP_Query( $args );
						if( $aanbiedingen->have_posts() ) {
							$counter = 1;
							while( $aanbiedingen->have_posts() ) {

								$aanbiedingen->the_post();
								$numColumns = 6;
								if($counter % $numColumns == 1) {
									echo '<div class="u-gridRow">';
								}	?>
										<div class="merk u-gridCol2 merk_<?php the_ID(); ?>" >
											<div class="merk-afbeelding">
												
												<?php 
												 
												$image = get_field('automerk_afbeelding');
												 
												if( !empty($image) ): ?>
												 
													<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
												 
												<?php endif; ?>	
											</div>
											<div class="merk-title">
												<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
											</div>
										</div>

								<?php
									if($counter % $numColumns == 0) {
										echo '</div>';
									}

									$counter++;
							}
						}
						else {
							echo '<p>Er zijn momenteel geen bandmerken</p>';
						}
					?>
				</div>
			</div>	
			
	</section>

	</div>
	<?php get_footer(); ?>
