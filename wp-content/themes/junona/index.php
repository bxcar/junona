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

<?php get_header(); ?>

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

<?php get_footer(); ?>
