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
            <div class="title white">Свяжитесь с нами</div>
            <div class="assessment-form">
                <div class="item">
                    <input type="text" placeholder="Ваше имя*">
                    <input type="email" placeholder="Ваш E-mail">
                    <select name="translate from" id="">
                        <option disabled selected value="" style="display: none">Язык перевода</option>
                        <option value="eng">английский</option>
                        <option value="deu">немецкий</option>
                        <option value="fra">французкий</option>
                        <option value="ukr">украинский</option>
                        <option value="rus">русский</option>
                    </select>
                </div>
                <div class="item">
                    <input type="tel" placeholder="Ваша фамилия*">
                    <input type="tel" placeholder="Номер телефона*">
                    <input type="file">
                </div>
                <div class="item">
                    <textarea name="" id="" cols="20" rows="5" placeholder="Комментарии"></textarea>
                </div>
            </div>
            <input type="submit">
        </div>
    </section>
</main>
<!-- End content -->

<?php get_footer(); ?>
