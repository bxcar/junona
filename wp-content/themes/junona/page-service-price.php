<?php
/**
 * Template Name: service-price
 */
?>

<!--ДОДЕЛАЙ СТРОНГИ ДЛЯ ПРИМЕЧАНИЯХ И ЗАМЕНУ ЦЕН В ТАБЛИЦЕ!!!-->

<?php get_header(); ?>

<!-- Content -->
<main>
    <section class="top-block inside-top services-top">
        <h1><?php the_field('page_title'); ?></h1>
        <div class="breadcrumb">
            <ul>
                <li><a href="index.html">Главная</a></li>
                <li><a href="services.html">Услуги</a></li>
                <li><span>Стоимость</span></li>
            </ul>
        </div>
        <style>
            .inside-top.services-top {
                background: url(<?php the_field('header_background_image');?>) 50% 50% no-repeat;
                background-size: cover;
            }
        </style>
    </section>
    <section class="text-translate">
        <div class="wrap">
            <div class="title"><?php the_field('table_main_title'); ?></div>
            <?php the_field('table_description'); ?>
            <div class="table-price">
                <div class="table-row top forth">
                    <div class="lang"><?= get_field('table_titles')[0]['table_title_1'];?></div>
                    <div class="transl-to"><?= get_field('table_titles')[0]['table_title_2'];?></div>
                    <div class="transl-from"><?= get_field('table_titles')[0]['table_title_3'];?></div>
                    <div class=""><?= get_field('table_titles')[0]['table_title_4'];?></div>
                </div>

                <?php $table_rows = get_field('tables_items_list');
                if ($table_rows) {
                    foreach ($table_rows as $table_row) {
                        ?>
                        <div class="table-row">
                            <div class="lang">
                                <img src="<?= $table_row['table_item_image'];?>" alt="">
                                <p><?= $table_row['table_item_title'];?></p>
                            </div>
                            <div class="translate-price"><span><?= $table_row['table_item_price1'];?></span></div>
                            <div class="translate-price"><span><?= $table_row['table_item_price2'];?></span></div>
                            <a href="<?php
                            if ($table_row['table_item_price3_link']['postid']) {
                                the_permalink($table_row['table_item_price3_link']['postid']);
                            } else {
                                echo $table_row['table_item_price3_link']['url'];
                            }
                            ?>" class="link-translate"><?= $table_row['table_item_price3_text'];?></a>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
        <script>
            window.onload = function () {
                var replaced_element = document.getElementsByClassName("translate-price");
                for (var i = 0; i < replaced_element.length; i++) {
                    replaced_element[i].innerHTML = replaced_element[i].innerHTML.replace(/-?\d+/g, "<strong>$&</strong>");
                    replaced_element[i].innerHTML = replaced_element[i].innerHTML.replace(new RegExp("грн", 'g'), "<strong>$&</strong>");
                }
            }
        </script>
        <style>
             .table-price strong {
                color: #5a5c5d;
                font-size: .875rem;
                line-height: 24px;
                font-weight: 600;
                width: 17%;
            }
        </style>
    </section>
    <section class="document-translate">
        <div class="wrap">
            <div class="title white">Перевод стандартных документов<br> и нотариальное заверение</div>
            <p>К стандартным документам относятся докуметы выданные в Украине:</p>
            <ul>
                <li><p>Свидетельства о рождении;</p></li>
                <li><p>Свидетельства о браке;</p></li>
                <li><p>Свидетельства о разводе;</p></li>
                <li><p>Свидетельства о  смерти;</p></li>
                <li><p>Справки о несудимости;</p></li>
                <li><p>Справки с места работы;</p></li>
                <li><p>Справки о зарплате;</p></li>
                <li><p>Справки о состоянии счета в банке;</p></li>
                <li><p>Дипломы (без приложения).</p></li>
            </ul>
            <p>Перевод стандартных документов, на указанные ниже языки, может быть выполнен в срочном порядке без наценки за срочность.</p>
            <div class="table-price">
                <div class="table-row top">
                    <div class="lang">Язык/Услуга</div>
                    <div class="transl-to">пЕРЕВОД ТЕКСТА</div>
                    <div class="transl-from">Нотариальное заверение перевода</div>
                </div>
                <div class="table-row">
                    <div class="lang">
                        <p>Английский</p>
                    </div>
                    <div class="translate-price">70 грн</div>
                    <div class="translate-price">120 грн</div>
                    <a href="" class="link-translate">Заказать перевод</a>
                </div>
                <div class="table-row">
                    <div class="lang">
                        <p>Немецкий</p>
                    </div>
                    <div class="translate-price"><span>от</span> 80 грн</div>
                    <div class="translate-price"><span>от</span> 120 грн</div>
                    <a href="#" class="link-translate">Заказать перевод</a>
                </div>
                <div class="table-row">
                    <div class="lang">
                        <p>Французский</p>
                    </div>
                    <div class="translate-price"><span>от</span> 80 грн</div>
                    <div class="translate-price"><span>от</span> 120 грн</div>
                    <a href="#" class="link-translate">Заказать перевод</a>
                </div>
                <div class="table-row">
                    <div class="lang">
                        <p>Армянский</p>
                    </div>
                    <div class="translate-price">20 грн</div>
                    <div class="translate-price"></div>
                    <a href="#" class="link-translate">Заказать услугу</a>
                </div>
            </div>
        </div>
    </section>
    <section class="apostil">
        <div class="wrap">
            <div class="title">Апостиль и легализация</div>
            <div class="table-price services-price">
                <div class="table-row top">
                    <div class="lang">услуга</div>
                    <div class="transl-to">Стоимость</div>
                    <div class="transl-from">Срок выполнения</div>
                </div>
                <div class="table-row">
                    <div class="lang">
                        <img src="img/services-1.png" alt="">
                        <p>Проставление апостиля в МИДе</p>
                    </div>
                    <div class="translate-price">195 грн</div>
                    <div class="translate-price">5 раб. дней</div>
                    <a href="" class="link-translate">Заказать услугу</a>
                </div>
                <div class="table-row">
                    <div class="lang">
                        <img src="img/services-2.png" alt="">
                        <p>Проставление апостиля в Министерстве
                            Юстиции</p>
                    </div>
                    <div class="translate-price">195 грн</div>
                    <div class="translate-price">5 раб. дней</div>
                    <a href="" class="link-translate">Заказать услугу</a>
                </div>
                <div class="table-row">
                    <div class="lang">
                        <img src="img/services-3.png" alt="">
                        <p>Проставление апостиля в Министерстве
                            Образования</p>
                    </div>
                    <div class="translate-price">400 грн</div>
                    <div class="translate-price">1-2 месяца
                        20 раб.дней</div>
                    <a href="" class="link-translate">Заказать услугу</a>
                </div>
                <div class="table-row">
                    <div class="lang">
                        <img src="img/services-4.png" alt="">
                        <p>Печать в Министерстве Здравоохранения</p>
                    </div>
                    <div class="translate-price">195 грн</div>
                    <div class="translate-price">5 раб. дней</div>
                    <a href="" class="link-translate">Заказать услугу</a>
                </div>
                <div class="table-row">
                    <div class="lang">
                        <img src="img/services-5.png" alt="">
                        <p>Проставление штампа главного управления
                            юстиции в г. Киев</p>
                    </div>
                    <div class="translate-price">120 грн</div>
                    <div class="translate-price">2-3 раб.дня</div>
                    <a href="" class="link-translate">Заказать услугу</a>
                </div>
            </div>
        </div>
    </section>
    <section class="extra-services">
        <div class="wrap">
            <div class="title white">Дополнительные услуги</div>
            <div class="table-price">
                <div class="table-row top">
                    <div class="lang">услуга</div>
                    <div class="transl-to">Стоимость</div>
                </div>
                <div class="table-row">
                    <div class="lang">
                        <img src="img/pic-1.png" alt="">
                        <p>Вычитка перевода</p>
                    </div>
                    <div class="translate-price">50% от полной стоимости 1 стр.</div>
                    <a href="" class="link-translate">Заказать услугу</a>
                </div>
                <div class="table-row">
                    <div class="lang">
                        <img src="img/pic-2.png" alt="">
                        <p>Редактирование перевода носителем языка</p>
                    </div>
                    <div class="translate-price">+ 40% к стоимости заказа</div>
                    <a href="" class="link-translate">Заказать услугу</a>
                </div>
                <div class="table-row">
                    <div class="lang">
                        <img src="img/pic-3.png" alt="">
                        <p>Курьерская доставка по городу</p>
                    </div>
                    <div class="translate-price">70 грн</div>
                    <a href="" class="link-translate">Заказать услугу</a>
                </div>
                <div class="table-row">
                    <div class="lang">
                        <img src="img/pic-4.png" alt="">
                        <p>Курьерская доставка  при заказе от 1000 грн</p>
                    </div>
                    <div class="translate-price">бесплатно</div>
                    <a href="" class="link-translate">Заказать услугу</a>
                </div>
            </div>
            <div class="text">
                <p class="subtitle">Примечание:</p>
                <p>Помните, что такие факторы как - сроки, тематика, формат текста, могут повлиять на окончательную стоимость. Пожалуйста, согласуте цену с менеджером по телефону. В большинстве случаев точную стоимость заказа сразу установить сложно, поскольку окончательная цена считается по страницам исходного текста.</p>
                <p>Уважаемые Постоянные Клиенты, для Вас существует гибкая система скидок.</p>
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

</main>
<!-- End content -->

<?php get_footer(); ?>