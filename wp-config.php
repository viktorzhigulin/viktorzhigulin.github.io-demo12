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
define('DB_NAME', 'stylekit-lesson');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '*;%;;XW*wJ#^~-9CGN`C90?n=)pRlCSrbd]]--=HX$2*)-!7!xXf_~TWW;hWz9T-');
define('SECURE_AUTH_KEY',  ';5S]1-7%3DlTuDWXRx h,ecC2wQVP4;]lD%THnjh<Qf]M*yD{GOm|Qc89S4X))vG');
define('LOGGED_IN_KEY',    'Q/oU5Uu/]Ebq8Z1 ?F.#7i5MD9s`5eC6xL)MD!LUb:~!2NF+ii@!!)fBhe>)+:r.');
define('NONCE_KEY',        'xlrc~<lJF#*B$&*$T}e~ntCYj($]u(#&nD~.]u{fl@<_x.$/b4WxhJC/m.|6Wjth');
define('AUTH_SALT',        'gz~0IdHUuL9|+x]|_?gdmtRt>E:fSnQe}kxis*q@8H:E.:om=]{cy|_/3Qz>vKo0');
define('SECURE_AUTH_SALT', 'RPBK/Dd/m0NL1@m8Qde4Xo>qW?Lb0^,,hlA;J_.yS%9emZr|hN?ln0.*1q<#a*|H');
define('LOGGED_IN_SALT',   '-$?c7;mQ#E4Fw}W0kNBrWIIibL8QwUmz@exNUP9}>H|DBX`.CZD= [TW^P-%q_/3');
define('NONCE_SALT',       'eMZDL;+376nR}!898]w@o||Rd{QJm.^+.VH{1 r94b9H?w;nHc@T#-~ PMnL57Rf');

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
