<?php get_header(); ?>

<!-- Content -->
<main>
    <section class="top-block inside-top news-top">
        <h1><?php the_field('page_title'); ?></h1>
        <div class="breadcrumb">
            <ul>
                <li><a href="index.html">Главная</a></li>
                <li><a href="about-service.html">О сервисе</a></li>
                <li><span>Машинный или профессиональный перевод вебсайта</span></li>
            </ul>
        </div>
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
                        <div class="date"><i class="fa fa-calendar-o" aria-hidden="true"></i>24 сентября</div>
                        <div class="comment"><i class="fa fa-bullhorn" aria-hidden="true"></i>0 комментариев</div>
                    </div>
                    <div class="text">
                        <?php the_content(); ?>
                    </div>
                    <div class="social">
                        <div class="social-title">Поделиться:</div>
                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    </div>
<!--                    <div class="comment">-->
                        <!--<div class="comment-title">Комментарии <span>(2)</span></div>
                        <div class="item">
                            <img src="img/client-1.png" alt="">
                            <div class="name">Петров Сергей</div>
                            <div class="date">08 Июля 2016 года</div>
                            <div class="text">Поэтому не рекомендуется применять средства мгновенного перевода для написания текстов, ориентированных на определенную целевую аудиторию, рекламного характера, художественной тематики, технические тексты со специфической терминологией и прочие материалы, требующие участия профессионального переводчика. Иначе машинный перевод вызовет частичное, а порой полное непонимание получателем текста.</div>
                        </div>
                        <div class="item sub-comment">
                            <img src="img/client-2.png" alt="">
                            <div class="name">Светлана Зинченко</div>
                            <div class="date">08 Июля 2016 года</div>
                            <div class="text">Поэтому не рекомендуется применять средства мгновенного перевода для написания текстов, ориентированных на определенную целевую аудиторию, рекламного характера, художественной тематики, технические тексты со специфической терминологией </div>
                        </div>-->
                        <?php comments_template('/comments.php', true); ?>
<!--                    </div>-->
                    <!--<div class="comment comment-form">
                        <div class="comment-title">Оставить комментарий</div>
                        <form action="">
                            <input type="text" placeholder="Ваше имя*">
                            <input type="email" placeholder="Ваш E-mail*">
                            <textarea placeholder="Комментарий"></textarea>
                            <input type="submit" class="base-btn">
                        </form>
                    </div>-->
                </div>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </section>
</main>
<!-- End content -->

<?php get_footer(); ?>
