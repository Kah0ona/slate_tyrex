<?php
/*
Template Name: Home 
*/
?>


	<?php get_header(); ?>
	<div class="container">
		<section id="content"> 	
		  	<div class="u-gridRow usp">
		  		<div class="u-gridCol3">
		  			<h4 class="red-title-bar">Autobanden</h4>
		  			<p class="red-content">Altijd de juist banden voor uw voertuig!</br>
		  				Wat voor banden u ook nodig hebt, wij staan u graag te woord.</p>
		  			<div class="col-foot">
		  					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/content_1.png" />
		  			</div>
		  		</div>
		  		<div class="u-gridCol3">
		  			<h4 class="red-title-bar">Bandenservice</h4>
		  			<p class="red-content">Van uitlijnen tot bandenhotel!</br></br>
		  				Alle know-how paraat, Tyrex Banden is uw bandenspecialist.</p>
		  			<div class="col-foot">
		  					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/content_2.png" />
		  			</div>
		  		</div>
		  		<div class="u-gridCol3">
		  			<h4 class="red-title-bar">Velgen</h4>
		  			<p class="red-content">Zeer breed assortiment aan velgen!</br></br>
		  				De meeste exclusieve velgen koopt u bij Tyrex Banden.</p>
		  			<div class="col-foot">
		  					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/content_3.png" />
		  			</div>
		  		</div>
		  		<div class="u-gridCol3">
		  			<h4 class="red-title-bar">Carwash</h4>
		  			<p class="red-content">Unieke stoomreiniging voor uw bolide!
		  				Onze methode is duurzaam, ecologisch, hygienisch en betaalbaar.</p>
		  			<div class="col-foot">
		  					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/content_4.png" />
		  			</div>
		  		</div>
		  	</div>
				<div class="grid-70">
					<div class="u-gridRow">
					<div class="title-wrap">
						<!---<h2 class="line-title">Meest verkochte banden</h2> -->
						<fieldset>
						     <legend align="center">Populaire Banden</legend>
						</fieldset>

					</div>
					
			
					<?php include_once('band.php'); ?>
					</div>
					<div class="u-gridRow">
					<div class="title-wrap">
						<fieldset>
						     <legend align="center">Populaire Velgen</legend>
						</fieldset>
					</div>
						<?php
					$args = array(
						'post_type' => 'velg', 
						'posts_per_page'=>4
					);
					$aanbiedingen = new WP_Query( $args );
					include_once('1velg.php');
					if( $aanbiedingen->have_posts() ) {
						while( $aanbiedingen->have_posts() ) {
							$aanbiedingen->the_post();
							$button = '<a href="'.get_permalink().'">Meer info</a>';
							the_velg(4, $button);
						}
					}
					else {
						echo '<p>Er zijn momenteel geen aanbiedingen</p>';
					}
				?>
			</div>



				</div>
				<div class="grid-30">
					<div class="sidebar">
						<?php include_once('widget-reviews.php'); ?>
						<?php include_once('widget-waaromtyrex.php'); ?>
						<?php include_once('widget-mgm.php'); ?>
						<?php include_once('widget-openingstijden.php'); ?>
					</div>
				</div>

			<div class="u-gridRow">
				<div class="grid-70">
					<div class="title-wrap">
						<fieldset>
						     <legend align="center">Exclusive Car Detailing</legend>
						</fieldset>
					</div>

					<div class="editor-content bigsize">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
								<div>
									<?php the_content(); ?>
								</div>
							</article>

						<?php endwhile; else: ?>

						<?php endif; ?>
					</div>
				</div>
				<div class="grid-30">
					<div class="cardetailing-wrap">
					<div class="car-detailing">
						<?php

							$args = array(
								'post_type' => 'cardetailing', 
								'posts_per_page'=>3
							);
							$aanbiedingen = new WP_Query( $args );
							if( $aanbiedingen->have_posts() ) {
								while( $aanbiedingen->have_posts() ) {
									$aanbiedingen->the_post();

									$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 
										'single-post-thumbnail' ); 
							  		$image_url = $image[0];
									?>
										<div class="cardetailing-slide">
											<img src="<?php echo $image_url; ?>" />
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


					
				</div>
			</div>

	</section>

	</div>
	<?php get_footer(); ?>
