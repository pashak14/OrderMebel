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
define( 'DB_NAME', 'mebel' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', '192.168.0.111' );

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
define( 'AUTH_KEY',         'bD64o#n0?W<bOh(-t!kj]R.873D3|*6GF@F3+0O|2D!m5nN r+d*,=s)Sb% 4>e)' );
define( 'SECURE_AUTH_KEY',  'zUMN(~=EHe@9GH/PbLmlxw$7W=s@;q2)!J]xITSi+3E|!Muw2U^3/I/f8m)r_pfP' );
define( 'LOGGED_IN_KEY',    'M(JJ._bfL(*&q##JC|X4B#lX~qkbJ,C@Cw2)N-cc$[AM6H?v0T}0x}jCu^y(]>(N' );
define( 'NONCE_KEY',        ';Gc,4i( ufG$z#%!$/Y)]D*O;/`=rUNhp hmq}HDE(CE>b!ShJ,:VFr}ifJSmuhA' );
define( 'AUTH_SALT',        '/!|GXIiJwg9vMc ZbMc$2GMIm*;-U7+l(3-g.DJaY4BiynlX}sg{N]L9Au.riV&<' );
define( 'SECURE_AUTH_SALT', 'ieu5ud~zo(Q[ySIFjx6emLx!=UV0#jz[TA5rQah6T>_=;(0lQ.fE5mxCn7Di$C76' );
define( 'LOGGED_IN_SALT',   'j2tO6v>mqb8@+Dbtns}*PlLZHB&;,6bnCgUdOF>VMmpXSgD8%,epCeH9b~.L>7}Y' );
define( 'NONCE_SALT',       'mYQ|_yWo2Nc3SKoz!+ZaU=*<3<!fR*9PpMi,q%-kx5E3^|tU.Fx[g~KdK|<[[{DM' );

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
