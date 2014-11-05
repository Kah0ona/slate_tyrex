<?php
/*
Template Name: Home 
*/
?>


	<?php get_header(); ?>
	<div class="container">
		<section id="content"> 	
		  	<div class="u-gridRow usp">
		  		<div class="u-gridCol3">
		  			<h4 class="red-title-bar">Autobanden</h4>
		  			<p class="red-content">Altijd de juist banden voor uw voertuig!</br>
		  				Wat voor banden u ook nodig hebt, wij staan u graag te woord.</p>
		  			<div class="col-foot">
		  					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/content_1.png" />
		  			</div>
		  		</div>
		  		<div class="u-gridCol3">
		  			<h4 class="red-title-bar">Bandenservice</h4>
		  			<p class="red-content">Van uitlijnen tot bandenhotel!</br>
		  				Alle know-how paraat, Tyrex Banden is uw bandenspecialist.</p>
		  			<div class="col-foot">
		  					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/content_2.png" />
		  			</div>
		  		</div>
		  		<div class="u-gridCol3">
		  			<h4 class="red-title-bar">Velgen</h4>
		  			<p class="red-content">Zeer breed assortiment aan velgen!</br>
		  				De meeste exclusieve velgen koopt u bij Tyrex Banden.</p>
		  			<div class="col-foot">
		  					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/content_3.png" />
		  			</div>
		  		</div>
		  		<div class="u-gridCol3">
		  			<h4 class="red-title-bar">Carwash</h4>
		  			<p class="red-content">Unieke stoomreiniging voor uw bolide!</br>
		  				Onze methode is duurzaam, ecologisch, hygienisch en betaalbaar.</p>
		  			<div class="col-foot">
		  					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/content_4.png" />
		  			</div>
		  		</div>
		  	</div>
				<div class="grid-70">
					<div class="u-gridRow">
					<div class="title-wrap">
						<!---<h2 class="line-title">Meest verkochte banden</h2> -->
						<fieldset>
						     <legend align="center">Populaire Banden</legend>
						</fieldset>

					</div>
					
			
					<?php include_once('band.php'); ?>
					</div>
					<div class="u-gridRow">
					<div class="title-wrap">
						<fieldset>
						     <legend align="center">Populaire Velgen</legend>
						</fieldset>
					</div>
						<?php
					$args = array(
						'post_type' => 'velg', 
						'posts_per_page'=>4
					);
					$aanbiedingen = new WP_Query( $args );
					if( $aanbiedingen->have_posts() ) {
						while( $aanbiedingen->have_posts() ) {
							$aanbiedingen->the_post();
							?>


							<div class="band">
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
									<a href="<?php echo get_permalink(); ?>">Meer info</a>
								</div>
							</div>

							<?php
						}
					}
					else {
						echo '<p>Er zijn momenteel geen aanbiedingen</p>';
					}
				?>
			</div>



				</div>
				<div class="grid-30">
					<div class="sidebar">
						<fieldset>
						     <legend align="center">Sidebar</legend>
						</fieldset>
						<div class="box box-relative">
							<div class="title">Onze klanten aan het woord.</div></br>
							<div>
								<div class="view-snippet"><?php echo do_shortcode("[RICH_REVIEWS_SNIPPET]"); ?></div> 
								<img align="right" src="/files/2014/10/duim.png" />
							</div>

							Service en kwaliteit vormen onze basis.<br/><br/>

							<a href="/beoordelingen/">Bekijk beoordeling >></a>
						</div>
						<div class="box">
							<div class="title">Waarom Tyrex Banden?</div>
							<ul>
									<li>Topkwaliteit en snelle service</li>
									<li>Gecertificeerde bandenspecialist</li>
									<img src="/files/2014/09/erkend.png" />
									<li>Laagste prijsgarantie</li>
									<li>Comfortabele wachtruimte</li>
									<img src="/files/2014/09/wifi.png" align="center" />
							</ul>
						</div>
						<div class="box">
							<div class="title">Member Gets Member</div>
							Maak een vriend of vriendin klant bij Tyrex Banden en verdien tot 20,- per klant!
							<img src="/files/2014/09/community.png" align="right" />
</br></br>
							<a href="/member-get-a-member/">Lees meer >></a>
						</div>
						<div class="box">
							<div class="title">Hulp nodig?</div>
							Onze medewerkers staan u graag telefonisch te woord tijdens onze openingstijden:<br/><br/>
							
							<div class="u-gridRow">
								<div class="u-gridCol6">ma t/m vr<br/>
								zaterdag
								</div>
								<div class="u-gridCol6">08:00 - 17:30<br/>
									08:00 - 17:00
								</div>
							</div>
							<p class="telefoon">0165 - 32 00 02</p>
						</div>
					</div>
				</div>

			<div class="u-gridRow">
				<div class="grid-70">
					<div class="title-wrap">
						<fieldset>
						     <legend align="center">Exclusive Car Detailing</legend>
						</fieldset>
					</div>

					<div class="editor-content bigsize">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
								<div>
									<?php the_content(); ?>
								</div>
							</article>

						<?php endwhile; else: ?>

						<?php endif; ?>
					</div>
				</div>
				<div class="grid-30">
					<div class="title-wrap">
						<fieldset>
						     <legend style=align="center">Sidebar</legend>
						</fieldset>
					</div>
					<div class="sidebar red-bg">
						<img src="/files/2014/09/sidebar_example1.png" />
						<div class="bottom">
									
						</div>
					</div>
				</div>
			</div>

	</section>

	</div>
	<?php get_footer(); ?>
