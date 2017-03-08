<?php
/**
 * Template Name: service-price
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
        <section class="text-translate">
            <div class="wrap">
                <div class="title"><?php the_field('table_main_title'); ?></div>
                <?php the_field('table_description'); ?>
                <div class="table-price">
                    <div class="table-row top forth">
                        <div class="lang"><?= get_field('table_titles')[0]['table_title_1']; ?></div>
                        <div class="transl-to"><?= get_field('table_titles')[0]['table_title_2']; ?></div>
                        <div class="transl-from"><?= get_field('table_titles')[0]['table_title_3']; ?></div>
                        <div class=""><?= get_field('table_titles')[0]['table_title_4']; ?></div>
                    </div>

                    <?php $table_rows = get_field('tables_items_list');
                    if ($table_rows) {
                        foreach ($table_rows as $table_row) {
                            ?>
                            <div class="table-row">
                                <div class="lang">
                                    <img src="<?= $table_row['table_item_image']; ?>" alt="">
                                    <p><?= $table_row['table_item_title']; ?></p>
                                </div>
                                <div class="translate-price"><span><?= $table_row['table_item_price1']; ?></span></div>
                                <div class="translate-price"><span><?= $table_row['table_item_price2']; ?></span></div>
                                <a href="<?php
                                if ($table_row['table_item_price3_link']['postid']) {
                                    the_permalink($table_row['table_item_price3_link']['postid']);
                                } else {
                                    echo $table_row['table_item_price3_link']['url'];
                                }
                                ?>" class="link-translate"><?= $table_row['table_item_price3_text']; ?></a>
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
                .table-price strong {
                    color: #5a5c5d;
                    font-size: .875rem;
                    line-height: 24px;
                    font-weight: 600;
                    width: 17%;
                }
            </style>
        </section>
        <section class="document-translate">
            <div class="wrap">
                <div class="title white"><?php the_field('documents_translation_title'); ?></div>
                <?php the_field('documents_translation_description'); ?>
                <style>
                    .document-translate .wrap li {
                        position: relative;
                        padding-left: 20px;
                        font-size: .875rem;
                        color: #f3f3f3;
                        padding-bottom: 15px;
                        font-weight: 300;
                        line-height: 24px;
                    }

                    .document-translate .wrap li:before {
                        content: '';
                        width: 8px;
                        height: 8px;
                        -webkit-border-radius: 50%;
                        border-radius: 50%;
                        display: block;
                        position: absolute;
                        top: 7px;
                        left: 0;
                        background: #0af;
                    }
                </style>
                <div class="table-price">
                    <div class="table-row top">
                        <?php if (!empty(get_field('d_t_table_titles_table_titles')[0]['table_title_1'])) { ?>
                            <div class="lang"><?= get_field('d_t_table_titles_table_titles')[0]['table_title_1']; ?></div>
                        <?php } ?>
                        <?php if (!empty(get_field('d_t_table_titles_table_titles')[0]['table_title_2'])) { ?>
                            <div class="transl-to"><?= get_field('d_t_table_titles_table_titles')[0]['table_title_2']; ?></div>
                        <?php } ?>
                        <?php if (!empty(get_field('d_t_table_titles_table_titles')[0]['table_title_3'])) { ?>
                            <div class="transl-from"><?= get_field('d_t_table_titles_table_titles')[0]['table_title_3']; ?></div>
                        <?php } ?>
                        <?php if (!empty(get_field('d_t_table_titles_table_titles')[0]['table_title_4'])) { ?>
                            <div class=""><?= get_field('d_t_table_titles_table_titles')[0]['table_title_4']; ?></div>
                        <?php } ?>
                    </div>

                    <?php $table_rows = get_field('d_t_table_items_tables_items_list');
                    if ($table_rows) {
                        foreach ($table_rows as $table_row) {
                            ?>
                            <div class="table-row">
                                <div class="lang">
                                    <img src="<?= $table_row['table_item_image']; ?>" alt="">
                                    <p><?= $table_row['table_item_title']; ?></p>
                                </div>
                                <div class="translate-price"><span><?= $table_row['table_item_price1']; ?></span></div>
                                <div class="translate-price"><span><?= $table_row['table_item_price2']; ?></span></div>
                                <a href="<?php
                                if ($table_row['table_item_price3_link']['postid']) {
                                    the_permalink($table_row['table_item_price3_link']['postid']);
                                } else {
                                    echo $table_row['table_item_price3_link']['url'];
                                }
                                ?>" class="link-translate"><?= $table_row['table_item_price3_text']; ?></a>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
            <style>
                .document-translate {
                    background: url(<?php the_field('documents_translation_background_image');?>) 50% 50% no-repeat;
                    background-size: cover;
                }
            </style>
        </section>
        <section class="apostil">
            <div class="wrap">
                <div class="title"><?php the_field('apostille_and_legalization_title'); ?></div>
                <div class="table-price services-price">
                    <div class="table-row top">
                        <?php if (!empty(get_field('a_a_l_table_titles_table_titles')[0]['table_title_1'])) { ?>
                            <div class="lang"><?= get_field('a_a_l_table_titles_table_titles')[0]['table_title_1']; ?></div>
                        <?php } ?>
                        <?php if (!empty(get_field('a_a_l_table_titles_table_titles')[0]['table_title_2'])) { ?>
                            <div class="transl-to"><?= get_field('a_a_l_table_titles_table_titles')[0]['table_title_2']; ?></div>
                        <?php } ?>
                        <?php if (!empty(get_field('a_a_l_table_titles_table_titles')[0]['table_title_3'])) { ?>
                            <div class="transl-from"><?= get_field('a_a_l_table_titles_table_titles')[0]['table_title_3']; ?></div>
                        <?php } ?>
                        <?php if (!empty(get_field('a_a_l_table_titles_table_titles')[0]['table_title_4'])) { ?>
                            <div class=""><?= get_field('a_a_l_table_titles_table_titles')[0]['table_title_4']; ?></div>
                        <?php } ?>
                    </div>

                    <?php $table_rows = get_field('a_a_l_table_items_tables_items_list');
                    if ($table_rows) {
                        foreach ($table_rows as $table_row) {
                            ?>
                            <div class="table-row">
                                <div class="lang">
                                    <img src="<?= $table_row['table_item_image']; ?>" alt="">
                                    <p><?= $table_row['table_item_title']; ?></p>
                                </div>
                                <div class="translate-price"><strong><?= $table_row['table_item_price1']; ?></strong>
                                </div>
                                <div class="translate-price"><strong><?= $table_row['table_item_price2']; ?></strong>
                                </div>
                                <a href="<?php
                                if ($table_row['table_item_price3_link']['postid']) {
                                    the_permalink($table_row['table_item_price3_link']['postid']);
                                } else {
                                    echo $table_row['table_item_price3_link']['url'];
                                }
                                ?>" class="link-translate"><?= $table_row['table_item_price3_text']; ?></a>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </section>
        <section class="extra-services">
            <div class="wrap">
                <div class="title white"><?php the_field('additional_services_title'); ?></div>
                <div class="table-price">
                    <div class="table-row top">
                        <?php if (!empty(get_field('a_s_table_titles_table_titles')[0]['table_title_1'])) { ?>
                            <div class="lang"><?= get_field('a_s_table_titles_table_titles')[0]['table_title_1']; ?></div>
                        <?php } ?>
                        <?php if (!empty(get_field('a_s_table_titles_table_titles')[0]['table_title_2'])) { ?>
                            <div class="transl-to"><?= get_field('a_s_table_titles_table_titles')[0]['table_title_2']; ?></div>
                        <?php } ?>
                        <?php if (!empty(get_field('a_s_table_titles_table_titles')[0]['table_title_3'])) { ?>
                            <div class="transl-from"><?= get_field('a_s_table_titles_table_titles')[0]['table_title_3']; ?></div>
                        <?php } ?>
                        <?php if (!empty(get_field('a_s_table_titles_table_titles')[0]['table_title_4'])) { ?>
                            <div class=""><?= get_field('a_s_table_titles_table_titles')[0]['table_title_4']; ?></div>
                        <?php } ?>
                    </div>

                    <?php $table_rows = get_field('a_s_table_items_tables_items_list');
                    if ($table_rows) {
                        foreach ($table_rows as $table_row) {
                            ?>
                            <div class="table-row">
                                <div class="lang">
                                    <img src="<?= $table_row['table_item_image']; ?>" alt="">
                                    <p><?= $table_row['table_item_title']; ?></p>
                                </div>
                                <?php if (!empty($table_row['table_item_price1'])) { ?>
                                    <div class="translate-price">
                                        <strong><?= $table_row['table_item_price1']; ?></strong>
                                    </div>
                                <?php } ?>
                                <?php if (!empty($table_row['table_item_price2'])) { ?>
                                    <div class="translate-price">
                                        <strong><?= $table_row['table_item_price2']; ?></strong>
                                    </div>
                                <?php } ?>
                                <a href="<?php
                                if ($table_row['table_item_price3_link']['postid']) {
                                    the_permalink($table_row['table_item_price3_link']['postid']);
                                } else {
                                    echo $table_row['table_item_price3_link']['url'];
                                }
                                ?>" class="link-translate"><?= $table_row['table_item_price3_text']; ?></a>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
                <?php if (get_field('note_check_display')) { ?>
                    <div class="text">
                        <p class="subtitle"><?php the_field('note_title'); ?></p>
                        <?php the_field('note_description'); ?>
                    </div>
                <?php } ?>
            </div>
            <style>
                .extra-services {
                    background: url(<?php the_field('note_background_image');?>) 50% 50% no-repeat;
                    background-size: cover;
                }
            </style>
        </section>
        <section class="assessment-work">
            <div class="wrap">
                <form id="static-form" method="post" accept-charset="utf-8" enctype="multipart/form-data"
                      action="<?= get_template_directory_uri() ?>/sendemail.php">
                    <div class="title"><?php the_field('form_title'); ?></div>
                    <div class="assessment-form">
                        <div class="item">
                            <input type="hidden" name="required-field" value="phone">
                            <input type="hidden" name="source"
                                   value="<?= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>">
                            <input type="hidden" name="order" value="Стоимость переводов">
                            <input name="name" type="text" placeholder="<?php the_field('form_placeholder1'); ?>">
                            <input name="email" type="email" placeholder="<?php the_field('form_placeholder2'); ?>">
                            <select name="translate_from" id="">
                                <?php $translate_from = get_field('form_translate_from');
                                $i = 0;
                                if ($translate_from) {
                                    foreach ($translate_from as $translate_from_item) {
                                        if ($i == 0) {
                                            ?>
                                            <option disabled selected
                                                    value="<?= $translate_from_item['form_select_item'] ?>"
                                                    style="display: none">
                                                <?= $translate_from_item['form_select_item'] ?>
                                            </option>
                                            <?php
                                            $i++;
                                        } else {
                                            ?>
                                            <option value="<?= $translate_from_item['form_select_item'] ?>">
                                                <?= $translate_from_item['form_select_item'] ?>
                                            </option>
                                            <?php
                                        }
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <div class="item">
                            <input required name="phone" type="tel" placeholder="<?php the_field('form_placeholder3'); ?>">
                            <select name="date" id="">
                                <?php $translate_from = get_field('form_time');
                                $i = 0;
                                if ($translate_from) {
                                    foreach ($translate_from as $translate_from_item) {
                                        if ($i == 0) {
                                            ?>
                                            <option disabled selected
                                                    value="<?= $translate_from_item['form_select_item'] ?>"
                                                    style="display: none">
                                                <?= $translate_from_item['form_select_item'] ?>
                                            </option>
                                            <?php
                                            $i++;
                                        } else {
                                            ?>
                                            <option value="<?= $translate_from_item['form_select_item'] ?>">
                                                <?= $translate_from_item['form_select_item'] ?>
                                            </option>
                                            <?php
                                        }
                                    }
                                }
                                ?>
                            </select>
                            <select name="translate_to" id="">
                                <?php $translate_from = get_field('form_translate_to');
                                $i = 0;
                                if ($translate_from) {
                                    foreach ($translate_from as $translate_from_item) {
                                        if ($i == 0) {
                                            ?>
                                            <option disabled selected
                                                    value="<?= $translate_from_item['form_select_item'] ?>"
                                                    style="display: none">
                                                <?= $translate_from_item['form_select_item'] ?>
                                            </option>
                                            <?php
                                            $i++;
                                        } else {
                                            ?>
                                            <option value="<?= $translate_from_item['form_select_item'] ?>">
                                                <?= $translate_from_item['form_select_item'] ?>
                                            </option>
                                            <?php
                                        }
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <div class="item">
                            <input name="file_attach" type="file" placeholder="Номер телефона*">
                            <textarea name="text" id="" cols="20" rows="5"
                                      placeholder="<?php the_field('form_placeholder4'); ?>"></textarea>
                        </div>
                    </div>
                    <input id="submit-static-form" type="submit" value="<?php the_field('form_button_text'); ?>">
                </form>
            </div>
            <style>
                .assessment-work {
                    background: url(<?php the_field('form_background_image');?>) 50% no-repeat;
                    background-size: cover;
                }
            </style>
        </section>
    </main>
    <!-- End content -->

<?php get_footer(); ?>