<?php get_header(); ?>

<!-- Content -->
<main>
    <section class="top-block inside-top news-top">
        <h1><?php the_field('page_title'); ?></h1>
        <?php
        if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb('<p id="breadcrumbs">','</p>');
        }
        ?>
        <style>
            .inside-top.news-top {
                background: url(<?php the_field('header_background_image');?>) 50% 50% no-repeat;
                background-size: cover;
            }
        </style>
    </section>
    <section class="blog-layaut">
        <div class="wrap">
            <div class="blog">
                <div class="item single-item">
                    <div class="news-title"><?php the_title(); ?></div>
                    <div class="sub-info">
                        <div class="date"><i class="fa fa-calendar-o" aria-hidden="true"></i><?php  the_date('j F'); ?></div>
                        <div class="comment"><i class="fa fa-bullhorn" aria-hidden="true"></i><?php comments_number_ru(); ?></div>
                    </div>
                    <div class="text">
                        <?php the_content(); ?>
                    </div>
                    <div class="social">
                        <div class="social-title"><?php the_field('share_in_social_title', current_page_lang()) ?></div>
                        <a class="fb-share"
                           href="https://www.facebook.com/sharer/sharer.php?u=<?= get_permalink($post->ID); ?>&title=<?= str_replace("\"", "'", get_the_title($post->ID)); ?>&p[summary]=<?= str_replace("\"", "'", get_post_meta(get_the_ID(), '_yoast_wpseo_metadesc', true)); ?>">
                            <i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a class="fb-share" href="https://plus.google.com/share?url=<?= get_permalink($post->ID); ?>">
                            <i class="fa fa-google-plus" aria-hidden="true"></i></a>
                        <a class="fb-share"
                           href="http://twitter.com/share?text=<?= str_replace("\"", "'", get_the_title($post->ID)); ?>&url=<?= get_permalink($post->ID); ?>">
                            <i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a class="fb-share"
                           href="http://vk.com/share.php?url=<?= get_permalink($post->ID); ?>&title=<?= str_replace("\"", "'", get_the_title($post->ID)); ?>&description=<?= str_replace("\"", "'", get_post_meta(get_the_ID(), '_yoast_wpseo_metadesc', true)); ?>&image=<?php if (get_field('image_for_posts_list')) {
                               the_field('image_for_posts_list');
                           } else {
                               the_field('image_mini_for_last_posts');
                           } ?>"><i class="fa fa-vk" aria-hidden="true"></i></a>
                        <a class="fb-share"
                           href="http://www.linkedin.com/shareArticle?mini=true&url=<?= get_permalink($post->ID); ?>&title=<?= str_replace("\"", "'", get_the_title($post->ID)); ?>&source=<?= home_url(); ?>"><i
                                    class="fa fa-linkedin" aria-hidden="true"></i></a>
                        <script>
                            jQuery(document).ready(function () {
                                jQuery('.fb-share').click(function (e) {
                                    e.preventDefault();
                                    window.open(jQuery(this).attr('href'), 'fbShareWindow', 'height=450, width=550, top=' + (jQuery(window).height() / 2 - 275) + ', left=' + (jQuery(window).width() / 2 - 225) + ', toolbar=0, location=0, menubar=0, directories=0, scrollbars=0');
                                    return false;
                                });
                            });
                        </script>
                    </div>
                    <?php comments_template('/comments.php', true); ?>
                </div>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </section>
</main>
<!-- End content -->

<?php get_footer(); ?>
