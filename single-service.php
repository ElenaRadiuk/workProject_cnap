<?php
/**
 * Template Post Type: service
 */

get_header(); ?>

	<div id="primary" class="content-area single-service">
		<main id="main" class="site-main" role="main">

            <div class="description-page">
                <?php while ( have_posts() ) : the_post(); ?>
                    <h2><?php the_title(); ?></h2>
                <?php endwhile; // End of the loop. ?>
            </div>


            <div class="wrapper desktop">
                <div class="left-col">
                    <?php echo get_field("place_serv"); ?>
                </div>
                <div class="right-col">
                    <div class="tabs">
                    <ul class="tabs__caption">
                        <li class="active service-doc">Документи </li>
                        <li class="service-order">Порядок отримання</li>
                        <li class="service-result">Результат послуги</li>
                    </ul>


                        <div class="tabs__content active">
                            <ul>

                                <?php if( have_rows("group_doc") ): ?>
                                    <?php while( have_rows('group_doc') ): the_row(); ?>

                                        <ul class="accordion">

                                            <?php if( have_rows('for_downl_file') ): ?>
                                            <?php while( have_rows('for_downl_file') ): the_row(); ?>
                                                <li>
                                                    <div class="toggle"><?php echo get_sub_field('item_file'); ?></div>
                                                    <ul class="inner">
                                                         <?php while( have_rows('list_file') ): the_row(); ?>
                                                        <li>
                                                            <?php $file = get_sub_field('file_download'); ?>
                                                            <?php  if( $file ): ?>
                                                            <a href="<?php echo $file['url']; ?>"  target="_blank">
                                                                <?php echo get_sub_field('text_for_file'); ?>
                                                            </a>
                                                            <?php endif; ?>
                                                        </li>
                                                         <?php endwhile; ?>
                                                    </ul>
                                                </li>
                                            <?php endwhile; ?>
                                            <?php endif; ?>

                                            <?php if( have_rows('for_link_resources') ): ?>
                                            <?php   while( have_rows('for_link_resources') ): the_row(); ?>
                                                <li>
                                                    <div class="toggle"><?php echo get_sub_field('item_link_res'); ?></div>
                                                    <ul class="inner">
                                                        <?php while( have_rows('info_link') ): the_row(); ?>
                                                        <li>
                                                            <a href="<?php echo get_sub_field('link_resource'); ?>"  target="_blank">
                                                                <?php echo get_sub_field('text_link'); ?>
                                                            </a>
                                                        </li>
                                                        <?php endwhile; ?>
                                                    </ul>
                                                </li>
                                            <?php endwhile; ?>
                                            <?php endif; ?>

                                            <?php if( have_rows('for_inform') ): ?>
                                            <?php while( have_rows('for_inform') ): the_row(); ?>
                                                <li>
                                                    <div class="toggle"><?php echo get_sub_field('item_info'); ?>
                                                    </div>
                                                    <ul class="inner style-infoblock">
                                                    <?php while( have_rows('textitem_info') ): the_row(); ?>
                                                        <li>
                                                        <?php echo get_sub_field('text_info'); ?>
                                                        </li>
                                                    <?php endwhile; ?>
                                                    </ul>
                                                </li>
                                            <?php endwhile; ?>
                                            <?php endif; ?>

                                    </ul>

                                    <?php endwhile; ?>
                                <?php endif; ?>

                            </ul>
                        </div>

                        <div class="tabs__content">
                                <?php if( get_field('order_serv')) { ?>
                                <div>
                                    <?php echo get_field('order_serv'); ?>
                                </div>
                                <?php } ?>
                        </div>

                        <div class="tabs__content">
                            <?php if( get_field('order_serv')) { ?>
                                <div>
                                    <?php echo get_field('result_serv'); ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>


            <div style="clear: both"></div>

            <div class="wrapper-mobile">
                <div class="left-col-mob">
                    <?php echo get_field("place_serv"); ?>
                </div>
                <div class="right-col-mob">
                    <div class="tabs-mobile">

                        <section class="accordion_item">
                            <div class="tabs__caption">
                                <div class="service-doc">Документи </div>
                            </div>
                            <div class="tabs__content">
                                <ul>
                                    <?php if( have_rows("group_doc") ): ?>
                                        <?php while( have_rows('group_doc') ): the_row(); ?>

                                            <ul class="accordion">

                                                <?php if( have_rows('for_downl_file') ): ?>
                                                    <?php while( have_rows('for_downl_file') ): the_row(); ?>
                                                        <li>
                                                            <div class="toggle"><?php echo get_sub_field('item_file'); ?></div>
                                                            <ul class="inner">
                                                                <?php while( have_rows('list_file') ): the_row(); ?>
                                                                    <li>
                                                                        <?php $file = get_sub_field('file_download'); ?>
                                                                        <?php  if( $file ): ?>
                                                                            <a href="<?php echo $file['url']; ?>"  target="_blank">
                                                                                <?php echo get_sub_field('text_for_file'); ?>
                                                                            </a>
                                                                        <?php endif; ?>
                                                                    </li>
                                                                <?php endwhile; ?>
                                                            </ul>
                                                        </li>
                                                    <?php endwhile; ?>
                                                <?php endif; ?>

                                                <?php if( have_rows('for_link_resources') ): ?>
                                                    <?php   while( have_rows('for_link_resources') ): the_row(); ?>
                                                        <li>
                                                            <div class="toggle"><?php echo get_sub_field('item_link_res'); ?></div>
                                                            <ul class="inner">
                                                                <?php while( have_rows('info_link') ): the_row(); ?>
                                                                    <li>
                                                                        <a href="<?php echo get_sub_field('link_resource'); ?>"  target="_blank">
                                                                            <?php echo get_sub_field('text_link'); ?>
                                                                        </a>
                                                                    </li>
                                                                <?php endwhile; ?>
                                                            </ul>
                                                        </li>
                                                    <?php endwhile; ?>
                                                <?php endif; ?>

                                                <?php if( have_rows('for_inform') ): ?>
                                                    <?php while( have_rows('for_inform') ): the_row(); ?>
                                                        <li>
                                                            <div class="toggle"><?php echo get_sub_field('item_info'); ?>
                                                            </div>
                                                            <ul class="inner style-infoblock">
                                                                <?php while( have_rows('textitem_info') ): the_row(); ?>
                                                                    <li>
                                                                        <?php echo get_sub_field('text_info'); ?>
                                                                    </li>
                                                                <?php endwhile; ?>
                                                            </ul>
                                                        </li>
                                                    <?php endwhile; ?>
                                                <?php endif; ?>

                                            </ul>

                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </section>

                        <section class="accordion_item">
                            <div class="tabs__caption">
                                <div class="service-doc">Порядок отримання</div>
                            </div>
                            <div class="tabs__content">
                                <?php if( get_field('order_serv')) { ?>
                                    <div>
                                        <?php echo get_field('order_serv'); ?>
                                    </div>
                                <?php } ?>
                            </div>
                        </section>


                        <section class="accordion_item">
                            <div class="tabs__caption">
                                <div class="service-doc">Результат послуги</div>
                            </div>
                            <div class="tabs__content">
                                <?php if( get_field('order_serv')) { ?>
                                    <div>
                                        <?php echo get_field('result_serv'); ?>
                                    </div>
                                <?php } ?>
                            </div>
                        </section>

                    </div>
                </div>
            </div>


		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
