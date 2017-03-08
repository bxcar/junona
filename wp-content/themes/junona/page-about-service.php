<?php
/**
 * Template Name: about-service
 */
?>

<?php get_header(); ?>
<?php include_once "app/js/form-ajax.php" ?>

<!-- Content -->
<main>
    <section class="top-block inside-top">
        <h1><?php the_field('header_title'); ?></h1>
        <?php
        if (function_exists('yoast_breadcrumb')) {
            yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
        }
        ?>
        <style>
            .inside-top {
                background: url(<?php the_field('background_image');?>) 50% 50% no-repeat;
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
    <section class="review about-services-review">
        <div class="wrap">
            <div class="title white"><?php the_field('reviews_title'); ?></div>
            <div class="owl-carousel carousel-3">
                <?php $reviews = get_field('reviews_list');
                if ($reviews) {
                    foreach ($reviews as $review) {
                        ?>
                        <div class="item">
                            <div class="img-block">
                                <img src="<?= $review['reviews_image_item'] ?>" alt="">
                            </div>
                            <div class="name"><?= $review['reviews_name_item'] ?></div>
                            <div class="position"><?= $review['reviews_position_item'] ?></div>
                            <div class="text"><?= $review['reviews_text_item'] ?></div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
        <style>
            .about-services-review {
                background: url(<?php the_field('reviews_background_title');?>) 50% 50% no-repeat;
                background-size: cover;
            }
        </style>
    </section>
    <section class="work-all-world">
        <div class="title white"><?php the_field('work_with_all_world_title'); ?></div>
        <img src="<?php the_field('work_with_all_world_image'); ?>" alt="">
    </section>
    <section class="assessment-work about-services">
        <div class="wrap">
            <form id="static-form" method="post" accept-charset="utf-8" enctype="multipart/form-data"
                  action="<?= get_template_directory_uri() ?>/sendemail.php">
                <div class="title"><?php the_field('form_title'); ?></div>
                <div class="assessment-form">
                    <div class="item">
                        <input type="hidden" name="required-field" value="phone">
                        <input type="hidden" name="source"
                               value="<?= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>">
                        <input type="hidden" name="order" value="О сервисе - первая форма">
                        <input name="name" type="text" placeholder="<?php the_field('form_placeholder_name'); ?>">
                        <input name="email" type="email" placeholder="<?php the_field('form_placeholder_email'); ?>">
                        <select name="translate_from" id="">
                            <?php $translate_from = get_field('w_a_translate_from');
                            $i = 0;
                            if ($translate_from) {
                                foreach ($translate_from as $translate_from_item) {
                                    if ($i == 0) {
                                        ?>
                                        <option disabled selected
                                                value="<?= $translate_from_item['w_a_translate_from_item'] ?>"
                                                style="display: none">
                                            <?= $translate_from_item['w_a_translate_from_item'] ?>
                                        </option>
                                        <?php
                                        $i++;
                                    } else {
                                        ?>
                                        <option value="<?= $translate_from_item['w_a_translate_from_item'] ?>">
                                            <?= $translate_from_item['w_a_translate_from_item'] ?>
                                        </option>
                                        <?php
                                    }
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <div class="item">
                        <input required name="phone" type="tel"
                               placeholder="<?php the_field('form_placeholder_phone'); ?>">
                        <select name="date" id="">
                            <?php $times = get_field('w_a_time');
                            $i = 0;
                            if ($times) {
                                foreach ($times as $time) {
                                    if ($i == 0) {
                                        ?>
                                        <option disabled selected
                                                value="<?= $time['w_a_time_punkt'] ?>"
                                                style="display: none">
                                            <?= $time['w_a_time_punkt'] ?>
                                        </option>
                                        <?php
                                        $i++;
                                    } else {
                                        ?>
                                        <option value="<?= $time['w_a_time_punkt'] ?>">
                                            <?= $time['w_a_time_punkt'] ?>
                                        </option>
                                        <?php
                                    }
                                }
                            }
                            ?>
                        </select>
                        <select name="translate_to" id="">
                            <?php $translate_to = get_field('w_a_translate_to');
                            $i = 0;
                            if ($translate_to) {
                                foreach ($translate_to as $translate_to_item) {
                                    if ($i == 0) {
                                        ?>
                                        <option disabled selected
                                                value="<?= $translate_to_item['w_a_translate_to'] ?>"
                                                style="display: none">
                                            <?= $translate_to_item['w_a_translate_to'] ?>
                                        </option>
                                        <?php
                                        $i++;
                                    } else {
                                        ?>
                                        <option value="<?= $translate_to_item['w_a_translate_to'] ?>">
                                            <?= $translate_to_item['w_a_translate_to'] ?>
                                        </option>
                                        <?php
                                    }
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <div class="item">
                        <input name="file_attach" type="file" placeholder="Номер телефона*">
                        <textarea name="text" id="" cols="20" rows="5"
                                  placeholder="<?php the_field('form_placeholder_comment'); ?>"></textarea>
                    </div>
                </div>
                <input id="submit-static-form" type="submit" value="<?php the_field('form_button_text'); ?>">
            </form>
        </div>
        <style>
            .assessment-work.about-services {
                background: url(<?php the_field('form_background_image'); ?>) 50% no-repeat;
                background-size: cover;
            }
        </style>
    </section>
    <section class="address-info">
        <div class="addres-wrap">
            <?php $tiles = get_field('address_tiles');
            if ($tiles) {
                foreach ($tiles as $tile) {
                    if ($tile['acf_fc_layout'] == 'address_tile_description') {
                        ?>
                        <div class="item logo">
                            <img src="<?= $tile['address_tile_description_image']; ?>" alt="">
                            <p><?= $tile['address_tile_description_text']; ?></p>
                        </div>
                        <?php
                    } else if ($tile['acf_fc_layout'] == 'address_tile_address') {
                        ?>
                        <div class="item location">
                            <div class="box">
                                <img src="<?= $tile['address_tile_image']; ?>" alt="">
                                <div>
                                    <p><?= $tile['address_tile_subtitle1']; ?></p>
                                    <span><?= $tile['address_tile_text1']; ?></span>
                                </div>
                                <div>
                                    <p><?= $tile['address_tile_subtitle2']; ?></p>
                                    <span><?= $tile['address_tile_text2']; ?></span>
                                </div>
                                <div>
                                    <p><?= $tile['address_tile_subtitle3']; ?></p>
                                    <span><?= $tile['address_tile_text3']; ?></span>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
            }
            ?>
        </div>
    </section>
    <div class="custom-g-map">
        <div id="map"></div>
    </div>
    <div class="subscribe">
        <div class="wrap-subscribe">
            <form id="subscription-form" method="post" accept-charset="utf-8" enctype="multipart/form-data"
                  action="<?= get_template_directory_uri() ?>/sendemail.php">
                <input type="hidden" name="required-field" value="email">
                <input type="hidden" name="source"
                       value="<?= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>">
                <input type="hidden" name="order" value="О сервисе - подписка на рассылку">
                <div class="title"><?php the_field('subscription_title'); ?></div>
                <input required name="email" type="email" placeholder="<?php the_field('subscription_placeholder_email'); ?>">
                <input id="subscription-form-submit" type="submit" class="base-btn" value="<?php the_field('subscription_button_text'); ?>">
            </form>
        </div>
    </div>
</main>
<!-- End content -->

<?php get_footer(); ?>
