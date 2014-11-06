<?php 

	function the_velg($colsize = 4, $button, $showMenu = true) {

?>


<div class="band u-gridCol<?php echo $colsize; ?>">
	<div class="band-container velg-container">
		<div class="afbeelding-band">
			<?php 
			 
			$image = get_field('afbeelding_velg');
			 //print_r($image);
			if( !empty($image) ): ?>
			 
				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			 
			<?php endif; ?>	
		</div>	
		<div class="naam-band">
			<h3><?php the_field('naam_velg'); ?></h3>
		</div>

		<div class="bg-container velg">
			<div>
				<?php 
					$img = get_field('past_onder_afbeelding'); 
					$url = $img['url'];
					?>
				<img src="<?php echo $img['url']; ?>" />
			</div>
			<div class="nieuwe-prijs">
				<p> Uw prijs </p>
				<p class="prijs">€
					<?php the_field('nieuwe_prijs_velg'); ?>
				</p>
			</div>		
		</div>
	</div>
	<div class="info">
	<?php if($showMenu) { ?>

		<?php echo $button; ?>
	<?php } ?>
		
	</div>
</div>


<?php }

?>