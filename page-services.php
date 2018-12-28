<?php
/**
 * Template Name: services
 *
 */

get_header(); ?>



	<div id="primary" class="content-area111">
		<main id="main" class="site-main" role="main">

            <div class="description-page">
                <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>

                    <div> <?php the_content(); ?> </div>

                <?php endwhile; ?>
                <?php endif; ?>
            </div>


            <div class="tabs">
            <div class="left-col">
                <ul class="tabs__caption">

                    <?php if( get_field("sector_name_a")) {; ?>
                    <li class="active sector" data-name="sA">
                        <a href="#sA">
                            <?php echo get_field("sector_name_a"); ?>
                        </a>
                    </li>
                    <?php } else { ?>
                    <?php } ?>

                    <?php if( get_field("sector_name_b")) {; ?>
                    <li class="sector sB" data-name="sB">
                        <a href="#sB">
                            <?php echo get_field("sector_name_b"); ?>
                        </a>
                    </li>
                    <?php } else { ?>
                    <?php } ?>

                    <?php if( get_field("sector_name_c")) {; ?>
                    <li class="sector sC" data-name="sC">
                        <a href="#sC">
                            <?php echo get_field("sector_name_c"); ?>
                        </a>
                    </li>
                    <?php } else { ?>
                    <?php } ?>

                    <?php if( get_field("sector_name_d")) {; ?>
                    <li class="sector sD" data-name="sD">
                        <a href="#sD">
                            <?php echo get_field("sector_name_d"); ?>
                        </a>
                    </li>
                    <?php } else { ?>
                    <?php } ?>

                    <?php if( get_field("sector_name_e")) {; ?>
                    <li class="sector sE" data-name="sE">
                        <a href="#sE">
                            <?php echo get_field("sector_name_e"); ?>
                        </a>
                    </li>
                    <?php } else { ?>
                    <?php } ?>

                    <?php if( get_field("sector_name_other")) {; ?>
                    <li class="sector other" data-name="sOther">
                        <a href="#sOther">
                            <?php echo get_field("sector_name_other"); ?>
                        </a>
                    </li>
                    <?php } else { ?>
                    <?php } ?>

                    <?php if( get_field("sector_name_add")) {; ?>
                    <li class="sector additionally" data-name="additionally">
                        <a href="#additionally">
                            <?php echo get_field("sector_name_add"); ?>
                        </a>
                    </li>
                    <?php } else { ?>
                    <?php } ?>

                    <?php if( get_field("sector_name_add2")) {; ?>
                    <li class="sector additionally2" data-name="additionally2">
                        <a href="#additionally2">
                            <?php echo get_field("sector_name_add2"); ?>
                        </a>
                    </li>
                    <?php } else { ?>
                    <?php } ?>
                </ul>
            </div>


            <div class="right-col">
                <div class="tabs__content active" id="sA">
                    <?php if ( get_field('sector_a_more_info') ) {?>
                        <div class="more-info">
                            <?php echo get_field("sector_a_more_info");  ?>
                        </div>
                    <?php } ?>
                    <?php if( have_rows("list_services_a_accord") ): ?>
                    <ul class="accordion">
                            <?php while( have_rows('list_services_a_accord') ): the_row(); ?>
                                <li>
                                    <?php if ( get_sub_field('sector_name_a_accord') ) {?>
                                    <div class="toggle"><?php echo get_sub_field('sector_name_a_accord'); ?></div>
                                    <?php } ?>
                                    <ul class="inner">
                                        <?php while( have_rows('service_row_a_accord') ): the_row(); ?>
                                            <li>
                                                <a href="<?php echo get_sub_field('link_steps_a_accord'); ?>"  class="service_type">
                                                    <?php echo get_sub_field('service_type_a_accord'); ?>
                                                </a>
                                            </li>
                                        <?php endwhile; ?>
                                    </ul>
                                </li>
                            <?php endwhile; ?>
                    </ul>
                    <?php endif; ?>

                    <ul>
                         <?php if( have_rows("list_services_a") ): ?>
                         <?php while( have_rows('list_services_a') ): the_row(); ?>
                        <li>
                            <a href="<?php echo get_sub_field('link_steps_a'); ?>"  class="service_type">

                                <?php echo get_sub_field('service_type_a'); ?>

                            </a>
                        </li>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                </div>

                <div class="tabs__content" id="sB">
                    <?php if ( get_field('sector_b_more_info') ) {?>
                        <div class="more-info">
                            <?php echo get_field("sector_b_more_info");  ?>
                        </div>
                    <?php } ?>
                    <?php if( have_rows("list_services_b_accord") ): ?>
                    <ul class="accordion">
                            <?php while( have_rows('list_services_b_accord') ): the_row(); ?>
                                <li>
                                    <?php if ( get_sub_field('sector_name_b_accord') ) {?>
                                        <div class="toggle"><?php echo get_sub_field('sector_name_b_accord'); ?></div>
                                    <?php } ?>
                                    <ul class="inner">
                                        <?php while( have_rows('service_row_b_accord') ): the_row(); ?>
                                            <li>
                                                <a href="<?php echo get_sub_field('link_steps_b_accord'); ?>"  class="service_type">
                                                    <?php echo get_sub_field('service_type_b_accord'); ?>
                                                </a>
                                            </li>
                                        <?php endwhile; ?>
                                    </ul>
                                </li>
                            <?php endwhile; ?>
                    </ul>
                    <?php endif; ?>

                    <ul>
                        <?php if( have_rows("list_services_b") ): ?>
                            <?php while( have_rows('list_services_b') ): the_row(); ?>
                                <li>
                                    <a href="<?php echo get_sub_field('link_steps_b'); ?>"  class="service_type">

                                        <?php echo get_sub_field('service_type_b'); ?>

                                    </a>
                                </li>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                </div>

                <div class="tabs__content" id="sC">
                    <?php if ( get_field('sector_c_more_info') ) {?>
                        <div class="more-info">
                            <?php echo get_field("sector_c_more_info");  ?>
                        </div>
                    <?php } ?>
                    <?php if( have_rows('list_services_c') ): ?>
                    <ul class="accordion">
                            <?php   while( have_rows('list_services_c') ): the_row(); ?>
                        <li>
                            <?php if ( get_sub_field('service_type_c') ) {?>
                            <div class="toggle"><?php echo get_sub_field('service_type_c'); ?></div>
                            <?php } ?>
                            <ul class="inner">
                                <?php while( have_rows('service_row_c') ): the_row(); ?>
                                    <li>
                                        <a href="<?php echo get_sub_field('link_steps_c'); ?>"  class="service_type">
                                            <?php echo get_sub_field('subservice_type_c'); ?>
                                        </a>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        </li>
                            <?php endwhile; ?>
                    </ul>
                    <?php endif; ?>

                    <ul>
                        <?php if( have_rows("list_services_c_2") ): ?>
                            <?php while( have_rows('list_services_c_2') ): the_row(); ?>
                                <li>
                                    <a href="<?php echo get_sub_field('link_steps_c2'); ?>"  class="service_type">

                                        <?php echo get_sub_field('service_type_c2'); ?>

                                    </a>
                                </li>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                </div>

                <div class="tabs__content" id="sD">
                    <?php if ( get_field('sector_d_more_info') ) {?>
                        <div class="more-info">
                            <?php echo get_field("sector_d_more_info");  ?>
                        </div>
                    <?php } ?>
                    <?php if( have_rows("list_services_d_accord") ): ?>
                    <ul class="accordion">

                            <?php while( have_rows('list_services_d_accord') ): the_row(); ?>
                                <li>
                                    <?php if ( get_sub_field('sector_name_d_accord') ) {?>
                                        <div class="toggle"><?php echo get_sub_field('sector_name_d_accord'); ?></div>
                                    <?php } ?>
                                    <ul class="inner">
                                        <?php while( have_rows('service_row_d_accord') ): the_row(); ?>
                                            <li>
                                                <a href="<?php echo get_sub_field('link_steps_d_accord'); ?>"  class="service_type">
                                                    <?php echo get_sub_field('service_type_d_accord'); ?>
                                                </a>
                                            </li>
                                        <?php endwhile; ?>
                                    </ul>
                                </li>
                            <?php endwhile; ?>
                    </ul>
                    <?php endif; ?>

                    <ul>
                        <?php if( have_rows("list_services_d") ): ?>
                            <?php while( have_rows('list_services_d') ): the_row(); ?>
                                <li>
                                    <a href="<?php echo get_sub_field('link_steps_d'); ?>"  class="service_type">

                                        <?php echo get_sub_field('service_type_d'); ?>

                                    </a>
                                </li>
                            <?php endwhile; ?>
                        <?php endif; ?>

                    </ul>
                </div>

                <div class="tabs__content" id="sE">
                    <?php if ( get_field('sector_e_more_info') ) {?>
                        <div class="more-info">
                            <?php echo get_field("sector_e_more_info");  ?>
                        </div>
                    <?php } ?>

                    <?php if( have_rows("list_services_e_accord") ): ?>
                    <ul class="accordion">
                            <?php while( have_rows('list_services_e_accord') ): the_row(); ?>
                                <li>
                                    <?php if ( get_sub_field('sector_name_e_accord') ) {?>
                                        <div class="toggle"><?php echo get_sub_field('sector_name_e_accord'); ?></div>
                                    <?php } ?>
                                    <ul class="inner">
                                        <?php while( have_rows('service_row_e_accord') ): the_row(); ?>
                                            <li>
                                                <a href="<?php echo get_sub_field('link_steps_e_accord'); ?>"  class="service_type">
                                                    <?php echo get_sub_field('service_type_e_accord'); ?>
                                                </a>
                                            </li>
                                        <?php endwhile; ?>
                                    </ul>
                                </li>
                     <?php endwhile; ?>

                    </ul>
                     <?php endif; ?>
                    <ul>
                        <?php if( have_rows("list_services_e") ): ?>
                            <?php while( have_rows('list_services_e') ): the_row(); ?>
                                <li>
                                    <a href="<?php echo get_sub_field('link_steps_e'); ?>"  class="service_type">

                                        <?php echo get_sub_field('service_type_e'); ?>

                                    </a>
                                </li>
                            <?php endwhile; ?>
                        <?php endif; ?>

                    </ul>
                </div>

                <div class="tabs__content" id="sOther">
                    <?php if ( get_field('sector_other_more_info') ) {?>
                        <div class="more-info">
                            <?php echo get_field("sector_other_more_info");  ?>
                        </div>
                    <?php } ?>
                    <?php if( have_rows("list_services_other") ): ?>
                    <ul class="accordion">
                            <?php while( have_rows('list_services_other') ): the_row(); ?>
                               <li>
                                   <?php if ( get_sub_field('sector_name_oth') ) {?>
                                   <div class="toggle"><?php echo get_sub_field('sector_name_oth'); ?></div>
                                   <?php } ?>
                                   <ul class="inner">
                                       <?php while( have_rows('service_row_other') ): the_row(); ?>
                                       <li>
                                           <a href="<?php echo get_sub_field('link_steps_other'); ?>"  class="service_type">
                                               <?php echo get_sub_field('service_type_other'); ?>
                                           </a>
                                       </li>
                                       <?php endwhile; ?>
                                   </ul>
                               </li>
                            <?php endwhile; ?>
                    </ul>
                    <?php endif; ?>

                    <ul>
                        <?php if( have_rows("list_services_other_2") ): ?>
                            <?php while( have_rows('list_services_other_2') ): the_row(); ?>
                                <li>
                                    <a href="<?php echo get_sub_field('link_steps_other2'); ?>"  class="service_type">

                                        <?php echo get_sub_field('service_type_other2'); ?>

                                    </a>
                                </li>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                </div>


                <div class="tabs__content" id="additionally">
                        <?php if ( get_field('sector_add_more_info') ) {?>
                        <div class="more-info">
                            <?php echo get_field("sector_add_more_info");  ?>
                        </div>
                    <?php } ?>
                    <?php if( have_rows("list_services_add_accord") ): ?>
                    <ul class="accordion">
                            <?php while( have_rows('list_services_add_accord') ): the_row(); ?>
                                <li>
                                    <?php if ( get_sub_field('sector_name_add_accord') ) {?>
                                    <div class="toggle"><?php echo get_sub_field('sector_name_add_accord'); ?></div>
                                    <?php } ?>
                                    <ul class="inner">
                                        <?php while( have_rows('service_row_add_accord') ): the_row(); ?>
                                            <li>
                                                <a href="<?php echo get_sub_field('link_steps_addaccord'); ?>"  class="service_type">
                                                    <?php echo get_sub_field('service_type_addaccord'); ?>
                                                </a>
                                            </li>
                                        <?php endwhile; ?>
                                    </ul>
                                </li>
                            <?php endwhile; ?>
                    </ul>
                    <?php endif; ?>

                    <ul>
                        <?php if( have_rows("list_services_add_links") ): ?>
                            <?php while( have_rows('list_services_add_links') ): the_row(); ?>

                                <li>
                                    <a href="<?php echo get_sub_field('link_steps_add'); ?>"  class="service_type">

                                        <?php echo get_sub_field('service_add_links'); ?>

                                    </a>
                                </li>
                            <?php endwhile; ?>
                        <?php endif; ?>

                    </ul>
                </div>



                <div class="tabs__content" id="additionally2">
                    <?php if ( get_field('sector_add_more_info2') ) {?>
                        <div class="more-info">
                            <?php echo get_field("sector_add_more_info2");  ?>
                        </div>
                    <?php } ?>
                    <?php if( have_rows("list_services_add_accord2") ): ?>
                    <ul class="accordion">
                            <?php while( have_rows('list_services_add_accord2') ): the_row(); ?>
                                <li>
                                    <?php if ( get_sub_field('sector_name_add_accord2') ) {?>
                                    <div class="toggle"><?php echo get_sub_field('sector_name_add_accord2'); ?></div>
                                    <?php } ?>
                                    <ul class="inner">
                                        <?php while( have_rows('service_row_add_accord2') ): the_row(); ?>
                                            <li>
                                                <a href="<?php echo get_sub_field('link_steps_addaccord2'); ?>"  class="service_type">
                                                    <?php echo get_sub_field('service_type_addaccord2'); ?>
                                                </a>
                                            </li>
                                        <?php endwhile; ?>
                                    </ul>
                                </li>
                            <?php endwhile; ?>
                    </ul>
                    <?php endif; ?>

                    <ul>
                        <?php if( have_rows("list_services_add_links2") ): ?>
                            <?php while( have_rows('list_services_add_links2') ): the_row(); ?>

                                <li>
                                    <a href="<?php echo get_sub_field('link_steps_add2'); ?>"  class="service_type">

                                        <?php echo get_sub_field('service_add_links2'); ?>

                                    </a>
                                </li>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                </div>


            </div>
            </div><!-- .tabs-->


            <div style="clear: both"></div>

            <!-- .tabs mobile-->
            <div class="tabs-mobile">
                <section class="accordion_item" data-name="sA">

                        <?php if( get_field("sector_name_a")) {; ?>
                        <div class="tabs__caption">
                                <div class="sector">
                                    <a href="#sA">
                                        <?php echo get_field("sector_name_a"); ?>
                                    </a>
                                </div>
                        </div>
                        <?php } else { ?>
                        <?php } ?>


                        <div class="tabs__content" id="sA">
                            <?php if ( get_field('sector_a_more_info') ) {?>
                                <div class="more-info">
                                    <?php echo get_field("sector_a_more_info");  ?>
                                </div>
                            <?php } ?>
                            <?php if( have_rows("list_services_a_accord") ): ?>
                                <ul class="accordion">
                                    <?php while( have_rows('list_services_a_accord') ): the_row(); ?>
                                        <li>
                                            <?php if ( get_sub_field('sector_name_a_accord') ) {?>
                                                <div class="toggle"><?php echo get_sub_field('sector_name_a_accord'); ?></div>
                                            <?php } ?>
                                            <ul class="inner">
                                                <?php while( have_rows('service_row_a_accord') ): the_row(); ?>
                                                    <li>
                                                        <a href="<?php echo get_sub_field('link_steps_a_accord'); ?>"  class="service_type">
                                                            <?php echo get_sub_field('service_type_a_accord'); ?>
                                                        </a>
                                                    </li>
                                                <?php endwhile; ?>
                                            </ul>
                                        </li>
                                    <?php endwhile; ?>
                                </ul>
                            <?php endif; ?>

                            <ul>
                                <?php if( have_rows("list_services_a") ): ?>
                                    <?php while( have_rows('list_services_a') ): the_row(); ?>
                                        <li>
                                            <a href="<?php echo get_sub_field('link_steps_a'); ?>"  class="service_type">

                                                <?php echo get_sub_field('service_type_a'); ?>

                                            </a>
                                        </li>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                </section>

                <section class="accordion_item" data-name="sB">

                        <?php if( get_field("sector_name_b")) {; ?>
                        <div class="tabs__caption">
                            <div class="sector sB">
                                <a href="#sB">
                                    <?php echo get_field("sector_name_b"); ?>
                                </a>
                            </div>
                        </div>
                        <?php } else { ?>
                        <?php } ?>

                        <div class="tabs__content" id="sB">
                            <?php if ( get_field('sector_b_more_info') ) {?>
                                <div class="more-info">
                                    <?php echo get_field("sector_b_more_info");  ?>
                                </div>
                            <?php } ?>
                            <?php if( have_rows("list_services_b_accord") ): ?>
                                <ul class="accordion">
                                    <?php while( have_rows('list_services_b_accord') ): the_row(); ?>
                                        <li>
                                            <?php if ( get_sub_field('sector_name_b_accord') ) {?>
                                                <div class="toggle"><?php echo get_sub_field('sector_name_b_accord'); ?></div>
                                            <?php } ?>
                                            <ul class="inner">
                                                <?php while( have_rows('service_row_b_accord') ): the_row(); ?>
                                                    <li>
                                                        <a href="<?php echo get_sub_field('link_steps_b_accord'); ?>"  class="service_type">
                                                            <?php echo get_sub_field('service_type_b_accord'); ?>
                                                        </a>
                                                    </li>
                                                <?php endwhile; ?>
                                            </ul>
                                        </li>
                                    <?php endwhile; ?>
                                </ul>
                            <?php endif; ?>

                            <ul>
                                <?php if( have_rows("list_services_b") ): ?>
                                    <?php while( have_rows('list_services_b') ): the_row(); ?>
                                        <li>
                                            <a href="<?php echo get_sub_field('link_steps_b'); ?>"  class="service_type">

                                                <?php echo get_sub_field('service_type_b'); ?>

                                            </a>
                                        </li>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                </section>

                <section class="accordion_item" data-name="sC">
                        <?php if( get_field("sector_name_c")) {; ?>
                        <div class="tabs__caption">
                            <div class="sector sC">
                                <a href="#sC">
                                    <?php echo get_field("sector_name_c"); ?>
                                </a>
                            </div>
                        </div>
                        <?php } else { ?>
                        <?php } ?>
                    <div class="tabs__content" id="sC">
                        <?php if ( get_field('sector_c_more_info') ) {?>
                            <div class="more-info">
                                <?php echo get_field("sector_c_more_info");  ?>
                            </div>
                        <?php } ?>
                        <?php if( have_rows('list_services_c') ): ?>
                            <ul class="accordion">
                                <?php   while( have_rows('list_services_c') ): the_row(); ?>
                                    <li>
                                        <?php if ( get_sub_field('service_type_c') ) {?>
                                            <div class="toggle"><?php echo get_sub_field('service_type_c'); ?></div>
                                        <?php } ?>
                                        <ul class="inner">
                                            <?php while( have_rows('service_row_c') ): the_row(); ?>
                                                <li>
                                                    <a href="<?php echo get_sub_field('link_steps_c'); ?>"  class="service_type">
                                                        <?php echo get_sub_field('subservice_type_c'); ?>
                                                    </a>
                                                </li>
                                            <?php endwhile; ?>
                                        </ul>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>

                        <ul>
                            <?php if( have_rows("list_services_c_2") ): ?>
                                <?php while( have_rows('list_services_c_2') ): the_row(); ?>
                                    <li>
                                        <a href="<?php echo get_sub_field('link_steps_c2'); ?>"  class="service_type">

                                            <?php echo get_sub_field('service_type_c2'); ?>

                                        </a>
                                    </li>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </section>



                <section class="accordion_item" data-name="sD">

                        <?php if( get_field("sector_name_d")) {; ?>
                        <div class="tabs__caption">
                                <div class="sector sD">
                                    <a href="#sD">
                                        <?php echo get_field("sector_name_d"); ?>
                                    </a>
                                </div>
                        </div>
                        <?php } else { ?>
                        <?php } ?>

                    <div class="tabs__content" id="sD">
                        <?php if ( get_field('sector_d_more_info') ) {?>
                            <div class="more-info">
                                <?php echo get_field("sector_d_more_info");  ?>
                            </div>
                        <?php } ?>
                        <?php if( have_rows("list_services_d_accord") ): ?>
                            <ul class="accordion">

                                <?php while( have_rows('list_services_d_accord') ): the_row(); ?>
                                    <li>
                                        <?php if ( get_sub_field('sector_name_d_accord') ) {?>
                                            <div class="toggle"><?php echo get_sub_field('sector_name_d_accord'); ?></div>
                                        <?php } ?>
                                        <ul class="inner">
                                            <?php while( have_rows('service_row_d_accord') ): the_row(); ?>
                                                <li>
                                                    <a href="<?php echo get_sub_field('link_steps_d_accord'); ?>"  class="service_type">
                                                        <?php echo get_sub_field('service_type_d_accord'); ?>
                                                    </a>
                                                </li>
                                            <?php endwhile; ?>
                                        </ul>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>

                        <ul>
                            <?php if( have_rows("list_services_d") ): ?>
                                <?php while( have_rows('list_services_d') ): the_row(); ?>
                                    <li>
                                        <a href="<?php echo get_sub_field('link_steps_d'); ?>"  class="service_type">

                                            <?php echo get_sub_field('service_type_d'); ?>

                                        </a>
                                    </li>
                                <?php endwhile; ?>
                            <?php endif; ?>

                        </ul>
                    </div>

                </section>


                <section class="accordion_item" data-name="sE">
                        <?php if( get_field("sector_name_e")) {; ?>
                        <div class="tabs__caption">
                            <div class="sector sE">
                                <a href="#sE">
                                    <?php echo get_field("sector_name_e"); ?>
                                </a>
                            </div>
                        </div>
                        <?php } else { ?>
                        <?php } ?>

                    <div class="tabs__content" id="sE">
                        <?php if ( get_field('sector_e_more_info') ) {?>
                            <div class="more-info">
                                <?php echo get_field("sector_e_more_info");  ?>
                            </div>
                        <?php } ?>

                        <?php if( have_rows("list_services_e_accord") ): ?>
                            <ul class="accordion">
                                <?php while( have_rows('list_services_e_accord') ): the_row(); ?>
                                    <li>
                                        <?php if ( get_sub_field('sector_name_e_accord') ) {?>
                                            <div class="toggle"><?php echo get_sub_field('sector_name_e_accord'); ?></div>
                                        <?php } ?>
                                        <ul class="inner">
                                            <?php while( have_rows('service_row_e_accord') ): the_row(); ?>
                                                <li>
                                                    <a href="<?php echo get_sub_field('link_steps_e_accord'); ?>"  class="service_type">
                                                        <?php echo get_sub_field('service_type_e_accord'); ?>
                                                    </a>
                                                </li>
                                            <?php endwhile; ?>
                                        </ul>
                                    </li>
                                <?php endwhile; ?>

                            </ul>
                        <?php endif; ?>
                        <ul>
                            <?php if( have_rows("list_services_e") ): ?>
                                <?php while( have_rows('list_services_e') ): the_row(); ?>
                                    <li>
                                        <a href="<?php echo get_sub_field('link_steps_e'); ?>"  class="service_type">

                                            <?php echo get_sub_field('service_type_e'); ?>

                                        </a>
                                    </li>
                                <?php endwhile; ?>
                            <?php endif; ?>

                        </ul>
                    </div>
                </section>


                <section class="accordion_item" data-name="sOther">
                        <?php if( get_field("sector_name_other")) {; ?>
                        <div class="tabs__caption">
                            <div class="sector other">
                                <a href="#sOther">
                                    <?php echo get_field("sector_name_other"); ?>
                                </a>
                            </div>
                        </div>
                        <?php } else { ?>
                        <?php } ?>

                    <div class="tabs__content" id="sOther">
                        <?php if ( get_field('sector_other_more_info') ) {?>
                            <div class="more-info">
                                <?php echo get_field("sector_other_more_info");  ?>
                            </div>
                        <?php } ?>
                        <?php if( have_rows("list_services_other") ): ?>
                            <ul class="accordion">
                                <?php while( have_rows('list_services_other') ): the_row(); ?>
                                    <li>
                                        <?php if ( get_sub_field('sector_name_oth') ) {?>
                                            <div class="toggle"><?php echo get_sub_field('sector_name_oth'); ?></div>
                                        <?php } ?>
                                        <ul class="inner">
                                            <?php while( have_rows('service_row_other') ): the_row(); ?>
                                                <li>
                                                    <a href="<?php echo get_sub_field('link_steps_other'); ?>"  class="service_type">
                                                        <?php echo get_sub_field('service_type_other'); ?>
                                                    </a>
                                                </li>
                                            <?php endwhile; ?>
                                        </ul>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>

                        <ul>
                            <?php if( have_rows("list_services_other_2") ): ?>
                                <?php while( have_rows('list_services_other_2') ): the_row(); ?>
                                    <li>
                                        <a href="<?php echo get_sub_field('link_steps_other2'); ?>"  class="service_type">

                                            <?php echo get_sub_field('service_type_other2'); ?>

                                        </a>
                                    </li>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </section>


                <section class="accordion_item" data-name="additionally">
                        <?php if( get_field("sector_name_add")) {; ?>
                        <div class="tabs__caption">
                            <div class="sector additionally">
                                <a href="#additionally">
                                    <?php echo get_field("sector_name_add"); ?>
                                </a>
                            </div>
                        </div>
                        <?php } else { ?>
                        <?php } ?>

                    <div class="tabs__content" id="additionally">
                        <?php if ( get_field('sector_add_more_info') ) {?>
                            <div class="more-info">
                                <?php echo get_field("sector_add_more_info");  ?>
                            </div>
                        <?php } ?>
                        <?php if( have_rows("list_services_add_accord") ): ?>
                            <ul class="accordion">
                                <?php while( have_rows('list_services_add_accord') ): the_row(); ?>
                                    <li>
                                        <?php if ( get_sub_field('sector_name_add_accord') ) {?>
                                            <div class="toggle"><?php echo get_sub_field('sector_name_add_accord'); ?></div>
                                        <?php } ?>
                                        <ul class="inner">
                                            <?php while( have_rows('service_row_add_accord') ): the_row(); ?>
                                                <li>
                                                    <a href="<?php echo get_sub_field('link_steps_addaccord'); ?>"  class="service_type">
                                                        <?php echo get_sub_field('service_type_addaccord'); ?>
                                                    </a>
                                                </li>
                                            <?php endwhile; ?>
                                        </ul>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>

                        <ul>
                            <?php if( have_rows("list_services_add_links") ): ?>
                                <?php while( have_rows('list_services_add_links') ): the_row(); ?>

                                    <li>
                                        <a href="<?php echo get_sub_field('link_steps_add'); ?>"  class="service_type">

                                            <?php echo get_sub_field('service_add_links'); ?>

                                        </a>
                                    </li>
                                <?php endwhile; ?>
                            <?php endif; ?>

                        </ul>
                    </div>
                </section>

                <section class="accordion_item" data-name="additionally2">
                        <?php if( get_field("sector_name_add2")) {; ?>
                        <div class="tabs__caption">
                            <div class="sector additionally2">
                                <a href="#additionally2">
                                    <?php echo get_field("sector_name_add2"); ?>
                                </a>
                            </div>
                        </div>
                        <?php } else { ?>
                        <?php } ?>

                    <div class="tabs__content" id="additionally2">
                        <?php if ( get_field('sector_add_more_info2') ) {?>
                            <div class="more-info">
                                <?php echo get_field("sector_add_more_info2");  ?>
                            </div>
                        <?php } ?>
                        <?php if( have_rows("list_services_add_accord2") ): ?>
                            <ul class="accordion">
                                <?php while( have_rows('list_services_add_accord2') ): the_row(); ?>
                                    <li>
                                        <?php if ( get_sub_field('sector_name_add_accord2') ) {?>
                                            <div class="toggle"><?php echo get_sub_field('sector_name_add_accord2'); ?></div>
                                        <?php } ?>
                                        <ul class="inner">
                                            <?php while( have_rows('service_row_add_accord2') ): the_row(); ?>
                                                <li>
                                                    <a href="<?php echo get_sub_field('link_steps_addaccord2'); ?>"  class="service_type">
                                                        <?php echo get_sub_field('service_type_addaccord2'); ?>
                                                    </a>
                                                </li>
                                            <?php endwhile; ?>
                                        </ul>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>

                        <ul>
                            <?php if( have_rows("list_services_add_links2") ): ?>
                                <?php while( have_rows('list_services_add_links2') ): the_row(); ?>

                                    <li>
                                        <a href="<?php echo get_sub_field('link_steps_add2'); ?>"  class="service_type">

                                            <?php echo get_sub_field('service_add_links2'); ?>

                                        </a>
                                    </li>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                    </div>

                </section>
            </div><!-- .tabs-mob-->

		</main><!-- #main -->
	</div><!-- #primary -->



<?php get_footer(); ?>
