<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи, язык WordPress и ABSPATH. Дополнительную информацию можно найти
 * на странице {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется сценарием создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'blog');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'pass');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется снова авторизоваться.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'jp[]xPn)pF?<p,4/A8&Z;2h}Eq+9[pS+?P@SuEN(=[$H16[#8T:R2X`pdlqP_pik');
define('SECURE_AUTH_KEY',  't1u-aZPL3)2H?_]J=+2+<-+)$->UW-hm(_Me{p2$1NKG]]tCSxD?U/oB.mRja`S5');
define('LOGGED_IN_KEY',    'u.ZS-{MX-GKxZPis{p2]Np:1_Z{v5C3- .+t_k_~Y0*ceCP_9]IN<OMR|.J=!QrO');
define('NONCE_KEY',        ':oW1PdI2T `..Y},I7ZtR>IzZ4]xwAPA)LOeq|G:Sw|f{{z+wq5SBuUsOvjG4%+M');
define('AUTH_SALT',        'k.8x:X<W&XnP$dKwgbUJAz+2{Nzy7(K`6bmMuy&@y#ub6+<PY@jV.C,twkjl2K|_');
define('SECURE_AUTH_SALT', '?HwaHzkte=$iIE.PBV9n z%9-57{q>X~3t+=F7zwhD,N2#1[d3&Rs%-OIu`3BfLU');
define('LOGGED_IN_SALT',   'ScJRSlYwbXi$E>,)D[||Tggjh@/iJ*^Ub}f.8XVUn^4w-GBwb;^Y{>_DZRvpb~$C');
define('NONCE_SALT',       'yuIVJOP7<]F=H3a+9D]C&u=[@4#OOrZ+#D|w~JA g8*4GR*|^^GZ:>cN&F5Q3OLD');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько блогов в одну базу данных, если вы будете использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_blog';

/**
 * Язык локализации WordPress, по умолчанию английский.
 *
 * Измените этот параметр, чтобы настроить локализацию. Соответствующий MO-файл
 * для выбранного языка должен быть установлен в wp-content/languages. Например,
 * чтобы включить поддержку русского языка, скопируйте ru_RU.mo в wp-content/languages
 * и присвойте WPLANG значение 'ru_RU'.
 */
define('WPLANG', 'ru_RU');

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Настоятельно рекомендуется, чтобы разработчики плагинов и тем использовали WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
