<?php
require_once('inc/class.phpmailer.php');
error_reporting( E_ERROR );

$required_field = $_POST['required-field'];

$name = '';
if ($_POST['name']) {
    $name = strip_tags(trim($_POST['name']));
}

$email = '';
if ($_POST['email']) {
    $email = strip_tags(trim($_POST['email']));
}

$text = '';
if ($_POST['text']) {
    $text = strip_tags(trim($_POST['text']));
}

$phone = '';
if ($_POST['phone']) {
    $phone = strip_tags(trim($_POST['phone']));
}

$translate_from = '';
if ($_POST['translate_from']) {
    $translate_from = strip_tags(trim($_POST['translate_from']));
}

$translate_to = '';
if ($_POST['translate_to']) {
    $translate_to = strip_tags(trim($_POST['translate_to']));
}

$date = '';
if ($_POST['date']) {
    $date = strip_tags(trim($_POST['date']));
}

$order = '';
if ($_POST['order']) {
    $order = strip_tags(trim($_POST['order']));
}

$source = '';
if ($_POST['source']) {
    $source = strip_tags(trim($_POST['source']));
}

$business_type = '';
if ($_POST['business-type']) {
    $business_type = strip_tags(trim($_POST['business-type']));
}

$translate_languages = '';
if ($_POST['translate_languages']) {
    $translate_languages = strip_tags(trim($_POST['translate_languages']));
}

$surname = '';
if ($_POST['surname']) {
    $surname = strip_tags(trim($_POST['surname']));
}

$lesson_language = '';
if ($_POST['lesson_language']) {
    $lesson_language = strip_tags(trim($_POST['lesson_language']));
}

$lesson_date = '';
if ($_POST['lesson_date']) {
    $lesson_date = strip_tags(trim($_POST['lesson_date']));
}

$level = '';
if ($_POST['level']) {
    $level = strip_tags(trim($_POST['level']));
}

$lesson_time = '';
if ($_POST['lesson_time']) {
    $lesson_time = strip_tags(trim($_POST['lesson_time']));
}

$skype = '';
if ($_POST['skype']) {
    $skype = strip_tags(trim($_POST['skype']));
}

$budget = '';
if ($_POST['budget']) {
    $budget = strip_tags(trim($_POST['budget']));
}

$site_translate = '';
if ($_POST['site-translate']) {
    $site_translate = strip_tags(trim($_POST['site-translate']));
}

$date_2 = '';
if ($_POST['date-2']) {
    $date_2 = strip_tags(trim($_POST['date-2']));
}

$time = '';
if ($_POST['time']) {
    $time = strip_tags(trim($_POST['time']));
}

$msg = "<html><body style='font-family:Arial,sans-serif;'>";
$msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Новая заявка - Юнона</h2>\r\n";
if (!empty($name)) {
    $msg .= "<p><strong>Имя:</strong> " . $name . "</p>\r\n";
}

if (!empty($email)) {
    $msg .= "<p><strong>Email:</strong> " . $email . "</p>\r\n";
}

if (!empty($phone)) {
    $msg .= "<p><strong>Телефон:</strong> " . $phone . "</p>\r\n";
}

if (!empty($text)) {
    $msg .= "<p><strong>Комментарий:</strong> " . $text . "</p>\r\n";
}

if (!empty($translate_from)) {
    $msg .= "<p><strong>Перевод с:</strong> " . $translate_from . "</p>\r\n";
}

if (!empty($translate_to)) {
    $msg .= "<p><strong>Перевод на:</strong> " . $translate_to . "</p>\r\n";
}

if (!empty($date)) {
    $msg .= "<p><strong>Сроки:</strong> " . $date . "</p>\r\n";
}

if (!empty($business_type)) {
    $msg .= "<p><strong>Тип бизнеса:</strong> " . $business_type . "</p>\r\n";
}

if (!empty($translate_languages)) {
    $msg .= "<p><strong>Язык перевода:</strong> " . $translate_languages . "</p>\r\n";
}

if (!empty($surname)) {
    $msg .= "<p><strong>Фамилия:</strong> " . $surname . "</p>\r\n";
}

if (!empty($lesson_language)) {
    $msg .= "<p><strong>Язык урока:</strong> " . $lesson_language . "</p>\r\n";
}

if (!empty($lesson_date)) {
    $msg .= "<p><strong>Дата урока:</strong> " . $lesson_date . "</p>\r\n";
}

if (!empty($lesson_time)) {
    $msg .= "<p><strong>Время урока:</strong> " . $lesson_time . "</p>\r\n";
}

if (!empty($level)) {
    $msg .= "<p><strong>Уровень:</strong> " . $level . "</p>\r\n";
}

if (!empty($skype)) {
    $msg .= "<p><strong>Skype:</strong> " . $skype . "</p>\r\n";
}

if (!empty($budget)) {
    $msg .= "<p><strong>Бюджет:</strong> " . $budget . "</p>\r\n";
}

if (!empty($site_translate)) {
    $msg .= "<p><strong>Адрес сайта на перевод:</strong> " . $site_translate . "</p>\r\n";
}

if (!empty($date_2)) {
    $msg .= "<p><strong>Дата:</strong> " . $date_2 . "</p>\r\n";
}

if (!empty($time)) {
    $msg .= "<p><strong>Время:</strong> " . $time . "</p>\r\n";
}

$msg .= "<p><strong>Форма:</strong> " . $order . "</p>\r\n";
$msg .= "<p><strong>Источник:</strong> " . $source . "</p>\r\n";
$msg .= "</body></html>";


//$email->AddReplyTo('malanchukdima@mail.ru', 'Reply to name');

$email = new PHPMailer();
$email->CharSet = 'UTF-8';
$email->From = 'malanchukdima@mail.ru';
if (!empty($name)) {
    $email->FromName = $name;
} else {
    $email->FromName = 'Client';
}

$email->Subject = 'Новая заявка - Юнона';
$email->Body = $msg;
$email->IsHTML(true);

$addresses = explode(',', $_POST['send-to']);
foreach ($addresses as $address) {
    $email->AddAddress($address);
}

if ($_FILES['file_attach']) {
    $email->AddAttachment($_FILES['file_attach']['tmp_name'], $_FILES['file_attach']['name']);
}

if (!empty($_POST[$required_field])) {
//     отправка сообщения
    if ($email->Send()) {
        $result = 1;
        echo json_encode($result);
    } else {
        $result = 0;
        echo json_encode($result);
    }

} else {
    $result = 0;
    echo json_encode($result);
}