<?php get_header(); ?>

<section id="content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

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

	<div class="beschrijving">
		<h3> <?php the_title() ?> </h3>
		<p> <?php the_field('merk_beschrijving'); ?> </p>
	</div>

	<?php endwhile; else: ?>

		<p><?php _('Sorry, no posts matched your criteria.'); ?></p>

	<?php endif; ?>
</section>

<?php get_footer(); ?>
