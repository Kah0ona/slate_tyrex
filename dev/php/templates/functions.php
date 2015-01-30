<?php
  // Register the main navigation
  add_action( 'init', 'register_menu_sitemap' );

  function register_menu_sitemap(){
	register_nav_menus( array(
		'sitemap' => 'Sitemap'
    ));
  }

  add_filter('wpmem_logout_redirect','custom_logout_redirect');

  
  function custom_logout_redirect(){
    return 'http://www.google.nl';
  }


  add_action( 'init', 'register_menu_sub' );

  function register_menu_sub(){
	register_nav_menus( array(
		'sub-nav' => 'Submenu'
    ));
  }

  add_action( 'init', 'register_menu_submenu' );

  function register_menu_submenu(){
  register_nav_menus( array(
  'submenu' => 'Submenu'
      ));
  }




add_post_type_support('forum', array('thumbnail'));

function ks_forum_icons() {
if ( 'forum' == get_post_type() ) {
  global $post;
    if ( has_post_thumbnail($post->ID) )
      echo get_the_post_thumbnail($post->ID,'thumbnail',array('class' => 'alignleft forum-icon'));
 }
}
add_action('bbp_theme_before_forum_title','ks_forum_icons');



//member get member
add_filter('gform_pre_submission_2', 'generate_mgm_code');

function generate_mgm_code($form){
  $_POST['input_5'] = generateRandomString(8);
}


function generateRandomString($length = 10) {
    $letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$nums = '0123456789';

    $randomString = '';
    for ($i = 0; $i < 2; $i++) {
        $randomString .= $letters[rand(0, strlen($letters) - 1)];
	}
	$randomString .= '-';
    for ($i = 0; $i < 2; $i++) {
        $randomString .= $letters[rand(0, strlen($letters) - 1)];
    }
	$randomString .= '-';
    for ($i = 0; $i < 2; $i++) {
        $randomString .= $nums[rand(0, strlen($nums) - 1)];
    }
    return $randomString;
}


//parses a string in format
// <img>,<millisecs>,<top>,<left>;<img>...
// http://google.com/img.jpg,1,
// and returns a series of placeholder divs to which imgs will be loaded by the slider
function parseDelayedOverlay($str, $image_url, $counter){
	if(trim($str) == ''){ return ""; }
	$str = str_replace('<br />','',$str);
	$str = str_replace('<br/>','',$str);
	$str = str_replace('<br>','',$str);

	
	$pieces = explode(';', $str);
	$ret = "";


	for($i = 0; $i < count($pieces); $i++){
		$piece = $pieces[$i];
		$piece = trim($piece);
		$pieces2 = explode(',', $piece);

		if(count($pieces2) < 5){
			continue;
		}
		$url   = trim($pieces2[0]);
		$delay = trim($pieces2[1]);
		$top   = trim($pieces2[2]);
		$left  = trim($pieces2[3]);
		$height  = trim($pieces2[4]);

		$ret .= '<div class="arrived"
			  		  data-basesrc="'.$image_url.'"	
					  data-counter="'.$counter.'"
					  data-src="'.$url.'"
					  data-delay="'.$delay.'"
					  data-top="'.$top.'"
					  data-left="'.$left.'"
					  data-height="'.$height.'" ></div>';
	}

	return $ret;

    /* testdata
	return '
		<div class="arrived" data-src="http://lorempixel.com/200/200/transport/1"
			                     data-left="40%" data-top="50px"
								 data-delay="500" ></div>
								 
		<div class="arrived" data-src="http://lorempixel.com/200/200/transport/2"
			                     data-left="70px" data-top="50px"
								 data-delay="1000" ></div>
		<div class="arrived" data-src="http://lorempixel.com/200/200/transport/3"
			                     data-left="20px" data-top="50px"
								 data-delay="1500" ></div>
		';
	*/


}


?>
