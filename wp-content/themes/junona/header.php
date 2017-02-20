<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package junona
 */

?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Template Basic Images Start -->
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/img/favicon/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/img/favicon/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72"
          href="<?php bloginfo('template_url'); ?>/img/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114"
          href="<?php bloginfo('template_url'); ?>/img/favicon/apple-touch-icon-114x114.png">
    <!-- Template Basic Images End -->

    <!-- Custom Browsers Color Start -->
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#000">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#000">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#000">
    <!-- Custom Browsers Color End -->
    <?php wp_head(); ?>
    <script>
        jQuery(window).load(function() {
            jQuery('.lang .jq-selectbox__dropdown').click(function() {
                window.location = jQuery('#lang-select').val();
            });
            jQuery('#lang-select').on('change', function () {
                window.location = $(this).val();
            });
        });
    </script>
</head>

<body>

<!-- Custom HTML -->
<!-- Header -->
<header>
    <div class="wrap">
        <div class="header-top">
            <div class="social">
                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            </div>
            <div class="right-top">
                <div class="phone">
                    <a href="tel:380663455446"><i class="fa fa-phone" aria-hidden="true"></i>+38 (066) 345 54 46<i
                                class="fa fa-angle-down" aria-hidden="true"></i></a>
                    <div class="more-phone">
                        <a href="tel:380663455446">+38 (066) 345 54 46</a>
                        <a href="tel:380663455446">+38 (066) 345 54 46</a>
                    </div>
                </div>
                <div class="lang">
                    <?php
                    function language_selector()
                    {
                        $languages = icl_get_languages('skip_missing=0&orderby=code');
                        if (!empty($languages)) {
                            foreach ($languages as $l) {
                                if ($l['language_code'] == 'uk') {
                                    $l['language_code'] = 'UA';
                                }
                                if ($l['active']) {
                                    echo '<option selected value="' . $l['url'] . '"><a href="' . $l['url'] . '">' . strtoupper($l['language_code']) . '</a></option>';
                                } else {
                                    echo '<option value="' . $l['url'] . '"><a href="' . $l['url'] . '">' . strtoupper($l['language_code']) . '</a></option>';
                                }
                            }
                        }
                    }

                    ?>
                    <select name="" id="lang-select">
                        <?php language_selector(); ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="logo"><a href="index.html"><img src="<?php bloginfo('template_url'); ?>/img/logo.png"
                                                        alt=""></a></div>
            <div class="menu">
                <ul>
                    <li><a href="index.html">Главная</a></li>
                    <li><span>О СЕРВИСЕ</span>
                        <ul class="submenu">
                            <li><a href="about-service.html">О сервисе</a></li>
                            <li><a href="#">Бюро переводов Киев</a></li>
                            <li><a href="#">Бюро переводов Херсон</a></li>
                            <li><a href="faq.html">Вопросы-Ответы</a></li>
                            <li><a href="review.html">Отзывы</a></li>
                            <li><a href="blog.html">Блог</a></li>
                            <li><a href="special-offer.html">Специльное предложение</a></li>
                            <li><a href="news.html">Новости</a></li>
                        </ul>
                    </li>
                    <li><span>Услуги</span>
                        <ul class="submenu">
                            <li><a href="services.html">Все услуги</a></li>
                            <li><a href="service-spoken-translate.html">Устный перевод</a></li>
                            <li><a href="service-write-translation.html">Письменный перевод</a></li>
                            <li><a href="service-visa-support.html">Визовая поддержка</a></li>
                            <li><a href="service-lesson-skype.html">Уроки по Скайпу</a></li>
                            <li><a href="service-price.html">Стоимость</a></li>
                        </ul>
                    </li>
                    <li><span>Языки</span>
                        <ul class="submenu">
                            <li><a href="lang.html">Все языки</a></li>
                            <li><a href="lang-eng-translation.html">Английский перевод</a></li>
                            <li><a href="lang-bulg-translation.html">Болгарский перевод</a></li>
                            <li><a href="lang-grec-translation.html">Греческий перевод</a></li>
                            <li><a href="lang-esp-translation.html">Испанский перевод</a></li>
                            <li><a href="lang-ital-translation.html">Итальянский перевод</a></li>
                            <li><a href="lang-litv-translation.html">Литовский перевод</a></li>
                            <li><a href="lang-mold-translation.html">Молдавский перевод</a></li>
                            <li><a href="lang-deu-translation.html">Немецкий перевод</a></li>
                            <li><a href="lang-port-translation.html">Португальский перевод</a></li>
                            <li><a href="lang-eng-translation.html">Польский перевод</a></li>
                            <li><a href="lang-uzb-translation.html">Узбекский перевод</a></li>
                            <li><a href="lang-ukr-translation.html">Украинский перевод</a></li>
                            <li><a href="lang-zhech-translation.html">Чешский перевод</a></li>
                            <li><a href="lang-fra-translation.html">Французский перевод</a></li>
                            <li><a href="lang-jap-translation.html">Японский перевод</a></li>
                            <li><a href="lang-eng-translation.html">Перевод редких языков</a></li>
                        </ul>
                    </li>
                    <li><span>Специализации</span>
                        <ul class="submenu">
                            <li><a href="specialization.html">Все специализации</a></li>
                            <li><a href="specialization-website-local.html">Перевод и локализация вебсайтов</a></li>
                            <li><a href="specialization-literary-translation.html">Литературный перевод</a></li>
                            <li><a href="">Нефтегазовый перевод</a></li>
                            <li><a href="">IT перевод</a></li>
                            <li><a href="">Перевод чертежей</a></li>
                            <li><a href="">Медицинский перевод</a></li>
                            <li><a href="">Технический перевод</a></li>
                            <li><a href="">Юридический перевод</a></li>
                        </ul>
                    </li>
                    <li><span>Сотрудничество</span>
                        <ul class="submenu">
                            <li><a href="cooperation-buro.html">Бюро переводов</a></li>
                            <li><a href="cooperation.html">Партнерам</a></li>
                            <li><a href="cooperation-translators.html">Переводчикам</a></li>
                        </ul>
                    </li>
                    <li><a href="contacts.html">Контакты</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
<!-- End header -->
