
<?php get_header(); ?>

<div class="container single-band">

	<?php include_once('top-usps.php'); ?>

	<div class="grid-70 " style="margin-top: 20px">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="u-gridRow">
			<div class="u-gridCol4">
				<div class="band">
					<div class="band-container">
						<div class="afbeelding-merk">
							<?php 
							 
							$image = get_field('afbeelding_merk');
							 
							if( !empty($image) ): ?>
							 
								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
							 
							<?php endif; ?>	
						</div>
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

						<div class="bg-container">
							<div class="type-band">
								<h4><?php the_field('type_velg'); ?></h4>
							</div>
							<div class="oude-prijs">
								<p>Normale prijs</p>
								<p>€<?php the_field('oude_prijs'); ?></p>
							</div>
							<div class="nieuwe-prijs">
								<p> Uw prijs </p>
								<p class="prijs">€<?php the_field('nieuwe_prijs'); ?></p>
							</div>
						</div>
					</div><!-- band-container -->
				</div><!-- band -->
			</div> <!-- gridcol4 -->
			<div class="u-gridCol8">
				<div class="beschrijving">
					<h3> <?php the_title() ?> </h3>
					<p> <?php the_field('beschrijving_band'); ?> </p>
				</div>
			</div>

			<?php endwhile; endif; ?>
		</div>
	</div> <!-- grid 70 -->
	<div class="grid-30">
		<div class="sidebar">
			<?php 
				include_once('widget-reviews.php'); 
				include_once('widget-stoombeurt.php'); 
				include_once('widget-openingstijden.php'); 
			?>
		</div>
	</div> <!-- grid-30 -->
</div> <!-- container -->
<?php get_footer(); ?>
