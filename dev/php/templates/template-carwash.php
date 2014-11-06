<?php
/*
Template Name: Carwash
*/
?>

<?php get_header(); ?> 
<div class="container">
	
		<section id="content"> 	

				<?php include_once('top-usps.php'); ?>
				<div class="grid-70">
					<div class="u-gridRow service">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<h4 class="auto_content"><?php the_title(); ?></h4>
							<?php the_content(); ?>
						<?php endwhile; else: ?>
						<?php endif; ?>
					</div>

				</div>
				<div class="grid-30">
					<div class="sidebar">
						<?php
						include_once('widget-reviews.php'); 
						include_once('widget-stoombeurt.php'); 
						include_once('widget-openingstijden.php'); 
						?>
					</div>
				</div>

				<div class="u-gridRow servicelist">
					<div class="banner">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/carwashbanner.png" />
					</div>

				</div>

				<div class="u-gridRow">
					<div class="u-gridCol4">
						<div class="boxcarwash premiumcarcare">
							<ul>
								<li>Showroomstaat</li>
								All Inclusive
							</ul>
							<div class="carwash-price">
								240 min<br/>
								€189.99
							</div>
							<div class="boxtitle">Premium Car Care</div>
						</div>
					</div>
					<div class="u-gridCol4">
						<div class="boxcarwash topwashplus">
							<ul>
								<li>Wassen (stoom)</li>
								<li>Velgen intensief</li>
								<li>Insecten intensief</li>
								<li>Drogen</li>
								<li>Bodemreiniging</li>
								<li>Glas binnen + buiten</li>
								<li>Interieur stofzuigen</li>
								<li>Geurtje naar keuze</li>
								<li>Wax</li>
							</ul>
							<div class="carwash-price">
								240 min<br/>
								€189.99
							</div>
							<div class="boxtitle">Top Wash +</div>
						</div>
					</div>
					<div class="u-gridCol4">
						<div class="boxcarwash topwash">
							<ul>
								<li>Wassen (stoom)</li>
								<li>Velgen intensief</li>
								<li>Insecten intensief</li>
								<li>Drogen</li>
								<li>Bodemreiniging</li>
								<li>Glas binnen + buiten</li>
								<li>Interieur stofzuigen</li>
								<li>Geurtje naar keuze</li>
							</ul>
							<div class="carwash-price">
								45 min<br/>
								€189.99
							</div>
							<div class="boxtitle">Top Wash</div>
						</div>
					</div>
				</div>
				<div class="u-gridRow">
					<div class="u-gridCol4">
						<div class="boxcarwash superwash">
							<ul>
								<li>Wassen (stoom)</li>
								<li>Velgen intensief</li>
								<li>Insecten intensief</li>
								<li>Drogen</li>
								<li>Bodemreiniging</li>
								<li>Glas binnen + buiten</li>
								<li>Interieur stofzuigen</li>
							</ul>
							<div class="carwash-price">
								60 min<br/>
								€24.99
							</div>
							<div class="boxtitle">Super Wash</div>
						</div>
					</div>
					<div class="u-gridCol4">
						<div class="boxcarwash basicwash">
							<ul>
								<li>Wassen (stoom)</li>
								<li>Velgen</li>
								<li>Insecten intensief</li>
								<li>Drogen</li>
								<li>Bodemreiniging</li>
								<li>Glas buitenkant</li>
							</ul>
							<div class="carwash-price">
								30 min<br/>
								€14.99
							</div>
							<div class="boxtitle">Basic Wash</div>
						</div>
					</div>
					<div class="u-gridCol4">
						<div class="boxcarwash freewash">
							<ul>
								<li>Wassen (stoom)</li>
								<li>Velgen</li>
								<li>Insecten intensief</li>
								<li>Drogen</li>
								<li>Bodemreiniging</li>
								<li>Glas buitenkant</li>
								<li>Interieur stofzuigen</li>
							</ul>
							<div class="carwash-price">
								45 min<br/>
								Gratis t.w.v. 19.99
							</div>
							<div class="boxtitle">Free wash</div>
						</div>
					</div>
				</div>

		</section>
		</div>

	<?php get_footer(); ?>
