<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'junona');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'root');

/** Имя сервера MySQL */
define('DB_HOST', '127.0.0.1');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '}=H{E5U86:^#j~Eq8.>,71UO]gmG=$X^a.2yTs+-SOcy4Ro6Cxd=1I~|=F3zOoJ&');
define('SECURE_AUTH_KEY',  'ylPd%#{XQL[qmnT<MLp,$EmQ:y-7x,K?)oO)V%kk;.]Rq.Nj$>/4Ip:,nA&WT}qp');
define('LOGGED_IN_KEY',    '92.,^Lg;1jQ1rP^+&)2Rb*hQWbreIKTI?YorPJS/BgXRwVj8${O{LKt+l&<7:w3t');
define('NONCE_KEY',        '(qy|e~^1BD67{HrVp>Uf2~e<HN60:7f2[GL=UX/3_|xV(@D=RD;yXTX*`]a VZcY');
define('AUTH_SALT',        'um|Jwg^-WVeX.3-0T$*s<40D%x}ydGj[QcCD(sVGgSrv$^&+&3+9KdhYR@@P8)7Y');
define('SECURE_AUTH_SALT', ';EU_rV/c7#`S3LMS9jZ9]{vCkvJ{n$wI6:H};=Bem*2Tp0JeXdTmuT(c TPV`q$8');
define('LOGGED_IN_SALT',   'Y[&n2BS:s[BboBWmMWllZ~C]iW`;5_DNW~;f-|1m<JMnQ}/J{!BK/ohRu~mr+8>W');
define('NONCE_SALT',       '(6a4QzVIy9|g{mW2|Z#U(l/O7pR.y;1pu(aiPvE8Q)UJCwd^zvA{SVd@IbuJGX6S');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
