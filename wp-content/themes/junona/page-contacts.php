<?php
/**
 * Template Name: contacts
 */
?>

<?php get_header(); ?>

<!-- Content -->
<main>
    <section class="top-block inside-top contacts-top">
        <h1><?php the_field('page_title'); ?></h1>
        <?php
        if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb('<p id="breadcrumbs">','</p>');
        }
        ?>
        <style>
            .inside-top.contacts-top {
                background: url(<?php the_field('header_background_image');?>) 50% 50% no-repeat;
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
    <section class="do-order">
        <?php $form_array = get_field('order1_form_container')[0];?>
        <div class="wrap">
            <div class="title"><?php the_field('form_title'); ?></div>
            <div class="order-form">
                <div class="item">
                    <input type="text" placeholder="<?= $form_array['order1_form_placeholder_name'] ?>">
                    <input type="tel" placeholder="<?= $form_array['order1_form_placeholder_phone'] ?>">
                    <input type="email" placeholder="<?= $form_array['order1_form_placeholder_email'] ?>">
                </div>
                <div class="item">
                    <input type="file" placeholder="Номер телефона*">
                    <textarea name="" id="" cols="20" rows="5" placeholder="<?= $form_array['order1_form_placeholder_comment'] ?>"></textarea>
                </div>
            </div>
            <input type="submit" value="<?= $form_array['order1_form_button_text'] ?>">
        </div>
        <style>
            .do-order {
                background: url(<?php the_field('form_background_image'); ?>) no-repeat 50%;
                background-size: cover;
            }
        </style>
    </section>
    <div class="subscribe contacts">
        <div class="wrap-subscribe">
            <div class="title"><?php the_field('subscription_title'); ?></div>
            <input type="email" placeholder="<?php the_field('subscription_placeholder_email'); ?>">
            <input type="submit" class="base-btn" value="<?php the_field('subscription_button_text'); ?>">
        </div>
    </div>
    <style>
        .subscribe.contacts {
            background: url(<?php the_field('subscription_background_image'); ?>) no-repeat 50% 50%;
            background-size: cover;
        }
    </style>
</main>
<!-- End content -->

<?php get_footer(); ?>
