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
define( 'DB_NAME', 'new-wp' );

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
define( 'AUTH_KEY',         '5k;)(Rr7ERVwGv(4_5cENn$WP[K}n5kSYu#zxUu$; ]+kZSPQ AFl9Lgg7W:DKyO' );
define( 'SECURE_AUTH_KEY',  'Hs;lODH@C^{gauPS@ a[ZP:|kzICc+^*htqENQhaSYwAm(oYFKo1Q//y}`M+3!.Y' );
define( 'LOGGED_IN_KEY',    'Ce=O}U4XGH&sv+&k0(6-.@P0w89Mj)Avy-U]fnVl0%_!cT^uTN$FzP?4bwJ#3*]-' );
define( 'NONCE_KEY',        '/0Rj>n61q6>}7N5I.LbTM+XzQJZ19D`q]D^IHBL.+CxXjq=!!K%Ht/QR M,YAVC<' );
define( 'AUTH_SALT',        'dKT;?iU-XcQtd0cM?S%E2f/=8uE}RTmHld{[Pz#B/yC/xF_jYStWQgu z+D+KD;P' );
define( 'SECURE_AUTH_SALT', 'x( wjrMegpx[/khb72@Vuo~A.be*ZxVN2S[.# $v/*X?t=1I]p$}cc~5:CC3<L4x' );
define( 'LOGGED_IN_SALT',   '`BDatE/rOu<P<EHK1v}pIr5E_|,|r2/bZgA9(;Ox_.nlAXQFjG+qf,lc1u!=Y)e9' );
define( 'NONCE_SALT',       'f v^2l!W<a64!e(f,:<~xIV5[<vPI2?j_`(]2^Z0?(qS9xadzZ7LWQ%j;VRQ`0D)' );

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
