<div class="container">
	<?php get_header(); ?>

	<section id="content">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


		<div class="band-container">
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
		</div>


		<div class="beschrijving">
			<h3> <?php the_title() ?> </h3>
			<p> <?php the_field('service_content'); ?> </p>
		</div>

		<?php endwhile; else: ?>

			<p><?php _('Sorry, no posts matched your criteria.'); ?></p>

		<?php endif; ?>
	</section>

	<?php get_footer(); ?>