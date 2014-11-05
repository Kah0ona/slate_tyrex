<?php
/*
Template Name: autoband merken
*/
?>

<?php get_header(); ?>
<div class="u-gridContainer">
	
		<section id="content"> 	

			<div class="u-gridRow usp">
		  		<div class="u-gridCol3">
		  			<h4 class="red-title-bar">Topkwaliteit</h4>
		  			<p class="red-content">Service en kwaliteit vormen onze basis.</br>
		  				Onze tevredenheidsgarantie laat u nooit steken.</p>
		  			<div class="col-foot">
		  					<img src="/files/2014/09/ups41.png" />
		  			</div>
		  		</div>
		  		<div class="u-gridCol3">
		  			<h4 class="red-title-bar">Grote voorraad</h4>
		  			<p class="red-content">Meeste maten direct leverbaar uit voorraad.</br>
		  				Uw maat niet voorradig? Binnen een werkdag weer wel!</p>
		  			<div class="col-foot">
		  					<img src="/files/2014/09/ups2.png" />
		  			</div>
		  		</div>
		  		<div class="u-gridCol3">
		  			<h4 class="red-title-bar">Beste koop</h4>
		  			<p class="red-content">Betaal nooit teveel.</br>
		  				De prijzen van onze concurrenten worden dagelijks gemonitord.</p>
		  			<div class="col-foot">
		  					<img src="/files/2014/09/ups3.png" />
		  			</div>
		  		</div>
		  		<div class="u-gridCol3">
		  			<h4 class="red-title-bar">Verdien geld</h4>
		  			<p class="red-content">Verdien tot 20,- euro oer klant!</br>
		  				Ontdek ons Member Gets Member systeem en start met verdienen.</p>
		  			<div class="col-foot">
		  					<img src="/files/2014/09/ups4.png" />
		  			</div>
		  		</div>
		  	</div>
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
			<div class="u-gridRow autobanden">
				 <h2> Autobanden </h2>
				<div class="editor-content">
					<p>Tyrex Banden biedt u een compleet assortiment banden voor bijna elk type voertuig. U bent bij ons op het juiste adres voor vakkundige en vrijblijvende adviezen voor uw banden. Wij leveren alle topmerken die daarnaast aangevuld worden door ons huismerk die u verzekert van een optimale prijs-kwaliteitverhouding.</p>
					<p>De experts van Tyrex Banden beschikken over alle knowhow omtrent uw banden. Spijtig genoeg worden de banden nog wel eens onderschat. Tyrex Banden werkt dan ook uitsluitend met hoge kwaliteitsbanden.</p>
					<p>Zijn uw banden onregelmatig versleten? Dankzij onze modernste 3D uitlijnapparatuur wordt uw auto-onderstel weer op de juiste fabriekswaardes afgesteld.</p>
					<p>Voor een prijsopgave van een bepaalde bandenmaat, kunt u het snelst telefonisch contact opnemen met één van onze experts. U kunt buiten onze openingstijden uw bandengegevens natuurlijk ook aan ons doorgeven via ons contactformulier.</p>
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
								<th colspan="2"><h3>Autobanden merken</h3></th>
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
									$numColumns = 2;
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
