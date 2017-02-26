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
                <!--<div class="table-price services-price">
                    <div class="table-row top">
                        <div class="lang">услуга</div>
                        <div class="transl-to">Перевод
                            стандартного
                            документа
                        </div>
                        <div class="transl-to">Перевод текста
                            повышенной
                            сложности
                        </div>
                        <div class="transl-to">Перевод текста
                            повышенной
                            сложности
                        </div>
                    </div>
                    <div class="table-row">
                        <div class="lang">
                            <p>Перевод официального документа</p>
                        </div>
                        <div class="translate-price">60 грн</div>
                        <div class="translate-price">78 грн</div>
                        <div class="translate-price">90 грн</div>
                    </div>
                    <div class="table-row">
                        <div class="lang">
                            <p>Перевод текста</p>
                        </div>
                        <div class="translate-price">60 грн</div>
                        <div class="translate-price">78 грн</div>
                        <div class="translate-price">90 грн</div>
                    </div>
                    <div class="table-row">
                        <div class="lang">
                            <p>Вычитка готового перевода </p>
                        </div>
                        <div class="translate-price"><span>от</span> 40 грн</div>
                        <div class="translate-price"><span>от</span> 40 грн</div>
                        <div class="translate-price"><span>от</span> 40 грн</div>
                    </div>
                    <div class="table-row">
                        <div class="lang">
                            <p>Заверение перевода подписью
                                нотариуса</p>
                        </div>
                        <div class="translate-price">120 грн</div>
                        <div class="translate-price">120 грн</div>
                        <div class="translate-price">120 грн</div>
                    </div>
                    <div class="table-row">
                        <div class="lang">
                            <p>Заверение перевода печатью бюро
                                переводов</p>
                        </div>
                        <div class="translate-price">15 грн</div>
                        <div class="translate-price">15 грн</div>
                        <div class="translate-price">15 грн</div>
                    </div>
                    <div class="table-row">
                        <div class="lang">
                            <p>Устный перевод на встречах</p>
                        </div>
                        <div class="translate-price">145 грн</div>
                        <div class="translate-price">200 грн</div>
                        <div class="translate-price">250 грн</div>
                    </div>
                    <div class="table-row">
                        <div class="lang">
                            <p>Устный перевод по Скайпу</p>
                        </div>
                        <div class="translate-price">135 грн</div>
                        <div class="translate-price">195 грн</div>
                        <div class="translate-price">255 грн</div>
                    </div>-->
            </div>
            <div class="text">
                <p class="subtitle">Примечание:</p>
                <p>Стоимость указана в гривнах за 1800 знаков c пробелами. </p>
                <p><span class="bold">Перевод стандартного документа:</span></p>
                <p>Свидетельства о рождении, браке, разводе, смерти; справки о несудимости, справки с места работы,
                    справки о зарплате, справки о состоянии счета в банке, дипломы (без приложения).</p>
                <p><span class="bold">Перевод текста повышенной сложности:</span></p>
                <p>Договора, уставы компаний, узкоспециальные тексты и пр. документы, имеющие оригинальные
                    неповторяющийся текст.</p>
                <p><span class="bold">Перевод текста высокой сложности:</span></p>
                <p>Узкоспециализированные тексты, тексты инновационного характера , технический перевод, перевод
                    чертежей, инструкций т.д.</p>
                <p>
                    <span class="bold">Минимальный заказ – 1 час. Надбавка за срочность (в течение 2х часов): +100% </span>
                </p>
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