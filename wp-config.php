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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '3ER-(b_YRqc1*1 QC0=VoI_YPZmTz}BoS2F5 >B-bE,kt0ICAl7RQzUaQAb{6[Aq' );
define( 'SECURE_AUTH_KEY',  'oP^/mN`,%O]7pi3:_@,odwjd-B;qYi-mtwL`Q/TIzUf=k=.,&Y]DN+UmkDJ9X)v%' );
define( 'LOGGED_IN_KEY',    '6O-]^[,tmzLw</cfwR1MQC`9taOMzYl%J[^AUKR&q}G?r@EC<(nnCotL56Eo/f6&' );
define( 'NONCE_KEY',        'dnaK*VlM=/d(PiKl[-Z/~,5D-W6nk;.h2q>JVTBn82P<)d9i8`F!r9j@_{ y{3Sg' );
define( 'AUTH_SALT',        'L}.Pr#&&?, 9:H=|Y;nVA5aQB+Im&V%}^rs~XA?/ggAOG.j1FpjW2jUcmKi@!ne7' );
define( 'SECURE_AUTH_SALT', ':!~vG?-YQ6+;v`+yyw-iG}N.|Q57*vB9[{@%@CLjNPp8q<;Lp$]2!ml,E~=z-_Dy' );
define( 'LOGGED_IN_SALT',   '&x<!RY<RWMw/[FzWTIC66.pGlo5y4/zEs=VJZBv!XmLt})?HBVm+Y~217$`YZB+2' );
define( 'NONCE_SALT',       '^Ro6/t+?%_5OaA@meuPD*r%wgq|qwkBhkm9T&;[IC^n`#R--<_x/ .l@ |;?Pv(6' );

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
