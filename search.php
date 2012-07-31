<?php get_header(); ?>

<?php get_template_part('parts/subpage-top'); ?>

				<?php get_search_form(); ?>

				<h4>Showing results for: "<?php the_search_query(); ?>"</h4>

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<?php get_template_part('parts/post'); ?>

				<?php endwhile; endif; ?>

<?php get_template_part('parts/subpage-bottom'); ?>

<?php get_footer(); ?>