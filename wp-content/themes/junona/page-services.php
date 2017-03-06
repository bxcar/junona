<?php
/**
 * Template Name: services
 */
?>

<?php get_header(); ?>

<!-- Content -->
<main>
    <section class="top-block inside-top services-top">
        <h1><?php the_field('page_title'); ?></h1>
        <?php
        if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb('<p id="breadcrumbs">','</p>');
        }
        ?>
        <style>
            .inside-top.services-top {
                background: url(<?php the_field('header_background_image');?>) 50% 50% no-repeat;
                background-size: cover;
            }
        </style>
    </section>
    <section class="specialization our-services">
        <div class="wrap">
            <div class="title"><?php the_field('services_title'); ?></div>
            <div class="owl-carousel carousel-4">
                <?php $specializations = get_field('specializations');
                if ($specializations) {
                    $i = 0;
                    $final_iteration = count($specializations);
                    foreach ($specializations as $specialization) {
                        if (($i % 2) == 0) {
                            ?>
                            <div class="item">
                        <?php } ?>
                        <div class="link">
                            <img src="<?= $specialization['specializations_image_item'] ?>" alt="">
                            <a href="<?php
                            if ($specialization['specializations_link_item']['postid']) {
                                the_permalink($specialization['specializations_link_item']['postid']);
                            } else {
                                echo $specialization['specializations_link_item']['url'];
                            }
                            ?>">
                                <?= $specialization['specializations_text_item'] ?>
                            </a>
                        </div>
                        <?php if ((($i % 2) == 1) || ($i == ($final_iteration - 1))) {
                            ?>
                            </div>
                        <?php }
                        $i++;
                    }
                }
                ?>
            </div>
        </div>
    </section>
    <section class="additional-services">
        <div class="wrap">
            <div class="title"><?php the_field('additional_services_title'); ?></div>
            <?php the_field('additional_services_description'); ?>

            <?php if (get_field('additional_services_check_note_display')) { ?>
                <div class="title second"><?php the_field('additional_services_note_title'); ?></div>
                <?php the_field('additional_services_note_description'); ?>
            <?php } ?>
        </div>
    </section>
    <section class="do-order">
        <div class="wrap">
            <div class="title"><?php the_field('order_translation_form_title'); ?></div>
            <div class="order-form">
                <div class="item">
                    <input type="text" placeholder="<?php the_field('order_translation_placeholder_name'); ?>">
                    <input type="tel" placeholder="<?php the_field('order_translation_placeholder_phone'); ?>">
                    <input type="email" placeholder="<?php the_field('order_translation_placeholder_email'); ?>">
                </div>
                <div class="item">
                    <input type="file" placeholder="Номер телефона*">
                    <textarea name="" id="" cols="20" rows="5" placeholder="<?php the_field('order_translation_placeholder_comment'); ?>"></textarea>
                </div>
            </div>
            <input type="submit" value="<?php the_field('order_translation_button_text'); ?>">
        </div>
        <style>
            .do-order {
                background: url(<?php the_field('order_translation_form_background_image');?>) 50% no-repeat;
                background-size: cover;
            }
        </style>
    </section>
</main>
<!-- End content -->

<?php get_footer(); ?>
