<?php
/*
Template Name: Service
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
		  	<h2 class="line"><span>Tyrex Services</span></h2>
			<div class="u-gridRow">
				<?php
					$args = array(
						'post_type' => 'service'
					);
					$service = new WP_Query( $args );
					if( $service->have_posts() ) {
						while( $service->have_posts() ) {
							$service->the_post();
							?>


							<div class="band">
								<div class="band-container">

									<div class="afbeelding-band">
										<?php 
										 
										$image = get_field('service_afbeelding');
										 
										if( !empty($image) ): ?>
										 
											<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
										 
										<?php endif; ?>	
									</div>	
								</div>

								<div class="info">
									<a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
								</div>
							</div>

							<?php
						}
					}
					else {
						echo '<p>Er zijn momenteel geen services</p>';
					}
				?>
			</div>
	</section>


	<?php get_footer(); ?>
