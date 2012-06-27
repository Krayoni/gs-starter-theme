<?php get_header(); ?>

<?php get_template_part('content', 'page-top'); ?>

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<article>
						<h1><?php the_title(); ?></h1>
						
						<?php the_content(); ?>

					</article>

				<?php endwhile; endif; ?>

<?php get_template_part('content', 'page-bottom'); ?>

<?php get_footer(); ?>