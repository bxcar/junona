<?php
/**
 * Template Name: verbal-translation
 */
?>

<?php get_header(); ?>

    <!-- Content -->
    <main>
        <section class="top-block inside-top services-top">
            <h1><?php the_field('page_title'); ?></h1>
            <div class="breadcrumb">
                <ul>
                    <li><a href="index.html">Главная</a></li>
                    <li><a href="services.html">Услуги</a></li>
                    <li><span>Устный перевод</span></li>
                </ul>
            </div>
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
                <div class="title"><?php the_field('form_title'); ?></div>
                <div class="assessment-form">
                    <div class="item">
                        <input type="text" placeholder="<?php the_field('form_placeholder1'); ?>">
                        <select name="translate from" id="">
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
                        <input type="text" placeholder="<?php the_field('form_placeholder2'); ?>">
                    </div>
                    <div class="item">
                        <input type="tel" placeholder="<?php the_field('form_placeholder3'); ?>">
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
                <input type="submit" value="<?php the_field('form_button_text'); ?>">
            </div>
        </section>
    </main>
    <!-- End content -->

<?php get_footer(); ?>