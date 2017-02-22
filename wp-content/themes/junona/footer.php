<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package junona
 */

?>

<!-- Footer -->
<footer>
    <div class="footer-wrap">
        <div class="item left">
            <p><img src="<?php bloginfo('template_url'); ?>/img/f-location.png" alt="">г. Киев, ул. Комарова 45</p>
            <p><img src="<?php bloginfo('template_url'); ?>/img/f-phone.png" alt="">+3 8(067) 56 56 356</p>
            <p><img src="<?php bloginfo('template_url'); ?>/img/f-phone.png" alt="">+3 8(067) 56 56 356</p>
            <p><img src="<?php bloginfo('template_url'); ?>/img/f-mail.png" alt="">example@gmail.com</p>
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

<script src='https://maps.googleapis.com/maps/api/js?key=&sensor=false&extension=.js'></script>
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
            draggable: true,
            overviewMapControl: false,
            overviewMapControlOptions: {
                opened: false,
            },
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            styles: [{
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [{"color": "#e9e9e9"}, {"lightness": 17}]
            }, {
                "featureType": "landscape",
                "elementType": "geometry",
                "stylers": [{"color": "#f5f5f5"}, {"lightness": 20}]
            }, {
                "featureType": "road.highway",
                "elementType": "geometry.fill",
                "stylers": [{"color": "#ffffff"}, {"lightness": 17}]
            }, {
                "featureType": "road.highway",
                "elementType": "geometry.stroke",
                "stylers": [{"color": "#ffffff"}, {"lightness": 29}, {"weight": 0.2}]
            }, {
                "featureType": "road.arterial",
                "elementType": "geometry",
                "stylers": [{"color": "#ffffff"}, {"lightness": 18}]
            }, {
                "featureType": "road.local",
                "elementType": "geometry",
                "stylers": [{"color": "#ffffff"}, {"lightness": 16}]
            }, {
                "featureType": "poi",
                "elementType": "geometry",
                "stylers": [{"color": "#f5f5f5"}, {"lightness": 21}]
            }, {
                "featureType": "poi.park",
                "elementType": "geometry",
                "stylers": [{"color": "#dedede"}, {"lightness": 21}]
            }, {
                "elementType": "labels.text.stroke",
                "stylers": [{"visibility": "on"}, {"color": "#ffffff"}, {"lightness": 16}]
            }, {
                "elementType": "labels.text.fill",
                "stylers": [{"saturation": 36}, {"color": "#333333"}, {"lightness": 40}]
            }, {"elementType": "labels.icon", "stylers": [{"visibility": "off"}]}, {
                "featureType": "transit",
                "elementType": "geometry",
                "stylers": [{"color": "#f2f2f2"}, {"lightness": 19}]
            }, {
                "featureType": "administrative",
                "elementType": "geometry.fill",
                "stylers": [{"color": "#fefefe"}, {"lightness": 20}]
            }, {
                "featureType": "administrative",
                "elementType": "geometry.stroke",
                "stylers": [{"color": "#fefefe"}, {"lightness": 17}, {"weight": 1.2}]
            }],
        }
        var mapElement = document.getElementById('map');
        var map = new google.maps.Map(mapElement, mapOptions);
        var locations = [
            ['Junona', 'undefined', 'undefined', 'undefined', 'undefined', 50.4543552, 30.5208583, '<?php bloginfo('template_url'); ?>/img/map-icon.png']
        ];
        for (i = 0; i < locations.length; i++) {
            if (locations[i][1] == 'undefined') {
                description = '';
            } else {
                description = locations[i][1];
            }
            if (locations[i][2] == 'undefined') {
                telephone = '';
            } else {
                telephone = locations[i][2];
            }
            if (locations[i][3] == 'undefined') {
                email = '';
            } else {
                email = locations[i][3];
            }
            if (locations[i][4] == 'undefined') {
                web = '';
            } else {
                web = locations[i][4];
            }
            if (locations[i][7] == 'undefined') {
                markericon = '';
            } else {
                markericon = locations[i][7];
            }

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
            link = '<?php bloginfo('template_url'); ?>/img/map-icon.png';
        }
    }
</script>
<?php wp_footer(); ?>
</body>
</html>
