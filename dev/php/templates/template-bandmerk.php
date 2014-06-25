<?php
/*
Template Name: autoband merken
*/
?>
<div class="container">
	<?php get_header(); ?>
		<section id="content"> 	
			  <h2> Autobanden </h2>

				<div class="merk-lijst">
					<div class="merk-lijst-container">
						<div class="merk-title"> 
							<h3>Autobanden merken</h3>
						</div>
						<?php
							$args = array(
								'post_type' => 'merk',
							);
							$aanbiedingen = new WP_Query( $args );
							if( $aanbiedingen->have_posts() ) {
								while( $aanbiedingen->have_posts() ) {
									$aanbiedingen->the_post();
									?>


											<div class="merk-lijst-titel">
												<a href="#<?php the_ID(); ?>"><?php the_title(); ?></a>
											</div>

									<?php
								}
							}
							else {
								echo '<p>Er zijn momenteel geen aanbiedingen</p>';
							}
						?>
					</div>
				</div>


				<div class="merk-lijst-beschrijvingen">
					<div class="merk-container">
						<?php
							$args = array(
								'post_type' => 'merk',
							);
							$aanbiedingen = new WP_Query( $args );
							if( $aanbiedingen->have_posts() ) {
								while( $aanbiedingen->have_posts() ) {
									$aanbiedingen->the_post();
									?>
									

										<div class="merk" id="<?php the_ID(); ?>">
											<div class="merk-afbeelding">
												<?php 
												 
												$image = get_field('merk_afbeelding');
												 
												if( !empty($image) ): ?>
												 
													<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
												 
												<?php endif; ?>	
											</div>

											<div class="merk-beschrijving">
												<?php echo substr(get_field('merk_beschrijving'), 0, 90).'...';  ?></p>
											</div>

											<div class="info">
												<a href="<?php echo get_permalink(); ?>">Meer info</a>
											</div>							
										</div>
									<?php
								}
							}
							else {
								echo '<p>Er zijn momenteel geen bandmerken</p>';
							}
						?>
					</div>
				</div>	
		</section>
	<?php get_sidebar(); ?>

	<?php get_footer(); ?>