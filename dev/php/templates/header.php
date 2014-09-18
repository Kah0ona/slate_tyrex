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

    <!--Start of Zopim Live Chat Script-->
    <script type="text/javascript">
        window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
        d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
        _.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
        $.src='//v2.zopim.com/?2I8ay3vxgR5f7cm5pBFdxD8qCI5woNMd';z.t=+new Date;$.
        type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
    </script>
    <!--End of Zopim Live Chat Script-->
    
    <!-- Wordpress head function -->
    <?php wp_head(); ?>

  </head>
  <body <?php body_class(); ?> >
    <header id="logo-header">
        <div class="logo">
                <img width="200" src="/files/2014/09/logoheader.png" />
        </div>
        <div class="sub-menu">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Werken bij Tyrex banden</a></li>
                <li><a href="#">Klantenservice</a></li>
                <li><a href="#">Mijn Tyrex banden</a></li>
                <li><a href="#">Over ons</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </header>  
    <header id="header">
        <!--<section id="phonenumber-container">
              <div id="phonenumber-social"> 
                <div class="phonenumber">
                    <p><span><svg class="icon icon-telefoon" viewBox="0 0 32 32"><use xlink:href="#icon-telefoon"></use></svg></span> 0165 - 32 00 02</p>
                </div>
                <div class="social-media">
                    <div class="fb"><a href="https://www.facebook.com/pages/Tyrex-Banden/124648897727405?fref=ts" target="_blank"><svg class="icon icon-facebook" viewBox="0 0 32 32"><use xlink:href="#icon-facebook"></use></svg></a></div>
                    <div class="twitter"><a href="https://twitter.com/Tyrexbanden" target="_blank"><svg class="icon icon-twitter" viewBox="0 0 32 32"><use xlink:href="#icon-twitter"></use></svg></a></div>

                </div>
            </div>
        </section>-->


        <!--<section id="logo-menu-container">
            <div id="logo-menu">
                <div class="logo">
                    <a class="logo-all" href="/"> <img src="/files/2014/05/logo.png" alt="logo tyrex banden" /> </a>
                    <a class="logo-carwash" href="/"> <img src="/files/2014/07/tyrex-carwash.png" alt="logo tyrex banden" /> </a>
                </div>
               <?php include 'includes/navigation.php'; ?>
            </div>
        </section>-->
		<section id="coverflow">
			<div id="myDiv"></div>

		<!-- coverflow data -->
		<ul id="coverflowData" style="display: none;">
			
			<!-- category  -->
			<ul data-cat=" ">

				<?php //for($i = 0; $i < 6; $i++){ ?>
				<ul>
					<li data-type="link" data-url="#"></li>
					<li data-thumbnail-path="/files/2014/09/coverflow_3.png"></li>
					<li data-thumbnail-text="">
						<p class="largeLabel">CUSTOM PRESS THUMBNAIL ACTION</p>
						<p class="smallLabel">When a thumbnail is pressed the coverflow can open a browser window or the lightbox.</p>
					</li>
					<li data-info="">
						<p class="mediaDescriptionHeader">CUSTOM PRESS THUMBNAIL ACTION.</p>
						<p class="mediaDescriptionText">When a thumbnail is pressed the coverflow can open a browser window or the lightbox.</p>
					</li>
				</ul>
                <ul>
                    <li data-type="link" data-url="#"></li>
                    <li data-thumbnail-path="/files/2014/09/coverflow_2.png"></li>
                    <li data-thumbnail-text="">
                        <p class="largeLabel">CUSTOM PRESS THUMBNAIL ACTION</p>
                        <p class="smallLabel">When a thumbnail is pressed the coverflow can open a browser window or the lightbox.</p>
                    </li>
                    <li data-info="">
                        <p class="mediaDescriptionHeader">CUSTOM PRESS THUMBNAIL ACTION.</p>
                        <p class="mediaDescriptionText">When a thumbnail is pressed the coverflow can open a browser window or the lightbox.</p>
                    </li>
                </ul>   
                <ul>
                    <li data-type="link" data-url="#"></li>
                    <li data-thumbnail-path="/files/2014/09/coverflow_1.png"></li>
                    <li data-thumbnail-text="">
                        <p class="largeLabel">CUSTOM PRESS THUMBNAIL ACTION</p>
                        <p class="smallLabel">When a thumbnail is pressed the coverflow can open a browser window or the lightbox.</p>
                    </li>
                    <li data-info="">
                        <p class="mediaDescriptionHeader">CUSTOM PRESS THUMBNAIL ACTION.</p>
                        <p class="mediaDescriptionText">When a thumbnail is pressed the coverflow can open a browser window or the lightbox.</p>
                    </li>
                </ul>                  
				<?php //} ?>
			
			</ul>
			<!-- end  -->
			
		</ul>
	
		</section>
        
        <section id="slider-container">
            <div id="slider-stripe">

            </div>


            <nav id="sub-menu"> 
                <?php wp_nav_menu(array(
                    'container'=> 'nav',
                    'menu' => 'submenu',
                    'container_class' =>'submenu',
                    'menu_class' => '',
                    'theme_location' => 'submenu',
                    'items_wrap' => '<ul class="Navigation-submenu">%3$s</ul>',
                    'walker' => new Slate_Walker_Nav_Menu()
                )); ?>

            </nav>
        </section>

    </header>

    <div id="social-media">
        <ul>
            <a href="https://www.facebook.com/pages/Tyrex-Banden/124648897727405?fref=ts" target="_blank"> <li> <svg class="icon icon-facebook" viewBox="0 0 32 32"><use xlink:href="#icon-facebook"></use></svg></li></a>
            <a href="https://twitter.com/Tyrexbanden" target="_blank"><li><svg class="icon icon-twitter" viewBox="0 0 32 32"><use xlink:href="#icon-twitter"></use></svg></li></a>
            <a href="https://twitter.com/Tyrexbanden" target="_blank"><li><svg class="icon icon-mail" viewBox="0 0 32 32"><use xlink:href="#icon-mail"></use></svg></li></a>
        </ul>
    </div>
