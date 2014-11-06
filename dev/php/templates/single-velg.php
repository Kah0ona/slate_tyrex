
<?php get_header(); ?>

<div class="container single-band">

	<?php include_once('top-usps.php'); ?>

	<div class="grid-70 " style="margin-top: 20px">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="u-gridRow">
			<div class="u-gridCol4">
				<?php include_once('1velg.php'); ?>
				<?php 
					$button = '<a class="banden-link actieformulier-button-band" href="#actie-formulier">Bestellen</a>';
					the_velg(4, $button,true); ?>
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

