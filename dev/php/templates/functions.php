<?php
  // Register the main navigation
  add_action( 'init', 'register_menu_sitemap' );

  function register_menu_sitemap(){
  register_nav_menus( array(
  'sitemap' => 'Sitemap'
      ));
  }

  add_action( 'init', 'register_menu_submenu' );

  function register_menu_submenu(){
  register_nav_menus( array(
  'submenu' => 'Submenu'
      ));
  }
?>