<?php
/*
Template Name: autoband merken
*/
?>

<?php get_header(); ?>
<div class="u-gridContainer">
	
		<section id="content"> 	

			<?php include_once('top-usps.php') ?>
			<div class="grid-70">
				<div class="u-gridRow banden-content inhoud">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
							<div>
								<h4 class="auto_content"><?php the_title(); ?></h4>
								<?php the_content(); ?>
							</div>
						</article>
					<?php endwhile; else: ?>
					<?php endif; ?>
				</div>
			</div>
			<div class="grid-30">
				<div class="sidebar">
					<?php include_once('widget-reviews.php'); ?>
					<?php include_once('widget-wistudat.php'); ?>
					<?php include_once('widget-mgm.php'); ?>
					<?php include_once('widget-openingstijden.php'); ?>
				</div>
			</div>
			<div class="u-gridRow">
				<div class="merk-lijst u-gridCol6">
					<div class="merk-lijst-container">
						<table class="soorten-tabel">
							<thead>
								<tr>
									<th colspan="2"><h3>Autobanden soorten</h3></th>
								</tr>
							</thead>
							<?php
								$args = array(
									'post_type' => 'bandensoort',
									'nopaging' => true
								);
								$aanbiedingen = new WP_Query( $args );
								if( $aanbiedingen->have_posts() ) {
									$counter = 1;

									while( $aanbiedingen->have_posts() ) {
										$numColumns = 2;
										if($counter % $numColumns == 1) {
											echo '<tr>';
										}	

										$aanbiedingen->the_post();
										?>

											<td class="merk-lijst-titel">
												<a href="#" data-target="soort_<?php the_ID(); ?>"><?php the_title(); ?></a>
											</td>

										<?php

										if($counter % $numColumns == 0) {
											echo '</tr>';
										}

										$counter++;
									}
								}
								else {
									echo '<p>Er zijn momenteel geen bandensoorten</p>';
								}
							?>
						</table>
					</div>
				</div>
				<div class="merk-lijst u-gridCol6">
					<table class="merken-tabel">
						<thead>
							<tr>
								<th colspan="3"><h3>Autobanden merken</h3></th>
							</tr>
						</thead>
						<?php
							$args = array(
								'post_type' => 'merk',
								'nopaging' => true
							);
							$aanbiedingen = new WP_Query( $args );
							if( $aanbiedingen->have_posts() ) {
								$counter = 1;

								while( $aanbiedingen->have_posts() ) {
									$numColumns = 3;
									if($counter % $numColumns == 1) {
										echo '<tr>';
									}	

									$aanbiedingen->the_post();
									?>

											<td class="merk-lijst-titel">
												<a href="#" data-target="merk_<?php the_ID(); ?>"><?php the_title(); ?></a>
											</td>

									<?php

									if($counter % $numColumns == 0) {
										echo '</tr>';
									}

									$counter++;
								}
							}
							else {
								echo '<p>Er zijn momenteel geen merken</p>';
							}
						?>
					</table>
				</div><!-- /merk-lijst -->
			</div> <!-- /row-->
			
			<div class="banden_featured_placeholder"></div>

			<div class="merk-lijst-beschrijvingen bandenmerken">
				<div class="merk-container">
					<?php
						$args = array(
							'post_type' => 'merk',
							'nopaging' => true
						);
						$aanbiedingen = new WP_Query( $args );
						if( $aanbiedingen->have_posts() ) {
							$counter = 1;
							while( $aanbiedingen->have_posts() ) {

								$aanbiedingen->the_post();
								$numColumns = 4;
								if($counter % $numColumns == 1) {
									echo '<div class="u-gridRow">';
								}	?>
										<div class="merk u-gridCol3 merk_<?php the_ID(); ?>" >
											<div class="merk-afbeelding">
												
												<?php 
												 
												$image = get_field('merk_afbeelding');
												 
												if( !empty($image) ): ?>
												 
													<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
												 
												<?php endif; ?>	
											</div>
											<div class="merk-title">
												<h3><?php the_title(); ?></h3>
											</div>
											<div class="merk-beschrijving-short">
												<p><?php echo substr(get_field('merk_beschrijving'), 0, 95).'...';  ?></p>
											</div>

											<div class="merk-beschrijving-long">
												<p><?php echo get_field('merk_beschrijving');  ?></p>
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
			<div class=" merk-lijst-beschrijvingen bandensoorten">
				<div class="merk-container ">
					<?php
						$args = array(
							'post_type' => 'bandensoort',
							'nopaging' => true
						);
						$aanbiedingen = new WP_Query( $args );
						if( $aanbiedingen->have_posts() ) {
							$counter = 1;
							while( $aanbiedingen->have_posts() ) {

								$aanbiedingen->the_post();
								$numColumns = 4;
								if($counter % $numColumns == 1) {
									echo '<div class="u-gridRow">';
								}	?>
										<div class="merk u-gridCol3 soort_<?php the_ID(); ?>" >
											<div class="merk-afbeelding">
												<?php 
												 
												$image = get_field('merk_afbeelding');
												 
												if( !empty($image) ): ?>
												 
													<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
												 
												<?php endif; ?>	
											</div>
											<div class="merk-title">
												<h3><?php the_title(); ?></h3>
											</div>
											<div class="merk-beschrijving-short">
												<p><?php echo substr(get_field('merk_beschrijving'), 0, 95).'...';  ?></p>
											</div>

											<div class="merk-beschrijving-long">
												<p><?php echo get_field('merk_beschrijving');  ?></p>
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
