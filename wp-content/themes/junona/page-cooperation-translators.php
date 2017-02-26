<?php
/**
 * Template Name: cooperation-translators
 */
?>

<?php get_header(); ?>

<!-- Content -->
<main>
    <section class="top-block inside-top cooperation-top">
        <h1><?php the_field('page_title'); ?></h1>
        <div class="breadcrumb">
            <ul>
                <li><a href="index.html">Главная</a></li>
                <li><a href="cooperation.html">Сотрудничество</a></li>
                <li><span>Переводчикам</span></li>
            </ul>
        </div>
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
                        echo '<div class="item">';
                    } else {
                        echo '<div class="item img"><img src="' . $main_section['main_section_image_item'] . '" alt=""></div>';
                        echo '<div class="item">';
                    } ?>
                    <div class="item-wrap">
                        <?php if ($main_section['main_section_title_item']) {
                            ?>
                            <div class="title"><?= $main_section['main_section_title_item']; ?></div>
                            <?php
                        } ?>
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
    <section class="assessment-work our-specialization cooperation-transl">
        <div class="wrap">
            <div class="title white"><?php the_field('form_title')?></div>
            <div class="assessment-form">
                <div class="item">
                    <input type="text" placeholder="<?php the_field('form_placeholder_1')?>">
                    <input type="email" placeholder="<?php the_field('form_placeholder_2')?>">
                    <select name="translate from" id="">
                        <?php $translate_languages = get_field('form_translate_language');
                        $i = 0;
                        if ($translate_languages) {
                            foreach ($translate_languages as $translate_language) {
                                if ($i == 0) {
                                    ?>
                                    <option disabled selected
                                            value="<?= $translate_language['form_translate_language_item'] ?>"
                                            style="display: none">
                                        <?= $translate_language['form_translate_language_item'] ?>
                                    </option>
                                    <?php
                                    $i++;
                                } else {
                                    ?>
                                    <option value="<?= $translate_language['form_translate_language_item'] ?>">
                                        <?= $translate_language['form_translate_language_item'] ?>
                                    </option>
                                    <?php
                                }
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="item">
                    <input type="tel" placeholder="<?php the_field('form_placeholder_4')?>">
                    <input type="tel" placeholder="<?php the_field('form_placeholder_5')?>">
                    <input type="file">
                </div>
                <div class="item">
                    <textarea name="" id="" cols="20" rows="5" placeholder="<?php the_field('form_placeholder_6')?>"></textarea>
                </div>
            </div>
            <input type="submit" value="<?php the_field('form_button_text')?>">
        </div>
    </section>
</main>
<!-- End content -->

<?php get_footer(); ?>
