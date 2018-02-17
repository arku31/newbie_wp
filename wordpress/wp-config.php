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
define('DB_NAME', 'newbiewp');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '123');

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
define('AUTH_KEY',         '9+|,xg$+B}@p^ll+:sS4&sfulz`%GC]veg?B1oYbJ_7SbU#6li`!jkPB9j$4]OgK');
define('SECURE_AUTH_KEY',  'Sa<c O7?|N~3epd]L5k</#9=Bd2UnQ>_6j=bV*2S`rV5$kQ$2$!!EA2J)s:j6eMb');
define('LOGGED_IN_KEY',    'o ksG/U A5d79ak;T{#GTyKcD[<KG:I,QvG}V+MNa`Eh!?*js>[zj8-[[[l/iB`(');
define('NONCE_KEY',        'o1psseu[}</gOB>#I+F0)QJf,k|C8=j+o(XhF~kh<zuj@2!&]Ti9soTX]][bela)');
define('AUTH_SALT',        '2[[0UwA|grRxG+gFR`vO0`.Hui&PVAjHzY/66m@[=}?Axdf!&b&$abOv9^LKksO+');
define('SECURE_AUTH_SALT', '> W@q&Bl%{}~sjO@F&1Dgd?#0*fkQ~pB4;s@2Tt+[Y6]3Mkk.5|Bi]qf}z@|H[om');
define('LOGGED_IN_SALT',   'Fw[KK@Oc<2~U@Q*iIPjGhv)`)<a.y9k=`.6.bK=MH^gc,xtW8dVqaV-f7<2X2cQ1');
define('NONCE_SALT',       'EKZ~-F5PPpPb)|Cu-UAlGKJWY.E/`2j__,u}IZz|}pi HyJk)Auwd0&_LQjpKC(L');

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
