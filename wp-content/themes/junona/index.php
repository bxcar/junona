<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package junona
 */

?>

<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<title>Главная</title>
	<meta name="description" content="">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Template Basic Images Start -->
	<meta property="og:image" content="path/to/image.jpg">
	<link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">
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
</head>

<body>

<!-- Custom HTML -->
<!-- Header -->
<header>
	<div class="wrap">
		<div class="header-top">
			<div class="social">
				<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
				<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
				<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
			</div>
			<div class="right-top">
				<div class="phone">
					<a href="tel:380663455446"><i class="fa fa-phone" aria-hidden="true"></i>+38 (066) 345 54 46<i class="fa fa-angle-down" aria-hidden="true"></i></a>
					<div class="more-phone">
						<a href="tel:380663455446">+38 (066) 345 54 46</a>
						<a href="tel:380663455446">+38 (066) 345 54 46</a>
					</div>
				</div>
				<div class="lang">
					<select name="">
						<option value="ukr">UA</option>
						<option value="rus">RU</option>
						<option value="eng">EN</option>
					</select>
				</div>
			</div>
		</div>
		<div class="header-bottom">
			<div class="logo"><a href="index.html"><img src="<?php bloginfo('template_url');?>/img/logo.png" alt=""></a></div>
			<div class="menu">
				<ul>
					<li><a href="index.html">Главная</a></li>
					<li><span>О СЕРВИСЕ</span>
						<ul class="submenu">
							<li><a href="about-service.html">О сервисе</a></li>
							<li><a href="#">Бюро переводов Киев</a></li>
							<li><a href="#">Бюро переводов Херсон</a></li>
							<li><a href="faq.html">Вопросы-Ответы</a></li>
							<li><a href="review.html">Отзывы</a></li>
							<li><a href="blog.html">Блог</a></li>
							<li><a href="special-offer.html">Специльное предложение</a></li>
							<li><a href="news.html">Новости</a></li>
						</ul>
					</li>
					<li><span>Услуги</span>
						<ul class="submenu">
							<li><a href="services.html">Все услуги</a></li>
							<li><a href="service-spoken-translate.html">Устный перевод</a></li>
							<li><a href="service-write-translation.html">Письменный перевод</a></li>
							<li><a href="service-visa-support.html">Визовая поддержка</a></li>
							<li><a href="service-lesson-skype.html">Уроки по Скайпу</a></li>
							<li><a href="service-price.html">Стоимость</a></li>
						</ul>
					</li>
					<li><span>Языки</span>
						<ul class="submenu">
							<li><a href="lang.html">Все языки</a></li>
							<li><a href="lang-eng-translation.html">Английский перевод</a></li>
							<li><a href="lang-bulg-translation.html">Болгарский перевод</a></li>
							<li><a href="lang-grec-translation.html">Греческий перевод</a></li>
							<li><a href="lang-esp-translation.html">Испанский перевод</a></li>
							<li><a href="lang-ital-translation.html">Итальянский перевод</a></li>
							<li><a href="lang-litv-translation.html">Литовский перевод</a></li>
							<li><a href="lang-mold-translation.html">Молдавский перевод</a></li>
							<li><a href="lang-deu-translation.html">Немецкий перевод</a></li>
							<li><a href="lang-port-translation.html">Португальский перевод</a></li>
							<li><a href="lang-eng-translation.html">Польский перевод</a></li>
							<li><a href="lang-uzb-translation.html">Узбекский перевод</a></li>
							<li><a href="lang-ukr-translation.html">Украинский перевод</a></li>
							<li><a href="lang-zhech-translation.html">Чешский перевод</a></li>
							<li><a href="lang-fra-translation.html">Французский перевод</a></li>
							<li><a href="lang-jap-translation.html">Японский перевод</a></li>
							<li><a href="lang-eng-translation.html">Перевод редких языков</a></li>
						</ul>
					</li>
					<li><span>Специализации</span>
						<ul class="submenu">
							<li><a href="specialization.html">Все специализации</a></li>
							<li><a href="specialization-website-local.html">Перевод и локализация вебсайтов</a></li>
							<li><a href="specialization-literary-translation.html">Литературный перевод</a></li>
							<li><a href="">Нефтегазовый перевод</a></li>
							<li><a href="">IT перевод</a></li>
							<li><a href="">Перевод чертежей</a></li>
							<li><a href="">Медицинский перевод</a></li>
							<li><a href="">Технический перевод</a></li>
							<li><a href="">Юридический перевод</a></li>
						</ul>
					</li>
					<li><span>Сотрудничество</span>
						<ul class="submenu">
							<li><a href="cooperation-buro.html">Бюро переводов</a></li>
							<li><a href="cooperation.html">Партнерам</a></li>
							<li><a href="cooperation-translators.html">Переводчикам</a></li>
						</ul>
					</li>
					<li><a href="contacts.html">Контакты</a></li>
				</ul>
			</div>
		</div>
	</div>
</header>
<!-- End header -->
<!-- Content -->
<main>
	<section class="top-block top-front">
		<div class="owl-carousel carousel-1">
			<div class="item">
				<img src="<?php bloginfo('template_url');?>/img/carousel-1.jpg" alt="">
				<div class="carousel-content">
					<p>Нужен перевод прямо сейчас?</p>
					<h2>Срочный перевод от 30 минут</h2>
					<a href="#">УЗНАТЬ ПОДРОБНЕЕ</a>
				</div>
			</div>
			<div class="item">
				<img src="<?php bloginfo('template_url');?>/img/carousel-2.jpg" alt="">
				<div class="carousel-content">
					<p>Нет права на ошибку?</p>
					<h2>Мы гарантируем качественный<br>
						перевод текстов на 30+ языков</h2>
					<a href="#">УЗНАТЬ ПОДРОБНЕЕ</a>
				</div>
			</div>
			<div class="item">
				<img src="<?php bloginfo('template_url');?>/img/carousel-3.jpg" alt="">
				<div class="carousel-content">
					<p>Хотите открыть бизнес по всему миру??</p>
					<h1>Мы поможем с переводом<br>
						и локализацияей вебсайтов</h1>
					<a href="#">УЗНАТЬ ПОДРОБНЕЕ</a>
				</div>
			</div>
		</div>
	</section>
	<section class="our-help">
		<div class="wrap">
			<div class="title">Как мы можем вам помочь</div>
			<div class="help-item">
				<div class="item">
					<img src="<?php bloginfo('template_url');?>/img/our-help-1.jpg" alt="">
					<p>Перевод документов</p>
				</div>
				<div class="item">
					<img src="<?php bloginfo('template_url');?>/img/our-help-2.jpg" alt="">
					<p>Устный перевод</p>
				</div>
				<div class="item">
					<img src="<?php bloginfo('template_url');?>/img/our-help-3.jpg" alt="">
					<p>Перевод сайтов</p>
				</div>
			</div>
		</div>
	</section>
	<section class="assessment-work">
		<div class="wrap">
			<div class="title">Получите оценку работы</div>
			<div class="assessment-form">
				<div class="item">
					<input type="text" placeholder="Ваше имя*">
					<input type="email" placeholder="E-mail">
					<select name="translate from" id="">
						<option disabled selected value="" style="display: none">Перевод с</option>
						<option value="eng">английский</option>
						<option value="deu">немецкий</option>
						<option value="fra">французкий</option>
						<option value="ukr">украинский</option>
						<option value="rus">русский</option>
					</select>
				</div>
				<div class="item">
					<input type="tel" placeholder="Номер телефона*">
					<select name="date" id="">
						<option disabled selected value="" style="display: none">Сроки</option>
						<option value="срочно">срочно</option>
						<option value="5">5 дней</option>
						<option value="10">10 дней</option>
						<option value="15">15 дней</option>
					</select>
					<select name="translate to" id="">
						<option disabled selected value="" style="display: none">Перевод на</option>
						<option value="eng">английский</option>
						<option value="deu">немецкий</option>
						<option value="fra">французкий</option>
						<option value="ukr">украинский</option>
						<option value="rus">русский</option>
					</select>
				</div>
				<div class="item">
					<input type="file" placeholder="Номер телефона*">
					<textarea name="" id="" cols="20" rows="5" placeholder="Комментарии"></textarea>
				</div>
			</div>
			<input type="submit">

		</div>
	</section>
	<section class="advanteges">
		<div class="elem">
			<div class="wrap">
				<div class="title">Наши преимущества</div>
				<div class="advanteges-item">
					<div class="item">
						<div class="wrapper">
							<img src="<?php bloginfo('template_url');?>/img/advan-1.png" alt="">
							<div class="item-title">Опыт</div>
							<p>12 лет на рынке переводов.</p>
						</div>
					</div>
					<div class="item">
						<div class="wrapper">
							<img src="<?php bloginfo('template_url');?>/img/advan-2.png" alt="">
							<div class="item-title">Скорость</div>
							<p>Переводчики основы языков в штате для выполнения срочных переводов.</p>
						</div>
					</div>
					<div class="item">
						<div class="wrapper">
							<img src="<?php bloginfo('template_url');?>/img/advan-3.png" alt="">
							<div class="item-title">Точность</div>
							<p>400 + база переводчиков – носители языка по всему миру.</p>
						</div>
					</div>
					<div class="item">
						<div class="wrapper">
							<img src="<?php bloginfo('template_url');?>/img/advan-4.png" alt="">
							<div class="item-title">100% гарантия<br>качества</div>
							<p>Менеджмент проектов по европейским стандартам качества.</p>
						</div>
					</div>
					<div class="item">
						<div class="wrapper">
							<img src="<?php bloginfo('template_url');?>/img/advan-5.png" alt="">
							<div class="item-title">Удобство</div>
							<p>Новые технологии работы с клиентами позволяют загружать файлы на перевод, не выходя из офиса или дома.</p>
						</div>
					</div>
					<div class="item">
						<div class="wrapper">
							<img src="<?php bloginfo('template_url');?>/img/advan-6.png" alt="">
							<div class="item-title">Удобное<br>
								расположение</div>
							<p>Наши офисы находятся в центральных частях города.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="elem bg"></div>
	</section>
	<section class="specialization">
		<div class="wrap">
			<div class="title">Специализации</div>
			<div class="owl-carousel carousel-2">
				<div class="item">
					<div class="link">
						<img src="<?php bloginfo('template_url');?>/img/spez-1.png" alt="">
						<a href="">Локализация<br>
							вебсайтов</a>
					</div>
					<div class="link">
						<img src="<?php bloginfo('template_url');?>/img/spez-2.png" alt="">
						<a href="">Перевод чертежей</a>
					</div>
				</div>
				<div class="item">
					<div class="link">
						<img src="<?php bloginfo('template_url');?>/img/spez-3.png" alt="">
						<a href="">IT перевод</a>
					</div>
					<div class="link">
						<img src="<?php bloginfo('template_url');?>/img/spez-4.png" alt="">
						<a href="">Технический<br>
							перевод</a>
					</div>
				</div>
				<div class="item">
					<div class="link">
						<img src="<?php bloginfo('template_url');?>/img/spez-5.png" alt="">
						<a href="">Нефтегазовый
							перевод</a>
					</div>
					<div class="link">
						<img src="<?php bloginfo('template_url');?>/img/spez-6.png" alt="">
						<a href="">Юридический
							перевод</a>
					</div>
				</div>
				<div class="item">
					<div class="link">
						<img src="<?php bloginfo('template_url');?>/img/spez-1.png" alt="">
						<a href="">Локализация<br>
							вебсайтов</a>
					</div>
					<div class="link">
						<img src="<?php bloginfo('template_url');?>/img/spez-2.png" alt="">
						<a href="">Перевод чертежей</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="how-we-work">
		<div class="wrap">
			<div class="title">Как мы работаем</div>
			<div class="item-wrap">
				<div class="item">
					<div class="top-img">
						<img src="<?php bloginfo('template_url');?>/img/we-work-1.png" alt="">
					</div>
					<p>Передайте документы<br>
						и инструкции для перевода</p>
					<div class="bottom-img">
						<div>
							<img src="<?php bloginfo('template_url');?>/img/man.png" alt="">
							<p>Лично</p>
						</div>
						<div>
							<img src="<?php bloginfo('template_url');?>/img/mail.png" alt="">
							<p>По почте</p>
						</div>
						<div>
							<img src="<?php bloginfo('template_url');?>/img/cloud.png" alt="">
							<p>Загрузите<br>
								на сайте</p>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="top-img">
						<img src="<?php bloginfo('template_url');?>/img/we-work-2.png" alt="">
					</div>
					<p>Получите оценку<br>
						работы и подтвердите заказ</p>
					<div class="bottom-img">
						<div>
							<img src="<?php bloginfo('template_url');?>/img/massage.png" alt="">
							<p>Наши опытные менеджеры проектов<br> обсудят с Вами особенности задания<br>
								и предложат Вам наилучшие решения<br>
								по цене и срокам</p>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="top-img">
						<img src="<?php bloginfo('template_url');?>/img/we-work-3.png" alt="">
					</div>
					<p>Получите выполненную<br>
						работу</p>
					<div class="bottom-img">
						<div>
							<img src="<?php bloginfo('template_url');?>/img/man.png" alt="">
							<p>Лично</p>
						</div>
						<div>
							<img src="<?php bloginfo('template_url');?>/img/mail.png" alt="">
							<p>По почте</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="about-us">
		<div class="elem bg"></div>
		<div class="elem">
			<div class="wrap">
				<div class="title">О нас</div>
				<div class="about-text">
					<p>Бюро переводов “Юнона” было организовано в 2006 году и с тех пор компания сумела стать одним из лидеров на рынке переводов Киева и Украины. Сейчас бюро предоставляет свои услуги перевода украинским и иностранным компаниям, банкам и государственным организациям. Наша компания предоставляет полный комплекс услуг перевода,что избавит Вас от необходимости обращаться в несколько организаций:</p>
					<p>
						Письменный перевод официальных документов, юридических документов, бизнес документов, перевод текстов различной тематики; Вычитка, верстка документов и текстов;</p>
					<p>
						Проставление апостиля и легализация документов в МИДе, Министерстве Юстиций, Министерстве образования; Проставление штампа главного управления юстиции в г. Киев; Печать в Министерстве Здравоохранения; Нотариальное заверение перевода документов;</p>

					<a href="" class="base-btn">ПОДРОБНЕЕ</a>
				</div>
			</div>
		</div>
	</section>
	<section class="sertification">
		<div class="wrap">
			<div class="title">Работаем в соответствии с<br>
				сертификатами качества:</div>
			<div class="sertification-item">
				<div class="item"><img src="<?php bloginfo('template_url');?>/img/sert-1.png" alt=""></div>
				<div class="item"><img src="<?php bloginfo('template_url');?>/img/sert-2.png" alt=""></div>
				<div class="item"><img src="<?php bloginfo('template_url');?>/img/sert-3.png" alt=""></div>
			</div>
		</div>
	</section>
	<section class="review">
		<div class="wrap">
			<div class="title">Отзывы</div>
			<div class="owl-carousel carousel-3">
				<div class="item">
					<div class="img-block">
						<img src="<?php bloginfo('template_url');?>/img/review-img.png" alt="">
					</div>
					<div class="name">Петров Сергей</div>
					<div class="position">Директор брендингового агенства</div>
					<div class="text">Принцип восприятия непредвзято создает паллиативный интеллект, условно. Концепция ментально оспособляет закон внешнего мира. Сомнение раскладывает на элементы неоднозначный структурализм.
					</div>
				</div>
				<div class="item">
					<div class="img-block">
						<img src="<?php bloginfo('template_url');?>/img/review-img.png" alt="">
					</div>
					<div class="name">Петров Сергей</div>
					<div class="position">Директор брендингового агенства</div>
					<div class="text">Принцип восприятия непредвзято создает паллиативный интеллект, условно. Концепция ментально оспособляет закон внешнего мира. Сомнение раскладывает на элементы неоднозначный структурализм.
					</div>
				</div>
				<div class="item">
					<div class="img-block">
						<img src="<?php bloginfo('template_url');?>/img/review-img.png" alt="">
					</div>
					<div class="name">Петров Сергей</div>
					<div class="position">Директор брендингового агенства</div>
					<div class="text">Принцип восприятия непредвзято создает паллиативный интеллект, условно. Концепция ментально оспособляет закон внешнего мира. Сомнение раскладывает на элементы неоднозначный структурализм.
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="do-order">
		<div class="wrap">
			<div class="title">Заказать перевод</div>
			<div class="order-form">
				<div class="item">
					<input type="text" placeholder="Ваше имя*">
					<input type="tel" placeholder="Номер телефона*">
					<input type="email" placeholder="E-mail">
				</div>
				<div class="item">
					<input type="file" placeholder="Номер телефона*">
					<textarea name="" id="" cols="20" rows="5" placeholder="Комментарии"></textarea>
				</div>
			</div>
			<input type="submit">

		</div>
	</section>
	<section class="news-front">
		<div class="wrap">
			<div class="title">Новости</div>

			<div class="news-item">
				<div class="item">
					<img src="<?php bloginfo('template_url');?>/img/news-1.jpg" alt="">
					<div class="news-title">Прошла конференция переводчикав</div>
					<div class="sub-info">
						<div class="date"><i class="fa fa-calendar-o" aria-hidden="true"></i>24 сентября</div>
						<div class="comment"><i class="fa fa-bullhorn" aria-hidden="true"></i>0 комментариев</div>
					</div>
					<div class="text">
						Бюро переводов “Юнона” было организовано в 2006 году и с тех пор компания сумела стать одним из лидеров на рынке переводов Киева и Украины. Сейчас бюро предоставляет свои услуги перевода украинским.
					</div>
					<a href="" class="link">Читать далее</a>
				</div>
				<div class="item">
					<img src="<?php bloginfo('template_url');?>/img/news-2.jpg" alt="">
					<div class="news-title">Переведена новая книга Патрика Грина</div>
					<div class="sub-info">
						<div class="date"><i class="fa fa-calendar-o" aria-hidden="true"></i>24 сентября</div>
						<div class="comment"><i class="fa fa-bullhorn" aria-hidden="true"></i>0 комментариев</div>
					</div>
					<div class="text">
						Бюро переводов “Юнона” было организовано в 2006 году и с тех пор компания сумела стать одним из лидеров на рынке переводов Киева и Украины. Сейчас бюро предоставляет свои услуги перевода украинским.
					</div>
					<a href="" class="link">Читать далее</a>
				</div>
			</div>
		</div>
	</section>
	<section class="blog">
		<div class="wrap">
			<div class="title">Блог</div>

			<div class="blog-item">
				<div class="item">
					<img src="<?php bloginfo('template_url');?>/img/blog-1.jpg" alt="">
					<div class="blog-title">Как выбрать бюро переводов</div>
					<div class="text">
						Бюро переводов “Юнона” было организовано в 2006 году и с тех пор компания сумела стать одним из лидеров на рынке переводов Киева и Украины. Сейчас бюро предоставляет свои услуги перевода украинским.
					</div>
					<a href="" class="link">Читать далее</a>
				</div>
				<div class="item">
					<img src="<?php bloginfo('template_url');?>/img/blog-2.jpg" alt="">
					<div class="blog-title">Прошла конференция переводчикав</div>
					<div class="text">
						Бюро переводов “Юнона” было организовано в 2006 году и с тех пор компания сумела стать одним из лидеров на рынке переводов Киева и Украины. Сейчас бюро предоставляет свои услуги перевода украинским.
					</div>
					<a href="" class="link">Читать далее</a>
				</div>
				<div class="item">
					<img src="<?php bloginfo('template_url');?>/img/blog-3.jpg" alt="">
					<div class="blog-title">Переведена новая книга Патрика Грина</div>
					<div class="text">
						Бюро переводов “Юнона” было организовано в 2006 году и с тех пор компания сумела стать одним из лидеров на рынке переводов Киева и Украины. Сейчас бюро предоставляет свои услуги перевода украинским.
					</div>
					<a href="" class="link">Читать далее</a>
				</div>
			</div>
		</div>
	</section>
	<section class="address-info">
		<div class="addres-wrap">
			<div class="item logo">
				<img src="<?php bloginfo('template_url');?>/img/logo-blue.png" alt="">
				<p>Бюро переводов “Юнона” было организовано в 2006 году и с тех пор компания сумела стать одним из лидеров на рынке переводов Киева и Украины. Сейчас бюро предоставляет свои услуги перевода украинским и иностранным компаниям, банкам и государственным организациям.
				</p>
			</div>
			<div class="item location">
				<div class="box">
					<img src="<?php bloginfo('template_url');?>/img/location-img.png" alt="">
					<div>
						<p>Адрес:</p>
						<span>г. Киев, ул. Комарова 45</span>
					</div>
					<div>
						<p>Телефон:</p>
						<span>+3 8(067) 56 56 356</span>
					</div>
					<div>
						<p>E-mail:</p>
						<span>example@gmail.com</span>
					</div>
				</div>
			</div>
			<div class="item location">
				<div class="box">
					<img src="<?php bloginfo('template_url');?>/img/location-img.png" alt="">
					<div>
						<p>Адрес:</p>
						<span>г. Львов, ул. Комарова 45</span>
					</div>
					<div>
						<p>Телефон:</p>
						<span>+3 8(067) 56 56 356</span>
					</div>
					<div>
						<p>E-mail:</p>
						<span>example@gmail.com</span>
					</div>
				</div>
			</div>
			<div class="item location">
				<div class="box">
					<img src="<?php bloginfo('template_url');?>/img/location-img.png" alt="">
					<div>
						<p>Адрес:</p>
						<span>г. Одесса, ул. Комарова 45</span>
					</div>
					<div>
						<p>Телефон:</p>
						<span>+3 8(067) 56 56 356</span>
					</div>
					<div>
						<p>E-mail:</p>
						<span>example@gmail.com</span>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="custom-g-map">
		<div id="map"></div>
	</div>
	<div class="subscribe">
		<div class="wrap-subscribe">
			<div class="title">Подпишитесь на наши новости:</div>
			<input type="email" placeholder="E-mail">
			<input type="submit" class="base-btn" value="ПОДПИСАТЬСЯ">
		</div>
	</div>
</main>
<!-- End content -->
<!-- Footer -->
<footer>
	<div class="footer-wrap">
		<div class="item left">
			<p><img src="<?php bloginfo('template_url');?>/img/f-location.png" alt="">г. Киев, ул. Комарова 45</p>
			<p><img src="<?php bloginfo('template_url');?>/img/f-phone.png" alt="">+3 8(067) 56 56 356</p>
			<p><img src="<?php bloginfo('template_url');?>/img/f-phone.png" alt="">+3 8(067) 56 56 356</p>
			<p><img src="<?php bloginfo('template_url');?>/img/f-mail.png" alt="">example@gmail.com</p>
			<div class="social">
				<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
				<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
				<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
			</div>
			<div class="copy">© 2016. Все права защищены</div>
		</div>
		<div class="item f-menu">
			<div class="f-title">Юнона</div>
			<ul>
				<li><a href="">Главная</a></li>
				<li><a href="">Сотрудничество</a></li>
				<li><a href="">Контакты</a></li>
			</ul>
		</div>
		<div class="item f-menu">
			<div class="f-title">О СЕРВИСЕ</div>
			<ul>
				<li><a href="">О нашей команде</a></li>
				<li><a href="">Вопросы - Ответы</a></li>
				<li><a href="">Отзывы</a></li>
			</ul>
		</div>
		<div class="item f-menu">
			<div class="f-title">УСЛУГИ</div>
			<ul>
				<li><a href="">Устный перевод</a></li>
				<li><a href="">Перевод и локализация вебсайтов</a></li>
				<li><a href="">Перевод аудио и видео</a></li>
				<li><a href="">Уроки по Скайпу</a></li>
				<li><a href="">Письменный перевод</a></li>
			</ul>
		</div>
		<div class="item f-menu">
			<div class="f-title">ЯЗЫКИ</div>
			<ul>
				<li><a href="">Английский перевод</a></li>
				<li><a href="">Французский перевод</a></li>
				<li><a href="">Испанский перевод</a></li>
				<li><a href="">Итальянский перевод</a></li>
				<li><a href="">Немецкий перевод</a></li>
				<li><a href="">Португальский перевод</a></li>
				<li><a href="">Польский перевод</a></li>
				<li><a href="">Все языки</a></li>
			</ul>
		</div>
		<div class="item f-menu">
			<div class="f-title">СПЕЦИАЛИЗАЦИИ</div>
			<ul>
				<li><a href="">Литературный перевод</a></li>
				<li><a href="">Медицинский перевод</a></li>
				<li><a href="">Технический перевод</a></li>
				<li><a href="">Юридический перевод</a></li>
				<li><a href="">Нефтегазовый перевод</a></li>
				<li><a href="">IT перевод</a></li>
				<li><a href="">Технический перевод</a></li>
			</ul>
		</div>
	</div>
	<a href="" id="back-to-top" class="show"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
</footer>

<script src="<?php bloginfo('template_url');?>/js/libs.min.js"></script>
<script src="<?php bloginfo('template_url');?>/js/common.js"></script>
<script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyDGbFLb1MsPZkU-GQxA8-5bMRdQMe8-3PM&sensor=false&extension=.js'></script>
<script>
	google.maps.event.addDomListener(window, 'load', init);
	var map;
	function init() {
		var mapOptions = {
			center: new google.maps.LatLng(50.4543552, 30.5208583),
			zoom: 16,
			zoomControl: false,
			disableDoubleClickZoom: true,
			mapTypeControl: false,
			scaleControl: false,
			scrollwheel: false,
			panControl: false,
			streetViewControl: false,
			draggable : true,
			overviewMapControl: false,
			overviewMapControlOptions: {
				opened: false,
			},
			mapTypeId: google.maps.MapTypeId.ROADMAP,
			styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}],
		}
		var mapElement = document.getElementById('map');
		var map = new google.maps.Map(mapElement, mapOptions);
		var locations = [
			['Junona', 'undefined', 'undefined', 'undefined', 'undefined', 50.4543552, 30.5208583, '<?php echo get_bloginfo('template_url');?>/img/map-icon.png']
		];
		for (i = 0; i < locations.length; i++) {
			if (locations[i][1] =='undefined'){ description ='';} else { description = locations[i][1];}
			if (locations[i][2] =='undefined'){ telephone ='';} else { telephone = locations[i][2];}
			if (locations[i][3] =='undefined'){ email ='';} else { email = locations[i][3];}
			if (locations[i][4] =='undefined'){ web ='';} else { web = locations[i][4];}
			if (locations[i][7] =='undefined'){ markericon ='';} else { markericon = locations[i][7];}

			marker = new google.maps.Marker({
				icon: markericon,
				position: new google.maps.LatLng(locations[i][5], locations[i][6]),
				map: map,
				title: locations[i][0],
				desc: description,
				tel: telephone,
				email: email,
				web: web
			});
			link = '<?php echo get_bloginfo('template_url');?>/img/map-icon.png';
		}
	}
</script>
<?php wp_footer(); ?>
</body>
</html>
