<?php
/**
 * Template Name: about-service
 */
?>

<?php get_header(); ?>

<!-- Content -->
<main>
    <section class="top-block inside-top">
        <h1><?php the_field('header_title'); ?></h1>
        <div class="breadcrumb">
            <ul>
                <li><a href="index.html">Главная</a></li>
                <li><span>О сервисе</span></li>
            </ul>
        </div>
        <style>
            .inside-top {
                background: url(<?php the_field('background_image');?>) 50% 50% no-repeat;
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
    <section class="review about-services-review">
        <div class="wrap">
            <div class="title white">Отзывы</div>
            <div class="owl-carousel carousel-3">
                <div class="item">
                    <div class="img-block">
                        <img src="img/review-img.png" alt="">
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
                        <img src="img/review-img.png" alt="">
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
                        <img src="img/review-img.png" alt="">
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
    <section class="work-all-world">
        <div class="title white">Работаем со всем миром</div>
        <img src="img/work-all-world.jpg" alt="">
    </section>
    <section class="assessment-work about-services">
        <div class="wrap">
            <div class="title">Давайте обсудим Ваш проект</div>
            <div class="assessment-form">
                <div class="item">
                    <input type="text" placeholder="Ваше имя*">
                    <input type="email" placeholder="E-mail">
                    <select name="translate from" id="">
                        <option disabled selected value="" style="display: none">Перевод с</option>
                        <option value="eng">английский</option>
                        <option value="deu">немецкий</option>
                        <option value="fra">французкий</option>
                        <option value="ukr">украинский</option>
                        <option value="rus">русский</option>
                    </select>
                </div>
                <div class="item">
                    <input type="tel" placeholder="Номер телефона*">
                    <select name="date" id="">
                        <option disabled selected value="" style="display: none">Сроки</option>
                        <option value="срочно">срочно</option>
                        <option value="5">5 дней</option>
                        <option value="10">10 дней</option>
                        <option value="15">15 дней</option>
                    </select>
                    <select name="translate to" id="">
                        <option disabled selected value="" style="display: none">Перевод на</option>
                        <option value="eng">английский</option>
                        <option value="deu">немецкий</option>
                        <option value="fra">французкий</option>
                        <option value="ukr">украинский</option>
                        <option value="rus">русский</option>
                    </select>
                </div>
                <div class="item">
                    <input type="file" placeholder="Номер телефона*">
                    <textarea name="" id="" cols="20" rows="5" placeholder="Комментарии"></textarea>
                </div>
            </div>
            <input type="submit">

        </div>
    </section>
    <section class="address-info">
        <div class="addres-wrap">
            <div class="item logo">
                <img src="img/logo-blue.png" alt="">
                <p>Бюро переводов “Юнона” было организовано в 2006 году и с тех пор компания сумела стать одним из
                    лидеров на рынке переводов Киева и Украины. Сейчас бюро предоставляет свои услуги перевода
                    украинским и иностранным компаниям, банкам и государственным организациям.
                </p>
            </div>
            <div class="item location">
                <div class="box">
                    <img src="img/location-img.png" alt="">
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
                    <img src="img/location-img.png" alt="">
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
                    <img src="img/location-img.png" alt="">
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
