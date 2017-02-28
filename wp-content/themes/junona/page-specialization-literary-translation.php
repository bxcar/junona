<?php
/**
 * Template Name: literary-translation
 */
?>


<?php get_header(); ?>

<!-- Content -->
<main>
    <section class="top-block inside-top specialization-top">
        <h1><?php the_field('page_title'); ?></h1>
        <div class="breadcrumb">
            <ul>
                <li><a href="index.html">Главная</a></li>
                <li><a href="index.html">Специализации</a></li>
                <li><span>Литературный перевод</span></li>
            </ul>
        </div>
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
    <section class="services-list">
        <div class="wrap">
            <div class="title"><?php the_field('services_title');?></div>
            <div class="owl-carousel carousel-6">

                <?php $services = get_field('services_list');
                if ($services) {
                    foreach ($services as $service) {
                        ?>
                        <div class="lang-item">
                            <img src="<?= $service['service_item_image'] ?>" alt="">
                            <p><?= $service['service_item_text'] ?></p>
                        </div>
                        <?php
                    }
                }
                ?>

            </div>
        </div>
    </section>
    <section class="do-order">
        <div class="wrap">
            <div class="title">Заказать перевод</div>
            <div class="order-form">
                <div class="item">
                    <input type="text" placeholder="Ваше имя*">
                    <input type="tel" placeholder="Номер телефона*">
                    <input type="email" placeholder="E-mail">
                </div>
                <div class="item">
                    <input type="file" placeholder="Номер телефона*">
                    <textarea name="" id="" cols="20" rows="5" placeholder="Комментарии"></textarea>
                </div>
            </div>
            <input type="submit">

        </div>
    </section>
</main>
<!-- End content -->

<?php get_footer(); ?>