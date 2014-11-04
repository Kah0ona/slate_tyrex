
<?php get_header(); ?>
<div class="container single-band">

	<?php include_once('top-usps.php'); ?>

	<div class="grid-70 " style="margin-top: 20px">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="u-gridRow">
			<div class="u-gridCol4">
				<div class="merk" id="<?php the_ID(); ?>">
				<div class="merk-afbeelding">
					<?php 
					 
					$image = get_field('merk_afbeelding');
					 
					if( !empty($image) ): ?>
					 
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					 
					<?php endif; ?>	
				</div>

				<div class="merk-beschrijving">
					<?php echo substr(get_field('merk_beschrijving'), 0, 150).'...';  ?></p>
				</div>					
				</div>

			</div>
			<div class="beschrijving u-gridCol8">
				<h3> <?php the_title() ?> </h3>
				<p> <?php the_field('merk_beschrijving'); ?> </p>
			</div>

			<?php endwhile; endif ?>
		</div>
	</div> <!-- grid 70 -->

	<div class="grid-30 ">
		<?php include_once('hardcoded-sidebar.php'); ?>
	</div> <!-- grid-30 -->
</div> <!-- container -->

	<?php get_footer(); ?>