
	<?php get_header(); ?>
	<div class="container">
		<section id="content"> 	
			<div class="editor-content">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
						<h2><?php the_title(); ?></h2>
						<div>
							<?php the_content(); ?>
							<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
						</div>
					</article>
				<?php endwhile; endif; ?>
			</div>
		</section>

	<?php get_footer(); ?>