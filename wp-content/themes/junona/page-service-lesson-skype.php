<?php
/**
 * Template Name: service-lesson-skype
 */
?>

<?php get_header() ?>

<!-- Content -->
<main>
    <section class="top-block inside-top services-top">
        <h1><?php the_field('page_title'); ?></h1>
        <?php
        if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb('<p id="breadcrumbs">','</p>');
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
                        echo '<div class="item img"><img src="' . $main_section['main_section_image_item'] . '" alt=""></div>';
                        echo '<div class="item light reverse">';
                    } else {
                        echo '<div class="item dark reverse">';
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
    <section class="choose-lang">
        <div class="wrap">
            <div class="title"><?php the_field('languages_title');?></div>
            <div class="owl-carousel carousel-5">
                <?php $languages_carousel_5 = get_field('languages_list');
                if ($languages_carousel_5) {
                    foreach ($languages_carousel_5 as $language) {
                        ?>
                        <div class="lang-item">
                            <img src="<?= $language['languages_list_image'] ?>" alt="">
                            <p><?= $language['languages_list_title'] ?></p>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </section>
    <section class="chess-layaut">
        <?php $main_sections = get_field('skype_main_sections');
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
    <section class="chess-layaut">
        <div class="chess-row">
            <div class="item img"><img src="<?php the_field('adv_left_image');?>" alt=""></div>
            <div class="item light reverse">
                <div class="item-wrap">
                    <div class="title advanteg"><?php the_field('adv_title');?></div>
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
    <section class="text-translate">
        <div class="wrap">
            <div class="title"><?php the_field('table_main_title');?></div>
            <?php the_field('table_description');?>
            <div class="table-price">
                <div class="table-row top forth">
                    <div class="lang"><?= get_field('table_titles')[0]['table_title_1'];?></div>
                    <div class="transl-to"><?= get_field('table_titles')[0]['table_title_2'];?></div>
                    <div class="transl-from"><?= get_field('table_titles')[0]['table_title_3'];?></div>
                    <div class=""><?= get_field('table_titles')[0]['table_title_4'];?></div>
                </div>

                <?php $table_rows = get_field('tables_items_list');
                if ($table_rows) {
                    foreach ($table_rows as $table_row) {
                        ?>
                        <div class="table-row">
                            <div class="lang">
                                <img src="<?= $table_row['table_item_image'];?>" alt="">
                                <p><?= $table_row['table_item_title'];?></p>
                            </div>
                            <div class="translate-price"><span><?= $table_row['table_item_price1'];?></span></div>
                            <div class="translate-price"><span><?= $table_row['table_item_price2'];?></span></div>
                            <a href="<?php
                            if ($table_row['table_item_price3_link']['postid']) {
                                the_permalink($table_row['table_item_price3_link']['postid']);
                            } else {
                                echo $table_row['table_item_price3_link']['url'];
                            }
                            ?>" class="link-translate"><?= $table_row['table_item_price3_text'];?></a>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
        <script>
            window.onload = function () {
                var replaced_element = document.getElementsByClassName("translate-price");
                for (var i = 0; i < replaced_element.length; i++) {
                    replaced_element[i].innerHTML = replaced_element[i].innerHTML.replace(/-?\d+/g, "<strong>$&</strong>");
                    replaced_element[i].innerHTML = replaced_element[i].innerHTML.replace(new RegExp("грн", 'g'), "<strong>$&</strong>");
                }
            }
        </script>
        <style>
            .text-translate .table-price strong {
                color: #5a5c5d;
                font-size: .875rem;
                line-height: 24px;
                font-weight: 600;
                width: 17%;
            }
        </style>
    </section>
    <section class="assessment-work free-lessons">
        <div class="wrap">
            <div class="title white"><?php the_field('form_title');?></div>
            <div class="assessment-form">
                <div class="item">
                    <input type="text" placeholder="<?php the_field('form_placeholder_1');?>">
                    <input type="text" placeholder="<?php the_field('form_placeholder_2');?>">
                    <input type="text" placeholder="<?php the_field('form_placeholder_3');?>">
                </div>
                <div class="item">
                    <input type="tel" placeholder="<?php the_field('form_placeholder_4');?>">
                    <select name="level" id="">
                        <?php $levels = get_field('form_level');
                        $i = 0;
                        if ($levels) {
                            foreach ($levels as $level) {
                                if ($i == 0) {
                                    ?>
                                    <option disabled selected
                                            value="<?= $level['form_item_level'] ?>"
                                            style="display: none">
                                        <?= $level['form_item_level'] ?>
                                    </option>
                                    <?php
                                    $i++;
                                } else {
                                    ?>
                                    <option value="<?= $level['form_item_level'] ?>">
                                        <?= $level['form_item_level'] ?>
                                    </option>
                                    <?php
                                }
                            }
                        }
                        ?>
                    </select>
                    <input type="text" placeholder="<?php the_field('form_placeholder_5');?>">
                </div>
                <div class="item">
                    <input type="text" placeholder="<?php the_field('form_placeholder_6');?>">
                    <textarea name="" id="" cols="20" rows="5" placeholder="<?php the_field('form_placeholder_7');?>"></textarea>
                </div>
            </div>
            <input type="submit" value="<?php the_field('form_button_text');?>">
        </div>
        <style>
            .assessment-work.free-lessons {
                background: url(<?php the_field('from_background_image'); ?>) 50% 50% no-repeat;
                background-size: cover;
            }
        </style>
    </section>
</main>
<!-- End content -->

<?php get_footer() ?>

