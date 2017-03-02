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
        jQuery(window).load(function () {
            jQuery('.lang .jq-selectbox__dropdown').click(function () {
                window.location = jQuery('#lang-select').val();
            });
            jQuery('#lang-select').on('change', function () {
                window.location = $(this).val();
            });

            jQuery(".jq-file__name").html('Файл не вибрано');

            /*$("header .header-top .right-top .phone .more-phone").mouseover(function () {
             $("header .header-top .right-top .phone .more-phone").css("height", "auto");
             }).mouseout(function () {
             $("header .header-top .right-top .phone .more-phone").css("height", "");
             });*/
        });
    </script>
    <style>
        .submenu .submenu .submenu {
            position: absolute !important;
            top: 100px !important;
            z-index: 100;
            left: 90% !important;
        }

        header .header-bottom .menu > ul > li .submenu .sub-toggle {
            display: inline !important;
            float: right;
            margin-top: 5px;
            color: #333;
        }

        header .header-bottom .menu > ul > li .submenu li {
            padding: 0 10px;
        }
    </style>
</head>

<body>

<!-- Custom HTML -->
<!-- Header -->
<header>
    <div class="wrap">
        <div class="header-top">

            <div class="social">
                <?php if (get_field('header_social_display_check', 'option')) { ?>
                    <?php
                    $header_socials = get_field('header_socials', 'option');
                    if ($header_socials) {
                        foreach ($header_socials as $header_social) {
                            ?>
                            <a href="<?= $header_social['header_social_item_link'] ?>">
                                <i class="fa <?= $header_social['header_social_item_image'] ?>" aria-hidden="true"></i>
                            </a>
                            <?php
                        }
                    }
                    ?>
                <?php } ?>
            </div>
            <div class="right-top">
                <div class="phone">
                    <?php
                    $header_phones = get_field('header_phone_numbers', 'option');
                    $i = 0;
                    $ix = count($header_phones);
                    if ($header_phones) {
                        foreach ($header_phones as $header_phone) {
                            if ($i == 0) {
                                ?>
                                <a href="tel:<?= $header_phone['header_phone_number_format_item']; ?>"><i
                                            class="fa fa-phone"
                                            aria-hidden="true"></i><?= $header_phone['header_phone_number_item']; ?><i
                                            class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <?php } else {
                                if ($i == 1) { ?>
                                    <div class="more-phone">
                                <?php } ?>
                                <a href="tel:<?= $header_phone['header_phone_number_format_item']; ?>">
                                    <?= $header_phone['header_phone_number_item']; ?>
                                </a>
                                <?php if ($i == ($ix - 1)) { ?>
                                    </div>
                                    <?php
                                }
                            }
                            $i++;
                        }
                    }
                    ?>
                </div>
                <div class="lang">
                    <?php
                    function language_selector()
                    {
                        $languages = icl_get_languages('skip_missing=1'); /*&orderby=code*/
                        if (!empty($languages)) {
                            foreach ($languages as $l) {
                                if ($l['language_code'] == 'uk') {
                                    $l['language_code'] = 'UA';
                                }
                                if ($l['active']) {
                                    if (basename((get_current_template()) == 'search-news.php') || (basename(get_current_template()) == 'search-blog.php')) {
                                        if (stristr($l['url'], '?s=')) {
                                            echo '<option selected value="' . $l['url'] . '&post_type=' . $_GET['post_type'] . '"><a href="' . $l['url'] . '">' . strtoupper($l['language_code']) . '</a></option>';
                                        } else {
                                            echo '<option selected value="' . $l['url'] . '?s=' . $_GET['s'] . '&post_type=' . $_GET['post_type'] . '"><a href="' . $l['url'] . '">' . strtoupper($l['language_code']) . '</a></option>';
                                        }
                                    } else if ((get_post_type() == 'news') || (get_post_type() == 'blog')) {
                                        echo '<option selected value="' . $l['url'] . '?post_type=' . get_post_type() . '"><a href="' . $l['url'] . '">' . strtoupper($l['language_code']) . '</a></option>';
                                    } else {
                                        echo '<option selected value="' . $l['url'] . '"><a href="' . $l['url'] . '">' . strtoupper($l['language_code']) . '</a></option>';
                                    }

                                } else {
                                    if (basename((get_current_template()) == 'search-news.php') || (basename(get_current_template()) == 'search-blog.php')) {
                                        if (stristr($l['url'], '?s=')) {
                                            echo '<option value="' . $l['url'] . '&post_type=' . $_GET['post_type'] . '"><a href="' . $l['url'] . '">' . strtoupper($l['language_code']) . '</a></option>';
                                        } else {
                                            echo '<option value="' . $l['url'] . '?s=' . $_GET['s'] . '&post_type=' . $_GET['post_type'] . '"><a href="' . $l['url'] . '">' . strtoupper($l['language_code']) . '</a></option>';
                                        }
                                    } else if ((get_post_type() == 'news') || (get_post_type() == 'blog')) {
                                        echo '<option value="' . $l['url'] . '?post_type=' . get_post_type() . '"><a href="' . $l['url'] . '">' . strtoupper($l['language_code']) . '</a></option>';
                                    } else {
                                        echo '<option value="' . $l['url'] . '"><a href="' . $l['url'] . '">' . strtoupper($l['language_code']) . '</a></option>';
                                    }
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
            <div class="logo"><a href="<?= home_url(); ?>"><img src="<?php the_field('site_logo', 'option'); ?>"
                                                        alt=""></a></div>
            <div class="menu">
                <?php
                echo str_replace('sub-menu', 'submenu', wp_nav_menu(array(
                        'echo' => false,
                        'theme_location' => 'menu-1',
                        'items_wrap' => '<ul class="submenu">%3$s</ul>',
                        'container' => 'false'
                    ))
                );
                ?>

            </div>
        </div>
    </div>
</header>
<!-- End header -->
<!-- Content -->
