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
            <?php
            if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb('<p id="breadcrumbs">','</p>');
            }
            ?>
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
                    'post_type' => '_testimonials',
                    'posts_per_page' => -1,
                );
                $query_testimonials = new WP_Query($args_testimonials);

                if ($query_testimonials->have_posts()) {
                    while ($query_testimonials->have_posts()) {
                        $query_testimonials->the_post(); ?>
                        <div class="rev-item">
                            <img src="<?= get_post_meta( get_the_ID(), 'wpcf-review_image', true ); ?>" alt="" class="client">
                            <div class="text">
                                <div class="top">
                                    <div class="name"><?= get_post_meta( get_the_ID(), 'wpcf-name', true ); ?></div>
                                    <div class="date"><?= get_the_date('j F Y')?></div>
                                    <p><?= get_post_meta( get_the_ID(), 'wpcf-comment', true ); ?></p>
                                </div>
                                <div class="bottom">
                                    <div class="rating"><?= number_format((((float)get_post_meta( get_the_ID(), 'wpcf-term_of_execution', true )+(float)get_post_meta( get_the_ID(), 'wpcf-quality', true )+(float)get_post_meta( get_the_ID(), 'wpcf-cost', true ))/3), 1, ',', ' ');?></div>
                                    <div class="field">
                                        <div class="field-name"><?= $first_assessment; ?></div>
                                        <span></span>
                                        <div class="field-prop"><?= number_format((float)get_post_meta( get_the_ID(), 'wpcf-term_of_execution', true ), 1, ',', ' '); ?></div>
                                    </div>
                                    <div class="field">
                                        <div class="field-name"><?= $second_assessment; ?></div>
                                        <span></span>
                                        <div class="field-prop"><?= number_format((float)get_post_meta( get_the_ID(), 'wpcf-quality', true ), 1, ',', ' '); ?></div>
                                    </div>
                                    <div class="field">
                                        <div class="field-name"><?= $third_assessment; ?></div>
                                        <span></span>
                                        <div class="field-prop"><?= number_format((float)get_post_meta( get_the_ID(), 'wpcf-cost', true ), 1, ',', ' '); ?></div>
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
        <!--<section class="assessment-work leave-review">
            <div class="wrap">
                <div class="title white"><?php /*the_field('form_title'); */?></div>
                <div class="assessment-form">
                    <div class="item">
                        <input type="text" placeholder="<?php /*the_field('placeholder_1'); */?>">
                        <div class="rating-inp">
                            <p><?php /*the_field('placeholder_2'); */?></p>
                            <div class="ticker-wrap">
                                <div id="slider" class="ticker">
                                    <input class="number" type="text" id="amount">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <input type="email" placeholder="<?php /*the_field('placeholder_3'); */?>">
                        <div class="rating-inp">
                            <p><?php /*the_field('placeholder_4'); */?></p>
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
                            <p><?php /*the_field('placeholder_5'); */?></p>
                            <div class="ticker-wrap">
                                <div id="slider-price" class="ticker">
                                    <input class="number" type="text" id="amount-price">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item large">
                        <textarea name="" id="" cols="20" rows="5" placeholder="<?php /*the_field('placeholder_6'); */?>"></textarea>
                    </div>
                </div>
                <input type="submit" value="<?php /*the_field('form_button_text'); */?>">

            </div>
        </section>-->
        <?php echo do_shortcode('[cred_form form=\'forma-dlya-otzyvy\' form_name=\'Форма для Отзывы\']')?>
        <style>
            .assessment-work.leave-review {
                background: url(<?php the_field('form_background_image'); ?>) 50% 50% no-repeat;
                background-size: cover;
            }
        </style>
        <script>
            jQuery('#slider input').unwrap();
            jQuery('#slider input').removeAttr('value');
            jQuery('#slider input').attr('id','amount');

            jQuery('#slider-accuracy input').unwrap();
            jQuery('#slider-accuracy input').removeAttr('value');
            jQuery('#slider-accuracy input').attr('id','amount-accuracy');

            jQuery('#slider-price input').unwrap();
            jQuery('#slider-price input').removeAttr('value');
            jQuery('#slider-price input').attr('id','amount-price');
        </script>
    </main>

    <!-- End content -->

<?php get_footer(); ?>
<script src="<?= get_template_directory_uri() ?>/app/js/libs.min.js"></script>
<script src="<?= get_template_directory_uri() ?>/app/js/common.js"></script>

