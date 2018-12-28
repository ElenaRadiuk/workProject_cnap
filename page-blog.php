<?php
/**
 * Template Name: blog
 *
 */
get_header(); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php $query = new WP_Query('cat=10');
                if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

                <?php get_template_part( 'template-parts/content' ); ?>


                <?php endwhile; else: ?>
                <?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
	/**
	 * Hook - education_hub_action_sidebar.
	 *
	 * @hooked: education_hub_add_sidebar - 10
	 */
	do_action( 'education_hub_action_sidebar' );
?>

<?php get_footer(); ?>
