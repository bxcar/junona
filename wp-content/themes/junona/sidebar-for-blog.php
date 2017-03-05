<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package junona
 */

if (get_field('check_sidebar_display', current_page_lang_blog())) { ?>

    <div class="sidebar">
        <div class="search">
            <form name="searchform" role="search" method="get" id="searchform" action="<?php echo home_url('/') ?>"
                  onsubmit="return validate_form ();">
                <input type="text" value="<?php echo get_search_query() ?>" name="s" id="s"
                       placeholder="<?php the_field('placeholder_search', current_page_lang_blog()) ?>">
                <?php if (get_current_template() != 'search.php') { ?>
                    <input type="hidden" name="post_type" value="blog"/>
                <?php } ?>
                <input type="submit" id="searchsubmit">
            </form>
            <script type="text/javascript">
                <!--

                function validate_form() {
                    var valid = true;

                    if (document.searchform.s.value.trim() == "") {
                        document.location.href = '<?= home_url() . '/blog'?>';
                        valid = false;
                    }

                    return valid;
                }

                //-->
            </script>
        </div>
        <div class="last-news">
            <div class="sidebar-title"><?php the_field('last_posts_title', current_page_lang_blog()) ?></div>
            <?php
            $args_popular_news = array(
                'post_type' => 'blog', //slag
                'posts_per_page' => get_field('last_posts_in_sidebar_amount', current_page_lang_blog()),
            );
            $popular_news = new WP_Query($args_popular_news);

            //loop
            $i = 0;
            if ($popular_news->have_posts()) :
                $result = object_to_array($popular_news);

                while ($popular_news->have_posts()) :
                    $popular_news->the_post();
                    //display list
                    ?>
                    <a href="<?php the_permalink(); ?>" class="item">
                        <?php if (get_field('image_for_posts_list')) { ?>
                            <img width="80" height="80" src="<?php the_field('image_mini_for_last_posts') ?>" alt="">
                        <?php } ?>
                        <p><?php the_title(); ?></p>
                        <div class="date"><i class="fa fa-calendar-o"
                                             aria-hidden="true"></i><?php echo get_the_date('j F Y') . ' ' . __('года', 'junona');; ?>
                        </div>
                    </a>
                    <?php
                endwhile;
            endif;
            wp_reset_postdata(); // return global variables to state of main query
            ?>
        </div>
        <div class="category">
            <div class="sidebar-title"><?php the_field('category_title', current_page_lang_blog()) ?></div>
            <ul>
                <li class="all-item">
                    <a href="<?= get_home_url() . '/blog-page'; ?>"><?php echo __('Все записи', 'junona'); ?></a>
                </li>
                <?php
                global $cat;
                $args = array(
                    'show_option_all' => '',
                    'show_option_none' => '',
                    'orderby' => 'name',
                    'order' => 'DESC',
                    'show_last_update' => 0,
                    'style' => 'list',
                    'show_count' => 0,
                    'hide_empty' => 1,
                    'use_desc_for_title' => 1,
                    'child_of' => 0,
                    'feed' => '',
                    'feed_type' => '',
                    'feed_image' => '',
                    'exclude' => '1',
                    'exclude_tree' => '',
                    'include' => '',
                    'hierarchical' => true,
                    'title_li' => '',
                    'number' => NULL,
                    'echo' => 1,
                    'depth' => 0,
                    'current_category' => '',
                    'pad_counts' => 0,
                    'taxonomy' => 'category-blog',
                    'walker' => 'Walker_Category',
                    'hide_title_if_empty' => false,
                    'separator' => '<br />',
                );

                wp_list_categories($args);
                ?>
            </ul>
            <style>
                .blog-layaut .sidebar .category li.current-cat a {
                    color: #0087ca;
                    text-decoration: none;
                }
            </style>
        </div>
        <div class="archive wow fadeInUp" data-wow-duration="1s">
            <div class="sidebar-title"><?php the_field('archive_news_title', current_page_lang_blog()) ?></div>
            <ul>
                <?php wp_custom_archive_new('blog'); ?>
            </ul>
        </div>
    </div>
<?php } ?>