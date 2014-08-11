<?php
/*
Template Name: carwash
*/
?>
<div class="container">
	<?php get_header(); ?>
		<section id="content"> 	
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

		  	<div class="u-gridRow">
			  	<div class="merk-lijst u-gridCol9">
					<div class="merk-lijst-container">
						<table class="merken-tabel">
							<thead>
								<tr>
									<th colspan="2"><h3>Programma's</h3></th>
								</tr>
							</thead>
							<?php
								$args = array(
									'post_type' => 'carwash',
									'nopaging' => true
								);
								$aanbiedingen = new WP_Query( $args );
								if( $aanbiedingen->have_posts() ) {
									$counter = 1;

									while( $aanbiedingen->have_posts() ) {
										$numColumns = 1;
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
									echo '<p>Er zijn momenteel geen programmas</p>';
								}
							?>
						</table>
					</div>
			  </div>
			</div> <!-- /row-->
				
			<div class="u-gridRow">
			  	<div class="merk-lijst u-gridCol12">
					<div class="merk-lijst-container">
						<table class="programma-beschrijving">
							<thead>
								<tr>
									<th><h3>Programma's</h3></th>
									<th><h3>Arbeidsduur</h3></th>
									<th><h3>Prijs</h3></th>
								</tr>
							</thead>
							<?php
								$args = array(
									'post_type' => 'carwash',
									'nopaging' => true
								);
								$aanbiedingen = new WP_Query( $args );
								if( $aanbiedingen->have_posts() ) {
									$counter = 1;

									while( $aanbiedingen->have_posts() ) {
										$aanbiedingen->the_post();
										?>
											<tr>
												<td class="merk-lijst-titel">
													<h4><?php the_title(); ?></h4>
													<p><?php echo get_field('programma_beschrijving');  ?></p>
												</td>

												<td class="merk-lijst-titel ta-center">
													<p><?php echo get_field('programma_arbeidsduur');  ?> minuten </p>
												</td>

												<td class="merk-lijst-titel ta-center">
													<p>&euro;<?php echo get_field('programma_prijs');  ?>,-</p>
												</td>
									
											</tr>
										<?php
									}
								}
								else {
									echo '<p>Er zijn momenteel geen programmas</p>';
								}
							?>
						</table>
					</div>
			  </div>
			</div> <!-- /row-->			
			



		</section>

	<?php get_footer(); ?>
