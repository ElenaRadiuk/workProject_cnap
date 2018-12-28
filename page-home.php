<?php
/**
 * Template Name: home
 */

get_header(); ?>

<?php if ( true === apply_filters( 'education_hub_filter_home_page_content', true ) ) : ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main new-home-page" role="main">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

            <?php endwhile; ?>

             <?php if( get_field('title_home_serv')): ?>

                <div class="title-serv-block">
                    <h2><span class="fa fa-file-text-o"></span><?php echo get_field('title_home_serv'); ?></h2>
                </div>

             <?php endif; ?>


            <div class="flip-wrapper">
                 <?php if( have_rows("block_serv_home_page") ): ?>
                     <?php while( have_rows('block_serv_home_page') ): the_row(); ?>
                <div class="flip-container" ontouchenter="this.classList.toggle('hover');">
                         <div class="home-service flipper">
                                 <div class="front">
                                     <a href="<?php echo get_sub_field('home_page_link'); ?>"  class="service_home">
                                         <?php echo get_sub_field('home_page_textlink'); ?>
                                     </a>
                                 </div>
                                <div class="back">
                                     <a href="<?php echo get_sub_field('home_page_link'); ?>"  class="service_home_back">
                                         <?php echo get_sub_field('back_card_info'); ?>
                                     </a>
                                 </div>
                         </div>
                </div>
                     <?php endwhile; ?>
                 <?php endif; ?>
            </div>

			<?php
			/**
			 * Hook - education_hub_action_posts_navigation.
			 *
			 * @hooked: education_hub_custom_posts_navigation - 10
			 */
			do_action( 'education_hub_action_posts_navigation' ); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>


            <?php
            /**
             * Hook - education_hub_action_before_content.
             *
             * @hooked education_hub_add_breadcrumb - 7
             * @hooked education_hub_content_start - 10
             */
            do_action( 'education_hub_action_before_content2' );
            ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php endif; // End if show home content. ?>

<?php get_footer(); ?>
