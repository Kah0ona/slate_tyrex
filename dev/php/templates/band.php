<?php
	$args = array(
		'post_type' => 'band', 
		'posts_per_page'=>3,
		'meta_key' => 'is_home',
		'meta_value' => 'ja'
	);
	$aanbiedingen = new WP_Query( $args );
	include_once('1band.php');
	if( $aanbiedingen->have_posts() ) {
		while( $aanbiedingen->have_posts() ) {
			$aanbiedingen->the_post();
			$button = '<a href="'.get_permalink().'">Meer info</a>';
			?>
				<?php the_band(true, 4, $button);// zie 1band.php ?>
			<?php
		}
	}
	else {
		echo '<p>Er zijn momenteel geen aanbiedingen</p>';
	}
?>
