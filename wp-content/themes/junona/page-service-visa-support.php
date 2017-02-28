<?php
/**
 * Template Name: visa-support
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
                    <li><span>Визовая поддержка</span></li>
                </ul>
            </div>
            <style>
                .assessment-work.leave-review {
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
                            echo '<div class="item light reverse">';
                        } ?>

                        <div class="item-wrap">
                            <?php if ($main_section['main_section_title_item']) { ?>
                                <div class="title">
                                    <?= $main_section['main_section_title_item']; ?>
                                </div>
                            <?php } ?>
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
        <section class="specialization see-more">
            <div class="wrap">
                <div class="title"><?php the_field('see_also_title'); ?></div>
                <div class="owl-carousel carousel-2">
                    <?php $see_also = get_field('see_also_items');
                    if ($see_also) {
                        foreach ($see_also as $see_also_item) {
                            ?>
                            <div class="item">
                                <div class="link">
                                    <img src="<?= $see_also_item['see_also_item_image'] ?>" alt="">
                                    <a href="<?php
                                    if ($see_also_item['see_also_item_link']['postid']) {
                                        the_permalink($see_also_item['see_also_item_link']['postid']);
                                    } else {
                                        echo $see_also_item['see_also_item_link']['url'];
                                    }
                                    ?>"><?= $see_also_item['see_also_item_text'] ?></a>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </section>
        <section class="assessment-work leave-review">
            <div class="wrap">
                <div class="title white">Оставить отзыв</div>
                <div class="assessment-form">
                    <div class="item">
                        <input type="text" placeholder="Ваше имя*">
                    </div>
                    <div class="item">
                        <input type="tel" placeholder="Номер телефона*">
                    </div>
                    <div class="item">
                        <input type="email" placeholder="Ваш E-mail">
                    </div>
                    <div class="item large">
                        <textarea name="" id="" cols="20" rows="5" placeholder="Комментарии"></textarea>
                    </div>
                </div>
                <input type="submit">

            </div>
        </section>
    </main>
    <!-- End content -->

<?php get_footer(); ?>