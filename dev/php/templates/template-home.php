<?php
/*
Template Name: Home 
*/
?>


	<?php get_header(); ?>
	<div class="container">
		<section id="content"> 	
		  	
			<div class="u-gridRow">
				<div class="grid-70">
					<h2 class="line"><span>Meest verkochte banden</span></h2>
			
					<?php include_once('band.php'); ?>
				</div>
				<div class="grid-30">
					<h2 class="line"><span>MgM</span></h2>
					<div class="sidebar">
						<img src="/files/2014/09/sidebar_example3.png" />
						<div class="bottom">
							
						</div>
					</div>
				</div>
			</div>


			<h2 class="line"><span>Populaire Velgen</span></h2>
			<div class="u-gridRow">
				<div class="grid-70">
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
								<div class="band-container velg-container">
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

									<div class="bg-container velg">
										<div>
											<img src="/files/2014/09/merken_example.png" />
										</div>
										<div class="nieuwe-prijs">
											<p> Uw prijs </p>
											<p class="prijs">€
												<!---<?php the_field('nieuwe_prijs'); ?>-->
												80
											</p>
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
		<div class="grid-30">
		<div class="sidebar">
			<img src="/files/2014/09/sidebar_example2.png" />
			<div class="bottom">
						
					</div>
		</div>
			</div>
		</div>

			<div class="u-gridRow">
				<div class="grid-70">
					<h2 class="line"><span>Exlusive Car Detailing</span></h2>


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
					<h2 class="line"><span>sidebar</span></h2>
					<div class="sidebar">
						<img src="/files/2014/09/sidebar_example1.png" />
						<div class="bottom">
									
						</div>
					</div>
				</div>
			</div>

	</section>


	<?php get_footer(); ?>
