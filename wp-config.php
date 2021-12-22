<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wp' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '>5p3 &.AE{c.5:fN0=JfA=LP[TVk`v=>&5M70?xc@K.Jqu_7@W><4`S*/o@ltCap' );
define( 'SECURE_AUTH_KEY',  'HiogT@)QcdKU0Q[kmo,7A?MU3$z<WiKF3h.x+s^v2dja?j(i(^I$0c<?,OM]Wun{' );
define( 'LOGGED_IN_KEY',    'baD.f*C_P#$RawFkpzb)&P?|zt&SeXktF4~9#I7pGQy+SkQ8D7,fR2~%*p6m}Ps8' );
define( 'NONCE_KEY',        'v4ASnXw?m]_ViX5[u^J1OA!$F a-vl9 zI4^1jh72eIc(@B*V80~!M_jT]ES!Y{O' );
define( 'AUTH_SALT',        '2pAnp+i>iZ[{z<5P,^iz7FU!`<f^LG]mN_.hdrVd`^K1*qSMiBef0oWTT* iD$VA' );
define( 'SECURE_AUTH_SALT', '!t`.4DI.hJSBY:(><_1P2k06.4+c24{Ews{NVv2_ V_MWkm|[nepyW-]kH:(e}P#' );
define( 'LOGGED_IN_SALT',   'c%YqrSX&,Y~W_s: 18Ha)BVa:K_5{P0Hx7XAVJ.BmkxPgvL4mV&%C)_dFOt+ *x{' );
define( 'NONCE_SALT',       '@ GMpc<,I1z}LSuh-;W:`2XuyL!BkkS|m{<9J%:sBt/?{iShIk4|/-MfVHHUm3qd' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
