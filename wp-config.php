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
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'testtvoesedlo' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', '192.168.155.181' );

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
define( 'AUTH_KEY',         'Ep9EJ:eWku>cnz(hdU|8MD<(ml~ Gy 1b?;p)KdA}pSy6Y)]r)3m&x)$r*Q(.8 {' );
define( 'SECURE_AUTH_KEY',  '[.4Cn.EpZQ(t7xbzRt$t*ZurOFe,}w,Et!Rr.Sk(}?:m:kg^ elQ]Q?FSA2}N=Kk' );
define( 'LOGGED_IN_KEY',    'vov{y;(ylD`FZ8i}0&ud,UcqWih8(douuF>-x[9pZ0!vs):*mP^=-%N)I>t1:QdW' );
define( 'NONCE_KEY',        'vY~/uF&Y]qj&b@c@uI++_r7_X_XB&dt;|913$*T48@ZX.enB<grP}_CFRyWL-M:H' );
define( 'AUTH_SALT',        '1=>^:eP0D` D[0MS s!--*U:=/y,z)gNb*u?gt[sGX=3]N^6}hUXN-QyDRW;B<?3' );
define( 'SECURE_AUTH_SALT', '_)T-6oO;N>e2cf7;hd>Cej;r%z!W2B D<LUM(s;l#3r1YX$R(1ZV9=abSlQ#%[Gs' );
define( 'LOGGED_IN_SALT',   'FnH;Z?z+c.~163(1+9])}k;u/-2p4U+=Z#*,8GDk!y}49G,M825z5MUtt|K:FntJ' );
define( 'NONCE_SALT',       'ae`=H#e Gb5D0 $tR^QPK tw8h{2R(lCLOr`lVH>|VIgnm]^ufm%eqF_+h RaF`{' );

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
