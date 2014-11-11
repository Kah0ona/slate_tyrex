<?php 
function the_carwash(){ ?>



<div class="boxcarwash-wrap u-gridCol4">
	<div class="boxcarwash">
		<?php the_field('programma_beschrijving'); ?>
		<div class="carwash-price">
			<?php the_field('programma_arbeidsduur'); ?> min
			<br/>
			€ <?php the_field('programma_prijs'); ?>
			
		</div>
		<div class="boxtitle">
			<?php the_title();?>
		</div>
		<?php 
			$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 
				'single-post-thumbnail' ); 
				$image_url = $image[0];
		 //print_r($image);
			if( !empty($image) ): ?>
				<img class="carwash-img" src="<?php echo $image_url; ?>" alt="<?php echo $image['alt']; ?>" style="display:none;"/>
		<?php endif; ?>	


	</div>

</div>


<?php } ?>
