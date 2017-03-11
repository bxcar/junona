<?php
/**
 * Template Name: website-local
 */
?>

<?php get_header(); ?>
<?php include_once "app/js/form-ajax.php" ?>

<!-- Content -->
<main>
    <section class="top-block inside-top specialization-top">
        <h1><?php the_field('page_title'); ?></h1>
        <?php
        if (function_exists('yoast_breadcrumb')) {
            yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
        }
        ?>
        <style>
            .inside-top.specialization-top {
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
    <section class="our-services-translate white">
        <div class="wrap">
            <div class="title"><?php the_field('our_services_title'); ?></div>
            <div class="our-services-item">
                <?php $our_services = get_field('our_services_list');
                if ($our_services) {
                    foreach ($our_services as $our_service) {
                        ?>
                        <div class="item">
                            <div class="wrapper">
                                <img src="<?= $our_service['our_services_item_image'] ?>" alt="">
                                <div class="item-title"><?= $our_service['our_services_item_title'] ?></div>
                                <p><?= $our_service['our_services_item_description'] ?></p>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </section>
    <section class="chess-layaut">
        <?php $main_sections = get_field('main_sections_2');
        if ($main_sections) {
            $i = 0;
            foreach ($main_sections as $main_section) {
                ?>
                <div class="chess-row">
                    <?php if ($i % 2 == 1) {
                        echo '<div class="item light reverse">';
                    } else {
                        echo '<div class="item img"><img src="' . $main_section['main_section_2_image_item'] . '" alt=""></div>';
                        echo '<div class="item light reverse">';
                    } ?>
                    <div class="item-wrap">
                        <?php if ($main_section['main_section_2_title_item']) { ?>
                        <?php if ($i % 2 == 1) {
                            echo '<div class="title">';
                        } else {
                            echo '<div class="title white">';
                        } ?>
                        <?= $main_section['main_section_2_title_item']; ?>
                    </div>
                <?php } ?>
                    <?= $main_section['main_section_2_description_item']; ?>
                    <a href="<?php
                    if ($main_section['main_section_2_button_link']['postid']) {
                        the_permalink($main_section['main_section_2_button_link']['postid']);
                    } else {
                        echo $main_section['main_section_2_button_link']['url'];
                    }
                    ?>" class="base-btn"><?= $main_section['main_section_2_button_text']; ?></a>
                </div>
                </div>
                <?php if ($i % 2 == 1) {
                    echo '<div class="item img"><img src="' . $main_section['main_section_2_image_item'] . '" alt=""></div>';
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
    <section class="assessment-work our-specialization">
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
                            <?php $translate_from = get_field('form_language_translate');
                            $i = 0;
                            if ($translate_from) {
                                foreach ($translate_from as $translate_from_item) {
                                    if ($i == 0) {
                                        ?>
                                        <option disabled selected
                                                value="<?= $translate_from_item['form_item_language_translate'] ?>"
                                                style="display: none">
                                            <?= $translate_from_item['form_item_language_translate'] ?>
                                        </option>
                                        <?php
                                        $i++;
                                    } else {
                                        ?>
                                        <option value="<?= $translate_from_item['form_item_language_translate'] ?>">
                                            <?= $translate_from_item['form_item_language_translate'] ?>
                                        </option>
                                        <?php
                                    }
                                }
                            }
                            ?>
                        </select>
                        <input name="site-translate" type="text" placeholder="<?php the_field('form_placeholder2'); ?>">
                    </div>
                    <div class="item">
                        <input required name="phone" type="tel" placeholder="<?php the_field('form_placeholder3'); ?>">
                        <input name="email" type="email" placeholder="<?php the_field('form_placeholder4'); ?>">
                        <input name="budget" type="text" placeholder="<?php the_field('form_placeholder5'); ?>">
                    </div>
                    <div class="item">
                        <textarea name="text" id="" cols="20" rows="5"
                                  placeholder="<?php the_field('form_placeholder6'); ?>"></textarea>
                    </div>
                </div>
                <input id="submit-static-form" type="submit" value="<?php the_field('form_button_text'); ?>">
            </form>
        </div>
    </section>
</main>
<!-- End content -->

<?php get_footer(); ?>

