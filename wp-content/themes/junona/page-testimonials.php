<?php
/**
 * Template Name: testimonials
 */
?>

<?php get_header(); ?>

    <!-- Content -->
    <main>
        <section class="top-block inside-top review-top">
            <h1><?php the_field('page_title'); ?></h1>
            <div class="breadcrumb">
                <ul>
                    <li><a href="index.html">Главная</a></li>
                    <li><a href="about-service.html">О сервисе</a></li>
                    <li><span>Отзывы клиентов</span></li>
                </ul>
            </div>
            <style>
                .inside-top.review-top {
                    background: url(<?php the_field('header_background_image'); ?>) 50% 50% no-repeat;
                    background-size: cover;
                }
            </style>
        </section>
        <section class="client-review">
            <div class="wrap">
                <div class="title"><?php the_field('testimonials_list_title'); ?></div>
                <?php
                $first_assessment = get_field('first_assessment');
                $second_assessment = get_field('second_assessment');
                $third_assessment = get_field('third_assessment');

                $args_testimonials = array(
                    'post_type' => 'testimonials',
                    'posts_per_page' => -1,
                );
                $query_testimonials = new WP_Query($args_testimonials);

                if ($query_testimonials->have_posts()) {
                    while ($query_testimonials->have_posts()) {
                        $query_testimonials->the_post(); ?>
                        <div class="rev-item">
                            <img src="<?php the_field('image'); ?>" alt="" class="client">
                            <div class="text">
                                <div class="top">
                                    <div class="name"><?php the_field('name'); ?></div>
                                    <div class="date"><?php the_date('j F Y')?></div>
                                    <p><?php the_field('comment'); ?></p>
                                </div>
                                <div class="bottom">
                                    <div class="rating"><?= number_format(((get_field('term_of_execution')+get_field('quality')+get_field('cost'))/3), 1, ',', ' ');?></div>
                                    <div class="field">
                                        <div class="field-name"><?= $first_assessment; ?></div>
                                        <span></span>
                                        <div class="field-prop"><?= number_format(get_field('term_of_execution'), 1, ',', ' '); ?></div>
                                    </div>
                                    <div class="field">
                                        <div class="field-name"><?= $second_assessment; ?></div>
                                        <span></span>
                                        <div class="field-prop"><?= number_format(get_field('quality'), 1, ',', ' '); ?></div>
                                    </div>
                                    <div class="field">
                                        <div class="field-name"><?= $third_assessment; ?></div>
                                        <span></span>
                                        <div class="field-prop"><?= number_format(get_field('cost'), 1, ',', ' '); ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
                wp_reset_postdata();
                ?>
                <a href="" class="base-btn"><?php the_field('more_testimonials_button_text'); ?></a>
            </div>
        </section>
        <section class="assessment-work leave-review">
            <div class="wrap">
                <div class="title white"><?php the_field('form_title'); ?></div>
                <div class="assessment-form">
                    <div class="item">
                        <input type="text" placeholder="<?php the_field('placeholder_1'); ?>">
                        <div class="rating-inp">
                            <p><?php the_field('placeholder_2'); ?></p>
                            <div class="ticker-wrap">
                                <div id="slider" class="ticker">
                                    <input class="number" type="text" id="amount">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <input type="email" placeholder="<?php the_field('placeholder_3'); ?>">
                        <div class="rating-inp">
                            <p><?php the_field('placeholder_4'); ?></p>
                            <div class="ticker-wrap">
                                <div id="slider-accuracy" class="ticker">
                                    <input class="number" type="text" id="amount-accuracy">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <input type="file" placeholder="Прикрепить фото*">
                        <div class="rating-inp">
                            <p><?php the_field('placeholder_5'); ?></p>
                            <div class="ticker-wrap">
                                <div id="slider-price" class="ticker">
                                    <input class="number" type="text" id="amount-price">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item large">
                        <textarea name="" id="" cols="20" rows="5" placeholder="<?php the_field('placeholder_6'); ?>"></textarea>
                    </div>
                </div>
                <input type="submit" value="<?php the_field('form_button_text'); ?>">

            </div>
            <style>
                .assessment-work.leave-review {
                    background: url(<?php the_field('form_background_image'); ?>) 50% 50% no-repeat;
                    background-size: cover;
                }
            </style>
        </section>
    </main>
    <!-- End content -->

<?php get_footer(); ?>