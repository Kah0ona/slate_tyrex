<?php
/*
Template Name: autoband merken w/ sidebar on right
*/
?>
<?php get_header(); ?>
<div class="container">
	

	<section id="content">
	  	<h2 class="line"> Autobanden </h2>

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

		<div class="content-sidebar">
			<div class="merk-lijst">
				<div class="merk-lijst-container">
					<div class="merk-title"> 
						<h3>Autobanden merken</h3>
					</div>

					<table>
					<?php
						$args = array(
							'post_type' => 'merk',
							'nopaging' => true
						);
						$aanbiedingen = new WP_Query( $args );
						if( $aanbiedingen->have_posts() ) {
							$counter = 1;

							while( $aanbiedingen->have_posts() ) {
								$numColumns = 4;
								if($counter % $numColumns == 1) {
									echo '<tr>';
								}	

								$aanbiedingen->the_post();
								?>

										<td class="merk-lijst-titel">
											<a href="#<?php the_ID(); ?>"><?php the_title(); ?></a>
										</td>

								<?php

								if($counter % $numColumns == 0) {
									echo '</tr>';
								}

								$counter++;
							}
						}
						else {
							echo '<p>Er zijn momenteel geen aanbiedingen</p>';
						}
					?>
					</table>
				</div>
			</div>


			<div class="merk-lijst-beschrijvingen">
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
								$numColumns = 3;
								if($counter % $numColumns == 1) {
									echo '<div class="u-gridRow">';
								}								
					?>
										<div class="merk" id="<?php the_ID(); ?>">
											<div class="merk-afbeelding">
												<?php 
												 
												$image = get_field('merk_afbeelding');
												 
												if( !empty($image) ): ?>
												 
													<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
												 
												<?php endif; ?>	
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
		</div>
	</div>


		<section id="sidebar" class="rightsidebar">
			<?php get_sidebar(); ?>
		</section> 
	</section>
	</div>
	<?php get_footer(); ?>
