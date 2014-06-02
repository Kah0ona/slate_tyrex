<?php
  // Register the main navigation
  add_action( 'init', 'register_menu_sitemap' );

  function register_menu_sitemap(){
	register_nav_menus( array(
		'sitemap' => 'Sitemap'
    ));
  }




  add_action( 'init', 'register_menu_sub' );

  function register_menu_sub(){
	register_nav_menus( array(
		'sub-nav' => 'Submenu'
    ));
  }
?>
