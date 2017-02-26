<?php get_header(); ?>

    <!-- Content -->
    <main>
        <section class="top-block inside-top lang-top">
            <h1><?php the_field('page_title'); ?></h1>
            <div class="breadcrumb">
                <ul>
                    <li><a href="index.html">Главная</a></li>
                    <li><a href="lang.html">Языки</a></li>
                    <li><span>Профессиональный английский перевод</span></li>
                </ul>
            </div>
            <style>
                .do-order {
                    background: url(<?php the_field('header_background_image');?>) 50% no-repeat;
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
        <section class="our-services-translate">
            <div class="wrap">
                <div class="title white"><?php the_field('our_services_title'); ?></div>
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
        <section class="single-services-price">
            <div class="wrap">
                <div class="title"><?php the_field('table_title'); ?></div>
                <?php
                $table = get_field('table');

                if ($table) {

                    echo '<div class="table-price services-price">';

                    if ($table['header']) {

                        echo '<div class="table-row top">';

                        $i = 0;
                        foreach ($table['header'] as $th) {

                            if ($i == 0) {
                                echo '<div class="lang">' . $th['c'] . '</div>';
                            } else {
                                echo '<div class="transl-to">' . $th['c'] . '</div>';
                            }
                            $i++;

                        }
                        echo '</div>';
                    }

                    foreach ($table['body'] as $tr) {

                        echo '<div class="table-row">';

                        $j = 0;
                        foreach ($tr as $td) {

                            if ($j == 0) {
                                echo '<div class="lang"><p>' . $td['c'] . '</p></div>';
                            } else {
                                echo '<div class="translate-price">' . $td['c'] . '</div>';
                            }
                            $j++;

                        }

                        echo '</div>';
                    }
                }
                ?>
                <script>
                    window.onload = function () {
                        var replaced_element = document.getElementsByClassName("translate-price");
                        for (var i = 0; i < replaced_element.length; i++) {
                            replaced_element[i].innerHTML = replaced_element[i].innerHTML.replace(new RegExp("от ", 'g'), "<span>от </span>");
                        }
                    }
                </script>
            </div>
            <div class="text">
                <p class="subtitle"><?php the_field('note_title'); ?></p>
                <?php the_field('note_description'); ?>
            </div>
            <style>
                strong {
                    font-weight: 700;
                    padding-bottom: 14px;
                    padding-top: 24px;
                    display: inline-block;
                }
            </style>
        </section>
        <section class="do-order">
            <?php $form_array = get_field('order1_form_container')[0];?>
            <div class="wrap">
                <div class="title"><?php the_field('form_title'); ?></div>
                <div class="order-form">
                    <div class="item">
                        <input type="text" placeholder="<?= $form_array['order1_form_placeholder_name'] ?>">
                        <input type="tel" placeholder="<?= $form_array['order1_form_placeholder_phone'] ?>">
                        <input type="email" placeholder="<?= $form_array['order1_form_placeholder_email'] ?>">
                    </div>
                    <div class="item">
                        <input type="file" placeholder="Номер телефона*">
                        <textarea name="" id="" cols="20" rows="5" placeholder="<?= $form_array['order1_form_placeholder_comment'] ?>"></textarea>
                    </div>
                </div>
                <input type="submit" value="<?= $form_array['order1_form_button_text'] ?>">
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