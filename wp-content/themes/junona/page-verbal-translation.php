<?php
/**
 * Template Name: verbal-translation
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
                        <?php if ($i % 2 == 1) {
                            echo '<div class="item light">';
                        } else {
                            echo '<div class="item img"><img src="' . $main_section['main_section_image_item'] . '" alt=""></div>';
                            echo '<div class="item light reverse">';
                        } ?>
                        <div class="item-wrap">
                            <div class="title">
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
        </section>
        <section class="assessment-work services-work">
            <div class="wrap">
                <form id="static-form" method="post" accept-charset="utf-8" enctype="multipart/form-data"
                      action="<?= get_template_directory_uri() ?>/sendemail.php">
                    <div class="title"><?php the_field('form_title'); ?></div>
                    <div class="assessment-form">
                        <div class="item">
                            <input type="hidden" name="required-field" value="phone">
                            <input type="hidden" name="source"
                                   value="<?= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>">
                            <input type="hidden" name="order" value="<?php the_title(); ?>">
                            <input name="name" type="text" placeholder="<?php the_field('form_placeholder1'); ?>">
                            <select name="translate_languages" id="">
                                <?php $times = get_field('form_translation_language');
                                $i = 0;
                                if ($times) {
                                    foreach ($times as $time) {
                                        if ($i == 0) {
                                            ?>
                                            <option disabled selected
                                                    value="<?= $time['form_item'] ?>"
                                                    style="display: none">
                                                <?= $time['form_item'] ?>
                                            </option>
                                            <?php
                                            $i++;
                                        } else {
                                            ?>
                                            <option value="<?= $time['form_item'] ?>">
                                                <?= $time['form_item'] ?>
                                            </option>
                                            <?php
                                        }
                                    }
                                }
                                ?>
                            </select>
                            <input name="date-2" type="text" placeholder="<?php the_field('form_placeholder2'); ?>">
                        </div>
                        <div class="item">
                            <input required name="phone" type="tel" placeholder="<?php the_field('form_placeholder3'); ?>">
                            <select name="date" id="">
                                <?php $times = get_field('form_duration');
                                $i = 0;
                                if ($times) {
                                    foreach ($times as $time) {
                                        if ($i == 0) {
                                            ?>
                                            <option disabled selected
                                                    value="<?= $time['form_item'] ?>"
                                                    style="display: none">
                                                <?= $time['form_item'] ?>
                                            </option>
                                            <?php
                                            $i++;
                                        } else {
                                            ?>
                                            <option value="<?= $time['form_item'] ?>">
                                                <?= $time['form_item'] ?>
                                            </option>
                                            <?php
                                        }
                                    }
                                }
                                ?>
                            </select>
                            <select name="time" id="">
                                <?php $times = get_field('form_time');
                                $i = 0;
                                if ($times) {
                                    foreach ($times as $time) {
                                        if ($i == 0) {
                                            ?>
                                            <option disabled selected
                                                    value="<?= $time['form_item'] ?>"
                                                    style="display: none">
                                                <?= $time['form_item'] ?>
                                            </option>
                                            <?php
                                            $i++;
                                        } else {
                                            ?>
                                            <option value="<?= $time['form_item'] ?>">
                                                <?= $time['form_item'] ?>
                                            </option>
                                            <?php
                                        }
                                    }
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <input id="submit-static-form" type="submit" value="<?php the_field('form_button_text'); ?>">
                </form>
            </div>
            <style>
                .assessment-work.services-work .wrap .assessment-form .item {
                    width: 50%;
                }
            </style>
        </section>
    </main>
    <!-- End content -->

<?php get_footer(); ?>