
	<?php get_header(); 

		$arr = array(
			'Alfa Romeo' => 2,
			'Aston Martin' => 3,
			'Audi' => 4,
			'Bentley' => 5,
			'BMW' => 6,
			'Cadillac' => 7,
			'Chevrolet' => 8,
			'Citroën' => 9,
			'Dacia' => 10,
			'Daewoo' => 11,
			'Daihatsu' => 12,
			'Dodge' => 13,
			'Fiat' => 14,
			'Ford' => 15,
			'Honda' => 16,
			'Hyundai' => 17,
			'Infinity' => 18,
			'Jaguar' => 19,
			'Jeep' => 20,
			'Kia' => 21,
			'Lada' => 22,
			'Lancia' => 23,
			'Land Rover' => 24,
			'Lexus' => 25,
			'Mazda'  => 26,
			'Mercedes' => 27,
			'Mini' => 28,
			'Mitsubishi' => 29,
			'Nissan' => 30,
			'Opel' => 31,
			'Peugeot' => 32,
			'Porsche' => 33,
			'Proton' =>  34,
			'Renault' => 35,
			'Rover'  => 36,
			'Saab' => 37,
			'Seat' => 38,
			'Skoda' => 39,
			'Smart'  =>  40,
			'Ssangyong' => 41,
			'Subaru' => 42,
			'Suzuki' => 43,
			'Tesla' => 44,
			'Toyota' => 45,
			'Volkswagen' => 46,
			'Volvo'  => 47
			);
	?>
	<div class="container">	
		<div class="u-gridRow">
				<div class="u-gridCol6">
					<section id="content">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<div class="merk" id="<?php the_ID(); ?>">
							<div class="automerk-afbeelding">
								<?php 
								 
								$image = get_field('automerk_afbeelding');
								 
								if( !empty($image) ): ?>
								 
									<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
								 
								<?php endif; ?>	
							</div>			
						</div>
								<div class="velg-beschrijving">
									<h3> <?php the_title() ?> </h3>

									<p> <?php the_field('automerk_beschrijving'); ?> </p>
								</div>
							</div>

							<div class="u-gridCol6 velg-beschrijvingalbum">
								<div class="velg-albumtitle">Voorbeeld van velgen</div>
								<?php 
									$title = get_the_title();
									$galleryId = $arr[$title];

									echo do_shortcode('[nggallery id='.$galleryId.']'); ?>
							</div>


							<?php endwhile; else: ?>

								<p><?php _('Sorry, no posts matched your criteria.'); ?></p>

							<?php endif; ?>
						
						
						</div>
					
					</section>
	<?php get_footer(); ?>
