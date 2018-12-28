<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Education_Hub
 */

	/**
	 * Hook - education_hub_action_after_content.
	 *
	 * @hooked education_hub_content_end - 10
	 */
	do_action( 'education_hub_action_after_content' );
?>

	<?php
	/**
	 * Hook - education_hub_action_before_footer.
	 *
	 * @hooked education_hub_footer_start - 10
	 */
	do_action( 'education_hub_action_before_footer' );
	?>
    <?php
	  /**
	   * Hook - education_hub_action_footer.
	   *
	   * @hooked education_hub_footer_copyright - 10
	   */
	  do_action( 'education_hub_action_footer' );
	?>
	<?php
	/**
	 * Hook - education_hub_action_after_footer.
	 *
	 * @hooked education_hub_footer_end - 10
	 */
	do_action( 'education_hub_action_after_footer' );
	?>

<?php
	/**
	 * Hook - education_hub_action_after.
	 *
	 * @hooked education_hub_page_end - 10
	 * @hooked education_hub_footer_goto_top - 20
	 */
	do_action( 'education_hub_action_after' );
?>
<div class="footer_link">
    <div class="container">
        <?php
        //290
        $query = new WP_Query('p=354');
        if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>


        <?php if( have_rows("block_link_gov") ): ?>
        <?php while( have_rows('block_link_gov') ): the_row(); ?>

        <?php

        $image = get_sub_field('img_link_gov');
        $link = get_sub_field('link_gov');
        $title = get_sub_field('text_hover_link_gov');
        if( !empty($image) ):

            // vars
            $url = $image['url'];
        ?>
            <a href="<?php echo $link; ?>" title="<?php echo $title; ?>" target="_blank">

                <img src="<?php echo $url; ?>" alt="image" />

            </a>
        <?php endif; ?>

        <?php endwhile; ?>
        <?php endif; ?>


        <?php endwhile; else: ?>
        <?php endif; ?>
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>
