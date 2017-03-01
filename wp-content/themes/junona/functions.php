<?php
/**
 * junona functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package junona
 */

if (!function_exists('junona_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function junona_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on junona, use a find and replace
         * to change 'junona' to the name of your theme in all the template files.
         */
        load_theme_textdomain('junona', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'menu-1' => esc_html__('Primary', 'junona'),
        ));

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('junona_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');
    }
endif;
add_action('after_setup_theme', 'junona_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function junona_content_width()
{
    $GLOBALS['content_width'] = apply_filters('junona_content_width', 640);
}

add_action('after_setup_theme', 'junona_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function junona_widgets_init()
{
    register_sidebar(array(
        'name' => esc_html__('Sidebar', 'junona'),
        'id' => 'sidebar-1',
        'description' => esc_html__('Add widgets here.', 'junona'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'junona_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function junona_scripts()
{
//	wp_enqueue_style( 'junona-style', get_stylesheet_uri() );

    //Load CSS, CSS Localstorage & WebFonts Main Function
    wp_enqueue_style('fonts.min', get_template_directory_uri() . '/app/css/fonts.min.css');
    wp_enqueue_style('main.min', get_template_directory_uri() . '/app/css/main.min.css');

//	wp_enqueue_script( 'junona-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
    wp_enqueue_script('libs.min-junona', get_template_directory_uri() . '/app/js/libs.min.js', array(), null, true);
    wp_enqueue_script('common-junona', get_template_directory_uri() . '/app/js/common.js', array(), null, true);
    wp_enqueue_script('jquery');
//	wp_enqueue_script( 'junona-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'junona_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

add_action('admin_menu', 'register_my_custom_menu_page');
function register_my_custom_menu_page()
{
    add_menu_page(
        'custom menu title', 'Контентные разделы', 'manage_options', 'custompage', 'my_custom_menu_page', 'dashicons-format-aside', 21.3
    );
    // Add a second submenu to the custom top-level menu:
    add_submenu_page('custompage', 'Языки', 'Языки', 8, '/edit.php?post_type=language');
    add_submenu_page('custompage', 'Новости', 'Новости', 8, '/edit.php?post_type=news');
    remove_submenu_page('custompage', 'custompage');

    add_menu_page(
        'custom taxonomy title', 'Таксономии', 'manage_options', 'customtaxonomies', 'my_custom_taxonomy_page', 'dashicons-list-view', 22.3
    );
    add_submenu_page('customtaxonomies', 'Категории - новости', 'Категории - новости', 8, '/edit-tags.php?taxonomy=category-news');
}

function my_custom_menu_page()
{
    echo "<h3>Выберите необходимый вам раздел для редактирования, которые отображены слева в подменю данного раздела.</h3>";
}

function my_custom_taxonomy_page()
{
    echo "<h3>Выберите неободимый вам раздел для редактирования, которые отображены слева в подменю данного раздела.</h3>";
}

//another function for custom display archives
function wp_custom_archive_new($post_type_cust = 'post')
{
    global $wpdb;
    $year_prev = null;
    $months = $wpdb->get_results("SELECT DISTINCT MONTH( post_date ) AS month ,
								YEAR( post_date ) AS year,
								COUNT( id ) as post_count FROM $wpdb->posts
								WHERE post_status = 'publish' and post_date <= now( )
								and post_type = '$post_type_cust'
								GROUP BY month , year
								ORDER BY post_date DESC");
foreach ($months as $month) :
    $year_current = $month->year;
if ($year_current != $year_prev) {
    if ($year_prev != null) {
        ?>
        </ul>
    <?php } ?>
    <li><a href="<?= get_home_url() . '/' . $month->year . '?post_type=' . $post_type_cust ?>"
           class="archive-year"><span><?php echo $month->year; ?></span></a></li>

    <div id="archive-by-month" class="archive-year-span">
        <span>(по месяцам)</span>
        <img id="transform-right-arrow-arch-by-month"
             src="<?php bloginfo('template_url') ?>/img/right-arrow.png">
    </div>

    <ul class="archive-month-list" class="archive-list" id="archive-by-month-block-hidden" style="display: none;">
        <?php }
        $monthes = array(
            1 => 'Январь', 2 => 'Февраль', 3 => 'Март', 4 => 'Апрель',
            5 => 'Май', 6 => 'Июнь', 7 => 'Июль', 8 => 'Август',
            9 => 'Сентябрь', 10 => 'Октябрь', 11 => 'Ноябрь', 12 => 'Декабрь'
        );
        ?>
        <li>
            <a href="<?php bloginfo('url') ?>/<?php echo $month->year; ?>/<?php echo date("m", mktime(0, 0, 0, $month->month, 1, $month->year)) . '?post_type=' . $post_type_cust ?>">
                <span
                        class="archive-month"><?php echo $monthes[date("n", mktime(0, 0, 0, $month->month, 1, $month->year))] ?></span>
                <!--            <span class="archive-count">--><?php //echo $month->post_count;
                ?><!--</span>-->
            </a>
        </li>
        <?php $year_prev = $year_current;
        endforeach; ?>
    </ul>
    <style>
        .archive-year-span, .archive-month-list {
            margin-left: 10px;
        }

        .archive-year, .archive-year-span {
            font-size: .8125rem;
            font-weight: 400;
            line-height: 33px;
            color: #9e9e9e !important;
            cursor: pointer;
        }

        .archive-year span:hover {
            color: #0087ca;
        }
    </style>
    <script>
        //animate categories and archives block in sidebar
        jQuery(document).ready(function () {
            jQuery('a#link-display-cat').click(function (e) {
                jQuery(this).toggleClass('active');
                if (jQuery('#cat-hidden-block').css('display') == 'none') {

                    jQuery('#cat-hidden-block').animate({height: 'show'}, 500);

                    jQuery('#transform-right-arrow').animate({borderSpacing: 90}, {
                        step: function (now, fx) {
                            $(this).css('transform', 'rotate(' + now + 'deg)');
                        },
                        duration: 'slow'
                    }, 'linear');
                }
                else {
                    jQuery('#cat-hidden-block').animate({height: 'hide'}, 500);

                    jQuery('#transform-right-arrow').animate({borderSpacing: 0}, {
                        step: function (now, fx) {
                            jQuery(this).css('transform', 'rotate(' + now + 'deg)');
                        },
                        duration: 'slow'
                    }, 'linear');
                }
                e.stopPropagation();
            });


            jQuery('a#link-display-arch').click(function (e) {
                jQuery(this).toggleClass('active');
                if (jQuery('#arch-hidden-block').css('display') == 'none') {

                    jQuery('#arch-hidden-block').animate({height: 'show'}, 1000);

                    jQuery('#transform-right-arrow-arch').animate({borderSpacing: 90}, {
                        step: function (now, fx) {
                            jQuery(this).css('transform', 'rotate(' + now + 'deg)');
                        },
                        duration: 'slow'
                    }, 'linear');
                }
                else {
                    jQuery('#arch-hidden-block').animate({height: 'hide'}, 500);

                    jQuery('#transform-right-arrow-arch').animate({borderSpacing: 0}, {
                        step: function (now, fx) {
                            jQuery(this).css('transform', 'rotate(' + now + 'deg)');
                        },
                        duration: 'slow'
                    }, 'linear');
                }

                e.stopPropagation();


                //close archives by month
                jQuery('div#archive-by-month').next().animate({height: 'hide'}, 500);

                jQuery('div#archive-by-month').find('img').animate({borderSpacing: 0}, {
                    step: function (now, fx) {
                        jQuery(this).css('transform', 'rotate(' + now + 'deg)');
                    },
                    duration: 'slow'
                }, 'linear');

            });


            //  click archives by month
            jQuery('div#archive-by-month').click(function (e) {
                // alert(this.next('.archive-month-list'));
                if (jQuery(this).next().css('display') == 'none') {

                    jQuery(this).next().animate({height: 'show'}, 500);

                    jQuery(this).find('img').animate({borderSpacing: 90}, {
                        step: function (now, fx) {
                            jQuery(this).css('transform', 'rotate(' + now + 'deg)');
                        },
                        duration: 'slow'
                    }, 'linear');

                }

                else {
                    jQuery(this).next().animate({height: 'hide'}, 500);

                    jQuery(this).find('img').animate({borderSpacing: 0}, {
                        step: function (now, fx) {
                            jQuery(this).css('transform', 'rotate(' + now + 'deg)');
                        },
                        duration: 'slow'
                    }, 'linear');
                }
            });

            //  /click archives by month
        });
    </script>
    <?php
}

/**
 * Функция возвращает окончание для множественного числа слова на основании числа и массива окончаний
 * @param  $number int Число на основе которого нужно сформировать окончание
 * @param  $ending_arr  array Массив слов с правильными окончаниями для чисел (1, 2, 5),
 *         например array('комментарий', 'комментария', 'комментариев')
 * @return string
 */
function get_num_ending($number, $ending_arr)
{
    $number = $number % 100;
    if ($number >= 11 && $number <= 19) {
        $ending = $ending_arr[2];
    } else {
        $i = $number % 10;
        switch ($i) {
            case (1):
                $ending = $ending_arr[0];
                break;
            case (2):
            case (3):
            case (4):
                $ending = $ending_arr[1];
                break;
            default:
                $ending = $ending_arr[2];
        }
    }
    return $ending;
}

/**
 * Фильтр к стандартной функции WordPress comments_number()
 * Возвращает строку с количеством комментариев к статье
 * с правильными окончаниями слова "комментарий" (1 комментарий, 2 комментария, 5 комментариев)
 */
function comments_number_ru()
{
    global $id;
    $number = get_comments_number($id);

    if ($number == 0) {
        $output = 'Комментариев нет';
    } else {
        $output = '' . $number . ' ' . get_num_ending($number, array('комментарий', 'комментария', 'комментариев'));
    }
    echo $output;
}

add_filter('comments_number', 'comments_number_ru');


function get_current_template($echo = false)
{
    if (!isset($GLOBALS['current_theme_template']))
        return false;
    if ($echo)
        echo $GLOBALS['current_theme_template'];
    else
        return $GLOBALS['current_theme_template'];
}


//c
function mytheme_comment($comment, $args, $depth)
{
    $GLOBALS['comment'] = $comment;
    //var_dump($comment);
    if ($comment->comment_parent) {
        switch ($comment->comment_type) :
            case '' :
//                echo $comment->comment_parent;
                ?>
                <li <?php comment_class('comment answer'); ?> id="li-comment-<?php comment_ID() ?>">
                    <div class="item sub-comment" id="comment-<?php comment_ID(); ?>">

                        <?php echo get_avatar($comment->comment_author_email, $args['avatar_size']); ?>

                        <?php printf(__('<div class="name">%s</div>'), get_comment_author_link()) ?>

                        <?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>

                        <div class="date"><?php printf(__('%1$s'), get_comment_date('d F Y'), '') ?></div>

                        <?php comment_text() ?>
                        <?php //edit_comment_link(__('Редактировать'), ' ');
                        ?>

                        <?php if ($comment->comment_approved == '0') : ?>
                            <div
                                    class="comment-awaiting-verification"><?php _e('Your comment is awaiting moderation.') ?></div>
                            <br/>
                        <?php endif; ?>
                    </div>
                </li>
                <?php
                break;
            case 'pingback'  :
            case 'trackback' :
                ?>
                <li class="post pingback">
                <?php comment_author_link(); ?>
                <?php edit_comment_link(__('Редактировать'), ' '); ?>
                <?php
                break;
        endswitch;
    } else {
        switch ($comment->comment_type) :
            case '' :
                ?>
                <div class="item" id="comment-<?php comment_ID(); ?>">

                    <?php echo get_avatar($comment->comment_author_email, $args['avatar_size']); ?>

                    <?php printf(__('<div class="name">%s</div>'), get_comment_author_link()) ?>

                    <?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>

                    <div class="date"><?php printf(__('%1$s'), get_comment_date('d F Y'), '') ?></div>

                    <?php comment_text() ?>
                    <?php //edit_comment_link(__('Редактировать'), ' ');
                    ?>

                    <?php if ($comment->comment_approved == '0') : ?>
                        <div
                                class="comment-awaiting-verification"><?php _e('Your comment is awaiting moderation.') ?></div>
                        <br/>
                    <?php endif; ?>
                </div>
                <?php
                break;
            case 'pingback'  :
            case 'trackback' :
                ?>
                <li class="post pingback">
                <?php comment_author_link(); ?>
                <?php edit_comment_link(__('Редактировать'), ' '); ?>
                <?php
                break;
        endswitch;
    }
}

add_filter('comment_reply_link', 'replace_reply_link_class');


//comment form button
function awesome_comment_form_submit_button($button)
{
    $button =
        '<input name="submit" type="submit" class="submit" id="submit" value="Отправить" />';
    return $button;
}

add_filter('comment_form_submit_button', 'awesome_comment_form_submit_button');


//move comment textarea to bottom
function wpb_move_comment_field_to_bottom($fields)
{
    $comment_field = $fields['comment'];
    unset($fields['comment']);
    $fields['comment'] = $comment_field;
    return $fields;
}

add_filter('comment_form_fields', 'wpb_move_comment_field_to_bottom');

function replace_reply_link_class($class)
{
    $class = str_replace("class='comment-reply-link", "class='answer-link", $class);
    return $class;
}

add_filter('comment_text', 'stefan_wrap_comment_text', 1000);

function stefan_wrap_comment_text($class)
{
    $class = str_replace("<p>", "<div class='text'>", $class);
    $class = str_replace("</p>", "</div>", $class);
    return $class;
}

