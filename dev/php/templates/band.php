<?php
	$args = array(
		'post_type' => 'band', 
		'posts_per_page'=>3
	);
	$aanbiedingen = new WP_Query( $args );
	include_once('1band.php');
	if( $aanbiedingen->have_posts() ) {
		while( $aanbiedingen->have_posts() ) {
			$aanbiedingen->the_post();
			?>
				<?php the_band();// zie 1band.php ?>
			<?php
		}
	}
	else {
		echo '<p>Er zijn momenteel geen aanbiedingen</p>';
	}
?>
