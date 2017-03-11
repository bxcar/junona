<?php
/**
 * Template Name: translation
 */
?>

<?php get_header(); ?>
<?php include_once "app/js/form-ajax.php" ?>

    <!-- Content -->
    <main>
        <section class="top-block inside-top services-top">
            <h1><?php the_field('page_title'); ?></h1>
            <?php
            if (function_exists('yoast_breadcrumb')) {
                yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
            }
            ?>
            <style>
                .inside-top.services-top {
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
                        } else if ($i == 1) {
                            echo '<div class="item img"><img src="' . $main_section['main_section_image_item'] . '" alt=""></div>';
                            echo '<div class="item dark">';
                        } else {
                            echo '<div class="item img"><img src="' . $main_section['main_section_image_item'] . '" alt=""></div>';
                            echo '<div class="item light reverse">';
                        } ?>
                        <div class="item-wrap">
                            <?php if ($i == 1) {
                                echo '<div class="title white">';
                            } else {
                                echo '<div class="title">';
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
            <style>
                ol li {
                    line-height: 24px !important;
                    padding-bottom: 7px;
                }

                ol li:before {
                    top: 8px !important;
                }
            </style>
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
                            <input type="hidden" name="order" value="Письменный перевод">
                            <input name="name" type="text"
                                   placeholder="<?= $form_array['order1_form_placeholder_name'] ?>">
                            <input required name="phone" type="tel"
                                   placeholder="<?= $form_array['order1_form_placeholder_phone'] ?>">
                            <input name="email" type="email"
                                   placeholder="<?= $form_array['order1_form_placeholder_email'] ?>">
                        </div>
                        <div class="item">
                            <input name="ile_attach" type="file" placeholder="Номер телефона*">
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