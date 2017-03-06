<?php
/**
 * Template Name: cooperation-buro
 */
?>

<?php get_header(); ?>

<!-- Content -->
<main>
    <section class="top-block inside-top cooperation-top">
        <h1><?php the_field('page_title'); ?></h1>
        <?php
        if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb('<p id="breadcrumbs">','</p>');
        }
        ?>
        <style>
            .inside-top.cooperation-top {
                background: url(<?php the_field('header_background_image');?>) 50% 50% no-repeat;
                background-size: cover;
            }
        </style>
    </section>
    <section class="chess-layaut">
        <?php $main_sections = get_field('main_sections');
        if ($main_sections) {
            $i = 0;
            foreach ($main_sections as $main_section) {
                ?>
                <div class="chess-row">
                    <?php if ($i % 2 == 0) {
                        echo '<div class="item light">';
                    } else {
                        echo '<div class="item img"><img src="' . $main_section['main_section_image_item'] . '" alt=""></div>';
                        echo '<div class="item dark">';
                    } ?>
                    <div class="item-wrap">
                        <?php if ($i % 2 == 0) {
                            echo '<div class="title">';
                        } else {
                            echo '<div class="title white">';
                        } ?>
                        <?= $main_section['main_section_title_item']; ?>
                    </div>
                    <?= $main_section['main_section_description_item']; ?>
                </div>
                </div>
                <?php if ($i % 2 == 0) {
                    echo '<div class="item img"><img src="' . $main_section['main_section_image_item'] . '" alt=""></div>';
                } ?>
                </div>
                <?php
                $i++;
            }
        }
        ?>
    </section>
    <section class="do-order cooperation">
        <?php $form_array = get_field('order1_form_container')[0];?>
        <div class="wrap">
            <div class="title"><?php the_field('form_title');?></div>
            <div class="order-form">
                <div class="item">
                    <input type="text" placeholder="<?= $form_array['order1_form_placeholder_name'] ?>">
                    <input type="text" placeholder="<?= $form_array['order1_form_placeholder_comment'] ?>">
                </div>
                <div class="item">
                    <input type="tel" placeholder="<?= $form_array['order1_form_placeholder_phone'] ?>">
                    <input type="email" placeholder="<?= $form_array['order1_form_placeholder_email'] ?>">
                </div>
            </div>
            <input type="submit" value="<?= $form_array['order1_form_button_text'] ?>">
        </div>
        <style>
            .do-order.cooperation {
                background: url(<?php the_field('form_background_image'); ?>) no-repeat 50%;
                background-size: cover;
            }

            .chess-layaut .chess-row>.item>img {
                width: 100%;
            }
        </style>
    </section>
</main>
<!-- End content -->

<?php get_footer(); ?>