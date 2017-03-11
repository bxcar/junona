<?php
/**
 * Template Name: lang
 */
?>

<?php get_header(); ?>
<?php include_once "app/js/form-ajax.php" ?>

<!-- Content -->
<style>
    .chess-row .dark .item-wrap a {
        color: #fff;
    }
    .chess-row .dark .item-wrap a:hover {
        color: #fff;
    }
</style>
<main>
    <section class="top-block inside-top lang-top">
        <h1><?php the_field('page_title'); ?></h1>
        <?php
        if (function_exists('yoast_breadcrumb')) {
            yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
        }
        ?>
        <style>
            .inside-top.lang-top {
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
                    <?php if ($i % 2 == 1) {
                        echo '<div class="item dark reverse">';
                    } else {
                        echo '<div class="item img"><img src="' . $main_section['main_section_image_item'] . '" alt=""></div>';
                        echo '<div class="item light reverse">';
                    } ?>
                    <div class="item-wrap">
                        <?php if ($i % 2 == 1) {
                            echo '<div class="title white">';
                        } else {
                            echo '<div class="title">';
                        } ?>
                        <?= $main_section['main_section_title_item']; ?>
                    </div>
                    <?= $main_section['main_section_description_item']; ?>
                </div>
                </div>
                <?php if ($i % 2 == 1) {
                    echo '<div class="item img"><img src="' . $main_section['main_section_image_item'] . '" alt=""></div>';
                } ?>
                </div>
                <?php
                $i++;
            }
        }
        ?>

        <div class="chess-row">
            <div class="item img"><img src="<?php the_field('advantages_left_image'); ?>" alt=""></div>
            <div class="item light reverse">
                <div class="item-wrap">
                    <div class="title advanteg"><?php the_field('advantages_title'); ?></div>
                    <div class="advanteges-item">
                        <?php $advantages = get_field('advs');
                        if ($advantages) {
                            foreach ($advantages as $advantage) {
                                ?>
                                <div class="item">
                                    <div class="wrapper">
                                        <img src="<?= $advantage['adv_image_item'] ?>" alt="">
                                        <div class="item-title"><?= $advantage['adv_title_item'] ?></div>
                                        <p><?= $advantage['adv_text_item'] ?></p>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="do-order">
        <?php $form_array = get_field('order1_form_container')[0]; ?>
        <div class="wrap">
            <form id="static-form" method="post" accept-charset="utf-8" enctype="multipart/form-data"
                  action="<?= get_template_directory_uri() ?>/sendemail.php">
                <div class="title"><?php the_field('form_title'); ?></div>
                <div class="order-form">
                    <div class="item">
                        <input type="hidden" name="required-field" value="phone">
                        <input type="hidden" name="source"
                               value="<?= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>">
                        <input type="hidden" name="order" value="Языки">
                        <input name="name" type="text" placeholder="<?= $form_array['order1_form_placeholder_name'] ?>">
                        <input required name="phone" type="tel"
                               placeholder="<?= $form_array['order1_form_placeholder_phone'] ?>">
                        <input name="email" type="email"
                               placeholder="<?= $form_array['order1_form_placeholder_email'] ?>">
                    </div>
                    <div class="item">
                        <input name="file_attach" type="file" placeholder="Номер телефона*">
                        <textarea name="text" id="" cols="20" rows="5"
                                  placeholder="<?= $form_array['order1_form_placeholder_comment'] ?>"></textarea>
                    </div>
                </div>
                <input id="submit-static-form" type="submit" value="<?= $form_array['order1_form_button_text'] ?>">
            </form>
        </div>
        <style>
            .do-order {
                background: url(<?php the_field('form_background_image'); ?>) no-repeat 50%;
                background-size: cover;
            }
        </style>
    </section>
</main>
<!-- End content -->

<?php get_footer(); ?>
