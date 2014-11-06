<?php 

	function the_actie($colsize = 12, $button, $showMenu = true) {

?>
<div class="band u-gridCol<?php echo $colsize; ?>">
	<div class="band-container velg-container">
		<div class="afbeelding-band">xxxx
			<?php 
				$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 
					'single-post-thumbnail' ); 
		  		$image_url = $image[0];
			 //print_r($image);
			if( !empty($image) ): ?>
			 
				<img src="<?php echo $image_url; ?>" alt="<?php echo $image['alt']; ?>" />
			 
			<?php endif; ?>	
		</div>	
		<!--<div class="naam-band">
			<h3><?php the_title(); ?></h3>
		</div>

		<div class="bg-container velg">
			<div>
			<?php the_content(); ?>
			</div>
			<div class="nieuwe-prijs">
				<p> Uw prijs </p>
				<p class="prijs">€
					<?php the_field('prijs'); ?>
				</p>
			</div>		
		</div> -->
	</div>
	<!--<div class="info">
	<?php if($showMenu) { ?>

		<?php echo $button; ?>
	<?php } ?>
		
	</div>-->
</div>


<?php }

?>