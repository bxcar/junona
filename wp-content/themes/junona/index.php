<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package junona
 */

?>

<?php get_header(); ?>

<!-- Content -->
<main>
    <section class="top-block top-front">
        <div class="owl-carousel carousel-1">
            <?php $slides = get_field('slides');
            if ($slides) {
                foreach ($slides as $slide) {
                    ?>
                    <div class="item">
                        <img src="<?= $slide['slide_image'] ?>" alt="">
                        <div class="carousel-content">
                            <p><?= $slide['slide_top_title'] ?></p>
                            <h2><?= $slide['slide_bottom_title'] ?></h2>
                            <a href="<?php
                            if ($slide['slide_button_link']['postid']) {
                                the_permalink($slide['slide_button_link']['postid']);
                            } else {
                                echo $slide['slide_button_link']['url'];
                            }
                            ?>"><?= $slide['slide_button_text'] ?></a>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </section>
    <section class="our-help">
        <div class="wrap">
            <div class="title"><?php the_field('offer_title'); ?></div>
            <div class="help-item">
                <?php $offers = get_field('offers');
                if ($offers) {
                    foreach ($offers as $offer) {
                        ?>
                        <div class="item">
                            <img src="<?= $offer['offer_image_link'] ?>" alt="">
                            <p><?= $offer['offer_text'] ?></p>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </section>
    <section class="assessment-work">
        <div class="wrap">
            <div class="title"><?php the_field('work_assessment_title'); ?></div>
            <div class="assessment-form">
                <div class="item">
                    <input type="text" placeholder="<?php the_field('w_a_placeholder_name'); ?>">
                    <input type="email" placeholder="<?php the_field('w_a_placeholder_email'); ?>">
                    <select name="translate from" id="">
                        <?php $translate_from = get_field('w_a_translate_from');
                        $i = 0;
                        if ($translate_from) {
                            foreach ($translate_from as $translate_from_item) {
                                if ($i == 0) {
                                    ?>
                                    <option disabled selected
                                            value="<?= $translate_from_item['w_a_translate_from_item'] ?>"
                                            style="display: none">
                                        <?= $translate_from_item['w_a_translate_from_item'] ?>
                                    </option>
                                    <?php
                                    $i++;
                                } else {
                                    ?>
                                    <option value="<?= $translate_from_item['w_a_translate_from_item'] ?>">
                                        <?= $translate_from_item['w_a_translate_from_item'] ?>
                                    </option>
                                    <?php
                                }
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="item">
                    <input type="tel" placeholder="<?php the_field('w_a_placeholder_phone'); ?>">
                    <select name="date" id="">
                        <?php $translate_to = get_field('w_a_time');
                        $i = 0;
                        if ($translate_to) {
                            foreach ($translate_to as $translate_to_item) {
                                if ($i == 0) {
                                    ?>
                                    <option disabled selected
                                            value="<?= $translate_to_item['w_a_time_punkt'] ?>"
                                            style="display: none">
                                        <?= $translate_to_item['w_a_time_punkt'] ?>
                                    </option>
                                    <?php
                                    $i++;
                                } else {
                                    ?>
                                    <option value="<?= $translate_to_item['w_a_time_punkt'] ?>">
                                        <?= $translate_to_item['w_a_time_punkt'] ?>
                                    </option>
                                    <?php
                                }
                            }
                        }
                        ?>
                    </select>
                    <select name="translate to" id="">
                        <?php $translate_to = get_field('w_a_translate_to');
                        $i = 0;
                        if ($translate_to) {
                            foreach ($translate_to as $translate_to_item) {
                                if ($i == 0) {
                                    ?>
                                    <option disabled selected
                                            value="<?= $translate_to_item['w_a_translate_to'] ?>"
                                            style="display: none">
                                        <?= $translate_to_item['w_a_translate_to'] ?>
                                    </option>
                                    <?php
                                    $i++;
                                } else {
                                    ?>
                                    <option value="<?= $translate_to_item['w_a_translate_to'] ?>">
                                        <?= $translate_to_item['w_a_translate_to'] ?>
                                    </option>
                                    <?php
                                }
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="item">
                    <input type="file" placeholder="Номер телефона*">
                    <textarea name="" id="" cols="20" rows="5"
                              placeholder="<?php the_field('w_a_placeholder_comments'); ?>"></textarea>
                </div>
            </div>
            <input type="submit" value="<?php the_field('w_a_submit_button_text'); ?>">
        </div>
        <style>
            .assessment-work, .do-order {
                background: url(<?php the_field('w_a_background_image'); ?>) 50% no-repeat;
                background-size: cover;
            }
        </style>
    </section>
    <section class="advanteges">
        <div class="elem">
            <div class="wrap">
                <div class="title"><?php the_field('adv_title'); ?></div>
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
        <div class="elem bg"></div>
        <style>
            .advanteges .elem.bg {
                background: url(<?php the_field('adv_right_image'); ?>) 50% no-repeat;
                background-size: cover;
            }
        </style>
    </section>
    <section class="specialization">
        <div class="wrap">
            <div class="title"><?php the_field('specializations_title'); ?></div>
            <div class="owl-carousel carousel-2">
                <?php $specializations = get_field('specializations');
                if ($specializations) {
                    $i = 0;
                    $final_iteration = count($specializations);
                    foreach ($specializations as $specialization) {
                        if (($i % 2) == 0) {
                            ?>
                            <div class="item">
                        <?php } ?>
                        <div class="link">
                            <img src="<?= $specialization['specializations_image_item'] ?>" alt="">
                            <a href="<?php
                            if ($specialization['specializations_link_item']['postid']) {
                                the_permalink($specialization['specializations_link_item']['postid']);
                            } else {
                                echo $specialization['specializations_link_item']['url'];
                            }
                            ?>">
                                <?= $specialization['specializations_text_item'] ?>
                            </a>
                        </div>
                        <?php if ((($i % 2) == 1) || ($i == ($final_iteration - 1))) {
                            ?>
                            </div>
                        <?php }
                        $i++;
                    }
                }
                ?>
            </div>
        </div>
    </section>
    <section class="how-we-work">
        <div class="wrap">
            <div class="title">Как мы работаем</div>
            <div class="item-wrap">
                <?php $how_we_works = get_field('how_we_works');
                if ($how_we_works) {
                    foreach ($how_we_works as $how_we_work) {
                        ?>
                        <div class="item">
                            <div class="top-img">
                                <img src="<?= $how_we_work['h_w_w_image_item'] ?>" alt="">
                            </div>
                            <p><?= $how_we_work['h_w_w_title_item'] ?></p>
                            <div class="bottom-img">
                                <?php foreach ($how_we_work['h_w_w_subitem'] as $subitem) {
                                    ?>
                                    <div>
                                        <img src="<?= $subitem['h_w_w_subitem_image'] ?>" alt="">
                                        <p><?= $subitem['h_w_w_subitem_text'] ?></p>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </section>
    <section class="about-us">
        <div class="elem bg"></div>
        <div class="elem">
            <div class="wrap">
                <div class="title"><?php the_field('about_title'); ?></div>
                <div class="about-text">
                    <?php the_field('about_description'); ?>
                    <a href="<?php
                    if (get_field('about_button_link')['postid']) {
                        the_permalink(get_field('about_button_link')['postid']);
                    } else {
                        echo get_field('about_button_link')['url'];
                    }
                    ?>" class="base-btn"><?php the_field('about_button_text'); ?></a>
                </div>
            </div>
        </div>
    </section>
    <section class="sertification">
        <div class="wrap">
            <div class="title">Работаем в соответствии с<br>
                сертификатами качества:
            </div>
            <div class="sertification-item">
                <div class="item"><img src="<?php bloginfo('template_url'); ?>/img/sert-1.png" alt=""></div>
                <div class="item"><img src="<?php bloginfo('template_url'); ?>/img/sert-2.png" alt=""></div>
                <div class="item"><img src="<?php bloginfo('template_url'); ?>/img/sert-3.png" alt=""></div>
            </div>
        </div>
    </section>
    <section class="review">
        <div class="wrap">
            <div class="title">Отзывы</div>
            <div class="owl-carousel carousel-3">
                <div class="item">
                    <div class="img-block">
                        <img src="<?php bloginfo('template_url'); ?>/img/review-img.png" alt="">
                    </div>
                    <div class="name">Петров Сергей</div>
                    <div class="position">Директор брендингового агенства</div>
                    <div class="text">Принцип восприятия непредвзято создает паллиативный интеллект, условно. Концепция
                        ментально оспособляет закон внешнего мира. Сомнение раскладывает на элементы неоднозначный
                        структурализм.
                    </div>
                </div>
                <div class="item">
                    <div class="img-block">
                        <img src="<?php bloginfo('template_url'); ?>/img/review-img.png" alt="">
                    </div>
                    <div class="name">Петров Сергей</div>
                    <div class="position">Директор брендингового агенства</div>
                    <div class="text">Принцип восприятия непредвзято создает паллиативный интеллект, условно. Концепция
                        ментально оспособляет закон внешнего мира. Сомнение раскладывает на элементы неоднозначный
                        структурализм.
                    </div>
                </div>
                <div class="item">
                    <div class="img-block">
                        <img src="<?php bloginfo('template_url'); ?>/img/review-img.png" alt="">
                    </div>
                    <div class="name">Петров Сергей</div>
                    <div class="position">Директор брендингового агенства</div>
                    <div class="text">Принцип восприятия непредвзято создает паллиативный интеллект, условно. Концепция
                        ментально оспособляет закон внешнего мира. Сомнение раскладывает на элементы неоднозначный
                        структурализм.
                    </div>
                </div>
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
    <section class="news-front">
        <div class="wrap">
            <div class="title">Новости</div>

            <div class="news-item">
                <div class="item">
                    <img src="<?php bloginfo('template_url'); ?>/img/news-1.jpg" alt="">
                    <div class="news-title">Прошла конференция переводчикав</div>
                    <div class="sub-info">
                        <div class="date"><i class="fa fa-calendar-o" aria-hidden="true"></i>24 сентября</div>
                        <div class="comment"><i class="fa fa-bullhorn" aria-hidden="true"></i>0 комментариев</div>
                    </div>
                    <div class="text">
                        Бюро переводов “Юнона” было организовано в 2006 году и с тех пор компания сумела стать одним из
                        лидеров на рынке переводов Киева и Украины. Сейчас бюро предоставляет свои услуги перевода
                        украинским.
                    </div>
                    <a href="" class="link">Читать далее</a>
                </div>
                <div class="item">
                    <img src="<?php bloginfo('template_url'); ?>/img/news-2.jpg" alt="">
                    <div class="news-title">Переведена новая книга Патрика Грина</div>
                    <div class="sub-info">
                        <div class="date"><i class="fa fa-calendar-o" aria-hidden="true"></i>24 сентября</div>
                        <div class="comment"><i class="fa fa-bullhorn" aria-hidden="true"></i>0 комментариев</div>
                    </div>
                    <div class="text">
                        Бюро переводов “Юнона” было организовано в 2006 году и с тех пор компания сумела стать одним из
                        лидеров на рынке переводов Киева и Украины. Сейчас бюро предоставляет свои услуги перевода
                        украинским.
                    </div>
                    <a href="" class="link">Читать далее</a>
                </div>
            </div>
        </div>
    </section>
    <section class="blog">
        <div class="wrap">
            <div class="title">Блог</div>

            <div class="blog-item">
                <div class="item">
                    <img src="<?php bloginfo('template_url'); ?>/img/blog-1.jpg" alt="">
                    <div class="blog-title">Как выбрать бюро переводов</div>
                    <div class="text">
                        Бюро переводов “Юнона” было организовано в 2006 году и с тех пор компания сумела стать одним из
                        лидеров на рынке переводов Киева и Украины. Сейчас бюро предоставляет свои услуги перевода
                        украинским.
                    </div>
                    <a href="" class="link">Читать далее</a>
                </div>
                <div class="item">
                    <img src="<?php bloginfo('template_url'); ?>/img/blog-2.jpg" alt="">
                    <div class="blog-title">Прошла конференция переводчикав</div>
                    <div class="text">
                        Бюро переводов “Юнона” было организовано в 2006 году и с тех пор компания сумела стать одним из
                        лидеров на рынке переводов Киева и Украины. Сейчас бюро предоставляет свои услуги перевода
                        украинским.
                    </div>
                    <a href="" class="link">Читать далее</a>
                </div>
                <div class="item">
                    <img src="<?php bloginfo('template_url'); ?>/img/blog-3.jpg" alt="">
                    <div class="blog-title">Переведена новая книга Патрика Грина</div>
                    <div class="text">
                        Бюро переводов “Юнона” было организовано в 2006 году и с тех пор компания сумела стать одним из
                        лидеров на рынке переводов Киева и Украины. Сейчас бюро предоставляет свои услуги перевода
                        украинским.
                    </div>
                    <a href="" class="link">Читать далее</a>
                </div>
            </div>
        </div>
    </section>
    <section class="address-info">
        <div class="addres-wrap">
            <div class="item logo">
                <img src="<?php bloginfo('template_url'); ?>/img/logo-blue.png" alt="">
                <p>Бюро переводов “Юнона” было организовано в 2006 году и с тех пор компания сумела стать одним из
                    лидеров на рынке переводов Киева и Украины. Сейчас бюро предоставляет свои услуги перевода
                    украинским и иностранным компаниям, банкам и государственным организациям.
                </p>
            </div>
            <div class="item location">
                <div class="box">
                    <img src="<?php bloginfo('template_url'); ?>/img/location-img.png" alt="">
                    <div>
                        <p>Адрес:</p>
                        <span>г. Киев, ул. Комарова 45</span>
                    </div>
                    <div>
                        <p>Телефон:</p>
                        <span>+3 8(067) 56 56 356</span>
                    </div>
                    <div>
                        <p>E-mail:</p>
                        <span>example@gmail.com</span>
                    </div>
                </div>
            </div>
            <div class="item location">
                <div class="box">
                    <img src="<?php bloginfo('template_url'); ?>/img/location-img.png" alt="">
                    <div>
                        <p>Адрес:</p>
                        <span>г. Львов, ул. Комарова 45</span>
                    </div>
                    <div>
                        <p>Телефон:</p>
                        <span>+3 8(067) 56 56 356</span>
                    </div>
                    <div>
                        <p>E-mail:</p>
                        <span>example@gmail.com</span>
                    </div>
                </div>
            </div>
            <div class="item location">
                <div class="box">
                    <img src="<?php bloginfo('template_url'); ?>/img/location-img.png" alt="">
                    <div>
                        <p>Адрес:</p>
                        <span>г. Одесса, ул. Комарова 45</span>
                    </div>
                    <div>
                        <p>Телефон:</p>
                        <span>+3 8(067) 56 56 356</span>
                    </div>
                    <div>
                        <p>E-mail:</p>
                        <span>example@gmail.com</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="custom-g-map">
        <div id="map"></div>
    </div>
    <div class="subscribe">
        <div class="wrap-subscribe">
            <div class="title">Подпишитесь на наши новости:</div>
            <input type="email" placeholder="E-mail">
            <input type="submit" class="base-btn" value="ПОДПИСАТЬСЯ">
        </div>
    </div>
</main>
<!-- End content -->

<?php get_footer(); ?>
