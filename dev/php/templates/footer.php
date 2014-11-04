	<div class="container">
		<footer>
			<section class="footer-container">
				<?php if ( is_active_sidebar( 'footer-widgets' ) ) : ?>
				<div class="widgets">
					<?php dynamic_sidebar( 'footer-widgets' ); ?>
				</div>
				<?php endif; ?>

		        <div class="logo">
		            <a href="/"> <img src="/files/2014/05/logo-black.png" alt="logo tyrex banden"> </a>
		        </div>
			</section>
		</footer>
		<section class="sub-footer">		
				<!-- Copyright info -->
				<p>&copy; <?php bloginfo('name'); ?> <?php echo date("Y"); ?> - Website door <a href="http://www.lokaalgevonden.nl" target="_blank">LokaalGevonden</a> </p>
		</section>
	</div>

	
  <!-- Load jquery from google CDN if possible, with fallback to local version -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/standalone/jquery.min.js"><\/script>')</script>

	<!-- Footer javascript below here -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/production.min.js"></script>
  <script src="http://localhost:35729/livereload.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/google-maps.js"></script>
  <script src="http://maps.google.com/maps/api/js?sensor=false&libraries=geometry&v=3.7"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/reviewShow.js"></script>
  <!-- Check if javascript for threaded comments should be loaded -->
  <?php include 'includes/comment-check.php'; ?>

	<!-- Wordpress footer -->
	<?php wp_footer(); ?>
	</body>
</html>