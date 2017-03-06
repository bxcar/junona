<?php
/*if(is_page()) {
    header('Location: '.get_post_type_archive_link('blog'));
}*/
?>

<?php get_header(); ?>

<!-- Content -->
<main>
    <section class="top-block inside-top blog-top">
        <h1><?php the_field('page_title'); ?></h1>
        <?php
        if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb('<p id="breadcrumbs">','</p>');
        }
        ?>
        <style>
            .inside-top.blog-top {
                background: url(<?php the_field('header_background_image');?>) 50% 50% no-repeat;
                background-size: cover;
            }
        </style>
    </section>
    <section class="blog-layaut">
        <div class="wrap">
            <div class="blog">

                <?php
                if (have_posts()) {
                    while (have_posts()) {
                        the_post(); ?>
                        <div class="item">
                            <?php if (get_field('image_for_posts_list')) { ?>
                                <img src="<?php the_field('image_for_posts_list') ?>"
                                     alt="">
                            <?php } ?>
                            <div class="text-info">
                                <div class="news-title"><?php the_title(); ?></div>
                                <div class="sub-info">
                                    <div class="date">
                                        <i class="fa fa-calendar-o"
                                           aria-hidden="true"></i><?php echo get_the_date('j F'); ?>
                                    </div>
                                    <div class="comment"><i class="fa fa-bullhorn"
                                                            aria-hidden="true"></i><?php comments_number_ru(); ?>
                                    </div>
                                </div>
                                <div class="text"><?php the_field('news_quote') ?></div>
                                <a class="link"
                                   href="<?php the_permalink(); ?>"><?php the_field('text_to_full_post', current_page_lang_blog()) ?></a>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>

                <div class="pagination">
                    <?php
                    $args_pagination = array(
                        'show_all' => false, // показаны все страницы участвующие в пагинации
                        'end_size' => 1,     // количество страниц на концах
                        'mid_size' => 1,     // количество страниц вокруг текущей
                        'prev_next' => true,  // выводить ли боковые ссылки "предыдущая/следующая страница".
                        'prev_text' => __(''),
                        'next_text' => __(''),
                        'add_args' => false, // Массив аргументов (переменных запроса), которые нужно добавить к ссылкам.
                        'add_fragment' => '',     // Текст который добавиться ко всем ссылкам.
                        'screen_reader_text' => __('Posts navigation'),
                        'type' => 'list'
                    );

                    echo paginate_links($args_pagination);
                    wp_reset_query(); ?>
                </div>
                <style>
                    .pagination li span.current {
                        color: #fff;
                        background-color: #0087ca;
                        border-color: #0087ca;
                    }

                    .prev, .next {
                        font: normal normal normal 14px/1 FontAwesome;
                        font-size: inherit;
                        text-rendering: auto;
                        -webkit-font-smoothing: antialiased;
                    }
                    .prev:before {
                        content: "\f104";
                    }

                    .next:before {
                        content: "\f105";
                    }

                    .all-item a {
                        color: #0087ca !important;
                        text-decoration: none;
                    }
                </style>
            </div>
            <?php get_sidebar('for-blog'); ?>
        </div>
    </section>
</main>
<!-- End content -->

<?php get_footer(); ?>
