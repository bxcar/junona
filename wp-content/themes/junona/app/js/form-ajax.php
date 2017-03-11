<script>
    jQuery(document).ready(function () {
        // this is the id of the form

        jQuery("#static-form").submit(function (e) {

            jQuery("#submit-static-form").attr("value", "");
            jQuery("#submit-static-form").css(
                {
                    "background-image": "url(<?= get_template_directory_uri()?>/img/loader-form.gif)",
                    "background-size": "15%",
                    "background-repeat": "no-repeat",
                    "background-position-y": "50%",
                    "background-position-x": "50%"
                }
            );
            var url = "<?= get_template_directory_uri()?>/sendemail.php"; // the script where you handle the form input.

            var form = jQuery('#static-form')[0]; // You need to use standart javascript object here
            var formData = new FormData(form);
            formData.append('send-to', '<?php the_field('general_site_email', 'option') ?>');
//        formData.append('files[]', jQuery('#file_attach')[0]);

            jQuery.ajax({
                url: url,
                data: formData,
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                type: 'POST',
                success: function (data) {
                    if (data == 1) {
                        jQuery("#submit-static-form").attr("value", "<?php _e('Успешно отправлено', 'junona') ?>");
                        jQuery("#submit-static-form").css({"background-image": "none"});

                        jQuery('#static-form')[0].reset();

                        setTimeout(func, 10000);

                        function func() {
                            jQuery("#submit-static-form").attr("value", "<?php _e('Отправить повторно', 'junona') ?>");
                            jQuery("#submit-static-form").css({"background-image": "none"});
                        }
                    }

                    else {
                        jQuery("#submit-static-form").attr("value", "<?php _e('Произошла ошибка', 'junona') ?>");
                        jQuery("#submit-static-form").css({"background-image": "none"});

                        setTimeout(func, 3000);

                        function func() {
                            jQuery("#submit-static-form").attr("value", "<?php _e('Отправить повторно', 'junona') ?>");
                            jQuery("#submit-static-form").css({"background-image": "none"});
                        }
                    }
//                                            alert(data);
                },

                error: function (data) {
                    jQuery("#submit-static-form").attr("value", "<?php _e('Произошла ошибка', 'junona') ?>");
                    jQuery("#submit-static-form").css({"background-image": "none"});

                    setTimeout(func, 3000);

                    function func() {
                        jQuery("#submit-static-form").attr("value", "<?php _e('Отправить повторно', 'junona') ?>");
                        jQuery("#submit-static-form").css({"background-image": "none"});
                    }
                }
            });

            e.preventDefault(); // avoid to execute the actual submit of the form.
        });

        jQuery("#static-form-2").submit(function (e) {

            jQuery("#static-form-2-submit").attr("value", "");
            jQuery("#static-form-2-submit").css(
                {
                    "background-image": "url(<?= get_template_directory_uri()?>/img/loader-form.gif)",
                    "background-size": "15%",
                    "background-repeat": "no-repeat",
                    "background-position-y": "50%",
                    "background-position-x": "50%"
                }
            );
            var url = "<?= get_template_directory_uri()?>/sendemail.php"; // the script where you handle the form input.

            var form = jQuery('#static-form-2')[0]; // You need to use standart javascript object here
            var formData = new FormData(form);
            formData.append('send-to', '<?php the_field('general_site_email', 'option') ?>');
//        formData.append('files[]', jQuery('#file_attach')[0]);

            jQuery.ajax({
                url: url,
                data: formData,
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                type: 'POST',
                success: function (data) {
                    if (data == 1) {
                        jQuery("#static-form-2-submit").attr("value", "<?php _e('Успешно отправлено', 'junona') ?>");
                        jQuery("#static-form-2-submit").css({"background-image": "none"});

                        jQuery('#static-form-2')[0].reset();

                        setTimeout(func, 10000);

                        function func() {
                            jQuery("#static-form-2-submit").attr("value", "<?php _e('Отправить повторно', 'junona') ?>");
                            jQuery("#static-form-2-submit").css({"background-image": "none"});
                        }
                    }

                    else {
                        jQuery("#static-form-2-submit").attr("value", "<?php _e('Произошла ошибка', 'junona') ?>");
                        jQuery("#static-form-2-submit").css({"background-image": "none"});

                        setTimeout(func, 3000);

                        function func() {
                            jQuery("#static-form-2-submit").attr("value", "<?php _e('Отправить повторно', 'junona') ?>");
                            jQuery("#static-form-2-submit").css({"background-image": "none"});
                        }
                    }
//                                            alert(data);
                },

                error: function (data) {
                    jQuery("#static-form-2-submit").attr("value", "<?php _e('Произошла ошибка', 'junona') ?>");
                    jQuery("#static-form-2-submit").css({"background-image": "none"});

                    setTimeout(func, 3000);

                    function func() {
                        jQuery("#static-form-2-submit").attr("value", "<?php _e('Отправить повторно', 'junona') ?>");
                        jQuery("#static-form-2-submit").css({"background-image": "none"});
                    }
                }
            });

            e.preventDefault(); // avoid to execute the actual submit of the form.
        });

        // this is the id of the form
        jQuery("#subscription-form").submit(function (e) {

            jQuery("#subscription-form-submit").attr("value", "");
            jQuery("#subscription-form-submit").css(
                {
                    "background-image": "url(<?= get_template_directory_uri()?>/img/loader-form.gif)",
                    "background-size": "15%",
                    "background-repeat": "no-repeat",
                    "background-position-y": "50%",
                    "background-position-x": "50%"
                }
            );
            var url = "<?= get_template_directory_uri()?>/sendemail.php"; // the script where you handle the form input.

            var form_2 = jQuery('#subscription-form')[0]; // You need to use standart javascript object here
            var formData_2 = new FormData(form_2);
            formData_2.append('send-to', '<?php the_field('general_site_email', 'option') ?>');
//        formData.append('files[]', jQuery('#file_attach')[0]);

            jQuery.ajax({
                url: url,
                data: formData_2,
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                type: 'POST',
                success: function (data) {
                    if (data == 1) {
                        jQuery("#subscription-form-submit").attr("value", "<?php _e('Подписка оформлена', 'junona') ?>");
                        jQuery("#subscription-form-submit").css({"background-image": "none"});

                        jQuery('#subscription-form')[0].reset();

                        setTimeout(func, 10000);

                        function func() {
                            jQuery("#subscription-form-submit").attr("value", "<?php _e('Отправить повторно', 'junona') ?>");
                            jQuery("#subscription-form-submit").css({"background-image": "none"});
                        }
                    }

                    else {
                        jQuery("#subscription-form-submit").attr("value", "<?php _e('Произошла ошибка', 'junona') ?>");
                        jQuery("#subscription-form-submit").css({"background-image": "none"});

                        setTimeout(func, 3000);

                        function func() {
                            jQuery("#subscription-form-submit").attr("value", "<?php _e('Отправить повторно', 'junona') ?>");
                            jQuery("#subscription-form-submit").css({"background-image": "none"});
                        }
                    }
//                                            alert(data);
                },

                error: function (data) {
                    jQuery("#subscription-form-submit").attr("value", "<?php _e('Произошла ошибка', 'junona') ?>");
                    jQuery("#subscription-form-submit").css({"background-image": "none"});

                    setTimeout(func, 3000);

                    function func() {
                        jQuery("#subscription-form-submit").attr("value", "<?php _e('Отправить повторно', 'junona') ?>");
                        jQuery("#subscription-form-submit").css({"background-image": "none"});
                    }
                }
            });

            e.preventDefault(); // avoid to execute the actual submit of the form.
        });
    });

</script>