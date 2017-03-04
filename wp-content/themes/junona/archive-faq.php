<?php get_header(); ?>

    <!-- Content -->
    <main>
        <section class="top-block inside-top faq">
            <h1>Вопросы-Ответы</h1>
            <div class="breadcrumb">
                <ul>
                    <li><a href="index.html">Главная</a></li>
                    <li><span>Вопросы - ответы</span></li>
                </ul>
            </div>
        </section>
        <section class="faq-info">
            <div class="categories">
                <?php
                $args = array(
                    'taxonomy' => 'category-faq', // название таксономии с WP 4.5
                    'orderby' => 'id',
                    'order' => 'ASC',
                    'hide_empty' => false,
                    'object_ids' => null, //
                    'include' => array(),
                    'exclude' => array(),
                    'exclude_tree' => array(),
                    'number' => '',
                    'fields' => 'all',
                    'count' => false,
                    'slug' => '',
                    'parent' => '',
                    'hierarchical' => true,
                    'child_of' => 0,
                    'get' => '', // ставим all чтобы получить все термины
                    'name__like' => '',
                    'pad_counts' => false,
                    'offset' => '',
                    'search' => '',
                    'cache_domain' => 'core',
                    'name' => '', // str/arr поле name для получения термина по нему. C 4.2.
                    'childless' => false, // true не получит (пропустит) термины у которых есть дочерние термины. C 4.2.
                    'update_term_meta_cache' => true, // подгружать метаданные в кэш
                    'meta_query' => '',
                );
                $terms = get_terms($args);
                foreach ($terms as $term) {
                    echo '<a href="' . get_term_link($term) . '" class="single-category active">' . $term->name . '</a>';
                }
                ?>
            </div>
            <div class="content faq">
                <div class="wrap">
                    <?php
                    $args_questions = array(
                        'post_type' => 'faq', //slag
                        'posts_per_page' => -1,
                        'order' => 'ASC'
                    );
                    $questions = new WP_Query($args_questions);

                    if ($questions->have_posts()) :
                        $result = object_to_array($questions);
                        $amount_of_posts = count($result);
                        $post_amount = count($result['posts']);
                        $i = 0;
                        $ix = 0;

                        while ($questions->have_posts()) :
                            $questions->the_post();
                            if ($i == 0) {
                                echo '<div class="column-item">';
                            }
                            if ($i % 2 == 0) {
                                ?>
                                <div class="item">
                                    <div class="box">
                                        <div class="box-title"><?php the_title(); ?></div>
                                        <div class="plus"></div>
                                    </div>
                                    <div class="short-info">
                                        <div class="text-wrap">
                                            <?php the_content(); ?>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                            if ($i == $post_amount - 1) {
                                echo '</div>';
                            }
                            $i++;
                        endwhile;
                        while ($questions->have_posts()) :
                            $questions->the_post();
                            if ($ix == 0) {
                                echo '<div class="column-item">';
                            }
                            if ($ix % 2 == 1) {
                                ?>
                                <div class="item">
                                    <div class="box">
                                        <div class="box-title"><?php the_title(); ?></div>
                                        <div class="plus"></div>
                                    </div>
                                    <div class="short-info">
                                        <div class="text-wrap">
                                            <?php the_content(); ?>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                            if ($ix == $post_amount - 1) {
                                echo '</div>';
                            }
                            $ix++;
                        endwhile;
                    endif;
                    wp_reset_postdata(); // return global variables to state of main query
                    ?>
                    <!--<div class="column-item">
                        <div class="item">
                            <div class="box">
                                <div class="box-title">Что входит в устный перевод?</div>
                                <div class="plus"></div>
                            </div>
                            <div class="short-info">
                                <div class="text-wrap">
                                    <p>Подбор специалиста в соответствии с тематикой Вашего мероприятия;</p>
                                    <p>Возможность срочного заказа на устный перевод;</p>
                                    <p>Удобный способ расчёта (наличный, безналичный);</p>
                                    <p>Конфиденциальность;</p>
                                    <p>15 % скидка для клиентов на договорной основе;</p>
                                    <p>Гарантированно качественный перевод.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="box">
                                <div class="box-title">Какие языки мы используем?</div>
                                <div class="plus"></div>
                            </div>
                            <div class="short-info">
                                <div class="text-wrap">
                                    <p>Подбор специалиста в соответствии с тематикой Вашего мероприятия;</p>
                                    <p>Возможность срочного заказа на устный перевод;</p>
                                    <p>Удобный способ расчёта (наличный, безналичный);</p>
                                    <p>Конфиденциальность;</p>
                                    <p>15 % скидка для клиентов на договорной основе;</p>
                                    <p>Гарантированно качественный перевод.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="box">
                                <div class="box-title">Какие языки мы используем?</div>
                                <div class="plus"></div>
                            </div>
                            <div class="short-info">
                                <div class="text-wrap">
                                    <p>Подбор специалиста в соответствии с тематикой Вашего мероприятия;</p>
                                    <p>Возможность срочного заказа на устный перевод;</p>
                                    <p>Удобный способ расчёта (наличный, безналичный);</p>
                                    <p>Конфиденциальность;</p>
                                    <p>15 % скидка для клиентов на договорной основе;</p>
                                    <p>Гарантированно качественный перевод.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="box">
                                <div class="box-title">Как заказать перевод?</div>
                                <div class="plus"></div>
                            </div>
                            <div class="short-info">
                                <div class="text-wrap">
                                    <p>Подбор специалиста в соответствии с тематикой Вашего мероприятия;</p>
                                    <p>Возможность срочного заказа на устный перевод;</p>
                                    <p>Удобный способ расчёта (наличный, безналичный);</p>
                                    <p>Конфиденциальность;</p>
                                    <p>15 % скидка для клиентов на договорной основе;</p>
                                    <p>Гарантированно качественный перевод.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column-item">
                        <div class="item">
                            <div class="box">
                                <div class="box-title">Как заказать перевод?</div>
                                <div class="plus"></div>
                            </div>
                            <div class="short-info">
                                <div class="text-wrap">
                                    <p>Подбор специалиста в соответствии с тематикой Вашего мероприятия;</p>
                                    <p>Возможность срочного заказа на устный перевод;</p>
                                    <p>Удобный способ расчёта (наличный, безналичный);</p>
                                    <p>Конфиденциальность;</p>
                                    <p>15 % скидка для клиентов на договорной основе;</p>
                                    <p>Гарантированно качественный перевод.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="box">
                                <div class="box-title">Какие языки мы используем?</div>
                                <div class="plus"></div>
                            </div>
                            <div class="short-info">
                                <div class="text-wrap">
                                    <p>Подбор специалиста в соответствии с тематикой Вашего мероприятия;</p>
                                    <p>Возможность срочного заказа на устный перевод;</p>
                                    <p>Удобный способ расчёта (наличный, безналичный);</p>
                                    <p>Конфиденциальность;</p>
                                    <p>15 % скидка для клиентов на договорной основе;</p>
                                    <p>Гарантированно качественный перевод.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="box">
                                <div class="box-title">Какие языки мы используем?</div>
                                <div class="plus"></div>
                            </div>
                            <div class="short-info">
                                <div class="text-wrap">
                                    <p>Подбор специалиста в соответствии с тематикой Вашего мероприятия;</p>
                                    <p>Возможность срочного заказа на устный перевод;</p>
                                    <p>Удобный способ расчёта (наличный, безналичный);</p>
                                    <p>Конфиденциальность;</p>
                                    <p>15 % скидка для клиентов на договорной основе;</p>
                                    <p>Гарантированно качественный перевод.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="box">
                                <div class="box-title">Какие языки мы используем?</div>
                                <div class="plus"></div>
                            </div>
                            <div class="short-info">
                                <div class="text-wrap">
                                    <p>Подбор специалиста в соответствии с тематикой Вашего мероприятия;</p>
                                    <p>Возможность срочного заказа на устный перевод;</p>
                                    <p>Удобный способ расчёта (наличный, безналичный);</p>
                                    <p>Конфиденциальность;</p>
                                    <p>15 % скидка для клиентов на договорной основе;</p>
                                    <p>Гарантированно качественный перевод.</p>
                                </div>
                            </div>
                        </div>
                    </div>-->
                </div>
            </div>
        </section>
    </main>
    <!-- End content -->

<?php get_footer(); ?>