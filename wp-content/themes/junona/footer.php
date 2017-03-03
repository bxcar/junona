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
            <?php $addresses = get_field('footer_addresses', 'option');
            if ($addresses) {
                foreach ($addresses as $address) {
                    ?>
                    <p><img src="<?= $address['footer_address_item_image'] ?>"
                            alt=""><?= $address['footer_address_item_text'] ?></p>
                    <?php
                }
            }

            $phones = get_field('footer_phones', 'option');
            if ($phones) {
                foreach ($phones as $phone) {
                    ?>
                    <p><img src="<?= $phone['footer_phone_item_image'] ?>"
                            alt=""><?= $phone['footer_phone_item_text'] ?></p>
                    <?php
                }
            }

            $emails = get_field('footer_emails', 'option');
            if ($emails) {
                foreach ($emails as $email) {
                    ?>
                    <p><img src="<?= $email['footer_email_item_image'] ?>"
                            alt=""><?= $email['footer_email_item_text'] ?></p>
                    <?php
                }
            }
            ?>
            <div class="social">
                <?php
                $socials = get_field('footer_socials', 'option');
                if ($socials) {
                    foreach ($socials as $social) {
                        ?>
                        <a href="<?= $social['footer_social_item_link'] ?>">
                            <i class="fa <?= $social['footer_social_item_image'] ?>" aria-hidden="true"></i>
                        </a>
                        <?php
                    }
                }
                ?>
            </div>
            <div class="copy"><?php the_field('footer_little_text', 'option'); ?></div>
        </div>
        <div class="item f-menu">
            <div class="f-title"><?php the_field('footer_menu_1_title', 'option'); ?></div>
            <?php wp_nav_menu(array('theme_location' => 'menu-1-footer', 'menu_class' => '', 'container' => 'false')); ?>
        </div>
        <div class="item f-menu">
            <div class="f-title"><?php the_field('footer_menu_2_title', 'option'); ?></div>
            <?php wp_nav_menu(array('theme_location' => 'menu-2-footer', 'menu_class' => '', 'container' => 'false')); ?>
        </div>
        <div class="item f-menu">
            <div class="f-title"><?php the_field('footer_menu_3_title', 'option'); ?></div>
            <?php wp_nav_menu(array('theme_location' => 'menu-3-footer', 'menu_class' => '', 'container' => 'false')); ?>
        </div>
        <div class="item f-menu">
            <div class="f-title"><?php the_field('footer_menu_4_title', 'option'); ?></div>
            <?php wp_nav_menu(array('theme_location' => 'menu-4-footer', 'menu_class' => '', 'container' => 'false')); ?>
        </div>
        <div class="item f-menu">
            <div class="f-title"><?php the_field('footer_menu_5_title', 'option'); ?></div>
            <?php wp_nav_menu(array('theme_location' => 'menu-5-footer', 'menu_class' => '', 'container' => 'false')); ?>
        </div>
    </div>
    <a href="" id="back-to-top" class="show"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
</footer>

<?php if((get_the_ID() == '2686') || (get_the_ID() == '2695') ||(get_the_ID() == '2694')) {
    $lat = 46.630407;
    $long = 32.610670;
}
else {
    $lat = 50.452232;
    $long = 30.517242;
}
$template_cur = get_current_template();
if (($template_cur == 'index.php') || ($template_cur == 'page-contacts.php') || ($template_cur == 'page-about-service.php')) { ?>
    <script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyDGbFLb1MsPZkU-GQxA8-5bMRdQMe8-3PM&extension=.js'></script>
    <script>
        google.maps.event.addDomListener(window, 'load', init);
        var map;
        function init() {
            var mapOptions = {
                center: new google.maps.LatLng(<?= $lat ?>, <?= $long ?>),
                zoom: 16,
                zoomControl: true,
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
                ['Junona', 'undefined', 'undefined', 'undefined', 'undefined', <?= $lat ?>, <?= $long ?>, '<?php bloginfo('template_url'); ?>/img/map-icon.png']
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
<?php } ?>
<?php wp_footer(); ?>
<?php //include ('app/js/byack_custom.php'); ?>
</body>
</html>
