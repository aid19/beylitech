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
define( 'DB_NAME', 'beylitech' );

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
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'E&pUnT`8QuUG? p!6tt6o/h1zJW/iwwzrp@O*qd,H%,IKx1xU76C>>8f7TK_I%EE' );
define( 'SECURE_AUTH_KEY',  'mm%><IL(C)`p&>Tmo$7@Alh`Bh|ISXb_H/KoI3<tY{D3,R5r`/`XA-Wz.i!jQwoy' );
define( 'LOGGED_IN_KEY',    'T1L+4ub:b98+_yztf8j$+]nj%%~btU52KK:_sxsR+JqpzU@zX=:HI$/Q,9-LdL,q' );
define( 'NONCE_KEY',        'ZKuV%Y$VB4@U+3e_p).:aL4`e%oB@KUOk&b =hmg*SJTtvmZ7($K(rS[u<@gr%}T' );
define( 'AUTH_SALT',        '190oA^lkM!4*A3/CPWk_xx71mtyi$Q?Vy2#9ZqZV. /JFmnt&U@y+[t=|z-N=y(S' );
define( 'SECURE_AUTH_SALT', 'hb!#SPdX{He6bJ[.w=k=Fi_H7UyMo-MwRZEztrf,[,JRu`X^pqQOcv`q=jRQO[ W' );
define( 'LOGGED_IN_SALT',   'y&.=T[W.i<Q;/SS# L2zOlu*ZE)pM1^ rtICCe,Ps|0oy[FDyu3<yvmfa&Nh#D:Q' );
define( 'NONCE_SALT',       '=Z<(MxnPjA>67<)Opr`YB_U3G+Y;3()%(EW/e/ TU7fH=I,dCLozcOtBX}Xl.bx:' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
