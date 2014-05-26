<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
  <head prefix="og: http://ogp.me/ns/website#"><!-- Prefix is used to declare facebook opengraph namespace for websites -->
    <!-- Charset -->
    <meta charset="<?php bloginfo( 'charset' ); ?>" />

    <!-- IE: render in highest mode available -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Title -->
    <title><?php wp_title( '|', true, 'right' ); ?><?php echo get_bloginfo( 'name' ); ?></title>

    <!-- Mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Automate reverse linking (pingbacks) -->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <!-- Favicon, generate the favicons with: http://realfavicongenerator.net -->
    <!-- Apple touch icons should be accessible from the root of the site, and do not have to be linked here -->
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico">

    <!-- Include only one concatenated stylesheet here, minified -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/production.min.css">

    <!-- Head scripts, avoid including scripts here -->
    <!-- Don't forget to compile and minify the used modernizr features, or to remove it when unused -->
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/standalone/modernizr.js"></script>

    <!-- Wordpress head function -->
    <?php wp_head(); ?>

  </head>
  <body <?php body_class(); ?> >
    
    <header id="header">
        <section id="phonenumber-container">
            <div id="phonenumber"> 
                <div class="phonenumber">
                    <p><span><svg class="icon icon-banden" viewBox="0 0 31 32"><use xlink:href="#icon-banden"></use></svg></span> 0165 - 32 00 02</p>
                </div>
            </div>
        </section>

        <section id="logo-menu-container">
            <div id="logo-menu">
                <div class="logo">
                    <a href="/"> <img src="/files/2014/05/logo.png" alt="logo tyrex banden"> </a>
                </div>
                <?php include 'includes/navigation.php'; ?>
            </div>
        </section>
        
        <section id="slider-container">
            <div id="slider-stripe">

            </div>

            <div id="slider">
                <?php if ( function_exists( "easingsliderlite" ) ) { easingsliderlite(); } ?>
            </div>

        </section>

        <nav id="sub-menu"> 
            <?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'container_class' => 'menu-header' ) ); ?>
        </nav>

    </header>