<?php
/**
 * Template Name: special_offers
 */
?>

<?php get_header(); ?>

<!-- Content -->
<main>
    <section class="top-block inside-top offer-top">
        <h1><?php the_field('page_title'); ?></h1>
        <?php
        if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb('<p id="breadcrumbs">','</p>');
        }
        ?>
        <style>
            .inside-top.offer-top {
                background: url(<?php the_field('header_background_image');?>) 50% 50% no-repeat;
                background-size: cover;
            }
        </style>
    </section>

    <?php $special_offers = get_field('special_offers_list');
    if($special_offers) {
        foreach ($special_offers as $special_offer) {
            ?>
            <section class="chess-layaut spec-of">
                <div class="chess-row">
                    <div class="item light">
                        <div class="item-wrap">
                            <?= $special_offer['special_offer_item_description']; ?>
                        </div>
                    </div>
                    <div class="item img offer">
                        <img src="<?= $special_offer['special_offer_item_tile_image']; ?>" alt="">
                        <div class="so-wrap">
                            <div class="top"><?= $special_offer['special_offer_item_tile_name']; ?></div>
                            <div class="number"><?= $special_offer['special_offer_item_tile_value']; ?><br>
                                <span><?= $special_offer['special_offer_item_tile_title']; ?></span></div>
                            <div class="desc"><?= $special_offer['special_offer_item_tile_description']; ?></div>
                            <a href="<?php
                            if ($special_offer['special_offer_item_tile_button_link']['postid']) {
                                the_permalink($special_offer['special_offer_item_tile_button_link']['postid']);
                            } else {
                                echo $special_offer['special_offer_item_tile_button_link']['url'];
                            }
                            ?>" class="base-btn"><?= $special_offer['special_offer_item_tile_button_text']; ?></a>
                        </div>
                    </div>
                </div>
            </section>
            <?php
        }
    }
    ?>
</main>
<!-- End content -->

<?php get_footer(); ?>