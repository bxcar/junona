<?php
/**
 * Template Name: cooperation
 */
?>


<?php get_header(); ?>
<?php include_once "app/js/form-ajax.php" ?>

<!-- Content -->
<main>
    <section class="top-block inside-top cooperation-top">
        <h1><?php the_field('page_title'); ?></h1>
        <?php
        if (function_exists('yoast_breadcrumb')) {
            yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
        }
        ?>
        <style>
            .inside-top.cooperation-top {
                background: url(<?php the_field('header_background_image');?>) 50% 50% no-repeat;
                background-size: cover;
            }
        </style>
    </section>
    <section class="direction">
        <div class="wrap">
            <div class="title"><?php the_field('directions_title'); ?></div>
            <div class="box">
                <?php $directions = get_field('directions');
                if ($directions) {
                    foreach ($directions as $direction) {
                        ?>
                        <div class="item <?php if ($direction['directions_item_check']) {
                            echo 'large';
                        } ?>">
                            <div class="link">
                                <img src="<?= $direction['directions_item_image']; ?>" alt="">
                                <a href="<?php
                                if ($direction['directions_item_link']['postid']) {
                                    the_permalink($direction['directions_item_link']['postid']);
                                } else {
                                    echo $direction['directions_item_link']['url'];
                                }
                                ?>"><?= $direction['directions_item_text']; ?></a>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </section>
    <section class="cooperation-desc">
        <div class="wrap">
            <div class="title"><?php the_field('cooperation_text'); ?></div>
            <?php the_field('cooperation_description'); ?>
        </div>
    </section>
    <section class="do-order cooperation">
        <?php $form_array = get_field('order1_form_container')[0]; ?>
        <div class="wrap">
            <form id="static-form" method="post" accept-charset="utf-8" enctype="multipart/form-data"
                  action="<?= get_template_directory_uri() ?>/index.php">
                <div class="title"><?php the_field('form_title'); ?></div>
                <div class="order-form">
                    <div class="item">
                        <input type="hidden" name="required-field" value="phone">
                        <input type="hidden" name="source"
                               value="<?= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>">
                        <input type="hidden" name="order" value="Сотрудничество">
                        <input name="name" type="text" placeholder="<?= $form_array['order1_form_placeholder_name'] ?>">
                        <input name="business-type" type="text" placeholder="<?= $form_array['order1_form_placeholder_comment'] ?>">
                    </div>
                    <div class="item">
                        <input required name="phone" type="tel" placeholder="<?= $form_array['order1_form_placeholder_phone'] ?>">
                        <input name="email" type="email" placeholder="<?= $form_array['order1_form_placeholder_email'] ?>">
                    </div>
                </div>
                <input id="submit-static-form" type="submit" value="<?= $form_array['order1_form_button_text'] ?>">
            </form>
        </div>
        <style>
            .do-order.cooperation {
                background: url(<?php the_field('form_background_image'); ?>) no-repeat 50%;
                background-size: cover;
            }

            .chess-layaut .chess-row > .item > img {
                width: 100%;
            }
        </style>
    </section>
</main>
<!-- End content -->

<?php get_footer(); ?>
