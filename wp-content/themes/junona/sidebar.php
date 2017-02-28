<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package junona
 */

/*if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}*/
?>

<!--<aside id="secondary" class="widget-area" role="complementary">
	<?php /*dynamic_sidebar( 'sidebar-1' ); */?>
</aside>--><!-- #secondary -->

<div class="sidebar">
    <div class="search">
        <form action="">
            <input type="text" placeholder="Поиск...">
            <input type="submit">
        </form>
    </div>
    <div class="last-news">
        <div class="sidebar-title">Последние посты</div>
        <a href="#" class="item">
            <img src="img/p-news-1.jpg" alt="">
            <p>Вы когда-нибудь задумывались над тем, какой вебсайт самый переводимый в мире? Веб-домены
                ...</p>
            <div class="date"><i class="fa fa-calendar-o" aria-hidden="true"></i>17 Июня 2016 года</div>
        </a>
        <a href="#" class="item">
            <img src="img/p-news-2.jpg" alt="">
            <p>Для некоторых видов технического перевода, когда разница между терминами может быть едва
                ...</p>
            <div class="date"><i class="fa fa-calendar-o" aria-hidden="true"></i>04 декабря 2015 года</div>
        </a>
    </div>
    <div class="category">
        <div class="sidebar-title">Категории</div>
        <ul>
            <li><a href="#">О компании</a></li>
            <li><a href="#">Переводы</a></li>
            <li class="active"><a href="#">Иностранные языки</a></li>
            <li><a href="#">Наши сотрудники</a></li>
            <li><a href="#">Юристам</a></li>
        </ul>
    </div>
    <div class="archive wow fadeInUp" data-wow-duration="1s">
        <div class="sidebar-title">Арихив новостей</div>
        <ul>
            <!--<li class="active"><a href="#">Октябрь</a></li>
            <li><a href="#">Сентябрь</a></li>
            <li><a href="#">Август</a></li>
            <li><a href="#">Июль</a></li>
            <li><a href="#">Июнь</a></li>-->
            <?php wp_custom_archive_new('news'); ?>
        </ul>
    </div>
</div>
