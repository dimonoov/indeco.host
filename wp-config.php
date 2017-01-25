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
define('DB_NAME', 'cc55158_molotok');

/** Имя пользователя MySQL */
define('DB_USER', 'cc55158_molotok');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'SQRT14916253649');

/** Имя сервера MySQL */
define('DB_HOST', '92.53.125.77');

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
define('AUTH_KEY',         '6me1m22|6AsR%1j%q,Q^0E!0~ Xcba8LH)n(])8:lYFboh/):.<If+ RDR/U=sQ}');
define('SECURE_AUTH_KEY',  '6WlU1_2vPN$4dH[c`4<`IDb>2vPed(n^3%azvUe9$-|,4smH~9*>@^_7uL,p{v2E');
define('LOGGED_IN_KEY',    'gj$l!rt!2VZ/]BwK~(ON!L0?x)N5wiB>v5RRRu.ql9zLwG2N66At?N%RwMS/tb$Y');
define('NONCE_KEY',        'fD[`+EhI_d<Zo%E.6<K<0>iE[ee-u|EZN$lgqZJs$G#qp^/W`W3~q46M/mp~=Eq-');
define('AUTH_SALT',        '$r.:l3IB%.f}1M:-+3zOu{+y-y&wapI8#4-(Js0#7qOm:mN8_1Wvzq^1=D}OI6_B');
define('SECURE_AUTH_SALT', 'UJ ?~-]zOag3GW?Od_#lgk-wM48*]7S/+]mGzKF<AXZT<;R#LG5q+!jdPLl[-B?2');
define('LOGGED_IN_SALT',   'Mua6K+z!H`tTG=mrl(ZX[U{3^}*R!tnWj@Ebfo)l<(X(~ED0}T$hZ<dOx50sQI+T');
define('NONCE_SALT',       ',Prk*biIza>IFtXB/]+7c!{Yr?F2WSJAI?Dm:a7mh~8}sD`tDdEcoBdIp/J+dX_w');

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
